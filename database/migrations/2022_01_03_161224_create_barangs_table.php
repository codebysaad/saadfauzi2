<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('id_barang');
            $table->string('jenis', 10)->nullable()->default('DBR');
            $table->bigInteger('nup');
            $table->string('merk_type', 255);
            $table->bigInteger('id_unit');
            $table->bigInteger('id_ruang');
            $table->string('condition', 255);
            $table->bigInteger('id_user');
            $table->string('tgl_perolehan', 255);
            $table->string('tgl_buku', 255);
            $table->bigInteger('nilai_perolehan');
            $table->string('asal', 255);
            $table->bigInteger('akun');
            $table->string('ket', 255);

            $table->softDeletes();
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
        Schema::dropIfExists('barangs');
    }
}
