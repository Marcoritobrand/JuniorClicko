<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Iluminar\Soporte\Arr;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $names = collect(['Xavi', 'Marc', 'Adam','Berta', 'Oscar', 'Oliver', 'Sara', 'Haydee', 'Alejandro']);
        $emails = collect(['xavi.ejemplo@gmail.com', 'marc.ejemplo@hotmail.com', 'adam.ejemplo@clicko.com','berta.ejemplo@gmail.com', 'oscar.ejemplo@hotmail.com', 'oliver.ejemplo@clicko.com', 'sara.ejemplo@gmail.com', 'haydee.ejemplo@hotmail.com', 'alejandro.ejemplo@clicko.com']);

        DB::table('users')->delete();
        for ($i=1; $i < 21; $i++) {
            $numerorand = mt_rand(0,8);
            DB::table('users')->insert([
                'name' => $names[$numerorand],
                'email'=> $emails[$numerorand],
                'password'=> '$2y$10$zVnli1I4M7pj7M9GgvEENOXQf7nOPicYWxEarlD8KWGe/6B4Ppveq'
            ]);
        }
        for ($i=0; $i < 1; $i++) {
            $numerorand = mt_rand(0,8);
            DB::table('users')->insert([
                'name' => 'admin',
                'email'=> 'admin@admin.com',
                'password'=> '$2y$10$zVnli1I4M7pj7M9GgvEENOXQf7nOPicYWxEarlD8KWGe/6B4Ppveq'
            ]);
        }

    }
}
