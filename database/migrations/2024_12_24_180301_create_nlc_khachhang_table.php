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
        Schema::create('nlc_khachhang', function (Blueprint $table) {
            $table->id();
            $table->string('nlcmakhachhang',255)->unique();
            $table->string('nlctenkhachhang',255);
            $table->string('nlcemail',255);
            $table->string('nlcmatkhau',255);
            
            $table->string('dienthoai',255);
            $table->string('nlcdiachi',255);
            $table->date('nlcngaydangky');
            $table->tinyInteger('nlctrangthai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nlc_khachhang');
    }
};
