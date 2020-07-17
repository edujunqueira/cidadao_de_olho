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

        $maioresMeses = DB::table('despesas')->join('deputados', 'despesas.deputado_id', '=', 'deputados.id')->select('deputados.id as id', 'deputados.nome as nome', 'despesas.data as data', DB::raw('SUM(despesas.valor) as valor'))->groupBy('deputados.id', 'deputados.nome', 'despesas.data')->offset(0)->limit(10)->orderBy('valor', 'DESC')->get();
        $newDB = DB::table('despesas')->join('deputados', 'despesas.deputado_id', '=', 'deputados.id')->select('deputados.id as id', 'deputados.nome as nome', 'despesas.data as data', DB::raw('SUM(despesas.valor) as valor'))->groupBy('deputados.id', 'deputados.nome', 'despesas.data')->orderBy('valor', 'DESC')->toSql();
        $gastadores = DB::table(DB::raw("(${newDB}) as tab"))->select('id', 'nome', DB::raw('AVG(valor) as valor'))->groupBy('id', 'nome')->offset(0)->limit(10)->orderBy('valor', 'DESC')->get();
        $maioresDespesas = DB::table('despesas')->select('descricao as nome', DB::raw('SUM(valor) as valor'))->groupBy('nome')->orderBy('valor', 'DESC')->get();

        $atividadeParlamentar = DB::table('despesas')->join('deputados', 'despesas.deputado_id', '=', 'deputados.id')->select('deputados.id as id', 'deputados.nome as nome', 'despesas.data as data', 'despesas.descricao as descricao', DB::raw('SUM(despesas.valor) as valor'))
                ->where('descricao', '=', "Divulgação da atividade parlamentar")->groupBy('descricao', 'id', 'data')->orderBy('valor', 'DESC')->offset(0)->limit(10)->get();

        $locacaoVeiculos = DB::table('despesas')->join('deputados', 'despesas.deputado_id', '=', 'deputados.id')->select('deputados.id as id', 'deputados.nome as nome', 'despesas.data as data', 'despesas.descricao as descricao', DB::raw('SUM(despesas.valor) as valor'))
                ->where('descricao', '=', 'Locação e fretamento de veículos')->groupBy('descricao', 'id', 'data')->orderBy('valor', 'DESC')->offset(0)->limit(10)->get();

        $locacaoVeiculos = DB::table('despesas')->join('deputados', 'despesas.deputado_id', '=', 'deputados.id')->select('deputados.id as id', 'deputados.nome as nome', 'despesas.data as data', 'despesas.descricao as descricao', DB::raw('SUM(despesas.valor) as valor'))
                ->where('descricao', '=', 'Locação e fretamento de veículos')->groupBy('descricao', 'id', 'data')->orderBy('valor', 'DESC')->offset(0)->limit(10)->get();

        $consultoria = DB::table('despesas')->join('deputados', 'despesas.deputado_id', '=', 'deputados.id')->select('deputados.id as id', 'deputados.nome as nome', 'despesas.data as data', 'despesas.descricao as descricao', DB::raw('SUM(despesas.valor) as valor'))
                ->where('descricao', '=', 'Serviços de consultoria, assessoria e pesquisa')->groupBy('descricao', 'id', 'data')->orderBy('valor', 'DESC')->offset(0)->limit(10)->get();

        $combustivel = DB::table('despesas')->join('deputados', 'despesas.deputado_id', '=', 'deputados.id')->select('deputados.id as id', 'deputados.nome as nome', 'despesas.data as data', 'despesas.descricao as descricao', DB::raw('SUM(despesas.valor) as valor'))
                ->where('descricao', '=', 'Combustível e lubrificante')->groupBy('descricao', 'id', 'data')->orderBy('valor', 'DESC')->offset(0)->limit(10)->get();

        $imoveis = DB::table('despesas')->join('deputados', 'despesas.deputado_id', '=', 'deputados.id')->select('deputados.id as id', 'deputados.nome as nome', 'despesas.data as data', 'despesas.descricao as descricao', DB::raw('SUM(despesas.valor) as valor'))
                ->where('descricao', '=', 'Locação de imóvel e despesas a ele concernentes')->groupBy('descricao', 'id', 'data')->orderBy('valor', 'DESC')->offset(0)->limit(10)->get();

        return view('/despesas', [
            'info' => [
                [
                    'nome' => 'gastadores',
                    'desc' => 'Deputados com maior média de gastos mensal',
                    'dado' => $gastadores,
                    'qual' => 'Gastos',
                    'data' => false
                ],
                [
                    'nome' => 'maioresMeses',
                    'desc' => 'Deputados com maiores gastos em um mês',
                    'dado' => $maioresMeses,
                    'qual' => 'Gasto',
                    'data' => true
                ],
                [
                    'nome' => 'maioresDespesas',
                    'desc' => 'Maiores despesas totais',
                    'dado' => $maioresDespesas,
                    'qual' => 'Gasto',
                    'data' => false
                ],
                [
                    'nome' => 'atividadeParlamentar',
                    'desc' => 'Deputados com maiores gastos em atividade parlamentar em um mês',
                    'dado' => $atividadeParlamentar,
                    'qual' => 'Gasto',
                    'data' => true
                ],
                [
                    'nome' => 'locacaoVeiculos',
                    'desc' => 'Deputados com maiores gastos em locação de veiculos em um mês',
                    'dado' => $locacaoVeiculos,
                    'qual' => 'Gasto',
                    'data' => true
                ],
                [
                    'nome' => 'consultoria',
                    'desc' => 'Deputados com maiores gastos em consultoria e assessoria em um mês',
                    'dado' => $consultoria,
                    'qual' => 'Gasto',
                    'data' => true
                ],
                [
                    'nome' => 'combustivel',
                    'desc' => 'Deputados com maiores gastos em combustível em um mês',
                    'dado' => $combustivel,
                    'qual' => 'Gasto',
                    'data' => true
                ],
                [
                    'nome' => 'imoveis',
                    'desc' => 'Deputados com maiores gastos em locação de imóveis em um mês',
                    'dado' => $imoveis,
                    'qual' => 'Gasto',
                    'data' => true
                ],
            ]
        ]);
    }

}
