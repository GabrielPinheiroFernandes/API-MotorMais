<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars_brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Dados padrão com IDs
        $brandsCar = [
            ["id" => 1, "name" => "Acura"],
            ["id" => 2, "name" => "Agrale"],
            ["id" => 3, "name" => "Alfa Romeo"],
            ["id" => 4, "name" => "AM Gen"],
            ["id" => 5, "name" => "Asia Motors"],
            ["id" => 189, "name" => "ASTON MARTIN"],
            ["id" => 6, "name" => "Audi"],
            ["id" => 207, "name" => "Baby"],
            ["id" => 7, "name" => "BMW"],
            ["id" => 8, "name" => "BRM"],
            ["id" => 123, "name" => "Bugre"],
            ["id" => 238, "name" => "BYD"],
            ["id" => 236, "name" => "CAB Motors"],
            ["id" => 10, "name" => "Cadillac"],
            ["id" => 245, "name" => "Caoa Chery"],
            ["id" => 161, "name" => "Caoa Chery/Chery"],
            ["id" => 11, "name" => "CBT Jipe"],
            ["id" => 136, "name" => "CHANA"],
            ["id" => 182, "name" => "CHANGAN"],
            ["id" => 12, "name" => "Chrysler"],
            ["id" => 13, "name" => "Citroën"],
            ["id" => 14, "name" => "Cross Lander"],
            ["id" => 241, "name" => "D2D Motors"],
            ["id" => 15, "name" => "Daewoo"],
            ["id" => 16, "name" => "Daihatsu"],
            ["id" => 246, "name" => "DFSK"],
            ["id" => 17, "name" => "Dodge"],
            ["id" => 147, "name" => "EFFA"],
            ["id" => 18, "name" => "Engesa"],
            ["id" => 19, "name" => "Envemo"],
            ["id" => 20, "name" => "Ferrari"],
            ["id" => 21, "name" => "Fiat"],
            ["id" => 149, "name" => "Fibravan"],
            ["id" => 22, "name" => "Ford"],
            ["id" => 190, "name" => "FOTON"],
            ["id" => 170, "name" => "Fyber"],
            ["id" => 199, "name" => "GEELY"],
            ["id" => 23, "name" => "GM - Chevrolet"],
            ["id" => 153, "name" => "GREAT WALL"],
            ["id" => 24, "name" => "Gurgel"],
            ["id" => 240, "name" => "GWM"],
            ["id" => 152, "name" => "HAFEI"],
            ["id" => 214, "name" => "HITECH ELECTRIC"],
            ["id" => 25, "name" => "Honda"],
            ["id" => 26, "name" => "Hyundai"],
            ["id" => 27, "name" => "Isuzu"],
            ["id" => 208, "name" => "IVECO"],
            ["id" => 177, "name" => "JAC"],
            ["id" => 28, "name" => "Jaguar"],
            ["id" => 29, "name" => "Jeep"],
            ["id" => 154, "name" => "JINBEI"],
            ["id" => 30, "name" => "JPX"],
            ["id" => 31, "name" => "Kia Motors"],
            ["id" => 32, "name" => "Lada"],
            ["id" => 171, "name" => "LAMBORGHINI"],
            ["id" => 33, "name" => "Land Rover"],
            ["id" => 34, "name" => "Lexus"],
            ["id" => 168, "name" => "LIFAN"],
            ["id" => 127, "name" => "LOBINI"],
            ["id" => 35, "name" => "Lotus"],
            ["id" => 140, "name" => "Mahindra"],
            ["id" => 36, "name" => "Maserati"],
            ["id" => 37, "name" => "Matra"],
            ["id" => 38, "name" => "Mazda"],
            ["id" => 211, "name" => "Mclaren"],
            ["id" => 39, "name" => "Mercedes-Benz"],
            ["id" => 40, "name" => "Mercury"],
            ["id" => 167, "name" => "MG"],
            ["id" => 156, "name" => "MINI"],
            ["id" => 41, "name" => "Mitsubishi"],
            ["id" => 42, "name" => "Miura"],
            ["id" => 43, "name" => "Nissan"],
            ["id" => 44, "name" => "Peugeot"],
            ["id" => 45, "name" => "Plymouth"],
            ["id" => 46, "name" => "Pontiac"],
            ["id" => 47, "name" => "Porsche"],
            ["id" => 185, "name" => "RAM"],
            ["id" => 186, "name" => "RELY"],
            ["id" => 48, "name" => "Renault"],
            ["id" => 195, "name" => "Rolls-Royce"],
            ["id" => 49, "name" => "Rover"],
            ["id" => 50, "name" => "Saab"],
            ["id" => 51, "name" => "Saturn"],
            ["id" => 52, "name" => "Seat"],
            ["id" => 247, "name" => "SERES"],
            ["id" => 183, "name" => "SHINERAY"],
            ["id" => 157, "name" => "smart"],
            ["id" => 125, "name" => "SSANGYONG"],
            ["id" => 54, "name" => "Subaru"],
            ["id" => 55, "name" => "Suzuki"],
            ["id" => 165, "name" => "TAC"],
            ["id" => 56, "name" => "Toyota"],
            ["id" => 57, "name" => "Troller"],
            ["id" => 58, "name" => "Volkswagen"],
            ["id" => 59, "name" => "Volvo"],
            ["id" => 60, "name" => "Willys"],
            ["id" => 61, "name" => "Yamaha"]
        ];

        // Inserir dados padrão na tabela com IDs
        foreach ($brandsCar as $brand) {
            DB::table('cars_brands')->insert($brand);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars_brands');
    }
};
