<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\UserPlan;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->nullable();
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreignId('referer_user_id')->nullable();
            $table->foreign('referer_user_id')->references('id')->on('users');
            $table->foreignId('plan_id')
            ->nullable()
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('username')->nullable();
            $table->string('firstname');
            $table->string('middlename');
            $table->string('surname');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->date('birthdate')->nullable();
            $table->string('image')->nullable();
            $table->enum('plan', UserPlan::toArray()):
            $table->bigInteger('referral_views')->default(0);
            $table->bigInteger('referral_registrations')->default(0);
            $table->double('balance')->default(0);
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};