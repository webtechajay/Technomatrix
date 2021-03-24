<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('expense_month_year');
            $table->integer('expense_salaries');
            $table->integer('expense_internet');
            $table->integer('expense_water');
            $table->integer('expense_electricity');
            $table->integer('expense_pantry');
            $table->integer('expense_kafe');
            $table->integer('expense_marketing');
            $table->integer('expense_stationary');
            $table->integer('expense_traveling');
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
