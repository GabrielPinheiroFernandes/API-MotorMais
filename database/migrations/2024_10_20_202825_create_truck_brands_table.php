<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('truck_brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $brandsTrucks =[
            ["id"=> 102,"name"=> "AGRALE"],
            ["id"=> 206,"name"=> "BEPOBUS"],
            ["id"=> 103,"name"=> "CHEVROLET"],
            ["id"=> 121,"name"=> "CICCOBUS"],
            ["id"=> 197,"name"=> "DAF"],
            ["id"=> 179,"name"=> "EFFA-JMC"],
            ["id"=> 104,"name"=> "FIAT"],
            ["id"=> 105,"name"=> "FORD"],
            ["id"=> 191,"name"=> "FOTON"],
            ["id"=> 106,"name"=> "GMC"],
            ["id"=> 181,"name"=> "HYUNDAI"],
            ["id"=> 122,"name"=> "IVECO"],
            ["id"=> 188,"name"=> "JAC"],
            ["id"=> 184,"name"=> "MAN"],
            ["id"=> 108,"name"=> "MARCOPOLO"],
            ["id"=> 196,"name"=> "MASCARELLO"],
            ["id"=> 194,"name"=> "MAXIBUS"],
            ["id"=> 109,"name"=> "MERCEDES-BENZ"],
            ["id"=> 110,"name"=> "NAVISTAR"],
            ["id"=> 111,"name"=> "NEOBUS"],
            ["id"=> 112,"name"=> "PUMA-ALFA"],
            ["id"=> 113,"name"=> "SAAB-SCANIA"],
            ["id"=> 114,"name"=> "SCANIA"],
            ["id"=> 193,"name"=> "SHACMAN"],
            ["id"=> 166,"name"=> "SINOTRUK"],
            ["id"=> 115,"name"=> "VOLKSWAGEN"],
            ["id"=> 116,"name"=> "VOLVO"],
            ["id"=> 144,"name"=> "WALKBUS"]
        ];

        foreach ($brandsTrucks as $brand) {
            DB::table('truck_brands')->insert($brand);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('truck_brands');
    }
};
