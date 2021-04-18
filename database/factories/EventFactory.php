<?php




/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Event::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->company,
        'description' => $faker->text,
        'start_time' => $faker->dateTime->format('Y-m-d H:i:s'),
        'venue' => $faker->address,
    ];
});
