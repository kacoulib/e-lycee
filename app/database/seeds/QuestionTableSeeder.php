<?php

class QuestionTableSeeder extends Seeder {

    public function run() {
        DB::table('questions')->delete();
        DB::statement("ALTER TABLE questions AUTO_INCREMENT=1");
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        DB::table('questions')->insert(
            [
                [
                    'title' => 'titre question 1. ',
                    'content' => 'tus tortor, dignissim sit amet, adipiscing nec. ',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime
                ],
                [
                    'title' => ' titre question 2. ',
                    'content' => ' adipiscing nec.tus tortor, dignissim sit amet. ',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime
                ]
            ]
        );
    }

}
