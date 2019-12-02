<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->increments('id');

            $table->string('brand_name');

            $table->boolean('is_active')->default(0)->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
