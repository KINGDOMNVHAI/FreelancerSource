<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        Schema::create('category_product', function (Blueprint $table) {
            $table->increments('id_cat_product');
            $table->string('name_cat_product');
            $table->string('url_cat_product')->unique();
            $table->string('thumbnail_cat_product')->nullable();
            $table->integer('id_parent')->default(0);
            $table->boolean('enable_cat_product')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_product');
    }
}
