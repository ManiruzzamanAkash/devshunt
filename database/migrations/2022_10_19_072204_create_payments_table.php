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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enroll_id');
            $table->foreignId('course_id');
            $table->foreignId('user_id');
            $table->enum('status', ['paid', 'partial', 'due']);
            $table->unsignedBigInteger('parent_payment_id')->nullable();
            $table->foreign('parent_payment_id')->references('id')->on('payments');
            $table->text('details')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('payments');
    }
};
