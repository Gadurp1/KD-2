<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use \App\Coupons;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $this->call('CategoryTableSeeder');
    $this->command->info('Category table seeded!');

    $this->call('PostTableSeeder');
    $this->command->info('Post table seeded!');
    }
}
