<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_name');
            $table->bigInteger('employee_uid')->unique();
            $table->string('employee_photo')->nullable();
            $table->string('employee_salary');
            $table->string('employee_designation');
            $table->string('employee_working_area');
            $table->string('employee_live_location');
            $table->integer('salary_status')->nullable();
            $table->integer('login_status')->nullable();
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
        Schema::dropIfExists('employees');
    }
};
