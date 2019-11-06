<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('checked_out_on')->useCurrent();
            $table->string('checked_out_by');
            $table->string('title');
            $table->date('due_date');
            $table->tinyInteger('num_rechecks')->default(0);
            $table->bigInteger('late_fees');
            // wait list
            $table->date('missing')->nullable();
            $table->date('archived')->nullable();
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
        Schema::dropIfExists('checkouts');
    }
}
