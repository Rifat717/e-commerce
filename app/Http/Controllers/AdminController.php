<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class AdminController extends Controller
{
    public function index()
    {
    	return view ('admin_login');
    }

    

    public function dashboard(Request $request)
    {

    	$admin_email=$request->admin_email;
        $admin_passwrod=$request->password;
    	

        $result = DB::table('tbl_admin')
            ->where('admin_email',$admin_email)
            ->where('admin_passwrod',$admin_passwrod)
            ->first();

           /* $Sql= "select * from tbl_admin 
                where admin_email= '$admin_email'
                and admin_passwrod = '$admin_passwrod';";

            $result =  DB::select($Sql);*/

        if ($result) {
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/dashboard');  
            
        }else{
            Session::put('message','Email or Password is Invalid');
            return Redirect::to('/admin');
        }

				/*if ($result) {
					Session::put('admin_email',$admin_email);
					Session::put('admin_id',$admin_email);
					return Redirect::to('/dashboard');
				}else{
					Session::put('message','incorect');
					return Redirect::to('/admin');
			     }*/
                /*echo "<pre>";
                print_r($result);
                echo "<pre>";*/
    }
}
