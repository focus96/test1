<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use \DB;
use App\Mail\TestMail;

class RegistrationController extends Controller
{
    public function create (RegistrationRequest $request) {

        $login = Str::random(6);
        $password = Str::random(6);
        $passwordHash = Hash::make($password);

        DB::table('users')->insert([
            'name'        => request()->name,
            'surname'     => request()->surname,
            'patronymic'  => request()->patronymic,
            'facult_id'   => request()->faculty,
            'group_id'    => request()->group,
            'email'       => request()->email,
            'login'       => $login,
            'password'    => $passwordHash,
            'created_at'  => date('Y-m-d H:i:s')
        ]);

        Mail::to('zexely@gmail.ru')->send(new TestMail($login, $password));

        return redirect('/');
    }
}
