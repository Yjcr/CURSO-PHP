<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
// este archivo nos permite crear datos falso que nos servira para estructurar informacion de ejemplo
 class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
    //  * @return array<string, mixed>
    //  */
    public function definition(): array
    {
        return [
            // 'user_id'=>1,
            // establecemos que todos los registros contendran el primer usuario de la tabla users
            'user_id'=> User::all()->random()->id,
            // establecemos que cada registro contendra un usuario random
            'title'=> $title = $this->faker->sentence(),
               // almacenamos el titulo en un variable para posteriormente utilzarla como una url amigable
            'slug'=> Str::slug($title),
            'body'=> $this->faker->text(2200),
        ];
    }
}
