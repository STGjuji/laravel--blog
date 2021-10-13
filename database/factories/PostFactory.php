<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'category_id' => $this->faker->unique()->numberBetween(1,50),
            'title' => $this->faker->unique()->sentence,
            'slug' => $this->faker->slug,
            'excerpt' => $this->faker->unique()->sentence,
            'body' => $this->faker->unique()->paragraph,
        ];
    }
}
