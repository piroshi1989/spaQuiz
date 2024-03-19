<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ranking;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ranking>
 */
class RankingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Ranking::class;

    public function definition()
    {
        $periods = ['weekly', 'monthly', 'yearly'];
        $created_at = now();

        if ($this->faker->randomElement($periods) === 'weekly') {
            $created_at = $created_at->startOfWeek()->format('Y-m-d');
        } elseif ($this->faker->randomElement($periods) === 'monthly') {
            $created_at = $created_at->startOfMonth()->format('Y-m-d');
        } else {
            $created_at = $created_at->startOfYear()->format('Y-m-d');
        }

        return [
            'user_id' => User::pluck('id')->random(),
            'percentage_correct_answer' => rand(0, 10) * 10,
            'created_at' => $created_at,
        ];
    }
}
