<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($j = 1; $j < 5; $j++) {
            for ($i = 1; $i < 10; $i++) {
                $question = new Question();

                $question->classroom_id = $j;
                $question->content = "Câu hỏi " . $i . " >> Thuộc lớp: " . $j;

                $question->save();
            }
        }
    }
}
