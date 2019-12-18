<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'firstname' => 'Benoît',
            'lastname' => 'Perus',
            'email' => 'benoit@perus.fr',
            'age' => '31',
            'phone_number' => '0679481325',
        ]);
        
        DB::table('students')->insert([
            'firstname' => 'Soline',
            'lastname' => 'Molowa',
            'email' => 'soline@molowa.fr',
            'age' => '31',
            'phone_number' => '0665197832',
        ]);

        DB::table('students')->insert([
            'firstname' => 'Selçuk',
            'lastname' => 'Orkun',
            'email' => 'selçuk@orkun.fr',
            'age' => '37',
            'phone_number' => '0631973546',
        ]);

        DB::table('students')->insert([
            'firstname' => 'Dessartine',
            'lastname' => 'Quentin',
            'email' => 'quentin@dessartine.fr',
            'age' => '29',
            'phone_number' => '0692738165',
        ]);

        DB::table('students')->insert([
            'firstname' => 'Hoarau',
            'lastname' => 'Elisabeth',
            'email' => 'Hoarau@Elisabeth.fr',
            'age' => '30',
            'phone_number' => '0628913446',
        ]);

        DB::table('students')->insert([
            'firstname' => 'Belardi',
            'lastname' => 'Océane',
            'email' => 'océane@belardi.fr',
            'age' => '31',
            'phone_number' => '0669138437',
        ]);

        DB::table('students')->insert([
            'firstname' => 'Agoune',
            'lastname' => 'Adam',
            'email' => 'adam@agoune.fr',
            'age' => '26',
            'phone_number' => '0693761829',
        ]);

        DB::table('students')->insert([
            'firstname' => 'Palmer',
            'lastname' => 'Quentin',
            'email' => 'quentin@palmer.fr',
            'age' => '22',
            'phone_number' => '0648158468',
        ]);

        DB::table('students')->insert([
            'firstname' => 'Rathipanya',
            'lastname' => 'Lasmy',
            'email' => 'lasmy@rathipanya.fr',
            'age' => '33',
            'phone_number' => '0694613782',
        ]);
}
}