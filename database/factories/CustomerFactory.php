<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CustomerFactory extends Factory
{
    protected $model = \App\Models\Customer::class;

    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name'  => $this->faker->lastName(),
            'gender'     => $this->faker->randomElement(['Male', 'Female', 'Others']),
            'date_of_birth' => $this->faker->date(),
            'email'      => $this->faker->unique()->safeEmail(),
            'status'     => 1,
            'password'   => bcrypt('password'),
            'subscribed_to_news_letter' => $this->faker->boolean(),
            'address1'   => $this->faker->streetAddress(),
            'address2'   => $this->faker->secondaryAddress(),
            'country'    => $this->faker->country(),
            'state'      => $this->faker->state(),
            'city'       => $this->faker->city(),
            'postcode'   => $this->faker->postcode(),
            'phone'      => $this->faker->phoneNumber(),
            'notes'      => $this->faker->sentence(),
            'remember_token' => Str::random(10),
        ];
    }
}
