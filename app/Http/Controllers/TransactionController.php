<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Product;
use PDF;
use Alert;
use Cart;
class TransactionController extends Controller
{
    //
    public function index()
    {
    	$transactions = Transaction::groupBy('code')->orderBy('id','DESC')->get();
    	return view('admin.transaction.index',['transactions' => $transactions]);

    }
    public function status($code,$status)
    {
    	if($status == '0'){
    		$change_status = '1';
    	}else {
    		$change_status = '0';
    	}

    	$transactions = Transaction::where('code',$code)->pluck('id')->toArray();
    	Transaction::whereIn('id',$transactions)->update(['payment_status'=>$change_status]);
        alert()->success('Success Message', 'Status berhasil diubah Thanks!!');
    
    	return redirect('admin/transaction');
    }
       public function productstatuschange($id)
    {      
      $transactions = Transaction::find($id);
        if($transactions->product_status == 'on_cooking'){
            $change_status = 'delivered';
        }elseif ($loanings->returning_status == 'delivered') {
            $change_status = 'served';
        }
        else {
            $change_status = 'on_cooking';
        }

        Transaction::where('id',$id)->update(['product_status' => $change_status]);

        return redirect('admin/transaction');
    }

    
    public function detail($code)
    {   
        $cart = Cart::getContent();
        $transactions = Transaction::groupBy('code')->orderBy('id','DESC')->where('code',$code)->first();
        
        $transactiondetails = Transaction::orderBy('id','DESC')->where('code',$code)->get();
        
        return view('admin.transaction.detail',compact('transactions','transactiondetails','cart'));
    }

    public function cetakpdf($code)
    {
        
        $data['transactions'] = Transaction::groupBy('code')->orderBy('id','DESC')->where('code',$code)->first();
        
        $data['transactiondetails'] = Transaction::orderBy('id','DESC')->where('code',$code)->get();
        
        $pdf = PDF::loadView('admin.transaction.cetakpdf', $data);
        return $pdf->download('invoice.pdf');
    }

}
