<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class C3datasheet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheets3', function (Blueprint $table) {
            $table->increments('id');

            $table->binary('orgnameAddress1', 60)->nullable();
            $table->date('orgdateFrom1')->nullable();
            $table->date('orgdateTo1')->nullable();
            $table->integer('orgnumHours1')->nullable();
            $table->binary('orgPosition1', 32)->nullable();
            $table->binary('orgnameAddress2', 60)->nullable();
            $table->date('orgdateFrom2')->nullable();
            $table->date('orgdateTo2')->nullable();
            $table->integer('orgnumHours2')->nullable();
            $table->binary('orgPosition2', 32)->nullable();
            $table->binary('orgnameAddress3', 60)->nullable();
            $table->date('orgdateFrom3')->nullable();
            $table->date('orgdateTo3')->nullable();
            $table->integer('orgnumHours3')->nullable();
            $table->binary('orgPosition3', 32)->nullable();
            $table->binary('orgnameAddress4', 60)->nullable();
            $table->date('orgdateFrom4')->nullable();
            $table->date('orgdateTo4')->nullable();
            $table->integer('orgnumHours4')->nullable();
            $table->binary('orgPosition4', 32)->nullable();
            $table->binary('orgnameAddress5', 60)->nullable();
            $table->date('orgdateFrom5')->nullable();
            $table->date('orgdateTo5')->nullable();
            $table->integer('orgnumHours5')->nullable();
            $table->binary('orgPosition5', 32)->nullable();
            $table->binary('orgnameAddress6', 60)->nullable();
            $table->date('orgdateFrom6')->nullable();
            $table->date('orgdateTo6')->nullable();
            $table->integer('orgnumHours6')->nullable();
            $table->binary('orgPosition6', 32)->nullable();
            $table->binary('orgnameAddress7', 60)->nullable();
            $table->date('orgdateFrom7')->nullable();
            $table->date('orgdateTo7')->nullable();
            $table->integer('orgnumHours7')->nullable();
            $table->binary('orgPosition7', 32)->nullable();

            $table->binary('orgnameAddress8', 60)->nullable();
            $table->date('orgdateFrom8')->nullable();
            $table->date('orgdateTo8')->nullable();
            $table->integer('orgnumHours8')->nullable();
            $table->binary('orgType8', 32)->nullable();
            $table->binary('orgnameSponsor8', 60)->nullable();
            $table->binary('orgnameAddress9', 60)->nullable();
            $table->date('orgdateFrom9')->nullable();
            $table->date('orgdateTo9',)->nullable();
            $table->integer('orgnumHours9')->nullable();
            $table->binary('orgType9', 32)->nullable();
            $table->binary('orgnameSponsor9', 60)->nullable();
            $table->binary('orgnameAddress10', 60)->nullable();
            $table->date('orgdateFrom10')->nullable();
            $table->date('orgdateTo10')->nullable();
            $table->integer('orgnumHours10')->nullable();
            $table->binary('orgType10', 32)->nullable();
            $table->binary('orgnameSponsor10', 60)->nullable();
            $table->binary('orgnameAddress11', 60)->nullable();
            $table->date('orgdateFrom11')->nullable();
            $table->date('orgdateTo11')->nullable();
            $table->integer('orgnumHours11')->nullable();
            $table->binary('orgType11', 32)->nullable();
            $table->binary('orgnameSponsor11', 60)->nullable();
            $table->binary('orgnameAddress12', 60)->nullable();
            $table->date('orgdateFrom12')->nullable();
            $table->date('orgdateTo12')->nullable();
            $table->integer('orgnumHours12')->nullable();
            $table->binary('orgType12', 32)->nullable();
            $table->binary('orgnameSponsor12', 60)->nullable();
            $table->binary('orgnameAddress13', 60)->nullable();
            $table->date('orgdateFrom13')->nullable();
            $table->date('orgdateTo13')->nullable();
            $table->integer('orgnumHours13')->nullable();
            $table->binary('orgType13', 32)->nullable();
            $table->binary('orgnameSponsor13', 60)->nullable();
            $table->binary('orgnameAddress14', 60)->nullable();
            $table->date('orgdateFrom14')->nullable();
            $table->date('orgdateTo14')->nullable();
            $table->integer('orgnumHours14')->nullable();
            $table->binary('orgType14', 32)->nullable();
            $table->binary('orgnameSponsor14', 60)->nullable();
            $table->binary('orgnameAddress15', 60)->nullable();
            $table->date('orgdateFrom15')->nullable();
            $table->date('orgdateTo15')->nullable();
            $table->integer('orgnumHours15')->nullable();
            $table->binary('orgType15', 32)->nullable();
            $table->binary('orgnameSponsor15', 60)->nullable();
            $table->binary('orgnameAddress16', 60)->nullable();
            $table->date('orgdateFrom16')->nullable();
            $table->date('orgdateTo16')->nullable();
            $table->integer('orgnumHours16')->nullable();
            $table->binary('orgType16', 32)->nullable();
            $table->binary('orgnameSponsor16', 60)->nullable();
            $table->binary('orgnameAddress17', 60)->nullable();
            $table->date('orgdateFrom17')->nullable();
            $table->date('orgdateTo17')->nullable();
            $table->integer('orgnumHours17')->nullable();
            $table->binary('orgType17', 32)->nullable();
            $table->binary('orgnameSponsor17', 60)->nullable();
            $table->binary('orgnameAddress18', 60)->nullable();
            $table->date('orgdateFrom18')->nullable();
            $table->date('orgdateTo18')->nullable();
            $table->integer('orgnumHours18')->nullable();
            $table->binary('orgType18', 32)->nullable();
            $table->binary('orgnameSponsor18', 60)->nullable();
            $table->binary('orgnameAddress19', 60)->nullable();
            $table->date('orgdateFrom19')->nullable();
            $table->date('orgdateTo19')->nullable();
            $table->integer('orgnumHours19')->nullable();
            $table->binary('orgType19', 32)->nullable();
            $table->binary('orgnameSponsor19', 60)->nullable();
            $table->binary('orgnameAddress20', 60)->nullable();
            $table->date('orgdateFrom20')->nullable();
            $table->date('orgdateTo20')->nullable();
            $table->integer('orgnumHours20')->nullable();
            $table->binary('orgType20', 32)->nullable();
            $table->binary('orgnameSponsor20', 60)->nullable();
            $table->binary('orgnameAddress21', 60)->nullable();
            $table->date('orgdateFrom21')->nullable();
            $table->date('orgdateTo21')->nullable();
            $table->integer('orgnumHours21')->nullable();
            $table->binary('orgType21', 32)->nullable();
            $table->binary('orgnameSponsor21', 60)->nullable();
            $table->binary('orgnameAddress22', 60)->nullable();
            $table->date('orgdateFrom22')->nullable();
            $table->date('orgdateTo22')->nullable();
            $table->integer('orgnumHours22')->nullable();
            $table->binary('orgType22', 32)->nullable();
            $table->binary('orgnameSponsor22', 60)->nullable();
            $table->binary('orgnameAddress23', 60)->nullable();
            $table->date('orgdateFrom23')->nullable();
            $table->date('orgdateTo23')->nullable();
            $table->integer('orgnumHours23')->nullable();
            $table->binary('orgType23', 32)->nullable();
            $table->binary('orgnameSponsor23', 60)->nullable();
            $table->binary('orgnameAddress24', 60)->nullable();
            $table->date('orgdateFrom24')->nullable();
            $table->date('orgdateTo24')->nullable();
            $table->integer('orgnumHours24')->nullable();
            $table->binary('orgType24', 32)->nullable();
            $table->binary('orgnameSponsor24', 60)->nullable();
            $table->binary('orgnameAddress25', 60)->nullable();
            $table->date('orgdateFrom25')->nullable();
            $table->date('orgdateTo25')->nullable();
            $table->integer('orgnumHours25')->nullable();
            $table->binary('orgType25', 32)->nullable();
            $table->binary('orgnameSponsor25', 60)->nullable();
            $table->binary('orgnameAddress26', 60)->nullable();
            $table->date('orgdateFrom26')->nullable();
            $table->date('orgdateTo26')->nullable();
            $table->integer('orgnumHours26')->nullable();
            $table->binary('orgType26', 32)->nullable();
            $table->binary('orgnameSponsor26', 60)->nullable();
            $table->binary('orgnameAddress27', 60)->nullable();
            $table->date('orgdateFrom27')->nullable();
            $table->date('orgdateTo27')->nullable();
            $table->integer('orgnumHours27')->nullable();
            $table->binary('orgType27', 32)->nullable();
            $table->binary('orgnameSponsor27', 60)->nullable();
            $table->binary('orgnameAddress28', 60)->nullable();
            $table->date('orgdateFrom28')->nullable();
            $table->date('orgdateTo28')->nullable();
            $table->integer('orgnumHours28')->nullable();
            $table->string('orgType28', 32)->nullable();
            $table->binary('orgnameSponsor28', 60)->nullable();

            $table->binary('orgnameSkill1')->nullable();
            $table->binary('orgnameDistinct1')->nullable();
            $table->binary('orgnameMembership1')->nullable();
            $table->binary('orgnameSkill2')->nullable();
            $table->binary('orgnameDistinct2')->nullable();
            $table->binary('orgnameMembership2')->nullable();
            $table->binary('orgnameSkill3')->nullable();
            $table->binary('orgnameDistinct3')->nullable();
            $table->binary('orgnameMembership3')->nullable();
            $table->binary('orgnameSkill4')->nullable();
            $table->binary('orgnameDistinct4')->nullable();
            $table->binary('orgnameMembership4')->nullable();
            $table->binary('orgnameSkill5')->nullable();
            $table->binary('orgnameDistinct5')->nullable();
            $table->binary('orgnameMembership5')->nullable();
            $table->binary('orgnameSkill6')->nullable();
            $table->binary('orgnameDistinct6')->nullable();
            $table->binary('orgnameMembership6')->nullable();
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
        Schema::dropIfExists('sheets');
    }
}
