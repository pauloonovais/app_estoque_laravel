<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values(?,?,?,?)', array('Sabão', 12, 3.50, '2018-11-01'));
        DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values(?,?,?,?)', array('Perfume', 10, 80.00, '2019-11-01'));
        DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values(?,?,?,?)', array('Feijão', 15, 8.00, '2018-12-11'));
        DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values(?,?,?,?)', array('Arroz', 7, 10, '2018-09-18'));

    }
}
