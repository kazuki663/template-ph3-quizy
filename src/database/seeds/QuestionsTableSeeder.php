<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'big_question_id' => 1,
            'image' => 'https://d1khcm40x1j0f.cloudfront.net/quiz/34d20397a2a506fe2c1ee636dc011a07.png',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 1,
            'image' => 'https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 1,
            'image' => 'https://d1khcm40x1j0f.cloudfront.net/quiz/ad4f8badd896f1a9b527c530ebf8ac7f.png',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 2,
            'image' => 'https://d1khcm40x1j0f.cloudfront.net/quiz/34d20397a2a506fe2c1ee636dc011a07.png',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 2,
            'image' => 'https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 2,
            'image' => 'https://d1khcm40x1j0f.cloudfront.net/quiz/ad4f8badd896f1a9b527c530ebf8ac7f.png',
        ];
        DB::table('questions')->insert($param);
    }
}
