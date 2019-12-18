<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'name' => 'PHP',
        ]);

        DB::table('skills')->insert([
            'name' => 'Mysql',
        ]);

        DB::table('skills')->insert([
            'name' => 'Javascript',
        ]);

        DB::table('skills')->insert([
            'name' => 'Html',
        ]);

        DB::table('skills')->insert([
            'name' => 'Css',
        ]);

        DB::table('skills')->insert([
            'name' => 'POO',
        ]);

        DB::table('skills')->insert([
            'name' => 'Wordpress',
        ]);

        DB::table('skills')->insert([
            'name' => 'Laravel',
        ]);
    }
}
