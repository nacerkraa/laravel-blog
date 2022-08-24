<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table -> id();
            $table -> string('content');
            $table->foreignId('post_id')->constrained()->onDelete('cascade'); // Delete all the comments related to the post
            $table -> timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
