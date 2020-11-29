<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            // $table->unsignedBigInteger('stud_id');
            $table->string('it102')->nullable();
            $table->string('it101')->nullable();
            $table->string('it103')->nullable();
            $table->string('psych01')->nullable();
            $table->string('fil01')->nullable();
            $table->string('pe01')->nullable();
            $table->string('nstp01')->nullable();
            $table->string('engl01')->nullable();
            $table->string('math01')->nullable();
            $table->string('engla01')->nullable();
            $table->string('matha01')->nullable();
            $table->string('it104')->nullable();
            $table->string('it105')->nullable();
            $table->string('it106')->nullable();
            $table->string('statcomp')->nullable();
            $table->string('engl02')->nullable();
            $table->string('natsci')->nullable();
            $table->string('mgt01')->nullable();
            $table->string('pe02')->nullable();
            $table->string('nstp02')->nullable();
            $table->string('it201')->nullable();
            $table->string('it202')->nullable();
            $table->string('it203')->nullable();
            $table->string('it204')->nullable();
            $table->string('math02')->nullable();
            $table->string('physics01')->nullable();
            $table->string('socsci')->nullable();
            $table->string('pe03')->nullable();
            $table->string('it205')->nullable();
            $table->string('it206')->nullable();
            $table->string('it207')->nullable();
            $table->string('fil02')->nullable();
            $table->string('engl03')->nullable();
            $table->string('econ101')->nullable();
            $table->string('pgc')->nullable();
            $table->string('pe04')->nullable();
            $table->string('it301')->nullable();
            $table->string('it302')->nullable();
            $table->string('it303')->nullable();
            $table->string('it304')->nullable();
            $table->string('it305')->nullable();
            $table->string('it306')->nullable();
            $table->string('law01')->nullable();
            $table->string('engl04')->nullable();
            $table->string('it307')->nullable();
            $table->string('it308')->nullable();
            $table->string('it309')->nullable();
            $table->string('it310')->nullable();
            $table->string('it311')->nullable();
            $table->string('worldlit')->nullable();
            $table->string('it401')->nullable();
            $table->string('it402')->nullable();
            $table->string('it403')->nullable();
            $table->string('it404')->nullable();
            $table->string('philo01')->nullable();
            $table->string('fl')->nullable();
            $table->string('it405')->nullable();
            $table->timestamps();

            $table->foreign('id')
                    ->references('id')
                    ->on('students')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
