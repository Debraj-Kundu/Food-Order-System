<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    function login(){
        return view('login');
    }

    function process_login(REQUEST $request){
        $valid = DB::table('users')->where(['name'=>$request->input('uname'), 'pass'=>$request->input(('upass'))])->get();
        if(count($valid) > 0){
            return redirect('/home');
        }
        else{
            return redirect('/login');
        }
    }

    function home(){
        return view('home');
    }

    function orders(){
        $fitems = DB::table('items')->select('id', 'name', 'cost', 'date')->get();
        $fitems = json_encode($fitems);
        $fitems = json_decode($fitems, true);
        $total = DB::table('items')->sum('cost');
        $total = json_encode($total);
        $total = json_decode($total);
        return view('orders', ['items'=>[$fitems, $total]]);
    }

    function addItem1(Request $req ){        
        $today = date("d/m/Y");
        DB::table('items')->insert(['name'=>'muffin', 'cost'=>80, 'date'=>$today]);
        return view('home');
    }
    function addItem2(Request $req ){   
        $today = date("d/m/Y");
        DB::table('items')->insert(['name'=>'Biriyani', 'cost'=>280, 'date'=>$today]);
        return view('home');
    }
    function addItem3(Request $req ){    
        $today = date("d/m/Y");
        DB::table('items')->insert(['name'=>'cake', 'cost'=>190, 'date'=>$today]);
        return view('home');
    }

}
