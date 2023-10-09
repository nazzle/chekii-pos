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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->integer('code');
            $table->string('supplier_code');
            $table->string('name');
            $table->string('tin');
            $table->string('telephone');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });

        Schema::table('suppliers', function (Blueprint $table) {
            //Created by column
            $table->foreignId('created_by')->constrained(
                table: 'users', column: 'code'
            )
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
