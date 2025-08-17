<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('img', 50);
            $table->string('titulo', 50);
            $table->string('descricao', 150);
            $table->integer('curtidas')->default(0);
            $table->integer('views')->default(0);
            $table->string('link', 255);
            $table->timestamps();
        });

        // Inserir dados iniciais
        DB::table('cards')->insert([
            [
                'img' => 'azul.png',
                'titulo' => 'Azul',
                'descricao' => 'Um tom calmo e sereno que lembra o céu e o mar. Não é minha cor favorita, mas é agradável.',
                'curtidas' => 430,
                'views' => 2100,
                'link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'vermelho.png',
                'titulo' => 'Vermelho',
                'descricao' => 'A cor da paixão e da energia. Sempre me chamou a atenção por sua intensidade vibrante.',
                'curtidas' => 520,
                'views' => 2500,
                'link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'verde.png',
                'titulo' => 'Verde',
                'descricao' => 'Representa a natureza e o crescimento. Gosto de como traz uma sensação de frescor e renovação.',
                'curtidas' => 310,
                'views' => 1800,
                'link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'amarelo.png',
                'titulo' => 'Amarelo',
                'descricao' => 'Uma cor alegre e vibrante que evoca sentimentos de felicidade e otimismo. Sempre me faz sorrir.',
                'curtidas' => 290,
                'views' => 1600,
                'link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
