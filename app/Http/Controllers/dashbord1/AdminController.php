<?php

namespace App\Http\Controllers\Dashbord1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(){
        return view('dashbord1.index');
    }
    public function addaccout(){
        return view('dashbord1.addaccout');
    }
    public function autoup(){
        return view('dashbord1.autosquare');
    }
    public function banner(){
        return view('dashbord1.bannedblockedscripts');
    }

    public function brokerlisting(){
        return view('dashbord1.brokerlisting');
    }
    public function bulktrading(){
        return view('dashbord1.bulktrading');
    }
    public function cashentry(){
        return view('dashbord1.cashentry');
    }
    public function cashledger(){
        return view('dashbord1.cashledger');
    }
    public function crosstrade(){
        return view('dashbord1.crosstrade(s)log');
    }
    public function dashboard(){
        return view('dashbord1.dashboard');
    }
    public function games(){
        return view('dashbord1.games');
    }
    public function jv(){
        return view('dashbord1.jv');
    }
    public function ledger(){
        return view('dashbord1.ledger');
    }
    public function marginmanagement(){
        return view('dashbord1.marginmanagement');
    }
    public function masterlisting(){
        return view('dashbord1.masterlisting');
    }
    public function maxquantitydetails(){
        return view('dashbord1.maxquantitydetails');
    }
    public function login(){
        return view('dashbord1.login');
    }
    public function orderlimit(){
        return view('dashbord1.orderlimit');
    }
    public function portfolioposition(){
        return view('dashbord1.portfolioposition');
    }
    public function register(){
        return view('dashbord1.register');
    }
    public function rejectionlog(){
        return view('dashbord1.rejectionlog');
    }
    public function summaryreport(){
        return view('dashbord1.summaryreport');
    }
    public function tradeeditdeletelog(){
        return view('dashbord1.tradeeditdeletelog');
    }
    public function trades(){
        return view('dashbord1.trades');
    }
    public function block(){
        return view('dashbord1.blockallowscripts');
    }
    public function trialbalance(){
        return view('dashbord1.trialbalance');
    }
    public function usereditlog(){
        return view('dashbord1.usereditlog');
    }
    public function userlisting(){
        return view('dashbord1.userlisting');
    }
    public function watchlist(){
        return view('dashbord1.watchlist');
    }
    public function adminlogin(Request $request)
    {
        $data = $request->all();
        $name = $request->Input('email');
        $password = $request->Input('password');


        $same = DB::table('login')->where(['email' => $name, 'password' => $password])->count();
        $a = DB::table('login')->where('email', $name)->first();

        if (($name != " ") && ($password != " "))
        {
            if ($same > 0) {
                Session::put('login_id', $a->id);
                Session::put('login_email', $a->email);
                Session::put('login_name', $a->name);

                return redirect('superdashboard')->with(['a' => $a]);
            }
            else
            {
                return redirect('/')->with('error', 'Email and Password has been wrong....');
            }
        }
        else
        {
            return redirect('/')->with('error', 'Email and Password Empty...');
        }
    }
    public function logout()
    {
        Session()->forget('login_id');
        Session()->forget('login_name');

        return redirect('/');
    }

}
