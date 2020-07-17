<?php

use Illuminate\Database\Seeder;

class CleanDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows = DB::select('SHOW TABLES');
        $tables = array_column($rows, 'Tables_in_'.env('DB_DATABASE'));

        $this->clean($tables);
    }

    private function clean($tables)
    {
        Model::unguard();
        foreach ($tables as $table) {
            DB::table($table)->delete();
            DB::statement('ALTER TABLE '.$table.' AUTO_INCREMENT = 0;');
        }
    }

}
