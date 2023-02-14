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
        Schema::table('posts', function (Blueprint $table) {
            $table->foreignId('person_id')->constrained('people');
        });
        Schema::table('person_details', function (Blueprint $table) {
            $table->foreignId('person_id')->constrained('people');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['person_id']);
        });
        Schema::table('person_details', function (Blueprint $table) {
            $table->dropForeign(['person_id']);
        });
    }
};
