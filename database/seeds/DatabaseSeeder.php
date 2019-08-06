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

        $days = [
            'domingo'=> 0,
            'segunda'=> 1,
            'terça'=> 2,
            'quarta'=> 3,
            'quinta'=> 4,
            'sexta'=> 5,
            'sábado'=> 6,
        ];

        foreach ($days as $day => $value){
            DB::table('days')->insert([
                'name' => $day,
                'order' => $value,
            ]);
        }
    }
}
