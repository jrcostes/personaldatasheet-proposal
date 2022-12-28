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

            $table->boolean('a34')->nullable();
            $table->boolean('b34')->nullable();
            $table->string('detailsb34', 128)->nullable();
            $table->boolean('a35')->nullable();
            $table->boolean('b35')->nullable();
            $table->string('details35a', 128)->nullable();
            $table->string('b35date', 128)->nullable();
            $table->string('b35case', 128)->nullable();
            $table->boolean('a36')->nullable();
            $table->string('a36details')->nullable();
            $table->boolean('a37')->nullable();
            $table->string('a37details')->nullable();
            $table->boolean('a38')->nullable();
            $table->boolean('b38')->nullable();
            $table->string('a38details', 128)->nullable();
            $table->string('b38details', 128)->nullable();
            $table->boolean('a39')->nullable();
            $table->string('a39details')->nullable();
            $table->boolean('a40')->nullable();
            $table->boolean('b40')->nullable();
            $table->boolean('c40')->nullable();
            $table->string('a40details', 128)->nullable();
            $table->string('b40details', 128)->nullable();
            $table->string('c40details', 128)->nullable();
            $table->string('name41', 128)->nullable();
            $table->string('address41', 128)->nullable();
            $table->string('contactno41', 128)->nullable();
            $table->string('name42', 128)->nullable();
            $table->string('address42', 128)->nullable();
            $table->string('contactno42', 128)->nullable();
            $table->string('name43', 128)->nullable();
            $table->string('address43',128)->nullable();
            $table->string('contactno43', 128)->nullable();
            $table->string('govid44')->nullable();
            $table->string('valid44')->nullable();
            $table->date('issuancedate44')->nullable();
            $table->date('issuanceplace44')->nullable();
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
