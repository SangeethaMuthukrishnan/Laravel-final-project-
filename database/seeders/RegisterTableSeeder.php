<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegisterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //DB testing for register_forms_table

    public function run()
    {
        DB::table('registerforms')->insert([
            'first_name'=>'hadhi',
            'last_name'=>'agarkar',
            'company'=>'France tech',
            'email'=>'hadhi@gmail.com',
            'phone'=>'8944675236',
            'password'=>Hash::make('Hadhi22@'),
        ]);

    }
}
