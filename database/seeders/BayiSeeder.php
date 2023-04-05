<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BayiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bayis')->insert(
            [
                'no_urut' => '0001',
                'nama' => 'Abdullah Azzam',
                'alamat' => 'Jl.Jakarta',
                'tanggal_lahir' => '17 Oktober 2003',
                'bb_lahir' => '3,5',
                'tb_lahir' => '55'
            ]);
        DB::table('bayis')->insert(
            [
                'no_urut' => '0002',
                'nama' => 'Abdullah Ahmad',
                'alamat' => 'Jl.Bandung',
                'tanggal_lahir' => '01 Oktober 2003',
                'bb_lahir' => '3,7',
                'tb_lahir' => '50'
            ]);
        DB::table('bayis')->insert([
                'no_urut' => '0003',
                'nama' => 'Muhammad Azzam',
                'alamat' => 'Jl.Papua',
                'tanggal_lahir' => '02 Oktober 2003',
                'bb_lahir' => '3,8',
                'tb_lahir' => '46'
            ]);
        DB::table('bayis')->insert([
                'no_urut' => '0004',
                'nama' => 'Abdul Fahmi',
                'alamat' => 'Jl.Bekasi',
                'tanggal_lahir' => '03 Oktober 2003',
                'bb_lahir' => '3,2',
                'tb_lahir' => '41'
            ]);
        DB::table('bayis')->insert([
                'no_urut' => '0005',
                'nama' => 'Abduh brama',
                'alamat' => 'Jl.Depok',
                'tanggal_lahir' => '04 Oktober 2003',
                'bb_lahir' => '4,6',
                'tb_lahir' => '39'
            ]);
        DB::table('bayis')->insert([
                'no_urut' => '0006',
                'nama' => 'Agung Septian',
                'alamat' => 'Jl.Kebumen',
                'tanggal_lahir' => '05 Oktober 2003',
                'bb_lahir' => '3,5',
                'tb_lahir' => '40'
            ]);
        DB::table('bayis')->insert([
                'no_urut' => '0007',
                'nama' => 'Jajang Sutisno',
                'alamat' => 'Jl.Banten',
                'tanggal_lahir' => '06 Oktober 2003',
                'bb_lahir' => '3,8',
                'tb_lahir' => '49'
            ]);
    }
}
