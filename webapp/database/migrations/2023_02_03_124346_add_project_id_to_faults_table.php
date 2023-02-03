<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('faults', function (Blueprint $table) {
            $table->foreignId('project_id')->constrained()->cascadeOnDelete();
            $table->enum('status', [
                'open',
                'in_progress',
                'todo',
                'closed',
                'resolved',
                'abandoned',
                'backlog',
            ]);
            $table->enum('priority', [
                'lowest',
                'low',
                'medium',
                'high',
                'higest',
            ]);
            $table->longText('description')->change();
            $table->string('title', '70')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('faults', function (Blueprint $table) {
            //
        });
    }
};
