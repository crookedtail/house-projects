<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->unsignedInteger('project_type_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('name');
            $table->string('description')->nullable();
            $table->unsignedDecimal('estimate', 8, 2)->nullable();
            $table->integer('priority')->default(5);
            $table->boolean('fire_safe')->default(0);
            $table->boolean('completed')->default(0);
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
        Schema::dropIfExists('projects');
    }
}
