<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }
    public function dirLogin(){
        return view('admin.login');
    }

    public function login(LoginRequest $request) {
        $login = $request->input('login');
        $password = $request->input('password');

        $user = User::where('login', $login)->first();

        if (!$user || !Hash::check($password, $user->password)) {
            return redirect()->back()->withErrors(['error' => 'Login or password is incorrect']);
        }

        // Login successful
        session()->put('admin_panel_session', $login);
        return redirect()->route('admin.index');
    }

}
