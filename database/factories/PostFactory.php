<?php

namespace Database\Factories;

use App\Models\Post;
use Weidner\Goutte\GoutteFacade as GoutteFacade;
use App\Models\Category;
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
        //子カテゴリー取得
        // $goutte = GoutteFacade::request('GET', 'https://chiebukuro.yahoo.co.jp/category');
        // $categories = array();
        // $goutte->filter('div#ca_lst a')->each(function ($node) use (&$categories) {
        //     if ($node->text() == 'このカテゴリすべてのQ&A') {
        //         return;
        //     }
        //     $categories[]['ChildName'] = $node->text();
        // });
        // //親カテゴリー取得
        // $goutte->filter('div p.ClapLv2CategoryList_Chie-CategoryList__Category0Text__1xqHH')->each(function ($node) use (&$categories) {
        //     $categories[]['ParentName'] = $node->text();
        // });

        return [
            'name' => $this->faker->name,
            'category_id' => $this->faker->numberBetween($min = 0, $max = 20),
            'created_at' => $this->faker->dateTime($max = 'now', $timezone = null),
            'produce' => $this->faker->boolean,
            'pressedButton' => $this->faker->numberBetween($min = 0, $max = 1000),
            'vocabulary' => $this->faker->word,
            'description' => $this->faker->text,
            'user_id' => function () {
                return Post::factory()->create()->id;
            },
        ];
    }
}