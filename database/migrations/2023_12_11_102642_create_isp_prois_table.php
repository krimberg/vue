<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIspProisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isp_prois', function (Blueprint $table) {
            $table->id('id')->unique();
            $table->date('dateoforderofthewrit');
            $table->date('dateofreceiptofthewrit');
            $table->char('documentdetails');
            $table->date('dateoftransferofthewrit');
            $table->char('nameufssp');
            $table->date('productionexecutionperiod');
            $table->char('recoverer');
            $table->char('debtor');
            $table->date('dateofinitiationofproceedings');
            $table->char('numberproceedings');
            $table->text('subjectproduction');
            $table->date('dateendofinitiationofproceedings');
            $table->char('proceedingsend');
            $table->char('telnumderbailiff');
            $table->text('commentwork');
            $table->bigInteger('texpole');
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
        Schema::dropIfExists('isp_prois');
    }
}
