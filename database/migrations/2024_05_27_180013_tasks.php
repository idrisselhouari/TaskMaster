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
    Schema::create('tasks', function (Blueprint $table) {
        $table->id();
        $table->string('task_title');
        $table->date('task_date');
        $table->time('task_time_from')->nullable();
        $table->time('task_time_to')->nullable();
        $table->enum('task_priority', ['low', 'medium', 'high']);
        $table->enum('task_category', ['work', 'personal', 'other']);
        $table->text('task_description')->nullable();
        $table->string('task_tags')->nullable(); // Consider using a separate table for tags
        $table->boolean('is_completed')->default(false);
        $table->unsignedBigInteger('user_id');
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
