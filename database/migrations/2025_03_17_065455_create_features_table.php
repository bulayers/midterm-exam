<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration {
    public function up() {
        Schema::create('features', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Feature Name
            $table->text('description')->nullable(); // Feature Description
            $table->timestamps();
        });
    }
 
    public function down() {
        Schema::dropIfExists('features');
    }
};