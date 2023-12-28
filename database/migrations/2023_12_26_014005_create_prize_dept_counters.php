<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrizeDeptCounters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prize_dept_counters', function (Blueprint $table) {
            $table->id('prize_dept_counter_id');
            $table->timestamps();
            $table->foreignId('id_prize')->references('prize_id')->on('prizes');
            $table->foreignId('id_department')->references('department_id')->on('departments');
            $table->smallInteger('counter')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prize_dept_counters');
    }
}
