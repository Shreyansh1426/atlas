<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Laraverse\Atlas\Enums\Tables;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $facilities = config('atlas.facilities.enabled') ?? [];

        if (in_array(Tables::CONTINENTS, $facilities)) {
        
            Schema::create(Tables::CONTINENTS, function (Blueprint $table) {
                
                $table->id();
                
                $table->string('name');
                
                $table->string('code');
                
                $table->timestamps();
            });
        
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Tables::CONTINENTS);
    }
};
