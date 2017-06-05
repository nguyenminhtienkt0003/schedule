<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Entities\Role;
use validate;
use Hash;
//use Illuminate\Support\Facades\Auth;
class UsersController extends Controller
{
    protected $connect = 'sqlsrv';
    public function getList()
    {
        $users = User::all();
        return view('admin.users.list',['users'=>$users]);
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/users/list');
    }
    public function getInsert()
    {
        $role = Role::all();
        return view('admin.users.insert',['role'=>$role]);
    }
    public function postInsert(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'password'=>'required|min:3'
            ],
            [
            'email.required'=>'Bạn chưa nhập email',
            'address.required'=>'Bạn chưa nhập địa chỉ',
            'phone.required'=>'Bạn chưa nhập số điện thoại',
            'password.required'=>'Bạn chưa nhập password',
            'password.min'=>'Password không được nhỏ hơn 3 ký tự'
            ]);
        $allRequest = $request->all();
        $user = new User();
        $user->Name = $request->username;
        $user->Email = $request->email;
        $user->Password= Hash::make($request->password);
        $user->remember_token = $request->_token;
        $user->Address = $request->address;
        $user->Phone = $request->phone;
        if($request->has('rdoStatus'))
        {
            if($request->value==0)
                $user->Gender =0;
            else
                $user->Gender =1;
        }
         
        $user->id_Role =2;

        $user->save();
        return redirect('admin/users/list');
    }
    public function getEdit($id)
    {
        $user = User::find($id);
        $role = Role::all();
        return view('admin.users.edit',['user'=>$user,'role'=>$role]);
    }
      public function postEdit(Request $request, $id)
    {
        $allRequest = $request->all();
        $user =  User::find($id);
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password= Hash::make($request->password);
        $user->remember_token = $request->_token;
        $user->address = $request->address;
        $user->phone = $request->phone;
        if($request->has('gender'))
        {
            if($request->value==0)
                $user->Gender =0;
            else
                $user->Gender =1;
        }
         if($request->has('role'))
        {
            $user->id_Role = $allRequest['role'];
        }
        $user->save();
        return redirect('admin/users/list');
    }
    public function getAdminLogin()
    {
        return view('admin.login');
    }
    public function postAdminLogin(Request $request)
    {
        // $this->validate($request,[
        //     'email'=>'required',
        //     'password'=>'required|min:3'
        //     ],
        //     [
        //     'email.required'=>'Bạn chưa nhập email',
        //     'password.required'=>'Bạn chưa nhập password',
        //     'password.min'=>'Password không được nhỏ hơn 3 ký tự'
        //     ]);
        $email = $request->Email;
        $password = $request->Password;
        if(Auth::attempt(['Email'=>$email, 'Password'=>$password]))
        {
            return redirect('admin/home');
        }
        else
        {
            return redirect('admin/login')->with('thongbao','Đăng nhập không thành công!');
        }
    }

    public function getAdminLogout()
    {
        Auth::logout();
        return redirect('admin/login');
    }
}
