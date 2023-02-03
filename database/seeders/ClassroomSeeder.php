<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Classroom;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 1; $i < 5; $i++) {
            $classroom = new Classroom;
            $classroom->name = 'Tên lớp ' . $i;
            $classroom->description = 'Miêu tả lớp ' . $i;
            $classroom->is_opened = 0;
            $classroom->save();
        }
    }
}
