<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('welcome', [
            'title' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->role == 1) {
                return redirect()->route('admin.dashboard');
            } elseif (auth()->user()->role == 2) {
                return redirect()->route('user.dashboard');
            } else {
                return redirect('/login');
            }
        }
        return back()->with('loginError', 'Username atau Password salah!');
        // dd('berhasil login');
    }


    public function logout(Request $request)
    {
        Cookie::queue(Cookie::make('last_username', auth()->user()->username, 2628000));
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([

            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        // if ($validatedData->fails()){
        //     return back()->with('regError', 'Gagal Mendaftar, Periksa Kembali Isian!');
        // }
        //bcrypt
        $validatedData['password'] = bcrypt($validatedData['password']);

        // hash
        // $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        // dd('register berhasil');
        // return view('register.index',[
        //     'title' => 'register'
        // ]);

        // $request->session()->flash('success', 'Pendaftaran Berhasil!');
        return redirect('/login')->with('success', 'Pendaftaran Berhasil! Silahkan tunggu atau hubungi admin agar segera memverifikasi akun anda.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }
}
