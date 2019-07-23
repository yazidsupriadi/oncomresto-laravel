<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Alert;
class UserController extends Controller
{
    //
    public function index()
    {
    	$users = User::all();
    	return view('admin.user.index',['users' => $users ]);
    }

    public function changestatus($id)
    {
        $user = User::find($id);
    	if($user->status == '0'){
    		$change_status = '1';
    	}else {
    		$change_status = '0';
    	}

    	User::where('id',$id)->update(['status' => $change_status]);
        alert()->success('Success Message', 'Status berhasil diubah Thanks!!');
    
    	return redirect('admin/user');
    }
    public function adduser()
    {
        return view('admin.user.add');
    }
    public function store(Request $data)
    {
        $tambahdata = ([
            'name' => $data['name'],
            'email' => $data['email'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'gender' => $data['gender'],
            'birthday' => $data['birthday'],
            'role' => $data['role'],
            'password' => bcrypt($data['password']),
        ]);
        User::create($tambahdata);
        alert()->success('Success Message', 'Data ditambahkan Thanks!!');
        return redirect('admin/user');
    
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit',['user' => $user]);
    }
    public function update(Request $data)
    {
     
        $ubahdata = ([
            'name' => $data['name'],
            'email' => $data['email'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'gender' => $data['gender'],
            'birthday' => $data['birthday'],
            'role' => $data['role'],
            'password' => bcrypt($data['password']),
        ]);
        User::where('id',$data->id)->update($ubahdata);
        alert()->success('Success Message', 'Data diubah Thanks!!');
    
        return redirect('admin/user');   
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        alert()->success('Success Message', 'Data dihapus Thanks!!');
        return redirect('admin/user');   
    
    }
}
