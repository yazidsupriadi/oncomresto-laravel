<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desk;
use Alert;
class DeskController extends Controller
{
    //
	public function index()
	{
		$desks = Desk::all();
		return view('admin.desk.index',compact('desks'));
	}
	public function store(Request $request)
	{
		$desks = new Desk;
		$desks->name = $request->name;
		$desks->position = $request->position;
		$desks->save();
		 return redirect('/admin/desk')->with('success','Data berhasil ditambahkan');
	}
	    public function changestatus($id)
    {
        $desks = Desk::find($id);
        if($desks->status == 'booked'){
            $change_status = 'no_booked';
        }else {
            $change_status = 'booked';
        }

        Desk::where('id',$id)->update(['status' => $change_status]);
        alert()->success('Success Message', 'Status berhasil diubah Thanks!!');
    
        return redirect('admin/desk');
    }
    public function edit($id)
    {
    	$desks = Desk::find($id);
    	return view('admin.desk.edit',compact('desks'));
    }
    public function update($id,Request $request)
    {
    	$desks = Desk::find($id);
    	$desks->name = $request->name;
    	$desks->position = $request->position;
    	$desks->update();
    	    alert()->success('Success Message', 'Status berhasil diubah Thanks!!');
        return redirect('admin/desk');
    
    }
    public function delete($id)
    {
    	$desks = Desk::find($id);
    	$desks->delete();
    	alert()->success('Success Message', 'Desk berhasil dihapus Thanks!!');
        return redirect('admin/desk');
    }

}
