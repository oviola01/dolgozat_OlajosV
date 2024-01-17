<?php

use App\Models\Bottom;
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
        Schema::create('bottoms', function (Blueprint $table) {
            $table->id('bottom_id');
            $table->string('name');
            $table->longText('description', 150);
            $table->timestamps();
        });

        Bottom::create([
            'name' => "farmernadrág", 
            'description' => "tehenészfiú stílus", 
        ]);

        Bottom::create([
            'name' => "rövidnadrág", 
            'description' => "kisfiús báj", 
        ]);

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
