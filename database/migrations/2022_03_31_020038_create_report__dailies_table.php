<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportDailiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report__dailies', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->date('tanggal_report');
            $table->text('pekerjaan');
            $table->text('lokasi');
            $table->text('detail_pekerjaan');
            $table->text('hasil_kerja');
            $table->text('agenda_besok');
            $table->string('image')->nullable();
            $table->string('report_status');
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
        Schema::dropIfExists('report__dailies');
    }
}
