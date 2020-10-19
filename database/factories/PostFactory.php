<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Answer;
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
            'name' => $this->faker->name,
            'category' => $this->faker->word,
            'created_at' => $this->faker->dateTime($max = 'now', $timezone = null),
            'produce' => $this->faker->boolean,
            'pressedButton' => $this->faker->numberBetween($min = 0, $max = 1000),
            'vocabulary' => $this->faker->word,
            'description' => $this->faker->text,
            'user_id' => function () {
                return Post::factory()->create()->id;
            },
            'reply_id' => function () {
                return Answer::factory()->create()->id;
            },
        ];
    }
}