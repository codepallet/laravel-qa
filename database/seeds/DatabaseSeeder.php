<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        /* ----------------------------------------------
        *   Create 10 users and for each user it will create
        *   5 to 30 questions and for each question there will be
        *   3 to 15 answers
        ------------------------------------------------*/
        factory(App\User::class, 10)->create()->each(function($u) {
            $u->questions()->saveMany(
                factory(App\Question::class, rand(5, 30))->make()
            )
            ->each(function ($q) {
                $q->answers()->saveMany(factory(App\Answer::class, rand(3, 15))->make());
            });
        });

    }
}
