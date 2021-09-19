<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdectsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodectses', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('orgin_price')->nullable();
            $table->string('selling_price')->nullable();
            $table->string('description')->nullable();
            $table->string('small_description')->nullable();
            $table->string('sulg')->nullable();
            $table->string('meat_title')->nullable();
            $table->string('meat_kywords')->nullable();
            $table->string('meat_description')->nullable();
            $table->string('tax')->nullable();
            $table->string('qty')->nullable();
            $table->tinyInteger('status')->nullable();      
            $table->tinyInteger('trending')->nullable();
            $table->integer('cat_id')->nullable();
            $table->foreignId('cat_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prodectses');
    }
}
