<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disticts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city_id')->constrained();
            $table->string('distict_1');
            $table->string('distict_2');
            $table->string('dong');
            $table->string('distict_1_code');
            $table->string('og_code');
            $table->timestamp('og_created_at');
            $table->string('dong_code');
            $table->text('dong_memo');
            $table->string('distict_1_en');
            $table->text('memo');
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
        Schema::dropIfExists('disticts');
    }
}
