<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acs', function (Blueprint $table) {
            $table->id();
            $table->string('r_id');
            $table->string('ac_id')->unique();
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
        Schema::dropIfExists('acs');
    }
}
