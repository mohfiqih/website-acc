<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveUniqueFromRandomIdDataPendaftaranSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_pendaftaran_siswa', function (Blueprint $table) {
            $table->dropUnique(
                'data_pendaftaran_siswa_randomid_unique'
            );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_pendaftaran_siswa', function (Blueprint $table) {
            $table->unique('randomId');
        });
    }
}