<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class LogoutController extends Controller {

    //use AuthenticatesUsers;

    protected $redirectTo = 'items.index';

    public function logout() {
        Auth::logout();

        return redirect()->route($this->redirectTo);
    }

}