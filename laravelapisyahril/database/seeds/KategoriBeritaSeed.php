<?php

use Illuminate\Database\Seeder;

class KategoriBeritaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create('id_ID');

        $users = \App\User::all()->pluck('id')->toArray();

        for($i=0;$i<=200;$i++) {
            \App\KategoriBerita::create([
                'nama'=>$faker->sentence(1) ,
                'users_id'=>$faker->randomElement($users)
            ]);
        }
    }
}
