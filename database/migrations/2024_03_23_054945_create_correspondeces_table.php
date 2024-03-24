<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorrespondecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correspondeces', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->date('year');
            $table->string('reference_number');
            $table->string('provenance');
            $table->integer('classification_code');
            $table->date('doc_date');
            $table->string('subject');
            $table->string('forwarded_to');
            $table->string('dispatch');
            $table->string('observition');
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
        Schema::dropIfExists('correspondeces');
    }
}
