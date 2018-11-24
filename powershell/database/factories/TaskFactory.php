<?php

use Faker\Generator as Faker;

// $factory->define(App\Project::class, function (Faker $faker) {
//     return [
//         'name'        => $faker->name,
//         'discription' => $faker->sentence(),
//     ];
// });

$factory->define(App\Task::class, function (Faker $faker) {
    return [
        // 'project_id'  => factory(App\Project::class)->create()->id,
        // 'completed'   => false,
        // 'description' => $faker->sentence(),
    ];
});
