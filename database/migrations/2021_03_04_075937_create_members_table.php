<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id');
            $table->string('member_email');
            $table->string('member_name');
            $table->string('member_contact');
            $table->string('member_aadhar_number');
            $table->string('member_pan_number');
            $table->string('member_location');
            $table->string('member_joining_date');
            $table->string('member_pan_image');
            $table->string('member_aadhar_image');
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
        Schema::dropIfExists('members');
    }
}
