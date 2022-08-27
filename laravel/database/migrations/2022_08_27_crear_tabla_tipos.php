<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
       $this ->down(); 
        Schema::create('credito_tipos', function (Blueprint $table) {
            $table->id();
            $table->string('tipos',100);
            $table->string('descripcion',200)->nullable();
            $table->boolean('habilitado')->default(1);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credito_tipos');
    }
};
