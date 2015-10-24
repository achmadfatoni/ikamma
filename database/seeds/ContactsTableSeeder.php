<?php

use Illuminate\Database\Seeder;
use App\Model\Contact;

class ContactsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach(range(1, 100) as $index) {
            Contact::create([
                'name'  => $faker->name,
                'no_hp'   => $faker->phoneNumber,
                'is_surabaya'   => $faker->numberBetween(0, 1),
            ]);
        }
    }
}
