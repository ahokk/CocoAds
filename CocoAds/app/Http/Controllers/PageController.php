<?php

namespace App\Http\Controllers;

use App\Company;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    //


    public function index()
    {
        return view('auth.login');
    }

    public function home()
    {
        return view('home');
    }

    public function promo()
    {
        $tipe="notsearching";
        $promo = Company::all();
        return view('promo',compact('promo','tipe'));
    }

    public function about()
    {
        return view('about');
    }

    public function logout(Request $request)
    {
        Auth::guard()->logout();

        $request->session()->invalidate();

        return redirect('/');

    }

    public function myorder()
    {
        $order = Order::where('user_id',Auth::user()->id)->get();

        return view('myorder',compact('order'));
    }

    public function allorder()
    {
        $order = Order::all();

        return view('allorder',compact('order'));
    }

    public function order(Request $request)
    {

        $promo = Company::find($request->id);


        return view('order',compact('promo'));
    }


    public function search(Request $request)
    {
        $tipe = $request->typeSearching;
        $name = $request->search;
        $promo = Company::where('company_name','like','%'.$name.'%')->get()->first();

        if($promo)
            return view('promo',compact('promo','tipe'));
        else
            return back();

    }

    public function addProduct(Request $request)
    {
        $this->validate($request, [
            'url' => 'required',
            'theme' => 'required',
            'picture'=> 'required',
            'budget' => 'required|numeric'
        ]);

            $destinationPath = public_path('ProjectImage/');
            $extension = $request->file('picture')->getClientOriginalExtension();
            $fileName = uniqid().'.'.$extension;

            $request->file('picture')->move($destinationPath, $fileName);

            $order = new Order();
            $order->company_id = $request->id;
            $order->user_id = Auth::user()->id;
            $order->url = $request->url;
            $order->theme = $request->theme;
            $order->image = $fileName;
            $order->budget = $request->budget;
            $order->save();
        return back();
    }



    
}
