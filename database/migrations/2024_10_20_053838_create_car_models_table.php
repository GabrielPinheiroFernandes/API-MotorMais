<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('car_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id'); // Chave estrangeira para a tabela brands
            $table->string('fipe_code');
            $table->string('model');
            $table->string('years');
            $table->timestamps();

            // Definindo a chave estrangeira
            $table->foreign('brand_id')->references('id')->on('cars_brands')->onDelete('cascade');
        });

        // Inserir os modelos de carro da Acura
        $acuraModels = [
            [
                'id' => 1,
                'brand_id' => 1, // ID da marca Acura
                'fipe_code' => '038003-2',
                'model' => 'Integra GS 1.8',
                'years' => '1991 a 1992'
            ],
            [
                'id' => 2,
                'brand_id' => 1, // ID da marca Acura
                'fipe_code' => '038002-4',
                'model' => 'Legend 3.2/3.5',
                'years' => '1991 a 1998'
            ],
            [
                'id' => 3,
                'brand_id' => 1, // ID da marca Acura
                'fipe_code' => '038001-6',
                'model' => 'NSX 3.0',
                'years' => '1991 a 1995'
            ],
        ];

        // Inserir os modelos da Agrale
        $agraleModels = [
            [
                'id' => 4,
                'brand_id' => 2, // ID da marca Agrale
                'fipe_code' => '060001-6',
                'model' => 'MARRUÁ 2.8 12V 132cv TDI Diesel',
                'years' => '2004 a 2007'
            ],
            [
                'id' => 4564,
                'brand_id' => 2, // ID da marca Agrale
                'fipe_code' => '060003-2',
                'model' => 'MARRUÁ AM 100 2.8 CS TDI Diesel',
                'years' => '2008 a 2015'
            ],
            [
                'id' => 4563,
                'brand_id' => 2, // ID da marca Agrale
                'fipe_code' => '060004-0',
                'model' => 'MARRUÁ AM 100 2.8 CD TDI Diesel',
                'years' => '2007 a 2015'
            ],
            [
                'id' => 4566,
                'brand_id' => 2, // ID da marca Agrale
                'fipe_code' => '060005-9',
                'model' => 'MARRUÁ AM 150 2.8 CS TDI Diesel',
                'years' => '2008 a 2015'
            ],
            [
                'id' => 4565,
                'brand_id' => 2, // ID da marca Agrale
                'fipe_code' => '060006-7',
                'model' => 'MARRUÁ AM 150 2.8 CD TDI Diesel',
                'years' => '2008 a 2015'
            ],
            [
                'id' => 4567,
                'brand_id' => 2, // ID da marca Agrale
                'fipe_code' => '060008-3',
                'model' => 'MARRUÁ AM 200 2.8 CD TDI Diesel',
                'years' => '2008 a 2022'
            ],
            [
                'id' => 4568,
                'brand_id' => 2, // ID da marca Agrale
                'fipe_code' => '060007-5',
                'model' => 'MARRUÁ AM 200 2.8 CS TDI Diesel',
                'years' => '2007 a 2022'
            ],
            [
                'id' => 10883,
                'brand_id' => 2, // ID da marca Agrale
                'fipe_code' => '060014-8',
                'model' => 'MARRUÁ AM 200 Esc. 3.8 TDI Die.Aut. (E6)',
                'years' => '2023 a Zero Km'
            ],
            [
                'id' => 9352,
                'brand_id' => 2, // ID da marca Agrale
                'fipe_code' => '060010-5',
                'model' => 'MARRUÁ AM 200 Escolar 2.8 TDI Diesel',
                'years' => '2021 a 2022'
            ],
            [
                'id' => 10884,
                'brand_id' => 2, // ID da marca Agrale
                'fipe_code' => '060011-3',
                'model' => 'MARRUÁ AM 200 Escolar 3.8 TDI Die. (E6)',
                'years' => '2023 a Zero Km'
            ],
            [
                'id' => 9353,
                'brand_id' => 2, // ID da marca Agrale
                'fipe_code' => '060009-1',
                'model' => 'MARRUÁ AM 200 Microbus 2.8 TDI Diesel',
                'years' => '2021 a 2022'
            ],
            [
                'id' => 10864,
                'brand_id' => 2, // ID da marca Agrale
                'fipe_code' => '060013-0',
                'model' => 'MARRUÁ AM 250 3.8 CD TDI Die. Aut. (E6)',
                'years' => '2023 a Zero Km'
            ],
            [
                'id' => 10569,
                'brand_id' => 2, // ID da marca Agrale
                'fipe_code' => '060012-1',
                'model' => 'MARRUÁ AM 250 3.8 CD TDI Diesel (E6)',
                'years' => '2023 a Zero Km'
            ],
            [
                'id' => 10865,
                'brand_id' => 2, // ID da marca Agrale
                'fipe_code' => '060016-4',
                'model' => 'MARRUÁ AM 250 3.8 CS TDI Die. Aut. (E6)',
                'years' => '2023 a Zero Km'
            ],
            [
                'id' => 10866,
                'brand_id' => 2, // ID da marca Agrale
                'fipe_code' => '060015-6',
                'model' => 'MARRUÁ AM 250 3.8 CS TDI Diesel (E6)',
                'years' => '2023 a Zero Km'
            ],
            [
                'id' => 4569,
                'brand_id' => 2, // ID da marca Agrale
                'fipe_code' => '060002-4',
                'model' => 'MARRUÁ AM 50 2.8 140cv TDI Diesel',
                'years' => '2008 a 2011'
            ],
        ];

        $alfaRomeoModels = [
            [
                'id' => 5,
                'brand_id' => 3, // ID da marca Alfa Romeo
                'fipe_code' => '006009-7',
                'model' => '145 Elegant 1.7/1.8 16V',
                'years' => '1996 a 1999',
            ],
            [
                'id' => 6,
                'brand_id' => 3, // ID da marca Alfa Romeo
                'fipe_code' => '006001-1',
                'model' => '145 Elegant 2.0 16V',
                'years' => '1995 a 1998',
            ],
            [
                'id' => 7,
                'brand_id' => 3, // ID da marca Alfa Romeo
                'fipe_code' => '006002-0',
                'model' => '145 Quadrifoglio 2.0',
                'years' => '1996 a 1999',
            ],
            [
                'id' => 8,
                'brand_id' => 3, // ID da marca Alfa Romeo
                'fipe_code' => '006008-9',
                'model' => '145 QV',
                'years' => '1996 a 1998',
            ],
            [
                'id' => 9,
                'brand_id' => 3, // ID da marca Alfa Romeo
                'fipe_code' => '006017-8',
                'model' => '147 2.0 16V 148cv 4p Semi-Aut.',
                'years' => '2003 a 2005',
            ],
            [
                'id' => 10,
                'brand_id' => 3, // ID da marca Alfa Romeo
                'fipe_code' => '006003-8',
                'model' => '155',
                'years' => '1995 a 1997',
            ],
            [
                'id' => 11,
                'brand_id' => 3, // ID da marca Alfa Romeo
                'fipe_code' => '006004-6',
                'model' => '155 Super',
                'years' => '1995 a 1997',
            ],
            [
                'id' => 12,
                'brand_id' => 3, // ID da marca Alfa Romeo
                'fipe_code' => '006015-1',
                'model' => '156 2.5 V6 24V 190cv 4p Aut.',
                'years' => '1999 a 2003',
            ],
            [
                'id' => 13,
                'brand_id' => 3, // ID da marca Alfa Romeo
                'fipe_code' => '006014-3',
                'model' => '156 Sport Wagon 2.0 16V',
                'years' => '2001 a 2002',
            ],
            [
                'id' => 14,
                'brand_id' => 3, // ID da marca Alfa Romeo
                'fipe_code' => '006016-0',
                'model' => '156 Sport Wagon 2.5 V6 24V 4p Aut.',
                'years' => '2003 a 2004',
            ],
            [
                'id' => 15,
                'brand_id' => 3, // ID da marca Alfa Romeo
                'fipe_code' => '006010-0',
                'model' => '156 TS/Sport/Elegant 2.0 16V',
                'years' => '1999 a 2002',
            ],
            [
                'id' => 16,
                'brand_id' => 3, // ID da marca Alfa Romeo
                'fipe_code' => '006005-4',
                'model' => '164 3.0 V6',
                'years' => '1991 a 1996',
            ],
            [
                'id' => 17,
                'brand_id' => 3, // ID da marca Alfa Romeo
                'fipe_code' => '006006-2',
                'model' => '164 Super V6 24V',
                'years' => '1995 a 1996',
            ],
            [
                'id' => 18,
                'brand_id' => 3, // ID da marca Alfa Romeo
                'fipe_code' => '006011-9',
                'model' => '166 3.0 V6 24V',
                'years' => '1999 a 2003',
            ],
            [
                'id' => 19,
                'brand_id' => 3, // ID da marca Alfa Romeo
                'fipe_code' => '006013-5',
                'model' => '2300 TI/TI-4',
                'years' => '1985 a 1986',
            ],
            [
                'id' => 20,
                'brand_id' => 3, // ID da marca Alfa Romeo
                'fipe_code' => '006007-0',
                'model' => 'Spider 2.0/3.0',
                'years' => '1991 a 1997',
            ],
        ];


        $hummerModels = [
            [
                'id' => 21,
                'brand_id' => 4, // ID da marca Hummer
                'fipe_code' => '037001-0',
                'model' => 'Hummer Hard-Top 6.5 4x4 Diesel TB',
                'years' => '1998 a 2000'
            ],
            [
                'id' => 22,
                'brand_id' => 4, // ID da marca Hummer
                'fipe_code' => '037002-9',
                'model' => 'Hummer Open-Top 6.5 4x4 Diesel TB',
                'years' => '1998 a 2000'
            ],
            [
                'id' => 23,
                'brand_id' => 4, // ID da marca Hummer
                'fipe_code' => '037003-7',
                'model' => 'Hummer Wagon 6.5 4x4 Diesel TB',
                'years' => '1998 a 2000'
            ]
        ];

        $asiaMotorsModels = [
            [
                'id' => 24,
                'brand_id' => 5, // ID da marca Asia Motors
                'fipe_code' => '007018-1',
                'model' => 'AM-825 Luxo 4.0 Diesel',
                'years' => '1994 a 1998'
            ],
            [
                'id' => 25,
                'brand_id' => 5, // ID da marca Asia Motors
                'fipe_code' => '007019-0',
                'model' => 'AM-825 Super Luxo 4.0 Diesel',
                'years' => '1994 a 1998'
            ],
            [
                'id' => 26,
                'brand_id' => 5, // ID da marca Asia Motors
                'fipe_code' => '007001-7',
                'model' => 'Hi-Topic SLX/SDX/DLX Full Diesel',
                'years' => '1993 a 1998'
            ],
            [
                'id' => 27,
                'brand_id' => 5, // ID da marca Asia Motors
                'fipe_code' => '007002-5',
                'model' => 'Hi-Topic STD Diesel',
                'years' => '1993 a 1998'
            ],
            [
                'id' => 28,
                'brand_id' => 5, // ID da marca Asia Motors
                'fipe_code' => '007017-3',
                'model' => 'Hi-Topic Van 2.7 Diesel (furgão)',
                'years' => '1994 a 1997'
            ],
            [
                'id' => 29,
                'brand_id' => 5, // ID da marca Asia Motors
                'fipe_code' => '007020-3',
                'model' => 'Jipe Rocsta GT 4x4 2.2 Diesel',
                'years' => '1994 a 1995'
            ],
            [
                'id' => 30,
                'brand_id' => 5, // ID da marca Asia Motors
                'fipe_code' => '007016-5',
                'model' => 'Topic Carga 2.7 Diesel (furgão)',
                'years' => '1997 a 1999'
            ],
            [
                'id' => 31,
                'brand_id' => 5, // ID da marca Asia Motors
                'fipe_code' => '007014-9',
                'model' => 'Topic Luxo Diesel',
                'years' => '1997 a 1999'
            ],
            [
                'id' => 32,
                'brand_id' => 5, // ID da marca Asia Motors
                'fipe_code' => '007015-7',
                'model' => 'Topic Super Luxo Diesel',
                'years' => '1996 a 1999'
            ],
            [
                'id' => 33,
                'brand_id' => 5, // ID da marca Asia Motors
                'fipe_code' => '007003-3',
                'model' => 'Towner Coach Full',
                'years' => '1995 a 1998'
            ],
            [
                'id' => 34,
                'brand_id' => 5, // ID da marca Asia Motors
                'fipe_code' => '007009-2',
                'model' => 'Towner Furgão',
                'years' => '1994 a 1999'
            ],
            [
                'id' => 35,
                'brand_id' => 5, // ID da marca Asia Motors
                'fipe_code' => '007004-1',
                'model' => 'Towner Glass Van',
                'years' => '1993 a 1998'
            ],
            [
                'id' => 36,
                'brand_id' => 5, // ID da marca Asia Motors
                'fipe_code' => '007012-2',
                'model' => 'Towner Luxo',
                'years' => '1997 a 1999'
            ],
            [
                'id' => 37,
                'brand_id' => 5, // ID da marca Asia Motors
                'fipe_code' => '007011-4',
                'model' => 'Towner Multiuso 5p',
                'years' => '1997 a 1999'
            ],
            [
                'id' => 38,
                'brand_id' => 5, // ID da marca Asia Motors
                'fipe_code' => '007005-0',
                'model' => 'Towner Panel Van',
                'years' => '1994 a 1998'
            ],
            [
                'id' => 39,
                'brand_id' => 5, // ID da marca Asia Motors
                'fipe_code' => '007008-4',
                'model' => 'Towner Pick-Up',
                'years' => '1997 a 1999'
            ],
            [
                'id' => 40,
                'brand_id' => 5, // ID da marca Asia Motors
                'fipe_code' => '007006-8',
                'model' => 'Towner SDX / DLX/ STD',
                'years' => '1993 a 1998'
            ],
            [
                'id' => 41,
                'brand_id' => 5, // ID da marca Asia Motors
                'fipe_code' => '007013-0',
                'model' => 'Towner Super Luxo',
                'years' => '1997 a 1999'
            ],
            [
                'id' => 42,
                'brand_id' => 5, // ID da marca Asia Motors
                'fipe_code' => '007007-6',
                'model' => 'Towner Truck',
                'years' => '1993 a 1998'
            ]
        ];

        $audiModel = [
            [
                [
                    'id' => 43,
                    'brand_id' => 6,
                    'fipe_code' => '008030-6',
                    'model' => '100 2.8 V6',
                    'years' => '1993 a 1995'
                ],
                [
                    'id' => 44,
                    'brand_id' => 6,
                    'fipe_code' => '008076-4',
                    'model' => '100 2.8 V6 Avant',
                    'years' => '1994 a 1995'
                ],
                [
                    'id' => 45,
                    'brand_id' => 6,
                    'fipe_code' => '008031-4',
                    'model' => '100 S-4 2.2 Avant Turbo',
                    'years' => '1994 a 1995'
                ],
                [
                    'id' => 46,
                    'brand_id' => 6,
                    'fipe_code' => '008001-2',
                    'model' => '80 2.0',
                    'years' => '1994 a 1995'
                ],
                [
                    'id' => 47,
                    'brand_id' => 6,
                    'fipe_code' => '008077-2',
                    'model' => '80 2.0 Avant',
                    'years' => '1994 a 1995'
                ],
                [
                    'id' => 48,
                    'brand_id' => 6,
                    'fipe_code' => '008080-2',
                    'model' => '80 2.6\/ 2.8',
                    'years' => '1994 a 1995'
                ],
                [
                    'id' => 49,
                    'brand_id' => 6,
                    'fipe_code' => '008002-0',
                    'model' => '80 2.6\/2.8 Avant',
                    'years' => '1994 a 1996'
                ],
                [
                    'id' => 50,
                    'brand_id' => 6,
                    'fipe_code' => '008003-9',
                    'model' => '80 2.8 Cabriolet',
                    'years' => '1994 a 1999'
                ],
                [
                    'id' => 51,
                    'brand_id' => 6,
                    'fipe_code' => '008004-7',
                    'model' => '80 S2 Avant',
                    'years' => '1994 a 1995'
                ],
                [
                    'id' => 5496,
                    'brand_id' => 6,
                    'fipe_code' => '008153-1',
                    'model' => 'A1 1.4 TFSI 122cv S-tronic 3p',
                    'years' => '2011 a 2014'
                ],
                [
                    'id' => 6293,
                    'brand_id' => 6,
                    'fipe_code' => '008177-9',
                    'model' => 'A1 2.0 TFSI Quattro 256cv 3p',
                    'years' => '2013 a 2013'
                ],
                [
                    'id' => 6143,
                    'brand_id' => 6,
                    'fipe_code' => '008172-8',
                    'model' => 'A1 Sport 1.4 TFSI 185cv 3p S-tronic',
                    'years' => '2012 a 2014'
                ],
                [
                    'id' => 7727,
                    'brand_id' => 6,
                    'fipe_code' => '008210-4',
                    'model' => 'A1 Sport. S Edition 1.4 TFSI 5p S-tronic',
                    'years' => '2016 a 2017'
                ],
                [
                    'id' => 6201,
                    'brand_id' => 6,
                    'fipe_code' => '008174-4',
                    'model' => 'A1 Sportback 1.4 TFSI 185cv 5p S-tronic',
                    'years' => '2013 a 2015'
                ],
                [
                    'id' => 6200,
                    'brand_id' => 6,
                    'fipe_code' => '008173-6',
                    'model' => 'A1 Sportback 1.4 TFSI 5p S-tronic',
                    'years' => '2013 a 2018'
                ],
                [
                    'id' => 7418,
                    'brand_id' => 6,
                    'fipe_code' => '008204-0',
                    'model' => 'A1 Sportback 1.8 TFSI 192cv 5p S-tronic',
                    'years' => '2016 a 2018'
                ],
                [
                    'id' => 52,
                    'brand_id' => 6,
                    'fipe_code' => '008032-2',
                    'model' => 'A3 1.6 3p',
                    'years' => '1999 a 2003'
                ],
                [
                    'id' => 53,
                    'brand_id' => 6,
                    'fipe_code' => '008056-0',
                    'model' => 'A3 1.6 3p Aut.',
                    'years' => '1999 a 2003'
                ],
                [
                    'id' => 54,
                    'brand_id' => 6,
                    'fipe_code' => '008040-3',
                    'model' => 'A3 1.6 5p',
                    'years' => '1999 a 2006'
                ],
                [
                    'id' => 55,
                    'brand_id' => 6,
                    'fipe_code' => '008057-8',
                    'model' => 'A3 1.6 5p Aut.',
                    'years' => '1999 a 2003'
                ],
                [
                    'id' => 4154,
                    'brand_id' => 6,
                    'fipe_code' => '008116-7',
                    'model' => 'A3 1.6 8V 102cv 3p',
                    'years' => '2007 a 2007'
                ],
                [
                    'id' => 56,
                    'brand_id' => 6,
                    'fipe_code' => '008005-5',
                    'model' => 'A3 1.8 3p',
                    'years' => '1997 a 2004'
                ],
                [
                    'id' => 57,
                    'brand_id' => 6,
                    'fipe_code' => '008043-8',
                    'model' => 'A3 1.8 3p Aut.',
                    'years' => '1997 a 2004'
                ],
                [
                    'id' => 58,
                    'brand_id' => 6,
                    'fipe_code' => '008042-0',
                    'model' => 'A3 1.8 5p Aut.',
                    'years' => '1997 a 2006'
                ],
                [
                    'id' => 59,
                    'brand_id' => 6,
                    'fipe_code' => '008041-1',
                    'model' => 'A3 1.8 5p Mec.',
                    'years' => '1997 a 2006'
                ],
                [
                    'id' => 60,
                    'brand_id' => 6,
                    'fipe_code' => '008073-0',
                    'model' => 'A3 1.8 Turbo 180cv 3p Aut.\/ Tip.',
                    'years' => '2002 a 2003'
                ],
                [
                    'id' => 61,
                    'brand_id' => 6,
                    'fipe_code' => '008074-8',
                    'model' => 'A3 1.8 Turbo 180cv 3p Mec.',
                    'years' => '2000 a 2004'
                ],
                [
                    'id' => 62,
                    'brand_id' => 6,
                    'fipe_code' => '008071-3',
                    'model' => 'A3 1.8 Turbo 180cv 5p Aut.\/ Tip.',
                    'years' => '2002 a 2006'
                ],
                [
                    'id' => 63,
                    'brand_id' => 6,
                    'fipe_code' => '008072-1',
                    'model' => 'A3 1.8 Turbo 180cv 5p Mec.',
                    'years' => '2000 a 2006'
                ],
                [
                    'id' => 64,
                    'brand_id' => 6,
                    'fipe_code' => '008046-2',
                    'model' => 'A3 1.8 Turbo 3p Aut.',
                    'years' => '1997 a 2003'
                ],
                [
                    'id' => 65,
                    'brand_id' => 6,
                    'fipe_code' => '008006-3',
                    'model' => 'A3 1.8 Turbo 3p Mec.',
                    'years' => '1997 a 2004'
                ],
                [
                    'id' => 66,
                    'brand_id' => 6,
                    'fipe_code' => '008045-4',
                    'model' => 'A3 1.8 Turbo 5p Aut.',
                    'years' => '1998 a 2006'
                ],
                [
                    'id' => 67,
                    'brand_id' => 6,
                    'fipe_code' => '008044-6',
                    'model' => 'A3 1.8 Turbo 5p Mec.',
                    'years' => '1999 a 2006'
                ],
                [
                    'id' => 6950,
                    'brand_id' => 6,
                    'fipe_code' => '008195-7',
                    'model' => 'A3 Cabriolet 1.8 16V TFSI 180cv S-tronic',
                    'years' => '2015 a 2016'
                ],
                [
                    'id' => 8227,
                    'brand_id' => 6,
                    'fipe_code' => '008223-6',
                    'model' => 'A3 Cabriolet Ambition 2.0 TFSI S-tronic',
                    'years' => '2017 a 2018'
                ],
                [
                    'id' => 8559,
                    'brand_id' => 6,
                    'fipe_code' => '008236-8',
                    'model' => 'A3 Cabriolet Perfor. 2.0 TFSI S-tronic',
                    'years' => '2019 a 2019'
                ],
                [
                    'id' => 7419,
                    'brand_id' => 6,
                    'fipe_code' => '008205-8',
                    'model' => 'A3 Sed. Ambition 2.0 TSFI 220cv S-tronic',
                    'years' => '2016 a 2018'
                ],
                [
                    'id' => 8945,
                    'brand_id' => 6,
                    'fipe_code' => '008255-4',
                    'model' => 'A3 Sed. P. Plus Tech 1.4 Flex TFSI Tip.',
                    'years' => '2020 a 2021'
                ],
                [
                    'id' => 8768,
                    'brand_id' => 6,
                    'fipe_code' => '008252-0',
                    'model' => 'A3 Sed. P.Plus 1.4 25Anos Flex TFSI Tip.',
                    'years' => '2019 a 2019'
                ],
                [
                    'id' => 6689,
                    'brand_id' => 6,
                    'fipe_code' => '008190-6',
                    'model' => 'A3 Sed.1.8\/1.8 Ambit.16V TB FSI S-tronic',
                    'years' => '2014 a 2016'
                ],
                [
                    'id' => 10195,
                    'brand_id' => 6,
                    'fipe_code' => '008256-2',
                    'model' => 'A3 Sed.Perf. Black 2.0 TFSI S-tr. (Hib.)',
                    'years' => '2020 a Zero Km'
                ],
                [
                    'id' => 7391,
                    'brand_id' => 6,
                    'fipe_code' => '008203-1',
                    'model' => 'A3 Sedan 1.4 TFSI Flex Tiptronic 4p',
                    'years' => '2016 a 2018'
                ],
                [
                    'id' => 6768,
                    'brand_id' => 6,
                    'fipe_code' => '008192-2',
                    'model' => 'A3 Sedan 1.4\/ Attra. 16V TB FSI S-tronic',
                    'years' => '2014 a 2016'
                ],
                [
                    'id' => 8560,
                    'brand_id' => 6,
                    'fipe_code' => '008237-6',
                    'model' => 'A3 Sedan Performance 2.0 TFSI S-tronic',
                    'years' => '2019 a 2020'
                ],
                [
                    'id' => 8561,
                    'brand_id' => 6,
                    'fipe_code' => '008234-1',
                    'model' => 'A3 Sedan Prestige 1.4 TFSI Flex Tip.',
                    'years' => '2019 a 2021'
                ],
                [
                    'id' => 8562,
                    'brand_id' => 6,
                    'fipe_code' => '008235-0',
                    'model' => 'A3 Sedan Prestige Plus 1.4 TFSI Flex Tip',
                    'years' => '2019 a 2021'
                ],
                [
                    'id' => 9963,
                    'brand_id' => 6,
                    'fipe_code' => '008279-1',
                    'model' => 'A3 Sedan S-Line 2.0 TFSI  S-Tron.(Híb.)',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 9655,
                    'brand_id' => 6,
                    'fipe_code' => '008277-5',
                    'model' => 'A3 Sedan S-Line Limited 1.4 TFSI Tiptro.',
                    'years' => '2022 a 2022'
                ],
                [
                    'id' => 6461,
                    'brand_id' => 6,
                    'fipe_code' => '008181-7',
                    'model' => 'A3 Sport 1.8 16V TFSI S-tronic 3p',
                    'years' => '2013 a 2014'
                ],
                [
                    'id' => 5125,
                    'brand_id' => 6,
                    'fipe_code' => '008138-8',
                    'model' => 'A3 Sport 2.0 16V TFSI S- tronic',
                    'years' => '2010 a 2013'
                ],
                [
                    'id' => 9964,
                    'brand_id' => 6,
                    'fipe_code' => '008275-9',
                    'model' => 'A3 Sportb. Perf. Black 2.0 S-tron.(Híb.)',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 8563,
                    'brand_id' => 6,
                    'fipe_code' => '008233-3',
                    'model' => 'A3 Sportb. Prestige Plus 1.4 TFSI S-tron',
                    'years' => '2019 a 2020'
                ],
                [
                    'id' => 9965,
                    'brand_id' => 6,
                    'fipe_code' => '008278-3',
                    'model' => 'A3 Sportb. S-Line 2.0 TFSI S-Tron.(Híb.)',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 9657,
                    'brand_id' => 6,
                    'fipe_code' => '008276-7',
                    'model' => 'A3 Sportb. S-Line Limited 1.4 TFSI Tip.',
                    'years' => '2022 a 2022'
                ],
                [
                    'id' => 6510,
                    'brand_id' => 6,
                    'fipe_code' => '008184-1',
                    'model' => 'A3 Sportback 1.4 TFSI S-tronic',
                    'years' => '2014 a 2018'
                ],
                [
                    'id' => 4155,
                    'brand_id' => 6,
                    'fipe_code' => '008117-5',
                    'model' => 'A3 Sportback 1.6 8V 102cv 5p',
                    'years' => '2007 a 2010'
                ],
                [
                    'id' => 6511,
                    'brand_id' => 6,
                    'fipe_code' => '008185-0',
                    'model' => 'A3 Sportback 1.8 16V TFSI S-tronic 5p',
                    'years' => '2014 a 2016'
                ],
                [
                    'id' => 4156,
                    'brand_id' => 6,
                    'fipe_code' => '008118-3',
                    'model' => 'A3 Sportback 2.0 16V TFSI Mec.',
                    'years' => '2007 a 2011'
                ],
                [
                    'id' => 4157,
                    'brand_id' => 6,
                    'fipe_code' => '008119-1',
                    'model' => 'A3 Sportback 2.0 16V TFSI S-tronic',
                    'years' => '2007 a 2013'
                ],
                [
                    'id' => 68,
                    'brand_id' => 6,
                    'fipe_code' => '008047-0',
                    'model' => 'A4 1.8  Aut.',
                    'years' => '1995 a 2001'
                ],
                [
                    'id' => 69,
                    'brand_id' => 6,
                    'fipe_code' => '008007-1',
                    'model' => 'A4 1.8  Mec.',
                    'years' => '1995 a 2001'
                ],
                [
                    'id' => 70,
                    'brand_id' => 6,
                    'fipe_code' => '008048-9',
                    'model' => 'A4 1.8 Avant Aut.',
                    'years' => '1996 a 2001'
                ],
                [
                    'id' => 71,
                    'brand_id' => 6,
                    'fipe_code' => '008009-8',
                    'model' => 'A4 1.8 Avant Mec.',
                    'years' => '1996 a 2001'
                ],
                [
                    'id' => 72,
                    'brand_id' => 6,
                    'fipe_code' => '008010-1',
                    'model' => 'A4 1.8 Avant Turbo Mec.',
                    'years' => '1996 a 2001'
                ],
                [
                    'id' => 73,
                    'brand_id' => 6,
                    'fipe_code' => '008049-7',
                    'model' => 'A4 1.8 Avant Turbo Tip.\/ Multitronic',
                    'years' => '1996 a 2016'
                ],
                [
                    'id' => 74,
                    'brand_id' => 6,
                    'fipe_code' => '008008-0',
                    'model' => 'A4 1.8 Tip.\/ Multitronic Turbo',
                    'years' => '1995 a 2016'
                ],
                [
                    'id' => 75,
                    'brand_id' => 6,
                    'fipe_code' => '008070-5',
                    'model' => 'A4 1.8 Turbo',
                    'years' => '1995 a 2001'
                ],
                [
                    'id' => 4843,
                    'brand_id' => 6,
                    'fipe_code' => '008132-9',
                    'model' => 'A4 2.0 16V TFSI 183\/180cv Multitronic',
                    'years' => '2009 a 2014'
                ],
                [
                    'id' => 4182,
                    'brand_id' => 6,
                    'fipe_code' => '008120-5',
                    'model' => 'A4 2.0 16V TFSI 200\/ 214cv Multitronic',
                    'years' => '2007 a 2011'
                ],
                [
                    'id' => 6144,
                    'brand_id' => 6,
                    'fipe_code' => '008170-1',
                    'model' => 'A4 2.0 16V TFSI Quattro Stronic',
                    'years' => '2013 a 2014'
                ],
                [
                    'id' => 76,
                    'brand_id' => 6,
                    'fipe_code' => '008101-9',
                    'model' => 'A4 2.0 20V 130cv Multitronic 4p',
                    'years' => '2002 a 2003'
                ],
                [
                    'id' => 6145,
                    'brand_id' => 6,
                    'fipe_code' => '008171-0',
                    'model' => 'A4 2.0 Avant 16V TFSI Quattro Stronic',
                    'years' => '2013 a 2014'
                ],
                [
                    'id' => 7750,
                    'brand_id' => 6,
                    'fipe_code' => '008211-2',
                    'model' => 'A4 2.0 Avant Ambie. 2.0 16V TFSi S tron.',
                    'years' => '2017 a 2018'
                ],
                [
                    'id' => 4844,
                    'brand_id' => 6,
                    'fipe_code' => '008133-7',
                    'model' => 'A4 2.0 Avant TFSI 183\/180cv Multitroni',
                    'years' => '2009 a 2014'
                ],
                [
                    'id' => 4183,
                    'brand_id' => 6,
                    'fipe_code' => '008121-3',
                    'model' => 'A4 2.0 Avant TFSI 200\/214cv Multitron.',
                    'years' => '2007 a 2011'
                ],
                [
                    'id' => 77,
                    'brand_id' => 6,
                    'fipe_code' => '008020-9',
                    'model' => 'A4 2.4 30V Avant Mec.',
                    'years' => '1998 a 2001'
                ],
                [
                    'id' => 78,
                    'brand_id' => 6,
                    'fipe_code' => '008021-7',
                    'model' => 'A4 2.4 30V Avant Tip.\/Multitronic',
                    'years' => '1998 a 2003'
                ],
                [
                    'id' => 79,
                    'brand_id' => 6,
                    'fipe_code' => '008018-7',
                    'model' => 'A4 2.4 30V Mec.',
                    'years' => '1998 a 2001'
                ],
                [
                    'id' => 80,
                    'brand_id' => 6,
                    'fipe_code' => '008019-5',
                    'model' => 'A4 2.4 30V Tip.\/Multitronic',
                    'years' => '1998 a 2004'
                ],
                [
                    'id' => 81,
                    'brand_id' => 6,
                    'fipe_code' => '008081-0',
                    'model' => 'A4 2.4 Avant V6 30V Quattro Mec.',
                    'years' => '2001 a 2001'
                ],
                [
                    'id' => 82,
                    'brand_id' => 6,
                    'fipe_code' => '008082-9',
                    'model' => 'A4 2.4 Avant V6 30V Quattro Tiptronic',
                    'years' => '2001 a 2001'
                ],
                [
                    'id' => 83,
                    'brand_id' => 6,
                    'fipe_code' => '008083-7',
                    'model' => 'A4 2.4 V6 30V Quattro Mec.',
                    'years' => '2001 a 2001'
                ],
                [
                    'id' => 84,
                    'brand_id' => 6,
                    'fipe_code' => '008084-5',
                    'model' => 'A4 2.4 V6 30V Quattro Tiptronic',
                    'years' => '2001 a 2001'
                ],
                [
                    'id' => 85,
                    'brand_id' => 6,
                    'fipe_code' => '008011-0',
                    'model' => 'A4 2.8',
                    'years' => '1995 a 1997'
                ],
                [
                    'id' => 86,
                    'brand_id' => 6,
                    'fipe_code' => '008023-3',
                    'model' => 'A4 2.8 30V  Tiptronic\/ Aut.',
                    'years' => '1997 a 2001'
                ],
                [
                    'id' => 87,
                    'brand_id' => 6,
                    'fipe_code' => '008022-5',
                    'model' => 'A4 2.8 30V Mec.',
                    'years' => '1997 a 2001'
                ],
                [
                    'id' => 88,
                    'brand_id' => 6,
                    'fipe_code' => '008036-5',
                    'model' => 'A4 2.8 Avant V6 12V',
                    'years' => '1995 a 1997'
                ],
                [
                    'id' => 89,
                    'brand_id' => 6,
                    'fipe_code' => '008037-3',
                    'model' => 'A4 2.8 Avant V6 30V Mec.',
                    'years' => '1997 a 2001'
                ],
                [
                    'id' => 90,
                    'brand_id' => 6,
                    'fipe_code' => '008087-0',
                    'model' => 'A4 2.8 Avant V6 30V Quattro Mec.',
                    'years' => '2001 a 2001'
                ],
                [
                    'id' => 91,
                    'brand_id' => 6,
                    'fipe_code' => '008088-8',
                    'model' => 'A4 2.8 Avant V6 30V Quattro Tiptronic',
                    'years' => '2001 a 2001'
                ],
                [
                    'id' => 92,
                    'brand_id' => 6,
                    'fipe_code' => '008055-1',
                    'model' => 'A4 2.8 Avant V6 30V Tiptronic',
                    'years' => '1997 a 2001'
                ],
                [
                    'id' => 93,
                    'brand_id' => 6,
                    'fipe_code' => '008085-3',
                    'model' => 'A4 2.8 V6 30V  Quattro Tiptronic',
                    'years' => '2001 a 2001'
                ],
                [
                    'id' => 94,
                    'brand_id' => 6,
                    'fipe_code' => '008086-1',
                    'model' => 'A4 2.8 V6 30V Quattro Mec.',
                    'years' => '2001 a 2001'
                ],
                [
                    'id' => 95,
                    'brand_id' => 6,
                    'fipe_code' => '008102-7',
                    'model' => 'A4 3.0 30V 218cv Multitronic 4p',
                    'years' => '2002 a 2006'
                ],
                [
                    'id' => 96,
                    'brand_id' => 6,
                    'fipe_code' => '008109-4',
                    'model' => 'A4 3.0 30V 218cv Quattro Tiptron.\/Aut 4p',
                    'years' => '2003 a 2003'
                ],
                [
                    'id' => 97,
                    'brand_id' => 6,
                    'fipe_code' => '008107-8',
                    'model' => 'A4 3.0 Avant 30V 218cv Multitronic 5p',
                    'years' => '2002 a 2006'
                ],
                [
                    'id' => 98,
                    'brand_id' => 6,
                    'fipe_code' => '008110-8',
                    'model' => 'A4 3.0 Avant 30V 218cv Quattro Tiptronic',
                    'years' => '2003 a 2003'
                ],
                [
                    'id' => 99,
                    'brand_id' => 6,
                    'fipe_code' => '008108-6',
                    'model' => 'A4 3.0 Cabriolet 30V 218cv Multitronic',
                    'years' => '2003 a 2004'
                ],
                [
                    'id' => 4286,
                    'brand_id' => 6,
                    'fipe_code' => '008123-0',
                    'model' => 'A4 3.2 FSI 24V 255cv Multitronic',
                    'years' => '2007 a 2008'
                ],
                [
                    'id' => 4731,
                    'brand_id' => 6,
                    'fipe_code' => '008130-2',
                    'model' => 'A4 3.2 FSI 24V 269cv Quattro Tiptronic',
                    'years' => '2009 a 2012'
                ],
                [
                    'id' => 4287,
                    'brand_id' => 6,
                    'fipe_code' => '008124-8',
                    'model' => 'A4 3.2 FSI Avant 24V 255cv Multitronic',
                    'years' => '2007 a 2008'
                ],
                [
                    'id' => 4935,
                    'brand_id' => 6,
                    'fipe_code' => '008135-3',
                    'model' => 'A4 3.2 FSI Avant 24V Quattro S Tronic',
                    'years' => '2009 a 2012'
                ],
                [
                    'id' => 4288,
                    'brand_id' => 6,
                    'fipe_code' => '008125-6',
                    'model' => 'A4 3.2 FSI Cabriolet 24V 255cv Multitron',
                    'years' => '2007 a 2007'
                ],
                [
                    'id' => 7717,
                    'brand_id' => 6,
                    'fipe_code' => '008209-0',
                    'model' => 'A4 Ambiente 2.0 TFSI 190cv S tronic',
                    'years' => '2016 a 2018'
                ],
                [
                    'id' => 7894,
                    'brand_id' => 6,
                    'fipe_code' => '008212-0',
                    'model' => 'A4 Ambition 2.0 TFSI Quattro S tronic',
                    'years' => '2017 a 2018'
                ],
                [
                    'id' => 7656,
                    'brand_id' => 6,
                    'fipe_code' => '008208-2',
                    'model' => 'A4 Attraction 2.0 TFSI 190cv S tronic',
                    'years' => '2016 a 2018'
                ],
                [
                    'id' => 8228,
                    'brand_id' => 6,
                    'fipe_code' => '008226-0',
                    'model' => 'A4 Avant Lim. Ed. 2.0 TFSI S tronic',
                    'years' => '2018 a 2018'
                ],
                [
                    'id' => 8769,
                    'brand_id' => 6,
                    'fipe_code' => '008246-5',
                    'model' => 'A4 Avant Prest. Plus 2.0 TFSI S-tronic',
                    'years' => '2019 a 2019'
                ],
                [
                    'id' => 7537,
                    'brand_id' => 6,
                    'fipe_code' => '008207-4',
                    'model' => 'A4 Launch Edition 2.0 TFSI 190cv S troni',
                    'years' => '2016 a 2017'
                ],
                [
                    'id' => 8229,
                    'brand_id' => 6,
                    'fipe_code' => '008222-8',
                    'model' => 'A4 Limited Edition 2.0 TFSI S tronic',
                    'years' => '2018 a 2018'
                ],
                [
                    'id' => 9223,
                    'brand_id' => 6,
                    'fipe_code' => '008264-3',
                    'model' => 'A4 Perfor. Black 2.0 TFSI Quat. S tronic',
                    'years' => '2021 a 2022'
                ],
                [
                    'id' => 11036,
                    'brand_id' => 6,
                    'fipe_code' => '008302-0',
                    'model' => 'A4 Prestige 2.0 16V TFSI Quattro (Híb.)',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 9894,
                    'brand_id' => 6,
                    'fipe_code' => '008247-3',
                    'model' => 'A4 Prestige 2.0 TFSI S-tronic',
                    'years' => '2019 a Zero Km'
                ],
                [
                    'id' => 8771,
                    'brand_id' => 6,
                    'fipe_code' => '008245-7',
                    'model' => 'A4 Prestige Plus 2.0 TFSI 190cv S tronic',
                    'years' => '2019 a 2022'
                ],
                [
                    'id' => 9824,
                    'brand_id' => 6,
                    'fipe_code' => '008281-3',
                    'model' => 'A4 S Line 2.0  TFSI 204cv S Tonic',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 11037,
                    'brand_id' => 6,
                    'fipe_code' => '008303-8',
                    'model' => 'A4 S Line 2.0 16V TFSI Quattro (Híb.)',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 4798,
                    'brand_id' => 6,
                    'fipe_code' => '008131-0',
                    'model' => 'A5 3.2 FSI 24V 269cv Multitronic',
                    'years' => '2009 a 2009'
                ],
                [
                    'id' => 5126,
                    'brand_id' => 6,
                    'fipe_code' => '008139-6',
                    'model' => 'A5 3.2 FSI V6 24V 269cv Quattro Tiptroni',
                    'years' => '2010 a 2011'
                ],
                [
                    'id' => 7999,
                    'brand_id' => 6,
                    'fipe_code' => '008215-5',
                    'model' => 'A5 Ambiente Sportb. 2.0 TFSI S tonic',
                    'years' => '2018 a 2018'
                ],
                [
                    'id' => 8000,
                    'brand_id' => 6,
                    'fipe_code' => '008216-3',
                    'model' => 'A5 Ambit. Plus Sport. 2.0 TFSI S tronic',
                    'years' => '2018 a 2018'
                ],
                [
                    'id' => 8001,
                    'brand_id' => 6,
                    'fipe_code' => '008217-1',
                    'model' => 'A5 Ambit. Sport. 2.0 TFSI S tronic',
                    'years' => '2018 a 2018'
                ],
                [
                    'id' => 8002,
                    'brand_id' => 6,
                    'fipe_code' => '008214-7',
                    'model' => 'A5 Attraction Sportb. 2.0 TFSI S tronic',
                    'years' => '2018 a 2018'
                ],
                [
                    'id' => 6082,
                    'brand_id' => 6,
                    'fipe_code' => '008165-5',
                    'model' => 'A5 Cabriolet 2.0 TFSI Quattro Stronic',
                    'years' => '2012 a 2016'
                ],
                [
                    'id' => 6083,
                    'brand_id' => 6,
                    'fipe_code' => '008164-7',
                    'model' => 'A5 Coupê 2.0 TFSI Quattro Stronic',
                    'years' => '2012 a 2016'
                ],
                [
                    'id' => 6084,
                    'brand_id' => 6,
                    'fipe_code' => '008169-8',
                    'model' => 'A5 Sportb. 2.0 16V TFSI Quat. S-tronic',
                    'years' => '2012 a 2016'
                ],
                [
                    'id' => 11038,
                    'brand_id' => 6,
                    'fipe_code' => '008300-3',
                    'model' => 'A5 Sportb. Advanc. 2.0 TFSI Quatt. (Híb)',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 10652,
                    'brand_id' => 6,
                    'fipe_code' => '008292-9',
                    'model' => 'A5 Sportb. Carbon Ed. 2.0 TFSI S-tronic',
                    'years' => '2023 a Zero Km'
                ],
                [
                    'id' => 8564,
                    'brand_id' => 6,
                    'fipe_code' => '008230-9',
                    'model' => 'A5 Sportb. Perf. 2.0 TFSI Quat. S-tronic',
                    'years' => '2019 a 2019'
                ],
                [
                    'id' => 8565,
                    'brand_id' => 6,
                    'fipe_code' => '008232-5',
                    'model' => 'A5 Sportb. Prestige 2.0 16V TFSI S-troni',
                    'years' => '2019 a 2019'
                ],
                [
                    'id' => 11039,
                    'brand_id' => 6,
                    'fipe_code' => '008301-1',
                    'model' => 'A5 Sportb. S Line 2.0 TFSI Quatt. (Híb.)',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 8566,
                    'brand_id' => 6,
                    'fipe_code' => '008229-5',
                    'model' => 'A5 Sportb.Perf.B. 2.0 TFSI Quat. S-troni',
                    'years' => '2019 a 2022'
                ],
                [
                    'id' => 8567,
                    'brand_id' => 6,
                    'fipe_code' => '008231-7',
                    'model' => 'A5 Sportb.Prestige Plus 2.0 TFSI S-tronc',
                    'years' => '2019 a 2022'
                ],
                [
                    'id' => 7022,
                    'brand_id' => 6,
                    'fipe_code' => '008197-3',
                    'model' => 'A5 Sportback 1.8 TFSI 170cv Multi.',
                    'years' => '2015 a 2017'
                ],
                [
                    'id' => 6043,
                    'brand_id' => 6,
                    'fipe_code' => '008161-2',
                    'model' => 'A5 Sportback 2.0 16V TFSI 180cv Multi.',
                    'years' => '2012 a 2014'
                ],
                [
                    'id' => 5234,
                    'brand_id' => 6,
                    'fipe_code' => '008145-0',
                    'model' => 'A5 Sportback 2.0 16V TFSI 211cv Multi.',
                    'years' => '2010 a 2011'
                ],
                [
                    'id' => 8772,
                    'brand_id' => 6,
                    'fipe_code' => '008249-0',
                    'model' => 'A5 Sportback S-Line 2.0 TFSI S-tronic',
                    'years' => '2019 a Zero Km'
                ],
                [
                    'id' => 7254,
                    'brand_id' => 6,
                    'fipe_code' => '008200-7',
                    'model' => 'A6 2.0 TFSI 252cv S tronic 4p',
                    'years' => '2015 a 2018'
                ],
                [
                    'id' => 100,
                    'brand_id' => 6,
                    'fipe_code' => '008024-1',
                    'model' => 'A6 2.4 30V Mec',
                    'years' => '1998 a 2001'
                ],
                [
                    'id' => 101,
                    'brand_id' => 6,
                    'fipe_code' => '008025-0',
                    'model' => 'A6 2.4 30V Tip.\/Multitronic',
                    'years' => '1998 a 2003'
                ],
                [
                    'id' => 102,
                    'brand_id' => 6,
                    'fipe_code' => '008051-9',
                    'model' => 'A6 2.4 Avant 30V Mec.',
                    'years' => '1999 a 2001'
                ],
                [
                    'id' => 103,
                    'brand_id' => 6,
                    'fipe_code' => '008052-7',
                    'model' => 'A6 2.4 Avant 30V Tip.\/ Multitronic',
                    'years' => '1999 a 2003'
                ],
                [
                    'id' => 104,
                    'brand_id' => 6,
                    'fipe_code' => '008091-8',
                    'model' => 'A6 2.4 Avant V6 30V Quattro Mec.',
                    'years' => '2001 a 2001'
                ],
                [
                    'id' => 105,
                    'brand_id' => 6,
                    'fipe_code' => '008092-6',
                    'model' => 'A6 2.4 Avant V6 30V Quattro Tiptronic',
                    'years' => '2001 a 2001'
                ],
                [
                    'id' => 106,
                    'brand_id' => 6,
                    'fipe_code' => '008089-6',
                    'model' => 'A6 2.4 V6 30V Quattro Mec',
                    'years' => '2001 a 2001'
                ],
                [
                    'id' => 107,
                    'brand_id' => 6,
                    'fipe_code' => '008090-0',
                    'model' => 'A6 2.4 V6 30V Quattro Tiptronic',
                    'years' => '2001 a 2001'
                ],
                [
                    'id' => 108,
                    'brand_id' => 6,
                    'fipe_code' => '008059-4',
                    'model' => 'A6 2.7 30V Avant Tiptronic',
                    'years' => '2000 a 2001'
                ],
                [
                    'id' => 109,
                    'brand_id' => 6,
                    'fipe_code' => '008058-6',
                    'model' => 'A6 2.7 30V Mec.',
                    'years' => '2000 a 2000'
                ],
                [
                    'id' => 110,
                    'brand_id' => 6,
                    'fipe_code' => '008068-3',
                    'model' => 'A6 2.7 Avant Quattro Tiptronic',
                    'years' => '2001 a 2002'
                ],
                [
                    'id' => 111,
                    'brand_id' => 6,
                    'fipe_code' => '008067-5',
                    'model' => 'A6 2.7 Quattro Tiptronic',
                    'years' => '2000 a 2004'
                ],
                [
                    'id' => 112,
                    'brand_id' => 6,
                    'fipe_code' => '008012-8',
                    'model' => 'A6 2.8',
                    'years' => '1995 a 1997'
                ],
                [
                    'id' => 113,
                    'brand_id' => 6,
                    'fipe_code' => '008026-8',
                    'model' => 'A6 2.8 30V Mec.',
                    'years' => '1997 a 2001'
                ],
                [
                    'id' => 114,
                    'brand_id' => 6,
                    'fipe_code' => '008027-6',
                    'model' => 'A6 2.8 30V Tiptronic',
                    'years' => '1997 a 2001'
                ],
                [
                    'id' => 115,
                    'brand_id' => 6,
                    'fipe_code' => '008013-6',
                    'model' => 'A6 2.8 Avant',
                    'years' => '1995 a 1997'
                ],
                [
                    'id' => 116,
                    'brand_id' => 6,
                    'fipe_code' => '008053-5',
                    'model' => 'A6 2.8 Avant 30V Mec.',
                    'years' => '1997 a 2001'
                ],
                [
                    'id' => 117,
                    'brand_id' => 6,
                    'fipe_code' => '008054-3',
                    'model' => 'A6 2.8 Avant 30V Tiptronic',
                    'years' => '1998 a 2001'
                ],
                [
                    'id' => 118,
                    'brand_id' => 6,
                    'fipe_code' => '008095-0',
                    'model' => 'A6 2.8 Avant V6 30V Quattro Mec.',
                    'years' => '2001 a 2001'
                ],
                [
                    'id' => 119,
                    'brand_id' => 6,
                    'fipe_code' => '008096-9',
                    'model' => 'A6 2.8 Avant V6 30V Quattro Tiptronic',
                    'years' => '2001 a 2001'
                ],
                [
                    'id' => 120,
                    'brand_id' => 6,
                    'fipe_code' => '008093-4',
                    'model' => 'A6 2.8 V6 30V Quattro Mec.',
                    'years' => '2001 a 2001'
                ],
                [
                    'id' => 121,
                    'brand_id' => 6,
                    'fipe_code' => '008094-2',
                    'model' => 'A6 2.8 V6 30V Quattro Tiptronic',
                    'years' => '2001 a 2001'
                ],
                [
                    'id' => 122,
                    'brand_id' => 6,
                    'fipe_code' => '008105-1',
                    'model' => 'A6 3.0 Avant V6 30V 218cv Multitronic 5p',
                    'years' => '2002 a 2007'
                ],
                [
                    'id' => 5374,
                    'brand_id' => 6,
                    'fipe_code' => '008150-7',
                    'model' => 'A6 3.0 Avant. TB FSI V6 Quattro Tip. 5p',
                    'years' => '2009 a 2012'
                ],
                [
                    'id' => 6413,
                    'brand_id' => 6,
                    'fipe_code' => '008179-5',
                    'model' => 'A6 3.0 Avant.TFSI V6 Quattro S tronic 5p',
                    'years' => '2013 a 2014'
                ],
                [
                    'id' => 4958,
                    'brand_id' => 6,
                    'fipe_code' => '008136-1',
                    'model' => 'A6 3.0 TB FSI V6 Quattro Tiptronic',
                    'years' => '2009 a 2012'
                ],
                [
                    'id' => 6414,
                    'brand_id' => 6,
                    'fipe_code' => '008178-7',
                    'model' => 'A6 3.0 TFSI V6 Quattro S tronic 4p',
                    'years' => '2013 a 2018'
                ],
                [
                    'id' => 123,
                    'brand_id' => 6,
                    'fipe_code' => '008103-5',
                    'model' => 'A6 3.0 V6 30V 218cv Multitronic 4p',
                    'years' => '2002 a 2006'
                ],
                [
                    'id' => 4526,
                    'brand_id' => 6,
                    'fipe_code' => '008128-0',
                    'model' => 'A6 3.2 FSI 24V 255cv Multitronic',
                    'years' => '2007 a 2008'
                ],
                [
                    'id' => 124,
                    'brand_id' => 6,
                    'fipe_code' => '008061-6',
                    'model' => 'A6 4.2 Avant Quattro Tiptronic',
                    'years' => '2000 a 2006'
                ],
                [
                    'id' => 125,
                    'brand_id' => 6,
                    'fipe_code' => '008060-8',
                    'model' => 'A6 4.2 Quattro Tiptronic',
                    'years' => '2000 a 2008'
                ],
                [
                    'id' => 6462,
                    'brand_id' => 6,
                    'fipe_code' => '008180-9',
                    'model' => 'A6 Allroad 3.0 TFSI V6 Quattro S tronic',
                    'years' => '2013 a 2017'
                ],
                [
                    'id' => 9298,
                    'brand_id' => 6,
                    'fipe_code' => '008266-0',
                    'model' => 'A6 Perf. Black 3.0 TFSI Quattro S-tronic',
                    'years' => '2021 a 2022'
                ],
                [
                    'id' => 8814,
                    'brand_id' => 6,
                    'fipe_code' => '008253-8',
                    'model' => 'A6 Performance 3.0 TFSI Quattro S.tronic',
                    'years' => '2020 a 2020'
                ],
                [
                    'id' => 9451,
                    'brand_id' => 6,
                    'fipe_code' => '008269-4',
                    'model' => 'A6 Prestige Plus 2.0 TFSI Quattro S-tro.',
                    'years' => '2021 a 2022'
                ],
                [
                    'id' => 9319,
                    'brand_id' => 6,
                    'fipe_code' => '008268-6',
                    'model' => 'A7 SP.b. Perf. Bla. 3.0 TFSI Quat. S-tro',
                    'years' => '2021 a 2022'
                ],
                [
                    'id' => 7447,
                    'brand_id' => 6,
                    'fipe_code' => '008206-6',
                    'model' => 'A7 Sportback 2.0 TFSI S Tronic',
                    'years' => '2015 a 2016'
                ],
                [
                    'id' => 5549,
                    'brand_id' => 6,
                    'fipe_code' => '008154-0',
                    'model' => 'A7 Sportback 3.0 TFSI Quattro S Tronic',
                    'years' => '2011 a 2018'
                ],
                [
                    'id' => 8815,
                    'brand_id' => 6,
                    'fipe_code' => '008254-6',
                    'model' => 'A7 Sportback Perf. 3.0 TFSI S-tron Quat.',
                    'years' => '2020 a 2020'
                ],
                [
                    'id' => 7127,
                    'brand_id' => 6,
                    'fipe_code' => '008199-0',
                    'model' => 'A8 3.0 TFSI 310cv Quattro Tiptronic 4p',
                    'years' => '2015 a 2016'
                ],
                [
                    'id' => 6631,
                    'brand_id' => 6,
                    'fipe_code' => '008187-6',
                    'model' => 'A8 4.0 TFSI Quattro Tiptronic',
                    'years' => '2013 a 2017'
                ],
                [
                    'id' => 126,
                    'brand_id' => 6,
                    'fipe_code' => '008062-4',
                    'model' => 'A8 4.2 Quattro Tiptronic',
                    'years' => '2000 a 2013'
                ],
                [
                    'id' => 127,
                    'brand_id' => 6,
                    'fipe_code' => '008014-4',
                    'model' => 'A8 4.2 V8 32V Tiptronic',
                    'years' => '1994 a 2000'
                ],
                [
                    'id' => 3928,
                    'brand_id' => 6,
                    'fipe_code' => '008115-9',
                    'model' => 'A8 6.0 W12 48V 450cv Quattro Tiptronic',
                    'years' => '2006 a 2006'
                ],
                [
                    'id' => 5717,
                    'brand_id' => 6,
                    'fipe_code' => '008156-6',
                    'model' => 'A8 6.3 W12 48V Quattro Tiptronic',
                    'years' => '2012 a 2017'
                ],
                [
                    'id' => 128,
                    'brand_id' => 6,
                    'fipe_code' => '008079-9',
                    'model' => 'Allroad 2.7 30V Quattro Turbo Tiptronic',
                    'years' => '2001 a 2005'
                ],
                [
                    'id' => 129,
                    'brand_id' => 6,
                    'fipe_code' => '008015-2',
                    'model' => 'Avant RS2',
                    'years' => '1995 a 1995'
                ],
                [
                    'id' => 10814,
                    'brand_id' => 6,
                    'fipe_code' => '008295-3',
                    'model' => 'E-TRON GT Aut. (Elétrico)',
                    'years' => '2023 a Zero Km'
                ],
                [
                    'id' => 9077,
                    'brand_id' => 6,
                    'fipe_code' => '008258-9',
                    'model' => 'E-TRON Performa. Black Aut. (Elétrico)',
                    'years' => '2020 a Zero Km'
                ],
                [
                    'id' => 9078,
                    'brand_id' => 6,
                    'fipe_code' => '008257-0',
                    'model' => 'E-TRON Performace Aut. (Elétrico)',
                    'years' => '2020 a Zero Km'
                ],
                [
                    'id' => 9605,
                    'brand_id' => 6,
                    'fipe_code' => '008273-2',
                    'model' => 'E-TRON S Sportback Quat. Aut. (Elétrico)',
                    'years' => '2022 a 2023'
                ],
                [
                    'id' => 9186,
                    'brand_id' => 6,
                    'fipe_code' => '008260-0',
                    'model' => 'E-TRON Sportb. Perf.Black Aut.(Elétrico)',
                    'years' => '2020 a Zero Km'
                ],
                [
                    'id' => 9187,
                    'brand_id' => 6,
                    'fipe_code' => '008259-7',
                    'model' => 'E-TRON Sportback Perf. Aut. (Elétrico)',
                    'years' => '2020 a Zero Km'
                ],
                [
                    'id' => 7255,
                    'brand_id' => 6,
                    'fipe_code' => '008201-5',
                    'model' => 'Q3 1.4 TFSI\/TFSI Flex S-tronic 5p',
                    'years' => '2016 a 2019'
                ],
                [
                    'id' => 10888,
                    'brand_id' => 6,
                    'fipe_code' => '008298-8',
                    'model' => 'Q3 2.0 TFSI Anniversary Edition Quattro',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 6044,
                    'brand_id' => 6,
                    'fipe_code' => '008159-0',
                    'model' => 'Q3 2.0 TFSI Quat. 170\/180cv S-tronic 5p',
                    'years' => '2013 a 2018'
                ],
                [
                    'id' => 6045,
                    'brand_id' => 6,
                    'fipe_code' => '008160-4',
                    'model' => 'Q3 2.0 TFSI Quat. 211\/220cv S-tronic 5p',
                    'years' => '2013 a 2018'
                ],
                [
                    'id' => 8230,
                    'brand_id' => 6,
                    'fipe_code' => '008225-2',
                    'model' => 'Q3 Black Ed. 1.4 TFSI Flex\/Black S-tron.',
                    'years' => '2018 a 2022'
                ],
                [
                    'id' => 9304,
                    'brand_id' => 6,
                    'fipe_code' => '008267-8',
                    'model' => 'Q3 Black S Line 1.4 TFSI S-tronic',
                    'years' => '2021 a 2021'
                ],
                [
                    'id' => 8569,
                    'brand_id' => 6,
                    'fipe_code' => '008228-7',
                    'model' => 'Q3 P. Plus 1.4 TFSI Flex\/P.Plus S-tronic',
                    'years' => '2019 a 2022'
                ],
                [
                    'id' => 9796,
                    'brand_id' => 6,
                    'fipe_code' => '008280-5',
                    'model' => 'Q3 Perf. Black 2.0 TFSI Tiptr. Quattro',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 11135,
                    'brand_id' => 6,
                    'fipe_code' => '008304-6',
                    'model' => 'Q3 Perf. Black.Plus 2.0 TFSI Tip. Quat.',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 9871,
                    'brand_id' => 6,
                    'fipe_code' => '008284-8',
                    'model' => 'Q3 Performance 2.0 TFSI Tiptr. Quattro',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 8568,
                    'brand_id' => 6,
                    'fipe_code' => '008227-9',
                    'model' => 'Q3 Prest. 1.4 TFSI Flex\/Prest. S-tronic',
                    'years' => '2019 a 2022'
                ],
                [
                    'id' => 10111,
                    'brand_id' => 6,
                    'fipe_code' => '008289-9',
                    'model' => 'Q3 Prestige 2.0 TFSI Tiptr.Quatro ',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 9835,
                    'brand_id' => 6,
                    'fipe_code' => '008283-0',
                    'model' => 'Q3 SPB Perf. Black 2.0 TFSI Tipt. Quat.',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 11136,
                    'brand_id' => 6,
                    'fipe_code' => '008305-4',
                    'model' => 'Q3 SPB Perf.Black Plus 2.0 TFSI Tip.Quat',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 9836,
                    'brand_id' => 6,
                    'fipe_code' => '008282-1',
                    'model' => 'Q3 SPB Performance 2.0 TFSI Tipt. Quatt.',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 10889,
                    'brand_id' => 6,
                    'fipe_code' => '008299-6',
                    'model' => 'Q3 Sportb. 2.0 TFSI Anniv. Edit. Quattro',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 6573,
                    'brand_id' => 6,
                    'fipe_code' => '008186-8',
                    'model' => 'Q5 2.0 16V TFSI 225cv Quattro Tiptronic',
                    'years' => '2013 a 2017'
                ],
                [
                    'id' => 4936,
                    'brand_id' => 6,
                    'fipe_code' => '008134-5',
                    'model' => 'Q5 2.0 16V TFSI Quattro S Tronic',
                    'years' => '2009 a 2013'
                ],
                [
                    'id' => 8231,
                    'brand_id' => 6,
                    'fipe_code' => '008224-4',
                    'model' => 'Q5 2.0 TFSI Quattro S tronic (Blindado)',
                    'years' => '2018 a 2020'
                ],
                [
                    'id' => 6486,
                    'brand_id' => 6,
                    'fipe_code' => '008182-5',
                    'model' => 'Q5 3.0 V6 TFSI 272cv Quattro Tiptronic',
                    'years' => '2013 a 2016'
                ],
                [
                    'id' => 4959,
                    'brand_id' => 6,
                    'fipe_code' => '008137-0',
                    'model' => 'Q5 3.2 FSI V6 Quattro S Tronic',
                    'years' => '2009 a 2012'
                ],
                [
                    'id' => 8036,
                    'brand_id' => 6,
                    'fipe_code' => '008220-1',
                    'model' => 'Q5 Ambiente 2.0 TFSI Quattro S tronic',
                    'years' => '2018 a 2018'
                ],
                [
                    'id' => 8037,
                    'brand_id' => 6,
                    'fipe_code' => '008218-0',
                    'model' => 'Q5 Ambition 2.0 TFSI Quattro S tronic',
                    'years' => '2018 a 2018'
                ],
                [
                    'id' => 8038,
                    'brand_id' => 6,
                    'fipe_code' => '008219-8',
                    'model' => 'Q5 Attraction 2.0 TFSI Quattro S tronic',
                    'years' => '2018 a 2018'
                ],
                [
                    'id' => 8583,
                    'brand_id' => 6,
                    'fipe_code' => '008240-6',
                    'model' => 'Q5 Black 2.0 TFSI Quattro S tronic',
                    'years' => '2019 a 2020'
                ],
                [
                    'id' => 10045,
                    'brand_id' => 6,
                    'fipe_code' => '008285-6',
                    'model' => 'Q5 Perf. Black 2.0 TFSIe S.Tr. Qt (Hib.)',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 10046,
                    'brand_id' => 6,
                    'fipe_code' => '008288-0',
                    'model' => 'Q5 Performance 2.0 TFSIe S.Tr. Qt (Hib.)',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 8584,
                    'brand_id' => 6,
                    'fipe_code' => '008238-4',
                    'model' => 'Q5 Prestige 2.0 TFSI Quattro S tronic',
                    'years' => '2019 a Zero Km'
                ],
                [
                    'id' => 8585,
                    'brand_id' => 6,
                    'fipe_code' => '008239-2',
                    'model' => 'Q5 Prestige Plus 2.0 TFSI Quat. S tronic',
                    'years' => '2019 a 2020'
                ],
                [
                    'id' => 8773,
                    'brand_id' => 6,
                    'fipe_code' => '008248-1',
                    'model' => 'Q5 S-Line 2.0 TFSI Quattro S-tronic',
                    'years' => '2019 a Zero Km'
                ],
                [
                    'id' => 9486,
                    'brand_id' => 6,
                    'fipe_code' => '008270-8',
                    'model' => 'Q5 S-Line Black 2.0 TFSI Quat. S-Tronic',
                    'years' => '2021 a Zero Km'
                ],
                [
                    'id' => 10047,
                    'brand_id' => 6,
                    'fipe_code' => '008287-2',
                    'model' => 'Q5 SB P Black. 2.0 TFSIe S.Tr. Qt (Hib.)',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 10048,
                    'brand_id' => 6,
                    'fipe_code' => '008286-4',
                    'model' => 'Q5 SB Perf. 2.0 TFSIe S.Tr. Qt (Hib.)',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 9526,
                    'brand_id' => 6,
                    'fipe_code' => '008272-4',
                    'model' => 'Q5 SPB. S-Line Black 2.0 TFSI Qua.S-Tron',
                    'years' => '2021 a 2022'
                ],
                [
                    'id' => 9527,
                    'brand_id' => 6,
                    'fipe_code' => '008271-6',
                    'model' => 'Q5 Sportback S-Line 2.0 TFSI Quat.S-Tron',
                    'years' => '2021 a 2022'
                ],
                [
                    'id' => 7917,
                    'brand_id' => 6,
                    'fipe_code' => '008213-9',
                    'model' => 'Q7 3.0 V6 TDI Quat.Tip. 5p Die.\/Perfor.',
                    'years' => '2017 a 2019'
                ],
                [
                    'id' => 10049,
                    'brand_id' => 6,
                    'fipe_code' => '008152-3',
                    'model' => 'Q7 3.0 V6 TFSI  Quat.Tip.5p\/ Perf.(Híb.)',
                    'years' => '2011 a Zero Km'
                ],
                [
                    'id' => 4694,
                    'brand_id' => 6,
                    'fipe_code' => '008129-9',
                    'model' => 'Q7 3.6 V6 284cv Quattro Tiptronic',
                    'years' => '2008 a 2010'
                ],
                [
                    'id' => 4184,
                    'brand_id' => 6,
                    'fipe_code' => '008122-1',
                    'model' => 'Q7 4.2 V8 40V 350cv Quattro Tiptronic',
                    'years' => '2007 a 2010'
                ],
                [
                    'id' => 10050,
                    'brand_id' => 6,
                    'fipe_code' => '008243-0',
                    'model' => 'Q7 Perf. Black 3.0 TFSI Quat.Tip.(Híb.)',
                    'years' => '2019 a Zero Km'
                ],
                [
                    'id' => 8658,
                    'brand_id' => 6,
                    'fipe_code' => '008244-9',
                    'model' => 'Q7 Perf.Black 3.0 TDI Quat.Tip.5p Dies.',
                    'years' => '2019 a 2019'
                ],
                [
                    'id' => 9205,
                    'brand_id' => 6,
                    'fipe_code' => '008261-9',
                    'model' => 'Q7 S-Line 3.0 V6 TFSI Quattro Tiptronic',
                    'years' => '2020 a 2022'
                ],
                [
                    'id' => 10869,
                    'brand_id' => 6,
                    'fipe_code' => '008297-0',
                    'model' => 'Q8 E-TRON Launch Edition (Elétrico)',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 10870,
                    'brand_id' => 6,
                    'fipe_code' => '008296-1',
                    'model' => 'Q8 E-TRON Performance Black (Elétrico)',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 10786,
                    'brand_id' => 6,
                    'fipe_code' => '008293-7',
                    'model' => 'Q8 E-TRON Sportb. Perf. Black (Elétrico)',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 10827,
                    'brand_id' => 6,
                    'fipe_code' => '008294-5',
                    'model' => 'Q8 E-TRON Sportb.Launch Edt. (Elétrico)',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 10996,
                    'brand_id' => 6,
                    'fipe_code' => '008250-3',
                    'model' => 'Q8 Perf.Black 3.0 TFSI Quat. S-tr\/(Híb.)',
                    'years' => '2019 a Zero Km'
                ],
                [
                    'id' => 10997,
                    'brand_id' => 6,
                    'fipe_code' => '008251-1',
                    'model' => 'Q8 Perfo. 3.0 TFSI Quattro S-tron\/(Híb.)',
                    'years' => '2019 a Zero Km'
                ],
                [
                    'id' => 5235,
                    'brand_id' => 6,
                    'fipe_code' => '008147-7',
                    'model' => 'R8 4.2 V8 426cv Quattro R-tronic',
                    'years' => '2008 a 2012'
                ],
                [
                    'id' => 5236,
                    'brand_id' => 6,
                    'fipe_code' => '008146-9',
                    'model' => 'R8 5.2 V10 Quattro R-tronic\/S-tronic',
                    'years' => '2010 a 2022'
                ],
                [
                    'id' => 5974,
                    'brand_id' => 6,
                    'fipe_code' => '008158-2',
                    'model' => 'R8 GT 5.2 V10 560cv Quattro R-tronic',
                    'years' => '2012 a 2012'
                ],
                [
                    'id' => 5550,
                    'brand_id' => 6,
                    'fipe_code' => '008155-8',
                    'model' => 'R8 Spyder 5.2 Quattro R-tronic\/S-tronic',
                    'years' => '2010 a 2016'
                ],
                [
                    'id' => 9606,
                    'brand_id' => 6,
                    'fipe_code' => '008274-0',
                    'model' => 'RS E-TRON GT Quattro Aut. (Elétrico)',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 6865,
                    'brand_id' => 6,
                    'fipe_code' => '008193-0',
                    'model' => 'RS Q3 2.5 TFSI Quattro S-tronic 5p',
                    'years' => '2014 a 2022'
                ],
                [
                    'id' => 9292,
                    'brand_id' => 6,
                    'fipe_code' => '008265-1',
                    'model' => 'RS Q3 Sportback 2.5 TFSI Quattro S-tron.',
                    'years' => '2021 a 2022'
                ],
                [
                    'id' => 9224,
                    'brand_id' => 6,
                    'fipe_code' => '008262-7',
                    'model' => 'RS Q8 4.0 Bi-TB V8 FSI Quattro Tiptronic',
                    'years' => '2021 a Zero Km'
                ],
                [
                    'id' => 8175,
                    'brand_id' => 6,
                    'fipe_code' => '008221-0',
                    'model' => 'RS3 Sedan 2.5 TFSI Quattro S-tronic',
                    'years' => '2017 a 2018'
                ],
                [
                    'id' => 5922,
                    'brand_id' => 6,
                    'fipe_code' => '008157-4',
                    'model' => 'RS3 Sportback 2.5 TFSI Quattro S-tronic',
                    'years' => '2012 a 2018'
                ],
                [
                    'id' => 130,
                    'brand_id' => 6,
                    'fipe_code' => '008100-0',
                    'model' => 'RS4 2.7 Avant V6 30V BI-TB Quattro 380cv',
                    'years' => '2001 a 2001'
                ],
                [
                    'id' => 8628,
                    'brand_id' => 6,
                    'fipe_code' => '008242-2',
                    'model' => 'RS4 2.9 Avant V6 TFSI Quattro Tiptronic',
                    'years' => '2019 a 2022'
                ],
                [
                    'id' => 6487,
                    'brand_id' => 6,
                    'fipe_code' => '008183-3',
                    'model' => 'RS4 4.2 Avant 32V FSI Quattro S-tronic',
                    'years' => '2013 a 2015'
                ],
                [
                    'id' => 5410,
                    'brand_id' => 6,
                    'fipe_code' => '008151-5',
                    'model' => 'RS5 4.2 FSI V8 450cv Quattro S-Tron. 2p',
                    'years' => '2011 a 2015'
                ],
                [
                    'id' => 8629,
                    'brand_id' => 6,
                    'fipe_code' => '008241-4',
                    'model' => 'RS5 Coupê 2.9 V6 TFSI Quattro Tiptronic',
                    'years' => '2019 a 2019'
                ],
                [
                    'id' => 10681,
                    'brand_id' => 6,
                    'fipe_code' => '008291-0',
                    'model' => 'RS5 SPB. C.Plus Track 2.9 Quat. S-tronic',
                    'years' => '2023 a Zero Km'
                ],
                [
                    'id' => 10682,
                    'brand_id' => 6,
                    'fipe_code' => '008290-2',
                    'model' => 'RS5 SPB. Compet. Plus 2.9 Quat. S-tronic',
                    'years' => '2023 a Zero Km'
                ],
                [
                    'id' => 9247,
                    'brand_id' => 6,
                    'fipe_code' => '008263-5',
                    'model' => 'RS5 Sportback 2.9 V6 TFSI Quattro Tip.',
                    'years' => '2021 a 2023'
                ],
                [
                    'id' => 10227,
                    'brand_id' => 6,
                    'fipe_code' => '008189-2',
                    'model' => 'RS6 4.0 Avant TFSI BI-TB Quat.Tip.(Hib.)',
                    'years' => '2014 a Zero Km'
                ],
                [
                    'id' => 131,
                    'brand_id' => 6,
                    'fipe_code' => '008112-4',
                    'model' => 'RS6 4.2 450cv BI-TB Quattro Tiptronic 4p',
                    'years' => '2003 a 2004'
                ],
                [
                    'id' => 132,
                    'brand_id' => 6,
                    'fipe_code' => '008111-6',
                    'model' => 'RS6 4.2 Avant  BI-TB Quattro Tiptron. 5p',
                    'years' => '2003 a 2004'
                ],
                [
                    'id' => 5335,
                    'brand_id' => 6,
                    'fipe_code' => '008149-3',
                    'model' => 'RS6 5.0 Avant.FSI V10 Bi-TB Quattro Tip.',
                    'years' => '2010 a 2011'
                ],
                [
                    'id' => 5336,
                    'brand_id' => 6,
                    'fipe_code' => '008148-5',
                    'model' => 'RS6 5.0 FSI V10 Bi-TB Quattro Tip.',
                    'years' => '2010 a 2011'
                ],
                [
                    'id' => 6883,
                    'brand_id' => 6,
                    'fipe_code' => '008194-9',
                    'model' => 'RS7 Sportback 4.0 TFSI Quattro Tiptronic',
                    'years' => '2014 a 2022'
                ],
                [
                    'id' => 6769,
                    'brand_id' => 6,
                    'fipe_code' => '008191-4',
                    'model' => 'S Q5 3.0 V6 TFSI 354cv Quattro Tiptronic',
                    'years' => '2014 a 2020'
                ],
                [
                    'id' => 133,
                    'brand_id' => 6,
                    'fipe_code' => '008066-7',
                    'model' => 'S3 1.8 225cv Turbo Quattro',
                    'years' => '1999 a 2003'
                ],
                [
                    'id' => 6951,
                    'brand_id' => 6,
                    'fipe_code' => '008196-5',
                    'model' => 'S3 Sedan 2.0 TFSI Quattro 286cv S-tronic',
                    'years' => '2014 a 2016'
                ],
                [
                    'id' => 5127,
                    'brand_id' => 6,
                    'fipe_code' => '008140-0',
                    'model' => 'S3 Sportback 2.0 TFSI Quattro S Tronic',
                    'years' => '2010 a 2016'
                ],
                [
                    'id' => 134,
                    'brand_id' => 6,
                    'fipe_code' => '008069-1',
                    'model' => 'S4 2.7 Avant Turbo Quattro',
                    'years' => '2000 a 2001'
                ],
                [
                    'id' => 135,
                    'brand_id' => 6,
                    'fipe_code' => '008063-2',
                    'model' => 'S4 2.7 Turbo Quattro Mec.',
                    'years' => '1999 a 2001'
                ],
                [
                    'id' => 6085,
                    'brand_id' => 6,
                    'fipe_code' => '008163-9',
                    'model' => 'S4 3.0 Avant TFSI V6 24V Quattro Stronic',
                    'years' => '2012 a 2014'
                ],
                [
                    'id' => 6086,
                    'brand_id' => 6,
                    'fipe_code' => '008162-0',
                    'model' => 'S4 3.0 TFSI V6 24V Quattro Stronic',
                    'years' => '2011 a 2014'
                ],
                [
                    'id' => 136,
                    'brand_id' => 6,
                    'fipe_code' => '008114-0',
                    'model' => 'S4 4.2 Avant V8 40V 344cv Quattro Tipt.',
                    'years' => '2004 a 2005'
                ],
                [
                    'id' => 137,
                    'brand_id' => 6,
                    'fipe_code' => '008113-2',
                    'model' => 'S4 4.2 V8 40V 344cv Quattro Tiptronic',
                    'years' => '2004 a 2005'
                ],
                [
                    'id' => 6087,
                    'brand_id' => 6,
                    'fipe_code' => '008168-0',
                    'model' => 'S5 Cabriolet 3.0 TFSI Quattro Stronic',
                    'years' => '2012 a 2013'
                ],
                [
                    'id' => 6088,
                    'brand_id' => 6,
                    'fipe_code' => '008167-1',
                    'model' => 'S5 Coupê 3.0 TFSI Quattro Stronic',
                    'years' => '2012 a 2013'
                ],
                [
                    'id' => 6089,
                    'brand_id' => 6,
                    'fipe_code' => '008166-3',
                    'model' => 'S5 Sportback 3.0 TFSI Quattro Stronic',
                    'years' => '2012 a 2015'
                ],
                [
                    'id' => 138,
                    'brand_id' => 6,
                    'fipe_code' => '008038-1',
                    'model' => 'S6 2.2 20V TB',
                    'years' => '1994 a 1997'
                ],
                [
                    'id' => 139,
                    'brand_id' => 6,
                    'fipe_code' => '008078-0',
                    'model' => 'S6 2.2 Avant 20V TB',
                    'years' => '1995 a 1997'
                ],
                [
                    'id' => 7302,
                    'brand_id' => 6,
                    'fipe_code' => '008202-3',
                    'model' => 'S6 4.0 TFSI Quattro S-Tronic 4p',
                    'years' => '2013 a 2016'
                ],
                [
                    'id' => 140,
                    'brand_id' => 6,
                    'fipe_code' => '008097-7',
                    'model' => 'S6 4.2 Avant V8 40V Quattro Tiptronic',
                    'years' => '2001 a 2001'
                ],
                [
                    'id' => 141,
                    'brand_id' => 6,
                    'fipe_code' => '008099-3',
                    'model' => 'S6 4.2 V8 40V Quattro Mec',
                    'years' => '2001 a 2001'
                ],
                [
                    'id' => 142,
                    'brand_id' => 6,
                    'fipe_code' => '008098-5',
                    'model' => 'S6 4.2 V8 40V Quattro Tiptronic',
                    'years' => '2001 a 2004'
                ],
                [
                    'id' => 5186,
                    'brand_id' => 6,
                    'fipe_code' => '008144-2',
                    'model' => 'S6 5.2 Avant FSI V10 435cv Quattro Tiptr',
                    'years' => '2010 a 2011'
                ],
                [
                    'id' => 5187,
                    'brand_id' => 6,
                    'fipe_code' => '008143-4',
                    'model' => 'S6 5.2 FSI V10 435cv Quattro Tiptronic',
                    'years' => '2010 a 2011'
                ],
                [
                    'id' => 143,
                    'brand_id' => 6,
                    'fipe_code' => '008016-0',
                    'model' => 'S6 Plus 4.2 Avant V8 32V',
                    'years' => '1997 a 1998'
                ],
                [
                    'id' => 144,
                    'brand_id' => 6,
                    'fipe_code' => '008039-0',
                    'model' => 'S6 Plus 4.2 V8 32V',
                    'years' => '1996 a 1998'
                ],
                [
                    'id' => 6632,
                    'brand_id' => 6,
                    'fipe_code' => '008188-4',
                    'model' => 'S7 4.0 TFSI 420\/450cv Quattro S-tronic',
                    'years' => '2013 a 2016'
                ],
                [
                    'id' => 7128,
                    'brand_id' => 6,
                    'fipe_code' => '008198-1',
                    'model' => 'S8 4.0 TFSI Quattro Tiptronic 4p',
                    'years' => '2013 a 2017'
                ],
                [
                    'id' => 145,
                    'brand_id' => 6,
                    'fipe_code' => '008028-4',
                    'model' => 'S8 4.2 Mec',
                    'years' => '1996 a 1998'
                ],
                [
                    'id' => 146,
                    'brand_id' => 6,
                    'fipe_code' => '008064-0',
                    'model' => 'S8 4.2 Quattro Mec.',
                    'years' => '2000 a 2000'
                ],
                [
                    'id' => 147,
                    'brand_id' => 6,
                    'fipe_code' => '008065-9',
                    'model' => 'S8 4.2 Quattro Tiptronic',
                    'years' => '2000 a 2000'
                ],
                [
                    'id' => 148,
                    'brand_id' => 6,
                    'fipe_code' => '008029-2',
                    'model' => 'S8 4.2 Tiptronic',
                    'years' => '1998 a 2001'
                ],
                [
                    'id' => 11197,
                    'brand_id' => 6,
                    'fipe_code' => '008306-2',
                    'model' => 'SQ8 Sportback E-Tron Quattro (Elétrico)',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 149,
                    'brand_id' => 6,
                    'fipe_code' => '008034-9',
                    'model' => 'TT 1.8 TB 180cv',
                    'years' => '2000 a 2006'
                ],
                [
                    'id' => 150,
                    'brand_id' => 6,
                    'fipe_code' => '008035-7',
                    'model' => 'TT 1.8 TB Quattro 225cv',
                    'years' => '1999 a 2006'
                ],
                [
                    'id' => 4330,
                    'brand_id' => 6,
                    'fipe_code' => '008126-4',
                    'model' => 'TT 2.0 16v TFSI S-Tronic',
                    'years' => '2007 a 2018'
                ],
                [
                    'id' => 151,
                    'brand_id' => 6,
                    'fipe_code' => '008075-6',
                    'model' => 'TT Roadster 1.8 TB Quattro 225cv (Conv.)',
                    'years' => '2000 a 2006'
                ],
                [
                    'id' => 4431,
                    'brand_id' => 6,
                    'fipe_code' => '008127-2',
                    'model' => 'TT Roadster 2.0 16v TFSI S-Tronic',
                    'years' => '2007 a 2018'
                ],
                [
                    'id' => 6258,
                    'brand_id' => 6,
                    'fipe_code' => '008176-0',
                    'model' => 'TTRS 2.5 TFSI QUATTRO S Tronic',
                    'years' => '2012 a 2022'
                ],
                [
                    'id' => 6259,
                    'brand_id' => 6,
                    'fipe_code' => '008175-2',
                    'model' => 'TTRS Roadster 2.5 TB FSI Quat. S Tronic',
                    'years' => '2012 a 2014'
                ],
                [
                    'id' => 5128,
                    'brand_id' => 6,
                    'fipe_code' => '008141-8',
                    'model' => 'TTS 2.0 TFSI QUATTRO S Tronic',
                    'years' => '2010 a 2018'
                ],
                [
                    'id' => 5129,
                    'brand_id' => 6,
                    'fipe_code' => '008142-6',
                    'model' => 'TTS Roadster 2.0 TB FSI Quattro S Tronic',
                    'years' => '2010 a 2018'
                ]
            ]
        ];


        $bmwModels = [
            [
                [
                    'id' => 6146,
                    'brand_id' => 7,
                    'fipe_code' => '009171-5',
                    'model' => '116iA 1.6 TB 16V 136cv 5p',
                    'years' => '2012 a 2015'
                ],
                [
                    'id' => 9955,
                    'brand_id' => 7,
                    'fipe_code' => '009298-3',
                    'model' => '118i M Sport 1.5 TB 12V Aut. 5p',
                    'years' => '2023 a Zero Km'
                ],
                [
                    'id' => 8946,
                    'brand_id' => 7,
                    'fipe_code' => '009258-4',
                    'model' => '118i Sport 1.5 TB 12V Aut. 5p',
                    'years' => '2020 a 2024'
                ],
                [
                    'id' => 5576,
                    'brand_id' => 7,
                    'fipe_code' => '009152-9',
                    'model' => '118iA 2.0 16V 136cv 3p',
                    'years' => '2011 a 2012'
                ],
                [
                    'id' => 4960,
                    'brand_id' => 7,
                    'fipe_code' => '009136-7',
                    'model' => '118iA 2.0 16V 136cv 5p',
                    'years' => '2010 a 2012'
                ],
                [
                    'id' => 6147,
                    'brand_id' => 7,
                    'fipe_code' => '009169-3',
                    'model' => '118iA Full 1.6 TB 16V 170cv 5p',
                    'years' => '2012 a 2014'
                ],
                [
                    'id' => 5923,
                    'brand_id' => 7,
                    'fipe_code' => '009159-6',
                    'model' => '118iA\/ Urban\/Sport 1.6 TB 16V 170cv 5p',
                    'years' => '2012 a 2015'
                ],
                [
                    'id' => 152,
                    'brand_id' => 7,
                    'fipe_code' => '009106-5',
                    'model' => '120i 2.0 16V 150cv\/ 156cv 5p',
                    'years' => '2005 a 2009'
                ],
                [
                    'id' => 153,
                    'brand_id' => 7,
                    'fipe_code' => '009105-7',
                    'model' => '120iA 2.0 16V 150cv\/ 156cv 5p',
                    'years' => '2005 a 2012'
                ],
                [
                    'id' => 4700,
                    'brand_id' => 7,
                    'fipe_code' => '009129-4',
                    'model' => '120iA 2.0 16V 156cv 3p',
                    'years' => '2008 a 2009'
                ],
                [
                    'id' => 4683,
                    'brand_id' => 7,
                    'fipe_code' => '009130-8',
                    'model' => '120iA Cabrio 2.0 16V 156cv 2p',
                    'years' => '2009 a 2012'
                ],
                [
                    'id' => 7178,
                    'brand_id' => 7,
                    'fipe_code' => '009212-6',
                    'model' => '120iA Sport 2.0\/ActiveFlex 16V Aut.',
                    'years' => '2015 a 2019'
                ],
                [
                    'id' => 6377,
                    'brand_id' => 7,
                    'fipe_code' => '009176-6',
                    'model' => '125i M Sport\/Active Flex 2.0 TB Aut. 5p',
                    'years' => '2013 a 2019'
                ],
                [
                    'id' => 3879,
                    'brand_id' => 7,
                    'fipe_code' => '009109-0',
                    'model' => '130i 3.0 24V 265cv 5p',
                    'years' => '2006 a 2009'
                ],
                [
                    'id' => 4473,
                    'brand_id' => 7,
                    'fipe_code' => '009126-0',
                    'model' => '130iA 3.0 24V 265cv 3p',
                    'years' => '2008 a 2009'
                ],
                [
                    'id' => 4199,
                    'brand_id' => 7,
                    'fipe_code' => '009117-0',
                    'model' => '130iA 3.0 24V 265cv 5p',
                    'years' => '2007 a 2012'
                ],
                [
                    'id' => 4961,
                    'brand_id' => 7,
                    'fipe_code' => '009135-9',
                    'model' => '135iA Coupé 3.0 24V 306cv',
                    'years' => '2009 a 2012'
                ],
                [
                    'id' => 11119,
                    'brand_id' => 7,
                    'fipe_code' => '009321-1',
                    'model' => '218i Gran Coupe M Sport 1.5 Bi-Turbo',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 9036,
                    'brand_id' => 7,
                    'fipe_code' => '009264-9',
                    'model' => '218i Gran Coupe Sport GP 1.5 Bi-Turbo',
                    'years' => '2020 a Zero Km'
                ],
                [
                    'id' => 7448,
                    'brand_id' => 7,
                    'fipe_code' => '009217-7',
                    'model' => '220i Tourer Active Flex 2.0 TB Aut.',
                    'years' => '2016 a 2018'
                ],
                [
                    'id' => 7129,
                    'brand_id' => 7,
                    'fipe_code' => '009208-8',
                    'model' => '225i Active Tourer Sport 2.0 TB Aut.',
                    'years' => '2015 a 2016'
                ],
                [
                    'id' => 154,
                    'brand_id' => 7,
                    'fipe_code' => '009059-0',
                    'model' => '316 (todas)',
                    'years' => '1986 a 1995'
                ],
                [
                    'id' => 6660,
                    'brand_id' => 7,
                    'fipe_code' => '009189-8',
                    'model' => '316i 1.6 TB 16V 136cv 4p',
                    'years' => '2014 a 2015'
                ],
                [
                    'id' => 155,
                    'brand_id' => 7,
                    'fipe_code' => '009062-0',
                    'model' => '318i Cabrio 1.8 16V',
                    'years' => '1994 a 1995'
                ],
                [
                    'id' => 156,
                    'brand_id' => 7,
                    'fipe_code' => '009001-8',
                    'model' => '318i\/iA 1.8 16V',
                    'years' => '1991 a 1998'
                ],
                [
                    'id' => 157,
                    'brand_id' => 7,
                    'fipe_code' => '009061-1',
                    'model' => '318i\/iA Compact 1.8 16V',
                    'years' => '1994 a 1997'
                ],
                [
                    'id' => 5607,
                    'brand_id' => 7,
                    'fipe_code' => '009155-3',
                    'model' => '318iA 2.0 16V 136cv 5p',
                    'years' => '2011 a 2012'
                ],
                [
                    'id' => 158,
                    'brand_id' => 7,
                    'fipe_code' => '009002-6',
                    'model' => '318iS\/ISA 1.9 16V',
                    'years' => '1993 a 1998'
                ],
                [
                    'id' => 159,
                    'brand_id' => 7,
                    'fipe_code' => '009003-4',
                    'model' => '318Ti Compact Mec',
                    'years' => '1995 a 1998'
                ],
                [
                    'id' => 160,
                    'brand_id' => 7,
                    'fipe_code' => '009060-3',
                    'model' => '318Ti\/TiA Compact 1.9 16V',
                    'years' => '1995 a 1999'
                ],
                [
                    'id' => 161,
                    'brand_id' => 7,
                    'fipe_code' => '009038-7',
                    'model' => '320i',
                    'years' => '1991 a 2007'
                ],
                [
                    'id' => 162,
                    'brand_id' => 7,
                    'fipe_code' => '009039-5',
                    'model' => '320iA',
                    'years' => '1991 a 2012'
                ],
                [
                    'id' => 7256,
                    'brand_id' => 7,
                    'fipe_code' => '009213-4',
                    'model' => '320iA 2.0 TB M Sport A.Flex\/M.Sport 4p',
                    'years' => '2015 a Zero Km'
                ],
                [
                    'id' => 6090,
                    'brand_id' => 7,
                    'fipe_code' => '009164-2',
                    'model' => '320iA 2.0 Turbo\/ActiveFlex 16V\/GP  4p',
                    'years' => '2013 a Zero Km'
                ],
                [
                    'id' => 6609,
                    'brand_id' => 7,
                    'fipe_code' => '009185-5',
                    'model' => '320iA GT Sport 2.0 Turbo 16V 184cv 5p',
                    'years' => '2014 a 2017'
                ],
                [
                    'id' => 6091,
                    'brand_id' => 7,
                    'fipe_code' => '009165-0',
                    'model' => '320iA Modern\/Sport TB 2.0\/A.Flex\/GP 4p',
                    'years' => '2013 a Zero Km'
                ],
                [
                    'id' => 163,
                    'brand_id' => 7,
                    'fipe_code' => '009057-3',
                    'model' => '323Ci Coupê',
                    'years' => '1999 a 2000'
                ],
                [
                    'id' => 164,
                    'brand_id' => 7,
                    'fipe_code' => '009058-1',
                    'model' => '323CiA Coupê',
                    'years' => '1999 a 2000'
                ],
                [
                    'id' => 165,
                    'brand_id' => 7,
                    'fipe_code' => '009063-8',
                    'model' => '323i 2.5 24V',
                    'years' => '1998 a 2001'
                ],
                [
                    'id' => 166,
                    'brand_id' => 7,
                    'fipe_code' => '009040-9',
                    'model' => '323i Confort',
                    'years' => '1998 a 2000'
                ],
                [
                    'id' => 167,
                    'brand_id' => 7,
                    'fipe_code' => '009083-2',
                    'model' => '323i Sport',
                    'years' => '1998 a 1998'
                ],
                [
                    'id' => 168,
                    'brand_id' => 7,
                    'fipe_code' => '009030-1',
                    'model' => '323i Touring',
                    'years' => '1998 a 2000'
                ],
                [
                    'id' => 172,
                    'brand_id' => 7,
                    'fipe_code' => '009042-5',
                    'model' => '323i\/iA Exclusive',
                    'years' => '1997 a 2000'
                ],
                [
                    'id' => 169,
                    'brand_id' => 7,
                    'fipe_code' => '009064-6',
                    'model' => '323iA 2.5 24V',
                    'years' => '1998 a 2001'
                ],
                [
                    'id' => 170,
                    'brand_id' => 7,
                    'fipe_code' => '009041-7',
                    'model' => '323iA Confort',
                    'years' => '1998 a 2000'
                ],
                [
                    'id' => 171,
                    'brand_id' => 7,
                    'fipe_code' => '009054-9',
                    'model' => '323iA Entry Sedan',
                    'years' => '2000 a 2000'
                ],
                [
                    'id' => 173,
                    'brand_id' => 7,
                    'fipe_code' => '009043-3',
                    'model' => '323iA Sport',
                    'years' => '1998 a 2001'
                ],
                [
                    'id' => 174,
                    'brand_id' => 7,
                    'fipe_code' => '009056-5',
                    'model' => '323iA Top Sedan',
                    'years' => '1999 a 2002'
                ],
                [
                    'id' => 175,
                    'brand_id' => 7,
                    'fipe_code' => '009044-1',
                    'model' => '323iA Touring',
                    'years' => '1998 a 1999'
                ],
                [
                    'id' => 176,
                    'brand_id' => 7,
                    'fipe_code' => '009031-0',
                    'model' => '323Ti Compact',
                    'years' => '1998 a 2000'
                ],
                [
                    'id' => 177,
                    'brand_id' => 7,
                    'fipe_code' => '009032-8',
                    'model' => '323Ti Compact Sport',
                    'years' => '1998 a 2000'
                ],
                [
                    'id' => 178,
                    'brand_id' => 7,
                    'fipe_code' => '009033-6',
                    'model' => '323TiA Compact Top',
                    'years' => '1998 a 1999'
                ],
                [
                    'id' => 179,
                    'brand_id' => 7,
                    'fipe_code' => '009004-2',
                    'model' => '325i',
                    'years' => '1986 a 2001'
                ],
                [
                    'id' => 180,
                    'brand_id' => 7,
                    'fipe_code' => '009005-0',
                    'model' => '325i\/iA Cabrio',
                    'years' => '1993 a 1996'
                ],
                [
                    'id' => 181,
                    'brand_id' => 7,
                    'fipe_code' => '009036-0',
                    'model' => '325iA',
                    'years' => '1989 a 2012'
                ],
                [
                    'id' => 182,
                    'brand_id' => 7,
                    'fipe_code' => '009094-8',
                    'model' => '325iA 2.5 24V Protection',
                    'years' => '2001 a 2003'
                ],
                [
                    'id' => 183,
                    'brand_id' => 7,
                    'fipe_code' => '009091-3',
                    'model' => '325iA Coupé 2.5 24V 2p',
                    'years' => '2001 a 2010'
                ],
                [
                    'id' => 3955,
                    'brand_id' => 7,
                    'fipe_code' => '009112-0',
                    'model' => '325iA Touring',
                    'years' => '2006 a 2009'
                ],
                [
                    'id' => 184,
                    'brand_id' => 7,
                    'fipe_code' => '009066-2',
                    'model' => '328i Exclusive 2.8 24V',
                    'years' => '1997 a 2000'
                ],
                [
                    'id' => 185,
                    'brand_id' => 7,
                    'fipe_code' => '009034-4',
                    'model' => '328i Touring\/Sport',
                    'years' => '1996 a 1999'
                ],
                [
                    'id' => 186,
                    'brand_id' => 7,
                    'fipe_code' => '009006-9',
                    'model' => '328i\/iA (modelo antigo)',
                    'years' => '1996 a 1998'
                ],
                [
                    'id' => 187,
                    'brand_id' => 7,
                    'fipe_code' => '009086-7',
                    'model' => '328i\/iA (novo modelo)',
                    'years' => '1998 a 2000'
                ],
                [
                    'id' => 188,
                    'brand_id' => 7,
                    'fipe_code' => '009022-0',
                    'model' => '328i\/iA Cabrio',
                    'years' => '1996 a 1998'
                ],
                [
                    'id' => 6046,
                    'brand_id' => 7,
                    'fipe_code' => '009160-0',
                    'model' => '328iA 2.0 TB\/2.0 TB Flex 16V 4p',
                    'years' => '2012 a 2014'
                ],
                [
                    'id' => 189,
                    'brand_id' => 7,
                    'fipe_code' => '009067-0',
                    'model' => '328iA Exclusive 2.8 24V',
                    'years' => '1997 a 2000'
                ],
                [
                    'id' => 6633,
                    'brand_id' => 7,
                    'fipe_code' => '009187-1',
                    'model' => '328iA GT M Sport 2.0 Turbo 16V 245cv 5p',
                    'years' => '2014 a 2016'
                ],
                [
                    'id' => 6047,
                    'brand_id' => 7,
                    'fipe_code' => '009161-8',
                    'model' => '328iA Luxury\/Modern 2.0 TB 16V 4p',
                    'years' => '2012 a 2013'
                ],
                [
                    'id' => 7303,
                    'brand_id' => 7,
                    'fipe_code' => '009215-0',
                    'model' => '328iA M Sport 2.0 16V Flex 4p',
                    'years' => '2015 a 2018'
                ],
                [
                    'id' => 6048,
                    'brand_id' => 7,
                    'fipe_code' => '009163-4',
                    'model' => '328iA Plus 2.0 TB 16V 245cv 4p',
                    'years' => '2013 a 2013'
                ],
                [
                    'id' => 6049,
                    'brand_id' => 7,
                    'fipe_code' => '009162-6',
                    'model' => '328iA Sport 2.0 16V\/2.0 16V Flex 4p',
                    'years' => '2013 a 2018'
                ],
                [
                    'id' => 190,
                    'brand_id' => 7,
                    'fipe_code' => '009065-4',
                    'model' => '328iA Touring\/Sport',
                    'years' => '1996 a 1999'
                ],
                [
                    'id' => 191,
                    'brand_id' => 7,
                    'fipe_code' => '009093-0',
                    'model' => '330Ci Cabriolet',
                    'years' => '2000 a 2004'
                ],
                [
                    'id' => 192,
                    'brand_id' => 7,
                    'fipe_code' => '009087-5',
                    'model' => '330CiA Cabriolet',
                    'years' => '2001 a 2006'
                ],
                [
                    'id' => 9956,
                    'brand_id' => 7,
                    'fipe_code' => '009266-5',
                    'model' => '330e M Sport 2.0 Turbo Aut. (Híbrido)',
                    'years' => '2020 a Zero Km'
                ],
                [
                    'id' => 8630,
                    'brand_id' => 7,
                    'fipe_code' => '009240-1',
                    'model' => '330i M Sport 2.0 TB 16V 4p',
                    'years' => '2019 a 2021'
                ],
                [
                    'id' => 193,
                    'brand_id' => 7,
                    'fipe_code' => '009092-1',
                    'model' => '330i MotorSport 3.0 24V 4p',
                    'years' => '2001 a 2003'
                ],
                [
                    'id' => 8688,
                    'brand_id' => 7,
                    'fipe_code' => '009244-4',
                    'model' => '330i Sport 2.0 TB 16V 4p',
                    'years' => '2019 a 2020'
                ],
                [
                    'id' => 3956,
                    'brand_id' => 7,
                    'fipe_code' => '009113-8',
                    'model' => '330iA Exclusive 3.0 24V 4p',
                    'years' => '2006 a 2006'
                ],
                [
                    'id' => 194,
                    'brand_id' => 7,
                    'fipe_code' => '009088-3',
                    'model' => '330iA MotorSport 4p',
                    'years' => '2001 a 2007'
                ],
                [
                    'id' => 195,
                    'brand_id' => 7,
                    'fipe_code' => '009089-1',
                    'model' => '330iA Top 4p',
                    'years' => '2001 a 2007'
                ],
                [
                    'id' => 9957,
                    'brand_id' => 7,
                    'fipe_code' => '009182-0',
                    'model' => '335i 3.0 Active 3 (Híbrido)',
                    'years' => '2014 a 2014'
                ],
                [
                    'id' => 4272,
                    'brand_id' => 7,
                    'fipe_code' => '009122-7',
                    'model' => '335iA 3.0 24V 306cv',
                    'years' => '2007 a 2012'
                ],
                [
                    'id' => 4416,
                    'brand_id' => 7,
                    'fipe_code' => '009124-3',
                    'model' => '335iA Cabriolet 3.0 24V 306cv',
                    'years' => '2008 a 2012'
                ],
                [
                    'id' => 6513,
                    'brand_id' => 7,
                    'fipe_code' => '009184-7',
                    'model' => '335iA M Sport 3.0 24V 306cv 4p',
                    'years' => '2014 a 2015'
                ],
                [
                    'id' => 6148,
                    'brand_id' => 7,
                    'fipe_code' => '009170-7',
                    'model' => '335iA Sport 3.0 24V 306cv 4p',
                    'years' => '2012 a 2013'
                ],
                [
                    'id' => 9785,
                    'brand_id' => 7,
                    'fipe_code' => '009290-8',
                    'model' => '420i Cabriolet M Sport 2.0 TB 16V 2p.',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 7083,
                    'brand_id' => 7,
                    'fipe_code' => '009203-7',
                    'model' => '420i Cabriolet Sport 2.0 TB 184cv 2p',
                    'years' => '2015 a 2016'
                ],
                [
                    'id' => 6952,
                    'brand_id' => 7,
                    'fipe_code' => '009194-4',
                    'model' => '428i Cabriolet Sport 2.0 TB 245cv 2p',
                    'years' => '2014 a 2016'
                ],
                [
                    'id' => 7084,
                    'brand_id' => 7,
                    'fipe_code' => '009201-0',
                    'model' => '428i Gran Coupe M Sport 2.0 TB 245cv',
                    'years' => '2015 a 2016'
                ],
                [
                    'id' => 7085,
                    'brand_id' => 7,
                    'fipe_code' => '009202-9',
                    'model' => '428i Gran Coupe Sport 2.0 TB 245cv',
                    'years' => '2015 a 2015'
                ],
                [
                    'id' => 7728,
                    'brand_id' => 7,
                    'fipe_code' => '009220-7',
                    'model' => '430i Cab. Sport Limited Ed.2.0 TB 2p',
                    'years' => '2017 a 2017'
                ],
                [
                    'id' => 9442,
                    'brand_id' => 7,
                    'fipe_code' => '009278-9',
                    'model' => '430i Cabriolet M Sport 2.0 TB 258cv 2p',
                    'years' => '2021 a 2022'
                ],
                [
                    'id' => 7875,
                    'brand_id' => 7,
                    'fipe_code' => '009224-0',
                    'model' => '430i Cabriolet Sport 2.0 TB 252cv 2p',
                    'years' => '2017 a 2020'
                ],
                [
                    'id' => 7729,
                    'brand_id' => 7,
                    'fipe_code' => '009221-5',
                    'model' => '430i Gran Coupé M Sport TB 5p',
                    'years' => '2017 a 2017'
                ],
                [
                    'id' => 6691,
                    'brand_id' => 7,
                    'fipe_code' => '009190-1',
                    'model' => '435iA M Sport Coupe 3.0 24V 306cv 2p',
                    'years' => '2014 a 2015'
                ],
                [
                    'id' => 196,
                    'brand_id' => 7,
                    'fipe_code' => '009047-6',
                    'model' => '520i 2.0 16V',
                    'years' => '1991 a 1993'
                ],
                [
                    'id' => 197,
                    'brand_id' => 7,
                    'fipe_code' => '009007-7',
                    'model' => '525i\/iA',
                    'years' => '1990 a 2003'
                ],
                [
                    'id' => 198,
                    'brand_id' => 7,
                    'fipe_code' => '009068-9',
                    'model' => '525i\/iA Touring',
                    'years' => '1991 a 1995'
                ],
                [
                    'id' => 199,
                    'brand_id' => 7,
                    'fipe_code' => '009008-5',
                    'model' => '528i\/iA',
                    'years' => '1996 a 2000'
                ],
                [
                    'id' => 6149,
                    'brand_id' => 7,
                    'fipe_code' => '009168-5',
                    'model' => '528iA 2.0 Turbo 16V 245cv 4p',
                    'years' => '2012 a 2014'
                ],
                [
                    'id' => 200,
                    'brand_id' => 7,
                    'fipe_code' => '009023-9',
                    'model' => '528iA High',
                    'years' => '1996 a 2001'
                ],
                [
                    'id' => 6514,
                    'brand_id' => 7,
                    'fipe_code' => '009183-9',
                    'model' => '528iA M Sport 2.0 Turbo 16V 245cv 4p',
                    'years' => '2013 a 2016'
                ],
                [
                    'id' => 201,
                    'brand_id' => 7,
                    'fipe_code' => '009024-7',
                    'model' => '528iA Touring',
                    'years' => '1996 a 1999'
                ],
                [
                    'id' => 9959,
                    'brand_id' => 7,
                    'fipe_code' => '009299-1',
                    'model' => '530e Luxury 2.0 Turbo (Híbrido)',
                    'years' => '2023 a 2023'
                ],
                [
                    'id' => 9960,
                    'brand_id' => 7,
                    'fipe_code' => '009238-0',
                    'model' => '530e M Sport 2.0 Turbo Aut. (Híbrido)',
                    'years' => '2019 a Zero Km'
                ],
                [
                    'id' => 7918,
                    'brand_id' => 7,
                    'fipe_code' => '009226-6',
                    'model' => '530i M Sport 2.0 Turbo 252cv Aut.',
                    'years' => '2017 a 2019'
                ],
                [
                    'id' => 8816,
                    'brand_id' => 7,
                    'fipe_code' => '009251-7',
                    'model' => '530i Security',
                    'years' => '2008 a 2008'
                ],
                [
                    'id' => 202,
                    'brand_id' => 7,
                    'fipe_code' => '009009-3',
                    'model' => '530i\/iA',
                    'years' => '1992 a 2010'
                ],
                [
                    'id' => 203,
                    'brand_id' => 7,
                    'fipe_code' => '009069-7',
                    'model' => '530i\/iA Touring',
                    'years' => '1992 a 1995'
                ],
                [
                    'id' => 204,
                    'brand_id' => 7,
                    'fipe_code' => '009037-9',
                    'model' => '535i\/iA 3.5 24V',
                    'years' => '1990 a 1993'
                ],
                [
                    'id' => 5267,
                    'brand_id' => 7,
                    'fipe_code' => '009146-4',
                    'model' => '535iA 3.0 24V 306cv Bi-Turbo',
                    'years' => '2010 a 2013'
                ],
                [
                    'id' => 5292,
                    'brand_id' => 7,
                    'fipe_code' => '009148-0',
                    'model' => '535iA GT 3.0 306cv Bi-Turbo',
                    'years' => '2010 a 2012'
                ],
                [
                    'id' => 6415,
                    'brand_id' => 7,
                    'fipe_code' => '009179-0',
                    'model' => '535iA M Sport 3.0 24V 306cv Bi-Turbo',
                    'years' => '2013 a 2016'
                ],
                [
                    'id' => 205,
                    'brand_id' => 7,
                    'fipe_code' => '009010-7',
                    'model' => '540i',
                    'years' => '1992 a 2000'
                ],
                [
                    'id' => 7919,
                    'brand_id' => 7,
                    'fipe_code' => '009225-8',
                    'model' => '540i M Sport 3.0 Turbo 340cv Aut.',
                    'years' => '2017 a 2020'
                ],
                [
                    'id' => 206,
                    'brand_id' => 7,
                    'fipe_code' => '009017-4',
                    'model' => '540i\/iA Touring',
                    'years' => '1994 a 2001'
                ],
                [
                    'id' => 207,
                    'brand_id' => 7,
                    'fipe_code' => '009025-5',
                    'model' => '540iA',
                    'years' => '1992 a 2003'
                ],
                [
                    'id' => 208,
                    'brand_id' => 7,
                    'fipe_code' => '009084-0',
                    'model' => '540iA MotorSport',
                    'years' => '2001 a 2003'
                ],
                [
                    'id' => 209,
                    'brand_id' => 7,
                    'fipe_code' => '009026-3',
                    'model' => '540iA Protection',
                    'years' => '1998 a 2003'
                ],
                [
                    'id' => 210,
                    'brand_id' => 7,
                    'fipe_code' => '009052-2',
                    'model' => '540iTA',
                    'years' => '1994 a 2001'
                ],
                [
                    'id' => 211,
                    'brand_id' => 7,
                    'fipe_code' => '009102-2',
                    'model' => '545iA 4.4 32V V8 333cv',
                    'years' => '2004 a 2006'
                ],
                [
                    'id' => 5268,
                    'brand_id' => 7,
                    'fipe_code' => '009147-2',
                    'model' => '550iA 4.4 32V 407cv Bi-Turbo',
                    'years' => '2010 a 2012'
                ],
                [
                    'id' => 3880,
                    'brand_id' => 7,
                    'fipe_code' => '009110-3',
                    'model' => '550iA 4.8 32V',
                    'years' => '2006 a 2009'
                ],
                [
                    'id' => 4995,
                    'brand_id' => 7,
                    'fipe_code' => '009137-5',
                    'model' => '550iA Limited Sport Edition 4.8 32V',
                    'years' => '2010 a 2010'
                ],
                [
                    'id' => 4432,
                    'brand_id' => 7,
                    'fipe_code' => '009125-1',
                    'model' => '550iA Security 4.8 32V',
                    'years' => '2006 a 2009'
                ],
                [
                    'id' => 6378,
                    'brand_id' => 7,
                    'fipe_code' => '009177-4',
                    'model' => '640i Gran Coupe 3.0 320cv 4p',
                    'years' => '2013 a 2016'
                ],
                [
                    'id' => 3929,
                    'brand_id' => 7,
                    'fipe_code' => '009111-1',
                    'model' => '645Ci Cabriolet 4.4 V8 32V 333cv',
                    'years' => '2005 a 2005'
                ],
                [
                    'id' => 212,
                    'brand_id' => 7,
                    'fipe_code' => '009103-0',
                    'model' => '645iA 4.4 V8 32V 333cv',
                    'years' => '2004 a 2005'
                ],
                [
                    'id' => 5718,
                    'brand_id' => 7,
                    'fipe_code' => '009158-8',
                    'model' => '650Ci Cabriolet 4.4 407cv Bi-Turbo',
                    'years' => '2012 a 2012'
                ],
                [
                    'id' => 4126,
                    'brand_id' => 7,
                    'fipe_code' => '009115-4',
                    'model' => '650Ci Cabriolet 4.8 V8 32V 360cv',
                    'years' => '2006 a 2012'
                ],
                [
                    'id' => 6634,
                    'brand_id' => 7,
                    'fipe_code' => '009188-0',
                    'model' => '650i Gran Coupe 4.4 V8 450cv 4p',
                    'years' => '2012 a 2016'
                ],
                [
                    'id' => 6150,
                    'brand_id' => 7,
                    'fipe_code' => '009166-9',
                    'model' => '650iA 4.4 407cv Bi-Turbo',
                    'years' => '2012 a 2012'
                ],
                [
                    'id' => 4125,
                    'brand_id' => 7,
                    'fipe_code' => '009114-6',
                    'model' => '650iA 4.8 V8 32V 360cv',
                    'years' => '2006 a 2009'
                ],
                [
                    'id' => 5057,
                    'brand_id' => 7,
                    'fipe_code' => '009141-3',
                    'model' => '650iA Limited Sport  Edition 4.8 32V',
                    'years' => '2010 a 2010'
                ],
                [
                    'id' => 213,
                    'brand_id' => 7,
                    'fipe_code' => '009048-4',
                    'model' => '730i 3.0 32V',
                    'years' => '1991 a 1992'
                ],
                [
                    'id' => 214,
                    'brand_id' => 7,
                    'fipe_code' => '009049-2',
                    'model' => '730iA 3.0 32V',
                    'years' => '1991 a 1992'
                ],
                [
                    'id' => 215,
                    'brand_id' => 7,
                    'fipe_code' => '009070-0',
                    'model' => '735i\/iA 3.5 32V',
                    'years' => '1987 a 1992'
                ],
                [
                    'id' => 216,
                    'brand_id' => 7,
                    'fipe_code' => '009011-5',
                    'model' => '740i',
                    'years' => '1992 a 1997'
                ],
                [
                    'id' => 217,
                    'brand_id' => 7,
                    'fipe_code' => '009027-1',
                    'model' => '740iA',
                    'years' => '1995 a 2001'
                ],
                [
                    'id' => 218,
                    'brand_id' => 7,
                    'fipe_code' => '009072-7',
                    'model' => '740iL\/iLA Highline 4.4 32V',
                    'years' => '1996 a 1996'
                ],
                [
                    'id' => 219,
                    'brand_id' => 7,
                    'fipe_code' => '009053-0',
                    'model' => '740iLA Protection',
                    'years' => '1999 a 2001'
                ],
                [
                    'id' => 220,
                    'brand_id' => 7,
                    'fipe_code' => '009096-4',
                    'model' => '745iA 4.4 V8 32V 333cv',
                    'years' => '2002 a 2005'
                ],
                [
                    'id' => 9961,
                    'brand_id' => 7,
                    'fipe_code' => '009257-6',
                    'model' => '745Le M Sport Sedan 3.0 V6 Aut. (Híb.)',
                    'years' => '2020 a 2022'
                ],
                [
                    'id' => 221,
                    'brand_id' => 7,
                    'fipe_code' => '009012-3',
                    'model' => '750i',
                    'years' => '1991 a 1996'
                ],
                [
                    'id' => 7147,
                    'brand_id' => 7,
                    'fipe_code' => '009211-8',
                    'model' => '750i M Sport Sedan 4.4 V8 450cv Aut.',
                    'years' => '2013 a 2015'
                ],
                [
                    'id' => 222,
                    'brand_id' => 7,
                    'fipe_code' => '009028-0',
                    'model' => '750iA',
                    'years' => '1991 a 2014'
                ],
                [
                    'id' => 223,
                    'brand_id' => 7,
                    'fipe_code' => '009071-9',
                    'model' => '750iL Highline 5.4 24V',
                    'years' => '1993 a 1998'
                ],
                [
                    'id' => 7657,
                    'brand_id' => 7,
                    'fipe_code' => '009219-3',
                    'model' => '750iL M Sport Sedan 4.4 V8 450cv Aut.',
                    'years' => '2016 a 2019'
                ],
                [
                    'id' => 8660,
                    'brand_id' => 7,
                    'fipe_code' => '009243-6',
                    'model' => '750iL Pure Excellence Sedan 4.4 V8 Aut.',
                    'years' => '2018 a 2019'
                ],
                [
                    'id' => 9962,
                    'brand_id' => 7,
                    'fipe_code' => '009154-5',
                    'model' => '750iLA 4.4 Active 7 (Híbrido)',
                    'years' => '2011 a 2012'
                ],
                [
                    'id' => 224,
                    'brand_id' => 7,
                    'fipe_code' => '009099-9',
                    'model' => '760iL 6.0 V12 445cv\/544cv',
                    'years' => '2003 a 2012'
                ],
                [
                    'id' => 225,
                    'brand_id' => 7,
                    'fipe_code' => '009050-6',
                    'model' => '840Ci',
                    'years' => '1992 a 1997'
                ],
                [
                    'id' => 226,
                    'brand_id' => 7,
                    'fipe_code' => '009051-4',
                    'model' => '840CiA',
                    'years' => '1992 a 1998'
                ],
                [
                    'id' => 227,
                    'brand_id' => 7,
                    'fipe_code' => '009077-8',
                    'model' => '850Ci\/CiA 5.0 24V',
                    'years' => '1991 a 1995'
                ],
                [
                    'id' => 228,
                    'brand_id' => 7,
                    'fipe_code' => '009078-6',
                    'model' => '850Ci\/CiA 5.4 24V',
                    'years' => '1996 a 1998'
                ],
                [
                    'id' => 229,
                    'brand_id' => 7,
                    'fipe_code' => '009076-0',
                    'model' => '850CSi 5.6 24V',
                    'years' => '1992 a 1995'
                ],
                [
                    'id' => 230,
                    'brand_id' => 7,
                    'fipe_code' => '009013-1',
                    'model' => '850i 5.0 24V',
                    'years' => '1991 a 1996'
                ],
                [
                    'id' => 8817,
                    'brand_id' => 7,
                    'fipe_code' => '009252-5',
                    'model' => 'i3 Bev 170cv Aut. (Elétrico)',
                    'years' => '2020 a 2021'
                ],
                [
                    'id' => 8818,
                    'brand_id' => 7,
                    'fipe_code' => '009253-3',
                    'model' => 'i3 Bev Connected 170cv Aut. (Elétrico)',
                    'years' => '2020 a 2021'
                ],
                [
                    'id' => 8819,
                    'brand_id' => 7,
                    'fipe_code' => '009254-1',
                    'model' => 'i3 Bev Full 170cv Aut. (Elétrico)',
                    'years' => '2020 a 2022'
                ],
                [
                    'id' => 9861,
                    'brand_id' => 7,
                    'fipe_code' => '009295-9',
                    'model' => 'i3 Bev Un. Forever 170cv Aut. (Életrico)',
                    'years' => '2022 a 2022'
                ],
                [
                    'id' => 7023,
                    'brand_id' => 7,
                    'fipe_code' => '009196-0',
                    'model' => 'i3 Rex E Drive 170cv Aut.(Elétrico)',
                    'years' => '2015 a 2020'
                ],
                [
                    'id' => 8734,
                    'brand_id' => 7,
                    'fipe_code' => '009247-9',
                    'model' => 'i3 Rex E Drive Connected Aut. (Elétrico)',
                    'years' => '2020 a 2020'
                ],
                [
                    'id' => 7024,
                    'brand_id' => 7,
                    'fipe_code' => '009195-2',
                    'model' => 'i3 Rex E Drive Full 170cv Aut.(Elétrico)',
                    'years' => '2015 a 2021'
                ],
                [
                    'id' => 10668,
                    'brand_id' => 7,
                    'fipe_code' => '009306-8',
                    'model' => 'i4 e-Drive 35 M Sport (Elétrico)',
                    'years' => '2023 a Zero Km'
                ],
                [
                    'id' => 10669,
                    'brand_id' => 7,
                    'fipe_code' => '009301-7',
                    'model' => 'i4 e-Drive 40 M Sport (Elétrico)',
                    'years' => '2023 a Zero Km'
                ],
                [
                    'id' => 10371,
                    'brand_id' => 7,
                    'fipe_code' => '009302-5',
                    'model' => 'i4 M50 (Elétrico)',
                    'years' => '2023 a Zero Km'
                ],
                [
                    'id' => 10989,
                    'brand_id' => 7,
                    'fipe_code' => '009317-3',
                    'model' => 'i5 M60 (Elétrico)',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 10824,
                    'brand_id' => 7,
                    'fipe_code' => '009313-0',
                    'model' => 'i7 XDrive 60 M Sport Aut. (Elétrico)',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 10019,
                    'brand_id' => 7,
                    'fipe_code' => '009197-9',
                    'model' => 'i8 e-Drive 1.5 TB 12V  Aut. (Híbrido)',
                    'years' => '2015 a 2020'
                ],
                [
                    'id' => 10020,
                    'brand_id' => 7,
                    'fipe_code' => '009259-2',
                    'model' => 'i8 Road. e-Drive 1.5 TB 12V Aut. (Híb.)',
                    'years' => '2019 a 2020'
                ],
                [
                    'id' => 11103,
                    'brand_id' => 7,
                    'fipe_code' => '009318-1',
                    'model' => 'iX 1 eDrive20 X-Line Aut. (Elétrico)',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 10755,
                    'brand_id' => 7,
                    'fipe_code' => '009309-2',
                    'model' => 'iX 1 xDrive 30 M Sport (Elétrico)',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 11104,
                    'brand_id' => 7,
                    'fipe_code' => '009319-0',
                    'model' => 'iX 2 xDrive 30 M Sport (Elétrico)',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 9910,
                    'brand_id' => 7,
                    'fipe_code' => '009297-5',
                    'model' => 'iX 3 M Sport Aut.(Elétrico)',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 10782,
                    'brand_id' => 7,
                    'fipe_code' => '009312-2',
                    'model' => 'iX M60 (Elétrico)',
                    'years' => '2023 a Zero Km'
                ],
                [
                    'id' => 9863,
                    'brand_id' => 7,
                    'fipe_code' => '009293-2',
                    'model' => 'iX XDrive 40 Aut. (Elétrico)',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 9864,
                    'brand_id' => 7,
                    'fipe_code' => '009296-7',
                    'model' => 'iX XDrive 50 Sport Aut. (Elétrico)',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 10784,
                    'brand_id' => 7,
                    'fipe_code' => '009178-2',
                    'model' => 'M 135i 3.0 TB 24V 320cv',
                    'years' => '2013 a 2016'
                ],
                [
                    'id' => 10785,
                    'brand_id' => 7,
                    'fipe_code' => '009261-4',
                    'model' => 'M 135i XDRIVE 2.0 TB 306cv Aut.',
                    'years' => '2020 a 2022'
                ],
                [
                    'id' => 6910,
                    'brand_id' => 7,
                    'fipe_code' => '009193-6',
                    'model' => 'M 235i Coupe 3.0 24V 326cv',
                    'years' => '2014 a 2016'
                ],
                [
                    'id' => 231,
                    'brand_id' => 7,
                    'fipe_code' => '009079-4',
                    'model' => 'M Roadster',
                    'years' => '2000 a 2000'
                ],
                [
                    'id' => 5719,
                    'brand_id' => 7,
                    'fipe_code' => '009157-0',
                    'model' => 'M1 Coupe 3.0 24V 340cv',
                    'years' => '2011 a 2012'
                ],
                [
                    'id' => 7823,
                    'brand_id' => 7,
                    'fipe_code' => '009222-3',
                    'model' => 'M140i 3.0  24V 340cv 5p',
                    'years' => '2017 a 2019'
                ],
                [
                    'id' => 8439,
                    'brand_id' => 7,
                    'fipe_code' => '009234-7',
                    'model' => 'M2 Competition 3.0 Bi-Turbo 410cv Aut.',
                    'years' => '2019 a 2021'
                ],
                [
                    'id' => 9103,
                    'brand_id' => 7,
                    'fipe_code' => '009268-1',
                    'model' => 'M2 Competition Ed. Espe. 3.0 Bi-TB Mec.',
                    'years' => '2020 a 2021'
                ],
                [
                    'id' => 10825,
                    'brand_id' => 7,
                    'fipe_code' => '009218-5',
                    'model' => 'M2 Coupe 3.0 Bi-Turbo 24V 3p',
                    'years' => '2016 a Zero Km'
                ],
                [
                    'id' => 10826,
                    'brand_id' => 7,
                    'fipe_code' => '009315-7',
                    'model' => 'M2 Coupe Track 3.0 Bi-Turbo 24V 460cv 3p',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 9339,
                    'brand_id' => 7,
                    'fipe_code' => '009276-2',
                    'model' => 'M2 CS Coupe 3.0 Bi-Turbo 450cv',
                    'years' => '2021 a 2021'
                ],
                [
                    'id' => 9104,
                    'brand_id' => 7,
                    'fipe_code' => '009270-3',
                    'model' => 'M235i XDRIVE Gran Coupé 2.0 Aut.',
                    'years' => '2020 a 2022'
                ],
                [
                    'id' => 7857,
                    'brand_id' => 7,
                    'fipe_code' => '009223-1',
                    'model' => 'M240i Coupe 3.0 24V 340cv 2p',
                    'years' => '2017 a 2018'
                ],
                [
                    'id' => 232,
                    'brand_id' => 7,
                    'fipe_code' => '009073-5',
                    'model' => 'M3 3.2 24V',
                    'years' => '1996 a 2006'
                ],
                [
                    'id' => 233,
                    'brand_id' => 7,
                    'fipe_code' => '009074-3',
                    'model' => 'M3 Cabrio 3.0 24V',
                    'years' => '1994 a 1995'
                ],
                [
                    'id' => 4919,
                    'brand_id' => 7,
                    'fipe_code' => '009134-0',
                    'model' => 'M3 Cabrio 4.0 32V',
                    'years' => '2009 a 2010'
                ],
                [
                    'id' => 9482,
                    'brand_id' => 7,
                    'fipe_code' => '009280-0',
                    'model' => 'M3 Competition M 3.0 Bi-TB 510cv',
                    'years' => '2021 a Zero Km'
                ],
                [
                    'id' => 9483,
                    'brand_id' => 7,
                    'fipe_code' => '009281-9',
                    'model' => 'M3 Competition M Track 3.0 Bi-TB',
                    'years' => '2021 a 2021'
                ],
                [
                    'id' => 234,
                    'brand_id' => 7,
                    'fipe_code' => '009014-0',
                    'model' => 'M3 Coupê 3.0 24V 255cv',
                    'years' => '1991 a 1998'
                ],
                [
                    'id' => 235,
                    'brand_id' => 7,
                    'fipe_code' => '009029-8',
                    'model' => 'M3 Coupê 3.0 V6 24V 282cv',
                    'years' => '1994 a 1995'
                ],
                [
                    'id' => 4527,
                    'brand_id' => 7,
                    'fipe_code' => '009127-8',
                    'model' => 'M3 Coupê 4.0 32V',
                    'years' => '2008 a 2013'
                ],
                [
                    'id' => 8661,
                    'brand_id' => 7,
                    'fipe_code' => '009242-8',
                    'model' => 'M3 CS Sedan 3.0 Bi-Turbo 460cv 4p',
                    'years' => '2018 a 2018'
                ],
                [
                    'id' => 7130,
                    'brand_id' => 7,
                    'fipe_code' => '009209-6',
                    'model' => 'M3 Sedan 3.0 Bi-Turbo 24V 4p',
                    'years' => '2015 a 2018'
                ],
                [
                    'id' => 4823,
                    'brand_id' => 7,
                    'fipe_code' => '009133-2',
                    'model' => 'M3 Sedan 4.0 32V',
                    'years' => '2008 a 2012'
                ],
                [
                    'id' => 9105,
                    'brand_id' => 7,
                    'fipe_code' => '009269-0',
                    'model' => 'M340i XDRIVE 3.0 Turbo Aut.',
                    'years' => '2021 a 2022'
                ],
                [
                    'id' => 9094,
                    'brand_id' => 7,
                    'fipe_code' => '009267-3',
                    'model' => 'M340i XDRIVE First Ed. 3.0 Turbo Aut.',
                    'years' => '2020 a 2020'
                ],
                [
                    'id' => 7148,
                    'brand_id' => 7,
                    'fipe_code' => '009210-0',
                    'model' => 'M4 Cabriolet 3.0 Bi-Turbo 24V 431cv 2p',
                    'years' => '2015 a 2016'
                ],
                [
                    'id' => 7116,
                    'brand_id' => 7,
                    'fipe_code' => '009206-1',
                    'model' => 'M4 Coupe 3.0 Bi-Turbo 24V 431cv 2p',
                    'years' => '2015 a 2020'
                ],
                [
                    'id' => 8314,
                    'brand_id' => 7,
                    'fipe_code' => '009230-4',
                    'model' => 'M4 CS Coupe 3.0 Bi-Turbo 460cv 2p',
                    'years' => '2018 a 2019'
                ],
                [
                    'id' => 9524,
                    'brand_id' => 7,
                    'fipe_code' => '009284-3',
                    'model' => 'M440i Coupe 3.0 TB Aut.',
                    'years' => '2022 a 2022'
                ],
                [
                    'id' => 236,
                    'brand_id' => 7,
                    'fipe_code' => '009015-8',
                    'model' => 'M5 3.8\/Touring 3.8 24V',
                    'years' => '1991 a 1995'
                ],
                [
                    'id' => 6260,
                    'brand_id' => 7,
                    'fipe_code' => '009173-1',
                    'model' => 'M5 4.4 560cv Bi-Turbo Aut.',
                    'years' => '2012 a 2015'
                ],
                [
                    'id' => 237,
                    'brand_id' => 7,
                    'fipe_code' => '009075-1',
                    'model' => 'M5 5.0 32V\/ 40V',
                    'years' => '1999 a 2010'
                ],
                [
                    'id' => 9484,
                    'brand_id' => 7,
                    'fipe_code' => '009279-7',
                    'model' => 'M5 Competition M XDRIVE 4.4 Bi-TB V8',
                    'years' => '2021 a 2022'
                ],
                [
                    'id' => 8388,
                    'brand_id' => 7,
                    'fipe_code' => '009232-0',
                    'model' => 'M5 M XDRIVE 4.4 Bi-TB V8',
                    'years' => '2019 a 2022'
                ],
                [
                    'id' => 8389,
                    'brand_id' => 7,
                    'fipe_code' => '009233-9',
                    'model' => 'M5 Perform. Pack M XDRIVE 4.4 Bi-TB V8',
                    'years' => '2019 a 2020'
                ],
                [
                    'id' => 238,
                    'brand_id' => 7,
                    'fipe_code' => '009108-1',
                    'model' => 'M6 5.0 V10 40V 507cv',
                    'years' => '2006 a 2010'
                ],
                [
                    'id' => 6460,
                    'brand_id' => 7,
                    'fipe_code' => '009181-2',
                    'model' => 'M6 Coupe 4.4 Bi-Turbo V8 32V',
                    'years' => '2013 a 2015'
                ],
                [
                    'id' => 6635,
                    'brand_id' => 7,
                    'fipe_code' => '009186-3',
                    'model' => 'M6 Gran Coupe 4.4 Bi-Turbo V8 32V 560cv',
                    'years' => '2014 a 2018'
                ],
                [
                    'id' => 8735,
                    'brand_id' => 7,
                    'fipe_code' => '009248-7',
                    'model' => 'M760Li xDrive 6.6 V12 585cv Aut.',
                    'years' => '2020 a 2022'
                ],
                [
                    'id' => 9188,
                    'brand_id' => 7,
                    'fipe_code' => '009273-8',
                    'model' => 'M8 Gran Coupé Comp.First ED. 4.4 V8 32V',
                    'years' => '2021 a 2021'
                ],
                [
                    'id' => 9525,
                    'brand_id' => 7,
                    'fipe_code' => '009283-5',
                    'model' => 'M8 Gran Coupé Competition 4.4 V8 32V',
                    'years' => '2022 a 2022'
                ],
                [
                    'id' => 8736,
                    'brand_id' => 7,
                    'fipe_code' => '009246-0',
                    'model' => 'M850i XDrive Coupé 4.4 V8 530cv Aut.',
                    'years' => '2019 a 2020'
                ],
                [
                    'id' => 5269,
                    'brand_id' => 7,
                    'fipe_code' => '009145-6',
                    'model' => 'X1 SDRIVE 18i 2.0 16V 4x2 Aut.',
                    'years' => '2010 a 2014'
                ],
                [
                    'id' => 10414,
                    'brand_id' => 7,
                    'fipe_code' => '009304-1',
                    'model' => 'X1 SDRIVE 18i GP 1.5 TB Aut.',
                    'years' => '2023 a Zero Km'
                ],
                [
                    'id' => 6230,
                    'brand_id' => 7,
                    'fipe_code' => '009172-3',
                    'model' => 'X1 SDRIVE 20i 2.0\/2.0 TB Acti.Flex Aut.',
                    'years' => '2012 a 2022'
                ],
                [
                    'id' => 9226,
                    'brand_id' => 7,
                    'fipe_code' => '009275-4',
                    'model' => 'X1 SDRIVE 20i M S. 2.0 25 Anos TB Flex',
                    'years' => '2021 a 2021'
                ],
                [
                    'id' => 10415,
                    'brand_id' => 7,
                    'fipe_code' => '009305-0',
                    'model' => 'X1 SDRIVE 20i M Sport 2.0 TB Aut.',
                    'years' => '2023 a Zero Km'
                ],
                [
                    'id' => 9682,
                    'brand_id' => 7,
                    'fipe_code' => '009288-6',
                    'model' => 'X1 SDRIVE 20i M Sport 2.0 TB Flex Aut.',
                    'years' => '2022 a 2022'
                ],
                [
                    'id' => 10115,
                    'brand_id' => 7,
                    'fipe_code' => '009300-9',
                    'model' => 'X1 SDRIVE 20i Outdoor 2.0.Flex Aut.',
                    'years' => '2022 a 2022'
                ],
                [
                    'id' => 8570,
                    'brand_id' => 7,
                    'fipe_code' => '009239-8',
                    'model' => 'X1 SDRIVE 20i X-Line 2.0 TB Active Flex',
                    'years' => '2015 a 2022'
                ],
                [
                    'id' => 10416,
                    'brand_id' => 7,
                    'fipe_code' => '009303-3',
                    'model' => 'X1 SDRIVE 20i X-Line 2.0 TB Aut.',
                    'years' => '2023 a Zero Km'
                ],
                [
                    'id' => 7449,
                    'brand_id' => 7,
                    'fipe_code' => '009216-9',
                    'model' => 'X1 XDRIVE 25i Sport 2.0\/2.0 Flex Aut.',
                    'years' => '2016 a 2022'
                ],
                [
                    'id' => 6151,
                    'brand_id' => 7,
                    'fipe_code' => '009167-7',
                    'model' => 'X1 XDRIVE 28i 2.0 Turbo 16V 4x4 Aut.',
                    'years' => '2012 a 2014'
                ],
                [
                    'id' => 5158,
                    'brand_id' => 7,
                    'fipe_code' => '009142-1',
                    'model' => 'X1 XDRIVE 28i 3.0 24V 4x4 Aut.',
                    'years' => '2010 a 2012'
                ],
                [
                    'id' => 7086,
                    'brand_id' => 7,
                    'fipe_code' => '009200-2',
                    'model' => 'X1 XDRIVE 28i Sport 2.0 ActiveFlex Aut.',
                    'years' => '2015 a 2015'
                ],
                [
                    'id' => 8820,
                    'brand_id' => 7,
                    'fipe_code' => '009255-0',
                    'model' => 'X2 M35i 2.0 Turbo 306cv Aut.',
                    'years' => '2019 a 2020'
                ],
                [
                    'id' => 8277,
                    'brand_id' => 7,
                    'fipe_code' => '009229-0',
                    'model' => 'X2 SDRIVE  20i M Sp\/M Sp 2.0 TB Flex Aut',
                    'years' => '2018 a 2020'
                ],
                [
                    'id' => 8510,
                    'brand_id' => 7,
                    'fipe_code' => '009235-5',
                    'model' => 'X2 SDRIVE 18i 1.5 ActiveFlex 136cv Aut.',
                    'years' => '2019 a 2022'
                ],
                [
                    'id' => 8338,
                    'brand_id' => 7,
                    'fipe_code' => '009231-2',
                    'model' => 'X2 SDRIVE 20i 2.0\/2.0 TB A. Flex 16V Aut',
                    'years' => '2019 a 2022'
                ],
                [
                    'id' => 11112,
                    'brand_id' => 7,
                    'fipe_code' => '009320-3',
                    'model' => 'X2 XDrive20i M Sport',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 239,
                    'brand_id' => 7,
                    'fipe_code' => '009104-9',
                    'model' => 'X3 Family 2.5 24V 192cv\/ 218cv',
                    'years' => '2004 a 2009'
                ],
                [
                    'id' => 240,
                    'brand_id' => 7,
                    'fipe_code' => '009101-4',
                    'model' => 'X3 Family 3.0 24V 231cv',
                    'years' => '2004 a 2006'
                ],
                [
                    'id' => 8842,
                    'brand_id' => 7,
                    'fipe_code' => '009256-8',
                    'model' => 'X3 M Competition 3.0 Bi-TB 510cv Aut.',
                    'years' => '2020 a 2021'
                ],
                [
                    'id' => 9881,
                    'brand_id' => 7,
                    'fipe_code' => '009294-0',
                    'model' => 'X3 M40i 3.0 M Sport Edit. V6 Turbo Aut.',
                    'years' => '2022 a 2022'
                ],
                [
                    'id' => 9797,
                    'brand_id' => 7,
                    'fipe_code' => '009227-4',
                    'model' => 'X3 M40i 3.0 Turbo V6  Aut.',
                    'years' => '2018 a Zero Km'
                ],
                [
                    'id' => 4241,
                    'brand_id' => 7,
                    'fipe_code' => '009118-9',
                    'model' => 'X3 Sport 2.5 24V 192cv\/ 218cv',
                    'years' => '2006 a 2010'
                ],
                [
                    'id' => 241,
                    'brand_id' => 7,
                    'fipe_code' => '009100-6',
                    'model' => 'X3 Sport 3.0 24V 231cv',
                    'years' => '2004 a 2010'
                ],
                [
                    'id' => 6417,
                    'brand_id' => 7,
                    'fipe_code' => '009180-4',
                    'model' => 'X3 XDRIVE 20i 2.0\/X-Line Bi-TB Flex Aut.',
                    'years' => '2012 a 2021'
                ],
                [
                    'id' => 6294,
                    'brand_id' => 7,
                    'fipe_code' => '009175-8',
                    'model' => 'X3 XDRIVE 28i 2.0 Turbo 245cv Aut.',
                    'years' => '2013 a 2015'
                ],
                [
                    'id' => 5608,
                    'brand_id' => 7,
                    'fipe_code' => '009156-1',
                    'model' => 'X3 XDRIVE 28i 3.0 258cv',
                    'years' => '2011 a 2012'
                ],
                [
                    'id' => 10075,
                    'brand_id' => 7,
                    'fipe_code' => '009287-8',
                    'model' => 'X3 XDRIVE 30e M SP Launch Ed. TB (Híb.)',
                    'years' => '2022 a 2022'
                ],
                [
                    'id' => 10076,
                    'brand_id' => 7,
                    'fipe_code' => '009286-0',
                    'model' => 'X3 XDRIVE 30e M Sport Turbo Aut. (Híb.)',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 10077,
                    'brand_id' => 7,
                    'fipe_code' => '009271-1',
                    'model' => 'X3 XDRIVE 30e Turbo Aut. (Híbrido)',
                    'years' => '2021 a 2021'
                ],
                [
                    'id' => 10078,
                    'brand_id' => 7,
                    'fipe_code' => '009272-0',
                    'model' => 'X3 XDRIVE 30e X-Line Turbo Aut. (Híb.)',
                    'years' => '2021 a Zero Km'
                ],
                [
                    'id' => 8233,
                    'brand_id' => 7,
                    'fipe_code' => '009228-2',
                    'model' => 'X3 XDRIVE 30i X-Line 2.0 Turbo 252cv Aut',
                    'years' => '2018 a 2021'
                ],
                [
                    'id' => 5497,
                    'brand_id' => 7,
                    'fipe_code' => '009151-0',
                    'model' => 'X3 XDRIVE 35i\/M-Sport 3.0 306cv Bi-Turbo',
                    'years' => '2011 a 2017'
                ],
                [
                    'id' => 8985,
                    'brand_id' => 7,
                    'fipe_code' => '009260-6',
                    'model' => 'X4 M Competition 3.0 Bi-TB 510cv Aut.',
                    'years' => '2020 a 2021'
                ],
                [
                    'id' => 10871,
                    'brand_id' => 7,
                    'fipe_code' => '009292-4',
                    'model' => 'X4 M40i 3.0 M Sport EditionTurbo Aut.',
                    'years' => '2022 a 2022'
                ],
                [
                    'id' => 9927,
                    'brand_id' => 7,
                    'fipe_code' => '009237-1',
                    'model' => 'X4 M40i 3.0 Turbo 388cv Aut.',
                    'years' => '2019 a Zero Km'
                ],
                [
                    'id' => 7065,
                    'brand_id' => 7,
                    'fipe_code' => '009198-7',
                    'model' => 'X4 XDRIVE 28i X-Line 2.0 Turbo 245cv Aut',
                    'years' => '2015 a 2018'
                ],
                [
                    'id' => 10872,
                    'brand_id' => 7,
                    'fipe_code' => '009236-3',
                    'model' => 'X4 XDRIVE 30i M-Sport 2.0 TB 252cv Aut',
                    'years' => '2019 a Zero Km'
                ],
                [
                    'id' => 7066,
                    'brand_id' => 7,
                    'fipe_code' => '009199-5',
                    'model' => 'X4 XDRIVE 35i M-Sport 3.0 TB 306cv Aut.',
                    'years' => '2015 a 2017'
                ],
                [
                    'id' => 242,
                    'brand_id' => 7,
                    'fipe_code' => '009081-6',
                    'model' => 'X5 3.0 4x4',
                    'years' => '2001 a 2010'
                ],
                [
                    'id' => 243,
                    'brand_id' => 7,
                    'fipe_code' => '009082-4',
                    'model' => 'X5 4.4 4x4',
                    'years' => '2000 a 2003'
                ],
                [
                    'id' => 244,
                    'brand_id' => 7,
                    'fipe_code' => '009107-3',
                    'model' => 'X5 4.8 4x4 V8 32V 360cv',
                    'years' => '2004 a 2008'
                ],
                [
                    'id' => 4585,
                    'brand_id' => 7,
                    'fipe_code' => '009128-6',
                    'model' => 'X5 Endurance 4.8is 4x4 V8 32V 355cv Aut.',
                    'years' => '2008 a 2010'
                ],
                [
                    'id' => 5188,
                    'brand_id' => 7,
                    'fipe_code' => '009143-0',
                    'model' => 'X5 M 4.4 4x4 V8 32V Bi-Turbo Aut.',
                    'years' => '2010 a 2018'
                ],
                [
                    'id' => 9535,
                    'brand_id' => 7,
                    'fipe_code' => '009282-7',
                    'model' => 'X5 M Competition 4.4 V8 Bi-TB Aut.',
                    'years' => '2021 a 2022'
                ],
                [
                    'id' => 4242,
                    'brand_id' => 7,
                    'fipe_code' => '009119-7',
                    'model' => 'X5 Security 4.4 4x4 V8 32V',
                    'years' => '2005 a 2006'
                ],
                [
                    'id' => 5020,
                    'brand_id' => 7,
                    'fipe_code' => '009140-5',
                    'model' => 'X5 Security 4.8is 4x4 V8 32V 355cv Aut.',
                    'years' => '2009 a 2010'
                ],
                [
                    'id' => 245,
                    'brand_id' => 7,
                    'fipe_code' => '009095-6',
                    'model' => 'X5 Sport 4.4 4x4 V8 32V',
                    'years' => '2001 a 2006'
                ],
                [
                    'id' => 4331,
                    'brand_id' => 7,
                    'fipe_code' => '009123-5',
                    'model' => 'X5 Sport 4.8 4x4 V8 32V 355cv',
                    'years' => '2006 a 2010'
                ],
                [
                    'id' => 7283,
                    'brand_id' => 7,
                    'fipe_code' => '009214-2',
                    'model' => 'X5 XDRIVE 30d 3.0 Diesel',
                    'years' => '2015 a 2020'
                ],
                [
                    'id' => 7087,
                    'brand_id' => 7,
                    'fipe_code' => '009205-3',
                    'model' => 'X5 XDRIVE 30d Full 3.0 258cv Diesel',
                    'years' => '2015 a 2015'
                ],
                [
                    'id' => 8662,
                    'brand_id' => 7,
                    'fipe_code' => '009241-0',
                    'model' => 'X5 XDRIVE 30d M Sport 3.0 265cv Dies Aut',
                    'years' => '2019 a 2020'
                ],
                [
                    'id' => 5356,
                    'brand_id' => 7,
                    'fipe_code' => '009149-9',
                    'model' => 'X5 XDRIVE 35i 3.0 306cv Bi-Turbo',
                    'years' => '2011 a 2015'
                ],
                [
                    'id' => 6911,
                    'brand_id' => 7,
                    'fipe_code' => '009192-8',
                    'model' => 'X5 XDRIVE 35i Full 3.0 306cv Bi-Turbo',
                    'years' => '2014 a 2017'
                ],
                [
                    'id' => 10079,
                    'brand_id' => 7,
                    'fipe_code' => '009262-2',
                    'model' => 'X5 XDRIVE 45e 3.0 M.Sport  Aut. (Híb.)',
                    'years' => '2020 a 2023'
                ],
                [
                    'id' => 10765,
                    'brand_id' => 7,
                    'fipe_code' => '009307-6',
                    'model' => 'X5 XDRIVE 50e 3.0 M Sport Aut. (Hibrido)',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 10766,
                    'brand_id' => 7,
                    'fipe_code' => '009308-4',
                    'model' => 'X5 XDRIVE 50e 3.0 X-Line Aut. (Hibrido)',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 5357,
                    'brand_id' => 7,
                    'fipe_code' => '009150-2',
                    'model' => 'X5 XDRIVE 50i 4.4  Bi-Turbo',
                    'years' => '2011 a 2015'
                ],
                [
                    'id' => 6710,
                    'brand_id' => 7,
                    'fipe_code' => '009191-0',
                    'model' => 'X5 XDRIVE 50i M Sport 4.4 Bi-Turbo',
                    'years' => '2014 a 2015'
                ],
                [
                    'id' => 5590,
                    'brand_id' => 7,
                    'fipe_code' => '009153-7',
                    'model' => 'X5 XDRIVE 50i Security 4.4 Bi-Turbo',
                    'years' => '2011 a 2016'
                ],
                [
                    'id' => 7117,
                    'brand_id' => 7,
                    'fipe_code' => '009207-0',
                    'model' => 'X5 XDRIVE M50d 3.0 Diesel',
                    'years' => '2015 a 2020'
                ],
                [
                    'id' => 9206,
                    'brand_id' => 7,
                    'fipe_code' => '009274-6',
                    'model' => 'X5 XDRIVE M50i 4.4 Bi-Turbo Aut.',
                    'years' => '2021 a 2021'
                ],
                [
                    'id' => 5189,
                    'brand_id' => 7,
                    'fipe_code' => '009144-8',
                    'model' => 'X6 M 4.4 4x4 V8 32V Bi-Turbo Aut.',
                    'years' => '2010 a 2021'
                ],
                [
                    'id' => 10788,
                    'brand_id' => 7,
                    'fipe_code' => '009311-4',
                    'model' => 'X6 M Competition 4.4 V8 BI-TB (Hib) Aut.',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 9565,
                    'brand_id' => 7,
                    'fipe_code' => '009285-1',
                    'model' => 'X6 M Competition 4.4 V8 BI-TB 625CV Aut.',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 4745,
                    'brand_id' => 7,
                    'fipe_code' => '009131-6',
                    'model' => 'X6 XDRIVE 35i 3.0 306cv Bi-Turbo',
                    'years' => '2008 a 2019'
                ],
                [
                    'id' => 9883,
                    'brand_id' => 7,
                    'fipe_code' => '009291-6',
                    'model' => 'X6 XDRIVE 40i Bl.Vermillion 3.0 Bi-Turbo',
                    'years' => '2022 a 2022'
                ],
                [
                    'id' => 10767,
                    'brand_id' => 7,
                    'fipe_code' => '009310-6',
                    'model' => 'X6 XDRIVE 40i M Sport 3.0 Bi-TB (Hib.)',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 9037,
                    'brand_id' => 7,
                    'fipe_code' => '009263-0',
                    'model' => 'X6 XDRIVE 40i M Sport 3.0 Bi-Turbo',
                    'years' => '2020 a Zero Km'
                ],
                [
                    'id' => 4746,
                    'brand_id' => 7,
                    'fipe_code' => '009132-4',
                    'model' => 'X6 XDRIVE 50i 4.4 407cv Bi-Turbo',
                    'years' => '2008 a 2015'
                ],
                [
                    'id' => 7088,
                    'brand_id' => 7,
                    'fipe_code' => '009204-5',
                    'model' => 'X6 XDRIVE 50i M Sport 4.4 Bi-Turbo',
                    'years' => '2015 a 2016'
                ],
                [
                    'id' => 9038,
                    'brand_id' => 7,
                    'fipe_code' => '009265-7',
                    'model' => 'X7 M50i 4.4 V8 Bi-TB Aut.',
                    'years' => '2020 a 2022'
                ],
                [
                    'id' => 9362,
                    'brand_id' => 7,
                    'fipe_code' => '009277-0',
                    'model' => 'X7 M50i Dark Shadow 4.4 V8 Bi-TB Aut.',
                    'years' => '2021 a 2021'
                ],
                [
                    'id' => 10893,
                    'brand_id' => 7,
                    'fipe_code' => '009316-5',
                    'model' => 'X7 M60i 4.4 V8 Bi-TB Aut.(Híbrido)',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 8776,
                    'brand_id' => 7,
                    'fipe_code' => '009250-9',
                    'model' => 'X7 XDRIVE 50i M Sport 4.4 V8 Bi-TB Aut.',
                    'years' => '2019 a 2020'
                ],
                [
                    'id' => 246,
                    'brand_id' => 7,
                    'fipe_code' => '009020-4',
                    'model' => 'Z3 2.8 Aut.',
                    'years' => '1997 a 2000'
                ],
                [
                    'id' => 247,
                    'brand_id' => 7,
                    'fipe_code' => '009019-0',
                    'model' => 'Z3 2.8 Mec.',
                    'years' => '1997 a 2001'
                ],
                [
                    'id' => 248,
                    'brand_id' => 7,
                    'fipe_code' => '009085-9',
                    'model' => 'Z3 3.0 24V Roadster 2p',
                    'years' => '2001 a 2002'
                ],
                [
                    'id' => 249,
                    'brand_id' => 7,
                    'fipe_code' => '009016-6',
                    'model' => 'Z3 Roadster 1.9 Mec.',
                    'years' => '1996 a 1999'
                ],
                [
                    'id' => 4887,
                    'brand_id' => 7,
                    'fipe_code' => '009021-2',
                    'model' => 'Z3 Roadster 2.8',
                    'years' => '1997 a 2000'
                ],
                [
                    'id' => 250,
                    'brand_id' => 7,
                    'fipe_code' => '009018-2',
                    'model' => 'Z3 Roadster M 3.2',
                    'years' => '1997 a 2002'
                ],
                [
                    'id' => 4243,
                    'brand_id' => 7,
                    'fipe_code' => '009121-9',
                    'model' => 'Z4 Coupé M 3.2 V6 24V 343cv',
                    'years' => '2007 a 2008'
                ],
                [
                    'id' => 8777,
                    'brand_id' => 7,
                    'fipe_code' => '009249-5',
                    'model' => 'Z4 M40i 3.0 340cv Aut.',
                    'years' => '2019 a 2022'
                ],
                [
                    'id' => 4185,
                    'brand_id' => 7,
                    'fipe_code' => '009116-2',
                    'model' => 'Z4 Roadster 2.0 150cv 2p',
                    'years' => '2007 a 2009'
                ],
                [
                    'id' => 251,
                    'brand_id' => 7,
                    'fipe_code' => '009097-2',
                    'model' => 'Z4 Roadster 3.0 V6 24V Aut.',
                    'years' => '2003 a 2008'
                ],
                [
                    'id' => 4244,
                    'brand_id' => 7,
                    'fipe_code' => '009120-0',
                    'model' => 'Z4 Roadster M 3.2 V6 24V 343cv',
                    'years' => '2007 a 2008'
                ],
                [
                    'id' => 6261,
                    'brand_id' => 7,
                    'fipe_code' => '009174-0',
                    'model' => 'Z4 Roadster sDRIVE 20i 2.0 16V 2p Aut.',
                    'years' => '2012 a 2016'
                ],
                [
                    'id' => 4996,
                    'brand_id' => 7,
                    'fipe_code' => '009138-3',
                    'model' => 'Z4 Roadster sDRIVE 23i 2.5 24V 204cv 2p',
                    'years' => '2010 a 2012'
                ],
                [
                    'id' => 8689,
                    'brand_id' => 7,
                    'fipe_code' => '009245-2',
                    'model' => 'Z4 Roadster sDRIVE 30i MSport 2.0 TB Aut',
                    'years' => '2019 a 2022'
                ],
                [
                    'id' => 4997,
                    'brand_id' => 7,
                    'fipe_code' => '009139-1',
                    'model' => 'Z4 Roadster sDRIVE 35i 3.0 24V 306cv 2p',
                    'years' => '2009 a 2014'
                ],
                [
                    'id' => 252,
                    'brand_id' => 7,
                    'fipe_code' => '009098-0',
                    'model' => 'Z4 Roadster Sport 3.0 24V 231cv Aut.',
                    'years' => '2003 a 2003'
                ],
                [
                    'id' => 253,
                    'brand_id' => 7,
                    'fipe_code' => '009090-5',
                    'model' => 'Z8 5.0 V8',
                    'years' => '2001 a 2001'
                ]
            ]
        ];

        $brmModels = [
            [
                'id' => 255,
                'brand_id' => 8, // ID da marca BRM
                'fipe_code' => '039002-0',
                'model' => 'Buggy W. Turing/Luxo/M-11 Absolut 1.6 8V',
                'years' => '2005 a 2021'
            ],
            [
                'id' => 254,
                'brand_id' => 8, // ID da marca BRM
                'fipe_code' => '039001-1',
                'model' => 'Buggy/M-8/M-8 Long 1.6',
                'years' => '1985 a 2023'
            ]
        ];

        $cadilacModels = [
            [
                'id' => 258,
                'brand_id' => 10, // ID da marca Cadillac
                'fipe_code' => '041001-2',
                'model' => 'Deville/Eldorado 4.9',
                'years' => '1991 a 1995'
            ],
            [
                'id' => 259,
                'brand_id' => 10, // ID da marca Cadillac
                'fipe_code' => '041002-0',
                'model' => 'Seville 4.6',
                'years' => '1991 a 1996'
            ]
        ];


        $cbtJipeModels = [
            [
                'id' => 260,
                'brand_id' => 11, // ID da marca CBT Jipe
                'fipe_code' => '042001-8',
                'model' => 'Javali 3.0 4x4 Diesel',
                'years' => '1988 a 1995'
            ]
        ];

        $chryslerModels = [
            [
                'id' => 4528,
                'brand_id' => 12, // ID da marca Chrysler
                'fipe_code' => '010029-3',
                'model' => '300 C 3.5 V6 249cv',
                'years' => '2007 a 2009'
            ],
            [
                'id' => 5878,
                'brand_id' => 12,
                'fipe_code' => '010033-1',
                'model' => '300 C 3.6 V6 Aut.',
                'years' => '2012 a 2016'
            ],
            [
                'id' => 3881,
                'brand_id' => 12,
                'fipe_code' => '010024-2',
                'model' => '300 C 5.7 V8 16V 340cv Aut.',
                'years' => '2005 a 2009'
            ],
            [
                'id' => 4186,
                'brand_id' => 12,
                'fipe_code' => '010027-7',
                'model' => '300 C SRT8 6.1 V8 16V 431cv Aut',
                'years' => '2006 a 2010'
            ],
            [
                'id' => 4158,
                'brand_id' => 12,
                'fipe_code' => '010026-9',
                'model' => '300 C Touring 5.7 V8 16V 340cv Aut.',
                'years' => '2005 a 2009'
            ],
            [
                'id' => 261,
                'brand_id' => 12,
                'fipe_code' => '010014-5',
                'model' => '300 M 3.5',
                'years' => '1998 a 2001'
            ],
            [
                'id' => 262,
                'brand_id' => 12,
                'fipe_code' => '010008-0',
                'model' => 'Caravan LE  3.3',
                'years' => '1993 a 2000'
            ],
            [
                'id' => 3811,
                'brand_id' => 12,
                'fipe_code' => '010023-4',
                'model' => 'Caravan LX 3.3 V6 182cv',
                'years' => '2005 a 2007'
            ],
            [
                'id' => 263,
                'brand_id' => 12,
                'fipe_code' => '010009-9',
                'model' => 'Caravan LX 3.8',
                'years' => '1997 a 1999'
            ],
            [
                'id' => 264,
                'brand_id' => 12,
                'fipe_code' => '010001-3',
                'model' => 'Caravan SE 2.4/3.3',
                'years' => '1993 a 2001'
            ],
            [
                'id' => 265,
                'brand_id' => 12,
                'fipe_code' => '010015-3',
                'model' => 'Cirrus LXi 2.5 V6 24V',
                'years' => '1995 a 1995'
            ],
            [
                'id' => 267,
                'brand_id' => 12,
                'fipe_code' => '010007-2',
                'model' => 'Grand Caravan LE 3.3 Aut',
                'years' => '1993 a 2001'
            ],
            [
                'id' => 268,
                'brand_id' => 12,
                'fipe_code' => '010021-8',
                'model' => 'Grand Caravan Limited 3.3 V6 12V 182cv',
                'years' => '2002 a 2007'
            ],
            [
                'id' => 269,
                'brand_id' => 12,
                'fipe_code' => '010010-2',
                'model' => 'Grand Caravan LX 3.8',
                'years' => '1998 a 2001'
            ],
            [
                'id' => 266,
                'brand_id' => 12,
                'fipe_code' => '010016-1',
                'model' => 'Grand Caravan SE 3.3 V6',
                'years' => '1993 a 2006'
            ],
            [
                'id' => 270,
                'brand_id' => 12,
                'fipe_code' => '010017-0',
                'model' => 'LE Baron 3.0 V6',
                'years' => '1992 a 1993'
            ],
            [
                'id' => 271,
                'brand_id' => 12,
                'fipe_code' => '010018-8',
                'model' => 'LE Baron 3.0 V6 Conv.',
                'years' => '1992 a 1995'
            ],
            [
                'id' => 272,
                'brand_id' => 12,
                'fipe_code' => '010011-0',
                'model' => 'Neon LE 1.8',
                'years' => '1997 a 1999'
            ],
            [
                'id' => 273,
                'brand_id' => 12,
                'fipe_code' => '010002-1',
                'model' => 'Neon LE/Highline 2.0',
                'years' => '1994 a 2001'
            ],
            [
                'id' => 274,
                'brand_id' => 12,
                'fipe_code' => '010012-9',
                'model' => 'Neon Sport 1.8/2.0',
                'years' => '1994 a 1999'
            ],
            [
                'id' => 4255,
                'brand_id' => 12,
                'fipe_code' => '010028-5',
                'model' => 'PT Cruiser Cabrio 2.4 16V 143cv 2p',
                'years' => '2006 a 2007'
            ],
            [
                'id' => 3882,
                'brand_id' => 12,
                'fipe_code' => '010025-0',
                'model' => 'PT Cruiser Classic 2.4 16V 143cv 4p',
                'years' => '2006 a 2009'
            ],
            [
                'id' => 275,
                'brand_id' => 12,
                'fipe_code' => '010019-6',
                'model' => 'PT Cruiser Limited 2.0 16V 4p',
                'years' => '2001 a 2004'
            ],
            [
                'id' => 276,
                'brand_id' => 12,
                'fipe_code' => '010022-6',
                'model' => 'PT Cruiser Limited 2.4 16V 143cv 4p',
                'years' => '2005 a 2009'
            ],
            [
                'id' => 5237,
                'brand_id' => 12,
                'fipe_code' => '010031-5',
                'model' => 'PT Cruiser Touring DEC. EDITION 2.4 16V',
                'years' => '2010 a 2010'
            ],
            [
                'id' => 277,
                'brand_id' => 12,
                'fipe_code' => '010020-0',
                'model' => 'Sebring LX 2.7 V6 24V 204cv',
                'years' => '2001 a 2003'
            ],
            [
                'id' => 278,
                'brand_id' => 12,
                'fipe_code' => '010003-0',
                'model' => 'Stratus LE 2.0',
                'years' => '1996 a 2001'
            ],
            [
                'id' => 279,
                'brand_id' => 12,
                'fipe_code' => '010004-8',
                'model' => 'Stratus LX 2.0 Mec',
                'years' => '1996 a 1998'
            ],
            [
                'id' => 280,
                'brand_id' => 12,
                'fipe_code' => '010005-6',
                'model' => 'Stratus LX 2.5 Aut',
                'years' => '1995 a 2000'
            ],
            [
                'id' => 281,
                'brand_id' => 12,
                'fipe_code' => '010006-4',
                'model' => 'Stratus LX 2.5 Conversível Aut',
                'years' => '1996 a 1999'
            ],
            [
                'id' => 4623,
                'brand_id' => 12,
                'fipe_code' => '010030-7',
                'model' => 'TOWN & COUNTRY Limited 3.8 /3.6 V6 Aut.',
                'years' => '2008 a 2015'
            ],
            [
                'id' => 5720,
                'brand_id' => 12,
                'fipe_code' => '010032-3',
                'model' => 'TOWN & COUNTRY Touring 3.6 V6 Aut.',
                'years' => '2012 a 2014'
            ],
            [
                'id' => 282,
                'brand_id' => 12,
                'fipe_code' => '010013-7',
                'model' => 'Vision 3.5 24V',
                'years' => '1994 a 1995'
            ]
        ];


        $citroenModels = [
            [
                [
                    'id' => 8737,
                    'brand_id' => 13,
                    'fipe_code' => '011205-4',
                    'model' => 'AIRCROSS 100 Anos 1.6 Flex 16V Aut.',
                    'years' => '2020 a 2020'
                ],
                [
                    'id' => 8045,
                    'brand_id' => 13,
                    'fipe_code' => '011184-8',
                    'model' => 'AIRCROSS BUSINESS 1.6 Flex 16V 5p Mec.',
                    'years' => '2017 a 2017'
                ],
                [
                    'id' => 6418,
                    'brand_id' => 13,
                    'fipe_code' => '011126-0',
                    'model' => 'AIRCROSS Exc. ATACA. 1.6 Flex 16V 5p Aut',
                    'years' => '2013 a 2014'
                ],
                [
                    'id' => 6419,
                    'brand_id' => 13,
                    'fipe_code' => '011122-8',
                    'model' => 'AIRCROSS Exc. ATACA. 1.6 Flex 16V 5p Mec',
                    'years' => '2013 a 2014'
                ],
                [
                    'id' => 5609,
                    'brand_id' => 13,
                    'fipe_code' => '011109-0',
                    'model' => 'AIRCROSS Exclusive 1.6 Flex 16V 5p Aut.',
                    'years' => '2011 a 2015'
                ],
                [
                    'id' => 5337,
                    'brand_id' => 13,
                    'fipe_code' => '011103-1',
                    'model' => 'AIRCROSS Exclusive 1.6 Flex 16V 5p Mec.',
                    'years' => '2011 a 2015'
                ],
                [
                    'id' => 7420,
                    'brand_id' => 13,
                    'fipe_code' => '011164-3',
                    'model' => 'AIRCROSS Feel 1.6 Flex 16V 5p Aut.',
                    'years' => '2016 a 2018'
                ],
                [
                    'id' => 7421,
                    'brand_id' => 13,
                    'fipe_code' => '011165-1',
                    'model' => 'AIRCROSS Feel 1.6 Flex 16V 5p Mec.',
                    'years' => '2016 a 2018'
                ],
                [
                    'id' => 5338,
                    'brand_id' => 13,
                    'fipe_code' => '011101-5',
                    'model' => 'AIRCROSS GL 1.6 Flex 16V 5p Mec.',
                    'years' => '2011 a 2012'
                ],
                [
                    'id' => 5610,
                    'brand_id' => 13,
                    'fipe_code' => '011108-2',
                    'model' => 'AIRCROSS GLX 1.6 Flex 16V 5p Aut.',
                    'years' => '2011 a 2014'
                ],
                [
                    'id' => 5339,
                    'brand_id' => 13,
                    'fipe_code' => '011102-3',
                    'model' => 'AIRCROSS GLX 1.6 Flex 16V 5p Mec.',
                    'years' => '2011 a 2014'
                ],
                [
                    'id' => 6420,
                    'brand_id' => 13,
                    'fipe_code' => '011124-4',
                    'model' => 'AIRCROSS GLX ATACAMA 1.6 Flex 16V 5p Aut',
                    'years' => '2013 a 2014'
                ],
                [
                    'id' => 6421,
                    'brand_id' => 13,
                    'fipe_code' => '011123-6',
                    'model' => 'AIRCROSS GLX ATACAMA 1.6 Flex 16V 5p Mec',
                    'years' => '2013 a 2014'
                ],
                [
                    'id' => 7422,
                    'brand_id' => 13,
                    'fipe_code' => '011162-7',
                    'model' => 'AIRCROSS Live 1.5 Flex 8V 5p Mec.',
                    'years' => '2016 a 2018'
                ],
                [
                    'id' => 7423,
                    'brand_id' => 13,
                    'fipe_code' => '011163-5',
                    'model' => 'AIRCROSS Live 1.6 Flex 16V 5p Aut.',
                    'years' => '2016 a 2021'
                ],
                [
                    'id' => 7962,
                    'brand_id' => 13,
                    'fipe_code' => '011180-5',
                    'model' => 'AIRCROSS Live 1.6 Flex 16V 5p Mec.',
                    'years' => '2018 a 2020'
                ],
                [
                    'id' => 9585,
                    'brand_id' => 13,
                    'fipe_code' => '011191-0',
                    'model' => 'AIRCROSS Live Bus. 1.6 Flex 5p Aut.',
                    'years' => '2019 a 2020'
                ],
                [
                    'id' => 7903,
                    'brand_id' => 13,
                    'fipe_code' => '011179-1',
                    'model' => 'AIRCROSS SALOMON 1.5 Flex 8V 5p Mec.',
                    'years' => '2017 a 2017'
                ],
                [
                    'id' => 7897,
                    'brand_id' => 13,
                    'fipe_code' => '011178-3',
                    'model' => 'AIRCROSS SALOMON 1.6 Flex 16V 5p Aut.',
                    'years' => '2017 a 2017'
                ],
                [
                    'id' => 7090,
                    'brand_id' => 13,
                    'fipe_code' => '011153-8',
                    'model' => 'AIRCROSS SALOMON EXCLUSIVE 1.6 Flex Aut.',
                    'years' => '2015 a 2015'
                ],
                [
                    'id' => 7091,
                    'brand_id' => 13,
                    'fipe_code' => '011152-0',
                    'model' => 'AIRCROSS SALOMON EXCLUSIVE 1.6 Flex Mec.',
                    'years' => '2015 a 2015'
                ],
                [
                    'id' => 7092,
                    'brand_id' => 13,
                    'fipe_code' => '011150-3',
                    'model' => 'AIRCROSS SALOMON TENDANCE 1.6 Flex Aut.',
                    'years' => '2015 a 2015'
                ],
                [
                    'id' => 7093,
                    'brand_id' => 13,
                    'fipe_code' => '011151-1',
                    'model' => 'AIRCROSS SALOMON TENDANCE 1.6 Flex Mec.',
                    'years' => '2015 a 2015'
                ],
                [
                    'id' => 7424,
                    'brand_id' => 13,
                    'fipe_code' => '011166-0',
                    'model' => 'AIRCROSS Shine 1.6 Flex 16V 5p Aut.',
                    'years' => '2016 a 2019'
                ],
                [
                    'id' => 7425,
                    'brand_id' => 13,
                    'fipe_code' => '011161-9',
                    'model' => 'AIRCROSS Start 1.5 Flex 8V 5p Mec.',
                    'years' => '2016 a 2017'
                ],
                [
                    'id' => 7963,
                    'brand_id' => 13,
                    'fipe_code' => '011182-1',
                    'model' => 'AIRCROSS Start 1.6 Flex 16V 5p Mec.',
                    'years' => '2018 a 2020'
                ],
                [
                    'id' => 6770,
                    'brand_id' => 13,
                    'fipe_code' => '011143-0',
                    'model' => 'AIRCROSS TENDANCE 1.6 Flex 16V 5p Aut.',
                    'years' => '2015 a 2015'
                ],
                [
                    'id' => 6771,
                    'brand_id' => 13,
                    'fipe_code' => '011144-9',
                    'model' => 'AIRCROSS TENDANCE 1.6 Flex 16V 5p Mec.',
                    'years' => '2015 a 2015'
                ],
                [
                    'id' => 283,
                    'brand_id' => 13,
                    'fipe_code' => '011001-9',
                    'model' => 'AX GTi',
                    'years' => '1992 a 1995'
                ],
                [
                    'id' => 8391,
                    'brand_id' => 13,
                    'fipe_code' => '011194-5',
                    'model' => 'Berlingo Furgão 1.6 16V Flex 5P',
                    'years' => '2018 a 2019'
                ],
                [
                    'id' => 285,
                    'brand_id' => 13,
                    'fipe_code' => '011078-7',
                    'model' => 'Berlingo MultSpace GLX 1.6 16V 110cv 4p',
                    'years' => '2005 a 2007'
                ],
                [
                    'id' => 284,
                    'brand_id' => 13,
                    'fipe_code' => '011026-4',
                    'model' => 'Berlingo MultSpace GLX 1.8i 3p',
                    'years' => '1998 a 2001'
                ],
                [
                    'id' => 286,
                    'brand_id' => 13,
                    'fipe_code' => '011033-7',
                    'model' => 'Berlingo MultSpace GLX 1.8i 4p',
                    'years' => '1999 a 2002'
                ],
                [
                    'id' => 287,
                    'brand_id' => 13,
                    'fipe_code' => '011002-7',
                    'model' => 'BX 1.6S 16V',
                    'years' => '1992 a 1993'
                ],
                [
                    'id' => 288,
                    'brand_id' => 13,
                    'fipe_code' => '011039-6',
                    'model' => 'BX GTi 1.9',
                    'years' => '1992 a 1993'
                ],
                [
                    'id' => 8738,
                    'brand_id' => 13,
                    'fipe_code' => '011207-0',
                    'model' => 'C3 100 Anos 1.6 16V Flex Aut.',
                    'years' => '2020 a 2020'
                ],
                [
                    'id' => 10961,
                    'brand_id' => 13,
                    'fipe_code' => '011231-3',
                    'model' => 'C3 AIRCROSS F. Pack 1.0 Flex TB 200 Aut.',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 10962,
                    'brand_id' => 13,
                    'fipe_code' => '011232-1',
                    'model' => 'C3 AIRCROSS Feel 1.0 Flex Turbo 200 Aut.',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 10963,
                    'brand_id' => 13,
                    'fipe_code' => '011230-5',
                    'model' => 'C3 AIRCROSS Shine 1.0 Flex TB 200 Aut.',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 11096,
                    'brand_id' => 13,
                    'fipe_code' => '011235-6',
                    'model' => 'C3 AIRCROSS7 F. Pack 1.0 Flex TB 200 Aut',
                    'years' => '2025 a Zero Km'
                ],
                [
                    'id' => 11097,
                    'brand_id' => 13,
                    'fipe_code' => '011234-8',
                    'model' => 'C3 AIRCROSS7 Feel 1.0 Flex TB. 200 Aut.',
                    'years' => '2025 a Zero Km'
                ],
                [
                    'id' => 11098,
                    'brand_id' => 13,
                    'fipe_code' => '011236-4',
                    'model' => 'C3 AIRCROSS7 Shine 1.0 Flex TB 200 Aut.',
                    'years' => '2025 a Zero Km'
                ],
                [
                    'id' => 6835,
                    'brand_id' => 13,
                    'fipe_code' => '011145-7',
                    'model' => 'C3 Attra\/Origine Pack 1.5 Flex 8V 5p Mec',
                    'years' => '2015 a 2017'
                ],
                [
                    'id' => 7964,
                    'brand_id' => 13,
                    'fipe_code' => '011181-3',
                    'model' => 'C3 Attraction 1.6 Flex 16V 5p Aut.',
                    'years' => '2018 a 2021'
                ],
                [
                    'id' => 7585,
                    'brand_id' => 13,
                    'fipe_code' => '011170-8',
                    'model' => 'C3 Attraction Pure Tech 1.2 Flex 12V Mec',
                    'years' => '2016 a 2021'
                ],
                [
                    'id' => 6152,
                    'brand_id' => 13,
                    'fipe_code' => '011119-8',
                    'model' => 'C3 Excl. 1.6 VTi Flex Start 16V 5p Aut.',
                    'years' => '2013 a 2020'
                ],
                [
                    'id' => 6153,
                    'brand_id' => 13,
                    'fipe_code' => '011118-0',
                    'model' => 'C3 Excl. 1.6 VTi Flex Start 16V 5p Mec.',
                    'years' => '2013 a 2015'
                ],
                [
                    'id' => 4761,
                    'brand_id' => 13,
                    'fipe_code' => '011091-4',
                    'model' => 'C3 Excl.\/Excl.Solar.\/Sonora 1.6 Flex Aut',
                    'years' => '2008 a 2012'
                ],
                [
                    'id' => 289,
                    'brand_id' => 13,
                    'fipe_code' => '011071-0',
                    'model' => 'C3 Exclus.\/Excl.Solaris 1.6 Flex 16V Mec',
                    'years' => '2003 a 2011'
                ],
                [
                    'id' => 4315,
                    'brand_id' => 13,
                    'fipe_code' => '011083-3',
                    'model' => 'C3 Exclusive 1.4 Flex 8V 5p',
                    'years' => '2007 a 2012'
                ],
                [
                    'id' => 6772,
                    'brand_id' => 13,
                    'fipe_code' => '011142-2',
                    'model' => 'C3 Exclusive 1.5 Flex 8V 5p Mec.',
                    'years' => '2015 a 2016'
                ],
                [
                    'id' => 9346,
                    'brand_id' => 13,
                    'fipe_code' => '011192-9',
                    'model' => 'C3 Exclusive Bus. 1.6 Flex 5p Aut.',
                    'years' => '2019 a 2019'
                ],
                [
                    'id' => 10091,
                    'brand_id' => 13,
                    'fipe_code' => '011224-0',
                    'model' => 'C3 Feel 1.0 Flex 6V 5p Mec.',
                    'years' => '2023 a Zero Km'
                ],
                [
                    'id' => 10092,
                    'brand_id' => 13,
                    'fipe_code' => '011225-9',
                    'model' => 'C3 Feel 1.6 Flex 16V 5p Mec.',
                    'years' => '2023 a 2024'
                ],
                [
                    'id' => 10093,
                    'brand_id' => 13,
                    'fipe_code' => '011226-7',
                    'model' => 'C3 Feel Pack 1.6 Flex 16V 5p Aut.',
                    'years' => '2023 a Zero Km'
                ],
                [
                    'id' => 10094,
                    'brand_id' => 13,
                    'fipe_code' => '011227-5',
                    'model' => 'C3 First Edition 1.0 Flex 6V 5p Mec.',
                    'years' => '2023 a 2023'
                ],
                [
                    'id' => 10095,
                    'brand_id' => 13,
                    'fipe_code' => '011228-3',
                    'model' => 'C3 First Edition 1.6 Flex 16V 5p Aut.',
                    'years' => '2023 a 2023'
                ],
                [
                    'id' => 290,
                    'brand_id' => 13,
                    'fipe_code' => '011072-8',
                    'model' => 'C3 GLX 1.4\/ GLX Sonora 1.4 Flex 8V 5p',
                    'years' => '2003 a 2012'
                ],
                [
                    'id' => 4762,
                    'brand_id' => 13,
                    'fipe_code' => '011090-6',
                    'model' => 'C3 GLX 1.6 Flex 16V 5p  Aut.',
                    'years' => '2009 a 2010'
                ],
                [
                    'id' => 291,
                    'brand_id' => 13,
                    'fipe_code' => '011070-1',
                    'model' => 'C3 GLX 1.6\/ 1.6 Flex 16V 5p',
                    'years' => '2002 a 2010'
                ],
                [
                    'id' => 10096,
                    'brand_id' => 13,
                    'fipe_code' => '011222-4',
                    'model' => 'C3 Live 1.0 Flex 6V 5p Mec.',
                    'years' => '2023 a Zero Km'
                ],
                [
                    'id' => 10097,
                    'brand_id' => 13,
                    'fipe_code' => '011223-2',
                    'model' => 'C3 Live Pack 1.0 Flex 6V 5p Mec.',
                    'years' => '2023 a Zero Km'
                ],
                [
                    'id' => 10945,
                    'brand_id' => 13,
                    'fipe_code' => '011233-0',
                    'model' => 'C3 Live Pack 1.6 Flex 16V 5p Aut.',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 292,
                    'brand_id' => 13,
                    'fipe_code' => '011076-0',
                    'model' => 'C3 Ocimar Versolato 1.6 16V 110cv 5p',
                    'years' => '2004 a 2005'
                ],
                [
                    'id' => 6154,
                    'brand_id' => 13,
                    'fipe_code' => '011116-3',
                    'model' => 'C3 Origine 1.5 Flex 8V 5p Mec.',
                    'years' => '2012 a 2017'
                ],
                [
                    'id' => 7586,
                    'brand_id' => 13,
                    'fipe_code' => '011171-6',
                    'model' => 'C3 Origine Pure Tech 1.2 Flex 12V Mec',
                    'years' => '2017 a 2020'
                ],
                [
                    'id' => 5611,
                    'brand_id' => 13,
                    'fipe_code' => '011111-2',
                    'model' => 'C3 Picasso Excl. 1.6 Flex 16V 5p Aut.',
                    'years' => '2012 a 2015'
                ],
                [
                    'id' => 5551,
                    'brand_id' => 13,
                    'fipe_code' => '011107-4',
                    'model' => 'C3 Picasso Exclusive 1.6 Flex 16V 5p Mec',
                    'years' => '2012 a 2015'
                ],
                [
                    'id' => 6092,
                    'brand_id' => 13,
                    'fipe_code' => '011114-7',
                    'model' => 'C3 Picasso GL 1.5 Flex 8V Mec.',
                    'years' => '2012 a 2014'
                ],
                [
                    'id' => 5552,
                    'brand_id' => 13,
                    'fipe_code' => '011105-8',
                    'model' => 'C3 Picasso GL 1.6 Flex 16V 5p Mec.',
                    'years' => '2011 a 2012'
                ],
                [
                    'id' => 6093,
                    'brand_id' => 13,
                    'fipe_code' => '011115-5',
                    'model' => 'C3 Picasso GLX 1.5 Flex 8V 5p Mec.',
                    'years' => '2013 a 2014'
                ],
                [
                    'id' => 5612,
                    'brand_id' => 13,
                    'fipe_code' => '011110-4',
                    'model' => 'C3 Picasso GLX 1.6 Flex 16V 5p Aut.',
                    'years' => '2011 a 2014'
                ],
                [
                    'id' => 5553,
                    'brand_id' => 13,
                    'fipe_code' => '011106-6',
                    'model' => 'C3 Picasso GLX 1.6 Flex 16V 5p Mec.',
                    'years' => '2011 a 2012'
                ],
                [
                    'id' => 6773,
                    'brand_id' => 13,
                    'fipe_code' => '011141-4',
                    'model' => 'C3 Picasso Origine 1.5 Flex 8V Mec.',
                    'years' => '2014 a 2015'
                ],
                [
                    'id' => 6774,
                    'brand_id' => 13,
                    'fipe_code' => '011140-6',
                    'model' => 'C3 Picasso Tendance 1.5 Flex 8V 5p Mec.',
                    'years' => '2015 a 2015'
                ],
                [
                    'id' => 6775,
                    'brand_id' => 13,
                    'fipe_code' => '011139-2',
                    'model' => 'C3 Picasso Tendance 1.6 Flex 16V 5p Aut.',
                    'years' => '2012 a 2015'
                ],
                [
                    'id' => 8003,
                    'brand_id' => 13,
                    'fipe_code' => '011183-0',
                    'model' => 'C3 Start 1.2 Flex 12V 5p',
                    'years' => '2017 a 2018'
                ],
                [
                    'id' => 7730,
                    'brand_id' => 13,
                    'fipe_code' => '011175-9',
                    'model' => 'C3 Style Ed. Pure Tech 1.2 Flex 12V Mec.',
                    'years' => '2017 a 2017'
                ],
                [
                    'id' => 7731,
                    'brand_id' => 13,
                    'fipe_code' => '011176-7',
                    'model' => 'C3 Style Edition 1.6 Flex 16V Aut.',
                    'years' => '2017 a 2017'
                ],
                [
                    'id' => 6155,
                    'brand_id' => 13,
                    'fipe_code' => '011117-1',
                    'model' => 'C3 Tendance 1.5 Flex 8V 5p Mec.',
                    'years' => '2013 a 2017'
                ],
                [
                    'id' => 6776,
                    'brand_id' => 13,
                    'fipe_code' => '011138-4',
                    'model' => 'C3 Tendance 1.6 VTi Flex Start 16V Aut.',
                    'years' => '2015 a 2018'
                ],
                [
                    'id' => 7587,
                    'brand_id' => 13,
                    'fipe_code' => '011169-4',
                    'model' => 'C3 Tendance Pure Tech 1.2 Flex 12V Mec.',
                    'years' => '2016 a 2020'
                ],
                [
                    'id' => 8341,
                    'brand_id' => 13,
                    'fipe_code' => '011190-2',
                    'model' => 'C3 Urban Trail 1.6 Flex 16V 5p Aut.',
                    'years' => '2019 a 2021'
                ],
                [
                    'id' => 8882,
                    'brand_id' => 13,
                    'fipe_code' => '011208-9',
                    'model' => 'C3 Urban Trail P.Tech 1.2 Flex 12V Mec.',
                    'years' => '2019 a 2019'
                ],
                [
                    'id' => 6777,
                    'brand_id' => 13,
                    'fipe_code' => '011137-6',
                    'model' => 'C3 X-BOX ONE 1.6 VTi Flex 16V 5p Mec.',
                    'years' => '2014 a 2014'
                ],
                [
                    'id' => 4302,
                    'brand_id' => 13,
                    'fipe_code' => '011082-5',
                    'model' => 'C3 XTR 1.4 Flex 8V 5p',
                    'years' => '2007 a 2012'
                ],
                [
                    'id' => 4054,
                    'brand_id' => 13,
                    'fipe_code' => '011080-9',
                    'model' => 'C3 XTR 1.6 Flex 16V 5p',
                    'years' => '2006 a 2011'
                ],
                [
                    'id' => 11176,
                    'brand_id' => 13,
                    'fipe_code' => '011237-2',
                    'model' => 'C3 YOU! 1.0 Flex Turbo 200 Aut.',
                    'years' => '2025 a Zero Km'
                ],
                [
                    'id' => 8739,
                    'brand_id' => 13,
                    'fipe_code' => '011204-6',
                    'model' => 'C4 CACTUS 100 Anos 1.6 TB 16V Flex Aut.',
                    'years' => '2020 a 2020'
                ],
                [
                    'id' => 9207,
                    'brand_id' => 13,
                    'fipe_code' => '011212-7',
                    'model' => 'C4 CACTUS C-SERIES 1.6 16V Flex Aut.',
                    'years' => '2021 a 2021'
                ],
                [
                    'id' => 8466,
                    'brand_id' => 13,
                    'fipe_code' => '011198-8',
                    'model' => 'C4 CACTUS FEEL 1.6 16V Flex Aut.',
                    'years' => '2019 a Zero Km'
                ],
                [
                    'id' => 8467,
                    'brand_id' => 13,
                    'fipe_code' => '011199-6',
                    'model' => 'C4 CACTUS FEEL 1.6 16V Flex Mec.',
                    'years' => '2019 a 2020'
                ],
                [
                    'id' => 9586,
                    'brand_id' => 13,
                    'fipe_code' => '011201-1',
                    'model' => 'C4 CACTUS FEEL Bus. 1.6 Flex Aut.',
                    'years' => '2019 a 2023'
                ],
                [
                    'id' => 8469,
                    'brand_id' => 13,
                    'fipe_code' => '011197-0',
                    'model' => 'C4 CACTUS FEEL Pack 1.6 16V Flex Aut.',
                    'years' => '2019 a Zero Km'
                ],
                [
                    'id' => 9191,
                    'brand_id' => 13,
                    'fipe_code' => '011211-9',
                    'model' => 'C4 CACTUS LIVE 1.6 16V Flex Aut.',
                    'years' => '2021 a Zero Km'
                ],
                [
                    'id' => 8470,
                    'brand_id' => 13,
                    'fipe_code' => '011200-3',
                    'model' => 'C4 CACTUS LIVE 1.6 16V Flex Mec.',
                    'years' => '2019 a 2021'
                ],
                [
                    'id' => 10807,
                    'brand_id' => 13,
                    'fipe_code' => '011229-1',
                    'model' => 'C4 CACTUS NOIR 1.6 Turbo Flex Aut.',
                    'years' => '2024 a Zero Km'
                ],
                [
                    'id' => 9453,
                    'brand_id' => 13,
                    'fipe_code' => '011213-5',
                    'model' => 'C4 CACTUS Rip Curl 1.6 16V Flex Aut.',
                    'years' => '2022 a 2022'
                ],
                [
                    'id' => 9757,
                    'brand_id' => 13,
                    'fipe_code' => '011221-6',
                    'model' => 'C4 CACTUS SHINE 1.6 16V Flex Aut.',
                    'years' => '2022 a 2023'
                ],
                [
                    'id' => 8471,
                    'brand_id' => 13,
                    'fipe_code' => '011196-1',
                    'model' => 'C4 CACTUS SHINE 1.6 Turbo Flex Aut.',
                    'years' => '2019 a 2021'
                ],
                [
                    'id' => 8472,
                    'brand_id' => 13,
                    'fipe_code' => '011195-3',
                    'model' => 'C4 CACTUS SHINE Pack 1.6 Turbo Flex Aut.',
                    'years' => '2019 a Zero Km'
                ],
                [
                    'id' => 9609,
                    'brand_id' => 13,
                    'fipe_code' => '011215-1',
                    'model' => 'C4 CACTUS X-Series 1.6 16V Flex Aut.',
                    'years' => '2022 a 2023'
                ],
                [
                    'id' => 6574,
                    'brand_id' => 13,
                    'fipe_code' => '011133-3',
                    'model' => 'C4 Competition 1.6 Flex 16V 5p Mec.',
                    'years' => '2014 a 2014'
                ],
                [
                    'id' => 6559,
                    'brand_id' => 13,
                    'fipe_code' => '011127-9',
                    'model' => 'C4 Competition 2.0 Flex 16V 5p Aut.',
                    'years' => '2010 a 2014'
                ],
                [
                    'id' => 4888,
                    'brand_id' => 13,
                    'fipe_code' => '011097-3',
                    'model' => 'C4 Excl.\/Excl. Solar. 2.0 Flex 16V Mec.',
                    'years' => '2009 a 2013'
                ],
                [
                    'id' => 4845,
                    'brand_id' => 13,
                    'fipe_code' => '011095-7',
                    'model' => 'C4 Excl.2.0\/2.0 Solaris Flex 16V 5p Aut.',
                    'years' => '2009 a 2014'
                ],
                [
                    'id' => 4846,
                    'brand_id' => 13,
                    'fipe_code' => '011093-0',
                    'model' => 'C4 GLX 1.6 Flex 16V 5p Mec.',
                    'years' => '2009 a 2013'
                ],
                [
                    'id' => 4847,
                    'brand_id' => 13,
                    'fipe_code' => '011094-9',
                    'model' => 'C4 GLX 2.0 Flex 16V 5p Aut.',
                    'years' => '2009 a 2013'
                ],
                [
                    'id' => 4889,
                    'brand_id' => 13,
                    'fipe_code' => '011096-5',
                    'model' => 'C4 GLX 2.0 Flex 16V 5p Mec.',
                    'years' => '2010 a 2010'
                ],
                [
                    'id' => 8740,
                    'brand_id' => 13,
                    'fipe_code' => '011206-2',
                    'model' => 'C4 LOUNGE 100 Anos 1.6 16V TB Flex Aut.',
                    'years' => '2020 a 2020'
                ],
                [
                    'id' => 6575,
                    'brand_id' => 13,
                    'fipe_code' => '011132-5',
                    'model' => 'C4 LOUNGE Exclusive 1.6 Turbo 4p Aut.',
                    'years' => '2014 a 2015'
                ],
                [
                    'id' => 7094,
                    'brand_id' => 13,
                    'fipe_code' => '011156-2',
                    'model' => 'C4 LOUNGE Exclusive 1.6 Turbo Flex Aut.',
                    'years' => '2015 a 2018'
                ],
                [
                    'id' => 6576,
                    'brand_id' => 13,
                    'fipe_code' => '011131-7',
                    'model' => 'C4 LOUNGE Exclusive 2.0 Flex 4p Aut.',
                    'years' => '2014 a 2015'
                ],
                [
                    'id' => 8234,
                    'brand_id' => 13,
                    'fipe_code' => '011188-0',
                    'model' => 'C4 LOUNGE Feel 1.6 Turbo Flex Aut.',
                    'years' => '2018 a 2019'
                ],
                [
                    'id' => 8515,
                    'brand_id' => 13,
                    'fipe_code' => '011203-8',
                    'model' => 'C4 LOUNGE Live 1.6 Turbo Flex Aut.',
                    'years' => '2018 a 2019'
                ],
                [
                    'id' => 9347,
                    'brand_id' => 13,
                    'fipe_code' => '011193-7',
                    'model' => 'C4 LOUNGE Live Bus. 1.6 Flex Aut.',
                    'years' => '2018 a 2020'
                ],
                [
                    'id' => 7658,
                    'brand_id' => 13,
                    'fipe_code' => '011172-4',
                    'model' => 'C4 LOUNGE Orig.Business 1.6 TB Flex Aut.',
                    'years' => '2017 a 2017'
                ],
                [
                    'id' => 7684,
                    'brand_id' => 13,
                    'fipe_code' => '011173-2',
                    'model' => 'C4 LOUNGE Origine 1.6 Turbo Flex  Aut.',
                    'years' => '2017 a 2018'
                ],
                [
                    'id' => 7685,
                    'brand_id' => 13,
                    'fipe_code' => '011174-0',
                    'model' => 'C4 LOUNGE Origine 1.6 Turbo Flex Mec.',
                    'years' => '2017 a 2017'
                ],
                [
                    'id' => 7370,
                    'brand_id' => 13,
                    'fipe_code' => '011158-9',
                    'model' => 'C4 LOUNGE Origine 2.0 Flex 4p Aut.',
                    'years' => '2016 a 2016'
                ],
                [
                    'id' => 6577,
                    'brand_id' => 13,
                    'fipe_code' => '011128-7',
                    'model' => 'C4 LOUNGE Origine 2.0 Flex 4p Mec.',
                    'years' => '2014 a 2015'
                ],
                [
                    'id' => 7787,
                    'brand_id' => 13,
                    'fipe_code' => '011177-5',
                    'model' => 'C4 LOUNGE S 1.6 Turbo Flex Aut.',
                    'years' => '2017 a 2018'
                ],
                [
                    'id' => 8235,
                    'brand_id' => 13,
                    'fipe_code' => '011187-2',
                    'model' => 'C4 LOUNGE Shine 1.6 Turbo Flex Aut.',
                    'years' => '2018 a 2021'
                ],
                [
                    'id' => 6884,
                    'brand_id' => 13,
                    'fipe_code' => '011146-5',
                    'model' => 'C4 LOUNGE Tendance 1.6 Turbo 4p Aut',
                    'years' => '2015 a 2015'
                ],
                [
                    'id' => 7118,
                    'brand_id' => 13,
                    'fipe_code' => '011157-0',
                    'model' => 'C4 LOUNGE Tendance 1.6 Turbo Flex Aut.',
                    'years' => '2015 a 2018'
                ],
                [
                    'id' => 6578,
                    'brand_id' => 13,
                    'fipe_code' => '011130-9',
                    'model' => 'C4 LOUNGE Tendance 2.0 Flex 4p Aut.',
                    'years' => '2014 a 2016'
                ],
                [
                    'id' => 6579,
                    'brand_id' => 13,
                    'fipe_code' => '011129-5',
                    'model' => 'C4 LOUNGE Tendance 2.0 Flex 4p Mec.',
                    'years' => '2014 a 2016'
                ],
                [
                    'id' => 4397,
                    'brand_id' => 13,
                    'fipe_code' => '011088-4',
                    'model' => 'C4 PAL.Excl\/Excl(Tech.) 2.0\/2.0 Flex Aut',
                    'years' => '2007 a 2013'
                ],
                [
                    'id' => 4398,
                    'brand_id' => 13,
                    'fipe_code' => '011087-6',
                    'model' => 'C4 PALLAS Exclusive 2.0\/2.0 Flex 16V Mec',
                    'years' => '2007 a 2010'
                ],
                [
                    'id' => 4399,
                    'brand_id' => 13,
                    'fipe_code' => '011086-8',
                    'model' => 'C4 PALLAS GLX 2.0\/ 2.0 Flex Aut.',
                    'years' => '2007 a 2013'
                ],
                [
                    'id' => 4400,
                    'brand_id' => 13,
                    'fipe_code' => '011085-0',
                    'model' => 'C4 PALLAS GLX 2.0\/2.0 Flex 16V Mec.',
                    'years' => '2007 a 2013'
                ],
                [
                    'id' => 7426,
                    'brand_id' => 13,
                    'fipe_code' => '011160-0',
                    'model' => 'C4 Picasso Intensive 1.6 Turbo 16V Aut.',
                    'years' => '2016 a 2019'
                ],
                [
                    'id' => 7427,
                    'brand_id' => 13,
                    'fipe_code' => '011159-7',
                    'model' => 'C4 Picasso Seduction 1.6 Turbo 16V Aut.',
                    'years' => '2016 a 2018'
                ],
                [
                    'id' => 4824,
                    'brand_id' => 13,
                    'fipe_code' => '011092-2',
                    'model' => 'C4 Picasso\/Pic. La Luna 2.0 16V  Aut.',
                    'years' => '2009 a 2014'
                ],
                [
                    'id' => 6580,
                    'brand_id' => 13,
                    'fipe_code' => '011134-1',
                    'model' => 'C4 Rock You 1.6 Flex 16V 5p Mec.',
                    'years' => '2014 a 2014'
                ],
                [
                    'id' => 6737,
                    'brand_id' => 13,
                    'fipe_code' => '011135-0',
                    'model' => 'C4 Tendance 1.6 Flex 16V 5p Mec.',
                    'years' => '2014 a 2014'
                ],
                [
                    'id' => 6738,
                    'brand_id' => 13,
                    'fipe_code' => '011136-8',
                    'model' => 'C4 Tendance 2.0 Flex 16V 5p Aut.',
                    'years' => '2014 a 2014'
                ],
                [
                    'id' => 4159,
                    'brand_id' => 13,
                    'fipe_code' => '011081-7',
                    'model' => 'C4 VTR 2.0 16V 143cv',
                    'years' => '2005 a 2009'
                ],
                [
                    'id' => 293,
                    'brand_id' => 13,
                    'fipe_code' => '011067-1',
                    'model' => 'C5 3.0 24V 210cv 4p Aut.',
                    'years' => '2001 a 2008'
                ],
                [
                    'id' => 294,
                    'brand_id' => 13,
                    'fipe_code' => '011065-5',
                    'model' => 'C5 Exclusive 2.0 16V 138cv 4p Mec.',
                    'years' => '2001 a 2003'
                ],
                [
                    'id' => 295,
                    'brand_id' => 13,
                    'fipe_code' => '011066-3',
                    'model' => 'C5 Exclusive 2.0 16V 4p Aut.',
                    'years' => '2001 a 2012'
                ],
                [
                    'id' => 296,
                    'brand_id' => 13,
                    'fipe_code' => '011068-0',
                    'model' => 'C5 Exclusive Break 2.0 16V 138cv 5p Mec.',
                    'years' => '2001 a 2002'
                ],
                [
                    'id' => 297,
                    'brand_id' => 13,
                    'fipe_code' => '011069-8',
                    'model' => 'C5 Exclusive Break 2.0 16V Aut.',
                    'years' => '2001 a 2008'
                ],
                [
                    'id' => 4937,
                    'brand_id' => 13,
                    'fipe_code' => '011098-1',
                    'model' => 'C5 Tourer Exclusive 2.0 16V 5p Aut.',
                    'years' => '2008 a 2012'
                ],
                [
                    'id' => 4328,
                    'brand_id' => 13,
                    'fipe_code' => '011084-1',
                    'model' => 'C6 Exclusive 3.0 V6 24V 215cv Aut.',
                    'years' => '2006 a 2008'
                ],
                [
                    'id' => 298,
                    'brand_id' => 13,
                    'fipe_code' => '011073-6',
                    'model' => 'C8 Exclusive 2.0 16V 138cv 5p Aut.',
                    'years' => '2003 a 2005'
                ],
                [
                    'id' => 6050,
                    'brand_id' => 13,
                    'fipe_code' => '011113-9',
                    'model' => 'DS3 1.6 Turbo 16V 3p Mec.',
                    'years' => '2012 a 2014'
                ],
                [
                    'id' => 7067,
                    'brand_id' => 13,
                    'fipe_code' => '011149-0',
                    'model' => 'DS3 Sport Chic 1.6 TB 16V 3p Mec.',
                    'years' => '2015 a 2017'
                ],
                [
                    'id' => 7068,
                    'brand_id' => 13,
                    'fipe_code' => '011147-3',
                    'model' => 'DS4 1.6 Chic Turbo 16V 5p Aut.',
                    'years' => '2015 a 2016'
                ],
                [
                    'id' => 7069,
                    'brand_id' => 13,
                    'fipe_code' => '011148-1',
                    'model' => 'DS4 1.6 So Chic Turbo 16V 5p Aut.',
                    'years' => '2015 a 2016'
                ],
                [
                    'id' => 6347,
                    'brand_id' => 13,
                    'fipe_code' => '011121-0',
                    'model' => 'DS4 1.6 Turbo 16V 5p Aut.',
                    'years' => '2012 a 2014'
                ],
                [
                    'id' => 7095,
                    'brand_id' => 13,
                    'fipe_code' => '011155-4',
                    'model' => 'DS5 1.6 Be Chic Turbo 16V 5p Aut.',
                    'years' => '2015 a 2016'
                ],
                [
                    'id' => 7096,
                    'brand_id' => 13,
                    'fipe_code' => '011154-6',
                    'model' => 'DS5 1.6 So Chic Turbo 16V 5p Aut.',
                    'years' => '2015 a 2018'
                ],
                [
                    'id' => 6295,
                    'brand_id' => 13,
                    'fipe_code' => '011120-1',
                    'model' => 'DS5 1.6 Turbo 16V 5p Aut.',
                    'years' => '2013 a 2014'
                ],
                [
                    'id' => 9759,
                    'brand_id' => 13,
                    'fipe_code' => '011218-6',
                    'model' => 'Ë-Jumpy Cargo 136cv (Elétrico)',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 299,
                    'brand_id' => 13,
                    'fipe_code' => '011027-2',
                    'model' => 'Evasion  GLX 2.0 16V',
                    'years' => '1998 a 2001'
                ],
                [
                    'id' => 300,
                    'brand_id' => 13,
                    'fipe_code' => '011003-5',
                    'model' => 'Evasion VSX Turbo',
                    'years' => '1995 a 1997'
                ],
                [
                    'id' => 10777,
                    'brand_id' => 13,
                    'fipe_code' => '011089-2',
                    'model' => 'Grand C4 Picasso 2.0 16V 143cv Aut',
                    'years' => '2007 a 2014'
                ],
                [
                    'id' => 7588,
                    'brand_id' => 13,
                    'fipe_code' => '011168-6',
                    'model' => 'Grand C4 Picasso Intensive 1.6 TB Aut.',
                    'years' => '2016 a 2019'
                ],
                [
                    'id' => 7589,
                    'brand_id' => 13,
                    'fipe_code' => '011167-8',
                    'model' => 'Grand C4 Picasso Seduction 1.6 TB Aut.',
                    'years' => '2016 a 2018'
                ],
                [
                    'id' => 9556,
                    'brand_id' => 13,
                    'fipe_code' => '011214-3',
                    'model' => 'Jumper 2.0 Cargo Furgão 16V TB Diesel',
                    'years' => '2021 a 2022'
                ],
                [
                    'id' => 8516,
                    'brand_id' => 13,
                    'fipe_code' => '011202-0',
                    'model' => 'Jumper 2.0 FurgãoTurbo Diesel',
                    'years' => '2018 a 2022'
                ],
                [
                    'id' => 8883,
                    'brand_id' => 13,
                    'fipe_code' => '011209-7',
                    'model' => 'Jumper 2.0 Minibus 16L Turbo Diesel',
                    'years' => '2019 a 2022'
                ],
                [
                    'id' => 5103,
                    'brand_id' => 13,
                    'fipe_code' => '011099-0',
                    'model' => 'Jumper 2.3 15\/16Lug. TB Diesel',
                    'years' => '2010 a 2017'
                ],
                [
                    'id' => 5140,
                    'brand_id' => 13,
                    'fipe_code' => '011100-7',
                    'model' => 'Jumper 2.3 Furgão TB Diesel',
                    'years' => '2010 a 2017'
                ],
                [
                    'id' => 5659,
                    'brand_id' => 13,
                    'fipe_code' => '011112-0',
                    'model' => 'Jumper 2.3 Vetrato Exec. 16Lug. TB Dies.',
                    'years' => '2011 a 2015'
                ],
                [
                    'id' => 5411,
                    'brand_id' => 13,
                    'fipe_code' => '011104-0',
                    'model' => 'Jumper 2.3 Vetrato TB Diesel',
                    'years' => '2011 a 2016'
                ],
                [
                    'id' => 301,
                    'brand_id' => 13,
                    'fipe_code' => '011028-0',
                    'model' => 'Jumper 2.5 Diesel',
                    'years' => '1995 a 1998'
                ],
                [
                    'id' => 302,
                    'brand_id' => 13,
                    'fipe_code' => '011050-7',
                    'model' => 'Jumper 2.8 16Lug.  Diesel',
                    'years' => '2000 a 2009'
                ],
                [
                    'id' => 303,
                    'brand_id' => 13,
                    'fipe_code' => '011052-3',
                    'model' => 'Jumper 2.8 Furgão 35C Diesel',
                    'years' => '2000 a 2000'
                ],
                [
                    'id' => 304,
                    'brand_id' => 13,
                    'fipe_code' => '011051-5',
                    'model' => 'Jumper 2.8 Furgão 35MH Diesel',
                    'years' => '2000 a 2005'
                ],
                [
                    'id' => 9763,
                    'brand_id' => 13,
                    'fipe_code' => '011220-8',
                    'model' => 'Jumper Cargo 2.2 Turbo Diesel',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 9764,
                    'brand_id' => 13,
                    'fipe_code' => '011219-4',
                    'model' => 'Jumper Furgão 2.2 Turbo Diesel',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 8078,
                    'brand_id' => 13,
                    'fipe_code' => '011186-4',
                    'model' => 'Jumpy 1.6  Furgão Pack Turbo Diesel',
                    'years' => '2018 a 2022'
                ],
                [
                    'id' => 8077,
                    'brand_id' => 13,
                    'fipe_code' => '011185-6',
                    'model' => 'Jumpy 1.6  Furgão Turbo Diesel',
                    'years' => '2018 a 2020'
                ],
                [
                    'id' => 8342,
                    'brand_id' => 13,
                    'fipe_code' => '011189-9',
                    'model' => 'Jumpy 1.6 Minibus Turbo Diesel',
                    'years' => '2018 a 2022'
                ],
                [
                    'id' => 9741,
                    'brand_id' => 13,
                    'fipe_code' => '011216-0',
                    'model' => 'Jumpy Cargo 1.5 Turbo Diesel',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 9742,
                    'brand_id' => 13,
                    'fipe_code' => '011217-8',
                    'model' => 'Jumpy Vitré 1.5 Turbo Diesel',
                    'years' => '2022 a Zero Km'
                ],
                [
                    'id' => 9192,
                    'brand_id' => 13,
                    'fipe_code' => '011210-0',
                    'model' => 'Jumpy VITRÉ 1.6 Turbo Diesel',
                    'years' => '2021 a 2022'
                ],
                [
                    'id' => 305,
                    'brand_id' => 13,
                    'fipe_code' => '011043-4',
                    'model' => 'Xantia 2.0  16V',
                    'years' => '1994 a 1997'
                ],
                [
                    'id' => 306,
                    'brand_id' => 13,
                    'fipe_code' => '011044-2',
                    'model' => 'Xantia Activa 2.0',
                    'years' => '1997 a 1997'
                ],
                [
                    'id' => 307,
                    'brand_id' => 13,
                    'fipe_code' => '011045-0',
                    'model' => 'Xantia Activa 2.0 TB',
                    'years' => '1996 a 1997'
                ],
                [
                    'id' => 308,
                    'brand_id' => 13,
                    'fipe_code' => '011014-0',
                    'model' => 'Xantia Activa 3.0 V6 Mec',
                    'years' => '1997 a 1999'
                ],
                [
                    'id' => 309,
                    'brand_id' => 13,
                    'fipe_code' => '011015-9',
                    'model' => 'Xantia Break 2.0 8V\/GLX 2.0 16V Aut',
                    'years' => '1995 a 2001'
                ],
                [
                    'id' => 310,
                    'brand_id' => 13,
                    'fipe_code' => '011049-3',
                    'model' => 'Xantia Break GLX 2.0 16V Mec.',
                    'years' => '1996 a 2001'
                ],
                [
                    'id' => 311,
                    'brand_id' => 13,
                    'fipe_code' => '011042-6',
                    'model' => 'Xantia Exclusive 2.0 16V',
                    'years' => '1998 a 2000'
                ],
                [
                    'id' => 312,
                    'brand_id' => 13,
                    'fipe_code' => '011034-5',
                    'model' => 'Xantia Exclusive 3.0 V6',
                    'years' => '1998 a 2000'
                ],
                [
                    'id' => 313,
                    'brand_id' => 13,
                    'fipe_code' => '011047-7',
                    'model' => 'Xantia GLX 2.0 16V Aut.',
                    'years' => '1998 a 2001'
                ],
                [
                    'id' => 314,
                    'brand_id' => 13,
                    'fipe_code' => '011029-9',
                    'model' => 'Xantia GLX 2.0 16V Mec.',
                    'years' => '1998 a 2002'
                ],
                [
                    'id' => 315,
                    'brand_id' => 13,
                    'fipe_code' => '011016-7',
                    'model' => 'Xantia SX 1.8',
                    'years' => '1996 a 1999'
                ],
                [
                    'id' => 316,
                    'brand_id' => 13,
                    'fipe_code' => '011004-3',
                    'model' => 'Xantia SX 2.0 8V\/16V Mec.\/Aut.',
                    'years' => '1995 a 1998'
                ],
                [
                    'id' => 317,
                    'brand_id' => 13,
                    'fipe_code' => '011005-1',
                    'model' => 'Xantia VSX 2.0',
                    'years' => '1994 a 1998'
                ],
                [
                    'id' => 318,
                    'brand_id' => 13,
                    'fipe_code' => '011048-5',
                    'model' => 'Xantia VSX 2.0 16V',
                    'years' => '1994 a 1998'
                ],
                [
                    'id' => 319,
                    'brand_id' => 13,
                    'fipe_code' => '011007-8',
                    'model' => 'XM Exclusive 12v',
                    'years' => '1992 a 1997'
                ],
                [
                    'id' => 320,
                    'brand_id' => 13,
                    'fipe_code' => '011040-0',
                    'model' => 'XM Exclusive 24V',
                    'years' => '1997 a 2000'
                ],
                [
                    'id' => 321,
                    'brand_id' => 13,
                    'fipe_code' => '011006-0',
                    'model' => 'XM Exclusive Break',
                    'years' => '1992 a 1995'
                ],
                [
                    'id' => 322,
                    'brand_id' => 13,
                    'fipe_code' => '011041-8',
                    'model' => 'XM Sensation 2.0 TB',
                    'years' => '1992 a 1995'
                ],
                [
                    'id' => 323,
                    'brand_id' => 13,
                    'fipe_code' => '011061-2',
                    'model' => 'Xsara Break Exclusive 1.6 16V 5p Aut.',
                    'years' => '2001 a 2001'
                ],
                [
                    'id' => 324,
                    'brand_id' => 13,
                    'fipe_code' => '011060-4',
                    'model' => 'Xsara Break Exclusive 1.6 16V 5p Mec.',
                    'years' => '2001 a 2001'
                ],
                [
                    'id' => 325,
                    'brand_id' => 13,
                    'fipe_code' => '011021-3',
                    'model' => 'Xsara Break Exclusive 1.8 16V',
                    'years' => '1998 a 2001'
                ],
                [
                    'id' => 326,
                    'brand_id' => 13,
                    'fipe_code' => '011036-1',
                    'model' => 'Xsara Break Exclusive 2.0 16V',
                    'years' => '1999 a 2003'
                ],
                [
                    'id' => 327,
                    'brand_id' => 13,
                    'fipe_code' => '011062-0',
                    'model' => 'Xsara Break GLX 1.6 16V 5p Aut.',
                    'years' => '2001 a 2003'
                ],
                [
                    'id' => 328,
                    'brand_id' => 13,
                    'fipe_code' => '011059-0',
                    'model' => 'Xsara Break GLX 1.6 16V 5p Mec.',
                    'years' => '2001 a 2003'
                ],
                [
                    'id' => 329,
                    'brand_id' => 13,
                    'fipe_code' => '011020-5',
                    'model' => 'Xsara Break GLX 1.8 16V',
                    'years' => '1998 a 2001'
                ],
                [
                    'id' => 330,
                    'brand_id' => 13,
                    'fipe_code' => '011035-3',
                    'model' => 'Xsara Break GLX\/ Paris 2.0 16V',
                    'years' => '1999 a 2003'
                ],
                [
                    'id' => 331,
                    'brand_id' => 13,
                    'fipe_code' => '011057-4',
                    'model' => 'Xsara Exclusive 1.6 16V 5p Aut.',
                    'years' => '2001 a 2001'
                ],
                [
                    'id' => 332,
                    'brand_id' => 13,
                    'fipe_code' => '011056-6',
                    'model' => 'Xsara Exclusive 1.6 16V 5p Mec.',
                    'years' => '2001 a 2001'
                ],
                [
                    'id' => 333,
                    'brand_id' => 13,
                    'fipe_code' => '011019-1',
                    'model' => 'Xsara Exclusive 1.8 8V\/16V 5p Aut.',
                    'years' => '1998 a 2000'
                ],
                [
                    'id' => 334,
                    'brand_id' => 13,
                    'fipe_code' => '011018-3',
                    'model' => 'Xsara Exclusive 1.8 8V\/16V 5p Mec.',
                    'years' => '1998 a 2001'
                ],
                [
                    'id' => 335,
                    'brand_id' => 13,
                    'fipe_code' => '011037-0',
                    'model' => 'Xsara Exclusive 2.0 16V',
                    'years' => '1999 a 2003'
                ],
                [
                    'id' => 336,
                    'brand_id' => 13,
                    'fipe_code' => '011053-1',
                    'model' => 'Xsara GLX 1.6 16V 3p',
                    'years' => '2001 a 2003'
                ],
                [
                    'id' => 337,
                    'brand_id' => 13,
                    'fipe_code' => '011055-8',
                    'model' => 'Xsara GLX 1.6 16V 5p Aut.',
                    'years' => '2001 a 2003'
                ],
                [
                    'id' => 338,
                    'brand_id' => 13,
                    'fipe_code' => '011054-0',
                    'model' => 'Xsara GLX 1.6 16V 5p Mec.',
                    'years' => '2001 a 2003'
                ],
                [
                    'id' => 339,
                    'brand_id' => 13,
                    'fipe_code' => '011024-8',
                    'model' => 'Xsara GLX 1.8 16V 5p Mec.',
                    'years' => '1998 a 2001'
                ],
                [
                    'id' => 340,
                    'brand_id' => 13,
                    'fipe_code' => '011022-1',
                    'model' => 'Xsara GLX 1.8 16V Cupê Mec.',
                    'years' => '1998 a 2001'
                ],
                [
                    'id' => 341,
                    'brand_id' => 13,
                    'fipe_code' => '011025-6',
                    'model' => 'Xsara GLX 1.8 8V 5p Aut.',
                    'years' => '1998 a 1999'
                ],
                [
                    'id' => 342,
                    'brand_id' => 13,
                    'fipe_code' => '011023-0',
                    'model' => 'Xsara GLX 1.8 8V Cupê Aut.',
                    'years' => '1998 a 1999'
                ],
                [
                    'id' => 343,
                    'brand_id' => 13,
                    'fipe_code' => '011046-9',
                    'model' => 'Xsara GLX\/ Paris 2.0 16V',
                    'years' => '1999 a 2001'
                ],
                [
                    'id' => 344,
                    'brand_id' => 13,
                    'fipe_code' => '011063-9',
                    'model' => 'Xsara Picasso Exc.\/Etoile 2.0 16V Mec.',
                    'years' => '2001 a 2010'
                ],
                [
                    'id' => 3930,
                    'brand_id' => 13,
                    'fipe_code' => '011079-5',
                    'model' => 'Xsara Picasso Exclus. 1.6\/ 1.6 Flex 16V',
                    'years' => '2005 a 2012'
                ],
                [
                    'id' => 345,
                    'brand_id' => 13,
                    'fipe_code' => '011074-4',
                    'model' => 'Xsara Picasso Exclusive 2.0 16V Aut.',
                    'years' => '2004 a 2011'
                ],
                [
                    'id' => 347,
                    'brand_id' => 13,
                    'fipe_code' => '011077-9',
                    'model' => 'Xsara Picasso GLX 1.6\/ 1.6 Flex 16V',
                    'years' => '2005 a 2012'
                ],
                [
                    'id' => 348,
                    'brand_id' => 13,
                    'fipe_code' => '011075-2',
                    'model' => 'Xsara Picasso GLX 2.0 16V  Aut.',
                    'years' => '2004 a 2010'
                ],
                [
                    'id' => 346,
                    'brand_id' => 13,
                    'fipe_code' => '011064-7',
                    'model' => 'Xsara Picasso GLX\/Brasil\/Etoile 2.0 Mec.',
                    'years' => '2001 a 2010'
                ],
                [
                    'id' => 349,
                    'brand_id' => 13,
                    'fipe_code' => '011058-2',
                    'model' => 'Xsara VTS 1.6 16V 3p',
                    'years' => '2001 a 2002'
                ],
                [
                    'id' => 350,
                    'brand_id' => 13,
                    'fipe_code' => '011038-8',
                    'model' => 'Xsara VTS 1.8 16V',
                    'years' => '1999 a 2001'
                ],
                [
                    'id' => 351,
                    'brand_id' => 13,
                    'fipe_code' => '011017-5',
                    'model' => 'Xsara VTS 2.0  16V Cupê Mec.',
                    'years' => '1998 a 2002'
                ],
                [
                    'id' => 352,
                    'brand_id' => 13,
                    'fipe_code' => '011008-6',
                    'model' => 'ZX Cupê 16V',
                    'years' => '1992 a 1998'
                ],
                [
                    'id' => 353,
                    'brand_id' => 13,
                    'fipe_code' => '011032-9',
                    'model' => 'ZX Dakar 2.0 16V',
                    'years' => '1996 a 1997'
                ],
                [
                    'id' => 354,
                    'brand_id' => 13,
                    'fipe_code' => '011009-4',
                    'model' => 'ZX Furio',
                    'years' => '1995 a 1998'
                ],
                [
                    'id' => 355,
                    'brand_id' => 13,
                    'fipe_code' => '011031-0',
                    'model' => 'ZX Paris 1.8',
                    'years' => '1996 a 1998'
                ],
                [
                    'id' => 356,
                    'brand_id' => 13,
                    'fipe_code' => '011010-8',
                    'model' => 'ZX Volcane 3p e 5p',
                    'years' => '1993 a 1998'
                ]
            ]

        ];

        $crossLanderModels = [
            [
                'id' => 357,
                'brand_id' => 14, // ID da marca Cross Lander
                'fipe_code' => '059001-0',
                'model' => 'CL-244 2.8 132cv 4x4 TB Int. Diesel',
                'years' => '2003 a 2006'
            ],
            [
                'id' => 3964,
                'brand_id' => 14, // ID da marca Cross Lander
                'fipe_code' => '059002-9',
                'model' => 'CL-330 2.8 132cv 4x4 TB Int. Diesel',
                'years' => '2006 a 2006'
            ]
        ];
        

        $daewooModels = [
            [
                'id' => 358,
                'brand_id' => 15, // ID da marca Daewoo
                'fipe_code' => '030017-9',
                'model' => 'Espero 2.0',
                'years' => '1994 a 1995'
            ],
            [
                'id' => 359,
                'brand_id' => 15, // ID da marca Daewoo
                'fipe_code' => '030001-2',
                'model' => 'Espero CD / DLX 2.0',
                'years' => '1994 a 1997'
            ],
            [
                'id' => 360,
                'brand_id' => 15, // ID da marca Daewoo
                'fipe_code' => '030010-1',
                'model' => 'Lanos Hatch SX 1.6 16V',
                'years' => '1999 a 1999'
            ],
            [
                'id' => 361,
                'brand_id' => 15, // ID da marca Daewoo
                'fipe_code' => '030005-5',
                'model' => 'Lanos SX 1.6 16V',
                'years' => '1997 a 1999'
            ],
            [
                'id' => 362,
                'brand_id' => 15, // ID da marca Daewoo
                'fipe_code' => '030009-8',
                'model' => 'Lanos SX 1.6 16V Aut.',
                'years' => '1997 a 2001'
            ],
            [
                'id' => 363,
                'brand_id' => 15, // ID da marca Daewoo
                'fipe_code' => '030012-8',
                'model' => 'Leganza CDX 2.0 16V Aut.',
                'years' => '1997 a 1999'
            ],
            [
                'id' => 364,
                'brand_id' => 15, // ID da marca Daewoo
                'fipe_code' => '030006-3',
                'model' => 'Leganza CDX 2.0 16V Mec.',
                'years' => '1997 a 1999'
            ],
            [
                'id' => 365,
                'brand_id' => 15, // ID da marca Daewoo
                'fipe_code' => '030013-6',
                'model' => 'Nubira CDX 2.0 16V Aut.',
                'years' => '1997 a 1999'
            ],
            [
                'id' => 366,
                'brand_id' => 15, // ID da marca Daewoo
                'fipe_code' => '030007-1',
                'model' => 'Nubira CDX 2.0 16V Mec.',
                'years' => '1997 a 1999'
            ],
            [
                'id' => 367,
                'brand_id' => 15, // ID da marca Daewoo
                'fipe_code' => '030014-4',
                'model' => 'Nubira SW CDX 2.0 16V Aut.',
                'years' => '1998 a 1999'
            ],
            [
                'id' => 368,
                'brand_id' => 15, // ID da marca Daewoo
                'fipe_code' => '030008-0',
                'model' => 'Nubira SW CDX 2.0 16V Mec.',
                'years' => '1998 a 1999'
            ],
            [
                'id' => 369,
                'brand_id' => 15, // ID da marca Daewoo
                'fipe_code' => '030002-0',
                'model' => 'Prince Ace 2.0',
                'years' => '1994 a 1995'
            ],
            [
                'id' => 370,
                'brand_id' => 15, // ID da marca Daewoo
                'fipe_code' => '030011-0',
                'model' => 'Racer GTi 1.5 16V',
                'years' => '1995 a 1995'
            ],
            [
                'id' => 371,
                'brand_id' => 15, // ID da marca Daewoo
                'fipe_code' => '030004-7',
                'model' => 'Super Salon Ace',
                'years' => '1994 a 1995'
            ],
            [
                'id' => 372,
                'brand_id' => 15, // ID da marca Daewoo
                'fipe_code' => '030003-9',
                'model' => 'Tico',
                'years' => '1994 a 1995'
            ]
        ];

        $daihatsuModels = [
            [
                'id' => 373,
                'brand_id' => 16, // ID da marca Daihatsu
                'fipe_code' => '012012-0',
                'model' => 'Applause 1.6 16V',
                'years' => '1994 a 1995'
            ],
            [
                'id' => 374,
                'brand_id' => 16, // ID da marca Daihatsu
                'fipe_code' => '012011-1',
                'model' => 'Applause DLX 1.6 16V',
                'years' => '1994 a 1995'
            ],
            [
                'id' => 375,
                'brand_id' => 16, // ID da marca Daihatsu
                'fipe_code' => '012015-4',
                'model' => 'Charade CX/TS 1.0',
                'years' => '1994 a 1995'
            ],
            [
                'id' => 377,
                'brand_id' => 16, // ID da marca Daihatsu
                'fipe_code' => '012006-5',
                'model' => 'Charade Sedan 1.3i 16V',
                'years' => '1994 a 1995'
            ],
            [
                'id' => 376,
                'brand_id' => 16, // ID da marca Daihatsu
                'fipe_code' => '012001-4',
                'model' => 'Charade Sedan 1.5/DLX 1.3',
                'years' => '1994 a 1995'
            ],
            [
                'id' => 378,
                'brand_id' => 16, // ID da marca Daihatsu
                'fipe_code' => '012002-2',
                'model' => 'Charade TS/TSi 1.3/LSi 1.5 16V',
                'years' => '1994 a 1995'
            ],
            [
                'id' => 379,
                'brand_id' => 16, // ID da marca Daihatsu
                'fipe_code' => '012010-3',
                'model' => 'Charade TX 1.3 16V',
                'years' => '1995 a 1995'
            ],
            [
                'id' => 380,
                'brand_id' => 16, // ID da marca Daihatsu
                'fipe_code' => '012013-8',
                'model' => 'Cuore 0/TS0 85i',
                'years' => '1995 a 1999'
            ],
            [
                'id' => 381,
                'brand_id' => 16, // ID da marca Daihatsu
                'fipe_code' => '012003-0',
                'model' => 'Cuore CS/CSL',
                'years' => '1995 a 1998'
            ],
            [
                'id' => 382,
                'brand_id' => 16, // ID da marca Daihatsu
                'fipe_code' => '012004-9',
                'model' => 'Cuore TS/TSL',
                'years' => '1995 a 1997'
            ],
            [
                'id' => 383,
                'brand_id' => 16, // ID da marca Daihatsu
                'fipe_code' => '012009-0',
                'model' => 'Feroza DX 1.6 16V',
                'years' => '1994 a 1995'
            ],
            [
                'id' => 384,
                'brand_id' => 16, // ID da marca Daihatsu
                'fipe_code' => '012005-7',
                'model' => 'Feroza SX 1.6i 16V',
                'years' => '1994 a 1997'
            ],
            [
                'id' => 385,
                'brand_id' => 16, // ID da marca Daihatsu
                'fipe_code' => '012007-3',
                'model' => 'Gran Move 1.5/1.6 16V',
                'years' => '1996 a 1999'
            ],
            [
                'id' => 386,
                'brand_id' => 16, // ID da marca Daihatsu
                'fipe_code' => '012014-6',
                'model' => 'Move Van',
                'years' => '1996 a 1997'
            ],
            [
                'id' => 387,
                'brand_id' => 16, // ID da marca Daihatsu
                'fipe_code' => '012008-1',
                'model' => 'Terios 1.3 16V',
                'years' => '1997 a 1999'
            ]
        ];
        
        $dodgeModels = [
            [
                [
                    'id'=> 388,
                    'brand_id' => 17,
                    'fipe_code'=> '013010-9',
                    'model'=> 'Avenger ES 2.0\/2.5 16V',
                    'years'=> '1994 a 1995'
                ],
                [
                    'id'=> 389,
                    'brand_id' => 17,
                    'fipe_code'=> '013004-4',
                    'model'=> 'Dakota 2.5',
                    'years'=> '1998 a 2001'
                ],
                [
                    'id'=> 390,
                    'brand_id' => 17,
                    'fipe_code'=> '013013-3',
                    'model'=> 'Dakota Club 2.5',
                    'years'=> '1995 a 1995'
                ],
                [
                    'id'=> 391,
                    'brand_id' => 17,
                    'fipe_code'=> '013015-0',
                    'model'=> 'Dakota Durango 5.9 4x4 V8',
                    'years'=> '1998 a 2000'
                ],
                [
                    'id'=> 392,
                    'brand_id' => 17,
                    'fipe_code'=> '013016-8',
                    'model'=> 'Dakota Durango SLT 5.2 4x4 V8',
                    'years'=> '1998 a 2000'
                ],
                [
                    'id'=> 394,
                    'brand_id' => 17,
                    'fipe_code'=> '013018-4',
                    'model'=> 'Dakota RT 5.2 Aut.',
                    'years'=> '2000 a 2001'
                ],
                [
                    'id'=> 395,
                    'brand_id' => 17,
                    'fipe_code'=> '013019-2',
                    'model'=> 'Dakota RT 5.2 CE Aut.',
                    'years'=> '2000 a 2001'
                ],
                [
                    'id'=> 396,
                    'brand_id' => 17,
                    'fipe_code'=> '013014-1',
                    'model'=> 'Dakota Sport 2.5 4x4',
                    'years'=> '1995 a 1995'
                ],
                [
                    'id'=> 397,
                    'brand_id' => 17,
                    'fipe_code'=> '013022-2',
                    'model'=> 'Dakota Sport 2.5 CD Diesel',
                    'years'=> '2001 a 2001'
                ],
                [
                    'id'=> 398,
                    'brand_id' => 17,
                    'fipe_code'=> '013006-0',
                    'model'=> 'Dakota Sport 2.5 Diesel',
                    'years'=> '1999 a 2001'
                ],
                [
                    'id'=> 399,
                    'brand_id' => 17,
                    'fipe_code'=> '013005-2',
                    'model'=> 'Dakota Sport 3.9 V6',
                    'years'=> '1998 a 2001'
                ],
                [
                    'id'=> 400,
                    'brand_id' => 17,
                    'fipe_code'=> '013021-4',
                    'model'=> 'Dakota Sport 3.9 V6 CD Aut.',
                    'years'=> '2001 a 2001'
                ],
                [
                    'id'=> 401,
                    'brand_id' => 17,
                    'fipe_code'=> '013020-6',
                    'model'=> 'Dakota Sport 3.9 V6 CD Mec.',
                    'years'=> '2001 a 2001'
                ],
                [
                    'id'=> 402,
                    'brand_id' => 17,
                    'fipe_code'=> '013011-7',
                    'model'=> 'Dakota Sport 5.2 V8',
                    'years'=> '1997 a 2000'
                ],
                [
                    'id'=> 403,
                    'brand_id' => 17,
                    'fipe_code'=> '013023-0',
                    'model'=> 'Dakota Sport 5.2 V8 CD Aut.',
                    'years'=> '2001 a 2001'
                ],
                [
                    'id'=> 404,
                    'brand_id' => 17,
                    'fipe_code'=> '013008-7',
                    'model'=> 'Dakota Sport CE 2.5 Diesel',
                    'years'=> '1999 a 2001'
                ],
                [
                    'id'=> 405,
                    'brand_id' => 17,
                    'fipe_code'=> '013007-9',
                    'model'=> 'Dakota Sport CE 3.9 V6',
                    'years'=> '1998 a 2001'
                ],
                [
                    'id'=> 6316,
                    'brand_id' => 17,
                    'fipe_code'=> '013034-6',
                    'model'=> 'Durango Citadel 3.6 24V 4x4 Aut.',
                    'years'=> '2013 a 2013'
                ],
                [
                    'id'=> 6317,
                    'brand_id' => 17,
                    'fipe_code'=> '013035-4',
                    'model'=> 'Durango Crew 3.6 24V 4x4 Aut.',
                    'years'=> '2012 a 2013'
                ],
                [
                    'id'=> 7131,
                    'brand_id' => 17,
                    'fipe_code'=> '013038-9',
                    'model'=> 'Durango Limited 3.6 24V 4x4 Aut.',
                    'years'=> '2015 a 2015'
                ],
                [
                    'id'=> 393,
                    'brand_id' => 17,
                    'fipe_code'=> '013017-6',
                    'model'=> 'Intrepid 3.3 V6',
                    'years'=> '1993 a 1993'
                ],
                [
                    'id'=> 6953,
                    'brand_id' => 17,
                    'fipe_code'=> '013037-0',
                    'model'=> 'JOURNEY Crossroad 3.6 V6 Aut.',
                    'years'=> '2014 a 2015'
                ],
                [
                    'id'=> 5695,
                    'brand_id' => 17,
                    'fipe_code'=> '013031-1',
                    'model'=> 'JOURNEY RT  3.6 V6 Aut.',
                    'years'=> '2011 a 2018'
                ],
                [
                    'id'=> 5238,
                    'brand_id' => 17,
                    'fipe_code'=> '013029-0',
                    'model'=> 'JOURNEY RT 2.7 V6 185cv Aut.',
                    'years'=> '2010 a 2011'
                ],
                [
                    'id'=> 6954,
                    'brand_id' => 17,
                    'fipe_code'=> '013036-2',
                    'model'=> 'JOURNEY RT 3.6 AWD V6 Aut.',
                    'years'=> '2014 a 2016'
                ],
                [
                    'id'=> 5270,
                    'brand_id' => 17,
                    'fipe_code'=> '013030-3',
                    'model'=> 'JOURNEY SE 2.7 V6 185cv Aut.',
                    'years'=> '2010 a 2010'
                ],
                [
                    'id'=> 4732,
                    'brand_id' => 17,
                    'fipe_code'=> '013027-3',
                    'model'=> 'JOURNEY SXT 2.7 V6 185cv Aut.',
                    'years'=> '2009 a 2011'
                ],
                [
                    'id'=> 5694,
                    'brand_id' => 17,
                    'fipe_code'=> '013032-0',
                    'model'=> 'JOURNEY SXT 3.6 V6 Aut.',
                    'years'=> '2012 a 2015'
                ],
                [
                    'id'=> 406,
                    'brand_id' => 17,
                    'fipe_code'=> '013024-9',
                    'model'=> 'Ram 2500 H.DUTY 5.9 SLT 24V CD 4x4 Dies.',
                    'years'=> '2004 a 2009'
                ],
                [
                    'id'=> 3931,
                    'brand_id' => 17,
                    'fipe_code'=> '013025-7',
                    'model'=> 'Ram 2500 H.DUTY 5.9 SLT TDI CS 4x4 Dies.',
                    'years'=> '2006 a 2009'
                ],
                [
                    'id'=> 5924,
                    'brand_id' => 17,
                    'fipe_code'=> '013033-8',
                    'model'=> 'Ram 2500 LARAMIE 6.7 TDI CD 4x4 Dies',
                    'years'=> '2012 a 2012'
                ],
                [
                    'id'=> 5150,
                    'brand_id' => 17,
                    'fipe_code'=> '013028-1',
                    'model'=> 'Ram 2500 TROPIVAN 5.9 SLT Exec.TDI Dies.',
                    'years'=> '2010 a 2010'
                ],
                [
                    'id'=> 4575,
                    'brand_id' => 17,
                    'fipe_code'=> '013026-5',
                    'model'=> 'Ram 2500 TROPIVAN 5.9 SLT TDI 4x4 Dies.',
                    'years'=> '2005 a 2010'
                ],
                [
                    'id'=> 407,
                    'brand_id' => 17,
                    'fipe_code'=> '013003-6',
                    'model'=> 'Ram Laramie 5.9 V8',
                    'years'=> '1994 a 1995'
                ],
                [
                    'id'=> 408,
                    'brand_id' => 17,
                    'fipe_code'=> '013002-8',
                    'model'=> 'Ram Laramie\/SLT 5.2 V8',
                    'years'=> '1994 a 1996'
                ],
                [
                    'id'=> 409,
                    'brand_id' => 17,
                    'fipe_code'=> '013001-0',
                    'model'=> 'Ram Sport 5.9 V8',
                    'years'=> '1994 a 2001'
                ],
                [
                    'id'=> 410,
                    'brand_id' => 17,
                    'fipe_code'=> '013009-5',
                    'model'=> 'Stealth 3.0 MPI',
                    'years'=> '1992 a 1994'
                ]
            ]  
        ];

        $engesaModels = [
            [
                'id' => 411,
                'brand_id' => 18, // ID da marca Engesa
                'fipe_code' => '043001-3',
                'model' => 'Engesa 4x4 2.5/4.1',
                'years' => '1985 a 1994'
            ],
            [
                'id' => 412,
                'brand_id' => 18, // ID da marca Engesa
                'fipe_code' => '043002-1',
                'model' => 'Engesa 4x4 4.0 Diesel',
                'years' => '1986 a 1994'
            ]
        ];
        
        // Inserir os modelos de carro na tabela car_models
        foreach (array_merge($acuraModels, $agraleModels, $alfaRomeoModels, $hummerModels, $asiaMotorsModels, $audiModel, $bmwModels, $brmModels, $cadilacModels, $cbtJipeModels, $chryslerModels, $citroenModels, $crossLanderModels, $daewooModels,$daihatsuModels,$dodgeModels, $engesaModels) as $model) {
            DB::table('car_models')->insert($model);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_models');
    }
};
