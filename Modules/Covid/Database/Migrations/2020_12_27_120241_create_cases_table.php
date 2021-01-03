<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covidcases', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->date('data_date');

            $table->integer('confirmed')->nullable();
            $table->integer('deaths')->nullable();
            $table->integer('recovered')->nullable();
            $table->integer('active')->nullable();
            $table->string('incident_rate')->nullable();
            $table->string('case_fatality_ratio')->nullable();

            $table->bigInteger('confirmed_world')->nullable();
            $table->bigInteger('deaths_world')->nullable();
            $table->bigInteger('recovered_world')->nullable();
            $table->bigInteger('active_world')->nullable();
            $table->string('incident_rate_world')->nullable();
            $table->string('case_fatality_ratio_world')->nullable();

            $table->bigInteger('confirmed_total')->nullable();
            $table->bigInteger('deaths_total')->nullable();
            $table->bigInteger('recovered_total')->nullable();
            $table->bigInteger('active_total')->nullable();
            $table->string('incident_rate_total')->nullable();
            $table->string('case_fatality_ratio_total')->nullable();

            $table->dateTime('update_time')->nullable();

            $table->tinyInteger('status')->default(1)->unsigned();

            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('covidcases');
    }
}
