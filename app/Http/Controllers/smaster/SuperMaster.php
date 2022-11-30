<?php

namespace App\Http\Controllers\smaster;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Addaccount;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SuperMaster extends Controller
{
    public function createAccount(Request $request)
    {
        $a = "";
        $hobby = $request->get('markettype');
        foreach ($hobby as $value) {
            $a = $a . $value . ',';
        }

        $b = "";
        $accounttype = $request->get('accounttype');
        foreach ($accounttype as $value) {
            $b = $b . $value . ',';
        }

        $users = new Addaccount();
        $users->usertype = $request->get('usertype');
        $users->name = $request->get('name');
        $users->password = Hash::make($request->get('password'));
        $users->freshlimit = $request->get('limit');
        $users->accounttype = $b;
        $users->markettype = $a;
        $users->save();

        return redirect()->back()->with('message', 'UserCreate Sucessfully....');
    }
    public function suserlogin(Request $request)
    {
        $pass = $request->input('password');

        $admin = Addaccount::where('name', $request->get('name'))->where('usertype', 'admin')->first();
        $user = Addaccount::where('name', $request->get('name'))->where('usertype', 'user')->first();
        $master = Addaccount::where('name', $request->get('name'))->where('usertype', 'master')->first();
        //   echo "<pre>";
        //       print_r($user);
        //       die;

        $admin1 = Addaccount::where('name', $request->get('name'))->where('usertype', 'admin')->count();
        $user1 = Addaccount::where('name', $request->get('name'))->where('usertype', 'user')->count();
        $master1 = Addaccount::where('name', $request->get('name'))->where('usertype', 'master')->count();

        if ($request->name != " " && $request->password != "")
        {

            if ($user1 > 0 && Hash::check($pass, $user->password)) {
                session::put('userid', $user['id']);
                session::put('username', $user['name']);

                return redirect('usermaindash');
            }
             elseif ($admin1 > 0 && Hash::check($pass, $admin->password)) {
                Session::put('login_id', $admin->id);
                Session::put('login_name', $admin->name);
                return redirect('admindashboard');
            }
            elseif ($master1 > 0 && Hash::check($pass, $master->password)) {
                session::put('masterid', $master['id']);
                session::put('mastername', $master['name']);

                return redirect('maindashboard');
            }
            else {
                return redirect()->back()->with('error', 'name and password are wrong');
            }
        }
        else
        {
            return redirect()->back()->with('error', 'name and password are blank');
        }
    }
}


 // if ($user1 > 0) {
            //     if (Hash::check($pass, $user->password)) {
            //         session::put('userid', $user['id']);
            //         session::put('username', $user['name']);
            //         return redirect('usermaindash');
            //     } else {
            //         return redirect()->back()->with('error', 'password wrong');
            //     }
            // } else {
            //     return redirect()->back()->with('error', 'name wrong');
            // }
