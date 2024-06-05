<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id_product');
            $table->string('name_product');
            $table->string('url_product');
            $table->text('info_product');
            $table->text('present_product');
            $table->text('content_product');
            $table->integer('id_cat_product')->default(0);
            $table->string('thumbnail_product')->nullable();
            $table->string('img_product_1')->nullable();
            $table->string('img_product_2')->nullable();
            $table->string('img_product_3')->nullable();
            $table->string('img_product_4')->nullable();
            $table->integer('price_product');
            $table->integer('id_author');
            $table->integer('id_dis');
            $table->string('unit_product');
            $table->boolean('enable_product')->default(false);
            $table->boolean('popular')->default(false);

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
        Schema::dropIfExists('products');
    }
}
