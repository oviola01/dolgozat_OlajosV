<?php

use App\Models\Outfit;
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
        Schema::create('outfits', function (Blueprint $table) {
            $table->primary(['user_id', 'upper_id', 'bottom_id']);
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('upper_id')->references('upper_id')->on('uppers');
            $table->foreignId('bottom_id')->references('bottom_id')->on('bottoms');
            $table->boolean('status');
            $table->foreignId('additional_id')->references('additional_id')->on('additionals');
            $table->timestamps();
        });

        Outfit::create([
            'user_id' => 1, 
            'upper_id' => 2,
            'bottom_id' => 2,
            'status' => true,
            'additional_id' => 2, 
        ]);

        Outfit::create([
            'user_id' => 2, 
            'upper_id' => 1,
            'bottom_id' => 1,
            'status' => true,
            'additional_id' => 1, 
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outfits');
    }
};
