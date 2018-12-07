<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user'] = \App\Aluno::count();
        $data['func'] = \App\User::count();
        $data['curso'] = \App\Curso::count();
        $data['turma'] = \App\Turma::count();
        return view('home', compact('data'));
    }
}
