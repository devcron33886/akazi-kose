<?php

use App\Models\Category;
use App\Models\Institution;
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
        Schema::create('adverts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class)->index()->constrained();
            $table->foreignIdFor(Institution::class)->index()->constrained();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->longText('body');
            $table->date('deadline');
            $table->string('status')->default('draft');
            $table->string('location');
            $table->string('sector');
            $table->string('eductaion_level')->nullable();
            $table->string('desired_experience')->nullable();
            $table->string('contract_type')->nullable();
            $table->integer('number_of_positions');
            $table->string('files')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adverts');
    }
};
