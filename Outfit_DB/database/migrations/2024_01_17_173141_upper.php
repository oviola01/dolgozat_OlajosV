<?php

use App\Models\Upper;
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
        Schema::create('uppers', function (Blueprint $table) {
            $table->id('upper_id');
            $table->string('name');
            $table->longText('description', 150);
            $table->timestamps();
        });

        Upper::create([
            'name' => "pulóver", 
            'description' => "meleg, belebújós", 
        ]);

        Upper::create([
            'name' => "trikó", 
            'description' => "kosaras manusoknak", 
        ]);
        Upper::create([
            'name' => "pulóver2", 
            'description' => "meleg, belebújós", 
        ]);

        Upper::create([
            'name' => "trikó2", 
            'description' => "kosaras manusoknak", 
        ]);
        Upper::create([
            'name' => "pulóver3", 
            'description' => "meleg, belebújós", 
        ]);

        Upper::create([
            'name' => "trikó3", 
            'description' => "kosaras manusoknak", 
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
