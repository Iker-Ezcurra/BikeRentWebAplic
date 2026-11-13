<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('bookings', function (Blueprint $table) {

            // Modificar las fechas
            $table->dateTime('start_time')->change();
            $table->dateTime('end_time')->change();

            // Modificar el estado
            $table->enum('status', [
                'pending',
                'active',
                'completed',
                'cancelled'
            ])->default('pending')->change();

            // Modificar el coste
            $table->decimal('total_cost', 8, 2)
                ->default(0.00)
                ->change();

        });
    }

    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {

            $table->string('status')->change();

        });
    }
};