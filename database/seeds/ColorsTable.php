<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('colors')->insert([
            'name' => 'Black'
        ]);
        DB::table('colors')->insert([
            'name' => 'Blue'
        ]);
        DB::table('colors')->insert([
            'name' => 'White'
        ]);
        DB::table('colors')->insert([
            'name' => 'Yellow'
        ]);
    }
}
