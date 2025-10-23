<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users'); // paciente
            $table->foreignId('vaccine_id')->constrained('vaccines');
            $table->foreignId('server_id')->constrained('users'); // servidor que aplicou
            $table->foreignId('health_post_id')->constrained('health_posts');
            $table->date('applied_at');
            $table->string('lot_number');
            $table->string('qr_code')->unique();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
