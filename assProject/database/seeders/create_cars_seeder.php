<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;


class create_cars_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i =0;$i<10;$i++){
            DB::table('assProject')->insert([
                'brand'=>Str::random(5),
                'model'=>Str::random(5),
                'variant'=>Str::random(5),
                'color'=>Str::random(5),
                'plateNumber'=>Str::random(5),
                'yearOfManufacture'=>rand(2000,2050),
                'engineCC'=>Str::random(5),
                'price'=>Str::random(5),
                'condition'=>Str::random(5),
                'user_id'=>rand(1,5),


            ]);
        }
    }
}
