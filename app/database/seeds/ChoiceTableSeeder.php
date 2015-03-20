<?php

class ChoiceTableSeeder extends Seeder {

    public function run() {
        DB::table('choices')->delete();
        DB::statement("ALTER TABLE choices AUTO_INCREMENT=1");
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        DB::table('choices')->insert(
            [
                [
                    'content' => 'tus tortor, dignissim sit amet, adipiscing nec. ',
                    'question_id' => 1,
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime
                ],
                [
                    'content' => ' adipiscing nec.tus tortor, dignissim sit amet. ',
                    'question_id' => 2,
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime
                ]
            ]
        );
    }

}
