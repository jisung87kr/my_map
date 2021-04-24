<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToiletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toilets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city_id')->constrained();
            $table->string('type', 20)->nullable();
            $table->string('title', 100)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('address_old', 255)->nullable();
            $table->string('unisex', 1)->nullable();
            $table->string('male_seat', 100)->nullable();
            $table->string('male_urinal', 100)->nullable();
            $table->string('male_disability_seat', 100)->nullable();
            $table->string('male_disability_urinal', 100)->nullable();
            $table->string('boy_seat', 100)->nullable();
            $table->string('boy_urinal', 100)->nullable();
            $table->string('female_seat', 100)->nullable();
            $table->string('female_disability_seat', 100)->nullable();
            $table->string('girl_seat', 100)->nullable();
            $table->string('manage_og', 100)->nullable();
            $table->string('call_no', 20)->nullable();
            $table->string('open_time', 255)->nullable();
            $table->string('since', 4)->nullable();
            $table->string('latitude', 100)->nullable();
            $table->string('longtitude', 100)->nullable();
            $table->string('own', 20)->nullable();
            $table->string('location_type', 100)->nullable();
            $table->string('waste_method', 100)->nullable();
            $table->string('emergency_bell', 100)->nullable();
            $table->string('cctv', 100)->nullable();
            $table->string('disaper', 100)->nullable();
            $table->string('remodeling_date')->nullable();
            $table->string('created_at')->nullable();
            $table->string('og_code', 100)->nullable();
            $table->string('provider', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toilets');
    }
}
