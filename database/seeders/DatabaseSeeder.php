<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /*
        'name',
        'username',
        'password',
        'classroom_id',
    */

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'username' => 'admin',
            'classroom_id' => 1,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => '1234567890',
        ]);
        
        $this->call(ClassroomSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(AnswerSeeder::class);

    }
}
