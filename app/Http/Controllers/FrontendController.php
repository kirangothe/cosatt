<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller{ 

    public function __construct(){ 

    }

    public function index(){ 
        $events = Post::where('cat_id', 1)->orderBy('id', 'desc')->limit(3)->get(); 
        $publications = Post::where('cat_id', 2)->orderBy('id', 'desc')->limit(3)->get();

        return view('frontend.home-page', compact('events', 'publications'));
    }


    public function about()
    { 
        return view('frontend.about');
    }


    public function partners()
    { 
        return view('frontend.partners');
    }


    public function publications()
    { 
        $publications = Post::where('cat_id', 2)->orderBy('id', 'desc')->get();
        return view('frontend.publications', compact('publications'));
    }

    public function posts()
    { 
        $publications = Post::where('cat_id', 2)->orderBy('id', 'desc')->get();
        return view('frontend.publications', compact('publications'));
    }

    public function show(Request $request, $id)
    {
        $postDetails = Post::find($id);
        
        if ($postDetails) {
        $postDetail  = Post::where('id', $postDetails->id)->first(); 

            return view('frontend.post-detail', compact('postDetails'));
        } else {            
            return redirect('/');
        }
    }


    public function events()
    { 
        $events = Post::where('cat_id', 1)->orderBy('id', 'desc')->get(); 
        return view('frontend.events', compact('events'));
    }


    public function contact()
    { 
        return view('frontend.contact');
    }     
}
