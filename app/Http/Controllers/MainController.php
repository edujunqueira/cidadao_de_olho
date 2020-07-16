<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Deputado;


class MainController extends Controller
{

    public function index()
    {
        $deputados = Deputado::all();

        return view('home', [
            'deputados' => $deputados
        ]);
    }

    public function deputados()
    {
        if(DB::table('deputados')->count() > 1)
            $deputadosImportados = true;
        else
            $deputadosImportados = false;

        $deputados = Deputado::all();

        return view('deputados', [
            'deputados_bool' => $deputadosImportados,
            'deputados' => $deputados
        ]);
    }

}
