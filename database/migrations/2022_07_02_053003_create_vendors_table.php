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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->integer('category_id');
            $table->integer('subcat_id')->nullable();
            $table->string('type');
            $table->string('vendor_picture');
            $table->string('contact_no');
            $table->string('bkash');
            $table->string('nagad');
            $table->string('nid');
            $table->string('trade_license')->nullable();
            $table->integer('commission');
            $table->integer('status');
            $table->integer('vendor_discount')->nullable();
            $table->integer('dcl_discount')->nullable();
            $table->string('vendor_id_creator')->nullable();
            $table->string('id_creator_position')->nullable();
            $table->string('id_creator_area')->nullable();
            $table->string('id_creator_id')->nullable();
            $table->string('id_creator_photo')->nullable();
            $table->string('id_creator_under')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('vendors');
    }
};
