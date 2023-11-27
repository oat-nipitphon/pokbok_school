<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_contents', function (Blueprint $table) {
            $table->id();
            $table->string('title_name');
            $table->string('content');
            $table->string('img_content');
            $table->string('icon');
            $table->string('type');
            $table->string('link');
            $table->string('link_sub');
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
        Schema::dropIfExists('data_contents');
    }
}
