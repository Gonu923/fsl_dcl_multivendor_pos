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
        Schema::create('subcat_discounts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vendor_id');
            $table->bigInteger('subcategory_id');
            $table->integer('dcl_discount');
            $table->integer('vendor_discount');
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
        Schema::dropIfExists('subcat_discounts');
    }
};
