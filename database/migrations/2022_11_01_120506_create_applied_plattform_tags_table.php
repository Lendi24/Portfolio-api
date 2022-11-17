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
        Schema::create('applied_plattform_tags', function (Blueprint $table) {
            $table->id();

            $table->foreignId('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreignId('plattform_tag_id')->references('id')->on('plattform_tags')->onDelete('cascade');

            $table->string('target');
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
        Schema::dropIfExists('applied_plattform_tags');
    }
};
