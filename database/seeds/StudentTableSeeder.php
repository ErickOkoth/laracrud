<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        for($i=1;$i<=10;$i++){
          App\Student::create([
              'name'=>$faker->name,
              'regno'=>'0001',
              'location'=>'nyangwete',

          ]);
        }
    }
    
}
