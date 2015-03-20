<?php
class UserTableSeeder extends Seeder {

    public function run() {

        DB::table('users')->delete(); // supprimer les enregistrements de la table users

        DB::unprepared('ALTER TABLE users AUTO_INCREMENT=1'); // remettre l'auto


 // insérer des données dans la table users

 DB::table('users')->insert(

     [

         [

             'username' => 'antoine',

             'email' => 'antoine.lucsko@wanadoo.fr',

             'url_thumbnail' => 'mario.png',

             'password' => Hash::make('antoine')




         ],

         [

             'username' => 'cecile',

             'email' => 'cecile.lucsko@wanadoo.fr',

             'url_thumbnail' => 'mario.png',


             'password' => Hash::make('cecile')

         ],

         [

             'username' => 'zikb',

             'email' => 'zikb.lucsko@wanadoo.fr',

             'url_thumbnail' => 'mario.png',


             'password' => Hash::make('cecile')

         ],

     ]);

 }

}