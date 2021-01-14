<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CurriculumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('curriculums')->insert([
            'address' => Str::random(20),
            'phone' => '0000-0000',
            'cellphone' => '9000-000'
        ]);
    }
}
