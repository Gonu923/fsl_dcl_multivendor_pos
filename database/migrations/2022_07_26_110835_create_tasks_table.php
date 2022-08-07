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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('vendor_id');
            $table->integer('assigned_employee_id');
            $table->decimal('total_sale');
            $table->decimal('total_amount');
            $table->date('collection_date')->date_format('y-m-d')->nullable();
            $table->decimal('received_amount')->nullable();
            $table->decimal('due_amount')->nullable();
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
        Schema::dropIfExists('tasks');
    }
};
