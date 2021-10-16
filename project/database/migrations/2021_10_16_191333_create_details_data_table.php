<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details_data', function (Blueprint $table) {
            $table->integer('sapFamilyID');
            $table->foreign('sapFamilyID')
                ->references('sapFamilyID')->on('header_data');
            $table->string("cedi");
            $table->double("childWeightFrom");
            $table->double("childWeightTo");
            $table->integer("color_code");
            $table->string("color_description");
            $table->boolean("countryImages");
            $table->boolean("defaultSku");
            $table->integer("preferredEan");
            $table->string("sapAssortmentLevel");
            $table->double("sapPrice");
            $table->string("season");
            $table->boolean("showOnLineSku");
            $table->string("size_code");
            $table->string("size_description");
            $table->integer("skuID")->primary();
            $table->string("skuName");
            $table->boolean("stateOfArticle");
            $table->string("umSAPprice");
            $table->double("volume");
            $table->double("weight");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details_data');
    }
}
