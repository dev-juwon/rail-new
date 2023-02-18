<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Account\PaymentController;
use MusahMusah\LaravelMultipaymentGateways\Contracts\PaystackContract;
use App\ModelsPayment;
use App\Models\Transactions;
use App\Enums\UserPlan;

use Illuminate\Support\Facades\Config;

class MemberPackageController extends PaymentController
{

    //uses constructor dependency injection

   public $PaymentControler;

    public function __construct()
    {
        $user = User::find(Auth::id());
      /*  if($user->hasType())
        {
            redirect('/home');
         } */
    }


    public  function index()
    {
        $plan = request()->query('plan');
      
        $amount = "5500";
        $plan = UserPlan::AFFILIATE ? UserPlan::AFFILIATE :  UserPlan::CREATOR;
        if($plan){
            session(['plan' => $request->query('plan')]);
        }
        $user = User::find(Auth::id());

        return view('pay.pay', ['amount' => $amount, 'plan' => $plan, 'user' => $user]);


    }

    public function initiatePayment(Request $request, PaystackContract $paystack)
    {
        $payment = $paystack->redirectToCheckout();
       
        return $payment;
    }
    
    public function handlePaymentResponse(Request $request, PaystackContract $paystack)
    {
        $response = $paystack->getPaymentData();
       
        // Handle payment response here
        if($response['status'])
        {
            Payment::create([
            "user_id" => auth()->user()->id,
            "reference" => $response['ref'],
            "amount" => $response['data']->amount,
            "gateway" => "paystack",
            ]);

            $plan = session('plan');

            User::where('id',  auth()->user()->id)
                  ->update(['plan' => $plan]);

            alert()->success('Plan Purchase Sucessfully');

            return redirect()->route('account.index');
        }else{
            return redirect()->route('home');
        }

    }

}