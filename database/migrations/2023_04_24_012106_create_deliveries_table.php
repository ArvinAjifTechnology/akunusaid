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
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_resi')->nullable();
            $table->string('shipper')->nullable();
            // $table->foreignId('customer_id')->nullable();
            $table->string('shipper_addres')->nullable();
            $table->string('shipper_neighborhood')->nullable();
            $table->string('shipper_district')->nullable();
            $table->string('city_code')->nullable();
            $table->string('shipper_pos_code')->nullable();
            $table->string('destination')->nullable();
            $table->string('destination_address')->nullable();
            $table->string('destination_neighborhood')->nullable();
            $table->string('destination_district')->nullable();
            $table->string('destination_city_code')->nullable();
            $table->string('destination_pos_code')->nullable();
            $table->string('type_id')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('delivery_status_id')->nullable();
            $table->bigInteger('qty')->nullable();
            $table->string('weight')->nullable();
            $table->double('cost', 15, 8)->nullable();
            $table->foreignId('user_id')->nullable();
            $table->timestamp('date_receiped')->nullable();
            $table->timestamp('date_done')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deliveries');
    }
};
