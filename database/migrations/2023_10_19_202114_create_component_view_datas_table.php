<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('component_view_datas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id')->unsigned();
            $table->bigInteger('component_view_id')->unsigned();
            $table->string('key');
            $table->string('value'); 
            $table->timestamps();
            $table->softDeletes()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('component_view_datas');
    }
};
