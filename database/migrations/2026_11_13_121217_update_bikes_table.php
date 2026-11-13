<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('bikes', function (Blueprint $table) {

            // Modificar el número de serie
            $table->renameColumn('serial_nambre', 'serial_number');

            // Modificar el precio por hora
            $table->decimal('price_per_hour', 6, 2)->change();

            // Establecer el estado como ENUM
            $table->enum('status', [
                'available',
                'maintenance',
                'retired'
            ])->default('available')->change();

        });
    }

    public function down(): void
    {
        Schema::table('bikes', function (Blueprint $table) {

            $table->string('serial_number')->change();

            $table->string('price_per_hour')->change();

            $table->string('status')->default(null)->change();

        });
    }
};