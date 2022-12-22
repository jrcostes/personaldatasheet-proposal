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

            $table->string('orgnameAddress1', 60)->nullable();
            $table->date('orgdateFrom1')->nullable();
            $table->date('orgdateTo1')->nullable();
            $table->integer('orgnumHours1')->nullable();
            $table->string('orgPosition1')->nullable();
            $table->string('orgnameAddress2', 60)->nullable();
            $table->date('orgdateFrom2')->nullable();
            $table->date('orgdateTo2')->nullable();
            $table->integer('orgnumHours2')->nullable();
            $table->string('orgPosition2')->nullable();
            $table->string('orgnameAddress3', 60)->nullable();
            $table->date('orgdateFrom3')->nullable();
            $table->date('orgdateTo3')->nullable();
            $table->integer('orgnumHours3')->nullable();
            $table->string('orgPosition3')->nullable();
            $table->string('orgnameAddress4', 60)->nullable();
            $table->date('orgdateFrom4')->nullable();
            $table->date('orgdateTo4')->nullable();
            $table->integer('orgnumHours4')->nullable();
            $table->string('orgPosition4')->nullable();
            $table->string('orgnameAddress5', 60)->nullable();
            $table->date('orgdateFrom5')->nullable();
            $table->date('orgdateTo5')->nullable();
            $table->integer('orgnumHours5')->nullable();
            $table->string('orgPosition5')->nullable();
            $table->string('orgnameAddress6', 60)->nullable();
            $table->date('orgdateFrom6')->nullable();
            $table->date('orgdateTo6')->nullable();
            $table->integer('orgnumHours6')->nullable();
            $table->string('orgPosition6')->nullable();
            $table->string('orgnameAddress7', 60)->nullable();
            $table->date('orgdateFrom7')->nullable();
            $table->date('orgdateTo7')->nullable();
            $table->integer('orgnumHours7')->nullable();
            $table->string('orgPosition7')->nullable();

            $table->string('orgnameAddress8', 60)->nullable();
            $table->date('orgdateFrom8')->nullable();
            $table->date('orgdateTo8')->nullable();
            $table->integer('orgnumHours8')->nullable();
            $table->string('orgType8')->nullable();
            $table->string('orgnameSponsor8', 60)->nullable();
            $table->string('orgnameAddress9', 60)->nullable();
            $table->date('orgdateFrom9')->nullable();
            $table->date('orgdateTo9')->nullable();
            $table->integer('orgnumHours9')->nullable();
            $table->string('orgType9')->nullable();
            $table->string('orgnameSponsor9', 60)->nullable();
            $table->string('orgnameAddress10', 60)->nullable();
            $table->date('orgdateFrom10')->nullable();
            $table->date('orgdateTo10')->nullable();
            $table->integer('orgnumHours10')->nullable();
            $table->string('orgType10')->nullable();
            $table->string('orgnameSponsor10', 60)->nullable();
            $table->string('orgnameAddress11', 60)->nullable();
            $table->date('orgdateFrom11')->nullable();
            $table->date('orgdateTo11')->nullable();
            $table->integer('orgnumHours11')->nullable();
            $table->string('orgType11')->nullable();
            $table->string('orgnameSponsor11', 60)->nullable();
            $table->string('orgnameAddress12', 60)->nullable();
            $table->date('orgdateFrom12')->nullable();
            $table->date('orgdateTo12')->nullable();
            $table->integer('orgnumHours12')->nullable();
            $table->string('orgType12')->nullable();
            $table->string('orgnameSponsor12', 60)->nullable();
            $table->string('orgnameAddress13', 60)->nullable();
            $table->date('orgdateFrom13')->nullable();
            $table->date('orgdateTo13')->nullable();
            $table->integer('orgnumHours13')->nullable();
            $table->string('orgType13')->nullable();
            $table->string('orgnameSponsor13', 60)->nullable();
            $table->string('orgnameAddress14', 60)->nullable();
            $table->date('orgdateFrom14')->nullable();
            $table->date('orgdateTo14')->nullable();
            $table->integer('orgnumHours14')->nullable();
            $table->string('orgType14')->nullable();
            $table->string('orgnameSponsor14', 60)->nullable();

            $table->string('orgnameSkill1')->nullable();
            $table->string('orgnameDistinct1')->nullable();
            $table->string('orgnameMembership1')->nullable();
            $table->string('orgnameSkill2')->nullable();
            $table->string('orgnameDistinct2')->nullable();
            $table->string('orgnameMembership2')->nullable();
            $table->string('orgnameSkill3')->nullable();
            $table->string('orgnameDistinct3')->nullable();
            $table->string('orgnameMembership3')->nullable();
            $table->string('orgnameSkill4')->nullable();
            $table->string('orgnameDistinct4')->nullable();
            $table->string('orgnameMembership4')->nullable();
            $table->string('orgnameSkill5')->nullable();
            $table->string('orgnameDistinct5')->nullable();
            $table->string('orgnameMembership5')->nullable();
            $table->string('orgnameSkill6')->nullable();
            $table->string('orgnameDistinct6')->nullable();
            $table->string('orgnameMembership6')->nullable();
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
