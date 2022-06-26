<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            'fullname' => 'tajima junichi',
            'gender'   => 1,
            'email'    => 'aaaaa@bbbb.com',
            'postcode'=> '999-9999',
            'address'  => 'gunmaken ootasi',
            'building_name' => '',
            'opinion'  => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
        ];
        for($i=0;$i<35;$i++){
            DB::table('contacts')->insert($param);
        }
    }
}
