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
        Schema::table('participations', function (Blueprint $table) {
            $table->string('typeRole')->nullable(); // Adjust the type and other options as needed
        });
    }
    
    public function down()
    {
        Schema::table('participations', function (Blueprint $table) {
            $table->dropColumn('typeRole');
        });
    }
    
};
