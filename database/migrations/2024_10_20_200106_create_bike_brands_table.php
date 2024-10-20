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
        Schema::create('bike_brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });


        $brandsBike = [
            ["id"=> 60,"name"=> "ADLY"],
            ["id"=> 61,"name"=> "AGRALE"],
            ["id"=> 131,"name"=> "AMAZONAS"],
            ["id"=> 62,"name"=> "APRILIA"],
            ["id"=> 63,"name"=> "ATALA"],
            ["id"=> 216,"name"=> "AVELLOZ"],
            ["id"=> 64,"name"=> "BAJAJ"],
            ["id"=> 205,"name"=> "BEE"],
            ["id"=> 162,"name"=> "Benelli"],
            ["id"=> 65,"name"=> "BETA"],
            ["id"=> 66,"name"=> "BIMOTA"],
            ["id"=> 67,"name"=> "BMW"],
            ["id"=> 68,"name"=> "nameY"],
            ["id"=> 130,"name"=> "BRAVA"],
            ["id"=> 150,"name"=> "BRP"],
            ["id"=> 117,"name"=> "BUELL"],
            ["id"=> 155,"name"=> "BUENO"],
            ["id"=> 212,"name"=> "BULL"],
            ["id"=> 69,"name"=> "byCristo"],
            ["id"=> 70,"name"=> "CAGIVA"],
            ["id"=> 71,"name"=> "CALOI"],
            ["id"=> 72,"name"=> "DAELIM"],
            ["id"=> 145,"name"=> "DAFRA"],
            ["id"=> 137,"name"=> "DAYANG"],
            ["id"=> 142,"name"=> "DAYUN"],
            ["id"=> 73,"name"=> "DERBI"],
            ["id"=> 74,"name"=> "DUCATI"],
            ["id"=> 75,"name"=> "EMME"],
            ["id"=> 248,"name"=> "FEVER"],
            ["id"=> 132,"name"=> "FOX"],
            ["id"=> 209,"name"=> "FUSCO MOTOSEGURA"],
            ["id"=> 128,"name"=> "FYM"],
            ["id"=> 143,"name"=> "GARINNI"],
            ["id"=> 76,"name"=> "GAS GAS"],
            ["id"=> 133,"name"=> "GREEN"],
            ["id"=> 138,"name"=> "HAOBAO"],
            ["id"=> 203,"name"=> "HAOJUE"],
            ["id"=> 77,"name"=> "HARLEY-DAVIDSON"],
            ["id"=> 78,"name"=> "HARTFORD"],
            ["id"=> 79,"name"=> "HERO"],
            ["id"=> 80,"name"=> "HONDA"],
            ["id"=> 81,"name"=> "HUSABERG"],
            ["id"=> 82,"name"=> "HUSQVARNA"],
            ["id"=> 202,"name"=> "INDIAN"],
            ["id"=> 158,"name"=> "IROS"],
            ["id"=> 141,"name"=> "JIAPENG VOLCANO"],
            ["id"=> 174,"name"=> "JOHNNYPAG"],
            ["id"=> 151,"name"=> "JONNY"],
            ["id"=> 129,"name"=> "KAHENA"],
            ["id"=> 118,"name"=> "KASINSKI"],
            ["id"=> 85,"name"=> "KAWASAKI"],
            ["id"=> 87,"name"=> "KTM"],
            ["id"=> 204,"name"=> "KYMCO"],
            ["id"=> 88,"name"=> "L'AQUILA"],
            ["id"=> 159,"name"=> "LANDUM"],
            ["id"=> 89,"name"=> "LAVRALE"],
            ["id"=> 139,"name"=> "LERIVO"],
            ["id"=> 178,"name"=> "LIFAN"],
            ["id"=> 148,"name"=> "Lon-V"],
            ["id"=> 175,"name"=> "MAGRÃO TRICICLOS"],
            ["id"=> 146,"name"=> "Malaguti"],
            ["id"=> 126,"name"=> "MIZA"],
            ["id"=> 90,"name"=> "MOTO GUZZI"],
            ["id"=> 201,"name"=> "MOTOCAR"],
            ["id"=> 200,"name"=> "MOTORINO"],
            ["id"=> 160,"name"=> "MRX"],
            ["id"=> 91,"name"=> "MV AGUSTA"],
            ["id"=> 92,"name"=> "MVK"],
            ["id"=> 239,"name"=> "NIU"],
            ["id"=> 93,"name"=> "ORCA"],
            ["id"=> 164,"name"=> "PEGASSI"],
            ["id"=> 94,"name"=> "PEUGEOT"],
            ["id"=> 95,"name"=> "PIAGGIO"],
            ["id"=> 210,"name"=> "POLARIS"],
            ["id"=> 173,"name"=> "REGAL RAPTOR"],
            ["id"=> 198,"name"=> "RIGUETE"],
            ["id"=> 192,"name"=> "Royal Enfield"],
            ["id"=> 96,"name"=> "SANYANG"],
            ["id"=> 134,"name"=> "SHINERAY"],
            ["id"=> 97,"name"=> "SIAMOTO"],
            ["id"=> 98,"name"=> "SUNDOWN"],
            ["id"=> 237,"name"=> "SUPER SOCO"],
            ["id"=> 99,"name"=> "SUZUKI"],
            ["id"=> 176,"name"=> "TARGOS"],
            ["id"=> 187,"name"=> "TIGER"],
            ["id"=> 119,"name"=> "TRAXX"],
            ["id"=> 100,"name"=> "TRIUMPH"],
            ["id"=> 244,"name"=> "Ventane Motors"],
            ["id"=> 180,"name"=> "VENTO"],
            ["id"=> 215,"name"=> "VOLTZ"],
            ["id"=> 243,"name"=> "WATTS"],
            ["id"=> 135,"name"=> "WUYANG"],
            ["id"=> 101,"name"=> "YAMAHA"],
            ["id"=> 242,"name"=> "ZONTES"]
        ];

        foreach ($brandsBike as $brand) {
            DB::table('bike_brands')->insert($brand);
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bike_brands');
    }
};
