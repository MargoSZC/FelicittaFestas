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
        Schema::disableForeignKeyConstraints();
        Schema::create('pacote', function (Blueprint $table) {
            $table->id();
            $table->string('nome',120);
            $table->string('descricao',700);
            $table->string('valor',100);
            $table->string('imagem',150)->nullable();
            $table->foreignId('categoriapacote_id')->nullable()->constrained('categoriapacote')->default(null);

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
        Schema::dropIfExists('pacote');
    }
};
