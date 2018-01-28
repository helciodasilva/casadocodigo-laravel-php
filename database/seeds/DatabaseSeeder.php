<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
        $this->call(ProdutoTableSeeder::class);
    }
}

class ProdutoTableSeeder extends Seeder {
    public function run(){

        DB::insert("insert into produtos 
        (nome, quantidade, valor, descricao)
        values (?,?,?,?)",
        array("Geladeira", 2, 590,
        "Side by Side com gelo na porta"));

        DB::insert("insert into produtos
        (nome, quantidade, valor, descricao)
        values (?,?,?,?)",
        array("Fogão", 5, 95,
        "Painel automático e forno elétrico"));

        DB::insert("insert into produtos
        (nome, quantidade, valor, descricao)
        values (?,?,?,?)",
        array("Microondas", 1, 152,
        "Manda SMS quando termina de esquentar"));

    }
}