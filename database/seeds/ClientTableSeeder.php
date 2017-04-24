<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client')->insert([
            'name' => 'Cliente 1',
            'rfc' => 'XAA00AA01',
            'cp' => '57140',
            'state'   =>  'Mexico',
            'delegation'  => 'Nezahualcoyotl',
            'colony'   => 'Jardines de Guadalupe',
            'street'  => 'Saltillo',
            'num_int'  => '53',
            'num_ext'  => '3',
            'tel1'  => '56789090',
            'tel2'  => '',
            'contact'  => '',
            'email'  => 'abraham.ruiz@netcloud.com',
            'email2'  => '',
            'web_page'  => '',
            'tax_regime'  => 'Personas Fisicas',
        ]);

        DB::table('client')->insert([
            'name' => 'Cliente 2',
            'rfc' => 'XAA0EE01',
            'cp' => '57140',
            'state'   =>  'Mexico',
            'delegation'  => 'Nezahualcoyotl',
            'colony'   => 'Jardines de Guadalupe',
            'street'  => 'Saltillo',
            'num_int'  => '53',
            'num_ext'  => '3',
            'tel1'  => '56789090',
            'tel2'  => '',
            'contact'  => '',
            'email'  => 'damian.ruiz@netcloud.com',
            'email2'  => '',
            'web_page'  => '',
            'tax_regime'  => 'Personas Fisicas',
        ]);
    }
}
