<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            ['country_id' => 1, 'name' => 'Acre', 'uf' => 'AC'],
            ['country_id' => 1, 'name' => 'Alagoas', 'uf' => 'AL'],
            ['country_id' => 1, 'name' => 'Amazonas', 'uf' => 'AM'],
            ['country_id' => 1, 'name' => 'Amapá', 'uf' => 'AP'],
            ['country_id' => 1, 'name' => 'Bahia', 'uf' => 'BA'],
            ['country_id' => 1, 'name' => 'Ceará', 'uf' => 'CE'],
            ['country_id' => 1, 'name' => 'Distrito Federal', 'uf' => 'DF'],
            ['country_id' => 1, 'name' => 'Espírito Santo', 'uf' => 'ES'],
            ['country_id' => 1, 'name' => 'Goiás', 'uf' => 'GO'],
            ['country_id' => 1, 'name' => 'Maranhão', 'uf' => 'MA'],
            ['country_id' => 1, 'name' => 'Minas Gerais', 'uf' => 'MG'],
            ['country_id' => 1, 'name' => 'Mato Grosso do Sul', 'uf' => 'MS'],
            ['country_id' => 1, 'name' => 'Mato Grosso', 'uf' => 'MT'],
            ['country_id' => 1, 'name' => 'Pará', 'uf' => 'PA'],
            ['country_id' => 1, 'name' => 'Paraíba', 'uf' => 'PB'],
            ['country_id' => 1, 'name' => 'Pernambuco', 'uf' => 'PE'],
            ['country_id' => 1, 'name' => 'Piauí', 'uf' => 'PI'],
            ['country_id' => 1, 'name' => 'Paraná', 'uf' => 'PR'],
            ['country_id' => 1, 'name' => 'Rio de Janeiro', 'uf' => 'RJ'],
            ['country_id' => 1, 'name' => 'Rio Grande do Norte', 'uf' => 'RN'],
            ['country_id' => 1, 'name' => 'Rondônia', 'uf' => 'RO'],
            ['country_id' => 1, 'name' => 'Roraima', 'uf' => 'RR'],
            ['country_id' => 1, 'name' => 'Rio Grande do Sul', 'uf' => 'RS'],
            ['country_id' => 1, 'name' => 'Santa Catarina', 'uf' => 'SC'],
            ['country_id' => 1, 'name' => 'Sergipe', 'uf' => 'SE'],
            ['country_id' => 1, 'name' => 'São Paulo', 'uf' => 'SP'],
            ['country_id' => 1, 'name' => 'Tocantins', 'uf' => 'TO'];
        ]);
    }
}
