<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('director_name_one');
            $table->string('director_name_two');
            $table->string('address');
            $table->string('pan_card_number');
            $table->string('aadhar_card_number');
            $table->string('number_of_employees');
            $table->string('number_of_desks');
            $table->string('meeting_room_hours');
            $table->string('locking_time');
            $table->string('lockout_time');
            $table->string('notice_peroid');
            $table->string('tenure');
            $table->string('certification_of_information_image');
            $table->string('pan_card_image');
            $table->string('aadhar_card_image');
            $table->string('tan_card_image');
            $table->string('contact_person_name');
            $table->string('contact_person_mobile_number');
            $table->string('profile_pic');
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
        Schema::dropIfExists('companies');
    }
}
