<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Enums\UserType;


class AccountController extends Controller
{
    public function index()
    {
       $user = User::find(Auth::id());
       $plan = $user->plan->name;
        return view('account.' .$plan, compact('user') );
    }



}
