<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_ins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('member_id')->unsigned()->index();  
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
            $table->date('date');
            $table->integer('premium');
            $table->integer('admistration');
            $table->integer('fine');
            $table->integer('profit');
            $table->integer('investment_withdraw');
            $table->integer('total_credit');
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
        Schema::dropIfExists('cash_ins');
    }
}
