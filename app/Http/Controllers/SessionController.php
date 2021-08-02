<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function show()
    {
        return view('login.form');
    }

    public function attempt()
    {
        $credentials = request()->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (! auth()->attempt($credentials)) {
            throw ValidationException::withMessages(['email' => 'Учетные данные не совпадают.']);
        }

        session()->regenerate();

        return redirect()->route('home')->with('success', 'Привет!');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->route('home')->with('success', 'Пока!');
    }
}
