<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Message;
use App\Models\MessageCategory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        for ($i = 0; $i < 20; $i++) {

            //insert data in customers table
            Customer::insert([
                'name' => 'Customer - ' . $i + 1,
                'email' => "Customer". ($i+1)."@gmail.com",
                'password' => Hash::make('12345678'),
            ]);

            //insert data in employees table
            Employee::insert([
                'name' => 'Employee - ' . $i + 1,
                'email' => "employee". ($i+1)."@gmail.com",
                'password' => Hash::make('12345678'),
            ]);

            //insert data in messages table
            Message::insert([
                'message_category_id' => rand(1, 5),
                'customer_id' => rand(1, 20),
                'message' => fake()->paragraph(),
            ]);

            //insert data in message categories table
            MessageCategory::insert([
                'name' => 'Category - ' . $i + 1
            ]);
        }
        

    }
}
