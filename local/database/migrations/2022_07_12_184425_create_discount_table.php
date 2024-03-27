<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        Schema::create('discount', function (Blueprint $table) {
            $table->increments('id_discount');
            $table->integer('id_product');
            $table->integer('price_discount');
            $table->string('type_discount');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->boolean('enable_discount')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discount');
    }
}
