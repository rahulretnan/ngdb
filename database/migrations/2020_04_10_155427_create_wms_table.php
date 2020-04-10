<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wms', function (Blueprint $table) {
            $table->id();
            $table->string('r_id');
            $table->string('wm_id')->unique();
            $table->boolean('status')->default(0);
            $table->boolean('bstatus')->default(0);
            $table->boolean('pstate')->default(0);
            $table->boolean('rstate')->default(0);
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
        Schema::dropIfExists('wms');
    }
}
