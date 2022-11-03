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
        Schema::create('applied_language_tags', function (Blueprint $table) {
            $table->id();

            $table->foreignId('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreignId('tag_id')->references('id')->on('language_tags')->onDelete('cascade');
            $table->foreignId('tag_id_parent')->references('id')->on('applied_language_tags')->onDelete('cascade');

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
        Schema::dropIfExists('applied_language_tags');
    }
};
