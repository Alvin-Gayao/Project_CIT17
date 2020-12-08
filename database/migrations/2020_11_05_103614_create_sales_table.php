<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2020_11_05_103614_create_items_sold_table.php
            $table->int('productID');
            $table->int('quantity');
            $table->int('buyerID');
=======
            $table->integer('product_id');
            $table->integer('quantity');
            $table->string('buyer_name');
>>>>>>> master:database/migrations/2020_11_05_103614_create_sales_table.php
            $table->date('sold_at');
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
        Schema::dropIfExists('sales');
    }
}
