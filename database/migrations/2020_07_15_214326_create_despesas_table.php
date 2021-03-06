<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDespesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('despesas', function (Blueprint $table) {
            $table->id();
            $table->integer('deputado_id')->unsigned();
            $table->double('valor', 8, 2);
            $table->double('valorReembolsado', 8, 2);
            $table->date('data');
            $table->string('descricao');
            $table->string('emitente');

            $table->foreign('deputado_id')
                  ->references('id')
                  ->on('deputados')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('despesas');
    }
}
