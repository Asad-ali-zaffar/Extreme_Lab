<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machines', function (Blueprint $table) {
            $table->id();
            $table->integer('org_id');
            $table->string('name_eng');
            $table->string('name_local')->nullable();
            $table->ipAddress('ip_address')->nullable();
            $table->string('network_loaction');
            $table->integer('dpt_id');
            $table->string('mfr_by');
            $table->string('splr')->nullable();
            $table->string('remarks')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('machines');
    }
}
