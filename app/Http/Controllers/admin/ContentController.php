<?php

namespace App\Http\Controllers\admin;

use App\Content;
use App\Category;
use Illuminate\Http\Request;
use Storage;
use App\ContentStepMedia;
use App\ContentCategory;
use App\ContentSteps;
use App\User;
use Response;

class ContentController extends Controller
{

    public function __construct()
    {
        $this->getrecord        = '12';
        $this->category         = new Category();
        $this->contentCategory  = new ContentCategory();
        $this->content          = new Content();
        $this->contentStepMedia = new ContentStepMedia();
        $this->contentSteps     = new ContentSteps();
        $this->user             = new User();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $content = $this->content->where('main_title','!=','')->where('status','!=','2')->orderBy('created_at', 'desc')->paginate($this->getrecord);

        if($request->ajax()){
            return view('admin.content.ajaxlist',array('content'=>$content));
        }else{
            $categories = $this->category->categoryParentChildTree();
            //print_r($categories);
            return view('admin.content.list',array('title' => 'Content List','categories'=>$categories,'content'=>$content));
        }
    }

    public function search(Request $request){

        $content = $this->content->where('main_title','!=','')->where('status','!=','2');

        if(isset($request->search) && !empty($request->search)){
            $content = $content->where('main_title','LIKE','%'.$request->search.'%');
            $content = $content->orWhere('description','LIKE','%'.$request->search.'%');
            $content = $content->orWhere('tags','LIKE','%'.$request->search.'%');
            $content = $content->orWhere('introduction','LIKE','%'.$request->search.'%');
        }
        if(isset($request->category_id) && !empty($request->category_id)){
            $content=$content->where('category_id', $request->category_id);
        }
        $content = $content->orderBy('created_at', 'desc')->paginate($this->getrecord);

        return view('admin.content.ajaxlist',array('content'=>$content));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guidArr = array();
        $guidArr['status'] = '3';
        $content = $this->content->create($guidArr);
        return redirect(route('admin.content.edit',['content' => $content ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'content_step.*.step_title.required' => 'The title field is required.'
        ];
        $request->validate([
            'content_step.*.step_title' => 'required'
        ],$messages);

        try {
            return redirect(route('organization.list'));
        }catch (ModelNotFoundException $exception) {
            $request->session()->flash('alert-danger', $exception->getMessage());
            return redirect(route('organization.list'));
        }
    }

    public function img_upload(Request $request)
    {
        $allowedExtensions = implode(',', array_merge(config('default.image_extensions'), config('default.audio_extensions')));
        //dd($request->all());
        if($request->unique_id && $request->file('file_image')){
            $file=$request->file('file_image');

            $request->validate([
                'file_image' => 'mimes:'.$allowedExtensions.'|max:2048'
            ]);

            $file_name = $file->getClientOriginalName();
            $fileslug = pathinfo($file_name, PATHINFO_FILENAME);
            $imageName = md5($fileslug.time());
            $imgext = $file->getClientOriginalExtension();
            $path = 'content/'.$request->content_id.'/step_media/'.$imageName.".".$imgext;
            $fileAdded = Storage::disk('public')->putFileAs('content/'.$request->content_id.'/step_media/',$file,$imageName.".".$imgext);

            if($fileAdded){
                $getStepId = $this->contentSteps->where('step_key',$request->unique_id)->first();
                $guidMediaArr = array();
                $guidMediaArr['step_key'] = $request->unique_id;
                $guidMediaArr['step_id'] = ($getStepId)? $getStepId->id : NULL;
                $guidMediaArr['media'] =  $path;
                $media = $this->contentStepMedia->create($guidMediaArr);
                return Response::json(['status' => true, 'message' => 'Media uploaded.', 'id' => $media->id]);
            }
            return Response::json(['status' => false, 'message' => 'Something went wrong.']);
        }

        return Response::json(['status' => false, 'message' => 'Something went wrong.']);
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
        //dd($media);
        if($media){

            if(Storage::disk('public')->delete($media->media)){

               $media->delete();
               return Response::json(['status' => true, 'message' => 'Media deleted.']);
            }
            return Response::json(['status' => false, 'message' => 'Something went wrong.']);
        }
        return Response::json(['status' => false, 'message' => 'Something went wrong.']);
    }

    public function removeStep(Request $request)
    {

        $steps = $this->contentSteps->where('step_key',$request->step_key)->first();

        if($steps){

            $medias = $this->contentStepMedia->where('step_id', $steps->id)->get();
            foreach ($medias as $media) {
                Storage::deleteDirectory($media->media);
            }
            $this->contentStepMedia->where('step_id', $steps->id)->delete();
            $steps->delete();
            return Response::json(['status' => true, 'message' => 'Step deleted.']);
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
        return view('admin.content.detail',array('title'=>'Content Details','content'=>$content));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        $categories   = $this->category->categoryParentChildTree();
        $users        = $this->user->get();
        $content_step = $this->contentSteps->where('content_id',$content->id)->with('media')->orderBy('step_no','asc')->get();

        return view('admin.content.add',array('title' => 'Add Content','categories'=> $categories, 'content' => $content, 'users' => $users, 'content_step' => $content_step));
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
        //dd($request->all());
        if(!$content){
            abort(404);
        }

        $messages = [
            'content_step.*.step_title.required' => 'The title field is required.'
        ];

        if($request->submit == 'Save As Draft'){

            $request->validate([
                'main_title' => 'required'
            ]);

        }else{

            $request->validate([
                'main_title'   => 'required',
                'description'  => 'required',
                'category_id'  => 'required',
                'user_id'      => 'required',
                'posted_at'    => 'required',
                'published_at' => 'required',
                'content_step.*.step_title' => 'required'
                //'content_step.*.step_description' => 'required',
                //'content_step.*.stepfilupload.*' => 'mimes:jpg,jpeg,png,bmp'
            ], $messages);
        }

        $content->main_title              = $request->main_title;
        $content->category_id             = $request->category_id;
        $content->user_id                 = $request->user_id;
        $content->description             = $request->description;
        $content->website                 = $request->has('website') ? $request->website : '';
        $content->posted_at               = $request->has('posted_at') ? date("Y-m-d H:i:s", strtotime($request->posted_at)) : '';
        $content->published_at            = $request->has('published_at') ? date("Y-m-d H:i:s", strtotime($request->published_at)) : '';
        $content->tags                    = $request->tags;
        $content->introduction            = $request->introduction;
        $content->introduction_video_type = $request->vid_link_type;
        $content->introduction_video_link = $request->vid_link_url;
        $content->status = ($request->submit == 'Save As Draft')? '3' : '1';

        // if(isset($request->category) && is_array($request->category)){
        //     $this->contentCategory->where('content_id', $content->id)->whereNotIn('category_id', $request->category)->delete();
        //     foreach ($request->category as $key => $cate) {

        //         $checkCat = $this->contentCategory->where('content_id', $content->id)->where('category_id', $cate)->count();
        //         if($checkCat == 0){
        //             $cateArr = array();
        //             $cateArr['content_id'] = $content->id;
        //             $cateArr['category_id'] = $cate;
        //             $this->contentCategory->create($cateArr);
        //         }
        //     }
        // }

        if(isset($request->content_step) && is_array($request->content_step)){

            foreach ($request->content_step as $key1 => $step) {

                $stepArr = array();
                $stepArr['title'] = $step['step_title'];

                if($step['step_video_media'] != ''){
                    $stepArr['video_type'] = $step['step_video_type'];
                    $stepArr['video_media'] = $step['step_video_media'];
                }

                $checkstep = $this->contentSteps->where('step_key', $step['step_key'])->where('content_id',  $content->id)->first();

                if($checkstep){

                    //$stepData = $this->contentSteps->where('step_key', $step['step_key'])->where('content_id',  $content->id)->update($stepArr);
                    $checkstep->update($stepArr);
                    $this->contentStepMedia->where('step_key',$checkstep->step_key)->update(['step_id' => $checkstep->id]);
                }else{

                    $stepArr['step_key'] = $step['step_key'];
                    $stepArr['content_id'] = $content->id;
                    //dd($stepArr);
                    $stepData = $this->contentSteps->create($stepArr);
                    $this->contentStepMedia->where('step_key',$step['step_key'])->update(['step_id' => $stepData->id]);
                }

            }
        }

        if ($content->save()) {
            $request->session()->flash('alert-success', 'Content updated successfully.');
        }
        return redirect(route('admin.content.list'));
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
            return redirect(route('admin.content.list'));
        }catch (ModelNotFoundException $exception) {
            $request->session()->flash('alert-danger', $exception->getMessage());
            return redirect(route('admin.content.list'));
        }
    }
}
