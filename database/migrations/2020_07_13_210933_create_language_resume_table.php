<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguageResumeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_resume', function (Blueprint $table) {
            $table->id();
            $table->foreignId('language_id');
            $table->foreignId('resume_id');
            $table->foreign('resume_id')->references('id')->on('resumes');
            $table->foreign('language_id')->references('id')->on('languages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('language_resume');
    }
}
