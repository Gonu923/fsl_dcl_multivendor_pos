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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->integer('category_id');
            $table->string('agent_picture');
            $table->string('agent_business_name');
            $table->string('agent_contact_number');
            $table->string('agent_bkash_no');
            $table->string('agent_nid');
            $table->string('agent_trade_license');
            $table->decimal('agent_commission');
            $table->string('agent_password');
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
        Schema::dropIfExists('agents');
    }
};
