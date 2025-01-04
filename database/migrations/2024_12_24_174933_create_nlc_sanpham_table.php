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
        Schema::create('nlc_sanpham', function (Blueprint $table) {
            $table->id();
            $table->string('nlcsanpham',255)->unique();
            $table->string('nlctensanpham',255);
            $table->string('nlchinhanh',255);
            $table->Integer('nlcsoluong');
            $table->float('nlcdongia');
            $table->bigInteger('nlcmaloai')->references('id')->on('nlc_loaisanpham');
            $table->tinyInteger('nlctrangthai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nlc_sanpham');
    }
};
