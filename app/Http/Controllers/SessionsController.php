<?php

namespace App\Http\Controllers;


use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{

    public function create()
    {
        return view('sessions.create');
    }

    /**
     * @throws ValidationException
     */
    public function store()
    {
        // validate the request
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //attempt to authenticate and log in the user
        //based on the provided credentials
        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);

        }

        // auth failed


        // prevent web session hacking
        session()->regenerate();
        // redirect with a success flash message
        return redirect('/')->with('success', 'Welcome Back!');

//        return back()
//            ->withInput()
//            ->withErrors(['email' => 'Your provided credentials could not be verified.']);

    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
