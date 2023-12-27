<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class LandingController extends Controller
{
    public function index()
    {
        $rooms = Room::where('status', 1)->where('user_id', null)->limit(5)->get();
        return view('welcome', [
            'rooms' => $rooms,
        ]);
    }
    public function room()
    {
        $rooms = Room::where('status', 1)->where('user_id', null)->get();
        return view('room', [
            'rooms' => $rooms,
        ]);
    }
    public function detail($id)
    {
        $rooms = Room::find($id);
        $roomsDesc = Room::where('status', 1)->where('user_id', null)->limit(5)->get();
        return view('detail', [
            'rooms' => $rooms,
            'roomsDesc' => $roomsDesc,
        ]);
    }

    public function register()
    {
        if (Auth::check()) {
            if(auth()->user()->role == 1 ) {
                return redirect('/admin/home');
            } else {
                return redirect('/user/home');
            }
        }
        return view('register');
    }

    public function regAuth(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:'.User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/login');
    }
    public function login()
    {
        if (Auth::check()) {
            if(auth()->user()->role == 1 ) {
                return redirect('/admin/home');
            } else {
                return redirect('/user/home');
            }
        }
        return view('login');
    }
    public function authenticate(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        if (Auth::check()) {
            if (auth()->user()->role == 1) {
                return redirect('/admin/home');
            } else {
                return redirect('/user/home');
            }
        }
    }
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
}
public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }



    public function checkout(Request $request, $id)
    {
            DB::table('room')
                ->where('id', $id)
                ->update([
                    'user_id' => auth()->user()->id,
                ]);

            return redirect('/user/home')->with('success', 'Room successfully dipesan.');
    }
}
}

