<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourtCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('court_cases', function (Blueprint $table) {
            $table->id('id')->unique();
            $table->char('name_syd');
            $table->char('num_del');
            $table->char('plaintiff');
            $table->char('defendant');
            $table->text('pred_spor');
            $table->date('date_vin_syd_akt');
            $table->date('created_at');
            $table->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('court_cases');
    }
}
