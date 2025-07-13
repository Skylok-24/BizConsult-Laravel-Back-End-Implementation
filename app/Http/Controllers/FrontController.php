<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeRequest;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() 
    {
        return view('front.index',get_defined_vars());
    }

    public function about() 
    {
        return view('front.about',get_defined_vars());
    }

    public function service() 
    {
        return view('front.service',get_defined_vars());
    }

    public function contact() 
    {
        return view('front.contact',get_defined_vars());
    }

    public function subscribe(SubscribeRequest $request) 
    {
        $data = $request->validated();
        $subscriber = Subscriber::where('email', $data['email'])->first();
        if(isset($subscriber))
            return to_route('front.index')->with('status','The user already subscribe');
        
        Subscriber::create($data);
        return to_route('front.index')->with('status','Your Email Has Been sent');
    }
}
