<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pencils', function (Blueprint $table) {
            $table->id();
            $table->string('pavadinimas',255);
            $table->text('aprašymas')->nullable();
            $table->biginteger('kiekis_sandely',)->unsigned();
            $table->float('kaina', 10, 2, true);
            $table->string('foto_nuoroda',255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pencils');
    }
};
