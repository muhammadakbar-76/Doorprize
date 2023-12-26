<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableWinners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('winners', function (Blueprint $table) {
            $table->id('winner_id');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('employee_name');
            $table->string('employee_nik');
            $table->string('department_name');
            $table->float('lama_kerja');
            $table->string('prize_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('winners');
    }
}
