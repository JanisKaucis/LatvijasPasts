<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonCVSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_c_v_s', function (Blueprint $table) {
            $table->id();
            $table->string('vards')->nullable();
            $table->string('uzvards')->nullable();
            $table->string('talrunis')->nullable();
            $table->string('epasts')->nullable();
            $table->string('valsts')->nullable();
            $table->string('indekss')->nullable();
            $table->string('pilseta')->nullable();
            $table->string('iela')->nullable();
            $table->string('izglitiba')->nullable();
            $table->string('fakultate')->nullable();
            $table->string('izglitibas_limenis')->nullable();
            $table->string('statuss')->nullable();
            $table->mediumText('par_izglitibu')->nullable();
            $table->string('darbs')->nullable();
            $table->string('amats')->nullable();
            $table->string('slodze')->nullable();
            $table->string('stazs')->nullable();
            $table->mediumText('par_darbu')->nullable();
            $table->string('prasmes')->nullable();
            $table->string('valoda')->nullable();
            $table->string('valodas_limenis')->nullable();
            $table->mediumText('citas_prasmes')->nullable();
            $table->mediumText('intereses')->nullable();
            $table->mediumText('papildus_info')->nullable();
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
        Schema::dropIfExists('person_c_v_s');
    }
}
