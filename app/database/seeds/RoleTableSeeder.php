<?php
class RoleTableSeeder extends Seeder {

    public function run() {

        DB::table('roles')->delete(); // supprimer les enregistrements de la table users

        DB::unprepared('ALTER TABLE roles AUTO_INCREMENT=1'); // remettre l'auto


     // insérer des données dans la table users

         DB::table('roles')->insert(

             [
                 [
                     'user_id' => 1,

                     'role_name' => 'administrator'
                 ],

                [

                     'user_id' => 2,

                     'role_name' => 'first_class'
                 ],

                [
                    'user_id' => 3,

                    'role_name' => 'final_class'
                 ],


             ]);

         }

}