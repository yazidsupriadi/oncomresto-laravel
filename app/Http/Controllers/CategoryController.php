<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Alert;
use Illuminate\Support\Facades\Auth;
class CategoryController extends Controller
{
    //
    public function index()
    {	
    	$categories = Category::where('parent_id',null)->get();
    	return view('admin.category.index',['categories'=>$categories]);
    }

    public function store(Request $request)
    {
    	$categories = Category::create($request->all());

        alert()->success('Success Message', 'Data ditambahkan Thanks!!');
    	return redirect('/admin/category')->with('success','Data berhasil ditambahkan');
    
    }

    public function edit(Request $request,$id)
    {	
    	$categories = Category::find($id);
    	$subcategories = Category::where('parent_id',null)->get();
    	return view('admin.category.edit',['categories'=> $categories,'subcategories'=>$subcategories]);
    }
    public function update(Request $request,$id)
    {

    	$categories = Category::find($id);
    	$categories->update($request->all());
        alert()->success('Success Message', 'Data diubah Thanks!!');
    	return redirect('/admin/category')->with('success','Data berhasil ditambahkan');
    
    }
    public function destroy($id)
    {
    	$categories = Category::find($id);
    	$categories->delete();
        alert()->success('Success Message', 'Data dihapus Thanks!!');
    	return redirect('/admin/category')->with('success','Data berhasil ditambahkan');
    	
    }
}
