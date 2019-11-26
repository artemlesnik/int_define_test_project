<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductTypeAllowedOptionType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_type_allowed_option_type', function (Blueprint $table) {
            $table->bigInteger('product_type_id');
            $table->bigInteger('option_type_id');
            $table->foreign('product_type_id')->references('id')->on('product_type');
            $table->foreign('option_type_id')->references('id')->on('option_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
