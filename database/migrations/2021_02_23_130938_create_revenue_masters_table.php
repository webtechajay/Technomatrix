<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevenueMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revenue_masters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('month_year');
            $table->string('invoice_amount');
            $table->string('revenue_amount');
            $table->string('gst');
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
        Schema::dropIfExists('revenue_masters');
    }
}
