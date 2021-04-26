<?php

namespace App\Http\Controllers;

use App\Content;
use App\Category;
use App\SocialAccount;
use App\ContentTags;
use App\ContentCategoryTags;
use App\UserPreferencesGroupTags;
use App\ContentRating;
use App\ContentRatingVote;
use App\ContentAction;
use App\ContentView;
use App\User;
use Illuminate\Http\Request;
use Response;
use Auth;
use PDF;
use Str;
use Dompdf\Dompdf;
use Storage;

class ContentController extends Controller
{
    public function __construct()
    {
        $this->getrecord        = '12';
        $this->category         = new Category();
        $this->socialAccount    = new SocialAccount();
        $this->content          = new Content();
        $this->contentTags      = new ContentTags();
        $this->contentCategoryTags = new ContentCategoryTags();
        $this->contentRatings   = new ContentRating();
        $this->user             = new User();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $content = Content::with('content_tags','content_category')->where('main_title','!=','')->where('user_id', Auth::user()->id)->where('status','=','1')->orderBy('created_at', 'desc')->paginate($this->getrecord);

        if($request->ajax()){
            return view('content.ajaxlist',array('content'=>$content));
        }else{
            $categories = Category::where('status','1')->orderBy('name','asc')->get();

            return view('content.list',array('title' => 'Content List','categories'=>$categories,'content'=>$content));
        }
    }

