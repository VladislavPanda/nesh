<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->date('installment_payment_date1')->nullable()->after('total_price');
            $table->date('installment_payment_date2')->nullable()->after('installment_payment_date1');
            $table->date('installment_payment_date3')->nullable()->after('installment_payment_date2');
            $table->date('installment_payment_date4')->nullable()->after('installment_payment_date3');
            $table->double('installment_sum')->nullable()->after('installment_payment_date4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->dropColumn('installment_payment_date1');
            $table->dropColumn('installment_payment_date2');
            $table->dropColumn('installment_payment_date3');
            $table->dropColumn('installment_payment_date4');
            $table->dropColumn('installment_sum');
        });
    }
};
