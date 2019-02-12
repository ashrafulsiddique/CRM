<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Task extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {

            $table->increments('id');
            $table->string('type');
            $table->string('project');
            $table->int('customer_id');
            $table->date('start_date');
            $table->date('due_date');
            $table->int('staff_id');
            $table->string('priority');
            $table->string('status');
            $table->text('details');
	

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
