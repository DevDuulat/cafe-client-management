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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('title_menu');
            $table->text('body_menu');
            $table->string('img_menu');
            $table->decimal('price', 8, 2);
            $table->foreignId('menu_category_fk')->constrained('menu_categories')->onDelete('cascade'); // Внешний ключ на таблицу menu_categories
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
