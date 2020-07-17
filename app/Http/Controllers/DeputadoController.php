<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Deputado;

class DeputadoController extends Controller
{

    public function importDeputados()
    {

        $response = Http::get('http://dadosabertos.almg.gov.br/ws/deputados/em_exercicio?formato=json');
        foreach ($response->json()["list"] as $dep) {
            Deputado::create($dep);
        }
        return redirect('/deputados');
    }

    public function view($id)
    {
        $despesasPorMes = DB::table('despesas')->select(DB::raw("DATE_FORMAT(data,'%m-%Y') as data"), DB::raw('sum(valor) as valor'))->where('deputado_id', '=', $id)->groupBy('data')->get();

        $deputado = Deputado::find($id);
        $despesas = $deputado->despesas;
        return view('deputado', [
            'deputado' => $deputado,
            'despesas' => $despesas,
            'despesasPorMes' => $despesasPorMes
        ]);
    }

}
