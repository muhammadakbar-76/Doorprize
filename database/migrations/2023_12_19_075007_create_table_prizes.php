<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePrizes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prizes', function (Blueprint $table) {
            $table->id('prize_id');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('prize_name');
            $table->smallInteger('prize_value');
            $table->smallInteger('max_count');
            $table->string('rules_field');
            $table->string('rules_operator');
            $table->string('rules_value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prizes');
    }
}
