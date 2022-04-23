<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_sites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('color', 50);
            $table->string('color_style', 50);
            $table->string('layout_style', 50);
            $table->string('separator_style', 50);
            $table->string('mainslider', 50);
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
        Schema::dropIfExists('config_sites');
    }
}
