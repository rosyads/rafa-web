<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('product_id');
            $table->foreignId('brand_id');
            $table->foreignId('type_id');
            $table->foreignId('customer_id');
            $table->string('serial_num');
            $table->string('version');
            $table->string('job_title');
            $table->string('report_fault');
            $table->string('action');
            $table->string('remarks');
            $table->string('status');
            $table->date('submit_date');
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
        Schema::dropIfExists('reports');
    }
}
