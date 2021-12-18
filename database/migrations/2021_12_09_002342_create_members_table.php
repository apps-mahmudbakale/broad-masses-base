<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('user_id');
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->string('passport_no');
            $table->string('profession')->nullable();
            $table->string('qualification')->nullable();
            $table->string('job')->nullable();
            $table->string('fixed_phone')->nullable();
            $table->string('phone')->nullable();
            $table->text('current_residence');
            $table->text('skills')->nullable();
            $table->text('hobby')->nullable();
            $table->text('languages');
            $table->text('experience')->nullable();
            $table->text('achievements')->nullable();
            $table->string('party')->nullable();
            $table->date('date_party')->nullable();
            $table->string('survive')->nullable();
            $table->date('date_resign')->nullable();
            $table->text('reason_leaving');
            $table->text('reason_join');
            $table->string('offer');
            $table->text('ideas');
            $table->text('yourself');
            $table->string('acknowledgement');
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
