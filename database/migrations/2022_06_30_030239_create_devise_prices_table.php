<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevisePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devise_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('devise_id');
            $table->double('buy_at', 64,8);
            $table->double('sell_at', 64,8);
            $table->integer('level')->nullable();
            $table->date('current_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devise_prices');
    }
}
