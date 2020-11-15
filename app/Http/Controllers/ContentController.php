<?php

namespace App\Http\Controllers;

use App\Content;
use App\Category;
use Illuminate\Http\Request;
use Auth;
use App\ContentCompletion;
use App\Flowchart;
use PDF;
use Str;
use Dompdf\Dompdf;

class ContentController extends Controller
{

    public function __construct()
    {
        $this->getrecord = '12';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $content = Content::with('guide_category','guide_category.category')->where('main_title','!=','')->where('guide_type','=','self-diagnosis')->where('status','=','1')->orderBy('created_at', 'desc')->paginate($this->getrecord);

        if($request->ajax()){
            return view('content.ajaxlist',array('content'=>$content));
        }else{
            $categorys = Category::where('status','1')->orderBy('name','asc')->get();
            //print_r($categorys);
            return view('content.list',array('title' => 'Content List','categorys'=>$categorys,'content'=>$content));
        }
    }

    public function search(Request $request){
        $content=Content::with('guide_category','guide_category.category')->where('main_title','!=','')->where('guide_type','=','self-diagnosis')->where('status','=','1');
        //->where('status','!=','2')
        if(isset($request->search) && !empty($request->search)){
            $content=$content->where('main_title','LIKE','%'.$request->search.'%');
        }
        if(isset($request->category_id) && !empty($request->category_id)){
            $category_id=$request->category_id;
            $content=$content->whereHas('guide_category', function ($query) use ($category_id) {
                    $query->where('category_id', $category_id);
                });
        }
        $content=$content->orderBy('created_at', 'desc')->paginate($this->getrecord);

        return view('content.ajaxlist',array('content'=>$content));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function completedContent(Request $request, $content_id ,Content $content)
    {
        $content = Content::find($content_id);
        try {
            if (!$content) {
              return abort(404);
            }
            $completed_guide = new ContentCompletion;
            $completed_guide->guide_id = $content->id;
            $completed_guide->user_id = Auth::user()->id;
            if($completed_guide->save())
            {
                $request->session()->flash('alert-success', ($content->guide_type == 'self-diagnosis' ? 'Content':'Maintenance').' Content completed successfuly.');
            }
            if ($content->guide_type == 'self-diagnosis') {
                $route = 'user.content.show';
            }else{
                $route = 'user.maintenance.show';
            }
            return redirect(route($route,$content->id));
        }catch (ModelNotFoundException $exception) {
            $request->session()->flash('alert-danger', $exception->getMessage());
            return redirect(route($route,$content->id));
        };
    }

    public function createPDF(Request $request ,$content_id) {
        // retreive all records from db
        $content = Content::find($content_id);
        if (!$content) {
            return abort(404);
        }
        // share data to view
        view()->share('content',$content);
        // return view('content.pdf_view', $content);
        $pdf = PDF::loadView('content.pdf_view', $content);
        return $pdf->download(Str::slug($content->main_title, '-').'.pdf');

        // Load content from html file
        // $dompdf = new Dompdf();
        // $dompdf->loadHtml(view('content.pdf_view', compact('content')));
        // $dompdf->setPaper('A4', 'landscape');
        // $dompdf->render();
        // $dompdf->stream("codexworld", array("Attachment" => 1));
    }

    public function flowChart(Request $request,$flowchart_id,$content_id)
    {
        $content = Content::find($content_id);
        $flowchart = Flowchart::where('id',$flowchart_id)->with('flowchart_node')->first();
        if (!$flowchart && !$content) {
            return abort(404);
        }
        return view('content.flowchart',array('title'=>'Flow Chart','flowchart'=>$flowchart,'content'=>$content));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        // echo "<pre>";print_r($content);exit();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content, Request $request)
    {
        //
    }
}
