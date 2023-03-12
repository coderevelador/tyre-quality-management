<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDrumDetailsToGenerateReportAis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('generate_report_ais', function (Blueprint $table) {
            $table->string('drum_surface_label')->after('drum_surface');
            $table->string('drum_diameter_label')->after('drum_diameter');
            $table->string('rolling_resistance_label')->after('temp_corrected_rolling_resistance_coeffecient');
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
            $table->dropColumn('drum_surface_label');
            $table->dropColumn('drum_diameter_label');
            $table->dropColumn('rolling_resistance_label');
        });
    }
}
