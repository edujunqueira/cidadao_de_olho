<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DateTime;
use App\Despesa;
use App\Deputado;

class DespesaController extends Controller
{
    public function importDespesaId($id) {
        $deputado = Deputado::find($id);
        if(!($deputado->importado)){
            $responseData = Http::get('https://dadosabertos.almg.gov.br/ws/prestacao_contas/verbas_indenizatorias/legislatura_atual/deputados/' . $id . '/datas?formato=json')->json()["list"];
            foreach ($responseData as $resData) {
                $stringData = $resData['dataReferencia']['$'];
                $data = DateTime::createFromFormat('Y-m-d', $stringData);
                $ano = $data->format('Y');
                $mes = $data->format('m');
                $responseDespesa = Http::get('https://dadosabertos.almg.gov.br/ws/prestacao_contas/verbas_indenizatorias/legislatura_atual/deputados/' . $id . '/' . $ano . '/' . $mes . '?formato=json')->json()["list"];
                foreach ($responseDespesa as $desp) {
                    if($desp["idDeputado"]){
                        $despesa = new Despesa();
                        $despesa->deputado_id = intval($desp["idDeputado"]);
                        $despesa->valor = $desp["valor"];
                        $despesa->data = $desp["dataReferencia"]["$"];
                        $despesa->deputado()->associate($deputado);
                        $despesa->save();
                    }
                }
            }
            $deputado->importado = true;
            $deputado->save();
        }
        return redirect('/deputados');
    }

    public function importDespesas()
    {
        $allDeputados = Deputado::all();
        foreach ($allDeputados as $deputado) {

        }

        return redirect('/deputados');
    }

}
