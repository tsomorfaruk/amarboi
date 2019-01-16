<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellerAdInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_ad_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoryId');
            $table->string('bookName');
            $table->string('isbnNumber');
            $table->text('bookTitle');
            $table->text('bookDescription');
            $table->float('bookPrice', 10,2);
            $table->text('bookImage');
            $table->string('sellerName');
            $table->string('sellerMobileNo');
            $table->string('sellerEmail');
            $table->string('universityName');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seller_ad_infos');
    }
}
