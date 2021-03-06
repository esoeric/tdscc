<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->integer('status_id')->unsigned();
            $table->integer('pdm_id')->unsigned();
            $table->integer('project_lead_id')->unsigned();
            $table->integer('project_type_id')->unsigned();
            $table->text('probability');
            $table->text('start_date');
            $table->text('anticipated_price');
            $table->text('duration');
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
        Schema::drop('projects');
    }
}
