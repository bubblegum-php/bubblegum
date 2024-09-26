<?php

use Bubblegum\Migrations\Migration;
use Bubblegum\Migrations\Table;
use Bubblegum\Migrations\Blueprint;

return new class extends Migration
{
    public function up(): void
    {
        Table::create('users', function (Blueprint $blueprint) {
            $blueprint->id();
            $blueprint->varchar('login', 64);
            $blueprint->varchar('email', 128)->nullable();
            $blueprint->varchar('password_hash', 255);
            $blueprint->createdAt();
            $blueprint->updatedAt();
        });
    }

    public function down(): void
    {
        Table::drop('users');
    }
};