<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    //  $this->call(BukuSeeder::class);
    //  $this->call(Olahraga_seeder::class);
    //  $this->call(Gajiseeder::class);
        $this->call('SeederRelasi');
        $this->command->info('SeederRelasiBerhasil.');
    }
}
