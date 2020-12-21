<?php

namespace App\Http\Controllers;
use Auth;
use App\Content;
use App\Category;
use Illuminate\Http\Request;

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
        $this->content  = new Content();
        $this->category = new Category();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        //return view('coming_soon');

        $latest     = $this->content->where('status', '1')->limit(4)->orderBy('posted_at', 'desc')->get();
        $trending   = $this->content->where('status', '1')->limit(4)->orderBy('posted_at', 'desc')->get();
        $categories = $this->category->limit(4)->orderBy('name', 'asc')->get();

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
    public function getContentDetails($id)
    {
        $content = $this->content->where('status', '1')->where('id', $id)->first();

        return view('content_detail', array('content' => $content));
    }

}
