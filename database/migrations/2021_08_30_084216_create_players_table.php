<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("lastname");
            $table->string("sex");
            $table->integer("age");
            $table->integer("phone");
            $table->string("email");
            $table->string("country");
            $table->foreignId("photo_id")->ondelete("cascade");
            $table->foreignId("role_id")->ondelete("cascade");
            $table->foreignId("team_id")->ondelete("cascade")->nullable();

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
        Schema::dropIfExists('players');
    }
}
