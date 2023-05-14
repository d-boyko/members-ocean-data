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
        if (!Schema::hasTable('members_statuses')) {
            Schema::create('members_statuses', function (Blueprint $table) {
                $table->id('member_status_id');
                $table->integer('member_id');
                $table->foreign('member_id')->references('member_id')->on('members');
                $table->integer('eligible_month');
                $table->boolean('is_active');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members_statuses');
    }
};
