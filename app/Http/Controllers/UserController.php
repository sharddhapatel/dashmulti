<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\userlist;
class UserController extends Controller
{
  public function addUser(Request $request)
  {
    $users= new Users();
    $users->name=$request->get('username');
    $users->email=$request->get('email');
    $users->password=Hash::make($request->get('password'));
    $users->save();
    return redirect()->back()->with('message','UserCreate Sucessfully....');

  }

  public function userlogin(Request $request)
  {
      $data=Users::where('email',$request->get('email'))->first();
      $user=Users::where(['email'=>$request->get('email')])->count();

      if($request->email !=" " && $request->password !="")
      {
          if($user>0 && Hash::check(request('password'), $data->password))
          {
            session::put('userid',$data['id']);
            session::put('useremail',$data['email']);
            session::put('username',$data['name']);
            return redirect('userdashboard');
          }
          else{
              return redirect()->back()->with('error','email and password are wrong');
          }
      }
    //   echo "<pre>";
    //   printf($data);
    //   die;


  }
  public function userstore(Request $request){
    $list = new userlist;
    $list->broker = $request->get('txtbroker');
    $list->master = $request->get('txtmaster');
    $list->status = $request->get('txtstatus');
    $list->client = $request->get('txtclient');
    $list->login_after = $request->get('txtloginafter');
    $list->login_before = $request->get('txtloginbefore');
    $list->join_after = $request->get('txtjoinafter');
    $list->join_before = $request->get('txtjoinbefore');

    $list->save();
    // echo"<pre>";
    // print_r($list);
    // die();
    return redirect()->back();
  }
}
