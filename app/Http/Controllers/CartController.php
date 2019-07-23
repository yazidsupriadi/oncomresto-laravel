<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
use App\Category;
use App\Desk;
use App\Transaction;
use Session;
class CartController extends Controller
{
    //
        protected $category;
    public function __construct()
    {
    	$this->category = Category::where('parent_id',null)->get();
    }

    public function addcart(Request $request)
    {
    	$products = Product::find($request->product_id);
    	$cart = Cart::add([
    		'id'      => $products->id,
    		'price'   => $products->price,
    		'name'    => $products->name,
    		'quantity' => 1,
    	
    	
    	]);
    	return redirect('/cart');
    }
    public function keranjang()
    {
    	$category = $this->category;

    	return view('homepage.keranjang',compact('category'));
    }

    public function delete(Request $request)
    {

    	$category = $this->category;
    	Cart::remove($request->id);
    	return redirect('/cart');
    }

    public function formulir()
    {
        $desks = Desk::all();
        $category = $this->category;
        return view('homepage.formulir',compact('category','desks'));
    }

    public function transaction(Request $request)
    {
        foreach(Cart::getContent() as $row){
            $products = Product::find($row->id);
            $transactions = new Transaction;
            $transactions->name = $request->name;
            $transactions->code = date('ymdhis');
            $transactions->qty = $row->quantity;
            $transactions->subtotal = Cart::getTotal();
            $transactions->product_id = $products->id;
            $transactions->save();
            return redirect('/cart/mytransaction');
        }
    }


    public function mytransaction()
     { 
        $category = $this->category;
        $desk = Desk::all();
        $transactions = Transaction::orderBy('id','DESC')->get();
        return view('homepage.mytransaction',compact('category','transactions','desk'));

     }

    public function sukses(){
        Session::flash('sukses','Silahkan persiapkan uang sesuai pesanan pelayanan akan datang!');
        return redirect('/cart/mytransaction');
    }

    public function order($code)
    {   
                $category = $this->category;

        $cart = Cart::getContent();
        $transactions = Transaction::groupBy('code')->orderBy('id','DESC')->where('code',$code)->first();
        
        $transactiondetails = Transaction::orderBy('id','DESC')->where('code',$code)->get();
        
        return view('homepage.myorder',compact('transactions','transactiondetails','cart','category'));
    }

}
