<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTestDataToGenerateReports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('generate_reports', function (Blueprint $table) {
            $table->string('report_title')->after('id');
            $table->string('htac')->after('report_title');
            $table->string('ulr')->after('htac');
            $table->string('drum_surface_label')->after('drum_surface');
            $table->string('drum_diameter_label')->after('drum_diameter');
            $table->string('rolling_resistance_label')->after('rolling_resistance_coeffecient');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('generate_reports', function (Blueprint $table) {
            $table->dropColumn('report_title');
            $table->dropColumn('htac');
            $table->dropColumn('ulr');
            $table->dropColumn('drum_surface_label');
            $table->dropColumn('drum_diameter_label');
            $table->dropColumn('rolling_resistance_label');
        });
    }
}
