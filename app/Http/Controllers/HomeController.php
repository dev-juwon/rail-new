<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('planauth');
    }

    public function index()
    {
        
        return view('pages.home');
   
    }

    public function dashboard()
    {
        
        return view('pages.dashboard');
   
    }





}
