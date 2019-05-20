<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInvestmentWithdrawToCashOuts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cash_outs', function (Blueprint $table) {
            $table->integer('investment_withdraw')->after('entertainment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cash_outs', function (Blueprint $table) {
            $table->dropColumn('investment_withdraw');
        });
    }
}
