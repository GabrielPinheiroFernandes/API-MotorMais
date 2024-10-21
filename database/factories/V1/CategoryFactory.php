<?php

namespace Database\Factories\V1;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\V1\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Definir os tipos de veículos
        $vehicleTypes = [
            'Elétrico', 
            'Van', 
            'Caminhão', 
            'Motocicleta', 
            'Carro', 
            'SUV', 
            'Híbrido', 
            'Bicicleta'
        ];

        // Retornar os dados de definição
        return [
            'name' => $this->faker->randomElement($vehicleTypes), // Sorteia um tipo de veículo
            'obs' => $this->faker->optional()->text(100), // Gerar uma observação aleatória ou null
        ];
    }
}
