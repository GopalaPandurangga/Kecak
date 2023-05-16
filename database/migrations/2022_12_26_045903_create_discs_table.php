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
        Schema::create('discs', function (Blueprint $table) {
            $table->id();
            $table->id('disc_id');
            $table->id('package_id');
            $table->date('date_from');
            $table->date('date_end');
            $table->string('referal_code');
            $table->decimal('disc_percent');
            $table->decimal('disc_nominal');
            $table->decimal('min_transaction');
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
        Schema::dropIfExists('discs');
    }
};
