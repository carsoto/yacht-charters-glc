<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYachtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yachts', function (Blueprint $table) {
            $table->id();

            /*'imo'
            'name'
            'year_construction'
            'refit'
            'port_registration_id'
            'companies_vessel_id'
            'models_vessel_id'
            'types_patent_id'
            'capacity'
            'length'
            'beam'
            'prop'
            'speed_cruise '
            'no_crew'
            'outriggers'
            'internet'
            'kayacks'
            'paddle_boards'
            'ameneties'
            'neoprene_suits'
            'snorkel_equipment'
            'percentage_commission'
            'payment_policies'
            'cancellations
            $table->timestamps();
            $table->softDeletes();*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yachts');
    }
}
