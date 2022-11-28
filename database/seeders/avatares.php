<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Avatar;

class avatares extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatars')->insert([
            "code"=>"/img/avatar/guaxinim_selfie.jpg"
        ]);

        DB::table('avatars')->insert([
            "code"=>"/img/avatar/guaxinim-estatua.jpg"
        ]);

        DB::table('avatars')->insert([
            "code"=>"/img/avatar/guaxinim-garfo.jpg"
        ]);

        DB::table('avatars')->insert([
            "code"=>"/img/avatar/guaxinim-terno.png"
        ]);

        DB::table('avatars')->insert([
            "code"=>"/img/avatar/CHEF.jpg"
        ]);
    }
}
