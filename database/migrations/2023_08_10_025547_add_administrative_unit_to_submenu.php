<?php

use App\Models\AdministrativeUnit;
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
        Schema::table('submenus', function (Blueprint $table) {
            $table->foreignIdFor(AdministrativeUnit::class);
            $table->foreign('administrative_unit_id')->references('id')->on('administrative_units');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('administrative_units', function (Blueprint $table) {
            //
        });
    }
};
