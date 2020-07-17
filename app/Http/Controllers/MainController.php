<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Deputado;
use Database\Seeds\CleanDatabaseSeeder;
use Illuminate\Database\Eloquent\Model;

class MainController extends Controller
{

    public function index()
    {
        return view('home');
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


    public function deleteData()
    {

        $rows = DB::select('SHOW TABLES');
        $tables = array_column($rows, 'Tables_in_'.env('DB_DATABASE'));

        Model::unguard();
        foreach ($tables as $table) {
            DB::table($table)->delete();
            DB::statement('ALTER TABLE '.$table.' AUTO_INCREMENT = 0;');
        }

        return redirect('/deputados');
    }

}
