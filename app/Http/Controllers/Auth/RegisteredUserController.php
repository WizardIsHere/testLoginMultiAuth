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

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create() 
    {
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

        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'registration' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'mname' => ['string', 'max:255'],
            'lname' => ['string', 'max:255'],
            'department' => ['required', 'string', 'max:255'],
            'phone' => ['required','string','max:255'],
            'semester' => ['required', 'integer', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'avatar' => ['required','mimes:jpeg,png'],
        ]);

  
        if(request()->hasfile('avatar')){
            $avatarName = time().'.'.request()->avatar->getClientOriginalExtension();
            request()->avatar->move(public_path('avatars'), $avatarName);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'registration' => $request->registration,
            'password' => Hash::make($request->password),
            'mname' => $request->mname,
            'lname' => $request -> lname,   
            'phone' => $request->phone,
            'department' => $request -> department,
            'semester' => $request -> semester,
            'address' => $request -> address,
            'avatar' => $avatarName ?? NULL,
        ]);

        // dd($request->all());

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
