<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn(['current_course', 'desired_topic']);
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('current_course')->nullable();
        $table->text('desired_topic')->nullable();
    });
}

};
