<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_quizzes_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->string('title');
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');

            $table->integer('passing_score'); // Minimum score to pass
            $table->boolean('auto_grade')->default(true); // Option to enable automatic grading

        });
    }

    public function down()
    {
        Schema::dropIfExists('quizzes');
    }
}

