<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Substratos extends Controller
{
    public function index()
    {
        return view('public.substratos');
    }

    public function aço()
    {

        return view('public.aço');
    }

    public function aluminio()
    {
        //
    }

    public function fundido()
    {
        return view('public.fundido');
    }

    public function zinco()
    {
        return view('public.zinco');
    }
    public function equipe()
    {
        return view('public.equipe');
    }
}
