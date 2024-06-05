<?php
namespace Database\Seeders;

use App\Models\Authors;
use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Authors::create([
            'name_author' => "Tác giả A",
            'email_author' => 'a@gmail.com',
            'phone_author' => '0123 456 789',
            'enable_author' => true,
        ]);
    }
}
