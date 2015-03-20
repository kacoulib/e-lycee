<?php

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('UserTableSeeder');
        $this->call('RoleTableSeeder');
        $this->call('PostTableSeeder');
        $this->call('CommentTableSeeder');
        $this->call('QuestionTableSeeder');
        $this->call('ChoiceTableSeeder');
    }

}
