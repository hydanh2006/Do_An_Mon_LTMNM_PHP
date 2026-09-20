<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained(); // Liên kết với bảng users có sẵn của Laravel
        $table->string('ten_nguoi_nhan');
        $table->string('so_dien_thoai');
        $table->string('dia_chi_giao');
        $table->decimal('tong_tien', 12, 2);
        $table->string('trang_thai')->default('Chờ xử lý'); // Chờ xử lý, Đang giao, Đã giao
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
