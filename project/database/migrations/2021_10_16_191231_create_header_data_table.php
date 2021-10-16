<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeaderDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_data', function (Blueprint $table) {
            $table->integer('productID');
            $table->foreign('productID')->references('productID')->on('products');

            $table->boolean("bag");
            $table->string("bleachingDescription");
            $table->string("brand");
            $table->integer("brandCode");
            $table->string("catalog");
            $table->string("composition");
            $table->date("creationDateInDatabase");
            $table->string("custom1");
            $table->string("custom2");
            $table->string("custom3");
            $table->boolean("drinkHolder");
            $table->string("dryCleaningDescription");
            $table->string("dryingDescription");
            $table->string("EShopDisplayName");
            $table->string("EShopLongDescription");
            $table->boolean("ergonomicSeat");
            $table->string("fasteningTypeDescription");
            $table->string("fasteningTypeTextile");
            $table->boolean("flat");
            $table->boolean("freeDelivery");
            $table->string("gender");
            $table->boolean("indicatorOfItHasToBeAssembled");
            $table->string("ironingDescription");
            $table->date("lastDateChanged");
            $table->string("lastUserChanged");
            $table->string("productFeatures");
            $table->string("productFeatures1");
            $table->string("productMissingFeatures");
            $table->string("productMissingFeatures1");
            $table->string("productStatus");
            $table->string("pulloutType");
            $table->string("pulloutTypeDescription");
            $table->boolean("punnet");
            $table->integer("sapCategoryID");
            $table->string("sapCategoryName");
            $table->integer("sapDivisionID");
            $table->string("sapDivisionName");
            $table->string("sapFamilyDescription");
            $table->integer("sapFamilyID")->primary();
            $table->string("sapFamilyName");
            $table->string("sapMacrocategoryID");
            $table->string("sapMacrocategoryName");
            $table->string("sapName");
            $table->string("sapUniverseID");
            $table->string("sapUniverseName");
            $table->boolean("showOnLine");
            $table->string("sizeGuide");
            $table->string("sourceID");
            $table->string("userOfCreation");
            $table->string("waistlineDescription");
            $table->string("washability");
            $table->string("washabilityDescription");
            $table->boolean("zipStopper");
            $table->string("locale");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('header_data');
    }
}
