<?php

class PostTableSeeder extends Seeder {

    public function run() {
        DB::table('posts')->delete();
        DB::statement("ALTER TABLE posts AUTO_INCREMENT=1");
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');
        DB::table('posts')->insert(
            [
                [
                    'title' => 'PSR-0 Autoload hhhh',
                    'user_id' => 1,
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non 
            risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. ',
                    'status' => 'publish',
                    'url_thumbnail' => 'laravel_amsterdam2013.jpg',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime
                ],
                [
                    'title' => 'PSR-1 Autoload',
                    'user_id' => 2,
                    'content' => 'ignissim sit amet, adipiscing nec, ultricies sed, dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non 
            risus. Suspendisse lectus tortor.',
                    'status' => 'unpublish',
                    'url_thumbnail' => 'laravel_sjhksd.jpg',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime
                ],
                [
                    'title' => 'PSR-3 Autoload',
                    'user_id' => 2,
                    'content' => 'ignissim sit amet, adipiscing nec, ultricies sed, dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non 
            risus. Suspendisse lectus tortor.',
                    'status' => 'publish',
                    'url_thumbnail' => 'laravel_sjhksd.jpg',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime
                ]
            ]
        );
    }

}
