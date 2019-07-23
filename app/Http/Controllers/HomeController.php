<?php

namespace App\Http\Controllers;
use Auth;
use Alert;
use Illuminate\Http\Request;
use App\Product;
use App\Transaction;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        $transactions = Transaction::all();
    return view('admin.layout.dashboard',compact('products','transactions'));
 
    }

    
    public function logout()
    {
        Auth::logout();
        Alert::success('You was logged out successfully', 'Thanks!');
        return redirect('/');
    }
}
