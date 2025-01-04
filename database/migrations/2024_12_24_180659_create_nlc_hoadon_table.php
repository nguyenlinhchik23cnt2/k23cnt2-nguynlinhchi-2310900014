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
        Schema::create('nlc_hoadon', function (Blueprint $table) {
            $table->id();
            $table->string('nlcmahoadon',255)->unique();
            $table->bigInteger('makhachhang')->references('id')->on('nlc_khachhang');
            $table->date('nlcngayhoadon');
            $table->string('nlchotenkhachhang',255);
            $table->string('nlcemail',255);
            $table->string('nlcdienthoai',255);
            $table->string('nlcdiachi',255);
            $table->float('nlctongtrigia');
            $table->tinyInteger('nlctrangthai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nlc_hoadon');
    }
};
