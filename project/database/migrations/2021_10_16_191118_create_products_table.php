<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer("bleachingCode");
            $table->string("defaultLanguage");
            $table->integer("dryCleaningCode");
            $table->integer("dryingCode");
            $table->integer("fasteningTypeCode");
            $table->integer("ironingCode");
            $table->integer("productID")->primary();
            $table->integer("pulloutTypeCode");
            $table->integer("sapPacket");
            $table->string("updateImages");
            $table->integer("waistlineCode");
            $table->integer("washabilityCode");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
