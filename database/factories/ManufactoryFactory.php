<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Manufactory>
 */
class ManufactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Array de marcas de veículos
        $brands = [
            'Ford', 'Toyota', 'Chevrolet', 'Honda', 'Nissan', 'Volkswagen', 
            'Hyundai', 'Kia', 'Subaru', 'Mazda', 'Kawasaki', 'Yamaha', 
            'Suzuki', 'Ducati', 'Harley-Davidson', 'BMW', 'KTM', 'Indian', 
            'Triumph', 'Porsche', 'Tesla', 'Fiat', 'Peugeot', 'Renault', 
            'Mercedes-Benz', 'Audi', 'Jaguar', 'Land Rover', 'Mitsubishi', 
            'Citroën', 'Lexus', 'Volvo', 'Chrysler', 'Jeep', 'Ram'
        ];

        // Array de estados brasileiros
        $states = [
            'Acre', 'Alagoas', 'Amapá', 'Amazonas', 'Bahia', 'Ceará', 
            'Distrito Federal', 'Espírito Santo', 'Goiás', 'Maranhão', 
            'Mato Grosso', 'Mato Grosso do Sul', 'Minas Gerais', 'Pará', 
            'Paraíba', 'Paraná', 'Pernambuco', 'Piauí', 'Rio de Janeiro', 
            'Rio Grande do Norte', 'Rio Grande do Sul', 'Rondônia', 'Roraima', 
            'Santa Catarina', 'São Paulo', 'Sergipe', 'Tocantins'
        ];

        return [
            'country' => $this->faker->randomElement($states), 
            'name' => $this->faker->randomElement($brands), 
            'founded_year' => $this->faker->dateTimeBetween('-100 years', 'now')->format('Y-m-d'), // Gera uma data aleatória dos últimos 100 anos no formato Y-m-d
        ];
    }
}
