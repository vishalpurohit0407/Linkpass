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
        if(isset(Auth::user()->id))
        {
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
