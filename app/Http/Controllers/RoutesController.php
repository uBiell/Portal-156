<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutesController extends Controller
{
    public function portal(){
        return view('portal');
    }

    public function register(){
        return view('portal.register');
    }

    public function request(){
        return view('portal.request.request-one');
    }

    public function requestCpf(){
        return view('portal.request.request-cpf');
    }

    public function requestCnpj(){
        return view('portal.request.request-cnpj');
    }

    public function requestFinal(){
        return view('portal.request.request-final');
    }

    public function requestModal(){
        return view('portal.request.request-modal');
    }

    public function statistics(){
        return view('pages.statistics');
    }

    public function services(){
        return view('pages.services');
    }

    public function about(){
        return view('pages.about');
    }
}