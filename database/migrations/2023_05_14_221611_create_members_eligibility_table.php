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
        if (!Schema::hasTable('members_eligibility')) {
            Schema::create('members_eligibility', function (Blueprint $table) {
                $table->id('member_month_disease_id');
                $table->integer('member_id');
                $table->foreign('member_id')->references('member_id')->on('members');
                $table->integer('address_id');
                $table->foreign('address_id')->references('address_id')->on('addresses');
                $table->integer('disease_id');
                $table->foreign('disease_id')->references('disease_id')->on('members_months_diseases');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members_eligibility');
    }
};
