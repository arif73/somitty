<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveInvestmentWithdrawFromCashIns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cash_ins', function (Blueprint $table) {
            $table->dropColumn('investment_withdraw');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cash_ins', function (Blueprint $table) {
            $table->string('investment_withdraw');
        });
    }
}
