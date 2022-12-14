<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRFQSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_f_q_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("vendor_id")->nullable(); // get nama vendor
            $table->string("referensi");
            $table->dateTime("tanggal_order");
            $table->bigInteger("qty");
            $table->bigInteger("harga");
            $table->bigInteger("total");
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
        Schema::dropIfExists('r_f_q_s');
    }
}