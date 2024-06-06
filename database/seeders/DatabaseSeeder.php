<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            'nama' => 'user',
            'email' => 'tes@gmail.com',
            'role' => 'user',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('123'),
        ]);

        DB::table('testimonial')->insert([
            'name' => 'Meutia Aini',
            'rating' => 5,
            'message' => 'bagus bangett, pesan tiket ke sabang jadi lebih mudah dan cepat',
            'created_at' => '2021-08-01 00:00:00',
        ]);

        DB::table('testimonial')->insert([
            'name' => 'Rizki Julina',
            'rating' => 5,
            'message' => 'Pengalaman dengan Sabang Trip sangat bagus. Situs webnya informatif dan mudah digunakan. Pilihan paket wisatanya menarik',
            'created_at' => '2021-08-02 00:00:00',
        ]);

        DB::table('testimonial')->insert([
            'name' => 'Iffatun',
            'rating' => 3,
            'message' => 'bagus, memudahkan dalam memesan tiket',
            'created_at' => '2021-08-03 00:00:00',
        ]);

        DB::table('testimonial')->insert([
            'name' => 'Nazwa Salsabila',
            'rating' => 5,
            'message' => 'Situs web ini memiliki banyak opsi paket wisata yang menarik dan harga yang terjangkau. Saya tidak sabar untuk melakukan perjalanan lagi dengan Sabang Trip!!!',
            'created_at' => '2021-08-04 00:00:00',
        ]);
    }
}
