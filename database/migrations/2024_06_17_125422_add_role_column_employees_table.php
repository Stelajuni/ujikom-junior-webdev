<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::table('employees', function (Blueprint $table) {
    //         $table->enum('role', ['employee', 'admin'])
    //             ->default('employee');
    //     });
    // }

    public function up()
    {
    if (!Schema::hasColumn('employees', 'role')) {
        Schema::table('employees', function (Blueprint $table) {
            $table->enum('role', ['employee', 'admin'])->default('employee');
        });
    }
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
