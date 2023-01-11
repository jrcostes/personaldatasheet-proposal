<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class C2datasheet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheets2', function (Blueprint $table) {
            $table->increments('id');

            $table->string('eligibility', 64)->nullable();
            $table->tinyInteger('rating')->nullable();
            $table->date('dateofexam', 64 )->nullable();
            $table->string('placeofexam', 64 )->nullable();
            $table->string('licenseno', 64 )->nullable();
            $table->date('validity')->nullable();

            $table->string('eligibility2', 64 )->nullable();
            $table->tinyInteger('rating2')->nullable();
            $table->date('dateofexam2')->nullable();
            $table->string('placeofexam2', 64 )->nullable();
            $table->string('licenseno2', 64 )->nullable();
            $table->date('validity2')->nullable();
            $table->string('eligibility3', 64 )->nullable();
            $table->tinyInteger('rating3')->nullable();
            $table->date('dateofexam3')->nullable();
            $table->string('placeofexam3', 64 )->nullable();
            $table->string('licenseno3', 64 )->nullable();
            $table->date('validity3')->nullable();
            $table->string('eligibility4', 64 )->nullable();
            $table->tinyInteger('rating4')->nullable();
            $table->date('dateofexam4')->nullable();
            $table->string('placeofexam4', 64 )->nullable();
            $table->string('licenseno4', 64 )->nullable();
            $table->date('validity4')->nullable();
            $table->string('eligibility5', 64 )->nullable();
            $table->tinyInteger('rating5')->nullable();
            $table->date('dateofexam5')->nullable();
            $table->string('placeofexam5', 64 )->nullable();
            $table->string('licenseno5', 64 )->nullable();
            $table->date('validity5')->nullable();
            $table->string('eligibility6', 64 )->nullable();
            $table->tinyInteger('rating6')->nullable();
            $table->date('dateofexam6')->nullable();
            $table->string('placeofexam6', 64 )->nullable();
            $table->string('licenseno6', 64 )->nullable();
            $table->date('validity6')->nullable();
            $table->string('eligibility7', 64 )->nullable();
            $table->tinyInteger('rating7')->nullable();
            $table->date('dateofexam7')->nullable();
            $table->string('placeofexam7', 64 )->nullable();
            $table->string('licenseno7', 64 )->nullable();
            $table->date('validity7')->nullable();

            $table->date('datefrom')->nullable();
            $table->date('dateto')->nullable();
            $table->string('position', 64 )->nullable();
            $table->string('department', 64 )->nullable();
            $table->string('salary', 161 )->nullable();
            $table->string('paygrade', 64 )->nullable();
            $table->string('appointment', 64 )->nullable();
            $table->string('governmentserv', 64 )->nullable();

            $table->date('datefrom2')->nullable();
            $table->date('dateto2')->nullable();
            $table->string('position2', 64 )->nullable();
            $table->string('department2', 64 )->nullable();
            $table->string('salary2', 16 )->nullable();
            $table->tinyInteger('paygrade2')->nullable();
            $table->tinyInteger('appointment2')->nullable();
            $table->boolean('governmentserv2')->nullable();




            $table->date('datefrom3')->nullable();
            $table->date('dateto3')->nullable();
            $table->string('position3', 64 )->nullable();
            $table->string('department3', 64 )->nullable();
            $table->string('salary3', 16)->nullable();
            $table->tinyInteger('paygrade3')->nullable();
            $table->tinyInteger('appointment3')->nullable();
            $table->boolean('governmentserv3')->nullable();
            $table->date('datefrom4')->nullable();
            $table->date('dateto4')->nullable();
            $table->string('position4', 64 )->nullable();
            $table->string('department4', 64 )->nullable();
            $table->string('salary4', 161 )->nullable();
            $table->tinyInteger('paygrade4')->nullable();
            $table->tinyInteger('appointment4')->nullable();
            $table->boolean('governmentserv4')->nullable();
            $table->date('datefrom5')->nullable();
            $table->date('dateto5')->nullable();
            $table->string('position5', 64 )->nullable();
            $table->string('department5', 64 )->nullable();
            $table->string('salary5', 16 )->nullable();
            $table->tinyInteger('paygrade5')->nullable();
            $table->tinyInteger('appointment5')->nullable();
            $table->boolean('governmentserv5')->nullable();
            $table->date('datefrom6')->nullable();
            $table->date('dateto6')->nullable();
            $table->string('position6', 64 )->nullable();
            $table->string('department6', 64 )->nullable();
            $table->string('salary6', 16 )->nullable();
            $table->tinyInteger('paygrade6')->nullable();
            $table->tinyInteger('appointment6')->nullable();
            $table->boolean('governmentserv6')->nullable();
            $table->date('datefrom7')->nullable();
            $table->date('dateto7')->nullable();
            $table->string('position7', 64 )->nullable();
            $table->string('department7', 64 )->nullable();
            $table->string('salary7', 16 )->nullable();
            $table->tinyInteger('paygrade7')->nullable();
            $table->tinyInteger('appointment7')->nullable();
            $table->boolean('governmentserv7')->nullable();
            $table->date('datefrom8')->nullable();
            $table->date('dateto8')->nullable();
            $table->string('position8', 64 )->nullable();
            $table->string('department8', 64 )->nullable();
            $table->string('salary8', 16 )->nullable();
            $table->tinyInteger('paygrade8')->nullable();
            $table->tinyInteger('appointment8')->nullable();
            $table->boolean('governmentserv8')->nullable();



            $table->date('datefrom9')->nullable();
            $table->date('dateto9')->nullable();
            $table->string('position9', 64 )->nullable();
            $table->string('department9', 64 )->nullable();
            $table->string('salary9', 16 )->nullable();
            $table->tinyInteger('paygrade9')->nullable();
            $table->tinyInteger('appointment9')->nullable();
            $table->boolean('governmentserv9')->nullable();
            $table->date('datefrom10')->nullable();
            $table->date('dateto10')->nullable();
            $table->string('position10', 64 )->nullable();
            $table->string('department10', 64 )->nullable();
            $table->string('salary10', 16 )->nullable();
            $table->tinyInteger('paygrade10')->nullable();
            $table->tinyInteger('appointment10')->nullable();
            $table->boolean('governmentserv10')->nullable();
            $table->date('datefrom11')->nullable();
            $table->date('dateto11')->nullable();
            $table->string('position11', 64 )->nullable();
            $table->string('department11', 64 )->nullable();
            $table->string('salary11', 16 )->nullable();
            $table->tinyInteger('paygrade11')->nullable();
            $table->tinyInteger('appointment11')->nullable();
            $table->boolean('governmentserv11')->nullable();
            $table->date('datefrom12')->nullable();
            $table->date('dateto12')->nullable();
            $table->string('position12', 64 )->nullable();
            $table->string('department12', 64 )->nullable();
            $table->string('salary12', 16 )->nullable();
            $table->tinyInteger('paygrade12')->nullable();
            $table->tinyInteger('appointment12')->nullable();
            $table->boolean('governmentserv12')->nullable();
            $table->date('datefrom13')->nullable();
            $table->date('dateto13')->nullable();
            $table->string('position13', 64 )->nullable();
            $table->string('department13', 64 )->nullable();
            $table->string('salary13', 16 )->nullable();
            $table->tinyInteger('paygrade13')->nullable();
            $table->tinyInteger('appointment13')->nullable();
            $table->boolean('governmentserv13')->nullable();
            $table->date('datefrom14')->nullable();
            $table->date('dateto14')->nullable();
            $table->string('position14', 64 )->nullable();
            $table->string('department14', 64 )->nullable();
            $table->string('salary14', 16 )->nullable();
            $table->tinyInteger('paygrade14')->nullable();
            $table->tinyInteger('appointment14')->nullable();
            $table->boolean('governmentserv14')->nullable();



            $table->date('datefrom15')->nullable();
            $table->date('dateto15')->nullable();
            $table->string('position15', 64 )->nullable();
            $table->string('department15', 64 )->nullable();
            $table->string('salary15', 16 )->nullable();
            $table->tinyInteger('paygrade15')->nullable();
            $table->tinyInteger('appointment15')->nullable();
            $table->boolean('governmentserv15')->nullable();
            $table->date('datefrom16')->nullable();
            $table->date('dateto16')->nullable();
            $table->string('position16', 64 )->nullable();
            $table->string('department16', 64 )->nullable();
            $table->string('salary16', 16 )->nullable();
            $table->tinyInteger('paygrade16')->nullable();
            $table->tinyInteger('appointment16')->nullable();
            $table->boolean('governmentserv16')->nullable();
            $table->date('datefrom17')->nullable();
            $table->date('dateto17')->nullable();
            $table->string('position17', 64 )->nullable();
            $table->string('department17', 64 )->nullable();
            $table->string('salary17', 16 )->nullable();
            $table->tinyInteger('paygrade17')->nullable();
            $table->tinyInteger('appointment17')->nullable();
            $table->boolean('governmentserv17')->nullable();
            $table->date('datefrom18')->nullable();
            $table->date('dateto18')->nullable();
            $table->string('position18', 64 )->nullable();
            $table->string('department18', 64 )->nullable();
            $table->string('salary18', 16 )->nullable();
            $table->tinyInteger('paygrade18')->nullable();
            $table->tinyInteger('appointment18')->nullable();
            $table->boolean('governmentserv18')->nullable();
            $table->date('datefrom19')->nullable();
            $table->date('dateto19')->nullable();
            $table->string('position19', 64 )->nullable();
            $table->string('department19', 64 )->nullable();
            $table->string('salary19', 16 )->nullable();
            $table->tinyInteger('paygrade19')->nullable();
            $table->tinyInteger('appointment19')->nullable();
            $table->boolean('governmentserv19')->nullable();
            $table->date('datefrom20')->nullable();
            $table->date('dateto20')->nullable();
            $table->string('position20', 64 )->nullable();
            $table->string('department20', 64 )->nullable();
            $table->string('salary20', 16 )->nullable();
            $table->tinyInteger('paygrade20')->nullable();
            $table->tinyInteger('appointment20')->nullable();
            $table->boolean('governmentserv20')->nullable();



            $table->date('datefrom21')->nullable();
            $table->date('dateto21')->nullable();
            $table->string('position21', 64 )->nullable();
            $table->string('department21', 64 )->nullable();
            $table->string('salary21', 16 )->nullable();
            $table->tinyInteger('paygrade21')->nullable();
            $table->tinyInteger('appointment21')->nullable();
            $table->boolean('governmentserv21')->nullable();
            $table->date('datefrom22')->nullable();
            $table->date('dateto22')->nullable();
            $table->string('position22', 64 )->nullable();
            $table->string('department22', 64 )->nullable();
            $table->string('salary22', 16 )->nullable();
            $table->tinyInteger('paygrade22')->nullable();
            $table->tinyInteger('appointment22')->nullable();
            $table->boolean('governmentserv22')->nullable();
            $table->date('datefrom23')->nullable();
            $table->date('dateto23')->nullable();
            $table->string('position23', 64 )->nullable();
            $table->string('department23', 64 )->nullable();
            $table->string('salary23', 16 )->nullable();
            $table->tinyInteger('paygrade23')->nullable();
            $table->tinyInteger('appointment23')->nullable();
            $table->boolean('governmentserv23')->nullable();
            $table->date('datefrom24')->nullable();
            $table->date('dateto24')->nullable();
            $table->string('position24', 64 )->nullable();
            $table->string('department24', 64 )->nullable();
            $table->string('salary24', 16 )->nullable();
            $table->tinyInteger('paygrade24')->nullable();
            $table->tinyInteger('appointment24')->nullable();
            $table->boolean('governmentserv24')->nullable();
            $table->date('datefrom25')->nullable();
            $table->date('dateto25')->nullable();
            $table->string('position25', 64 )->nullable();
            $table->string('department25', 64 )->nullable();
            $table->string('salary25', 16 )->nullable();
            $table->tinyInteger('paygrade25')->nullable();
            $table->tinyInteger('appointment25')->nullable();
            $table->boolean('governmentserv25')->nullable();
            $table->date('datefrom26')->nullable();
            $table->date('dateto26')->nullable();
            $table->string('position26', 64 )->nullable();
            $table->string('department26', 64 )->nullable();
            $table->string('salary26', 16 )->nullable();
            $table->tinyInteger('paygrade26')->nullable();
            $table->tinyInteger('appointment26')->nullable();
            $table->boolean('governmentserv26')->nullable();
            $table->date('datefrom27')->nullable();
            $table->date('dateto27')->nullable();
            $table->string('position27', 64 )->nullable();
            $table->string('department27', 64 )->nullable();
            $table->string('salary27', 16 )->nullable();
            $table->tinyInteger('paygrade27')->nullable();
            $table->tinyInteger('appointment27')->nullable();
            $table->boolean('governmentserv27')->nullable();
            $table->date('datefrom28')->nullable();
            $table->date('dateto28')->nullable();
            $table->string('position28', 64 )->nullable();
            $table->string('department28', 64 )->nullable();
            $table->string('salary28', 16 )->nullable();
            $table->tinyInteger('paygrade28')->nullable();
            $table->tinyInteger('appointment28')->nullable();
            $table->boolean('governmentserv28')->nullable();
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
        Schema::dropIfExists('sheets2');
    }
}
