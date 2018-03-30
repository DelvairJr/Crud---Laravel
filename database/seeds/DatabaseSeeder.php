<?php

use Illuminate\Database\Seeder;
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
         $this->call( 'ProdutotableSeeder' );
    }
}

class ProdutotableSeeder extends Seeder
{
    public function run()
    {
    	DB::insert( 'insert into produtos( nome, valor, descricao, quantidade )values ( ?,?,?,? )',
			array( 'Geladeira', 590.03, 'Side by Side com gelo na porta', 2 ) );

		DB::insert( 'insert into produtos( nome, valor, descricao, quantidade )values ( ?,?,?,? )',
			array( 'Fogão', 950.02, 'Painel automático e forno elétrico', 5 ) );

		DB::insert( 'insert into produtos( nome, valor, descricao, quantidade )values ( ?,?,?,? )',array( 'Microondas', 520.59, 'Manda SMS quando termina de esquentar', 3 ) );
	}
}
