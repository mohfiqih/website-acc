<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('data_pendaftaran_siswa', function (Blueprint $table) {
            $table->id();

            $table->string('email')->nullable();

            $table->string('nama_katakana')->nullable();
            $table->string('nama_indonesia')->nullable();
            $table->text('alamat')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->integer('usia')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('no_hp_aktif')->nullable();
            $table->string('agama')->nullable();

            $table->decimal('tinggi_badan', 5, 2)->nullable();
            $table->decimal('berat_badan', 5, 2)->nullable();

            $table->string('golongan_darah')->nullable();
            $table->string('buta_warna')->nullable();
            $table->string('mata_kanan')->nullable();
            $table->string('mata_kiri')->nullable();
            $table->text('pernah_operasi')->nullable();
            $table->text('apakah_sedang_minum')->nullable();
            $table->string('tangan')->nullable();
            $table->string('merokok')->nullable();
            $table->text('penyakit_dalam')->nullable();

            $table->text('keahlian')->nullable();
            $table->text('sifat_kepribadian')->nullable();
            $table->text('kelebihan')->nullable();
            $table->text('kelemahan')->nullable();
            $table->string('status')->nullable();
            $table->text('hobi')->nullable();
            $table->text('motivasi')->nullable();
            $table->text('nabung_berapa')->nullable();
            $table->text('apa_yang_akan_dilakukan')->nullable();

            $table->text('pernah_tinggal_dijepang')->nullable();
            $table->text('kualifikasi')->nullable();

            $table->string('sekolah_dasar')->nullable();
            $table->string('tahun_masuk_sd')->nullable();
            $table->string('tahun_keluar_sd')->nullable();

            $table->string('sekolah_menengah_pertama')->nullable();
            $table->string('tahun_masuk_smp')->nullable();
            $table->string('tahun_keluar_smp')->nullable();

            $table->string('sekolah_menengah_atas')->nullable();
            $table->string('tahun_masuk_smak')->nullable();
            $table->string('tahun_keluar_smak')->nullable();

            $table->string('jurusan')->nullable();
            $table->string('perguruan_tinggi')->nullable();

            $table->text('pengalaman_kerja')->nullable();
            $table->text('bahasa_asing')->nullable();

            $table->string('pernah_keluar_negeri')->nullable();
            $table->date('tanggal_keluar_negeri')->nullable();
            $table->string('pernah_keluar_negeri_lain')->nullable();
            $table->text('negara')->nullable();

            $table->string('kerabat_dijepang')->nullable();
            $table->string('hubungan_kerabat_dijepang')->nullable();

            $table->text('belajar_bahasa')->nullable();
            $table->string('buku_yang_dipakai')->nullable();
            $table->string('bab_yang_dipelajari')->nullable();

            $table->string('nama_ayah')->nullable();
            $table->string('hubungan_ayah')->nullable();
            $table->integer('usia_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();

            $table->string('nama_ibu')->nullable();
            $table->string('hubungan_ibu')->nullable();
            $table->integer('usia_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();

            $table->text('nama_saudara')->nullable();
            $table->text('pendapat_keluarga')->nullable();
            $table->string('no_hp_keluarga')->nullable();

            $table->string('nama_mentor')->nullable();
            $table->string('ukuran_baju')->nullable();
            $table->string('ukuran_sepatu')->nullable();
            $table->string('pilih_kelas')->nullable();
            $table->string('pilih_program')->nullable();

            $table->string('randomId')->nullable()->unique();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_pendaftaran_siswa');
    }
};