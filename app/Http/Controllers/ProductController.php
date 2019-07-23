<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Category;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::where('parent_id',null)->get();

        $products = Product::all();
        return view('admin.product.index',['products' => $products,'categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if ($request->hasFile('photo')) {
            $request->file('photo')->move(public_path('admin/assets/images/'),$request->file('photo')->getClientOriginalName());
            $product = new Product;
            $product->name = $request->name;
            $product->description = $request->description;
            $product->stock = $request->stock;
            $product->price = $request->price;
            $product->category_id = $request->category_id;
            $product->user_id = Auth::user()->id;
            $product->photo = $request->file('photo')->getClientOriginalName();
            $product->save();
            
        }
        alert()->success('Success Message', 'Data ditambahkan Thanks!!');
        return redirect('/admin/product')->with('success','Data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $categories = Category::where('parent_id',null)->get();

        $products = Product::find($id);
        return view('admin.product.edit',['products'=>$products,'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $product = Product::find($id);
        $product->name = $request->name;
            $product->description = $request->description;
            $product->stock = $request->stock;
            $product->price = $request->price;
            $product->weight = $request->weight;
            $product->category_id = $request->category_id;
            $product->user_id = Auth::user()->id;
            
        if ($request->hasFile('photo')) {
            $request->file('photo')->move(public_path('admin/assets/images/'),$request->file('photo')->getClientOriginalName());
            $product->photo = $request->file('photo')->getClientOriginalName();
            
            
        }
        $product->update();
        alert()->success('Success Message', 'Data diubah Thanks!!');
    
        return redirect('/admin/product')->with('success','Data berhasil ditambahkan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

            $product = Product::find($id);
            $product->delete();            
            alert()->success('Success Message', 'Data dihapus Thanks!!');
    
        return redirect('/admin/product')->with('success','Data berhasil ditambahkan');

    }
    public function changestatus($id)
    {
        $products = Product::find($id);
        if($products->stock == 'available'){
            $change_status = 'no_available';
        }else {
            $change_status = 'available';
        }

        Product::where('id',$id)->update(['stock' => $change_status]);
        alert()->success('Success Message', 'Status berhasil diubah Thanks!!');
    
        return redirect('admin/product');
    }

}
