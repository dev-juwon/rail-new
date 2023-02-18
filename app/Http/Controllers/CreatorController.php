<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Creator;

class CreatorController extends Controller
{
    public function __construct()
    {
        $this->middleware('creator');
    }

    public function index(Request $request)
    {
        $user = auth()->user();
         // $creator = $user->getCreatorProfile();
        $creator = $user->ceator;
        $products = Product::where('creator_id', $merchant->id)->with(['images'])->paginate(20);

       
        return view('creator.home', compact('user', 'creator', 'products'));
    }

}
