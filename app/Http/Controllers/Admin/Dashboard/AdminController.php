<?php

namespace App\Http\Controllers\Admin\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /** Admin Login Function **/

    public function adminLogin(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();


            // Validation in AdminLogin Form

            $request->validate([
                'email' => 'required|email|max:255',
                'password' => 'required'
            ]);

            // Auth Admin Condition

            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
                return redirect('/admin/dashboard');
            }
            else{
                Session::flash('message','Invalid User Name & Password');
                return redirect('/admin');
            }
        }

        return view('admin.login.login');
    }


    // logout Admin Panel

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }


    /**  Dashsboard Function  **/

    public function dashboard()
    {

        return view('admin.home.index');
    }

}
