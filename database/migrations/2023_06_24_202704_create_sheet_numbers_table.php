<?php

use App\Models\AdministrativeUnit;
use App\Models\ExpenseType;
use App\Models\User;
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
        Schema::create('sheet_numbers', function (Blueprint $table) {
            $table->id();
            $table->string('sheet_number');
            $table->text('subject');
            $table->text('receiver');
            $table->integer('consecutive_number');
            $table->foreignIdFor(AdministrativeUnit::class);
            $table->foreign('administrative_unit_id')->references('id')->on('administrative_units');
            $table->foreignIdFor(ExpenseType::class);
            $table->foreign('expense_type_id')->references('id')->on('expense_types');
            $table->foreignIdFor(User::class);
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sheet_numbers');
    }
};
