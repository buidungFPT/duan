<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use  Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

   
    public function listUsers(){
       
        $listUser = User::select('id','name','email','role')->get();
        return view('admin.user.list-users')->with([
            'listUser' =>    $listUser 
        ]);
    }
    public function addUsers(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>['required','email'],
            'password'=>'required',
            'role'=>'required'
            ]
        );
    $check = User::where('email' , $req->email)->exists();
    if(!$check){
       $newUser = new User();
       $newUser->name = $req->name;
       $newUser->email = $req->email; 
       $newUser->password =  Hash::make( $req->password);
       $newUser->role = $req->role;
       $newUser->save();
      
    }
    else{
        return redirect()->back()->with('message','Email da ton tai');
    }
    return redirect()->back()->with('message' , 'BAN DA THEM MOI THANH CONG ');
    }
    public function deleteUsers (Request $req){

        $req->validate([
            'id'=>'required',
        ]);
        
        User::where('id' ,$req->id)->delete();
        return redirect()->back()->with('message',' Delete successful ');
    }
    public function detailUsers (Request $req){
      $user =  User::where('id' ,$req->id)
      ->select('id','name','email','role')

      
      ->first();
      return json_decode($user);

    }
    public function updateUsers( Request $req){
        $req->validate([
            'idUser'=>'required',
            'name'=>'required',
            'email'=>['required','email'],
            'role'=>'required'
            ]
        );

        $user = User::where('id',$req->id);
        if($user->exists()){
               $data =[
                'name' => $req->name,
                 'email' => $req->email,
                 'role' => $req->role,
               ];
               $user->update($data);
        }
      
        return redirect()->back()->with('message','Update successful ');
    }
    public function home(){
        return view('admin.USERS.home');

    }
}
