<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHtacToGenerateReportAis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('generate_report_ais', function (Blueprint $table) {
            $table->string('htac')->after('id');
            $table->string('ulr')->after('htac');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('generate_report_ais', function (Blueprint $table) {
            $table->dropColumn('htac');
            $table->dropColumn('ulr');
        });
    }
}
