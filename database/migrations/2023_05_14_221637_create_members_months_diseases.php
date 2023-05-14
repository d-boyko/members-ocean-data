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
        if (!Schema::hasTable('members_months_diseases')) {
            Schema::create('members_months_diseases', function (Blueprint $table) {
                $table->id('disease_id');
                $table->integer('member_id');
                $table->foreign('member_id')->references('member_id')->on('members');
                $table->integer('eligible_month');
                $table->integer('disease_code');
                $table->string('disease_name', 32);
                $table->string('disease_description', 256)->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members_months_diseases');
    }
};
