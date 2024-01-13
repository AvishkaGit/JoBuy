<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $role = Auth::user()->role;

        if($role == 'customer')
        {
            return view('customer.dashboard');
        }elseif($role == 'seller'){
            return view('seller.dashboard');
        }elseif($role == 'admin'){
            return view('admin.dashboard');
        }else{
            return ('/');
        }
    }
}
