<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id'); //ussigned because we dont want a negative value
            $table->string('name')->nullable(); //nullable because when user creates in this field we will store his user id
            $table->text('address')->nullable(); 
            $table->string('phone')->nullable();
            $table->string('slug')->unique()->nullable(); //when you click you user this will open it i.e interms of its name
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
