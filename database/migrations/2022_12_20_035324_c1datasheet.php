<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class C1datasheet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surname', 64);
            $table->string('firstname', 64);
            $table->string('firstnameext', 5)->nullable();
            $table->string('midname', 64)->nullable();
            $table->date('birthdate');
            $table->boolean('sex');
            $table->tinyInteger('civilStatus');
            $table->string('civilOthers', 64)->nullable();
            $table->string('placeofBirth', 64);
            $table->tinyInteger('height')->nullable();
            $table->tinyInteger('weight')->nullable();
            $table->tinyInteger('bloodType')->nullable();
            $table->string('gsisno', 15)->nullable();
            $table->string('pagibigno', 15)->nullable();
            $table->string('philhealthno', 15)->nullable();
            $table->string('sssno', 15)->nullable();
            $table->string('tinno', 15)->nullable();
            $table->string('agencyemp')->nullable();
            $table->boolean('citizens')->nullable();
            $table->tinyInteger('dualcitizenType')->nullable();
            $table->string('country', 32)->nullable();
            $table->string('residentialhouse', 128)->nullable();
            $table->string('residentialst', 128)->nullable();
            $table->string('residentialsudv', 128)->nullable();
            $table->string('residentialbrgy', 128)->nullable();
            $table->string('residentialcity', 128)->nullable();
            $table->string('residentialprv', 128)->nullable();
            $table->smallInteger('residentialzip')->nullable();
            $table->string('permanenthouse', 128)->nullable();
            $table->string('permanentst', 128)->nullable();
            $table->string('permanentsubdv', 128)->nullable();
            $table->string('permanentbrgy', 128)->nullable();
            $table->string('permanentcity', 128)->nullable();
            $table->string('permanentprv', 128)->nullable();
            $table->smallInteger('permanentzip')->nullable();
            $table->string('telno', 9)->nullable();
            $table->string('mobno', 12)->nullable();
            $table->string('email', 64)->nullable();
            $table->string('spousesn', 64)->nullable();
            $table->string('spousefn', 64)->nullable();
            $table->string('spousenmext', 5)->nullable();
            $table->string('spousemn', 64)->nullable();
            $table->string('spouseocc', 64)->nullable();
            $table->string('spouseemp', 64)->nullable();
            $table->string('spouseempadd', 32)->nullable();
            $table->string('spousetel', 9)->nullable();
            $table->string('fathersn', 64)->nullable();
            $table->string('fatherfn', 64)->nullable();
            $table->string('fatherext', 5)->nullable();
            $table->string('fathermn', 64)->nullable();
            $table->string('mothernm', 64)->nullable();
            $table->string('mothersn', 64)->nullable();
            $table->string('motherfn', 64)->nullable();
            $table->string('mothermn', 64)->nullable();
            $table->string('child0', 128)->nullable();
            $table->date('birthchild0')->nullable();
            $table->string('child1', 128)->nullable();
            $table->date('birthchild1')->nullable();
            $table->string('child2', 128)->nullable();
            $table->date('birthchild2')->nullable();
            $table->string('child3', 128)->nullable();
            $table->date('birthchild3')->nullable();
            $table->string('child4', 128)->nullable();
            $table->date('birthchild4')->nullable();
            $table->string('child5', 128)->nullable();
            $table->date('birthchild5')->nullable();
            $table->string('child6', 128)->nullable();
            $table->date('birthchild6')->nullable();
            $table->string('child7', 128)->nullable();
            $table->date('birthchild7')->nullable();
            $table->string('child8', 128)->nullable();
            $table->date('birthchild8')->nullable();
            $table->string('child9', 128)->nullable();
            $table->date('birthchild9')->nullable();
            $table->string('child10', 128)->nullable();
            $table->date('birthchild10')->nullable();
            $table->string('child11', 128)->nullable();
            $table->date('birthchild11')->nullable();
            $table->string('elemname', 64)->nullable();
            $table->string('elemdeg', 32)->nullable();
            $table->YEAR('attendancefrom')->nullable();
            $table->YEAR('attendanceto')->nullable();
            $table->string('elemunitLevel', 32)->nullable();
            $table->YEAR('yeargradelem')->nullable();
            $table->string('scholarshipelem', 64)->nullable();
            $table->string('hsname', 64)->nullable();
            $table->string('hsdeg', 32)->nullable();
            $table->YEAR('attendancefromhs')->nullable();
            $table->YEAR('attendancetohs')->nullable();
            $table->string('hsunitLevel', 32)->nullable();
            $table->YEAR('yeargradhs')->nullable();
            $table->string('scholarshiphs', 64)->nullable();
            $table->string('vocname', 64)->nullable();
            $table->string('vocdeg', 32)->nullable();
            $table->YEAR('attendancefromvoc')->nullable();
            $table->YEAR('attendancetovoc')->nullable();
            $table->string('vocunitLevel', 32)->nullable();
            $table->YEAR('yeargradvoc')->nullable();
            $table->string('scholarshipvoc', 64)->nullable();
            $table->string('colname', 64)->nullable();
            $table->string('coldeg', 32)->nullable();
            $table->YEAR('attendancefromcol')->nullable();
            $table->YEAR('attendancetocol')->nullable();
            $table->string('colunitLevel', 32)->nullable();
            $table->YEAR('yeargradcol')->nullable();
            $table->string('scholarshipcol', 64)->nullable();
            $table->string('gradname', 64)->nullable();
            $table->string('graddeg', 32)->nullable();
            $table->YEAR('attendancefromgrad')->nullable();
            $table->YEAR('attendancetograd')->nullable();
            $table->string('gradunitLevel', 32)->nullable();
            $table->YEAR('yeargrad')->nullable();
            $table->string('scholarshipgrad', 64)->nullable();
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
        Schema::dropIfExists('sheet');
    }
}
