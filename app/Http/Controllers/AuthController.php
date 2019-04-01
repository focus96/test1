<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Hash;
use \DB;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login (Request $request) {

        $min = 6;
        $max = 60;

        //login
        if (empty(request()->login)) {
            $Report['login'] = 'empty';
            $Report['errorLog'] = 'Введите логин';

        } else { //логин есть

            if (mb_strlen(request()->login) < $min) {
                $Report['login'] = 'range';
                $Report['errorLog'] = 'Минимум ' . $min;

            } else if (mb_strlen(request()->login) > $max) {
                $Report['login'] = 'range';
                $Report['errorLog'] = 'Максимум ' . $max;

            }
        }

        //password
        if (empty(request()->password)) {
            $Report['password'] = 'empty';
            $Report['errorPass'] = 'Введите пароль';

        } else { //пароль есть

            if (mb_strlen(request()->password) < $min) {
                $Report['password'] = 'range';
                $Report['errorPass'] = 'Минимум ' . $min;

            } else if (mb_strlen(request()->password) > $max) {
                $Report['password'] = 'range';
                $Report['errorPass'] = 'Максимум ' . $max;

            }
        }

        if (empty($Report)) { //если нет ошибок
            $user = DB::table('users')->where('login',request()->login)->get();

            if (empty($user[0])) { //нет совпадения
                $Report['user'] = 'empty';
                $Report['errorUser'] = 'Неверено';
            } else { //есть совпадение

//                проверка пароля
                if (Hash::check(request()->password, $user[0]->password)) {
                    $Report['user'] = 'true';
                    $Report['errorUser'] = 'Есть совпадение';

                    //АВТОРИЗАЦИЯ.СЕССИЯ

                } else {
                    $Report['user'] = 'false';
                    $Report['errorUser'] = 'Неверено';
                }
            }
        }




        return $Report;


//        $user = DB::table('users')->where('login', $request->login)->get(); //нашли по логину

//        return $request;
//        if (isset($user)) { //такой логин есть в базе
//
//            $user = $user[0];
//            if (Hash::check($request->password, $user->password)) {
//                return 'Успешный вход';
//            } else {
//                return 'Пароль не верен';
//            }
//
//        } else {
//            return 'Пользователь не найден';
//        }
    }
}
