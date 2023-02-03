<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Answer;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i < 37; $i++) {
            
            //--
            $answer = new Answer();

            $answer->question_id = $i;
            $answer->content = "Câu trả lời 1";
            $answer->post_content = "Nội dung sau trả lời 1";
            $answer->correct = 1;
            $answer->money = 0;
            $answer->exp = 0;

            $answer->save();

            //--
            $answer = new Answer();

            $answer->question_id = $i;
            $answer->content = "Câu trả lời 2";
            $answer->post_content = "Nội dung sau trả lời 2";
            $answer->correct = 0;
            $answer->money = 0;
            $answer->exp = 0;

            $answer->save();

            //--
            $answer = new Answer();

            $answer->question_id = $i;
            $answer->content = "Câu trả lời 3";
            $answer->post_content = "Nội dung sau trả lời 3";
            $answer->correct = 0;
            $answer->money = 0;
            $answer->exp = 0;

            $answer->save();

            //--
            $answer = new Answer();

            $answer->question_id = $i;
            $answer->content = "Câu trả lời 4";
            $answer->post_content = "Nội dung sau trả lời 4";
            $answer->correct = 0;
            $answer->money = 0;
            $answer->exp = 0;

            $answer->save();
        }
    }
}
