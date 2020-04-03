<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeNameOfGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('goods', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
        });

        Schema::rename('goods', 'products');

        Schema::table('products', function (Blueprint $table) {
            $table->foreign('category_id')->on('categories')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
        });

        Schema::rename('products', 'goods');

        Schema::table('goods', function (Blueprint $table) {
            $table->foreign('category_id')->on('categories')->references('id');

        });

    }
}
