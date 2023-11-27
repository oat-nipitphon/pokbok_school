<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itas', function (Blueprint $table) {
            $table->id();
            $table->string('sub_id');
            $table->string('title_name');
            $table->string('content')->nulllable();
            $table->string('title_menu', 100)->nulllable();
            $table->string('sub_menu', 100)->nulllable();
            $table->string('image_ita')->nulllable();
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
        Schema::dropIfExists('itas');
    }
}
