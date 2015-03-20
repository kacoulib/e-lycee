<?php

class CommentTableSeeder extends Seeder {

    public function run() {
        DB::table('comments')->delete();
        DB::statement("ALTER TABLE comments AUTO_INCREMENT=1");
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        DB::table('comments')->insert(
            [
                [
                    'content' => 'tus tortor, dignissim sit amet, adipiscing nec. ',
                    'post_id' => 1,
                    'email' => 'toto@toto.fr',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime
                ],
                [
                    'content' => ' adipiscing nec.tus tortor, dignissim sit amet. ',
                    'post_id' => 2,
                    'email' => 'tata@tata.fr',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime
                ]
            ]
        );
    }

}
