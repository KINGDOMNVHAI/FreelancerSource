<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id_post');
            $table->string('name_post');
            $table->string('url_post');
            $table->text('info_post')->nullable()->default(null);
            $table->text('present_post')->nullable()->default(null);
            $table->text('content_post')->nullable()->default(null);
            $table->date('date_post');
            $table->string('thumbnail_post')->nullable();
            $table->string('url_cat_post');
            $table->string('views')->nullable();
            $table->boolean('enable_post')->default(false);
            $table->boolean('home')->default(false);

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
        Schema::dropIfExists('posts');
    }
}
