<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\register;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Facades\DB;
use Session;
class registerController extends Controller
{
    public function loginview()
    {

        return view('admin.login');
    }


    function login(Request $req)
    {

         
         $register=register::where(['email'=>$req->email])->first();
      
         if(!$register ||!Hash::check($req->password, $register->password))
         {
            return "username and password is not matched";
         }
         else{

            $req->session()->put('register',$register);
             return redirect('admin.dashboard');
         }
    
           
      
    }
    public function index()
    {

        return view('admin.dashboard');
    }


    public function viewregister()
    {

        return view('admin.register');
    }

    public function reg(Request $req)
    {
        $req->validate([

            'name'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'password'=>'required'
           ]);
        
        $register=new register();
        $register->name=$req->name;
        $register->address=$req->address;
        $register->phone=$req->phone;
        $register->email=$req->email;
        $register->password=Hash::make($req->password);

        $register->save();
        
        return redirect('register');
    }
}
