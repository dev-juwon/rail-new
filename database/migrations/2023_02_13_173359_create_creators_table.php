<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creators', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->unsignedInteger('user_id');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->text('logo')->nullable();
            $table->boolean('auto_approve_affiliates')->default(false);
            $table->float('creator_reward')->default(10.0);
            
            $table->foreignId('user_id')
            ->constrained()
            ->onDelete('cascade');

            $table->foreignId('category_id')
            ->constrained()
            ->onDelete('cascade');

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
        Schema::dropIfExists('creators');
    }
};
