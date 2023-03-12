<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenerateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generate_reports', function (Blueprint $table) {
            $table->id();
            $table->date('date_of_test');
            $table->string('test_machine_details_id');
            $table->string('applicant_id');
            $table->string('size_of_sample');
            $table->string('manufacturer');
            $table->string('trade_mark');
            $table->string('sample_quantity');
            $table->string('pattern');
            $table->string('category_of_use');
            $table->string('sl_no');
            $table->string('tyre_class');
            $table->string('test_rim');
            $table->string('test_standard');
            $table->string('test_inflation_pressure');
            $table->string('test_method');
            $table->string('test_load');
            $table->string('reference_amb_temperature');
            $table->string('test_speed');
            $table->string('temperature_correction');
            $table->string('drum_surface');
            $table->string('drum_diameter');
            $table->string('thermal_conditioning');
            $table->string('thermal_conditioning_load')->nullable()->default('NA');
            $table->string('thermal_conditioning_skim')->nullable()->default('NA');
            $table->string('inital_test_inflation');
            $table->string('final_test_inflation');
            $table->string('test_speed_result');
            $table->string('ambient_temperature');
            $table->string('warm_up_duration');
            $table->string('tyre_weight');
            $table->string('rolling_resistance_coeffecient');
            $table->string('approved_by');
            $table->string('signature');
            $table->string('test_witnessed');
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('generate_reports');
    }
}
