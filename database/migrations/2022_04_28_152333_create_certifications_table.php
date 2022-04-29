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
        Schema::create('certifications', function (Blueprint $table) {
            $table->id();
            $table->string('date_of_examination');
            $table->string('date_of_report');
            $table->string('cerificate_number');
            $table->string('client_name');
            $table->string('location');
            $table->string('report_pdf');
            $table->foreignId('checklist_id')->constrained('checklists');
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
        Schema::table('certifications', function(Blueprint $table){
            $table->dropForeign(['checklist_id']);
        });
        Schema::dropIfExists('certifications');
    }
};
