<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(App\Optymous\Database\Seeds\UserTypeTableSeeder::class);
		$this->call(App\Optymous\Database\Seeds\UserTableSeeder::class);
		$this->call(App\Optymous\Database\Seeds\CalendarEventTableSeeder::class);
		$this->call(App\Optymous\Database\Seeds\CommentsTableSeeder::class);
    }
}
