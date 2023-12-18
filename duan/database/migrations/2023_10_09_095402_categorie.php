<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
<<<<<<<< HEAD:duan/database/migrations/2023_12_18_033431_create_customer_addresses_table.php
        Schema::create('customer_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users')->constrained()->onDelete('cascade');
            $table->string('hoTen');
            $table->string('email');
            $table->string('soDienThoai');
            $table->string('diaChi');
            $table->string('phuongthucthanhtoan');
========
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id')->unsigned();
>>>>>>>> main:duan/database/migrations/2023_10_09_095402_categorie.php
            $table->timestamps();
            $table->string('name',50);
            $table->tinyInteger('hidden')->default(1);
            $table->string('slug',100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< HEAD:duan/database/migrations/2023_12_18_033431_create_customer_addresses_table.php
        Schema::dropIfExists('customer_addresses');
========
        Schema::dropIfExists('categories');
>>>>>>>> main:duan/database/migrations/2023_10_09_095402_categorie.php
    }
};
