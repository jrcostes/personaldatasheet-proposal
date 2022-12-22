<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class C4datasheet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheets4', function (Blueprint $table) {
            $table->increments('id');

            $table->boolean('34a')->nullable();
            $table->boolean('34b')->nullable();
            $table->string('34adetails', 128)->nullable();
            $table->string('34bdetails', 128)->nullable();
            $table->boolean('35a')->nullable();
            $table->boolean('35b')->nullable();
            $table->string('35adetails', 128)->nullable();
            $table->string('35bdate', 128)->nullable();
            $table->string('35bcase', 128)->nullable();
            $table->boolean('36a')->nullable();
            $table->string('36adetails')->nullable();
            $table->boolean('37a')->nullable();
            $table->string('37adetails')->nullable();
            $table->boolean('38a')->nullable();
            $table->boolean('38b')->nullable();
            $table->string('38adetails', 128)->nullable();
            $table->string('38bdetails', 128)->nullable();
            $table->boolean('39a')->nullable();
            $table->string('39details')->nullable();
            $table->boolean('40a')->nullable();
            $table->boolean('40b')->nullable();
            $table->boolean('40c')->nullable();
            $table->string('40adetails', 128)->nullable();
            $table->string('40bdetails', 128)->nullable();
            $table->string('40cdetails', 128)->nullable();
            $table->string('41name', 128)->nullable();
            $table->string('41address', 128)->nullable();
            $table->string('41contactno', 128)->nullable();
            $table->string('42name', 128)->nullable();
            $table->string('42address', 128)->nullable();
            $table->string('42contactno', 128)->nullable();
            $table->string('43name', 128)->nullable();
            $table->string('43address',128)->nullable();
            $table->string('43contactno', 128)->nullable();
            $table->string('43govtid')->nullable();
            $table->string('43validno')->nullable();
            $table->date('43idinsuancedate')->nullable();
            $table->date('43idinsuanceplace')->nullable();
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
        //
    }
}
