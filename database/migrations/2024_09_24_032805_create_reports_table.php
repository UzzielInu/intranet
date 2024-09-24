<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Area;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
            $table->id();
            $table->string('partner');
            $table->date('date');
            $table->string('activities')->nullable();;
            $table->string('missing')->nullable();;
            $table->string('status');
            $table->string('signature_name');
            $table->string('signature');
            $table->time('arrival', precision: 0);
            $table->time('exit', precision: 0);
            $table->string('total_work');
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Area::class);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
