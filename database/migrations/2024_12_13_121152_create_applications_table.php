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
    Schema::create('applications', function (Blueprint $table) {
        $table->id();
        $table->foreignId('vacancy_id')->constrained('vacancies')->onDelete('cascade');
        $table->foreignId('job_seeker_id')->constrained('job_seekers')->onDelete('cascade');
        $table->enum('status', ['Pending', 'Reviewed', 'Rejected', 'Accepted'])->default('Pending');
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
        Schema::dropIfExists('applications');
    }
};
