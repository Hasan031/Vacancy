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
    Schema::create('vacancies', function (Blueprint $table) {
        $table->id();
        $table->foreignId('employer_id')->constrained('employers')->onDelete('cascade');
        $table->string('title');
        $table->text('description');
        $table->text('requirements')->nullable();
        $table->string('salary_range')->nullable();
        $table->string('location')->nullable();
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
        Schema::dropIfExists('vacancies');
    }
};
