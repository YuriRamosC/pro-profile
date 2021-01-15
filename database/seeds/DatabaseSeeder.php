<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Yuri Ramos Canário Campos',
            'password' => 'root',
            'email' => 'yuriramoscc@gmail.com'
        ]);
        
        DB::table('languages')->insert(['name' => 'english']);
        DB::table('languages')->insert(['name' => 'portuguese']);
        DB::table('languages')->insert(['name' => 'spanish']);
        DB::table('knowledges')->insert(['title' => 'Javascript']);
        DB::table('knowledges')->insert(['title' => 'Laravel']);
        DB::table('knowledges')->insert(['title' => 'PHP']);
        DB::table('knowledges')->insert(['title' => 'Delphi']);
        DB::table('courses')->insert(['title' => 'Javascript para Idiotas','emissor' => 'Colégio Dona Bimbinha']);
        DB::table('courses')->insert(['title' => 'Laramassa','emissor' => 'Robertinho Cursos']);
        DB::table('formations')->insert([
            'title' => 'Analista de Sistemas',
            'level' => 'Superior'
            ]);
        DB::table('curriculums')
        ->insert(['address'=> 'Coronel Elysio Pereira, 71','phone' => '3422-5194', 'cellphone' => '98535-7065', 'id_user' => 1]);
    }
}
