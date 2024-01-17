<?php

use App\Models\Additional;
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
        Schema::create('additionals', function (Blueprint $table) {
            $table->id('additional_id');
            $table->string('name');
            $table->longText('description', 150);
            $table->timestamps();
        });

        Additional::create([
            'name' => "nyakkendő", 
            'description' => "nyaktekerészeti mellfekvenc", 
        ]);

        Additional::create([
            'name' => "öv", 
            'description' => "marhabőr szíj", 
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
