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
        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            $table->id('rate_id');
            $table->id('package_id');
            $table->string('rate_name');
            $table->date('date_from');
            $table->date('date_end');
            $table->integer('qty_per_day');
            $table->decimal('adult_rate');
            $table->decimal('child_rate');
            $table->decimal('infant_rate');
            $table->decimal('foreign_adult_rate');
            $table->decimal('foreign_child_rate');
            $table->decimal('foreign_infant_rate');
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
        Schema::dropIfExists('rates');
    }
};
