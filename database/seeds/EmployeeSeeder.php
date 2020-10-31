<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
        	'name'=>'Fulano de Tal',
        	'position'=>'Analista de Sistemas',
        	'email'=>'fulano@email.com',
        	'telephone'=>'(00) 9 0000-0000',
        	'admission_date'=>'2020-06-03',
        	'company_id'=>1
        ]);
    }
}
