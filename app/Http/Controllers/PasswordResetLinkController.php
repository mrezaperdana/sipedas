<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class PasswordResetLinkController extends Controller
{
    //
    /**
     * Display password request link view.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.passwords.reset');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\validationException
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'email' => ['required','email']
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );
        return $status == Password::RESET_LINK_SENT
        ? back()->with('status', __($status))
        : back()->withInput($request->only('email'))
                ->withErrors(['email' => __($status)]);
    }
}
