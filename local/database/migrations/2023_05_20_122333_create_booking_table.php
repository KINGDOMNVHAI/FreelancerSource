<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id_booking');
            $table->string('code_booking')->unique();
            $table->double('amount_sale');
            $table->integer('shipping')->default(0);
            $table->double('amount_net');
            $table->integer('booking_status')->default(1); // 1:new 2:processing 3:done 4:cancelled
            $table->string('fullname');
            $table->string('phone');
            $table->string('email');
            $table->string('address');

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
}
