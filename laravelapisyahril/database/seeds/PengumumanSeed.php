<?php

use Illuminate\Database\Seeder;

class PengumumanSeed extends Seeder
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
        $kategoriPengumumans = \App\KategoriPengumuman::all()->pluck('id')->toArray();

        for($i=0;$i<=400;$i++) {
            \App\Pengumuman::create([
                'judul'=>$faker->sentence(7),
                'isi'=>$faker->text,
                'users_id'=>$faker->randomElement($users),
                'kategori_pengumuman_id'=>$faker->randomElement($kategoriPengumumans)
            ]);
        }
    }
}
