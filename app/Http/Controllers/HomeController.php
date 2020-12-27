<?php

namespace App\Http\Controllers;
use Auth;
use App\Content;
use App\Category;
use App\ContentRatings;
use Illuminate\Http\Request;
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
        $this->contentRatings = new ContentRatings();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        //return view('coming_soon');

        $latest     = $this->content->where('status', '1')->limit(12)->orderBy('posted_at', 'desc')->get();
        $trending   = $this->content->where('status', '1')->limit(12)->orderBy('posted_at', 'desc')->get();
        $categories = $this->category->limit(12)->orderBy('name', 'asc')->get();

        return view('home', array('latest' => $latest, 'trending' => $trending, 'categories' => $categories));
    }

    /**
     * Get the latest contents.
     *
     * @return \Illuminate\View\View
     */
    public function getLatestResults()
    {
        $results = $this->content->where('status', '1')->orderBy('posted_at', 'desc')->get();

        return view('results', array('results' => $results));
    }

    /**
     * Get the trending contents.
     *
     * @return \Illuminate\View\View
     */
    public function getTrendingResults()
    {
        $results = $this->content->where('status', '1')->orderBy('posted_at', 'desc')->get();

        return view('results', array('results' => $results));
    }

    /**
     * Get the search results.
     *
     * @return \Illuminate\View\View
     */
    public function getResults(Request $request)
    {
        $keyword = trim($request->search);

        $query = $this->content;
        $query = $query->where('status', '1');

        if(isset($keyword) && !empty($keyword)) {
            $query = $query->where('main_title','LIKE','%'.$keyword.'%');
            $query = $query->orWhere('description','LIKE','%'.$keyword.'%');
            $query = $query->orWhereHas('content_tags', function ($query) use ($keyword)
            {
                $query->where('name', 'LIKE', '%'.$keyword.'%');
            });
        }

        $results = $query->orderBy('main_title', 'asc')->get();

        return view('results', array('results' => $results));
    }

    /**
     * Get content Details.
     *
     * @return \Illuminate\View\View
     */
    public function getContentDetails($id, Request $request)
    {
        $id = Hashids::decode($id);

        $content = $this->content->where('status', '1')->where('id', $id)->first();

        if(isset(Auth::user()->id) && isset($content->content_user_remove->id))
        {
            $request->session()->flash('alert-danger', 'The page does not exist');
            return redirect(route('home'));
        }

        $avgRating   = contentRatings::avg('rating');
        $avgRating   = round($avgRating);

        $totalRatings   = contentRatings::count();
        $contentRatings = contentRatings::orderBy('created_at', 'desc')->paginate(5);

        $totalWords = str_word_count($content->description)/60;
        $timeToread = sprintf("%02d", round($totalWords));

        return view('content_detail', array('content' => $content, 'totalRatings' => $totalRatings, 'timeToread' => $timeToread, 'contentRatings' => $contentRatings, 'avgRating' => $avgRating));
    }
}
