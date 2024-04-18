<?php

namespace Database\Seeders;

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
        $this->call(BookingDetailTableSeeder::class);
        $this->call(BookingTableSeeder::class);
        $this->call(CategoryPostSeeder::class);
        $this->call(CategoryProductSeeder::class);
        $this->call(DiscountTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
