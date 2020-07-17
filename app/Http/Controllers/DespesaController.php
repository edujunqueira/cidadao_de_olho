<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
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
                        $despesa->descricao = $desp["descTipoDespesa"];
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

/*
public function importDespesaId($id) {

    $deputado = Deputado::find($id);
    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'https://dadosabertos.almg.gov.br/',
        // You can set any number of default request options.
        //'timeout'  => 20.0,
    ]);

    if(!($deputado->importado)){ // se o deputado não teve seus gastos importados ainda
        // pedimos as datas dos gastos dele
        $promise = $client->getAsync('/ws/prestacao_contas/verbas_indenizatorias/legislatura_atual/deputados/' . $id . '/datas?formato=json');
        $responseData = $promise->wait()["list"];
        //$responseData = $promise->json()["list"];
        foreach ($responseData as $resData) {
            //tratamos os dados
            $stringData = $resData['dataReferencia']['$'];
            $data = DateTime::createFromFormat('Y-m-d', $stringData);
            $ano = $data->format('Y');
            $mes = $data->format('m');
            // pedimos os gastos de cada data dele
            $promise2 = $client->getAsync('/ws/prestacao_contas/verbas_indenizatorias/legislatura_atual/deputados/' . $id . '/' . $ano . '/' . $mes . '?formato=json');

            $responseDespesa = $promise2->wait()["list"];
            //$responseDespesa = $responseDespesa->json()["list"];
            foreach ($responseDespesa as $desp) {

                if($desp["idDeputado"]){
                    // criamos uma nova despesa, linkada ao deputado
                    $despesa = new Despesa();
                    $despesa->deputado_id = intval($desp["idDeputado"]);
                    $despesa->valor = $desp["valor"];
                    $despesa->data = $desp["dataReferencia"]["$"];
                    $despesa->deputado()->associate($deputado);
                    $despesa->save();
                    return redirect('/deputados');
                }
            }


            $deputado->importado = true;
            $deputado->save();
        }
        return $response->getBody();


    }
}
*/
    public function importDespesas()
    {
        set_time_limit(3600);
        $allDeputados = Deputado::all();
        foreach ($allDeputados as $deputado) {
            DespesaController::importDespesaId($deputado->id);
        }

        return redirect('/deputados');
    }

    public function viewDespesas()
    {

        //$gastadores = DB::table('despesas')->join('deputados', 'despesas.deputado_id', '=', 'deputados.id')->select('deputados.id', 'deputados.nome', 'despesas.data', DB::raw('AVG(SUM(despesas.valor)) as valor'))->groupBy('deputados.id', 'deputados.nome', 'despesas.data')->offset(0)->limit(10)->orderBy('valor', 'DESC')->get();
        $maioresMeses = DB::table('despesas')->join('deputados', 'despesas.deputado_id', '=', 'deputados.id')->select('deputados.id as id', 'deputados.nome as nome', 'despesas.data as data', DB::raw('SUM(despesas.valor) as valor'))->groupBy('deputados.id', 'deputados.nome', 'despesas.data')->offset(0)->limit(10)->orderBy('valor', 'DESC')->get();
        $newDB = DB::table('despesas')->join('deputados', 'despesas.deputado_id', '=', 'deputados.id')->select('deputados.id as id', 'deputados.nome as nome', 'despesas.data as data', DB::raw('SUM(despesas.valor) as valor'))->groupBy('deputados.id', 'deputados.nome', 'despesas.data')->orderBy('valor', 'DESC')->toSql();
        $gastadores = DB::table(DB::raw("(${newDB}) as tab"))->select('id', 'nome', DB::raw('AVG(valor) as valor'))->groupBy('id', 'nome')->offset(0)->limit(10)->orderBy('valor', 'DESC')->get();
        return view('/despesas', [
            'info' => [
                [
                    'nome' => 'gastadores',
                    'desc' => 'Deputados com maior média de gastos mensal',
                    'dado' => $gastadores,
                    'qual' => 'Gastos'
                ],
                [
                    'nome' => 'maioresMeses',
                    'desc' => 'Deputados com maiores gastos em um mês',
                    'dado' => $maioresMeses,
                    'qual' => 'Gasto'
                ],
            ]
        ]);
    }

}
