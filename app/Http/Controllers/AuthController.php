<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;

class AuthController extends Controller
{
    //

        protected $category;
    public function __construct()
    {
    	$this->category = Category::where('parent_id',null)->get();
    }
        public function register()
    {
    	 $category = $this->category;
    	return view('homepage.register',compact('category'));
    }
      public function store(Request $data)
    {
        $tambahdata = ([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'role' => $data['role'],
            'password' => bcrypt($data['password']),
        ]);
        User::create($tambahdata);
        return redirect('/admin/user');
    
    }

}
