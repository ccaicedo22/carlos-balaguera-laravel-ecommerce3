<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
           $table->charset ='utf8mb4';
            $table->id();
            $table->timestamps();
            $table->enum('formaspago',['debito','credito', 'paypal'])->default('debito');
            $table->enum('estado',['fallido','cancelado', 'creado', 'pendiente', 'entregado'])->default('pendiente');
            $table->string('preciofinal');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }


/*$*/
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
