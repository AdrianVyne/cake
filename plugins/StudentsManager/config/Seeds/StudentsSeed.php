<?php

declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Students seed.
 */
class StudentsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            // [
            //     "name" => "john",
            //     "email" => "asd@dsa.com"
            // ],
            // [
            //     "name" => "joe",
            //     "email" => "qwe@dsa.com"
            // ],
            // [
            //     "name" => "shawn",
            //     "email" => "zxc@dsa.com"
            // ],
            // [
            //     "name" => "sean",
            //     "email" => "vbn@dsa.com"
            // ]

        ];

        $faker = Faker\Factory::create();
        
        for ($i=0; $i < 100; $i++) { 
            $data[] = array (
                "name" => $faker->name,
                "email" => $faker->email
            );
        }

        $table = $this->table('students');
        $table->insert($data)->save();
    }
}
