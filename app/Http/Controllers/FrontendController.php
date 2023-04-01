<?php
namespace App\Http\Controllers;

use App\Models\Post;

class FrontendController extends Controller{ 

    public function __construct(){ 

    }

    public function index(){ 
        $events = Post::where('cat_id', 1)->orderBy('id', 'desc')->limit(3)->get(); 
        $publications = Post::where('cat_id', 2)->orderBy('id', 'desc')->limit(3)->get();

        return view('frontend.home-page', compact('events', 'publications'));
    }


    public function aboutus()
    { 
        return view('frontend.home-page');
    }


    public function partners()
    { 
        return view('frontend.home-page');
    }


    public function publications()
    { 
        $publications = Post::where('cat_id', 2)->orderBy('id', 'desc')->get();
        return view('frontend.publications', compact('publications'));
    }


    public function events()
    { 
        $events = Post::where('cat_id', 1)->orderBy('id', 'desc')->get(); 
        return view('frontend.events', compact('events'));
    }


    public function contact()
    { 
        return view('frontend.home-page');
    }
    
    // public function changeStatus($status, $token)
    // {
    //     try {
    //         $data =  $this->jwtTokenService->jwtTokenDecode($token);
    //         if (auth()->user()) {
    //             $this->jwtTokenService->changeStatus($data->visitorID, $status);
    //             return redirect()->route('admin.dashboard.index')->withSuccess('The Status Change successfully!');
    //         } else {
    //             $result = User::findorFail($data->employee_user_id);
    //             if ($result) {
    //                 Auth::login($result);
    //                 $this->jwtTokenService->changeStatus($data->visitorID, $status);
    //                 return redirect()->route('admin.dashboard.index')->withSuccess('The Status Change successfully!');
    //             } else {
    //                 return redirect()->route('/')->withError('These credentials do not match our records');
    //             }
    //         }
    //     } catch (\Exception $e) {
    //         //
    //     }
    // }

    // public function qrcode($number)
    // {
    //     $visitor = Visitor::select('barcode')->where('phone',$number)->first();

    //     return view('frontend.check-in.qrcode',compact('visitor'));
    // }
}
