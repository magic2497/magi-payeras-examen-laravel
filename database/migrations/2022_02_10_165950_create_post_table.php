<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->string('title', 20)->unique();
            $table->string('extract', 30);
            $table->text('description', 30);
            $table->string('expiry')->nullable();
            $table->string('commentable')->nullable();
            $table->date('publication')->nullable();
            $table->enum('acces', ['private', 'public']);
            $table->timestamps();
        });

        Schema::table('post', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->after('id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
