<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntroduceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('introduce');
        Schema::create('introduce', function (Blueprint $table) {
            $table->increments('id_introduce');
            $table->string('name_introduce');
            $table->string('url_introduce');
            $table->text('content1_introduce');
            $table->text('content2_introduce')->nullable(); // Somewhere need split to many part
            $table->text('content3_introduce')->nullable(); // Somewhere need split to many part
            $table->text('content4_introduce')->nullable(); // Somewhere need split to many part
            $table->string('thumbnail_introduce')->nullable();
            // $table->integer('id_cat');
            $table->integer('enable_introduce')->default(1);

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
        Schema::dropIfExists('introduce');
    }
}
