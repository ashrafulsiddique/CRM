<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Expense extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->double('amount');            
            $table->date('expense_date');
            $table->string('category');
            $table->integer('customer_id');
            $table->string('account');
            $table->string('description');
            $table->foreign('user_id')->references('id')->on('users');
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
       Schema::dropIfExists('expenses');
    }
}
