<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul_berita' => fake()->sentence(8, true),
            'kategori' => "Programming",
            'img_url' => '',
            'isi_berita' => fake()->paragraphs()
        ];
    }
}
