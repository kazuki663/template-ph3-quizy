<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'question_id' => 1,
            'choice' => 'たかなわ',
            'valid' => 1,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 1,
            'choice' => 'たかわ',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 1,
            'choice' => 'こうわ',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 2,
            'choice' => 'かめと',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 2,
            'choice' => 'かめど',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 2,
            'choice' => 'かめいど',
            'valid' => 1,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 3,
            'choice' => 'むこうひら',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 3,
            'choice' => 'むきひら',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 3,
            'choice' => 'むかいなだ',
            'valid' => 1,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 4,
            'choice' => 'a',
            'valid' => 1,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 4,
            'choice' => 'i',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 4,
            'choice' => 'u',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 5,
            'choice' => 'e',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 5,
            'choice' => 'o',
            'valid' => 1,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 5,
            'choice' => 'ka',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 6,
            'choice' => 'ki',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 6,
            'choice' => 'ku',
            'valid' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 6,
            'choice' => 'ke',
            'valid' => 1,
        ];
        DB::table('choices')->insert($param);
    }
}
