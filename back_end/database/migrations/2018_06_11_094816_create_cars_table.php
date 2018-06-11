<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('bien_kiem_soat');
            $table->string('hang');
            $table->string('noi_sam_xuat');
            $table->string('ngay_sam_xuat');
            $table->string('dung_tich_may');
            $table->string('dang_ky_lan_dau');
            $table->string('han_dang_kiem');
            $table->string('ma_luc');
            $table->string('mo_ta');
            $table->string('co_lop');
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
        Schema::dropIfExists('cars');
    }
}
