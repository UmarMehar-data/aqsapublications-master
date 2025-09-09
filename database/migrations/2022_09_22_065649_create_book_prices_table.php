<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->constrained();
            $table->decimal('purchase_price', 8,2);
            $table->decimal('sale_price', 8,2);
            $table->integer('discount')->default(0);
            $table->decimal('net_price', 8,2)->nullable();
            $table->integer('status')->comment('0=Deactive, 1=Active')->default(1);
            $table->softDeletes();
            $table->unique('deleted_at');
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
        Schema::dropIfExists('book_prices');
    }
};
