<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Desk;
class BerandaController extends Controller
{
    //
    protected $category;
    public function __construct()
    {
    	$this->category = Category::where('parent_id',null)->get();
    }

    public function index()
    {
    	$category = $this->category;
    	$products = Product::take(4)->orderBy('id','DESC')->get();
    	return view('homepage.homepage',compact('products','category'));
    }

    public function product()
    {
    	$category = $this->category;
    	$products = Product::orderBy('id','DESC')->get();
		return view('homepage.product',compact('products','category'));
        	
    }
    public function productbycategory($slug)
    {	
    	$categories = Category::where('slug',$slug)->first();
    	$id = $categories->id;
    	$category = $this->category;
    	$name = $categories->name;
    	$products = Product::orderBy('id','DESC')->where('category_id',$id)->get();

		return view('homepage.productbycategory',compact('products','categories','category','name'));
     	
    }

    public function detail($id)
    {   
        $category = $this->category;
        $products = Product::where('id',$id)->first();
        return view('homepage.detail',compact('products','category'));
    }
    public function deskview()
    {   
        $category = $this->category;
        $desks = Desk::all();
        return view('homepage.deskview',compact('desks','category'));
    }
}
