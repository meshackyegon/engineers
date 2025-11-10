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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable()->after('email');
            $table->string('category')->nullable()->after('phone');
            $table->string('county')->nullable()->after('category');

            $table->boolean('membership_paid')->default(false)->after('remember_token');
            $table->timestamp('membership_expires_at')->nullable()->after('membership_paid');
            $table->string('payment_provider')->nullable()->after('membership_expires_at');
            $table->string('payment_reference')->nullable()->after('payment_provider');

            $table->boolean('is_active')->default(false)->after('payment_reference');
            $table->string('role')->default('member')->after('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'phone',
                'category',
                'county',
                'membership_paid',
                'membership_expires_at',
                'payment_provider',
                'payment_reference',
                'is_active',
                'role',
            ]);
        });
    }
};
