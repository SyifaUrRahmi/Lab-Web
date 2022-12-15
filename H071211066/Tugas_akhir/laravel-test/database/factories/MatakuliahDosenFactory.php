<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\matakuliah_dosen>
 */
class MatakuliahDosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "matakuliah_id" => mt_rand(1, 2),
            "dosen_id" => mt_rand(1, 4)
        ];
    }
}
