<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProtocolInternalExternalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('protocol_internal_externals', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->date('year');
            $table->string('reference_number');
            $table->string('provenance');
            $table->integer('classification_code');
            $table->date('doc_date');
            $table->string('subject');
            $table->string('name_of_expander');
            $table->string('name_of_recipient');
            $table->date('date_of_receipt');
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
        Schema::dropIfExists('protocol_internal_externals');
    }
}
