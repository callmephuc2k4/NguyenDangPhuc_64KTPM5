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
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('computer_id')->constrained('computers')->onDelete('cascade');
            $table->string('reported_by')->nullable();
            $table->dateTime('reported_date');
            $table->text('description');
            $table->enum('urgency',['Low','Medium','Hight']);
            $table->enum('status',['Open','In Progress','Resolved']);
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
        Schema::dropIfExists('issues');
    }
};
