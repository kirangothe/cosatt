<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Employee;
use Illuminate\Support\Str;
use Illuminate\Http\Request;  
use App\Http\Services\Post\PostService;
use App\Http\Controllers\BackendController;
use Yajra\DataTables\DataTables;  
use Spatie\ImageOptimizer\OptimizerChainFactory;

class PostController extends BackendController
{

    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;

        $this->middleware('auth');
        $this->data['sitetitle'] = 'Posts';
        // $this->middleware(['permission:posts'])->only('index');
        // $this->middleware(['permission:posts_create'])->only('create', 'store');
        // $this->middleware(['permission:posts_edit'])->only('edit', 'update');
        // $this->middleware(['permission:posts_delete'])->only('destroy');
        // $this->middleware(['permission:posts_show'])->only('show');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('admin.post.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $postDetail = $this->postService->make($request);
        // $imageUrl = 'app/public'.str_replace(asset('storage'),"",$postDetail->images);
        // try{
        //     $optimizerChain = OptimizerChainFactory::create();
        //     $optimizerChain->optimize(storage_path($imageUrl));
        // }catch(\Exception $e){

        // }  

        return redirect()->route('admin.posts.index')->withSuccess('The data inserted successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }


    public function getPosts(Request $request)
    {
        $posts = $this->postService->all($request); 

        // var_dump($posts) ;
        $i            = 1;
        $postArray = [];

        if (!blank($posts)) {
            foreach ($posts as $post) {
                $postArray[$i]          = $post;
                $postArray[$i]['setID'] = $i;
                $i++;
            }
        }
        return Datatables::of($postArray)
            ->addColumn('action', function ($post) {
                $retAction ='';
                 
                $retAction .= '<a href="' . route('admin.posts.show', $post) . '" class="btn btn-sm btn-icon mr-2  float-left btn-info" data-toggle="tooltip" data-placement="top" title="View"><i class="far fa-eye"></i></a>';
            
                $retAction .= '<a href="' . route('admin.posts.edit', $post) . '" class="btn btn-sm btn-icon float-left btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="far fa-edit"></i></a>';
                
                $retAction .= '<form class="float-left pl-2" action="' . route('admin.posts.destroy', $post). '" method="POST">' . method_field('DELETE') . csrf_field() . '<button class="btn btn-sm btn-icon btn-danger" onclick="return confirmDelete()" data-toggle="tooltip" data-placement="top" title="Delete"> <i class="fa fa-trash"></i></button></form>';
               

                return $retAction;
            })

            ->editColumn('Date', function ($post) {
                $date = '<p>' . $post->news_date . '</p>';
                return $date;
            })
             ->editColumn('title', function ($post) {
                return Str::limit($post->title, 50);
            })
            ->editColumn('cat_id', function ($post) {
                return   $post->cat_id;
            })
           
            ->editColumn('publish', function ($post) {
                return  $post->publish;
            })
             
            ->editColumn('id', function ($post) {
                return $post->setID;
            })
            ->rawColumns(['name', 'action'])
            ->escapeColumns([])
            ->make(true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
