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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('slug',255);
            $table->string('thumbnail');
            $table->integer('qty');
            $table->longText('body');
            $table->enum('publish',['Yes', 'No'])->default('No');
            $table->enum('status',['Approved', 'Rejected'])->default('Rejected');
            $table->integer('is_recomend')->comment('0=No, 1=Yes')->default(0);
            $table->softDeletes();
            $table->unique(['name','slug','deleted_at']);
            $table->timestamps();
            $table->integer('created_by')->default(0);
            $table->integer('updated_by')->default(0);
            $table->integer('deleted_by')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
