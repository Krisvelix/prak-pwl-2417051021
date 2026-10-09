<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nama')->after('id');
            $table->string('nim')->unique()->after('nama');
            $table->foreignId('kelas_id')->after('nim')->constrained('kelas');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['kelas_id']);
            $table->dropUnique(['nim']);
            $table->dropColumn(['nama', 'nim', 'kelas_id']);
        });
    }
};
