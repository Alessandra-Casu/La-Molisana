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
        Schema::create('pastas', function (Blueprint $table) {
            $table->id();

            $table->string("src", 200)->nullable();
            $table->string("titolo", 100); 
            $table->string("tipo", 20);
            $table->tinyInteger("cottura")->unsigned(); 
            $table->smallInteger("peso")->unsigned();
            $table->text("descrizione")->nullable();
            
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
        Schema::dropIfExists('pastas');
    }
};
