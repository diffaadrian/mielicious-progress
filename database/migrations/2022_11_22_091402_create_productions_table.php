<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productions', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('order_code');
            $table->string('name');
            $table->bigInteger('qty');
            $table->bigInteger('tterigu');
            $table->bigInteger('ttapioka');
            $table->bigInteger('garam');
            $table->bigInteger('telur');
            $table->bigInteger('sawi');
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
        Schema::dropIfExists('table');
    }
}
