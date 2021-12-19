<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $users = User::pluck('id')->toArray();
        $subtitle = array($this->faker->sentence(random_int(6, 12)), '');
        return [
            'title' => $title,
            'subtitle' => $this->faker->randomElement($subtitle),
            'content' => $this->faker->paragraph(20),
            'slug' => Str::slug($title, '-'),
            'thumbnails' => $this->faker->imageUrl(1280, 720),
            'user_id' => $this->faker->randomElement($users),
        ];
    }
}
