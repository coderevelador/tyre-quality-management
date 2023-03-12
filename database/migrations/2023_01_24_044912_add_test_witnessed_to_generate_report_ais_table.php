<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTestWitnessedToGenerateReportAisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('generate_report_ais', function (Blueprint $table) {
            $table->string('test_witnessed')->after('signature');
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
            $table->dropColumn('test_witnessed');
        });
    }
}
