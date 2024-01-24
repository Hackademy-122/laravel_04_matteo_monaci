<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            //indica un double (6, 2) di default
            $table->float('price', 8, 2);
            $table->string('brand');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
