<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->hasRole('root')) {
            return view('modules.home.root.index', ['menu'=>'inicio']);
        } elseif ($user->hasRole('admin')) {
            return view('modules.home.admin.index', ['menu'=>'inicio']);
        } elseif ($user->hasRole('operator')) {
            return view('modules.home.operator.index', ['menu'=>'inicio']);
        } else {
            return view('modules.home.default.index', ['menu'=>'inicio']);
        }
    }
}
