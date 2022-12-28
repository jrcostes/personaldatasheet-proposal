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
            $table->string('rating', 64 )->nullable();
            $table->string('dateofexam', 64 )->nullable();
            $table->string('placeofexam', 64 )->nullable();
            $table->string('licenseno', 64 )->nullable();
            $table->string('validity', 64 )->nullable();

            $table->string('eligibility2', 64 )->nullable();
            $table->string('rating2', 64 )->nullable();
            $table->string('dateofexam2', 64 )->nullable();
            $table->string('placeofexam2', 64 )->nullable();
            $table->string('licenseno2', 64 )->nullable();
            $table->string('validity2', 64 )->nullable();
            $table->string('eligibility3', 64 )->nullable();
            $table->string('rating3', 64 )->nullable();
            $table->string('dateofexam3', 64 )->nullable();
            $table->string('placeofexam3', 64 )->nullable();
            $table->string('licenseno3', 64 )->nullable();
            $table->string('validity3', 64 )->nullable();
            $table->string('eligibility4', 64 )->nullable();
            $table->string('rating4', 64 )->nullable();
            $table->string('dateofexam4', 64 )->nullable();
            $table->string('placeofexam4', 64 )->nullable();
            $table->string('licenseno4', 64 )->nullable();
            $table->string('validity4', 64 )->nullable();
            $table->string('eligibility5', 64 )->nullable();
            $table->string('rating5', 64 )->nullable();
            $table->string('dateofexam5', 64 )->nullable();
            $table->string('placeofexam5', 64 )->nullable();
            $table->string('licenseno5', 64 )->nullable();
            $table->string('validity5', 64 )->nullable();
            $table->string('eligibility6', 64 )->nullable();
            $table->string('rating6', 64 )->nullable();
            $table->string('dateofexam6', 64 )->nullable();
            $table->string('placeofexam6', 64 )->nullable();
            $table->string('licenseno6', 64 )->nullable();
            $table->string('validity6', 64 )->nullable();
            $table->string('eligibility7', 64 )->nullable();
            $table->string('rating7', 64 )->nullable();
            $table->string('dateofexam7', 64 )->nullable();
            $table->string('placeofexam7', 64 )->nullable();
            $table->string('licenseno7', 64 )->nullable();
            $table->string('validity7', 64 )->nullable();

            $table->date('datefrom', 64 )->nullable();
            $table->date('dateto', 64 )->nullable();
            $table->string('position', 64 )->nullable();
            $table->string('department', 64 )->nullable();
            $table->string('salary', 64 )->nullable();
            $table->string('paygrade', 64 )->nullable();
            $table->string('appointment', 64 )->nullable();
            $table->string('governmentserv', 64 )->nullable();

            $table->date('datefrom2', 64 )->nullable();
            $table->date('dateto2', 64 )->nullable();
            $table->string('position2', 64 )->nullable();
            $table->string('department2', 64 )->nullable();
            $table->string('salary2', 64 )->nullable();
            $table->string('paygrade2', 64 )->nullable();
            $table->string('appointment2', 64 )->nullable();
            $table->string('governmentserv2', 64 )->nullable();




            $table->date('datefrom3', 64 )->nullable();
            $table->date('dateto3', 64 )->nullable();
            $table->string('position3', 64 )->nullable();
            $table->string('department3', 64 )->nullable();
            $table->string('salary3', 64 )->nullable();
            $table->string('paygrade3', 64 )->nullable();
            $table->string('appointment3', 64 )->nullable();
            $table->string('governmentserv3', 64 )->nullable();
            $table->date('datefrom4', 64 )->nullable();
            $table->date('dateto4', 64 )->nullable();
            $table->string('position4', 64 )->nullable();
            $table->string('department4', 64 )->nullable();
            $table->string('salary4', 64 )->nullable();
            $table->string('paygrade4', 64 )->nullable();
            $table->string('appointment4', 64 )->nullable();
            $table->string('governmentserv4', 64 )->nullable();
            $table->date('datefrom5', 64 )->nullable();
            $table->date('dateto5', 64 )->nullable();
            $table->string('position5', 64 )->nullable();
            $table->string('department5', 64 )->nullable();
            $table->string('salary5', 64 )->nullable();
            $table->string('paygrade5', 64 )->nullable();
            $table->string('appointment5', 64 )->nullable();
            $table->string('governmentserv5', 64 )->nullable();
            $table->date('datefrom6', 64 )->nullable();
            $table->date('dateto6', 64 )->nullable();
            $table->string('position6', 64 )->nullable();
            $table->string('department6', 64 )->nullable();
            $table->string('salary6', 64 )->nullable();
            $table->string('paygrade6', 64 )->nullable();
            $table->string('appointment6', 64 )->nullable();
            $table->string('governmentserv6', 64 )->nullable();
            $table->date('datefrom7', 64 )->nullable();
            $table->date('dateto7', 64 )->nullable();
            $table->string('position7', 64 )->nullable();
            $table->string('department7', 64 )->nullable();
            $table->string('salary7', 64 )->nullable();
            $table->string('paygrade7', 64 )->nullable();
            $table->string('appointment7', 64 )->nullable();
            $table->string('governmentserv7', 64 )->nullable();
            $table->date('datefrom8', 64 )->nullable();
            $table->date('dateto8', 64 )->nullable();
            $table->string('position8', 64 )->nullable();
            $table->string('department8', 64 )->nullable();
            $table->string('salary8', 64 )->nullable();
            $table->string('paygrade8', 64 )->nullable();
            $table->string('appointment8', 64 )->nullable();
            $table->string('governmentserv8', 64 )->nullable();



            $table->date('datefrom9', 64 )->nullable();
            $table->date('dateto9', 64 )->nullable();
            $table->string('position9', 64 )->nullable();
            $table->string('department9', 64 )->nullable();
            $table->string('salary9', 64 )->nullable();
            $table->string('paygrade9', 64 )->nullable();
            $table->string('appointment9', 64 )->nullable();
            $table->string('governmentserv9', 64 )->nullable();
            $table->date('datefrom10', 64 )->nullable();
            $table->date('dateto10', 64 )->nullable();
            $table->string('position10', 64 )->nullable();
            $table->string('department10', 64 )->nullable();
            $table->string('salary10', 64 )->nullable();
            $table->string('paygrade10', 64 )->nullable();
            $table->string('appointment10', 64 )->nullable();
            $table->string('governmentserv10', 64 )->nullable();
            $table->date('datefrom11', 64 )->nullable();
            $table->date('dateto11', 64 )->nullable();
            $table->string('position11', 64 )->nullable();
            $table->string('department11', 64 )->nullable();
            $table->string('salary11', 64 )->nullable();
            $table->string('paygrade11', 64 )->nullable();
            $table->string('appointment11', 64 )->nullable();
            $table->string('governmentserv11', 64 )->nullable();
            $table->date('datefrom12', 64 )->nullable();
            $table->date('dateto12', 64 )->nullable();
            $table->string('position12', 64 )->nullable();
            $table->string('department12', 64 )->nullable();
            $table->string('salary12', 64 )->nullable();
            $table->string('paygrade12', 64 )->nullable();
            $table->string('appointment12', 64 )->nullable();
            $table->string('governmentserv12', 64 )->nullable();
            $table->date('datefrom13', 64 )->nullable();
            $table->date('dateto13', 64 )->nullable();
            $table->string('position13', 64 )->nullable();
            $table->string('department13', 64 )->nullable();
            $table->string('salary13', 64 )->nullable();
            $table->string('paygrade13', 64 )->nullable();
            $table->string('appointment13', 64 )->nullable();
            $table->string('governmentserv13', 64 )->nullable();
            $table->date('datefrom14', 64 )->nullable();
            $table->date('dateto14', 64 )->nullable();
            $table->string('position14', 64 )->nullable();
            $table->string('department14', 64 )->nullable();
            $table->string('salary14', 64 )->nullable();
            $table->string('paygrade14', 64 )->nullable();
            $table->string('appointment14', 64 )->nullable();
            $table->string('governmentserv14', 64 )->nullable();



            $table->date('datefrom15', 64 )->nullable();
            $table->date('dateto15', 64 )->nullable();
            $table->string('position15', 64 )->nullable();
            $table->string('department15', 64 )->nullable();
            $table->string('salary15', 64 )->nullable();
            $table->string('paygrade15', 64 )->nullable();
            $table->string('appointment15', 64 )->nullable();
            $table->string('governmentserv15', 64 )->nullable();
            $table->date('datefrom16', 64 )->nullable();
            $table->date('dateto16', 64 )->nullable();
            $table->string('position16', 64 )->nullable();
            $table->string('department16', 64 )->nullable();
            $table->string('salary16', 64 )->nullable();
            $table->string('paygrade16', 64 )->nullable();
            $table->string('appointment16', 64 )->nullable();
            $table->string('governmentserv16', 64 )->nullable();
            $table->date('datefrom17', 64 )->nullable();
            $table->date('dateto17', 64 )->nullable();
            $table->string('position17', 64 )->nullable();
            $table->string('department17', 64 )->nullable();
            $table->string('salary17', 64 )->nullable();
            $table->string('paygrade17', 64 )->nullable();
            $table->string('appointment17', 64 )->nullable();
            $table->string('governmentserv17', 64 )->nullable();
            $table->date('datefrom18', 64 )->nullable();
            $table->date('dateto18', 64 )->nullable();
            $table->string('position18', 64 )->nullable();
            $table->string('department18', 64 )->nullable();
            $table->string('salary18', 64 )->nullable();
            $table->string('paygrade18', 64 )->nullable();
            $table->string('appointment18', 64 )->nullable();
            $table->string('governmentserv18', 64 )->nullable();
            $table->date('datefrom19', 64 )->nullable();
            $table->date('dateto19', 64 )->nullable();
            $table->string('position19', 64 )->nullable();
            $table->string('department19', 64 )->nullable();
            $table->string('salary19', 64 )->nullable();
            $table->string('paygrade19', 64 )->nullable();
            $table->string('appointment19', 64 )->nullable();
            $table->string('governmentserv19', 64 )->nullable();
            $table->date('datefrom20', 64 )->nullable();
            $table->date('dateto20', 64 )->nullable();
            $table->string('position20', 64 )->nullable();
            $table->string('department20', 64 )->nullable();
            $table->string('salary20', 64 )->nullable();
            $table->string('paygrade20', 64 )->nullable();
            $table->string('appointment20', 64 )->nullable();
            $table->string('governmentserv20', 64 )->nullable();



            $table->date('datefrom21', 64 )->nullable();
            $table->date('dateto21', 64 )->nullable();
            $table->string('position21', 64 )->nullable();
            $table->string('department21', 64 )->nullable();
            $table->string('salary21', 64 )->nullable();
            $table->string('paygrade21', 64 )->nullable();
            $table->string('appointment21', 64 )->nullable();
            $table->string('governmentserv21', 64 )->nullable();
            $table->date('datefrom22', 64 )->nullable();
            $table->date('dateto22', 64 )->nullable();
            $table->string('position22', 64 )->nullable();
            $table->string('department22', 64 )->nullable();
            $table->string('salary22', 64 )->nullable();
            $table->string('paygrade22', 64 )->nullable();
            $table->string('appointment22', 64 )->nullable();
            $table->string('governmentserv22', 64 )->nullable();
            $table->date('datefrom23', 64 )->nullable();
            $table->date('dateto23', 64 )->nullable();
            $table->string('position23', 64 )->nullable();
            $table->string('department23', 64 )->nullable();
            $table->string('salary23', 64 )->nullable();
            $table->string('paygrade23', 64 )->nullable();
            $table->string('appointment23', 64 )->nullable();
            $table->string('governmentserv23', 64 )->nullable();
            $table->date('datefrom24', 64 )->nullable();
            $table->date('dateto24', 64 )->nullable();
            $table->string('position24', 64 )->nullable();
            $table->string('department24', 64 )->nullable();
            $table->string('salary24', 64 )->nullable();
            $table->string('paygrade24', 64 )->nullable();
            $table->string('appointment24', 64 )->nullable();
            $table->string('governmentserv24', 64 )->nullable();
            $table->date('datefrom25', 64 )->nullable();
            $table->date('dateto25', 64 )->nullable();
            $table->string('position25', 64 )->nullable();
            $table->string('department25', 64 )->nullable();
            $table->string('salary25', 64 )->nullable();
            $table->string('paygrade25', 64 )->nullable();
            $table->string('appointment25', 64 )->nullable();
            $table->string('governmentserv25', 64 )->nullable();
            $table->date('datefrom26', 64 )->nullable();
            $table->date('dateto26', 64 )->nullable();
            $table->string('position26', 64 )->nullable();
            $table->string('department26', 64 )->nullable();
            $table->string('salary26', 64 )->nullable();
            $table->string('paygrade26', 64 )->nullable();
            $table->string('appointment26', 64 )->nullable();
            $table->string('governmentserv26', 64 )->nullable();
            $table->date('datefrom27', 64 )->nullable();
            $table->date('dateto27', 64 )->nullable();
            $table->string('position27', 64 )->nullable();
            $table->string('department27', 64 )->nullable();
            $table->string('salary27', 64 )->nullable();
            $table->string('paygrade27', 64 )->nullable();
            $table->string('appointment27', 64 )->nullable();
            $table->string('governmentserv27', 64 )->nullable();
            $table->date('datefrom28', 64 )->nullable();
            $table->date('dateto28', 64 )->nullable();
            $table->string('position28', 64 )->nullable();
            $table->string('department28', 64 )->nullable();
            $table->string('salary28', 64 )->nullable();
            $table->string('paygrade28', 64 )->nullable();
            $table->string('appointment28', 64 )->nullable();
            $table->string('governmentserv28', 64 )->nullable();
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
