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
        Schema::create('request_services', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('mtaa');
            $table->string('prot_number');
            $table->string('house_no');
            $table->string('nida');
            $table->string('mobile_number');
            $table->string('email');
            $table->string('service_type');
            $table->string('location');
            $table->string('location_status');
            $table->boolean('opened_request')->default(0);
            $table->boolean('process_request')->default(0);
            $table->boolean('processed_request')->default(0);
            $table->string('site_plan_available')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_services');
    }
};
