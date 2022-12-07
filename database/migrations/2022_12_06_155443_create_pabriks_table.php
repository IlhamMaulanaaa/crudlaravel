<?php

use App\Models\Obat;
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
        Schema::create('pabriks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('obat_id');
            $table->string('telpon_pabrik')->unique();
            $table->string('nama_pabrik');
            $table->string('alamat_pabrik');
            $table->string('email_pabrik');
            $table->string('produk');
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
        Schema::dropIfExists('pabriks');
    }
};
