<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEmployees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('employee_id');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('employee_name');
            $table->string('employee_nik');
            $table->foreignId('id_department')->references('department_id')->on('departments');
            $table->float('lama_kerja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
