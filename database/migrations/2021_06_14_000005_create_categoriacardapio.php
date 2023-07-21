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
        Schema::create('categoriacardapio', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->timestamps();
        });

        Schema::disableForeignKeyConstraints();

        Schema::create('cardapio', function (Blueprint $table) {
            $table->id();
            $table->string('nome',120);
            $table->string('quantidade',50);
            $table->string('valor',50);
            $table->string('imagemcardapio',150)->nullable();
            $table->foreignId('categoriacardapio_id')->nullable()->constrained('categoriacardapio')->default(null);
            $table->timestamps();
        });


        Schema::enableForeignKeyConstraints();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoriacardapio');
    }
};

?>
