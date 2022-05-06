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
        Schema::create('checklists', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('date_inspection')->nullable();
            $table->string('owner')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('manufacturer_number')->nullable();
            $table->string('derricking')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');;
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
        Schema::table('checklists', function(Blueprint $table){
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('checklists');
    }
};
