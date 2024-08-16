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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('contact_name');
            $table->string('account_number');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('email');
            $table->string('second_f_name')->nullable();
            $table->string('second_l_name')->nullable();
            $table->string('second_email')->nullable();
            $table->string('phone_country');
            $table->string('phone_area');
            $table->string('phone_number');
            $table->string('mobile_country')->nullable();
            $table->string('mobile_area')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('fax_country')->nullable();
            $table->string('fax_area')->nullable();
            $table->string('fax_number')->nullable();
            $table->string('direct_dial_country')->nullable();
            $table->string('direct_dial_area')->nullable();
            $table->string('direct_dial_number')->nullable();
            $table->string('website');
            $table->string('business_registeration_number');
            $table->string('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
