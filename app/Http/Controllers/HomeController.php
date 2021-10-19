<?php

namespace App\Http\Controllers;
use Auth;
use App\Content;
use App\Category;
use App\ContentRating;
use App\UserFollower;
use Illuminate\Http\Request;
use Response;
use Carbon\Carbon;
use Hashids;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth'); // Commented by Mayur for coming soon page
        $this->content        = new Content();
        $this->category       = new Category();
        $this->contentRatings = new ContentRating();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if(isset(Auth::user()->id))
        {
            // Write logic for dashboard and profile page redirect
            return redirect(route('profile.edit'));
        }

        return view('home');
    }

    /**
     * Get the latest contents.
     *
     * @return \Illuminate\View\View
     */
    public function getLatestResults()
    {
        $items = $this->content->where('status', '1')->orderBy('posted_at', 'desc')->limit(10)->get();

        $followingIds = [];
        $followerIds  = [];
        if(isset(Auth::user()->id))
        {
            $followingIds = UserFollower::where('user_id', Auth::user()->id)->pluck('linked_user_id')->toArray();
            $followerIds  = UserFollower::where('linked_user_id', Auth::user()->id)->pluck('user_id')->toArray();
        }

        return view('results', array('items' => $items, 'followingIds' => $followingIds, 'followerIds' => $followerIds));
    }

    /**
     * Get the trending contents.
     *
     * @return \Illuminate\View\View
     */
    public function getTrendingResults()
    {
        $followingIds = [];
        $followerIds  = [];
        if(isset(Auth::user()->id))
        {
            $followingIds = UserFollower::where('user_id', Auth::user()->id)->pluck('linked_user_id')->toArray();
            $followerIds  = UserFollower::where('linked_user_id', Auth::user()->id)->pluck('user_id')->toArray();
        }

        $items = $this->content->where('status', '1')->orderBy('posted_at', 'desc')->limit(10)->get();

        return view('results', array('items' => $items, 'followingIds' => $followingIds, 'followerIds' => $followerIds));
    }

    /**
     * Get Catego.
     *
     * @return \Illuminate\View\View
     */
    public function getCategories()
    {
        $categories = $this->category->where('status', '1')->orderBy('name', 'asc')->get();

        return view('categories', array('categories' => $categories));
    }

    /**
     * Get the Contents By Category.
     *
     * @return \Illuminate\View\View
     */
    public function getContentsByCategory($id)
    {
        $id = Hashids::decode($id);

        $category = $this->category->where('id' , $id)->first();
        $categoryName = isset($category->id) ? $category->name : '';

        $query = $this->content;
        $query = $query->where('status', '1');
        $query = $query->where('category_id', $id);

        $results = $query->orderBy('main_title', 'asc')->get();

        return view('category_contents', array('results' => $results, 'categoryName' => $categoryName));
    }

    /**
     * Get the search results.
     *
     * @return \Illuminate\View\View
     */
    public function getResults(Request $request)
    {
        $keyword = trim($request->search);

        $followingIds = [];
        $followerIds  = [];
        if(isset(Auth::user()->id))
        {
            $followingIds = UserFollower::where('user_id', Auth::user()->id)->pluck('linked_user_id')->toArray();
            $followerIds  = UserFollower::where('linked_user_id', Auth::user()->id)->pluck('user_id')->toArray();
        }

        $query = $this->content->select('content.*');
        $query = $query->join('social_accounts', 'social_accounts.id', '=', 'content.social_account_id');
        $query = $query->join('users', 'users.id', '=', 'content.user_id');
        $query = $query->where('content.status', '1');
        $query = $query->where('content.is_published', '1');
        $query = $query->whereDoesntHave('content_user_remove');

        if(isset($keyword) && !empty($keyword)) {
            $query = $query->where(function ($query) use ($keyword)
            {
                $query = $query->where('content.main_title','LIKE','%'.$keyword.'%');
                $query = $query->orWhere('content.description','LIKE','%'.$keyword.'%');
                $query = $query->orWhereHas('content_tags', function ($query) use ($keyword)
                {
                    $query->where('name', 'LIKE', '%'.$keyword.'%');
                });
                $query = $query->orWhereHas('content_category_tags', function ($query) use ($keyword)
                {
                    $query->where('name', 'LIKE', '%'.$keyword.'%');
                });
                $query = $query->orWhereHas('content_account', function ($query) use ($keyword)
                {
                    $query->where('name', 'LIKE', '%'.$keyword.'%');
                    $query->orWhere('host_name', 'LIKE', '%'.$keyword.'%');
                });

                $query = $query->orWhereHas('content_user', function ($query) use ($keyword)
                {
                    $query->where('account_name', 'LIKE', '%'.$keyword.'%');
                });

            });
        }

        $items = $query->orderBy('users.name', 'asc')->orderBy('social_accounts.name', 'asc')->orderBy('content.main_title', 'asc')->get();

        return view('results', array('items' => $items, 'followerIds' => $followerIds, 'followingIds' => $followingIds));
    }

    /**
     * Get content Details.
     *
     * @return \Illuminate\View\View
     */
    public function getContentDetails(Request $request)
    {
        $content = $this->content->find($request->content_id);
        $followingIds  = isset(Auth::user()->id) ? UserFollower::where('user_id', Auth::user()->id)->pluck('linked_user_id')->toArray() : [];
        $followerIds   = isset(Auth::user()->id) ? UserFollower::where('linked_user_id', Auth::user()->id)->pluck('user_id')->toArray() : [];

        if(isset($content->id)){

            $html = view('content.ajax-result-content-data', array('content'=>$content, 'followerIds' => $followerIds, 'followingIds' => $followingIds))->render();

            return Response::json(['status' => true, 'html' => $html]);
        }

        return Response::json(['status' => false, 'message' => 'Something went wrong while getting content.']);
    }

    /**
     * Get content Details.
     *
     * @return \Illuminate\View\View
     */
    public function getContentDetailsOld($id)
    {
        $content = $this->content->find($id);

        if(isset(Auth::user()->id) && isset($content->content_user_remove->id))
        {
            $request->session()->flash('alert-danger', 'The page does not exist');
            return redirect(route('home'));
        }

        $avgRating   = ContentRating::avg('rating');
        $avgRating   = round($avgRating);

        $totalRatings   = ContentRating::count();
        $contentRatings = ContentRating::orderBy('created_at', 'desc')->paginate(5);

        $totalWords = str_word_count($content->description)/60;
        $timeToread = sprintf("%02d", round($totalWords));

        return view('content_detail', array('content' => $content, 'totalRatings' => $totalRatings, 'timeToread' => $timeToread, 'contentRatings' => $contentRatings, 'avgRating' => $avgRating));
    }
}
