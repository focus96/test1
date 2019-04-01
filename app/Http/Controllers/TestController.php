<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use \DB;

class TestController extends Controller
{
    public function index () {
        $faculty = DB::table('faculty')->get();
        $groups = DB::table('group')->get();
        $methods = DB::table('methods')->get();
        $tests = DB::table('tests')->get();

        return view('psycho.pages.index', compact('faculty', 'groups', 'methods', 'tests'));
    }

    public function profile () {
        return view('psycho.pages.profile');
    }

    public function startTest () {
        return view('psycho.pages.startTest');
    }

    public function endTest () {
        return view('psycho.pages.endTest');
    }
}