    public function search(Request $request){

        $content = $this->content->where('main_title','!=','')->where('user_id', Auth::user()->id)->where('status','=','1');
        $keyword = $request->search;

        if($keyword && !empty($keyword)){
            $content = $content->where('main_title','LIKE','%'.$keyword.'%');
            $content = $content->orWhere('description','LIKE','%'.$keyword.'%');
            $content = $content->orWhereHas('content_tags', function ($query) use ($keyword)
            {
                $query->where('name', 'LIKE', '%'.$keyword.'%');
            });
        }

        if(isset($request->category_id) && !empty($request->category_id)){
            $content=$content->where('category_id', $request->category_id);
        }

        $content=$content->orderBy('created_at', 'desc')->paginate($this->getrecord);

        return view('content.ajaxlist',array('content'=>$content));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $guidArr = array();

        if($request->has('saId'))
        {
            $guidArr['social_account_id'] = decodeHashId($request->get('saId'));
        }

        $guidArr['status'] = '3';
        $content = $this->content->create($guidArr);
        return redirect(route('user.content.edit',['content' => $content]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $encodedUserId = encodeHashId($content->user_id);
            $encodedSocialAccountId = encodeHashId($content->social_account_id);
            return redirect(route('user.account.contents', [$encodedSocialAccountId, $encodedUserId]));
        }catch (ModelNotFoundException $exception) {
            $encodedUserId = encodeHashId($content->user_id);
            $encodedSocialAccountId = encodeHashId($content->social_account_id);
            $request->session()->flash('alert-danger', $exception->getMessage());
            return redirect(route('user.account.contents', [$encodedSocialAccountId, $encodedUserId]));
        }
    }

    public function mainImgUpload(Request $request, $id)
    {
        $file            = $request->file('file');
        $imageExtensions = implode(',', config('default.image_extensions'));

        if($file && $id){

            $request->validate([
                'file' => 'mimes:'.$imageExtensions.'|max:2048'
            ]);

            $file_name = $file->getClientOriginalName();
            $fileslug = pathinfo($file_name, PATHINFO_FILENAME);
            $imageName = md5($fileslug.time());
            $imgext = $file->getClientOriginalExtension();
            $path = 'content/'.$id.'/'.$imageName.".".$imgext;
            $fileAdded = Storage::disk('public')->putFileAs('content/'.$id.'/',$file,$imageName.".".$imgext);

            if($fileAdded){
                $contentData = $this->content->find($id);
                Storage::disk('public')->delete($contentData->main_image);
                $media = $this->content->where('id',$id)->update(['main_image' => $path]);
                return Response::json(['status' => true, 'message' => 'Media uploaded.']);
            }
            return Response::json(['status' => false, 'message' => 'Something went wrong.']);
        }

        return Response::json(['status' => false, 'message' => 'Something went wrong.']);
    }

    public function removeImage(Request $request)
    {
        $media = $this->contentStepMedia->find($request->imageId);

        if($media){

            if(Storage::disk('public')->delete($media->media)){

               $media->delete();
               return Response::json(['status' => true, 'message' => 'Media deleted.']);
            }
            return Response::json(['status' => false, 'message' => 'Something went wrong.']);
        }
        return Response::json(['status' => false, 'message' => 'Something went wrong.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        return view('content.detail',array('title'=>'Content Details','content'=>$content));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        $categories     = $this->category->categoryList();
        $socialAccounts = $this->socialAccount->where('user_id', Auth::user()->id)->get();

        $contentTags    = $this->contentTags->where('content_id', $content->id)->orderBy('name','asc')->pluck('name');
        $contentTags    = $contentTags->count() > 0 ? implode(',', $contentTags->toArray()) :  '';


        $contentCategoryTags = $this->contentCategoryTags->where('content_id', $content->id)->orderBy('name','asc')->pluck('name');
        $contentCategoryTags = $contentCategoryTags->count() > 0 ? implode(',', $contentCategoryTags->toArray()) :  '';

        if($content->type == 2)
        {
            $videoLength = explode(':', $content->video_length);
            $content->video_length_h = isset($videoLength[0]) ? $videoLength[0] : 0;
            $content->video_length_m = isset($videoLength[1]) ? $videoLength[1] : 0;
            $content->video_length_s = isset($videoLength[2]) ? $videoLength[2] : 0;
        }

        if($content->type == 3)
        {
            $podcastLength = explode(':', $content->podcast_length);
            $content->podcast_length_h = isset($podcastLength[0]) ? $podcastLength[0] : 0;
            $content->podcast_length_m = isset($podcastLength[1]) ? $podcastLength[1] : 0;
            $content->podcast_length_s = isset($podcastLength[2]) ? $podcastLength[2] : 0;
        }

        return view('content.add',array('title' => 'Add Content','categories'=> $categories, 'content' => $content, 'contentTags' => $contentTags, 'contentCategoryTags' => $contentCategoryTags));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        if(!$content){
            abort(404);
        }

        $messages = array();

        $request->validate([
            'main_title'        => 'required',
            'description'       => 'required',
            'category_id'       => 'required',
            'posted_at'         => 'required',
        ], $messages);

        if(!empty($request->tags))
        {
            $tags = explode(',', $request->tags);

            foreach($tags as $tag)
            {
                $params      = array('content_id' => $content->id, 'name' => $tag);
                $contentTags = ContentTags::updateOrCreate($params);
            }

            ContentTags::whereNotIn('name', $tags)->delete();
        }

        if(!empty($request->category_tags))
        {
            $categoryTags = explode(',', $request->category_tags);

            foreach($categoryTags as $ctag)
            {
                $cparams      = array('content_id' => $content->id, 'name' => $ctag);
                $contentCategoryTags = ContentCategoryTags::updateOrCreate($cparams);
            }

            ContentCategoryTags::whereNotIn('name', $categoryTags)->delete();
        }

        // $social_account_id = $request->social_account_id;

        // $socialAccount = $this->socialAccount->find($social_account_id);

        // if(!isset($socialAccount->id))
        // {
        //     $socialAccount = $this->socialAccount->create(array('user_id' => Auth::user()->id, 'name' => $social_account_id));
        // }

        $videoLength   = $request->get('type') == 2 ? ($request->video_length_h > 0 ? sprintf("%02d", $request->video_length_h).':' : '00:').($request->video_length_m > 0 ? sprintf("%02d", $request->video_length_m).':' : '00:').($request->video_length_s > 0 ? sprintf("%02d", $request->video_length_s) : '00') : '';
        $podcastLength = $request->get('type') == 3 ? ($request->podcast_length_h > 0 ? sprintf("%02d", $request->podcast_length_h).':' : '00:').($request->podcast_length_m > 0 ? sprintf("%02d", $request->podcast_length_m).':' : '00:').($request->podcast_length_s > 0 ? sprintf("%02d", $request->podcast_length_s) : '00') : '';

        $content->type                    = $request->type;
        $content->main_title              = $request->main_title;
        $content->category_id             = $request->category_id;
        $content->user_id                 = Auth::user()->id;
        $content->description             = $request->description;
        $content->number_of_images        = $request->get('type') == 1 ? $request->number_of_images : 0;
        $content->video_length            = $request->get('type') == 2 ? $videoLength : '';
        $content->podcast_length          = $request->get('type') == 3 ? $podcastLength : '';
        $content->number_of_words         = $request->get('type') == 4 ? $request->number_of_words : 0;
        $content->posted_at               = $request->has('posted_at') ? date("Y-m-d H:i:s", strtotime($request->posted_at)) : '';
        $content->external_link           = $request->external_link;
        $content->status                  = '1';

        $encodedUserId = encodeHashId($content->user_id);
        $encodedSocialAccountId = encodeHashId($content->social_account_id);

        if ($content->save()) {
            $request->session()->flash('alert-success', 'Content has been updated successfully.');
        }
        return redirect(route('user.account.contents', [$encodedSocialAccountId, $encodedUserId]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content, Request $request)
    {
        try {
            if(!$content){
                return abort(404) ;
            }

            if ($content->delete()) {
                $request->session()->flash('alert-success', 'Content deleted successfully.');
            }

            $encodedUserId = encodeHashId($content->user_id);
            $encodedSocialAccountId = encodeHashId($content->social_account_id);

            return redirect(route('user.account.contents', [$encodedSocialAccountId, $encodedUserId]));
        }catch (ModelNotFoundException $exception) {
            $request->session()->flash('alert-danger', $exception->getMessage());

            $encodedUserId = encodeHashId($content->user_id);
            $encodedSocialAccountId = encodeHashId($content->social_account_id);

            return redirect(route('user.account.contents', [$encodedSocialAccountId, $encodedUserId]));
        }
    }

    public function deleteContent(Request $request)
    {
        $content = $this->content->find($request->content_id);

        if($content){

            $content->delete();

            return Response::json(['status' => true, 'message' => 'Content has been deleted successfully.']);
        }

        return Response::json(['status' => false, 'message' => 'Something went wrong while deleting content.']);
    }

    // public function getContentDetails(Request $request)
    // {
    //     $content = $this->content->find($request->content_id);

    //     if(isset($content->id)){

    //         $html = view('content.ajax-content-data',array('content'=>$content))->render();

    //         return Response::json(['status' => true, 'html' => $html]);
    //     }

    //     return Response::json(['status' => false, 'message' => 'Something went wrong while deleting content.']);
    // }

    public function goToContentDetails(Request $request)
    {
        $content = $this->content->find($request->content_id);

        if(isset($content->id)){

            ContentView::create(array('user_id' => Auth::user()->id, 'content_id' => $request->content_id));

            $count = $content->views_count;

            return Response::json(['status' => true, 'count' => $count, 'url' => $content->external_link]);
        }

        return Response::json(['status' => false, 'message' => 'Something went wrong while deleting content.']);
    }

    public function saveRating(Request $request)
    {
       if(!isset(Auth::user()->id))
       {
            return Response::json(['status' => false, 'message' => 'Please login to give rating.']);
       }

       $rating = ContentRating::create([
           'content_id' => $request->get('content_id'),
           'user_id'    => Auth::user()->id,
           'rating'     => $request->get('rating'),
           'title'      => $request->get('ratingText'),
       ]);

       if(isset($rating->id))
       {
            $ratingsCount = ContentRating::where('content_id', $request->get('content_id'))->count();

            return Response::json(['status' => true, 'message' => 'Rating has been saved successfully.', 'ratingsCount' => $ratingsCount]);
       }

       return Response::json(['status' => false, 'message' => 'Something went wrong.']);
    }

    public function saveRatingVote(Request $request)
    {
       if(!isset(Auth::user()->id))
       {
            return Response::json(['status' => false, 'message' => 'Please login to vote rating.']);
       }

       $ratingVote = ContentRatingVote::create([
           'rating_id' => $request->get('rating_id'),
           'user_id'   => Auth::user()->id,
           'vote'      => $request->get('type')
       ]);

       if(isset($ratingVote->id))
       {
            return Response::json(['status' => true, 'message' => 'Rating vote has been saved successfully.']);
       }

       return Response::json(['status' => false, 'message' => 'Something went wrong.']);
    }

    public function saveAction(Request $request)
    {
       if(!isset(Auth::user()->id))
       {
            return Response::json(['status' => false, 'message' => 'Please login to save action.']);
       }

       $action = ContentAction::create([
           'content_id' => $request->get('content_id'),
           'user_id'    => Auth::user()->id,
           'action'     => $request->get('action')
       ]);

       if(isset($action->id))
       {
            $actionCount = ContentAction::where('content_id', $request->get('content_id'))->where('action', $request->get('action'))->count();

            return Response::json(['status' => true, 'message' => 'The content action has been saved successfully.', 'actionCount' => $actionCount]);
       }

       return Response::json(['status' => false, 'message' => 'Something went wrong.']);
    }

    public function getRatings(Request $request){

        $contentRatings = $this->contentRatings;
        $contentId = $request->get('content_id');

        $contentRatings=$contentRatings->where('content_id', $contentId)->orderBy('created_at', 'desc')->paginate(5);

        return view('content.ajax-rating-list',array('contentRatings' => $contentRatings));
    }

    public function getTabsContent(Request $request){

        $items = [];
        $contentId = $request->get('content_id');

        $tab = $request->get('tab');

        if($tab == 'rated')
        {
            if(Auth::user()->user_type == '1')
            {
                $items = $this->content->where('user_id', Auth::user()->id)
                ->whereExists(function ($query) {
                    $query->select("content_ratings.id")
                          ->from('content_ratings')
                          ->whereRaw('content_ratings.content_id = content.id');
                })
                ->paginate(6);
            }
            else
            {
                $items = $this->content->with('content_ratings')->whereHas('content_ratings', function ($query)
                {
                $query->where('user_id', Auth::user()->id);
                // $query->orderBy('rating', 'asc');
                })->paginate(6);
            }

        }

        if($tab == 'matched')
        {
            $loggedInUserGroupIds = Auth::user()->user_groups()->pluck('id')->toArray();
            $loggedInUserTags     = UserPreferencesGroupTags::whereIn('group_id', $loggedInUserGroupIds)->pluck('name')->toArray();

            $items = $this->content->whereHas('content_tags', function ($query) use ($loggedInUserTags)
            {
              $query->whereIn('name', $loggedInUserTags);
            })->orderBy('created_at', 'desc')->paginate(6);
        }

        return view('content.ajax-tabs-content-list',array('items' => $items));
    }
}
