<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Enums\UserRole;


class RegisterController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        if ($request->has('ref')) {
            session(['referrer' => $request->query('ref')]);
        }
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
       /* $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone' => ['required', 'integer','unique:'.User::class],
            
        ]);
*/
        $referrer = session('referrer');
        $user = User::create([
             'username' => $request->surname,
             'firstname' => $request->firstname,
             'middlename' => $request->middlename,
             'surname' => $request->surname,
             'email' => $request->email,
             'phone' => $request->phone,
             'password' => Hash::make($request->password),
             'referrer_user_id' => $referrer ? $referrer->id : null,
           
        ]);

        

        event(new Registered($user));
        $referrer?->increment('referal_views');
        alert()->success('User Registered Sucessfully');
        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
