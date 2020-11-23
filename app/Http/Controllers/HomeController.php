<?php

namespace App\Http\Controllers;
use Auth;
use App\Content;
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
        $this->content = new Content();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $latest   = $this->content->where('status', '1')->limit(4)->orderBy('published_at', 'desc')->get();
        $trending = $this->content->where('status', '1')->limit(4)->orderBy('published_at', 'desc')->get();

        return view('home', array('latest' => $latest, 'trending' => $trending));


        // $totalWarrantyRequest = WarrantyExtension::where('user_id',Auth::user()->id)->groupBy('unique_key')->count();
        // $totalSelfDiagnosis = ContentCompletion::leftJoin('content', 'content_completion.content_id', '=', 'content.id')
        // ->where('content_completion.user_id',Auth::user()->id)->where('content.content_type','self-diagnosis')->count();
        // $totalMaintenance = ContentCompletion::leftJoin('content', 'content_completion.content_id', '=', 'content.id')
        // ->where('content_completion.user_id',Auth::user()->id)->where('content.content_type','maintenance')->count();

        //return view('dashboard',array('totalSupportTicket' => $totalSupportTicket, 'totalWarrantyRequest' => $totalWarrantyRequest, 'totalSelfDiagnosis' => $totalSelfDiagnosis, 'totalMaintenance' => $totalMaintenance, 'extensions' => $extensions, 'tickets' => $tickets));
        return view('coming_soon');
    }

    /**
     * Get the latest contents.
     *
     * @return \Illuminate\View\View
     */
    public function getLatestResults()
    {
        $results = $this->content->where('status', '1')->orderBy('published_at', 'desc')->get();

        return view('results', array('results' => $results));
    }

    /**
     * Get the trending contents.
     *
     * @return \Illuminate\View\View
     */
    public function getTrendingResults()
    {
        $results = $this->content->where('status', '1')->orderBy('published_at', 'desc')->get();

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
            $query = $query->orWhere('tags','LIKE','%'.$keyword.'%');
            $query = $query->orWhere('introduction','LIKE','%'.$keyword.'%');
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
