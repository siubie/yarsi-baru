<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proposal>
 */
class ProposalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => $this->faker->sentence(),
            'presentation_file' => null,
            'document_file' => null,
            'status' => 'draft',
            //add user_id field with random user id from users table
            'user_id' => \App\Models\User::inRandomOrder()->first()->id,
        ];
    }
}
