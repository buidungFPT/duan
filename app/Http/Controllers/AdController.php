<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Session;
use App\Http\Requests\UserloginRequest;

class AdController extends Controller
{
    public function login(){
        return view('login');
    }
    public function loginLogin(UserloginRequest $req){
        $req->validate([
            'email'=> 'required|email|exists:users,email',
            'password'=>'required|min:8',
        ],
          ['email.required'=>'Email khong duoc bo chong ',
           'email.email'=>'Email phai co dinh dang dung',
           'email.exists'=>'Email chua duoc dang ki ',
           'password.required'=>'Mat khau khong duoc bo chong',
           'password.min'=>'Mat khau phai co it nhat 8 ki tu',
        // //    'password.confirmed'=>'Mat khau khong dung'
          
          ]);
     
          $dataUserLogin=[
            
            
            'email' => $req->email,
            'password'=> $req->password,
          ];


          $remember = $req->has('remember');
          if (Auth::attempt($dataUserLogin, $remember)  ) {

            Session::where('user_id',Auth::id())->delete();
            session()->put('user_id',Auth::id());   

            if (Auth::user()->role =='1'){
                return redirect()->route('admin.users.listUsers')->with([
                    'message' => 'Login successfully'
                ]);
                 
            }else{
                echo "dang nhap vao user";
            }
         return redirect()->route('client.user.home');
        }else{
            return redirect()->back()->with('error','email sai or mat khau sai ');
           
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('error','BAN DA DANG XUAT  ');
    }
    public function dangki(){
        return view('dangki');
    }
    public function postdangki(Request $req){
        $check = User::where('email',$req->email)->exists();
        if($check){
            return redirect()->back()->with([
                'message'=>'Email da ton tai'
            ]);
        }else{
            $data=[
                'name'=>$req->name,
                'email'=>$req->email,
                'password'=>Hash::make($req->password),
            //    'remember_token'=>null,

            ];
            $newUser = User::create($data);
            Auth::login( $newUser);
            return redirect()->route('login')->with([
                'error'=>'Dang ki thanh cong vui long dang nhap lai'
            ]); 
        }
      
    }
    public function quenmk(){

    }
}
