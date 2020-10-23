<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Weidner\Goutte\GoutteFacade as GoutteFacade;
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
            'category_id' => Category::factory(),
            'created_at' => $this->faker->dateTime($max = 'now', $timezone = null),
            'produce' => $this->faker->boolean,
            'pressedButton' => $this->faker->numberBetween($min = 0, $max = 1000),
            'vocabulary' => $this->faker->word,
            'description' => $this->faker->text,
            'user_id' => User::factory(),
        ];
    }
}