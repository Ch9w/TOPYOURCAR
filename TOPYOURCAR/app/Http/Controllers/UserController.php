<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function registration(Request $request)
    {
        $phonenumber = $request->input('phonenumber');
        $email = $request->input('email');
        $password = $request->input('password');
        $repeatpassword = $request->input('repeatpassword');
        if ($password == $repeatpassword) {
            if (User::where('phonenumber', $phonenumber)->exists()) {
                return redirect(route('registration'))->withErrors(["phonenumber" => "Такой номер телефона уже зарегистрирован"]);
            }
            if (User::where('email', $email)->exists()) {
                return redirect(route('registration'))->withErrors(["email" => "Такой email уже зарегистрирован"]);
            }

            $user = User::create([
                'phonenumber' => $phonenumber,
                'email' => $email,
                'password' => bcrypt($password),
                'id_role' => 1
            ]);
            if ($user) {
                Auth::login($user);
                return redirect()->to(route('tasks'));
            }
        } else {
            return redirect(route('registration'))->withErrors(["password_repeat" => "Пароли не совпадают"]);
        }
        return view('registration');
    }
    public function authorization(Request $request)
    {
        $phonenumber = $request->input('phonenumber');
        $password = $request->input('password');
        if (Auth::attempt($request->only('phonenumber', 'password'))) {
            $user = User::where('phonenumber', $phonenumber)->first();
            Auth::login($user);
            return redirect(route('main'));
        } else {
            return redirect(route('authorization'))->withErrors(["auth" => "Вы не авторизовались"]);
        }
    }

}
