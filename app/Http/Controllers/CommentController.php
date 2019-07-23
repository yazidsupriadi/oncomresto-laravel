<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Comment;
use Alert;
class CommentController extends Controller
{
    //

    protected $category;
    public function __construct()
    {
    	$this->category = Category::where('parent_id',null)->get();
	}

    public function index()
    {

    	$category = $this->category = Category::where('parent_id',null)->get();
    	return view('homepage.comment',compact('category'));
    }
     public function store(Request $request)
    {	
        $comments = new Comment;
        $comments->name = $request->name;
        $comments->customer_comments = $request->customer_comments;
        $comments->save();
        Alert::success('Your contact was successfully', 'Happy Eat!');
        return redirect('/comment');   
    }

}
