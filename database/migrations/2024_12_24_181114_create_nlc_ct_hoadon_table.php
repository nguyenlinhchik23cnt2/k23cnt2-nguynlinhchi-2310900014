<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nlc_ct_hoadon', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nlchoadonid')->referenses('id')->on('nlc_hoadon');
            $table->bigInteger('nlcsanphamid')->referenses('id')->on('nlc_sanpham');
            $table->Integer('nlcsoluongmua');
            $table->float('nlcdongiamua');
            $table->float('nlcthanhtien');
            $table->tinyInteger('nlctrangthai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nlc_ct_hoadon');
    }
};
