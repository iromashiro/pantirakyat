<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaAsuransisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta_asuransis', function (Blueprint $table) {
            $table->id();
            $table->string('no_kk', 100);
            $table->string('nik', 100)->unique();
            $table->string('nama_lengkap');
            $table->string('tempat_lahir', 100)->nullable()->default('text');
            $table->date('tanggal_lahir')->nullable();
            $table->boolean('jenis_kelamin')->nullable();
            $table->integer('status_kawin')->nullable();
            $table->string('pekerjaan', 100)->nullable();
            $table->text('alamat')->nullable();
            $table->string('kecamatan', 100)->nullable();
            $table->string('kelurahan', 100)->nullable();
            $table->string('verifikasi_dinsos')->default(0);
            $table->string('verifikasi_asuransi')->default(0);
            $table->string('no_rekening', 100)->nullable();//
            $table->string('nama_bank', 100)->nullable();//
            $table->string('ahli_waris', 100)->nullable();//
            $table->string('no_hp')->nullable();
            $table->string('keterangan_dinsos', 100)->nullable();
            $table->string('keterangan_asuransi', 100)->nullable();
            $table->date('tanggal_meninggal')->nullable();
            $table->date('tanggal_mengajukan')->nullable();//
            $table->date('tanggal_transfer')->nullable();//
            $table->boolean('status_meninggal')->default(0);
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
        Schema::dropIfExists('peserta_asuransis');
    }
}
