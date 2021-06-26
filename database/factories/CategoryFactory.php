<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories = [
            ['id' => 1, 'name' => 'Online Courses'],
            ['id' => 2, 'name' => 'Frameworks'],
            ['id' => 3, 'name' => 'Web Developer'],
        ];
        return [
            'name' => $this->faker->name()
        ];
    }
}
