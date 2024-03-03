<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard(){
        return view('auth.dashboard');
    }
    public function login(){
        return view('auth.login');
    }
    
    public function equipo(){
        return view('auth.equipo');
    }

    public function asignados(){
        return view('auth.asignados');
    }
    public function prestamos(){
        return view('auth.prestamos');
    }


}
