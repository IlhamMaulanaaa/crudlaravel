<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pabrik>
 */
class pabrikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'obat_id' => mt_rand(1, 6),
            'telpon_pabrik' => fake()->numerify('#############'),
            'nama_pabrik' => fake()->name(),
            'alamat_pabrik' => fake()->address(),
            'email_pabrik' => fake()->email(),
            'produk' => fake()->name(),
        ];
    }
}
