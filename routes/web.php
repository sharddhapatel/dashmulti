<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashbord1\AdminController;
use App\Http\Controllers\smaster\SuperMaster;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\smaster\mastercontroller;
use App\Http\Controllers\broker\brokercontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

route::post('adminlogin',[AdminController::class,'adminlogin']);
route::get('adminregister',[AdminController::class,'register']);
// route::get('/',[AdminController::class,'login']);
route::get('adminlogout',[AdminController::class,'logout']);

Route::group(['middleware'=>'admin'],function()
{
route::get('adminindex',[AdminController::class,'index']);
route::get('adminaddaccout',[AdminController::class,'addaccout']);
route::get('adminautosquare',[AdminController::class,'autoup']);
route::get('adminbannedblockedscripts',[AdminController::class,'banner']);
route::get('adminblockallowscripts',[AdminController::class,'block']);
route::get('adminmaxquantitydetails',[AdminController::class,'maxquantitydetails']);
route::get('adminbulktrading',[AdminController::class,'bulktrading']);
route::get('admincashentry',[AdminController::class,'cashentry']);
route::get('admincashledger',[AdminController::class,'cashledger']);
route::get('admincrosstradelog',[AdminController::class,'crosstrade']);
route::get('admindashboard',[AdminController::class,'dashboard']);
route::get('admingames',[AdminController::class,'games']);
route::get('adminbrokerlisting',[AdminController::class,'brokerlisting']);
route::get('adminjv',[AdminController::class,'jv']);
route::get('adminledger',[AdminController::class,'ledger']);
route::get('adminmarginmanagement',[AdminController::class,'marginmanagement']);
route::get('adminmasterlisting',[AdminController::class,'masterlisting']);
route::get('adminmaxquantitydetail',[AdminController::class,'maxquantitydetail']);
route::get('adminorderlimit',[AdminController::class,'orderlimit']);
route::get('adminportfolioposition',[AdminController::class,'portfolioposition']);
route::get('adminrejectionlog',[AdminController::class,'rejectionlog']);
route::get('adminsummaryreport',[AdminController::class,'summaryreport']);
route::get('admintradeeditdeletelog',[AdminController::class,'tradeeditdeletelog']);
route::get('admintrades',[AdminController::class,'trades']);
route::get('admintrialbalance',[AdminController::class,'trialbalance']);
route::get('adminusereditlog',[AdminController::class,'usereditlog']);
route::get('adminuserlisting',[AdminController::class,'userlisting']);
route::get('adminwatchlist',[AdminController::class,'watchlist']);
});


// master dashboard urls

Route::get('maindashboard', function () {
    return view('master.maindashboard');
});
Route::get('dashboard', function () {
    return view('master.dashboard');
});
Route::get('watchlist', function () {
    return view('master.watchlist');
});

Route::get('trades', function () {
    return view('master.trades');
});
Route::get('portfolio', function () {
    return view('master.portfolio');
});

Route::get('banned', function () {
    return view('master.banned');
});

Route::get('maxquantity', function () {
    return view('master.maxquantity');
});

Route::get('tradeeditdeletelog', function () {
    return view('master.tradeeditdeletelog');
});

Route::get('rejectionlog', function () {
    return view('master.rejectionlog');
});

Route::get('ledger', function () {
    return view('master.ledger');
});

Route::get('login', function () {
    return view('master.login');
});

Route::get('login', function () {
    return view('master.login');
});

Route::get('register', function () {
    return view('master.register');
});

// user dashboard urls

Route::get('usermaindash', function () {
    return view('user.maindash');
});

Route::get('userdashboard', function () {
    return view('user.dashboard');
});

Route::get('userwatchlist', function () {
    return view('user.watchlist');
});

Route::get('usertrades', function () {
    return view('user.trades');
});

Route::get('userportfolioposition', function () {
    return view('user.portfolioposition');
});

Route::get('userbannedblocked', function () {
    return view('user.bannedblocked');
});

Route::get('usermaxquantitydetails', function () {
    return view('user.maxquantitydetails');
});

Route::get('userrejectionlog', function () {
    return view('user.rejectionlog');
});

Route::get('usertradeeditdeletelog', function () {
    return view('user.tradeeditdeletelog');
});

Route::get('userledger', function () {
    return view('user.ledger');
});

Route::get('userlogin', function () {
    return view('user.userlogin');
});


Route::get('userregister', function () {
    return view('user.userregister');
});
Route::post('adduser',[UserController::class,'addUser']);
Route::post('userlogin',[UserController::class,'userlogin']);
Route::get('userlogout',function()
{
    session()->forget('useremail');
    session()->forget('username');
    session()->forget('userid');
    return redirect()->back();
});

// super-master urls

Route::get('superindex', function () {
    return view('super-master.superindex');
});

Route::get('superdashboard', function () {
    return view('super-master.superdashboard');
});


Route::get('super-watchlist', function () {
    return view('super-master.super-watchlist');
});

Route::get('super-trades', function () {
    return view('super-master.super-trades');
});

Route::get('super-portfolio', function () {
    return view('super-master.super-portfolio');
});

Route::get('super-banned', function () {
    return view('super-master.super-banned');
});

Route::get('super-maxquantity', function () {
    return view('super-master.super-maxquantity');
});
Route::get('super-marginmanagement', function () {
    return view('super-master.super-marginmanagement');
});
Route::get('super-summaryreport', function () {
    return view('super-master.super-summaryreport');
});


Route::get('userlisting', function () {
    return view('super-master.userlisting');
});

Route::get('masterlisting', function () {
    return view('super-master.masterlisting');
});

Route::get('brokerlisting', function () {
    return view('super-master.brokerlisting');
});

Route::get('addaccount', function () {
    return view('super-master.addaccount');
});

Route::post('createAccount',[SuperMaster::class,'createAccount']);
Route::post('suserlogin',[SuperMaster::class,'suserlogin']);



Route::get('bulktrading', function () {
    return view('super-master.bulktrading');
});


Route::get('tradeeditdeletelog', function () {
    return view('super-master.tradeeditdeletelog');
});

Route::get('usereditlog', function () {
    return view('super-master.usereditlog');
});
Route::get('autosquareuplog', function () {
    return view('super-master.autosquareuplog');
});

Route::get('crosstradelog', function () {
    return view('super-master.crosstradelog');
});

Route::get('rejectionlog', function () {
    return view('super-master.rejectionlog');
});

Route::get('super-ledger', function () {
    return view('super-master.super-ledger');
});

Route::get('super-cashledger', function () {
    return view('super-master.super-cashledger');
});

Route::get('super-cashentry', function () {
    return view('super-master.super-cashentry');
});

Route::get('super-jv', function () {
    return view('super-master.super-jv');
});

Route::get('trialbalance', function () {
    return view('super-master.trialbalance');
});


Route::get('orderlimit', function () {
    return view('super-master.orderlimit');
});

Route::get('blockallowscripts', function () {
    return view('super-master.blockallowscripts');
});



Route::get('super-register', function () {
    return view('super-master.super-register');
});
Route::get('/', function () {
    return view('super-master.super_login');
});
Route::get('forgot-password', function () {
    return view('super-master.forgot-password');
});


Route::get('suserlogout',function()
{
    session()->forget('username');
    session()->forget('userid');
    return redirect('/');
});

Route::get('smasterlogout',function()
{
    session()->forget('mastername');
    session()->forget('masterid');
    return redirect('/');
});

route::post('userstore',[UserController::class,'userstore']);
