<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    function main() {
        $email = User::where('id', Auth::id())->first();
        return view('main', ['email' => $email->email]);
    }
    function catalog() {
        $email = User::where('id', Auth::id())->first();
        return view('catalog', ['email' => $email->email]);
    }

}
