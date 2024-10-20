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
        Schema::create('bike_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id'); // Chave estrangeira para a tabela brands
            $table->string('fipe_code');
            $table->string('model');
            $table->string('years');
            $table->timestamps();

            // Definindo a chave estrangeira
            $table->foreign('brand_id')->references('id')->on('bike_brands')->onDelete('cascade');
        });

        $ADLYModels = [
            [
                'id' => 2576,
                'brand_id' => 60,
                'fipe_code' => '840015-6',
                'model' => 'ATV 100',
                'years' => '2000 a 2002'
            ],

            [
                'id' => 2577,
                'brand_id' => 60,
                'fipe_code' => '840014-8',
                'model' => 'ATV 50',
                'years' => '2000 a 2001'
            ],

            [
                'id' => 2578,
                'brand_id' => 60,
                'fipe_code' => '840007-5',
                'model' => 'JAGUAR JT 100',
                'years' => '1996 a 1999'
            ],

            [
                'id' => 2579,
                'brand_id' => 60,
                'fipe_code' => '840008-3',
                'model' => 'JAGUAR JT 50',
                'years' => '1996 a 2001'
            ],

            [
                'id' => 2580,
                'brand_id' => 60,
                'fipe_code' => '840016-4',
                'model' => 'RT 50',
                'years' => '2001 a 2001'
            ]
        ];

        $AGRALEModels = [
            [
                'id' => 2581,
                'brand_id' => 61,
                'fipe_code' => '801002-1',
                'model' => 'CITY 50',
                'years' => '1997 a 2001'
            ],

            [
                'id' => 2582,
                'brand_id' => 61,
                'fipe_code' => '801003-0',
                'model' => 'CITY 90',
                'years' => '1997 a 1999'
            ],

            [
                'id' => 2583,
                'brand_id' => 61,
                'fipe_code' => '801004-8',
                'model' => 'DAKAR 30.0 190cc',
                'years' => '1990 a 1994'
            ],

            [
                'id' => 2584,
                'brand_id' => 61,
                'fipe_code' => '801005-6',
                'model' => 'DAKAR 50',
                'years' => '1997 a 2000'
            ],

            [
                'id' => 2585,
                'brand_id' => 61,
                'fipe_code' => '801007-2',
                'model' => 'ELEFANT 16.5 125cc',
                'years' => '1990 a 1990'
            ],

            [
                'id' => 2586,
                'brand_id' => 61,
                'fipe_code' => '801006-4',
                'model' => 'ELEFANT 27.5 190cc',
                'years' => '1990 a 1991'
            ],

            [
                'id' => 2587,
                'brand_id' => 61,
                'fipe_code' => '801008-0',
                'model' => 'ELEFANTRE 16.5 ES 125cc',
                'years' => '1990 a 1994'
            ],

            [
                'id' => 2588,
                'brand_id' => 61,
                'fipe_code' => '801009-9',
                'model' => 'ELEFANTRE 30.0 ES 190cc',
                'years' => '1990 a 1998'
            ],

            [
                'id' => 2589,
                'brand_id' => 61,
                'fipe_code' => '801010-2',
                'model' => 'FORCE 50',
                'years' => '1997 a 2000'
            ],

            [
                'id' => 2590,
                'brand_id' => 61,
                'fipe_code' => '801011-0',
                'model' => 'FORCE 90',
                'years' => '1997 a 1999'
            ],

            [
                'id' => 2591,
                'brand_id' => 61,
                'fipe_code' => '801012-9',
                'model' => 'JUNIOR 50',
                'years' => '1995 a 1996'
            ],

            [
                'id' => 2592,
                'brand_id' => 61,
                'fipe_code' => '801014-5',
                'model' => 'SST 13.5 125cc',
                'years' => '1990 a 1998'
            ],

            [
                'id' => 2593,
                'brand_id' => 61,
                'fipe_code' => '801020-0',
                'model' => 'SUPER CITY 125',
                'years' => '1994 a 1994'
            ],

            [
                'id' => 2594,
                'brand_id' => 61,
                'fipe_code' => '801016-1',
                'model' => 'SUPER CITY 150',
                'years' => '1994 a 1996'
            ],

            [
                'id' => 2595,
                'brand_id' => 61,
                'fipe_code' => '801017-0',
                'model' => 'SXT 27.5 E 190cc',
                'years' => '1990 a 1995'
            ],

            [
                'id' => 2596,
                'brand_id' => 61,
                'fipe_code' => '801018-8',
                'model' => 'SXT 27.5 EX 190cc',
                'years' => '1991 a 1997'
            ],

            [
                'id' => 2597,
                'brand_id' => 61,
                'fipe_code' => '801019-6',
                'model' => 'TCHAU 50',
                'years' => '1995 a 2004'
            ]
        ];

        $APRILIAModels = [
            [
                'id' => 2598,
                'brand_id' => 62,
                'fipe_code' => '802001-9',
                'model' => 'AREA-51 50cc',
                'years' => '1998 a 2000'
            ],

            [
                'id' => 2599,
                'brand_id' => 62,
                'fipe_code' => '802002-7',
                'model' => 'CLASSIC 50cc',
                'years' => '1998 a 2000'
            ],

            [
                'id' => 2600,
                'brand_id' => 62,
                'fipe_code' => '802003-5',
                'model' => 'LEONARDO 150cc',
                'years' => '1998 a 2000'
            ],

            [
                'id' => 2601,
                'brand_id' => 62,
                'fipe_code' => '802004-3',
                'model' => 'MOTO 650cc',
                'years' => '1998 a 2000'
            ],

            [
                'id' => 2602,
                'brand_id' => 62,
                'fipe_code' => '802005-1',
                'model' => 'PEGASO 650cc',
                'years' => '1998 a 2002'
            ],

            [
                'id' => 2603,
                'brand_id' => 62,
                'fipe_code' => '802006-0',
                'model' => 'RALLY 50cc',
                'years' => '1998 a 2001'
            ],

            [
                'id' => 2604,
                'brand_id' => 62,
                'fipe_code' => '802007-8',
                'model' => 'RS 250cc',
                'years' => '1998 a 2000'
            ],

            [
                'id' => 2605,
                'brand_id' => 62,
                'fipe_code' => '802008-6',
                'model' => 'RS 50cc',
                'years' => '1998 a 2001'
            ],

            [
                'id' => 2606,
                'brand_id' => 62,
                'fipe_code' => '802009-4',
                'model' => 'RSV MILLE 1000cc',
                'years' => '1999 a 2000'
            ],

            [
                'id' => 2607,
                'brand_id' => 62,
                'fipe_code' => '802010-8',
                'model' => 'RX 50cc',
                'years' => '1998 a 2000'
            ],

            [
                'id' => 2608,
                'brand_id' => 62,
                'fipe_code' => '802011-6',
                'model' => 'SCARABEO BRIGTH 50cc',
                'years' => '1998 a 1999'
            ],

            [
                'id' => 2609,
                'brand_id' => 62,
                'fipe_code' => '802012-4',
                'model' => 'SCARABEO CLASSIC 50cc',
                'years' => '1998 a 2000'
            ],

            [
                'id' => 2610,
                'brand_id' => 62,
                'fipe_code' => '802013-2',
                'model' => 'SCARABEO DELUXE 50cc',
                'years' => '1998 a 2000'
            ],

            [
                'id' => 2611,
                'brand_id' => 62,
                'fipe_code' => '802014-0',
                'model' => 'SONIC 50cc',
                'years' => '1998 a 2000'
            ],

            [
                'id' => 8303,
                'brand_id' => 62,
                'fipe_code' => '802019-1',
                'model' => 'SR 150cc',
                'years' => '2017 a 2020'
            ],

            [
                'id' => 8304,
                'brand_id' => 62,
                'fipe_code' => '802018-3',
                'model' => 'SR RACE 150cc',
                'years' => '2017 a 2020'
            ],

            [
                'id' => 2612,
                'brand_id' => 62,
                'fipe_code' => '802015-9',
                'model' => 'SR RACING 50cc',
                'years' => '1998 a 2001'
            ],

            [
                'id' => 2613,
                'brand_id' => 62,
                'fipe_code' => '802017-5',
                'model' => 'SR WWW 50cc',
                'years' => '1998 a 2001'
            ],

            [
                'id' => 10130,
                'brand_id' => 62,
                'fipe_code' => '802020-5',
                'model' => 'SXR 160cc',
                'years' => '2022 a 2022'
            ]
        ];

        $ATALAModels = [
            [
                'id' => 2614,
                'brand_id' => 63,
                'fipe_code' => '829002-4',
                'model' => 'CALIFFONE 50cc',
                'years' => '2000 a 2003'
            ],

            [
                'id' => 2615,
                'brand_id' => 63,
                'fipe_code' => '829001-6',
                'model' => 'MASTER 50cc',
                'years' => '2000 a 2003'
            ],

            [
                'id' => 2616,
                'brand_id' => 63,
                'fipe_code' => '829003-2',
                'model' => 'SKEGIA 50cc',
                'years' => '2000 a 2003'
            ]
        ];

        $BAJAJModels = [
            [
                'id' => 2617,
                'brand_id' => 64,
                'fipe_code' => '837001-0',
                'model' => 'CHAMPION 45 100cc',
                'years' => '1997 a 1998'
            ],

            [
                'id' => 2618,
                'brand_id' => 64,
                'fipe_code' => '837002-8',
                'model' => 'CLASSIC 150cc',
                'years' => '1998 a 1998'
            ],

            [
                'id' => 10380,
                'brand_id' => 64,
                'fipe_code' => '837004-4',
                'model' => 'DOMINAR 160',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 10381,
                'brand_id' => 64,
                'fipe_code' => '837005-2',
                'model' => 'DOMINAR 200',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 11144,
                'brand_id' => 64,
                'fipe_code' => '837006-0',
                'model' => 'DOMINAR 250',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 10382,
                'brand_id' => 64,
                'fipe_code' => '837003-6',
                'model' => 'DOMINAR 400 ',
                'years' => '2023 a Zero Km'
            ]
        ];

        $BETAModels = [
            [
                'id' => 2619,
                'brand_id' => 65,
                'fipe_code' => '830001-1',
                'model' => 'MX-50 CROSS 50cc',
                'years' => '2000 a 2002'
            ],

            [
                'id' => 2620,
                'brand_id' => 65,
                'fipe_code' => '830002-0',
                'model' => 'MX-50 ENDURO 50cc',
                'years' => '2000 a 2002'
            ]
        ];

        $BIMOTAModels = [
            [
                'id' => 2621,
                'brand_id' => 66,
                'fipe_code' => '828002-9',
                'model' => 'DB4 904cc',
                'years' => '2000 a 2000'
            ],

            [
                'id' => 4781,
                'brand_id' => 66,
                'fipe_code' => '828004-5',
                'model' => 'DB5R 1078cc',
                'years' => '2008 a 2010'
            ],

            [
                'id' => 4782,
                'brand_id' => 66,
                'fipe_code' => '828006-1',
                'model' => 'DB6 Delirio 1078cc',
                'years' => '2008 a 2010'
            ],

            [
                'id' => 4783,
                'brand_id' => 66,
                'fipe_code' => '828005-3',
                'model' => 'DB6R Delirio 1078cc',
                'years' => '2008 a 2011'
            ],

            [
                'id' => 5090,
                'brand_id' => 66,
                'fipe_code' => '828007-0',
                'model' => 'DB7 1099cc',
                'years' => '2010 a 2011'
            ],

            [
                'id' => 2622,
                'brand_id' => 66,
                'fipe_code' => '828001-0',
                'model' => 'MANTRA 904cc',
                'years' => '2000 a 2000'
            ],

            [
                'id' => 2623,
                'brand_id' => 66,
                'fipe_code' => '828003-7',
                'model' => 'SBR8 SPECIAL 996cc',
                'years' => '2000 a 2000'
            ],

            [
                'id' => 5285,
                'brand_id' => 66,
                'fipe_code' => '828009-6',
                'model' => 'Tesi 3D 1100cc ( Alumínio)',
                'years' => '2009 a 2010'
            ],

            [
                'id' => 5091,
                'brand_id' => 66,
                'fipe_code' => '828008-8',
                'model' => 'Tesi 3D 1100cc ( Carbono )',
                'years' => '2008 a 2010'
            ]
        ];

        $BMWModels = [
            [
                'id' => 10895,
                'brand_id' => 67,
                'fipe_code' => '803101-0',
                'model' => 'C 400 X',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 10896,
                'brand_id' => 67,
                'fipe_code' => '803100-2',
                'model' => 'C 400 X Sport',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 6760,
                'brand_id' => 67,
                'fipe_code' => '803053-7',
                'model' => 'C 600 Sport',
                'years' => '2013 a 2015'
            ],

            [
                'id' => 7219,
                'brand_id' => 67,
                'fipe_code' => '803057-0',
                'model' => 'C 650 GT',
                'years' => '2014 a 2015'
            ],

            [
                'id' => 2624,
                'brand_id' => 67,
                'fipe_code' => '803001-4',
                'model' => 'F 650',
                'years' => '1994 a 1999'
            ],

            [
                'id' => 2625,
                'brand_id' => 67,
                'fipe_code' => '803019-7',
                'model' => 'F 650 CS',
                'years' => '2002 a 2004'
            ],

            [
                'id' => 2626,
                'brand_id' => 67,
                'fipe_code' => '803015-4',
                'model' => 'F 650 GS/Dakar',
                'years' => '2000 a 2011'
            ],

            [
                'id' => 7819,
                'brand_id' => 67,
                'fipe_code' => '803059-6',
                'model' => 'F 700 GS',
                'years' => '2017 a 2018'
            ],

            [
                'id' => 8533,
                'brand_id' => 67,
                'fipe_code' => '803067-7',
                'model' => 'F 750 GS Premium',
                'years' => '2019 a Zero Km'
            ],

            [
                'id' => 9570,
                'brand_id' => 67,
                'fipe_code' => '803088-0',
                'model' => 'F 750 GS Premium 40 Anos',
                'years' => '2021 a 2021'
            ],

            [
                'id' => 8534,
                'brand_id' => 67,
                'fipe_code' => '803066-9',
                'model' => 'F 750 GS Sport',
                'years' => '2019 a Zero Km'
            ],

            [
                'id' => 4805,
                'brand_id' => 67,
                'fipe_code' => '803034-0',
                'model' => 'F 800 GS 798cc',
                'years' => '2008 a 2018'
            ],

            [
                'id' => 11145,
                'brand_id' => 67,
                'fipe_code' => '803111-8',
                'model' => 'F 800 GS 895cc',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 6653,
                'brand_id' => 67,
                'fipe_code' => '803051-0',
                'model' => 'F 800 GS Adventure',
                'years' => '2014 a 2018'
            ],

            [
                'id' => 11146,
                'brand_id' => 67,
                'fipe_code' => '803113-4',
                'model' => 'F 800 GS Plus 895cc',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 6362,
                'brand_id' => 67,
                'fipe_code' => '803050-2',
                'model' => 'F 800 GS Triple Black/trophy',
                'years' => '2012 a 2018'
            ],

            [
                'id' => 5048,
                'brand_id' => 67,
                'fipe_code' => '803039-1',
                'model' => 'F 800 R',
                'years' => '2010 a 2017'
            ],

            [
                'id' => 4252,
                'brand_id' => 67,
                'fipe_code' => '803030-8',
                'model' => 'F 800 S 798cc',
                'years' => '2007 a 2008'
            ],

            [
                'id' => 8646,
                'brand_id' => 67,
                'fipe_code' => '803071-5',
                'model' => 'F 850 GS Adventure Premium',
                'years' => '2019 a Zero Km'
            ],

            [
                'id' => 9571,
                'brand_id' => 67,
                'fipe_code' => '803089-8',
                'model' => 'F 850 GS Adventure Premium 40 anos',
                'years' => '2021 a 2022'
            ],

            [
                'id' => 8647,
                'brand_id' => 67,
                'fipe_code' => '803070-7',
                'model' => 'F 850 GS Adventure Sport',
                'years' => '2019 a 2020'
            ],

            [
                'id' => 8535,
                'brand_id' => 67,
                'fipe_code' => '803069-3',
                'model' => 'F 850 GS Premium',
                'years' => '2019 a Zero Km'
            ],

            [
                'id' => 10124,
                'brand_id' => 67,
                'fipe_code' => '803093-6',
                'model' => 'F 850 GS Premium 40 anos',
                'years' => '2021 a 2022'
            ],

            [
                'id' => 8536,
                'brand_id' => 67,
                'fipe_code' => '803068-5',
                'model' => 'F 850 GS Sport',
                'years' => '2019 a 2019'
            ],

            [
                'id' => 11147,
                'brand_id' => 67,
                'fipe_code' => '803108-8',
                'model' => 'F 900 GS',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 11148,
                'brand_id' => 67,
                'fipe_code' => '803107-0',
                'model' => 'F 900 GS Adventure Plus',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 11149,
                'brand_id' => 67,
                'fipe_code' => '803109-6',
                'model' => 'F 900 GS Plus',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 11150,
                'brand_id' => 67,
                'fipe_code' => '803112-6',
                'model' => 'F 900 GS Trophy',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 11151,
                'brand_id' => 67,
                'fipe_code' => '803110-0',
                'model' => 'F 900 GS Trophy Pro',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 10383,
                'brand_id' => 67,
                'fipe_code' => '803096-0',
                'model' => 'F 900 R Sport ',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 10384,
                'brand_id' => 67,
                'fipe_code' => '803097-9',
                'model' => 'F 900 R Sport Plus',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 8221,
                'brand_id' => 67,
                'fipe_code' => '803062-6',
                'model' => 'G 310 GS',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 8029,
                'brand_id' => 67,
                'fipe_code' => '803060-0',
                'model' => 'G 310 R',
                'years' => '2017 a Zero Km'
            ],

            [
                'id' => 4817,
                'brand_id' => 67,
                'fipe_code' => '803035-9',
                'model' => 'G 450 X',
                'years' => '2009 a 2010'
            ],

            [
                'id' => 5196,
                'brand_id' => 67,
                'fipe_code' => '803040-5',
                'model' => 'G 650 GS',
                'years' => '2010 a 2016'
            ],

            [
                'id' => 5985,
                'brand_id' => 67,
                'fipe_code' => '803045-6',
                'model' => 'G 650 GS Sertão',
                'years' => '2012 a 2013'
            ],

            [
                'id' => 4443,
                'brand_id' => 67,
                'fipe_code' => '803031-6',
                'model' => 'G 650 X Challenge',
                'years' => '2007 a 2008'
            ],

            [
                'id' => 4650,
                'brand_id' => 67,
                'fipe_code' => '803033-2',
                'model' => 'G 650 X Country',
                'years' => '2008 a 2009'
            ],

            [
                'id' => 4444,
                'brand_id' => 67,
                'fipe_code' => '803032-4',
                'model' => 'G 650 X Moto',
                'years' => '2007 a 2008'
            ],

            [
                'id' => 2627,
                'brand_id' => 67,
                'fipe_code' => '803002-2',
                'model' => 'K 1100 LT',
                'years' => '1994 a 1996'
            ],

            [
                'id' => 2628,
                'brand_id' => 67,
                'fipe_code' => '803003-0',
                'model' => 'K 1100 RS',
                'years' => '1993 a 1997'
            ],

            [
                'id' => 2629,
                'brand_id' => 67,
                'fipe_code' => '803023-5',
                'model' => 'K 1200 GT',
                'years' => '2003 a 2008'
            ],

            [
                'id' => 2630,
                'brand_id' => 67,
                'fipe_code' => '803004-9',
                'model' => 'K 1200 LT',
                'years' => '1999 a 2008'
            ],

            [
                'id' => 3836,
                'brand_id' => 67,
                'fipe_code' => '803027-8',
                'model' => 'K 1200 R',
                'years' => '2006 a 2008'
            ],

            [
                'id' => 2631,
                'brand_id' => 67,
                'fipe_code' => '803005-7',
                'model' => 'K 1200 RS',
                'years' => '1997 a 2005'
            ],

            [
                'id' => 2632,
                'brand_id' => 67,
                'fipe_code' => '803026-0',
                'model' => 'K 1200 S',
                'years' => '2005 a 2008'
            ],

            [
                'id' => 4870,
                'brand_id' => 67,
                'fipe_code' => '803038-3',
                'model' => 'K 1300 GT',
                'years' => '2009 a 2011'
            ],

            [
                'id' => 4871,
                'brand_id' => 67,
                'fipe_code' => '803037-5',
                'model' => 'K 1300 R',
                'years' => '2009 a 2014'
            ],

            [
                'id' => 4872,
                'brand_id' => 67,
                'fipe_code' => '803036-7',
                'model' => 'K 1300 S',
                'years' => '2009 a 2014'
            ],

            [
                'id' => 8187,
                'brand_id' => 67,
                'fipe_code' => '803061-8',
                'model' => 'K 1600 BAGGER',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 5631,
                'brand_id' => 67,
                'fipe_code' => '803042-1',
                'model' => 'K 1600 GT',
                'years' => '2011 a 2015'
            ],

            [
                'id' => 5630,
                'brand_id' => 67,
                'fipe_code' => '803043-0',
                'model' => 'K 1600 GTL',
                'years' => '2011 a Zero Km'
            ],

            [
                'id' => 6847,
                'brand_id' => 67,
                'fipe_code' => '803054-5',
                'model' => 'K 1600 GTL Exclusive',
                'years' => '2014 a 2016'
            ],

            [
                'id' => 2633,
                'brand_id' => 67,
                'fipe_code' => '803007-3',
                'model' => 'R 1100 GS',
                'years' => '1995 a 1999'
            ],

            [
                'id' => 2634,
                'brand_id' => 67,
                'fipe_code' => '803006-5',
                'model' => 'R 1100 GS-75',
                'years' => '1998 a 1999'
            ],

            [
                'id' => 2635,
                'brand_id' => 67,
                'fipe_code' => '803008-1',
                'model' => 'R 1100 R',
                'years' => '1995 a 2001'
            ],

            [
                'id' => 2636,
                'brand_id' => 67,
                'fipe_code' => '803009-0',
                'model' => 'R 1100 RS',
                'years' => '1993 a 1997'
            ],

            [
                'id' => 2637,
                'brand_id' => 67,
                'fipe_code' => '803010-3',
                'model' => 'R 1100 RT',
                'years' => '1996 a 2001'
            ],

            [
                'id' => 2638,
                'brand_id' => 67,
                'fipe_code' => '803011-1',
                'model' => 'R 1100 S',
                'years' => '1998 a 2005'
            ],

            [
                'id' => 2639,
                'brand_id' => 67,
                'fipe_code' => '803012-0',
                'model' => 'R 1150 GS',
                'years' => '1999 a 2004'
            ],

            [
                'id' => 2640,
                'brand_id' => 67,
                'fipe_code' => '803020-0',
                'model' => 'R 1150 GS Adventure',
                'years' => '2002 a 2006'
            ],

            [
                'id' => 2641,
                'brand_id' => 67,
                'fipe_code' => '803016-2',
                'model' => 'R 1150 R/ R 1150 R Rockster',
                'years' => '2001 a 2006'
            ],

            [
                'id' => 2642,
                'brand_id' => 67,
                'fipe_code' => '803018-9',
                'model' => 'R 1150 RS',
                'years' => '2002 a 2003'
            ],

            [
                'id' => 2643,
                'brand_id' => 67,
                'fipe_code' => '803017-0',
                'model' => 'R 1150 RT',
                'years' => '2001 a 2005'
            ],

            [
                'id' => 11204,
                'brand_id' => 67,
                'fipe_code' => '803114-2',
                'model' => 'R 12',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 11205,
                'brand_id' => 67,
                'fipe_code' => '803116-9',
                'model' => 'R 12 719',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 11206,
                'brand_id' => 67,
                'fipe_code' => '803115-0',
                'model' => 'R 12 Cruiser',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 2644,
                'brand_id' => 67,
                'fipe_code' => '803013-8',
                'model' => 'R 1200 C AVANTGARD',
                'years' => '1999 a 2004'
            ],

            [
                'id' => 2645,
                'brand_id' => 67,
                'fipe_code' => '803014-6',
                'model' => 'R 1200 C Classic',
                'years' => '1997 a 2004'
            ],

            [
                'id' => 2646,
                'brand_id' => 67,
                'fipe_code' => '803021-9',
                'model' => 'R 1200 C Independent',
                'years' => '2001 a 2003'
            ],

            [
                'id' => 2647,
                'brand_id' => 67,
                'fipe_code' => '803022-7',
                'model' => 'R 1200 CL',
                'years' => '2003 a 2003'
            ],

            [
                'id' => 2648,
                'brand_id' => 67,
                'fipe_code' => '803024-3',
                'model' => 'R 1200 GS',
                'years' => '2004 a 2019'
            ],

            [
                'id' => 4150,
                'brand_id' => 67,
                'fipe_code' => '803029-4',
                'model' => 'R 1200 GS Adventure',
                'years' => '2006 a 2019'
            ],

            [
                'id' => 8328,
                'brand_id' => 67,
                'fipe_code' => '803064-2',
                'model' => 'R 1200 GS Adventure Exclusive',
                'years' => '2018 a 2019'
            ],

            [
                'id' => 8257,
                'brand_id' => 67,
                'fipe_code' => '803063-4',
                'model' => 'R 1200 GS Adventure RALLYE',
                'years' => '2018 a 2019'
            ],

            [
                'id' => 6333,
                'brand_id' => 67,
                'fipe_code' => '803048-0',
                'model' => 'R 1200 GS Adventure Triple Black',
                'years' => '2012 a 2018'
            ],

            [
                'id' => 8428,
                'brand_id' => 67,
                'fipe_code' => '803065-0',
                'model' => 'R 1200 GS Exclusive',
                'years' => '2018 a 2019'
            ],

            [
                'id' => 4069,
                'brand_id' => 67,
                'fipe_code' => '803028-6',
                'model' => 'R 1200 GS HP2',
                'years' => '2006 a 2007'
            ],

            [
                'id' => 6334,
                'brand_id' => 67,
                'fipe_code' => '803047-2',
                'model' => 'R 1200 GS Rallye',
                'years' => '2012 a 2019'
            ],

            [
                'id' => 6363,
                'brand_id' => 67,
                'fipe_code' => '803049-9',
                'model' => 'R 1200 GS Triple Black',
                'years' => '2011 a 2017'
            ],

            [
                'id' => 6848,
                'brand_id' => 67,
                'fipe_code' => '803055-3',
                'model' => 'R 1200 Nine T',
                'years' => '2014 a 2015'
            ],

            [
                'id' => 5712,
                'brand_id' => 67,
                'fipe_code' => '803044-8',
                'model' => 'R 1200 R/ R Classic',
                'years' => '2012 a 2014'
            ],

            [
                'id' => 2649,
                'brand_id' => 67,
                'fipe_code' => '803025-1',
                'model' => 'R 1200 RT',
                'years' => '2005 a 2014'
            ],

            [
                'id' => 9750,
                'brand_id' => 67,
                'fipe_code' => '803091-0',
                'model' => 'R 1250 GS Adv.Premium Triple Black 719',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 8718,
                'brand_id' => 67,
                'fipe_code' => '803075-8',
                'model' => 'R 1250 GS Adventure Premium',
                'years' => '2019 a 2020'
            ],

            [
                'id' => 9511,
                'brand_id' => 67,
                'fipe_code' => '803081-2',
                'model' => 'R 1250 GS Adventure Premium 40 Anos',
                'years' => '2021 a 2023'
            ],

            [
                'id' => 8719,
                'brand_id' => 67,
                'fipe_code' => '803076-6',
                'model' => 'R 1250 GS Adventure Premium Exclusive',
                'years' => '2019 a 2020'
            ],

            [
                'id' => 8720,
                'brand_id' => 67,
                'fipe_code' => '803077-4',
                'model' => 'R 1250 GS Adventure Premium HP',
                'years' => '2019 a 2020'
            ],

            [
                'id' => 9512,
                'brand_id' => 67,
                'fipe_code' => '803082-0',
                'model' => 'R 1250 GS Adventure Premium Rallye',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 9513,
                'brand_id' => 67,
                'fipe_code' => '803086-3',
                'model' => 'R 1250 GS Adventure Premium Triple Black',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 10385,
                'brand_id' => 67,
                'fipe_code' => '803095-2',
                'model' => 'R 1250 GS Adventure Premium Trophy',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 9781,
                'brand_id' => 67,
                'fipe_code' => '803092-8',
                'model' => 'R 1250 GS Ed. Especial',
                'years' => '2022 a 2022'
            ],

            [
                'id' => 9514,
                'brand_id' => 67,
                'fipe_code' => '803085-5',
                'model' => 'R 1250 GS Premium 40 Anos',
                'years' => '2021 a 2022'
            ],

            [
                'id' => 8721,
                'brand_id' => 67,
                'fipe_code' => '803074-0',
                'model' => 'R 1250 GS Premium Exclusive',
                'years' => '2019 a 2020'
            ],

            [
                'id' => 8722,
                'brand_id' => 67,
                'fipe_code' => '803073-1',
                'model' => 'R 1250 GS Premium HP',
                'years' => '2019 a 2020'
            ],

            [
                'id' => 9515,
                'brand_id' => 67,
                'fipe_code' => '803083-9',
                'model' => 'R 1250 GS Premium Rallye',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 9516,
                'brand_id' => 67,
                'fipe_code' => '803084-7',
                'model' => 'R 1250 GS Premium Triple Black',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 10087,
                'brand_id' => 67,
                'fipe_code' => '803090-1',
                'model' => 'R 1250 GS Premium Triple Black 719',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 10425,
                'brand_id' => 67,
                'fipe_code' => '803098-7',
                'model' => 'R 1250 GS Premium Trophy',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 8723,
                'brand_id' => 67,
                'fipe_code' => '803072-3',
                'model' => 'R 1250 GS Sport',
                'years' => '2019 a Zero Km'
            ],

            [
                'id' => 9217,
                'brand_id' => 67,
                'fipe_code' => '803079-0',
                'model' => 'R 1250 RT Premium',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 9218,
                'brand_id' => 67,
                'fipe_code' => '803080-4',
                'model' => 'R 1250 RT Premium Spezial',
                'years' => '2020 a 2022'
            ],

            [
                'id' => 11026,
                'brand_id' => 67,
                'fipe_code' => '803102-9',
                'model' => 'R 1300 GS ',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 11027,
                'brand_id' => 67,
                'fipe_code' => '803106-1',
                'model' => 'R 1300 GS 719',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 11028,
                'brand_id' => 67,
                'fipe_code' => '803103-7',
                'model' => 'R 1300 GS Plus',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 11029,
                'brand_id' => 67,
                'fipe_code' => '803105-3',
                'model' => 'R 1300 GS Triple Black',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 11030,
                'brand_id' => 67,
                'fipe_code' => '803104-5',
                'model' => 'R 1300 GS Trophy',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 10185,
                'brand_id' => 67,
                'fipe_code' => '803094-4',
                'model' => 'R 18',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 10843,
                'brand_id' => 67,
                'fipe_code' => '803099-5',
                'model' => 'R 18 100 Anos',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 6874,
                'brand_id' => 67,
                'fipe_code' => '803056-1',
                'model' => 'S 1000 R',
                'years' => '2014 a 2021'
            ],

            [
                'id' => 5286,
                'brand_id' => 67,
                'fipe_code' => '803041-3',
                'model' => 'S 1000 RR',
                'years' => '2010 a Zero Km'
            ],

            [
                'id' => 9202,
                'brand_id' => 67,
                'fipe_code' => '803078-2',
                'model' => 'S 1000 RR-M',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 9519,
                'brand_id' => 67,
                'fipe_code' => '803087-1',
                'model' => 'S 1000 RR-M Carbon',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 7411,
                'brand_id' => 67,
                'fipe_code' => '803058-8',
                'model' => 'S 1000 XR',
                'years' => '2016 a 2020'
            ],

            [
                'id' => 6335,
                'brand_id' => 67,
                'fipe_code' => '803046-4',
                'model' => 'S1000 RR HP4 Competition',
                'years' => '2013 a 2014'
            ],

            [
                'id' => 6654,
                'brand_id' => 67,
                'fipe_code' => '803052-9',
                'model' => 'S1000 RR HP4 Street',
                'years' => '2014 a 2014'
            ]
        ];

        $nameYModels = [
            [
                'id' => 2650,
                'brand_id' => 68,
                'fipe_code' => '804001-0',
                'model' => 'ELEGANT 50',
                'years' => '1995 a 1996'
            ],

            [
                'id' => 2651,
                'brand_id' => 68,
                'fipe_code' => '804002-8',
                'model' => 'FOSTI 125',
                'years' => '1997 a 1999'
            ],

            [
                'id' => 2652,
                'brand_id' => 68,
                'fipe_code' => '804009-5',
                'model' => 'PISTA 70',
                'years' => '1995 a 1996'
            ],

            [
                'id' => 2653,
                'brand_id' => 68,
                'fipe_code' => '804011-7',
                'model' => 'TURBO PLUS',
                'years' => '1995 a 1995'
            ],

            [
                'id' => 2654,
                'brand_id' => 68,
                'fipe_code' => '804012-5',
                'model' => 'ZANELLA NEW FIRE 50 FULL',
                'years' => '1996 a 1996'
            ]
        ];

        $byCristoModels = [
            [
                'id' => 2655,
                'brand_id' => 69,
                'fipe_code' => '842001-7',
                'model' => 'Triciclo Star I / Sport',
                'years' => '1999 a 2014'
            ],

            [
                'id' => 2656,
                'brand_id' => 69,
                'fipe_code' => '842002-5',
                'model' => 'Triciclo Star II / Top',
                'years' => '1999 a 2014'
            ],

            [
                'id' => 10131,
                'brand_id' => 69,
                'fipe_code' => '842003-3',
                'model' => 'Triciclo Star II Top / Super Top/Flex',
                'years' => '1999 a 2015'
            ]
        ];

        $CAGIVAModels = [
            [
                'id' => 2658,
                'brand_id' => 70,
                'fipe_code' => '805007-4',
                'model' => 'CANYON 500',
                'years' => '1998 a 2002'
            ],

            [
                'id' => 2659,
                'brand_id' => 70,
                'fipe_code' => '805001-5',
                'model' => 'ELEFANT 750',
                'years' => '1994 a 1995'
            ],

            [
                'id' => 2660,
                'brand_id' => 70,
                'fipe_code' => '805002-3',
                'model' => 'ELEFANT 900',
                'years' => '1994 a 1995'
            ],

            [
                'id' => 2661,
                'brand_id' => 70,
                'fipe_code' => '805003-1',
                'model' => 'GRAN CANYON 900',
                'years' => '1999 a 2000'
            ],

            [
                'id' => 2662,
                'brand_id' => 70,
                'fipe_code' => '805004-0',
                'model' => 'MITO 125',
                'years' => '1999 a 2001'
            ],

            [
                'id' => 2663,
                'brand_id' => 70,
                'fipe_code' => '805010-4',
                'model' => 'NAVIGATOR 1000',
                'years' => '2001 a 2001'
            ],

            [
                'id' => 2664,
                'brand_id' => 70,
                'fipe_code' => '805005-8',
                'model' => 'PLANET 125',
                'years' => '1999 a 1999'
            ],

            [
                'id' => 2665,
                'brand_id' => 70,
                'fipe_code' => '805006-6',
                'model' => 'ROADSTER 200cc',
                'years' => '1997 a 2000'
            ],

            [
                'id' => 2666,
                'brand_id' => 70,
                'fipe_code' => '805009-0',
                'model' => 'V-RAPTOR 1000',
                'years' => '2001 a 2002'
            ],

            [
                'id' => 2667,
                'brand_id' => 70,
                'fipe_code' => '805008-2',
                'model' => 'W-16 600cc',
                'years' => '1996 a 2000'
            ]
        ];

        $CALOIModels = [
            [
                'id' => 2668,
                'brand_id' => 71,
                'fipe_code' => '806001-0',
                'model' => 'MOBILETE 50cc',
                'years' => '1990 a 2002'
            ],

            [
                'id' => 2669,
                'brand_id' => 71,
                'fipe_code' => '806002-9',
                'model' => 'MONDO 75cc',
                'years' => '1997 a 1998'
            ]
        ];

        $DAELIMModels = [
            [
                'id' => 2670,
                'brand_id' => 72,
                'fipe_code' => '807001-6',
                'model' => 'ALTINO 100cc',
                'years' => '1997 a 2002'
            ],

            [
                'id' => 2671,
                'brand_id' => 72,
                'fipe_code' => '807002-4',
                'model' => 'MESSAGE 50cc',
                'years' => '1998 a 1999'
            ],

            [
                'id' => 2672,
                'brand_id' => 72,
                'fipe_code' => '807003-2',
                'model' => 'VC 125 ADVANCED',
                'years' => '1996 a 1996'
            ],

            [
                'id' => 2673,
                'brand_id' => 72,
                'fipe_code' => '807004-0',
                'model' => 'VF 125 D',
                'years' => '1996 a 1996'
            ],

            [
                'id' => 2674,
                'brand_id' => 72,
                'fipe_code' => '807005-9',
                'model' => 'VS 125 CUSTOM',
                'years' => '1999 a 1999'
            ],

            [
                'id' => 2675,
                'brand_id' => 72,
                'fipe_code' => '807006-7',
                'model' => 'VT 125 CUSTOM  MAGMA',
                'years' => '1999 a 1999'
            ],

            [
                'id' => 2676,
                'brand_id' => 72,
                'fipe_code' => '807007-5',
                'model' => 'VX 125',
                'years' => '1996 a 1996'
            ]
        ];

        $DERBIModels = [
            [
                'id' => 2677,
                'brand_id' => 73,
                'fipe_code' => '844003-4',
                'model' => 'ATLANTIS 49cc',
                'years' => '2001 a 2001'
            ],

            [
                'id' => 2678,
                'brand_id' => 73,
                'fipe_code' => '844007-7',
                'model' => 'GPR 50R 49cc',
                'years' => '2001 a 2001'
            ],

            [
                'id' => 2679,
                'brand_id' => 73,
                'fipe_code' => '844005-0',
                'model' => 'PREDATOR AR 49cc',
                'years' => '2001 a 2001'
            ],

            [
                'id' => 2680,
                'brand_id' => 73,
                'fipe_code' => '844006-9',
                'model' => 'PREDATOR LC 49cc',
                'years' => '2001 a 2001'
            ],

            [
                'id' => 2681,
                'brand_id' => 73,
                'fipe_code' => '844004-2',
                'model' => 'RED BULLET 49cc',
                'years' => '2001 a 2001'
            ],

            [
                'id' => 2682,
                'brand_id' => 73,
                'fipe_code' => '844008-5',
                'model' => 'REPLICAS 49cc',
                'years' => '2001 a 2001'
            ],

            [
                'id' => 2683,
                'brand_id' => 73,
                'fipe_code' => '844001-8',
                'model' => 'SENDA R 49cc',
                'years' => '2001 a 2001'
            ],

            [
                'id' => 2684,
                'brand_id' => 73,
                'fipe_code' => '844002-6',
                'model' => 'SENDA SM 49cc',
                'years' => '2001 a 2001'
            ]
        ];

        $DUCATIModels = [
            [
                'id' => 4545,
                'brand_id' => 74,
                'fipe_code' => '808023-2',
                'model' => '1098 1099cc',
                'years' => '2007 a 2008'
            ],

            [
                'id' => 4546,
                'brand_id' => 74,
                'fipe_code' => '808024-0',
                'model' => '1098 S 1099cc',
                'years' => '2007 a 2008'
            ],

            [
                'id' => 5092,
                'brand_id' => 74,
                'fipe_code' => '808028-3',
                'model' => '1198 1198cc',
                'years' => '2009 a 2011'
            ],

            [
                'id' => 5093,
                'brand_id' => 74,
                'fipe_code' => '808029-1',
                'model' => '1198 S 1198cc',
                'years' => '2009 a 2011'
            ],

            [
                'id' => 5539,
                'brand_id' => 74,
                'fipe_code' => '808041-0',
                'model' => '1198 SP 1198cc',
                'years' => '2011 a 2011'
            ],

            [
                'id' => 6495,
                'brand_id' => 74,
                'fipe_code' => '808048-8',
                'model' => '1199 Panigale',
                'years' => '2013 a 2015'
            ],

            [
                'id' => 6496,
                'brand_id' => 74,
                'fipe_code' => '808051-8',
                'model' => '1199 Panigale R',
                'years' => '2013 a 2016'
            ],

            [
                'id' => 6497,
                'brand_id' => 74,
                'fipe_code' => '808049-6',
                'model' => '1199 Panigale S',
                'years' => '2013 a 2015'
            ],

            [
                'id' => 6945,
                'brand_id' => 74,
                'fipe_code' => '808057-7',
                'model' => '1199 Panigale S Senna',
                'years' => '2014 a 2014'
            ],

            [
                'id' => 6498,
                'brand_id' => 74,
                'fipe_code' => '808050-0',
                'model' => '1199 Panigale S Tricolore',
                'years' => '2012 a 2013'
            ],

            [
                'id' => 7052,
                'brand_id' => 74,
                'fipe_code' => '808058-5',
                'model' => '1199 Superleggera',
                'years' => '2014 a 2014'
            ],

            [
                'id' => 7567,
                'brand_id' => 74,
                'fipe_code' => '808067-4',
                'model' => '1299 Panigale',
                'years' => '2016 a 2018'
            ],

            [
                'id' => 7568,
                'brand_id' => 74,
                'fipe_code' => '808068-2',
                'model' => '1299 Panigale S',
                'years' => '2016 a 2018'
            ],

            [
                'id' => 2685,
                'brand_id' => 74,
                'fipe_code' => '808013-5',
                'model' => '749',
                'years' => '2004 a 2005'
            ],

            [
                'id' => 4170,
                'brand_id' => 74,
                'fipe_code' => '808016-0',
                'model' => '749 Dark  748cc',
                'years' => '2006 a 2006'
            ],

            [
                'id' => 4911,
                'brand_id' => 74,
                'fipe_code' => '808026-7',
                'model' => '848',
                'years' => '2008 a 2011'
            ],

            [
                'id' => 5540,
                'brand_id' => 74,
                'fipe_code' => '808040-2',
                'model' => '848 Evo',
                'years' => '2011 a 2013'
            ],

            [
                'id' => 7861,
                'brand_id' => 74,
                'fipe_code' => '808072-0',
                'model' => '959 Panigale',
                'years' => '2017 a 2019'
            ],

            [
                'id' => 2686,
                'brand_id' => 74,
                'fipe_code' => '808002-0',
                'model' => '996',
                'years' => '1999 a 2001'
            ],

            [
                'id' => 2687,
                'brand_id' => 74,
                'fipe_code' => '808008-9',
                'model' => '996 S',
                'years' => '2001 a 2001'
            ],

            [
                'id' => 2688,
                'brand_id' => 74,
                'fipe_code' => '808010-0',
                'model' => '998 997cc',
                'years' => '2002 a 2003'
            ],

            [
                'id' => 2689,
                'brand_id' => 74,
                'fipe_code' => '808011-9',
                'model' => '999 998cc',
                'years' => '2002 a 2006'
            ],

            [
                'id' => 4171,
                'brand_id' => 74,
                'fipe_code' => '808017-8',
                'model' => '999R Xerox 999cc',
                'years' => '2005 a 2006'
            ],

            [
                'id' => 10769,
                'brand_id' => 74,
                'fipe_code' => '808089-5',
                'model' => 'DESERT X',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 5013,
                'brand_id' => 74,
                'fipe_code' => '808027-5',
                'model' => 'DESMOSEDICI 16RR 200cv',
                'years' => '2008 a 2008'
            ],

            [
                'id' => 5541,
                'brand_id' => 74,
                'fipe_code' => '808042-9',
                'model' => 'DIAVEL 1198',
                'years' => '2011 a 2014'
            ],

            [
                'id' => 6897,
                'brand_id' => 74,
                'fipe_code' => '808055-0',
                'model' => 'DIAVEL 1198 Black',
                'years' => '2013 a 2013'
            ],

            [
                'id' => 5632,
                'brand_id' => 74,
                'fipe_code' => '808043-7',
                'model' => 'DIAVEL 1198 Carbon',
                'years' => '2011 a 2015'
            ],

            [
                'id' => 6499,
                'brand_id' => 74,
                'fipe_code' => '808046-1',
                'model' => 'DIAVEL 1198 Cromo',
                'years' => '2013 a 2013'
            ],

            [
                'id' => 6898,
                'brand_id' => 74,
                'fipe_code' => '808056-9',
                'model' => 'DIAVEL 1198 Dark',
                'years' => '2014 a 2018'
            ],

            [
                'id' => 8974,
                'brand_id' => 74,
                'fipe_code' => '808082-8',
                'model' => 'DIAVEL 1260 S',
                'years' => '2019 a Zero Km'
            ],

            [
                'id' => 11113,
                'brand_id' => 74,
                'fipe_code' => '808091-7',
                'model' => 'DIAVEL V4 1158',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 5542,
                'brand_id' => 74,
                'fipe_code' => '808038-0',
                'model' => 'HYPERMOTARD 1100 EVO 1078cc',
                'years' => '2008 a 2012'
            ],

            [
                'id' => 5543,
                'brand_id' => 74,
                'fipe_code' => '808039-9',
                'model' => 'HYPERMOTARD 1100 EVO SP 1078cc',
                'years' => '2011 a 2012'
            ],

            [
                'id' => 5222,
                'brand_id' => 74,
                'fipe_code' => '808033-0',
                'model' => 'HYPERMOTARD 796',
                'years' => '2010 a 2012'
            ],

            [
                'id' => 6818,
                'brand_id' => 74,
                'fipe_code' => '808052-6',
                'model' => 'HYPERMOTARD 821',
                'years' => '2013 a 2016'
            ],

            [
                'id' => 6819,
                'brand_id' => 74,
                'fipe_code' => '808053-4',
                'model' => 'HYPERMOTARD 821 SP',
                'years' => '2013 a 2014'
            ],

            [
                'id' => 6899,
                'brand_id' => 74,
                'fipe_code' => '808054-2',
                'model' => 'HYPERSTRADA 821',
                'years' => '2013 a 2016'
            ],

            [
                'id' => 5544,
                'brand_id' => 74,
                'fipe_code' => '808036-4',
                'model' => 'MONSTER 1100 S 1078cc',
                'years' => '2010 a 2010'
            ],

            [
                'id' => 5121,
                'brand_id' => 74,
                'fipe_code' => '808031-3',
                'model' => 'MONSTER 1100cc',
                'years' => '2009 a 2012'
            ],

            [
                'id' => 7240,
                'brand_id' => 74,
                'fipe_code' => '808060-7',
                'model' => 'MONSTER 1200',
                'years' => '2015 a 2015'
            ],

            [
                'id' => 7241,
                'brand_id' => 74,
                'fipe_code' => '808059-3',
                'model' => 'MONSTER 1200 S',
                'years' => '2015 a 2021'
            ],

            [
                'id' => 2690,
                'brand_id' => 74,
                'fipe_code' => '808003-8',
                'model' => 'MONSTER 600cc',
                'years' => '1999 a 2001'
            ],

            [
                'id' => 2691,
                'brand_id' => 74,
                'fipe_code' => '808009-7',
                'model' => 'MONSTER 620cc',
                'years' => '2002 a 2005'
            ],

            [
                'id' => 4128,
                'brand_id' => 74,
                'fipe_code' => '808015-1',
                'model' => 'MONSTER 695cc',
                'years' => '2006 a 2007'
            ],

            [
                'id' => 5094,
                'brand_id' => 74,
                'fipe_code' => '808030-5',
                'model' => 'MONSTER 696cc',
                'years' => '2009 a 2012'
            ],

            [
                'id' => 6500,
                'brand_id' => 74,
                'fipe_code' => '808044-5',
                'model' => 'MONSTER 796',
                'years' => '2013 a 2014'
            ],

            [
                'id' => 8376,
                'brand_id' => 74,
                'fipe_code' => '808077-1',
                'model' => 'MONSTER 797',
                'years' => '2018 a 2020'
            ],

            [
                'id' => 7281,
                'brand_id' => 74,
                'fipe_code' => '808061-5',
                'model' => 'MONSTER 821',
                'years' => '2015 a 2016'
            ],

            [
                'id' => 7569,
                'brand_id' => 74,
                'fipe_code' => '808066-6',
                'model' => 'MONSTER 821 Dark',
                'years' => '2016 a 2016'
            ],

            [
                'id' => 2692,
                'brand_id' => 74,
                'fipe_code' => '808004-6',
                'model' => 'MONSTER 900cc',
                'years' => '1995 a 2001'
            ],

            [
                'id' => 10086,
                'brand_id' => 74,
                'fipe_code' => '808087-9',
                'model' => 'MONSTER 937cc',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 4172,
                'brand_id' => 74,
                'fipe_code' => '808020-8',
                'model' => 'MONSTER S2-R 1000  992cc',
                'years' => '2006 a 2008'
            ],

            [
                'id' => 2693,
                'brand_id' => 74,
                'fipe_code' => '808001-1',
                'model' => 'MONSTER S4 916',
                'years' => '1995 a 2003'
            ],

            [
                'id' => 2694,
                'brand_id' => 74,
                'fipe_code' => '808014-3',
                'model' => 'MONSTER S4-R 996',
                'years' => '2004 a 2005'
            ],

            [
                'id' => 4173,
                'brand_id' => 74,
                'fipe_code' => '808022-4',
                'model' => 'MONSTER S4-RS Testastretta 998cc',
                'years' => '2006 a 2007'
            ],

            [
                'id' => 2695,
                'brand_id' => 74,
                'fipe_code' => '808012-7',
                'model' => 'MULTISTRADA 1000 992cc',
                'years' => '2003 a 2005'
            ],

            [
                'id' => 4547,
                'brand_id' => 74,
                'fipe_code' => '808025-9',
                'model' => 'MULTISTRADA 1100 1078cc',
                'years' => '2007 a 2008'
            ],

            [
                'id' => 11054,
                'brand_id' => 74,
                'fipe_code' => '808090-9',
                'model' => 'MULTISTRADA 1160 V4 Rally',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 9779,
                'brand_id' => 74,
                'fipe_code' => '808086-0',
                'model' => 'MULTISTRADA 1160 V4S',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 5460,
                'brand_id' => 74,
                'fipe_code' => '808034-8',
                'model' => 'MULTISTRADA 1200 1198cc',
                'years' => '2010 a 2018'
            ],

            [
                'id' => 7783,
                'brand_id' => 74,
                'fipe_code' => '808069-0',
                'model' => 'MULTISTRADA 1200 Enduro',
                'years' => '2016 a 2019'
            ],

            [
                'id' => 8258,
                'brand_id' => 74,
                'fipe_code' => '808075-5',
                'model' => 'MULTISTRADA 1200 Enduro Limited Edition',
                'years' => '2018 a 2018'
            ],

            [
                'id' => 5545,
                'brand_id' => 74,
                'fipe_code' => '808037-2',
                'model' => 'MULTISTRADA 1200 S  Touring 1198cc',
                'years' => '2010 a 2018'
            ],

            [
                'id' => 5461,
                'brand_id' => 74,
                'fipe_code' => '808035-6',
                'model' => 'MULTISTRADA 1200 S 1198cc',
                'years' => '2010 a 2012'
            ],

            [
                'id' => 6501,
                'brand_id' => 74,
                'fipe_code' => '808047-0',
                'model' => 'MULTISTRADA 1200 S Pikes Peak',
                'years' => '2013 a 2015'
            ],

            [
                'id' => 8537,
                'brand_id' => 74,
                'fipe_code' => '808079-8',
                'model' => 'MULTISTRADA 1260',
                'years' => '2018 a 2018'
            ],

            [
                'id' => 8538,
                'brand_id' => 74,
                'fipe_code' => '808080-1',
                'model' => 'MULTISTRADA 1260 S',
                'years' => '2018 a 2021'
            ],

            [
                'id' => 4174,
                'brand_id' => 74,
                'fipe_code' => '808018-6',
                'model' => 'MULTISTRADA 620  618cc',
                'years' => '2005 a 2006'
            ],

            [
                'id' => 8156,
                'brand_id' => 74,
                'fipe_code' => '808073-9',
                'model' => 'MULTISTRADA 950',
                'years' => '2017 a 2019'
            ],

            [
                'id' => 9219,
                'brand_id' => 74,
                'fipe_code' => '808084-4',
                'model' => 'MULTISTRADA 950 S',
                'years' => '2020 a 2021'
            ],

            [
                'id' => 10617,
                'brand_id' => 74,
                'fipe_code' => '808088-7',
                'model' => 'MULTISTRADA V2S',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 8998,
                'brand_id' => 74,
                'fipe_code' => '808083-6',
                'model' => 'PANIGALE V4 R',
                'years' => '2020 a 2020'
            ],

            [
                'id' => 8878,
                'brand_id' => 74,
                'fipe_code' => '808081-0',
                'model' => 'PANIGALE V4 S',
                'years' => '2019 a Zero Km'
            ],

            [
                'id' => 7570,
                'brand_id' => 74,
                'fipe_code' => '808064-0',
                'model' => 'SCRAMBLER CLASSIC 800cc',
                'years' => '2016 a 2018'
            ],

            [
                'id' => 8259,
                'brand_id' => 74,
                'fipe_code' => '808074-7',
                'model' => 'SCRAMBLER CUSTOM 800cc',
                'years' => '2018 a 2020'
            ],

            [
                'id' => 7571,
                'brand_id' => 74,
                'fipe_code' => '808065-8',
                'model' => 'SCRAMBLER FULL THROTTLER 800cc',
                'years' => '2016 a 2018'
            ],

            [
                'id' => 7382,
                'brand_id' => 74,
                'fipe_code' => '808062-3',
                'model' => 'SCRAMBLER ICON 800cc',
                'years' => '2016 a Zero Km'
            ],

            [
                'id' => 7572,
                'brand_id' => 74,
                'fipe_code' => '808063-1',
                'model' => 'SCRAMBLER URBAN ENDURO 800cc',
                'years' => '2016 a 2017'
            ],

            [
                'id' => 4175,
                'brand_id' => 74,
                'fipe_code' => '808019-4',
                'model' => 'SPORTCLASSIC  PAULSMART 1000LE  992cc',
                'years' => '2006 a 2006'
            ],

            [
                'id' => 4176,
                'brand_id' => 74,
                'fipe_code' => '808021-6',
                'model' => 'SPORTCLASSIC SPORT 1000  992cc',
                'years' => '2006 a 2006'
            ],

            [
                'id' => 2696,
                'brand_id' => 74,
                'fipe_code' => '808005-4',
                'model' => 'SS 900cc',
                'years' => '1999 a 2001'
            ],

            [
                'id' => 2697,
                'brand_id' => 74,
                'fipe_code' => '808006-2',
                'model' => 'ST-2 900/ 944cc',
                'years' => '1997 a 2003'
            ],

            [
                'id' => 2698,
                'brand_id' => 74,
                'fipe_code' => '808007-0',
                'model' => 'ST-4 900/ 996cc',
                'years' => '1997 a 2005'
            ],

            [
                'id' => 5161,
                'brand_id' => 74,
                'fipe_code' => '808032-1',
                'model' => 'STREETFIGHTER 1098cc',
                'years' => '2009 a 2012'
            ],

            [
                'id' => 6502,
                'brand_id' => 74,
                'fipe_code' => '808045-3',
                'model' => 'STREETFIGHTER 848',
                'years' => '2013 a 2013'
            ],

            [
                'id' => 9673,
                'brand_id' => 74,
                'fipe_code' => '808085-2',
                'model' => 'STREETFIGHTER V4 S 1103cc',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 8489,
                'brand_id' => 74,
                'fipe_code' => '808078-0',
                'model' => 'SUPER SPORT S 937cc',
                'years' => '2018 a 2019'
            ],

            [
                'id' => 7784,
                'brand_id' => 74,
                'fipe_code' => '808070-4',
                'model' => 'XDIAVEL 1262',
                'years' => '2017 a 2017'
            ],

            [
                'id' => 8305,
                'brand_id' => 74,
                'fipe_code' => '808076-3',
                'model' => 'XDIAVEL DARK 1262',
                'years' => '2017 a 2021'
            ],

            [
                'id' => 7785,
                'brand_id' => 74,
                'fipe_code' => '808071-2',
                'model' => 'XDIAVEL S 1262',
                'years' => '2016 a Zero Km'
            ]
        ];

        $EMMEModels = [
            [
                'id' => 2699,
                'brand_id' => 75,
                'fipe_code' => '809001-7',
                'model' => 'MIRAGE 50cc',
                'years' => '1997 a 1999'
            ],

            [
                'id' => 2700,
                'brand_id' => 75,
                'fipe_code' => '809002-5',
                'model' => 'ONE 50cc',
                'years' => '1999 a 1999'
            ],

            [
                'id' => 2701,
                'brand_id' => 75,
                'fipe_code' => '809003-3',
                'model' => 'ONE RACING 50cc',
                'years' => '1999 a 1999'
            ]
        ];

        $GASGASModels = [
            [
                'id' => 2702,
                'brand_id' => 76,
                'fipe_code' => '834003-0',
                'model' => 'EC 125 ENDUCROSS',
                'years' => '2001 a 2009'
            ],

            [
                'id' => 2703,
                'brand_id' => 76,
                'fipe_code' => '834004-8',
                'model' => 'EC 200 ENDUCROSS',
                'years' => '1999 a 2009'
            ],

            [
                'id' => 2704,
                'brand_id' => 76,
                'fipe_code' => '834005-6',
                'model' => 'EC 250 ENDUCROSS',
                'years' => '1999 a 2015'
            ],

            [
                'id' => 2705,
                'brand_id' => 76,
                'fipe_code' => '834006-4',
                'model' => 'EC 300 ENDUCROSS',
                'years' => '1999 a 2015'
            ],

            [
                'id' => 2706,
                'brand_id' => 76,
                'fipe_code' => '834016-1',
                'model' => 'EC 400 FSE ENDUCROSS',
                'years' => '2002 a 2002'
            ],

            [
                'id' => 4151,
                'brand_id' => 76,
                'fipe_code' => '834017-0',
                'model' => 'EC 450/ FSE/ FSR ENDUCROSS',
                'years' => '2004 a 2014'
            ],

            [
                'id' => 2707,
                'brand_id' => 76,
                'fipe_code' => '834014-5',
                'model' => 'EC 50 ROOKIE  ENDURO',
                'years' => '2001 a 2002'
            ],

            [
                'id' => 2708,
                'brand_id' => 76,
                'fipe_code' => '834013-7',
                'model' => 'EC BOY 50',
                'years' => '2000 a 2005'
            ],

            [
                'id' => 2709,
                'brand_id' => 76,
                'fipe_code' => '834008-0',
                'model' => 'MC 250',
                'years' => '2000 a 2004'
            ],

            [
                'id' => 2710,
                'brand_id' => 76,
                'fipe_code' => '834001-3',
                'model' => 'PAMPERA 125cc',
                'years' => '2001 a 2001'
            ],

            [
                'id' => 2711,
                'brand_id' => 76,
                'fipe_code' => '834002-1',
                'model' => 'PAMPERA 250cc',
                'years' => '1999 a 2002'
            ],

            [
                'id' => 2712,
                'brand_id' => 76,
                'fipe_code' => '834009-9',
                'model' => 'TX BOY 50',
                'years' => '2001 a 2008'
            ],

            [
                'id' => 2713,
                'brand_id' => 76,
                'fipe_code' => '834010-2',
                'model' => 'TXT 200 CONTACT',
                'years' => '2001 a 2002'
            ],

            [
                'id' => 2714,
                'brand_id' => 76,
                'fipe_code' => '834011-0',
                'model' => 'TXT 280 CONTACT',
                'years' => '2001 a 2002'
            ],

            [
                'id' => 2715,
                'brand_id' => 76,
                'fipe_code' => '834012-9',
                'model' => 'TXT 321 CONTACT',
                'years' => '2001 a 2001'
            ],

            [
                'id' => 2716,
                'brand_id' => 76,
                'fipe_code' => '834015-3',
                'model' => 'TXT 50 ROOKIE',
                'years' => '2001 a 2001'
            ]
        ];

        $HARLEYDAVIDSONModels = [
            [
                'id' => 5758,
                'brand_id' => 77,
                'fipe_code' => '810057-8',
                'model' => 'BLACKLINE FXS',
                'years' => '2012 a 2013'
            ],

            [
                'id' => 10609,
                'brand_id' => 77,
                'fipe_code' => '810109-4',
                'model' => 'BREAKOUT 117 FXBR',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 6900,
                'brand_id' => 77,
                'fipe_code' => '810069-1',
                'model' => 'CVO BREAKOUT FXSBSE',
                'years' => '2013 a 2014'
            ],

            [
                'id' => 8157,
                'brand_id' => 77,
                'fipe_code' => '810084-5',
                'model' => 'CVO LIMITED 115th ANNIVERSA. FLHTKSE ANV',
                'years' => '2018 a 2018'
            ],

            [
                'id' => 6901,
                'brand_id' => 77,
                'fipe_code' => '810068-3',
                'model' => 'CVO LIMITED FLHTKSE',
                'years' => '2014 a 2020'
            ],

            [
                'id' => 10611,
                'brand_id' => 77,
                'fipe_code' => '810114-0',
                'model' => 'CVO ROAD GLIDE 120th ANNIVERSARY FLTRXSE',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 8135,
                'brand_id' => 77,
                'fipe_code' => '810079-9',
                'model' => 'CVO ROAD GLIDE FLTRXSE',
                'years' => '2018 a 2019'
            ],

            [
                'id' => 11025,
                'brand_id' => 77,
                'fipe_code' => '810115-9',
                'model' => 'CVO ROAD GLIDE FLTRXSTSE',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 9841,
                'brand_id' => 77,
                'fipe_code' => '810103-5',
                'model' => 'CVO ROAD LIMITED FLTRKSE',
                'years' => '2022 a 2022'
            ],

            [
                'id' => 7053,
                'brand_id' => 77,
                'fipe_code' => '810070-5',
                'model' => 'CVO STREET GLIDE FLHXSE',
                'years' => '2015 a Zero Km'
            ],

            [
                'id' => 5755,
                'brand_id' => 77,
                'fipe_code' => '810061-6',
                'model' => 'CVO ULTRA CLAS. ELECTRA GLIDE FLHTCUSE7',
                'years' => '2012 a 2012'
            ],

            [
                'id' => 2717,
                'brand_id' => 77,
                'fipe_code' => '810032-2',
                'model' => 'DEUCE',
                'years' => '2000 a 2005'
            ],

            [
                'id' => 2718,
                'brand_id' => 77,
                'fipe_code' => '810014-4',
                'model' => 'DYNA CONVERTIBLE',
                'years' => '1995 a 1998'
            ],

            [
                'id' => 2719,
                'brand_id' => 77,
                'fipe_code' => '810003-9',
                'model' => 'DYNA LOW RIDER',
                'years' => '1994 a 1998'
            ],

            [
                'id' => 2720,
                'brand_id' => 77,
                'fipe_code' => '810002-0',
                'model' => 'DYNA LOW RIDER CONVERTIBLE',
                'years' => '1998 a 1998'
            ],

            [
                'id' => 2721,
                'brand_id' => 77,
                'fipe_code' => '810013-6',
                'model' => 'DYNA SUPER GLIDE',
                'years' => '1995 a 2010'
            ],

            [
                'id' => 4652,
                'brand_id' => 77,
                'fipe_code' => '810047-0',
                'model' => 'DYNA SUPER GLIDE CUSTOM',
                'years' => '2008 a 2014'
            ],

            [
                'id' => 6408,
                'brand_id' => 77,
                'fipe_code' => '810063-2',
                'model' => 'DYNA SUPER GLIDE CUSTOM 110 th EDITION',
                'years' => '2013 a 2013'
            ],

            [
                'id' => 2722,
                'brand_id' => 77,
                'fipe_code' => '810015-2',
                'model' => 'DYNA WIDE GLIDE',
                'years' => '1995 a 1999'
            ],

            [
                'id' => 2723,
                'brand_id' => 77,
                'fipe_code' => '810004-7',
                'model' => 'EG ROAD KING FUEL INJECTION',
                'years' => '1996 a 1998'
            ],

            [
                'id' => 2724,
                'brand_id' => 77,
                'fipe_code' => '810008-0',
                'model' => 'ELECTRA GLIDE CLASSIC FLHTC/ FLHTCI',
                'years' => '1995 a 2009'
            ],

            [
                'id' => 2725,
                'brand_id' => 77,
                'fipe_code' => '810007-1',
                'model' => 'ELECTRA GLIDE FLHT',
                'years' => '1995 a 2001'
            ],

            [
                'id' => 2726,
                'brand_id' => 77,
                'fipe_code' => '810040-3',
                'model' => 'ELECTRA GLIDE SCREAMING EAGLE',
                'years' => '2005 a 2006'
            ],

            [
                'id' => 2727,
                'brand_id' => 77,
                'fipe_code' => '810033-0',
                'model' => 'ELECTRA GLIDE SPECIAL 1450cc',
                'years' => '2001 a 2001'
            ],

            [
                'id' => 4555,
                'brand_id' => 77,
                'fipe_code' => '810045-4',
                'model' => 'ELECTRA GLIDE ULTRA CLAS. S.EAGLE FLHTCU',
                'years' => '2006 a 2010'
            ],

            [
                'id' => 2729,
                'brand_id' => 77,
                'fipe_code' => '810031-4',
                'model' => 'ELECTRA GLIDE ULTRA CLASSIC',
                'years' => '1995 a 2011'
            ],

            [
                'id' => 2728,
                'brand_id' => 77,
                'fipe_code' => '810005-5',
                'model' => 'ELECTRA GLIDE ULTRA FUEL INJECTION',
                'years' => '1996 a 1998'
            ],

            [
                'id' => 6409,
                'brand_id' => 77,
                'fipe_code' => '810065-9',
                'model' => 'ELECTRA GLIDE ULTRA LIMIT. 110th EDITION',
                'years' => '2013 a 2013'
            ],

            [
                'id' => 5761,
                'brand_id' => 77,
                'fipe_code' => '810060-8',
                'model' => 'ELECTRA GLIDE ULTRA LIMITED FLHTK',
                'years' => '2012 a 2019'
            ],

            [
                'id' => 5756,
                'brand_id' => 77,
                'fipe_code' => '810055-1',
                'model' => 'FAT BOB FXDF',
                'years' => '2012 a 2017'
            ],

            [
                'id' => 8136,
                'brand_id' => 77,
                'fipe_code' => '810081-0',
                'model' => 'FAT BOB FXFB',
                'years' => '2018 a 2020'
            ],

            [
                'id' => 8137,
                'brand_id' => 77,
                'fipe_code' => '810077-2',
                'model' => 'FAT BOB FXFBS',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 8158,
                'brand_id' => 77,
                'fipe_code' => '810092-6',
                'model' => 'FAT BOY 115th ANNIVERSARY FLFBS',
                'years' => '2018 a 2018'
            ],

            [
                'id' => 10613,
                'brand_id' => 77,
                'fipe_code' => '810104-3',
                'model' => 'FAT BOY 120th ANNIVERSARY FLFBS',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 8159,
                'brand_id' => 77,
                'fipe_code' => '810087-0',
                'model' => 'FAT BOY FLFB',
                'years' => '2018 a 2020'
            ],

            [
                'id' => 8138,
                'brand_id' => 77,
                'fipe_code' => '810076-4',
                'model' => 'FAT BOY FLFBS',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 2730,
                'brand_id' => 77,
                'fipe_code' => '810019-5',
                'model' => 'FAT BOY FLSTF',
                'years' => '1994 a 2017'
            ],

            [
                'id' => 5288,
                'brand_id' => 77,
                'fipe_code' => '810053-5',
                'model' => 'FAT BOY LOW/ SPECIAL FLSTFB',
                'years' => '2010 a 2017'
            ],

            [
                'id' => 2731,
                'brand_id' => 77,
                'fipe_code' => '810039-0',
                'model' => 'FAT BOY SCREAMING EAGLE',
                'years' => '2005 a 2006'
            ],

            [
                'id' => 6410,
                'brand_id' => 77,
                'fipe_code' => '810064-0',
                'model' => 'FAT BOY SPECIAL 110th EDITION',
                'years' => '2013 a 2013'
            ],

            [
                'id' => 2732,
                'brand_id' => 77,
                'fipe_code' => '810010-1',
                'model' => 'FLHTCU ULTRA GLIDE',
                'years' => '1995 a 1999'
            ],

            [
                'id' => 2733,
                'brand_id' => 77,
                'fipe_code' => '810009-8',
                'model' => 'FLHTCUI ULTRA CLASSIC',
                'years' => '1999 a 2000'
            ],

            [
                'id' => 10614,
                'brand_id' => 77,
                'fipe_code' => '810110-8',
                'model' => 'HERITAGE CLASSIC 120th ANNIVERSARY FLHCS',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 8160,
                'brand_id' => 77,
                'fipe_code' => '810088-8',
                'model' => 'HERITAGE CLASSIC FLHC/FLHCS',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 3940,
                'brand_id' => 77,
                'fipe_code' => '810042-0',
                'model' => 'HERITAGE CUSTOM 1450/ 1600cc',
                'years' => '2006 a 2010'
            ],

            [
                'id' => 6411,
                'brand_id' => 77,
                'fipe_code' => '810062-4',
                'model' => 'HERITAGE SOFTAIL CLASSIC 110 th Edition',
                'years' => '2013 a 2013'
            ],

            [
                'id' => 2734,
                'brand_id' => 77,
                'fipe_code' => '810020-9',
                'model' => 'HERITAGE SOFTAIL CLASSIC FLSTC',
                'years' => '1994 a 2017'
            ],

            [
                'id' => 2735,
                'brand_id' => 77,
                'fipe_code' => '810021-7',
                'model' => 'HERITAGE SPRINGER',
                'years' => '1997 a 2000'
            ],

            [
                'id' => 7054,
                'brand_id' => 77,
                'fipe_code' => '810073-0',
                'model' => 'LOW RIDER FXDL',
                'years' => '2015 a 2017'
            ],

            [
                'id' => 10615,
                'brand_id' => 77,
                'fipe_code' => '810108-6',
                'model' => 'LOW RIDER S FXLRS',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 10616,
                'brand_id' => 77,
                'fipe_code' => '810111-6',
                'model' => 'LOW RIDER ST FXLRST',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 4556,
                'brand_id' => 77,
                'fipe_code' => '810043-8',
                'model' => 'NIGHT ROD SPECIAL 1250 VRSCDX',
                'years' => '2007 a 2016'
            ],

            [
                'id' => 2736,
                'brand_id' => 77,
                'fipe_code' => '810001-2',
                'model' => 'NIGHT TRAIN',
                'years' => '1998 a 2008'
            ],

            [
                'id' => 10618,
                'brand_id' => 77,
                'fipe_code' => '810106-0',
                'model' => 'NIGHTSTER SPECIAL',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 9843,
                'brand_id' => 77,
                'fipe_code' => '810102-7',
                'model' => 'PAN AMERICA 1250 SPECIAL',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 11056,
                'brand_id' => 77,
                'fipe_code' => '810116-7',
                'model' => 'ROAD GLIDE FLTRX',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 8879,
                'brand_id' => 77,
                'fipe_code' => '810100-0',
                'model' => 'ROAD GLIDE LIMITED FLTRK',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 10620,
                'brand_id' => 77,
                'fipe_code' => '810105-1',
                'model' => 'ROAD GLIDE SPECIAL 120th ANNIV FLTRXS',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 8139,
                'brand_id' => 77,
                'fipe_code' => '810078-0',
                'model' => 'ROAD GLIDE SPECIAL FLTRXS',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 8140,
                'brand_id' => 77,
                'fipe_code' => '810080-2',
                'model' => 'ROAD GLIDE ULTRA FLTRU',
                'years' => '2018 a 2019'
            ],

            [
                'id' => 2737,
                'brand_id' => 77,
                'fipe_code' => '810006-3',
                'model' => 'ROAD KING',
                'years' => '1995 a 1999'
            ],

            [
                'id' => 2738,
                'brand_id' => 77,
                'fipe_code' => '810030-6',
                'model' => 'ROAD KING CLASSIC  FLHRC/ CUSTOM FLHRSI',
                'years' => '1995 a 2019'
            ],

            [
                'id' => 4557,
                'brand_id' => 77,
                'fipe_code' => '810046-2',
                'model' => 'ROAD KING SCREAMING EAGLE FLHR SE',
                'years' => '2007 a 2008'
            ],

            [
                'id' => 8161,
                'brand_id' => 77,
                'fipe_code' => '810085-3',
                'model' => 'ROAD KING SPECIAL FLHRXS',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 8162,
                'brand_id' => 77,
                'fipe_code' => '810095-0',
                'model' => 'SOFTAIL BREAKOUT 115th ANNIV. FXBRS',
                'years' => '2018 a 2018'
            ],

            [
                'id' => 8141,
                'brand_id' => 77,
                'fipe_code' => '810083-7',
                'model' => 'SOFTAIL BREAKOUT FXBRS',
                'years' => '2018 a 2022'
            ],

            [
                'id' => 7055,
                'brand_id' => 77,
                'fipe_code' => '810072-1',
                'model' => 'SOFTAIL BREAKOUT FXSB',
                'years' => '2015 a 2017'
            ],

            [
                'id' => 2739,
                'brand_id' => 77,
                'fipe_code' => '810011-0',
                'model' => 'SOFTAIL CLASSIC',
                'years' => '1995 a 1998'
            ],

            [
                'id' => 2740,
                'brand_id' => 77,
                'fipe_code' => '810017-9',
                'model' => 'SOFTAIL CUSTOM',
                'years' => '1995 a 2000'
            ],

            [
                'id' => 2741,
                'brand_id' => 77,
                'fipe_code' => '810035-7',
                'model' => 'SOFTAIL DELUXE  FLSTN',
                'years' => '2005 a 2017'
            ],

            [
                'id' => 8163,
                'brand_id' => 77,
                'fipe_code' => '810089-6',
                'model' => 'SOFTAIL DELUXE FLDE',
                'years' => '2018 a 2020'
            ],

            [
                'id' => 8555,
                'brand_id' => 77,
                'fipe_code' => '810098-5',
                'model' => 'SOFTAIL FXDR',
                'years' => '2019 a 2020'
            ],

            [
                'id' => 8880,
                'brand_id' => 77,
                'fipe_code' => '810101-9',
                'model' => 'SOFTAIL LOW RIDER S FXLRS',
                'years' => '2020 a 2022'
            ],

            [
                'id' => 4692,
                'brand_id' => 77,
                'fipe_code' => '810048-9',
                'model' => 'SOFTAIL ROCKER/ ROCKER C 1584cc',
                'years' => '2008 a 2011'
            ],

            [
                'id' => 8164,
                'brand_id' => 77,
                'fipe_code' => '810090-0',
                'model' => 'SOFTAIL SLIM FLSL',
                'years' => '2018 a 2019'
            ],

            [
                'id' => 2742,
                'brand_id' => 77,
                'fipe_code' => '810012-8',
                'model' => 'SOFTAIL SPECIAL',
                'years' => '1995 a 1997'
            ],

            [
                'id' => 8539,
                'brand_id' => 77,
                'fipe_code' => '810097-7',
                'model' => 'SOFTAIL SPORT GLIDE FLSB',
                'years' => '2019 a 2022'
            ],

            [
                'id' => 2743,
                'brand_id' => 77,
                'fipe_code' => '810018-7',
                'model' => 'SOFTAIL SPRINGER',
                'years' => '1995 a 2000'
            ],

            [
                'id' => 2744,
                'brand_id' => 77,
                'fipe_code' => '810016-0',
                'model' => 'SOFTAIL STD/ FX',
                'years' => '1999 a 2008'
            ],

            [
                'id' => 2745,
                'brand_id' => 77,
                'fipe_code' => '810022-5',
                'model' => 'SPORTSTER 1200',
                'years' => '1994 a 1995'
            ],

            [
                'id' => 8165,
                'brand_id' => 77,
                'fipe_code' => '810091-8',
                'model' => 'SPORTSTER 1200 CUSTOM XL1200C',
                'years' => '2018 a 2018'
            ],

            [
                'id' => 10621,
                'brand_id' => 77,
                'fipe_code' => '810107-8',
                'model' => 'SPORTSTER S',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 4558,
                'brand_id' => 77,
                'fipe_code' => '810044-6',
                'model' => 'SPRINGER SCREAMING EAGLE',
                'years' => '2007 a 2007'
            ],

            [
                'id' => 8166,
                'brand_id' => 77,
                'fipe_code' => '810086-1',
                'model' => 'STREET BOB FXBB',
                'years' => '2018 a 2019'
            ],

            [
                'id' => 7056,
                'brand_id' => 77,
                'fipe_code' => '810074-8',
                'model' => 'STREET BOB FXDB',
                'years' => '2015 a 2017'
            ],

            [
                'id' => 5760,
                'brand_id' => 77,
                'fipe_code' => '810059-4',
                'model' => 'STREET GLIDE FLHX',
                'years' => '2012 a Zero Km'
            ],

            [
                'id' => 8142,
                'brand_id' => 77,
                'fipe_code' => '810082-9',
                'model' => 'STREET GLIDE SPEC. 115th ANNIV FLHXS ANX',
                'years' => '2018 a 2018'
            ],

            [
                'id' => 10622,
                'brand_id' => 77,
                'fipe_code' => '810112-4',
                'model' => 'STREET GLIDE SPEC. 120th ANNIV FLHXS',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 7057,
                'brand_id' => 77,
                'fipe_code' => '810071-3',
                'model' => 'STREET GLIDE SPECIAL FLHXS',
                'years' => '2015 a Zero Km'
            ],

            [
                'id' => 2746,
                'brand_id' => 77,
                'fipe_code' => '810038-1',
                'model' => 'STREET ROD 1130cc',
                'years' => '2006 a 2007'
            ],

            [
                'id' => 5757,
                'brand_id' => 77,
                'fipe_code' => '810056-0',
                'model' => 'SWITCHBACK FLD',
                'years' => '2012 a 2014'
            ],

            [
                'id' => 8167,
                'brand_id' => 77,
                'fipe_code' => '810094-2',
                'model' => 'ULTRA LIMITED 115th ANNIVERSARY FLHTK',
                'years' => '2018 a 2018'
            ],

            [
                'id' => 10623,
                'brand_id' => 77,
                'fipe_code' => '810113-2',
                'model' => 'ULTRA LIMITED 120th ANNIVERSARY FLHTK',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 8508,
                'brand_id' => 77,
                'fipe_code' => '810096-9',
                'model' => 'ULTRA LIMITED FLHTK',
                'years' => '2019 a Zero Km'
            ],

            [
                'id' => 5759,
                'brand_id' => 77,
                'fipe_code' => '810058-6',
                'model' => 'V-ROD 10th ANNIVERSARY EDITION VRSCDX',
                'years' => '2012 a 2013'
            ],

            [
                'id' => 2747,
                'brand_id' => 77,
                'fipe_code' => '810036-5',
                'model' => 'V-ROD 1130cc SPORT VRSCB',
                'years' => '2004 a 2005'
            ],

            [
                'id' => 2748,
                'brand_id' => 77,
                'fipe_code' => '810034-9',
                'model' => 'V-ROD 1130cc VRSCA/ 1250 VRSCAW',
                'years' => '2002 a 2011'
            ],

            [
                'id' => 4938,
                'brand_id' => 77,
                'fipe_code' => '810050-0',
                'model' => 'V-ROD 1250cc MUSCLE VRSCF',
                'years' => '2009 a 2016'
            ],

            [
                'id' => 2749,
                'brand_id' => 77,
                'fipe_code' => '810041-1',
                'model' => 'V-ROD SCREAMING EAGLE',
                'years' => '2005 a 2007'
            ],

            [
                'id' => 2750,
                'brand_id' => 77,
                'fipe_code' => '810026-8',
                'model' => 'XL 1200',
                'years' => '1994 a 1996'
            ],

            [
                'id' => 2751,
                'brand_id' => 77,
                'fipe_code' => '810023-3',
                'model' => 'XL 1200 C-SPORTSTER CUSTOM',
                'years' => '1996 a 1998'
            ],

            [
                'id' => 2752,
                'brand_id' => 77,
                'fipe_code' => '810024-1',
                'model' => 'XL 1200 CUSTOM',
                'years' => '1996 a 2015'
            ],

            [
                'id' => 6820,
                'brand_id' => 77,
                'fipe_code' => '810067-5',
                'model' => 'XL 1200 CUSTOM LIMITED CA/CB',
                'years' => '2013 a 2017'
            ],

            [
                'id' => 7863,
                'brand_id' => 77,
                'fipe_code' => '810075-6',
                'model' => 'XL 1200 CX ROADSTER',
                'years' => '2017 a 2018'
            ],

            [
                'id' => 2753,
                'brand_id' => 77,
                'fipe_code' => '810025-0',
                'model' => 'XL 1200 SPORT',
                'years' => '1996 a 2001'
            ],

            [
                'id' => 4912,
                'brand_id' => 77,
                'fipe_code' => '810049-7',
                'model' => 'XL 1200N SPORTSTER NIGHTSTER',
                'years' => '2008 a 2009'
            ],

            [
                'id' => 8556,
                'brand_id' => 77,
                'fipe_code' => '810099-3',
                'model' => 'XL 1200NS SPORTSTER IRON',
                'years' => '2019 a 2020'
            ],

            [
                'id' => 8168,
                'brand_id' => 77,
                'fipe_code' => '810093-4',
                'model' => 'XL 1200X FORTY EIGHT 115th ANNIVERSARY',
                'years' => '2018 a 2018'
            ],

            [
                'id' => 6719,
                'brand_id' => 77,
                'fipe_code' => '810066-7',
                'model' => 'XL 1200X FORTY EIGHT SPORTSTER',
                'years' => '2014 a 2019'
            ],

            [
                'id' => 2754,
                'brand_id' => 77,
                'fipe_code' => '810028-4',
                'model' => 'XL 883 CUSTOM',
                'years' => '1997 a 2008'
            ],

            [
                'id' => 2755,
                'brand_id' => 77,
                'fipe_code' => '810027-6',
                'model' => 'XL 883 HUGGER',
                'years' => '1994 a 1996'
            ],

            [
                'id' => 2756,
                'brand_id' => 77,
                'fipe_code' => '810037-3',
                'model' => 'XL 883 R',
                'years' => '2005 a 2014'
            ],

            [
                'id' => 2757,
                'brand_id' => 77,
                'fipe_code' => '810029-2',
                'model' => 'XL 883 STD/ LOW',
                'years' => '1991 a 2008'
            ],

            [
                'id' => 5223,
                'brand_id' => 77,
                'fipe_code' => '810052-7',
                'model' => 'XL 883N IRON',
                'years' => '2010 a 2020'
            ],

            [
                'id' => 4993,
                'brand_id' => 77,
                'fipe_code' => '810051-9',
                'model' => 'XR 1200 SPORTSTER',
                'years' => '2009 a 2010'
            ],

            [
                'id' => 5316,
                'brand_id' => 77,
                'fipe_code' => '810054-3',
                'model' => 'XR 1200X SPORTSTER',
                'years' => '2010 a 2014'
            ]
        ];

        $HARTFORDModels = [
            [
                'id' => 2758,
                'brand_id' => 78,
                'fipe_code' => '838001-5',
                'model' => 'LEGION 125',
                'years' => '1997 a 2000'
            ]
        ];

        $HEROModels = [
            [
                'id' => 2759,
                'brand_id' => 79,
                'fipe_code' => '841003-8',
                'model' => 'ANKUR 50',
                'years' => '1995 a 1998'
            ],

            [
                'id' => 2760,
                'brand_id' => 79,
                'fipe_code' => '841004-6',
                'model' => 'PUCH 50',
                'years' => '1999 a 2002'
            ],

            [
                'id' => 2761,
                'brand_id' => 79,
                'fipe_code' => '841005-4',
                'model' => 'PUCH 65',
                'years' => '1995 a 1998'
            ],

            [
                'id' => 2762,
                'brand_id' => 79,
                'fipe_code' => '841006-2',
                'model' => 'STREAM 50',
                'years' => '1998 a 2002'
            ]
        ];

        $HONDAModels = [
            [
                'id' => 9265,
                'brand_id' => 80,
                'fipe_code' => '811165-0',
                'model' => 'ADV 150',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 2763,
                'brand_id' => 80,
                'fipe_code' => '811001-8',
                'model' => 'AMERICA CLASSIC 1600',
                'years' => '1997 a 1997'
            ],

            [
                'id' => 7467,
                'brand_id' => 80,
                'fipe_code' => '811138-3',
                'model' => 'BIZ 110i',
                'years' => '2016 a Zero Km'
            ],

            [
                'id' => 11200,
                'brand_id' => 80,
                'fipe_code' => '811080-8',
                'model' => 'BIZ 125 ES/ 125 EX FLEX',
                'years' => '2006 a Zero Km'
            ],

            [
                'id' => 5515,
                'brand_id' => 80,
                'fipe_code' => '811106-5',
                'model' => 'BIZ 125 EX/ 125 EX FLEX',
                'years' => '2011 a Zero Km'
            ],

            [
                'id' => 11201,
                'brand_id' => 80,
                'fipe_code' => '811079-4',
                'model' => 'BIZ 125 KS/ 125 KS FLEX',
                'years' => '2006 a 2012'
            ],

            [
                'id' => 7468,
                'brand_id' => 80,
                'fipe_code' => '811137-5',
                'model' => 'BIZ 125/125i Flex',
                'years' => '2016 a Zero Km'
            ],

            [
                'id' => 3963,
                'brand_id' => 80,
                'fipe_code' => '811084-0',
                'model' => 'BIZ 125+',
                'years' => '2006 a 2010'
            ],

            [
                'id' => 2766,
                'brand_id' => 80,
                'fipe_code' => '811002-6',
                'model' => 'C 100 BIZ-ES',
                'years' => '1999 a 2015'
            ],

            [
                'id' => 2764,
                'brand_id' => 80,
                'fipe_code' => '811003-4',
                'model' => 'C 100 BIZ/ 100 BIZ KS',
                'years' => '1998 a 2015'
            ],

            [
                'id' => 2765,
                'brand_id' => 80,
                'fipe_code' => '811065-4',
                'model' => 'C 100 BIZ+',
                'years' => '2002 a 2005'
            ],

            [
                'id' => 2767,
                'brand_id' => 80,
                'fipe_code' => '811004-2',
                'model' => 'C 100 DREAM',
                'years' => '1993 a 1998'
            ],

            [
                'id' => 9776,
                'brand_id' => 80,
                'fipe_code' => '811169-3',
                'model' => 'CB 1000R Black Edition',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 5679,
                'brand_id' => 80,
                'fipe_code' => '811109-0',
                'model' => 'CB 1000R/ABS',
                'years' => '2011 a Zero Km'
            ],

            [
                'id' => 11087,
                'brand_id' => 80,
                'fipe_code' => '811135-9',
                'model' => 'CB 250 TWISTER/FLEXONE',
                'years' => '2016 a 2022'
            ],

            [
                'id' => 10378,
                'brand_id' => 80,
                'fipe_code' => '811174-0',
                'model' => 'CB 300F Twister Flex',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 4939,
                'brand_id' => 80,
                'fipe_code' => '811098-0',
                'model' => 'CB 300R/ 300R FLEX',
                'years' => '2009 a 2015'
            ],

            [
                'id' => 2768,
                'brand_id' => 80,
                'fipe_code' => '811006-9',
                'model' => 'CB 450 DX',
                'years' => '1990 a 1994'
            ],

            [
                'id' => 2769,
                'brand_id' => 80,
                'fipe_code' => '811009-3',
                'model' => 'CB 500',
                'years' => '1997 a 2005'
            ],

            [
                'id' => 6619,
                'brand_id' => 80,
                'fipe_code' => '811118-9',
                'model' => 'CB 500F',
                'years' => '2014 a Zero Km'
            ],

            [
                'id' => 6821,
                'brand_id' => 80,
                'fipe_code' => '811121-9',
                'model' => 'CB 500X',
                'years' => '2013 a Zero Km'
            ],

            [
                'id' => 2770,
                'brand_id' => 80,
                'fipe_code' => '811076-0',
                'model' => 'CB 600F HORNET',
                'years' => '2005 a 2015'
            ],

            [
                'id' => 7058,
                'brand_id' => 80,
                'fipe_code' => '811127-8',
                'model' => 'CB 650F',
                'years' => '2015 a 2019'
            ],

            [
                'id' => 9030,
                'brand_id' => 80,
                'fipe_code' => '811160-0',
                'model' => 'CB 650R',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 4412,
                'brand_id' => 80,
                'fipe_code' => '811086-7',
                'model' => 'CB1300 SUPER FOUR',
                'years' => '2007 a 2008'
            ],

            [
                'id' => 2771,
                'brand_id' => 80,
                'fipe_code' => '811010-7',
                'model' => 'CBR 1000 F',
                'years' => '1991 a 1996'
            ],

            [
                'id' => 2772,
                'brand_id' => 80,
                'fipe_code' => '811073-5',
                'model' => 'CBR 1000 RR Fireblade',
                'years' => '2004 a 2020'
            ],

            [
                'id' => 8306,
                'brand_id' => 80,
                'fipe_code' => '811150-2',
                'model' => 'CBR 1000 RR Fireblade SP',
                'years' => '2017 a 2020'
            ],

            [
                'id' => 9636,
                'brand_id' => 80,
                'fipe_code' => '811168-5',
                'model' => 'CBR 1000 RR-R Fireblade SP',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 10610,
                'brand_id' => 80,
                'fipe_code' => '811175-8',
                'model' => 'CBR 1000 RR-R Fireblade SP 30TH EDITION',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 2773,
                'brand_id' => 80,
                'fipe_code' => '811011-5',
                'model' => 'CBR 1100 XX SUPER BLACKBIRD',
                'years' => '1997 a 2006'
            ],

            [
                'id' => 6041,
                'brand_id' => 80,
                'fipe_code' => '811110-3',
                'model' => 'CBR 250R',
                'years' => '2012 a 2012'
            ],

            [
                'id' => 2774,
                'brand_id' => 80,
                'fipe_code' => '811012-3',
                'model' => 'CBR 450',
                'years' => '1990 a 1995'
            ],

            [
                'id' => 2775,
                'brand_id' => 80,
                'fipe_code' => '811048-4',
                'model' => 'CBR 450 SR',
                'years' => '1990 a 1995'
            ],

            [
                'id' => 6676,
                'brand_id' => 80,
                'fipe_code' => '811119-7',
                'model' => 'CBR 500R',
                'years' => '2014 a 2018'
            ],

            [
                'id' => 2776,
                'brand_id' => 80,
                'fipe_code' => '811013-1',
                'model' => 'CBR 600 F',
                'years' => '1992 a 2015'
            ],

            [
                'id' => 2777,
                'brand_id' => 80,
                'fipe_code' => '811069-7',
                'model' => 'CBR 600 RR',
                'years' => '2003 a 2014'
            ],

            [
                'id' => 9072,
                'brand_id' => 80,
                'fipe_code' => '811162-6',
                'model' => 'CBR 650 R',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 7059,
                'brand_id' => 80,
                'fipe_code' => '811126-0',
                'model' => 'CBR 650F',
                'years' => '2015 a 2019'
            ],

            [
                'id' => 2778,
                'brand_id' => 80,
                'fipe_code' => '811014-0',
                'model' => 'CBR 900 RR FIRE BLADE',
                'years' => '1993 a 2004'
            ],

            [
                'id' => 2779,
                'brand_id' => 80,
                'fipe_code' => '811015-8',
                'model' => 'CBX 150 AERO',
                'years' => '1990 a 1993'
            ],

            [
                'id' => 2780,
                'brand_id' => 80,
                'fipe_code' => '811016-6',
                'model' => 'CBX 200 STRADA',
                'years' => '1993 a 2003'
            ],

            [
                'id' => 2781,
                'brand_id' => 80,
                'fipe_code' => '811061-1',
                'model' => 'CBX 250 TWISTER',
                'years' => '2001 a 2008'
            ],

            [
                'id' => 2782,
                'brand_id' => 80,
                'fipe_code' => '811018-2',
                'model' => 'CBX 750 FOUR',
                'years' => '1990 a 1990'
            ],

            [
                'id' => 2783,
                'brand_id' => 80,
                'fipe_code' => '811017-4',
                'model' => 'CBX 750 FOUR INDY',
                'years' => '1990 a 1995'
            ],

            [
                'id' => 2784,
                'brand_id' => 80,
                'fipe_code' => '811055-7',
                'model' => 'CBX 750 R',
                'years' => '1990 a 1990'
            ],

            [
                'id' => 2785,
                'brand_id' => 80,
                'fipe_code' => '811024-7',
                'model' => 'CG 125',
                'years' => '1990 a 1990'
            ],

            [
                'id' => 4913,
                'brand_id' => 80,
                'fipe_code' => '811095-6',
                'model' => 'CG 125 CARGO ES',
                'years' => '2009 a 2013'
            ],

            [
                'id' => 6875,
                'brand_id' => 80,
                'fipe_code' => '811124-3',
                'model' => 'CG 125 CARGO ESD',
                'years' => '2014 a 2015'
            ],

            [
                'id' => 2786,
                'brand_id' => 80,
                'fipe_code' => '811019-0',
                'model' => 'CG 125 CARGO/ CARGO KS/125i CARGO',
                'years' => '1990 a 2018'
            ],

            [
                'id' => 2787,
                'brand_id' => 80,
                'fipe_code' => '811078-6',
                'model' => 'CG 125 FAN / FAN KS / 125 i FAN',
                'years' => '2005 a 2018'
            ],

            [
                'id' => 4842,
                'brand_id' => 80,
                'fipe_code' => '811091-3',
                'model' => 'CG 125 FAN ES',
                'years' => '2009 a 2015'
            ],

            [
                'id' => 6567,
                'brand_id' => 80,
                'fipe_code' => '811117-0',
                'model' => 'CG 125 FAN ESD',
                'years' => '2014 a 2015'
            ],

            [
                'id' => 2788,
                'brand_id' => 80,
                'fipe_code' => '811022-0',
                'model' => 'CG 125 TITAN',
                'years' => '1994 a 2000'
            ],

            [
                'id' => 2789,
                'brand_id' => 80,
                'fipe_code' => '811020-4',
                'model' => 'CG 125 TITAN-ES',
                'years' => '1999 a 2004'
            ],

            [
                'id' => 2790,
                'brand_id' => 80,
                'fipe_code' => '811021-2',
                'model' => 'CG 125 TITAN-KS',
                'years' => '1999 a 2004'
            ],

            [
                'id' => 2791,
                'brand_id' => 80,
                'fipe_code' => '811064-6',
                'model' => 'CG 125 TITAN-KSE',
                'years' => '2002 a 2004'
            ],

            [
                'id' => 2792,
                'brand_id' => 80,
                'fipe_code' => '811023-9',
                'model' => 'CG 125 TODAY',
                'years' => '1990 a 1994'
            ],

            [
                'id' => 6876,
                'brand_id' => 80,
                'fipe_code' => '811123-5',
                'model' => 'CG 150 CARGO ESD FLEX',
                'years' => '2013 a 2015'
            ],

            [
                'id' => 5432,
                'brand_id' => 80,
                'fipe_code' => '811105-7',
                'model' => 'CG 150 FAN ESDi/ 150 FAN ESDi FLEX',
                'years' => '2011 a 2015'
            ],

            [
                'id' => 5095,
                'brand_id' => 80,
                'fipe_code' => '811101-4',
                'model' => 'CG 150 FAN ESi/ 150 FAN ESi FLEX',
                'years' => '2010 a 2013'
            ],

            [
                'id' => 2793,
                'brand_id' => 80,
                'fipe_code' => '811077-8',
                'model' => 'CG 150 SPORT',
                'years' => '2005 a 2008'
            ],

            [
                'id' => 7108,
                'brand_id' => 80,
                'fipe_code' => '811128-6',
                'model' => 'CG 150 START FLEXONE',
                'years' => '2015 a 2016'
            ],

            [
                'id' => 2794,
                'brand_id' => 80,
                'fipe_code' => '811071-9',
                'model' => 'CG 150 TITAN-ES',
                'years' => '2004 a 2009'
            ],

            [
                'id' => 4914,
                'brand_id' => 80,
                'fipe_code' => '811092-1',
                'model' => 'CG 150 TITAN-ES MIX',
                'years' => '2009 a 2010'
            ],

            [
                'id' => 4915,
                'brand_id' => 80,
                'fipe_code' => '811093-0',
                'model' => 'CG 150 TITAN-ESD MIX/FLEX',
                'years' => '2009 a 2015'
            ],

            [
                'id' => 2795,
                'brand_id' => 80,
                'fipe_code' => '811072-7',
                'model' => 'CG 150 TITAN-ESD/ TITAN SPECIAL EDITION',
                'years' => '2004 a 2009'
            ],

            [
                'id' => 5051,
                'brand_id' => 80,
                'fipe_code' => '811100-6',
                'model' => 'CG 150 TITAN-EX MIX/FLEX',
                'years' => '2010 a 2015'
            ],

            [
                'id' => 4916,
                'brand_id' => 80,
                'fipe_code' => '811094-8',
                'model' => 'CG 150 TITAN-KS MIX',
                'years' => '2009 a 2011'
            ],

            [
                'id' => 2796,
                'brand_id' => 80,
                'fipe_code' => '811070-0',
                'model' => 'CG 150 TITAN-KS/ TITAN-JOB',
                'years' => '2004 a 2009'
            ],

            [
                'id' => 10840,
                'brand_id' => 80,
                'fipe_code' => '811142-1',
                'model' => 'CG 160 CARGO Flex',
                'years' => '2016 a Zero Km'
            ],

            [
                'id' => 7329,
                'brand_id' => 80,
                'fipe_code' => '811134-0',
                'model' => 'CG 160 FAN ESDi FLEXONE',
                'years' => '2016 a 2017'
            ],

            [
                'id' => 8071,
                'brand_id' => 80,
                'fipe_code' => '811147-2',
                'model' => 'CG 160 FAN Flex',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 7525,
                'brand_id' => 80,
                'fipe_code' => '811139-1',
                'model' => 'CG 160 START',
                'years' => '2016 a Zero Km'
            ],

            [
                'id' => 8602,
                'brand_id' => 80,
                'fipe_code' => '811154-5',
                'model' => 'CG 160 TITAN 25TH ANNIVERSARY',
                'years' => '2019 a 2019'
            ],

            [
                'id' => 7330,
                'brand_id' => 80,
                'fipe_code' => '811133-2',
                'model' => 'CG 160 TITAN FLEXONE/Ed.Especial 40 Anos',
                'years' => '2016 a Zero Km'
            ],

            [
                'id' => 8976,
                'brand_id' => 80,
                'fipe_code' => '811159-6',
                'model' => 'CG 160 TITAN S Flex',
                'years' => '2020 a 2021'
            ],

            [
                'id' => 2797,
                'brand_id' => 80,
                'fipe_code' => '811025-5',
                'model' => 'CH 125-R SPACY',
                'years' => '1994 a 1996'
            ],

            [
                'id' => 2798,
                'brand_id' => 80,
                'fipe_code' => '811053-0',
                'model' => 'CR 125',
                'years' => '1991 a 2006'
            ],

            [
                'id' => 2799,
                'brand_id' => 80,
                'fipe_code' => '811050-6',
                'model' => 'CR 250',
                'years' => '1991 a 2004'
            ],

            [
                'id' => 2800,
                'brand_id' => 80,
                'fipe_code' => '811054-9',
                'model' => 'CR 80',
                'years' => '1992 a 2002'
            ],

            [
                'id' => 7855,
                'brand_id' => 80,
                'fipe_code' => '811143-0',
                'model' => 'CRF 1000L AFRICA TWIN',
                'years' => '2017 a 2020'
            ],

            [
                'id' => 8800,
                'brand_id' => 80,
                'fipe_code' => '811158-8',
                'model' => 'CRF 1000L AFRICA TWIN ADV. SPORTS TE',
                'years' => '2020 a 2020'
            ],

            [
                'id' => 8801,
                'brand_id' => 80,
                'fipe_code' => '811157-0',
                'model' => 'CRF 1000L AFRICA TWIN ADVENTURE SPORTS',
                'years' => '2020 a 2020'
            ],

            [
                'id' => 7856,
                'brand_id' => 80,
                'fipe_code' => '811144-8',
                'model' => 'CRF 1000L AFRICA TWIN TE',
                'years' => '2017 a 2020'
            ],

            [
                'id' => 10420,
                'brand_id' => 80,
                'fipe_code' => '811167-7',
                'model' => 'CRF 1100L AFRICA TWIN ADV. SPORTS ES/DCT',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 10421,
                'brand_id' => 80,
                'fipe_code' => '811166-9',
                'model' => 'CRF 1100L AFRICA TWIN/DCT',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 6859,
                'brand_id' => 80,
                'fipe_code' => '811122-7',
                'model' => 'CRF 110F',
                'years' => '2013 a 2013'
            ],

            [
                'id' => 6195,
                'brand_id' => 80,
                'fipe_code' => '811112-0',
                'model' => 'CRF 150F',
                'years' => '2012 a 2017'
            ],

            [
                'id' => 4446,
                'brand_id' => 80,
                'fipe_code' => '811087-5',
                'model' => 'CRF 230 F',
                'years' => '2007 a 2020'
            ],

            [
                'id' => 8540,
                'brand_id' => 80,
                'fipe_code' => '811151-0',
                'model' => 'CRF 250 F',
                'years' => '2019 a Zero Km'
            ],

            [
                'id' => 10379,
                'brand_id' => 80,
                'fipe_code' => '811173-1',
                'model' => 'CRF 250 R',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 4917,
                'brand_id' => 80,
                'fipe_code' => '811096-4',
                'model' => 'CRF 250 X',
                'years' => '2007 a 2009'
            ],

            [
                'id' => 6455,
                'brand_id' => 80,
                'fipe_code' => '811115-4',
                'model' => 'CRF 250L',
                'years' => '2013 a 2013'
            ],

            [
                'id' => 9100,
                'brand_id' => 80,
                'fipe_code' => '811164-2',
                'model' => 'CRF 450 R',
                'years' => '2019 a Zero Km'
            ],

            [
                'id' => 9101,
                'brand_id' => 80,
                'fipe_code' => '811163-4',
                'model' => 'CRF 450 RX',
                'years' => '2019 a Zero Km'
            ],

            [
                'id' => 8705,
                'brand_id' => 80,
                'fipe_code' => '811156-1',
                'model' => 'CRF 450 X',
                'years' => '2019 a 2021'
            ],

            [
                'id' => 6877,
                'brand_id' => 80,
                'fipe_code' => '811125-1',
                'model' => 'CTX 700N',
                'years' => '2014 a 2014'
            ],

            [
                'id' => 2801,
                'brand_id' => 80,
                'fipe_code' => '811026-3',
                'model' => 'DOMINATOR 650',
                'years' => '1992 a 1994'
            ],

            [
                'id' => 8557,
                'brand_id' => 80,
                'fipe_code' => '811153-7',
                'model' => 'ELITE 125',
                'years' => '2019 a Zero Km'
            ],

            [
                'id' => 10125,
                'brand_id' => 80,
                'fipe_code' => '811170-7',
                'model' => 'Forza 350 ',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 2802,
                'brand_id' => 80,
                'fipe_code' => '811027-1',
                'model' => 'GOLD WING 1500/ 1800',
                'years' => '1993 a 2019'
            ],

            [
                'id' => 8649,
                'brand_id' => 80,
                'fipe_code' => '811155-3',
                'model' => 'GOLD WING TOUR 1800',
                'years' => '2019 a Zero Km'
            ],

            [
                'id' => 4994,
                'brand_id' => 80,
                'fipe_code' => '811099-9',
                'model' => 'LEAD 110',
                'years' => '2010 a 2016'
            ],

            [
                'id' => 2803,
                'brand_id' => 80,
                'fipe_code' => '811028-0',
                'model' => 'MAGNA 750',
                'years' => '1994 a 1998'
            ],

            [
                'id' => 6135,
                'brand_id' => 80,
                'fipe_code' => '811111-1',
                'model' => 'NC 700 X/ 700X ABS',
                'years' => '2013 a 2015'
            ],

            [
                'id' => 10422,
                'brand_id' => 80,
                'fipe_code' => '811131-6',
                'model' => 'NC 750X/NC 750X ABS/DCT',
                'years' => '2015 a Zero Km'
            ],

            [
                'id' => 2804,
                'brand_id' => 80,
                'fipe_code' => '811030-1',
                'model' => 'NX 150',
                'years' => '1990 a 1993'
            ],

            [
                'id' => 2805,
                'brand_id' => 80,
                'fipe_code' => '811031-0',
                'model' => 'NX 200',
                'years' => '1993 a 2001'
            ],

            [
                'id' => 2806,
                'brand_id' => 80,
                'fipe_code' => '811032-8',
                'model' => 'NX 350 SAHARA',
                'years' => '1990 a 1999'
            ],

            [
                'id' => 6252,
                'brand_id' => 80,
                'fipe_code' => '811113-8',
                'model' => 'NX 400i FALCON',
                'years' => '2013 a 2015'
            ],

            [
                'id' => 2807,
                'brand_id' => 80,
                'fipe_code' => '811033-6',
                'model' => 'NX-4 FALCON 400',
                'years' => '1999 a 2008'
            ],

            [
                'id' => 2808,
                'brand_id' => 80,
                'fipe_code' => '811067-0',
                'model' => 'NXR 125 BROS ES',
                'years' => '2003 a 2015'
            ],

            [
                'id' => 2809,
                'brand_id' => 80,
                'fipe_code' => '811066-2',
                'model' => 'NXR 125 BROS KS',
                'years' => '2003 a 2014'
            ],

            [
                'id' => 3843,
                'brand_id' => 80,
                'fipe_code' => '811082-4',
                'model' => 'NXR 150 BROS ES',
                'years' => '2006 a 2009'
            ],

            [
                'id' => 5136,
                'brand_id' => 80,
                'fipe_code' => '811103-0',
                'model' => 'NXR 150 BROS ES MIX/FLEX',
                'years' => '2010 a 2014'
            ],

            [
                'id' => 2810,
                'brand_id' => 80,
                'fipe_code' => '811068-9',
                'model' => 'NXR 150 BROS ESD',
                'years' => '2003 a 2009'
            ],

            [
                'id' => 5137,
                'brand_id' => 80,
                'fipe_code' => '811104-9',
                'model' => 'NXR 150 BROS ESD MIX/FLEX',
                'years' => '2010 a 2015'
            ],

            [
                'id' => 3844,
                'brand_id' => 80,
                'fipe_code' => '811081-6',
                'model' => 'NXR 150 BROS KS',
                'years' => '2006 a 2010'
            ],

            [
                'id' => 5138,
                'brand_id' => 80,
                'fipe_code' => '811102-2',
                'model' => 'NXR 150 BROS KS MIX/FLEX',
                'years' => '2010 a 2012'
            ],

            [
                'id' => 7438,
                'brand_id' => 80,
                'fipe_code' => '811136-7',
                'model' => 'NXR 160 BROS',
                'years' => '2016 a 2018'
            ],

            [
                'id' => 7109,
                'brand_id' => 80,
                'fipe_code' => '811129-4',
                'model' => 'NXR 160 BROS ESD FLEXONE',
                'years' => '2015 a 2016'
            ],

            [
                'id' => 7110,
                'brand_id' => 80,
                'fipe_code' => '811130-8',
                'model' => 'NXR 160 BROS ESDD FLEXONE',
                'years' => '2015 a Zero Km'
            ],

            [
                'id' => 11203,
                'brand_id' => 80,
                'fipe_code' => '811182-0',
                'model' => 'NXR 160 BROS FLEX',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 8169,
                'brand_id' => 80,
                'fipe_code' => '811148-0',
                'model' => 'PCX 150 SPORT',
                'years' => '2018 a 2022'
            ],

            [
                'id' => 6473,
                'brand_id' => 80,
                'fipe_code' => '811116-2',
                'model' => 'PCX 150/DLX',
                'years' => '2013 a 2022'
            ],

            [
                'id' => 10149,
                'brand_id' => 80,
                'fipe_code' => '811171-5',
                'model' => 'PCX 160 ',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 10150,
                'brand_id' => 80,
                'fipe_code' => '811172-3',
                'model' => 'PCX 160 DLX',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 4264,
                'brand_id' => 80,
                'fipe_code' => '811085-9',
                'model' => 'POP 100 97cc',
                'years' => '2007 a 2015'
            ],

            [
                'id' => 7331,
                'brand_id' => 80,
                'fipe_code' => '811132-4',
                'model' => 'POP 110i',
                'years' => '2016 a Zero Km'
            ],

            [
                'id' => 11090,
                'brand_id' => 80,
                'fipe_code' => '811179-0',
                'model' => 'POP 110i ES',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 10954,
                'brand_id' => 80,
                'fipe_code' => '811178-2',
                'model' => 'SAHARA 300 ABS FLEX',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 10955,
                'brand_id' => 80,
                'fipe_code' => '811176-6',
                'model' => 'SAHARA 300 ADVENTURE ABS FLEX',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 10956,
                'brand_id' => 80,
                'fipe_code' => '811177-4',
                'model' => 'SAHARA 300 RALLY ABS FLEX',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 7932,
                'brand_id' => 80,
                'fipe_code' => '811146-4',
                'model' => 'SH 150i/DLX',
                'years' => '2017 a 2021'
            ],

            [
                'id' => 7526,
                'brand_id' => 80,
                'fipe_code' => '811140-5',
                'model' => 'SH 300i',
                'years' => '2016 a 2021'
            ],

            [
                'id' => 8541,
                'brand_id' => 80,
                'fipe_code' => '811152-9',
                'model' => 'SH 300i Sport',
                'years' => '2019 a 2021'
            ],

            [
                'id' => 2811,
                'brand_id' => 80,
                'fipe_code' => '811057-3',
                'model' => 'SHADOW 1100 AC',
                'years' => '1994 a 2002'
            ],

            [
                'id' => 2812,
                'brand_id' => 80,
                'fipe_code' => '811059-0',
                'model' => 'SHADOW 1100 OURO',
                'years' => '2000 a 2000'
            ],

            [
                'id' => 2813,
                'brand_id' => 80,
                'fipe_code' => '811034-4',
                'model' => 'SHADOW AM 750',
                'years' => '1997 a 2001'
            ],

            [
                'id' => 2814,
                'brand_id' => 80,
                'fipe_code' => '811035-2',
                'model' => 'SHADOW VT 1100',
                'years' => '1994 a 1999'
            ],

            [
                'id' => 2815,
                'brand_id' => 80,
                'fipe_code' => '811036-0',
                'model' => 'SUPER HAWK 1000',
                'years' => '1997 a 1998'
            ],

            [
                'id' => 2816,
                'brand_id' => 80,
                'fipe_code' => '811075-1',
                'model' => 'TRX 350 FOURTRAX  FM QUADRICICLO',
                'years' => '2004 a 2007'
            ],

            [
                'id' => 2817,
                'brand_id' => 80,
                'fipe_code' => '811074-3',
                'model' => 'TRX 350 FOURTRAX  TM QUADRICICLO',
                'years' => '2004 a 2007'
            ],

            [
                'id' => 4709,
                'brand_id' => 80,
                'fipe_code' => '811089-1',
                'model' => 'TRX 420 FOURTRAX   TM 4x2 QUADRICICLO',
                'years' => '2008 a 2015'
            ],

            [
                'id' => 4708,
                'brand_id' => 80,
                'fipe_code' => '811090-5',
                'model' => 'TRX 420 FOURTRAX  FM 4x4 QUADRICICLO',
                'years' => '2008 a Zero Km'
            ],

            [
                'id' => 2818,
                'brand_id' => 80,
                'fipe_code' => '811037-9',
                'model' => 'VALKYRIE 1500',
                'years' => '1997 a 1998'
            ],

            [
                'id' => 5562,
                'brand_id' => 80,
                'fipe_code' => '811108-1',
                'model' => 'VFR 1200F',
                'years' => '2010 a 2013'
            ],

            [
                'id' => 6311,
                'brand_id' => 80,
                'fipe_code' => '811114-6',
                'model' => 'VFR 1200X CROSSTOURER',
                'years' => '2012 a 2013'
            ],

            [
                'id' => 2819,
                'brand_id' => 80,
                'fipe_code' => '811038-7',
                'model' => 'VT 600 C SHADOW',
                'years' => '1995 a 2005'
            ],

            [
                'id' => 3918,
                'brand_id' => 80,
                'fipe_code' => '811083-2',
                'model' => 'VT 750 SHADOW',
                'years' => '2006 a 2014'
            ],

            [
                'id' => 2820,
                'brand_id' => 80,
                'fipe_code' => '811063-8',
                'model' => 'VTX 1800R/ 1800S/ 1800C 1795cc',
                'years' => '2002 a 2007'
            ],

            [
                'id' => 8307,
                'brand_id' => 80,
                'fipe_code' => '811149-9',
                'model' => 'X-ADV 745cc',
                'years' => '2017 a Zero Km'
            ],

            [
                'id' => 4447,
                'brand_id' => 80,
                'fipe_code' => '811088-3',
                'model' => 'XL 1000V VARADERO',
                'years' => '2007 a 2009'
            ],

            [
                'id' => 2821,
                'brand_id' => 80,
                'fipe_code' => '811039-5',
                'model' => 'XL 125 DUTY',
                'years' => '1990 a 1991'
            ],

            [
                'id' => 2822,
                'brand_id' => 80,
                'fipe_code' => '811040-9',
                'model' => 'XL 125 S',
                'years' => '1992 a 1996'
            ],

            [
                'id' => 5546,
                'brand_id' => 80,
                'fipe_code' => '811107-3',
                'model' => 'XL 700V TRANSALP',
                'years' => '2011 a 2014'
            ],

            [
                'id' => 2823,
                'brand_id' => 80,
                'fipe_code' => '811043-3',
                'model' => 'XLR 125',
                'years' => '1996 a 2003'
            ],

            [
                'id' => 2824,
                'brand_id' => 80,
                'fipe_code' => '811060-3',
                'model' => 'XLR 125 ES',
                'years' => '2000 a 2003'
            ],

            [
                'id' => 2825,
                'brand_id' => 80,
                'fipe_code' => '811044-1',
                'model' => 'XLX 250 R',
                'years' => '1990 a 1994'
            ],

            [
                'id' => 2826,
                'brand_id' => 80,
                'fipe_code' => '811045-0',
                'model' => 'XLX 350 R',
                'years' => '1990 a 1991'
            ],

            [
                'id' => 2827,
                'brand_id' => 80,
                'fipe_code' => '811046-8',
                'model' => 'XR 200 R',
                'years' => '1994 a 2003'
            ],

            [
                'id' => 2828,
                'brand_id' => 80,
                'fipe_code' => '811062-0',
                'model' => 'XR 250 TORNADO',
                'years' => '2001 a 2008'
            ],

            [
                'id' => 11157,
                'brand_id' => 80,
                'fipe_code' => '811180-4',
                'model' => 'XR 300L TORNADO FLEX',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 2829,
                'brand_id' => 80,
                'fipe_code' => '811047-6',
                'model' => 'XR 650',
                'years' => '1997 a 1998'
            ],

            [
                'id' => 9031,
                'brand_id' => 80,
                'fipe_code' => '811161-8',
                'model' => 'XRE 190 ADVENTURE FLEX',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 7607,
                'brand_id' => 80,
                'fipe_code' => '811141-3',
                'model' => 'XRE 190/ Flex',
                'years' => '2016 a Zero Km'
            ],

            [
                'id' => 7912,
                'brand_id' => 80,
                'fipe_code' => '811145-6',
                'model' => 'XRE 300 ADVENTURE FLEX',
                'years' => '2017 a Zero Km'
            ],

            [
                'id' => 6720,
                'brand_id' => 80,
                'fipe_code' => '811120-0',
                'model' => 'XRE 300 RALLY FLEX',
                'years' => '2014 a Zero Km'
            ],

            [
                'id' => 4940,
                'brand_id' => 80,
                'fipe_code' => '811097-2',
                'model' => 'XRE 300/ 300 ABS/ FLEX',
                'years' => '2010 a Zero Km'
            ]
        ];

        $HUSABERGModels = [
            [
                'id' => 2830,
                'brand_id' => 81,
                'fipe_code' => '835002-7',
                'model' => 'FE 400 400cc',
                'years' => '1999 a 2003'
            ],

            [
                'id' => 2831,
                'brand_id' => 81,
                'fipe_code' => '835001-9',
                'model' => 'FE 501 500cc',
                'years' => '1999 a 2003'
            ],

            [
                'id' => 4075,
                'brand_id' => 81,
                'fipe_code' => '835003-5',
                'model' => 'FE 550 E',
                'years' => '2006 a 2008'
            ]
        ];

        $HUSQVARNAModels = [
            [
                'id' => 8329,
                'brand_id' => 82,
                'fipe_code' => '812022-6',
                'model' => '701 ENDURO',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 8330,
                'brand_id' => 82,
                'fipe_code' => '812021-8',
                'model' => '701 SUPERMOTO',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 2832,
                'brand_id' => 82,
                'fipe_code' => '812008-0',
                'model' => 'CR 125',
                'years' => '1999 a 2001'
            ],

            [
                'id' => 2833,
                'brand_id' => 82,
                'fipe_code' => '812011-0',
                'model' => 'CR 250',
                'years' => '1999 a 2001'
            ],

            [
                'id' => 2834,
                'brand_id' => 82,
                'fipe_code' => '812015-3',
                'model' => 'HUSQY BOY J',
                'years' => '2001 a 2002'
            ],

            [
                'id' => 2835,
                'brand_id' => 82,
                'fipe_code' => '812017-0',
                'model' => 'HUSQY BOY R',
                'years' => '2001 a 2001'
            ],

            [
                'id' => 2836,
                'brand_id' => 82,
                'fipe_code' => '812016-1',
                'model' => 'HUSQY BOY S',
                'years' => '2001 a 2001'
            ],

            [
                'id' => 9842,
                'brand_id' => 82,
                'fipe_code' => '812025-0',
                'model' => 'NORDEN 901 ',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 2837,
                'brand_id' => 82,
                'fipe_code' => '812010-2',
                'model' => 'SM 610',
                'years' => '1999 a 2008'
            ],

            [
                'id' => 4419,
                'brand_id' => 82,
                'fipe_code' => '812019-6',
                'model' => 'SMR 510',
                'years' => '2007 a 2008'
            ],

            [
                'id' => 8433,
                'brand_id' => 82,
                'fipe_code' => '812023-4',
                'model' => 'SVARTPILEN 401',
                'years' => '2018 a 2019'
            ],

            [
                'id' => 2838,
                'brand_id' => 82,
                'fipe_code' => '812012-9',
                'model' => 'TC 570',
                'years' => '2001 a 2001'
            ],

            [
                'id' => 11063,
                'brand_id' => 82,
                'fipe_code' => '812027-7',
                'model' => 'TE 300',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 9847,
                'brand_id' => 82,
                'fipe_code' => '812026-9',
                'model' => 'TE 300i Edição Rockstar',
                'years' => '2022 a 2022'
            ],

            [
                'id' => 2839,
                'brand_id' => 82,
                'fipe_code' => '812013-7',
                'model' => 'TE 400',
                'years' => '2001 a 2002'
            ],

            [
                'id' => 2840,
                'brand_id' => 82,
                'fipe_code' => '812005-6',
                'model' => 'TE 410',
                'years' => '1999 a 2000'
            ],

            [
                'id' => 2841,
                'brand_id' => 82,
                'fipe_code' => '812007-2',
                'model' => 'TE 410 E',
                'years' => '1999 a 2000'
            ],

            [
                'id' => 2842,
                'brand_id' => 82,
                'fipe_code' => '812018-8',
                'model' => 'TE 450',
                'years' => '2004 a 2004'
            ],

            [
                'id' => 4420,
                'brand_id' => 82,
                'fipe_code' => '812020-0',
                'model' => 'TE 510',
                'years' => '2007 a 2008'
            ],

            [
                'id' => 2843,
                'brand_id' => 82,
                'fipe_code' => '812014-5',
                'model' => 'TE 570',
                'years' => '2001 a 2004'
            ],

            [
                'id' => 2844,
                'brand_id' => 82,
                'fipe_code' => '812004-8',
                'model' => 'TE 610',
                'years' => '1999 a 2008'
            ],

            [
                'id' => 2845,
                'brand_id' => 82,
                'fipe_code' => '812009-9',
                'model' => 'TE 610 E',
                'years' => '1999 a 2000'
            ],

            [
                'id' => 8434,
                'brand_id' => 82,
                'fipe_code' => '812024-2',
                'model' => 'VITPILEN 701',
                'years' => '2018 a 2018'
            ],

            [
                'id' => 2846,
                'brand_id' => 82,
                'fipe_code' => '812001-3',
                'model' => 'WR 250',
                'years' => '1994 a 2004'
            ],

            [
                'id' => 2847,
                'brand_id' => 82,
                'fipe_code' => '812002-1',
                'model' => 'WR 360',
                'years' => '1994 a 2002'
            ],

            [
                'id' => 2848,
                'brand_id' => 82,
                'fipe_code' => '812003-0',
                'model' => 'WRE 125',
                'years' => '1995 a 1996'
            ]
        ];

        $KAWASAKIModels = [
            [
                'id' => 2874,
                'brand_id' => 85,
                'fipe_code' => '817034-7',
                'model' => 'AVAJET 100cc/ CLASSIC 100cc',
                'years' => '1997 a 1997'
            ],

            [
                'id' => 4632,
                'brand_id' => 85,
                'fipe_code' => '817044-4',
                'model' => 'CONCOURS14 1352cc',
                'years' => '2008 a 2013'
            ],

            [
                'id' => 5153,
                'brand_id' => 85,
                'fipe_code' => '817050-9',
                'model' => 'D-TRACKER X 250cc',
                'years' => '2010 a 2011'
            ],

            [
                'id' => 11114,
                'brand_id' => 85,
                'fipe_code' => '817093-2',
                'model' => 'ELIMINATOR 500',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 11115,
                'brand_id' => 85,
                'fipe_code' => '817092-4',
                'model' => 'ELIMINATOR 500 SE',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 2875,
                'brand_id' => 85,
                'fipe_code' => '817003-7',
                'model' => 'ER-5 500cc',
                'years' => '1998 a 2000'
            ],

            [
                'id' => 5154,
                'brand_id' => 85,
                'fipe_code' => '817051-7',
                'model' => 'ER-6N 650cc',
                'years' => '2009 a 2017'
            ],

            [
                'id' => 4876,
                'brand_id' => 85,
                'fipe_code' => '817045-2',
                'model' => 'KLX 110',
                'years' => '2009 a Zero Km'
            ],

            [
                'id' => 4877,
                'brand_id' => 85,
                'fipe_code' => '817046-0',
                'model' => 'KLX 110  MONSTER',
                'years' => '2009 a 2011'
            ],

            [
                'id' => 2876,
                'brand_id' => 85,
                'fipe_code' => '817033-9',
                'model' => 'KLX 250',
                'years' => '1994 a 1996'
            ],

            [
                'id' => 7296,
                'brand_id' => 85,
                'fipe_code' => '817065-7',
                'model' => 'KLX 450R',
                'years' => '2015 a Zero Km'
            ],

            [
                'id' => 2877,
                'brand_id' => 85,
                'fipe_code' => '817032-0',
                'model' => 'KLX 650',
                'years' => '1994 a 1996'
            ],

            [
                'id' => 2878,
                'brand_id' => 85,
                'fipe_code' => '817031-2',
                'model' => 'KX 125',
                'years' => '2001 a 2003'
            ],

            [
                'id' => 9536,
                'brand_id' => 85,
                'fipe_code' => '817085-1',
                'model' => 'KX 250 X',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 2879,
                'brand_id' => 85,
                'fipe_code' => '817030-4',
                'model' => 'KX 250/ 250 F',
                'years' => '2001 a Zero Km'
            ],

            [
                'id' => 4570,
                'brand_id' => 85,
                'fipe_code' => '817042-8',
                'model' => 'KX 450 F',
                'years' => '2006 a Zero Km'
            ],

            [
                'id' => 9312,
                'brand_id' => 85,
                'fipe_code' => '817084-3',
                'model' => 'KX 450 X',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 4878,
                'brand_id' => 85,
                'fipe_code' => '817047-9',
                'model' => 'KX 65',
                'years' => '2009 a 2010'
            ],

            [
                'id' => 4879,
                'brand_id' => 85,
                'fipe_code' => '817048-7',
                'model' => 'KX 65 MONSTER',
                'years' => '2009 a 2009'
            ],

            [
                'id' => 2880,
                'brand_id' => 85,
                'fipe_code' => '817026-6',
                'model' => 'KZ 1000 TOURING',
                'years' => '2001 a 2002'
            ],

            [
                'id' => 2881,
                'brand_id' => 85,
                'fipe_code' => '817006-1',
                'model' => 'MAXI II 100cc',
                'years' => '1997 a 1999'
            ],

            [
                'id' => 5680,
                'brand_id' => 85,
                'fipe_code' => '817056-8',
                'model' => 'NINJA 1000',
                'years' => '2011 a 2020'
            ],

            [
                'id' => 6860,
                'brand_id' => 85,
                'fipe_code' => '817063-0',
                'model' => 'NINJA 1000 TOURER',
                'years' => '2015 a 2020'
            ],

            [
                'id' => 4880,
                'brand_id' => 85,
                'fipe_code' => '817049-5',
                'model' => 'NINJA 250R',
                'years' => '2008 a 2012'
            ],

            [
                'id' => 6282,
                'brand_id' => 85,
                'fipe_code' => '817061-4',
                'model' => 'NINJA 300',
                'years' => '2013 a Zero Km'
            ],

            [
                'id' => 8490,
                'brand_id' => 85,
                'fipe_code' => '817077-0',
                'model' => 'NINJA 400',
                'years' => '2019 a Zero Km'
            ],

            [
                'id' => 11154,
                'brand_id' => 85,
                'fipe_code' => '817095-9',
                'model' => 'NINJA 500',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 11155,
                'brand_id' => 85,
                'fipe_code' => '817094-0',
                'model' => 'NINJA 500 SE',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 5462,
                'brand_id' => 85,
                'fipe_code' => '817055-0',
                'model' => 'NINJA 650R 649cc',
                'years' => '2011 a Zero Km'
            ],

            [
                'id' => 2882,
                'brand_id' => 85,
                'fipe_code' => '817007-0',
                'model' => 'NINJA EX 500cc',
                'years' => '1996 a 1996'
            ],

            [
                'id' => 7297,
                'brand_id' => 85,
                'fipe_code' => '817067-3',
                'model' => 'NINJA H2 998cc',
                'years' => '2016 a 2016'
            ],

            [
                'id' => 8977,
                'brand_id' => 85,
                'fipe_code' => '817081-9',
                'model' => 'NINJA H2 SX SE 998cc',
                'years' => '2019 a 2020'
            ],

            [
                'id' => 2883,
                'brand_id' => 85,
                'fipe_code' => '817008-8',
                'model' => 'NINJA ZX-10/ ZX-10R 1000cc/30TH Aniv.',
                'years' => '1990 a Zero Km'
            ],

            [
                'id' => 8491,
                'brand_id' => 85,
                'fipe_code' => '817078-9',
                'model' => 'NINJA ZX-10R SE 1000cc',
                'years' => '2019 a 2020'
            ],

            [
                'id' => 8030,
                'brand_id' => 85,
                'fipe_code' => '817069-0',
                'model' => 'NINJA ZX-10RR 998cc',
                'years' => '2018 a 2018'
            ],

            [
                'id' => 2884,
                'brand_id' => 85,
                'fipe_code' => '817009-6',
                'model' => 'NINJA ZX-11 1100cc',
                'years' => '1990 a 2000'
            ],

            [
                'id' => 2885,
                'brand_id' => 85,
                'fipe_code' => '817025-8',
                'model' => 'NINJA ZX-12/ ZX-12R 1200cc',
                'years' => '2000 a 2005'
            ],

            [
                'id' => 10937,
                'brand_id' => 85,
                'fipe_code' => '817091-6',
                'model' => 'NINJA ZX-4R',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 2886,
                'brand_id' => 85,
                'fipe_code' => '817010-0',
                'model' => 'NINJA ZX-6 600cc',
                'years' => '1990 a 1995'
            ],

            [
                'id' => 2887,
                'brand_id' => 85,
                'fipe_code' => '817011-8',
                'model' => 'NINJA ZX-6R 600cc',
                'years' => '1995 a 2013'
            ],

            [
                'id' => 2888,
                'brand_id' => 85,
                'fipe_code' => '817036-3',
                'model' => 'NINJA ZX-6R 636cc',
                'years' => '2005 a Zero Km'
            ],

            [
                'id' => 2889,
                'brand_id' => 85,
                'fipe_code' => '817012-6',
                'model' => 'NINJA ZX-7 750cc',
                'years' => '1991 a 2003'
            ],

            [
                'id' => 2890,
                'brand_id' => 85,
                'fipe_code' => '817013-4',
                'model' => 'NINJA ZX-9R 900cc',
                'years' => '1994 a 2003'
            ],

            [
                'id' => 2891,
                'brand_id' => 85,
                'fipe_code' => '817014-2',
                'model' => 'NINJA ZZ-R 1100cc',
                'years' => '1991 a 1993'
            ],

            [
                'id' => 6140,
                'brand_id' => 85,
                'fipe_code' => '817059-2',
                'model' => 'Versys 1000',
                'years' => '2012 a Zero Km'
            ],

            [
                'id' => 6253,
                'brand_id' => 85,
                'fipe_code' => '817060-6',
                'model' => 'Versys 1000 GRAND TOURER',
                'years' => '2013 a Zero Km'
            ],

            [
                'id' => 5319,
                'brand_id' => 85,
                'fipe_code' => '817052-5',
                'model' => 'Versys 650cc',
                'years' => '2010 a Zero Km'
            ],

            [
                'id' => 6141,
                'brand_id' => 85,
                'fipe_code' => '817057-6',
                'model' => 'Versys City 650',
                'years' => '2012 a 2012'
            ],

            [
                'id' => 6142,
                'brand_id' => 85,
                'fipe_code' => '817058-4',
                'model' => 'Versys TOURER 650',
                'years' => '2011 a Zero Km'
            ],

            [
                'id' => 8114,
                'brand_id' => 85,
                'fipe_code' => '817075-4',
                'model' => 'Versys-X 300',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 8115,
                'brand_id' => 85,
                'fipe_code' => '817074-6',
                'model' => 'Versys-X 300 TOURER',
                'years' => '2017 a Zero Km'
            ],

            [
                'id' => 2892,
                'brand_id' => 85,
                'fipe_code' => '817015-0',
                'model' => 'VOYAGER 1200cc',
                'years' => '1996 a 1999'
            ],

            [
                'id' => 2893,
                'brand_id' => 85,
                'fipe_code' => '817016-9',
                'model' => 'VULCAN 800 CLASSIC',
                'years' => '1997 a 2003'
            ],

            [
                'id' => 5436,
                'brand_id' => 85,
                'fipe_code' => '817054-1',
                'model' => 'VULCAN 900 CLASSIC LT',
                'years' => '2010 a 2015'
            ],

            [
                'id' => 5437,
                'brand_id' => 85,
                'fipe_code' => '817053-3',
                'model' => 'VULCAN 900 CUSTOM',
                'years' => '2010 a 2015'
            ],

            [
                'id' => 2894,
                'brand_id' => 85,
                'fipe_code' => '817017-7',
                'model' => 'VULCAN EN 500 LTD',
                'years' => '1997 a 1998'
            ],

            [
                'id' => 2895,
                'brand_id' => 85,
                'fipe_code' => '817018-5',
                'model' => 'VULCAN EN 500cc',
                'years' => '1993 a 1997'
            ],

            [
                'id' => 2896,
                'brand_id' => 85,
                'fipe_code' => '817019-3',
                'model' => 'VULCAN LTD CLASS 500cc',
                'years' => '1997 a 1999'
            ],

            [
                'id' => 2897,
                'brand_id' => 85,
                'fipe_code' => '817020-7',
                'model' => 'VULCAN NOMAD 1500cc',
                'years' => '1998 a 2002'
            ],

            [
                'id' => 7282,
                'brand_id' => 85,
                'fipe_code' => '817064-9',
                'model' => 'VULCAN S 650',
                'years' => '2015 a Zero Km'
            ],

            [
                'id' => 8031,
                'brand_id' => 85,
                'fipe_code' => '817070-3',
                'model' => 'VULCAN S 650 CAFÉ',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 8032,
                'brand_id' => 85,
                'fipe_code' => '817071-1',
                'model' => 'VULCAN S 650 SPECIAL EDITION',
                'years' => '2017 a Zero Km'
            ],

            [
                'id' => 2898,
                'brand_id' => 85,
                'fipe_code' => '817021-5',
                'model' => 'VULCAN VN 1500 CLASSIC/ MEAN STREAK',
                'years' => '1995 a 2005'
            ],

            [
                'id' => 2899,
                'brand_id' => 85,
                'fipe_code' => '817022-3',
                'model' => 'VULCAN VN 1500cc',
                'years' => '1994 a 1999'
            ],

            [
                'id' => 2900,
                'brand_id' => 85,
                'fipe_code' => '817039-8',
                'model' => 'VULCAN VN 1600 MEAN STREAK',
                'years' => '2005 a 2006'
            ],

            [
                'id' => 2901,
                'brand_id' => 85,
                'fipe_code' => '817038-0',
                'model' => 'VULCAN VN 2000',
                'years' => '2005 a 2006'
            ],

            [
                'id' => 2902,
                'brand_id' => 85,
                'fipe_code' => '817023-1',
                'model' => 'VULCAN VN 750cc',
                'years' => '1991 a 1998'
            ],

            [
                'id' => 2903,
                'brand_id' => 85,
                'fipe_code' => '817024-0',
                'model' => 'VULCAN VN 800cc',
                'years' => '1995 a 1997'
            ],

            [
                'id' => 4633,
                'brand_id' => 85,
                'fipe_code' => '817043-6',
                'model' => 'VULCAN VN 900 CLASSIC',
                'years' => '2007 a 2015'
            ],

            [
                'id' => 2904,
                'brand_id' => 85,
                'fipe_code' => '817037-1',
                'model' => 'Z 1000',
                'years' => '2004 a Zero Km'
            ],

            [
                'id' => 8033,
                'brand_id' => 85,
                'fipe_code' => '817072-0',
                'model' => 'Z 1000 R Edition',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 7298,
                'brand_id' => 85,
                'fipe_code' => '817066-5',
                'model' => 'Z 300',
                'years' => '2015 a 2019'
            ],

            [
                'id' => 8802,
                'brand_id' => 85,
                'fipe_code' => '817080-0',
                'model' => 'Z 400',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 10387,
                'brand_id' => 85,
                'fipe_code' => '817090-8',
                'model' => 'Z 400 SE',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 11158,
                'brand_id' => 85,
                'fipe_code' => '817096-7',
                'model' => 'Z 500',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 11159,
                'brand_id' => 85,
                'fipe_code' => '817097-5',
                'model' => 'Z 500 SE',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 7961,
                'brand_id' => 85,
                'fipe_code' => '817068-1',
                'model' => 'Z 650',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 10429,
                'brand_id' => 85,
                'fipe_code' => '817086-0',
                'model' => 'Z 650 RS',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 9237,
                'brand_id' => 85,
                'fipe_code' => '817082-7',
                'model' => 'Z 650 SE ABS',
                'years' => '2021 a 2022'
            ],

            [
                'id' => 4458,
                'brand_id' => 85,
                'fipe_code' => '817041-0',
                'model' => 'Z 750',
                'years' => '2008 a 2012'
            ],

            [
                'id' => 8116,
                'brand_id' => 85,
                'fipe_code' => '817073-8',
                'model' => 'Z 900',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 9953,
                'brand_id' => 85,
                'fipe_code' => '817087-8',
                'model' => 'Z 900 50TH Anniversary',
                'years' => '2022 a 2022'
            ],

            [
                'id' => 10151,
                'brand_id' => 85,
                'fipe_code' => '817088-6',
                'model' => 'Z 900 R Edition',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 10430,
                'brand_id' => 85,
                'fipe_code' => '817076-2',
                'model' => 'Z 900 RS',
                'years' => '2019 a Zero Km'
            ],

            [
                'id' => 8492,
                'brand_id' => 85,
                'fipe_code' => '817079-7',
                'model' => 'Z 900 RS CAFÉ',
                'years' => '2019 a Zero Km'
            ],

            [
                'id' => 10189,
                'brand_id' => 85,
                'fipe_code' => '817089-4',
                'model' => 'Z 900 RS R Edition',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 6365,
                'brand_id' => 85,
                'fipe_code' => '817062-2',
                'model' => 'Z-800',
                'years' => '2013 a 2017'
            ],

            [
                'id' => 9314,
                'brand_id' => 85,
                'fipe_code' => '817083-5',
                'model' => 'Z900 SE',
                'years' => '2021 a 2021'
            ],

            [
                'id' => 4177,
                'brand_id' => 85,
                'fipe_code' => '817040-1',
                'model' => 'ZX-14/ZX 14R 1352cc',
                'years' => '2006 a 2014'
            ],

            [
                'id' => 2905,
                'brand_id' => 85,
                'fipe_code' => '817035-5',
                'model' => 'ZZR 1200',
                'years' => '2004 a 2005'
            ]
        ];

        $KTMModels = [
            [
                'id' => 5225,
                'brand_id' => 87,
                'fipe_code' => '818029-6',
                'model' => '1190 RC8',
                'years' => '2009 a 2011'
            ],

            [
                'id' => 5517,
                'brand_id' => 87,
                'fipe_code' => '818035-0',
                'model' => '1190 RC8 R',
                'years' => '2010 a 2011'
            ],

            [
                'id' => 5201,
                'brand_id' => 87,
                'fipe_code' => '818028-8',
                'model' => '690 ENDURO /ENDURO R',
                'years' => '2009 a 2017'
            ],

            [
                'id' => 7608,
                'brand_id' => 87,
                'fipe_code' => '818044-0',
                'model' => 'ADVENTURE 1190 R',
                'years' => '2016 a 2016'
            ],

            [
                'id' => 7144,
                'brand_id' => 87,
                'fipe_code' => '818036-9',
                'model' => 'ADVENTURE 1190cc',
                'years' => '2014 a 2015'
            ],

            [
                'id' => 2910,
                'brand_id' => 87,
                'fipe_code' => '818001-6',
                'model' => 'ADVENTURE 640 ST',
                'years' => '1998 a 2007'
            ],

            [
                'id' => 2911,
                'brand_id' => 87,
                'fipe_code' => '818019-9',
                'model' => 'ADVENTURE 950cc',
                'years' => '2004 a 2008'
            ],

            [
                'id' => 4208,
                'brand_id' => 87,
                'fipe_code' => '818026-1',
                'model' => 'ADVENTURE 990cc',
                'years' => '2006 a 2012'
            ],

            [
                'id' => 5518,
                'brand_id' => 87,
                'fipe_code' => '818032-6',
                'model' => 'ADVENTURE R / DAKAR 990cc',
                'years' => '2010 a 2011'
            ],

            [
                'id' => 7332,
                'brand_id' => 87,
                'fipe_code' => '818043-1',
                'model' => 'DUKE 200/ABS',
                'years' => '2015 a 2021'
            ],

            [
                'id' => 7333,
                'brand_id' => 87,
                'fipe_code' => '818040-7',
                'model' => 'DUKE 390',
                'years' => '2015 a Zero Km'
            ],

            [
                'id' => 2912,
                'brand_id' => 87,
                'fipe_code' => '818016-4',
                'model' => 'DUKE 640/ DUKE II 640',
                'years' => '1999 a 2006'
            ],

            [
                'id' => 5351,
                'brand_id' => 87,
                'fipe_code' => '818031-8',
                'model' => 'DUKE 690',
                'years' => '2009 a 2010'
            ],

            [
                'id' => 2913,
                'brand_id' => 87,
                'fipe_code' => '818007-5',
                'model' => 'EXC 125',
                'years' => '1999 a 2010'
            ],

            [
                'id' => 2914,
                'brand_id' => 87,
                'fipe_code' => '818008-3',
                'model' => 'EXC 200',
                'years' => '1998 a 2010'
            ],

            [
                'id' => 2915,
                'brand_id' => 87,
                'fipe_code' => '818010-5',
                'model' => 'EXC 250',
                'years' => '1994 a 2012'
            ],

            [
                'id' => 2916,
                'brand_id' => 87,
                'fipe_code' => '818017-2',
                'model' => 'EXC 300',
                'years' => '2001 a Zero Km'
            ],

            [
                'id' => 2917,
                'brand_id' => 87,
                'fipe_code' => '818011-3',
                'model' => 'EXC 380',
                'years' => '1999 a 2001'
            ],

            [
                'id' => 2918,
                'brand_id' => 87,
                'fipe_code' => '818018-0',
                'model' => 'EXC 400',
                'years' => '2002 a 2002'
            ],

            [
                'id' => 3862,
                'brand_id' => 87,
                'fipe_code' => '818023-7',
                'model' => 'EXC 450',
                'years' => '2003 a 2011'
            ],

            [
                'id' => 2919,
                'brand_id' => 87,
                'fipe_code' => '818003-2',
                'model' => 'EXC 520',
                'years' => '2000 a 2002'
            ],

            [
                'id' => 4077,
                'brand_id' => 87,
                'fipe_code' => '818024-5',
                'model' => 'EXC 525',
                'years' => '2005 a 2008'
            ],

            [
                'id' => 7242,
                'brand_id' => 87,
                'fipe_code' => '818038-5',
                'model' => 'EXC-F 250',
                'years' => '2015 a Zero Km'
            ],

            [
                'id' => 7334,
                'brand_id' => 87,
                'fipe_code' => '818042-3',
                'model' => 'EXC-F 250 SIX DAYS',
                'years' => '2015 a 2015'
            ],

            [
                'id' => 7335,
                'brand_id' => 87,
                'fipe_code' => '818041-5',
                'model' => 'EXC-F 300 SIX DAYS',
                'years' => '2015 a 2015'
            ],

            [
                'id' => 7243,
                'brand_id' => 87,
                'fipe_code' => '818037-7',
                'model' => 'EXC-F 350',
                'years' => '2015 a Zero Km'
            ],

            [
                'id' => 8493,
                'brand_id' => 87,
                'fipe_code' => '818049-0',
                'model' => 'EXC-F 350 SIX DAYS',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 2920,
                'brand_id' => 87,
                'fipe_code' => '818002-4',
                'model' => 'LC4 640 TRAIL',
                'years' => '1998 a 2002'
            ],

            [
                'id' => 2921,
                'brand_id' => 87,
                'fipe_code' => '818014-8',
                'model' => 'SC 620',
                'years' => '1998 a 1998'
            ],

            [
                'id' => 7609,
                'brand_id' => 87,
                'fipe_code' => '818045-8',
                'model' => 'SUPER ADVENTURE 1290',
                'years' => '2016 a 2017'
            ],

            [
                'id' => 8072,
                'brand_id' => 87,
                'fipe_code' => '818046-6',
                'model' => 'SUPER ADVENTURE 1290 R',
                'years' => '2017 a 2018'
            ],

            [
                'id' => 8117,
                'brand_id' => 87,
                'fipe_code' => '818047-4',
                'model' => 'SUPER ADVENTURE 1290 S',
                'years' => '2017 a 2019'
            ],

            [
                'id' => 8260,
                'brand_id' => 87,
                'fipe_code' => '818048-2',
                'model' => 'SUPERDUKE 1290 GT',
                'years' => '2017 a 2017'
            ],

            [
                'id' => 7244,
                'brand_id' => 87,
                'fipe_code' => '818039-3',
                'model' => 'SUPERDUKE 1290 R',
                'years' => '2014 a 2017'
            ],

            [
                'id' => 4078,
                'brand_id' => 87,
                'fipe_code' => '818025-3',
                'model' => 'SUPERDUKE 990',
                'years' => '2005 a 2011'
            ],

            [
                'id' => 4512,
                'brand_id' => 87,
                'fipe_code' => '818027-0',
                'model' => 'SUPERMOTO 690',
                'years' => '2007 a 2010'
            ],

            [
                'id' => 5519,
                'brand_id' => 87,
                'fipe_code' => '818033-4',
                'model' => 'SUPERMOTO 990 R',
                'years' => '2010 a 2011'
            ],

            [
                'id' => 5263,
                'brand_id' => 87,
                'fipe_code' => '818030-0',
                'model' => 'SUPERMOTO 990 T',
                'years' => '2009 a 2012'
            ],

            [
                'id' => 2922,
                'brand_id' => 87,
                'fipe_code' => '818006-7',
                'model' => 'SX 125',
                'years' => '1996 a 2010'
            ],

            [
                'id' => 2923,
                'brand_id' => 87,
                'fipe_code' => '818009-1',
                'model' => 'SX 250/ SX 250 F',
                'years' => '1999 a Zero Km'
            ],

            [
                'id' => 5520,
                'brand_id' => 87,
                'fipe_code' => '818034-2',
                'model' => 'SX 350 / 350 F',
                'years' => '2011 a 2011'
            ],

            [
                'id' => 2924,
                'brand_id' => 87,
                'fipe_code' => '818022-9',
                'model' => 'SX 450/ SX 450F',
                'years' => '2004 a 2011'
            ],

            [
                'id' => 2925,
                'brand_id' => 87,
                'fipe_code' => '818004-0',
                'model' => 'SX 50',
                'years' => '1999 a 2012'
            ],

            [
                'id' => 2926,
                'brand_id' => 87,
                'fipe_code' => '818005-9',
                'model' => 'SX 65',
                'years' => '1999 a 2011'
            ],

            [
                'id' => 2927,
                'brand_id' => 87,
                'fipe_code' => '818021-0',
                'model' => 'SX 85',
                'years' => '2004 a 2012'
            ],

            [
                'id' => 2928,
                'brand_id' => 87,
                'fipe_code' => '818012-1',
                'model' => 'SXC 520/ 540',
                'years' => '1998 a 2000'
            ],

            [
                'id' => 2929,
                'brand_id' => 87,
                'fipe_code' => '818020-2',
                'model' => 'SXC 625',
                'years' => '2004 a 2008'
            ]
        ];

        $LAQUILAModels = [
            [
                'id' => 2930,
                'brand_id' => 88,
                'fipe_code' => '819001-1',
                'model' => 'AKROS 50',
                'years' => '1999 a 1999'
            ],

            [
                'id' => 2931,
                'brand_id' => 88,
                'fipe_code' => '819002-0',
                'model' => 'AKROS 90',
                'years' => '1999 a 2000'
            ],

            [
                'id' => 2932,
                'brand_id' => 88,
                'fipe_code' => '819003-8',
                'model' => 'ERGON 50',
                'years' => '1999 a 2001'
            ],

            [
                'id' => 2933,
                'brand_id' => 88,
                'fipe_code' => '819004-6',
                'model' => 'NIX 50',
                'years' => '1999 a 2001'
            ],

            [
                'id' => 2934,
                'brand_id' => 88,
                'fipe_code' => '819005-4',
                'model' => 'PALIO 50',
                'years' => '1999 a 2001'
            ]
        ];

        $LAVRALEModels = [
            [
                'id' => 2935,
                'brand_id' => 89,
                'fipe_code' => '843001-2',
                'model' => 'QUATTOR 30.0 190cc',
                'years' => '1990 a 1993'
            ]
        ];

        $MOTOGUZZIModels = [
            [
                'id' => 2936,
                'brand_id' => 90,
                'fipe_code' => '833006-9',
                'model' => 'CALIFORNIA Especial',
                'years' => '1999 a 2003'
            ],

            [
                'id' => 2937,
                'brand_id' => 90,
                'fipe_code' => '833002-6',
                'model' => 'CALIFORNIA EV 1064cc',
                'years' => '1999 a 2002'
            ],

            [
                'id' => 2938,
                'brand_id' => 90,
                'fipe_code' => '833003-4',
                'model' => 'CALIFORNIA Jackal 1064cc',
                'years' => '2000 a 2001'
            ],

            [
                'id' => 2939,
                'brand_id' => 90,
                'fipe_code' => '833007-7',
                'model' => 'CALIFORNIA Stone 1064cc',
                'years' => '2002 a 2003'
            ],

            [
                'id' => 2940,
                'brand_id' => 90,
                'fipe_code' => '833004-2',
                'model' => 'QUOTA 1100 ES',
                'years' => '2000 a 2001'
            ],

            [
                'id' => 2941,
                'brand_id' => 90,
                'fipe_code' => '833001-8',
                'model' => 'V11 SPORT/ LE MANS 1064cc',
                'years' => '2000 a 2003'
            ]
        ];

        $MVAGUSTAModels = [
            [
                'id' => 5052,
                'brand_id' => 91,
                'fipe_code' => '839008-8',
                'model' => 'BRUTALE 1078RR',
                'years' => '2009 a 2009'
            ],

            [
                'id' => 5714,
                'brand_id' => 91,
                'fipe_code' => '839011-8',
                'model' => 'BRUTALE 1090R',
                'years' => '2012 a 2013'
            ],

            [
                'id' => 5715,
                'brand_id' => 91,
                'fipe_code' => '839012-6',
                'model' => 'BRUTALE 1090RR',
                'years' => '2012 a 2015'
            ],

            [
                'id' => 6902,
                'brand_id' => 91,
                'fipe_code' => '839013-4',
                'model' => 'BRUTALE 800',
                'years' => '2014 a 2016'
            ],

            [
                'id' => 4788,
                'brand_id' => 91,
                'fipe_code' => '839005-3',
                'model' => 'BRUTALE 910R',
                'years' => '2007 a 2008'
            ],

            [
                'id' => 4681,
                'brand_id' => 91,
                'fipe_code' => '839003-7',
                'model' => 'BRUTALE 910S',
                'years' => '2007 a 2008'
            ],

            [
                'id' => 5053,
                'brand_id' => 91,
                'fipe_code' => '839007-0',
                'model' => 'BRUTALE 989R',
                'years' => '2009 a 2009'
            ],

            [
                'id' => 6946,
                'brand_id' => 91,
                'fipe_code' => '839014-2',
                'model' => 'F3 800',
                'years' => '2014 a 2016'
            ],

            [
                'id' => 5054,
                'brand_id' => 91,
                'fipe_code' => '839009-6',
                'model' => 'F4 1078RR 312',
                'years' => '2009 a 2009'
            ],

            [
                'id' => 2942,
                'brand_id' => 91,
                'fipe_code' => '839001-0',
                'model' => 'F4 750 (Ouro)',
                'years' => '2000 a 2000'
            ],

            [
                'id' => 2943,
                'brand_id' => 91,
                'fipe_code' => '839002-9',
                'model' => 'F4 750s (Prata)',
                'years' => '2000 a 2004'
            ],

            [
                'id' => 4806,
                'brand_id' => 91,
                'fipe_code' => '839006-1',
                'model' => 'F4- R312',
                'years' => '2007 a 2008'
            ],

            [
                'id' => 5713,
                'brand_id' => 91,
                'fipe_code' => '839010-0',
                'model' => 'F4-1000',
                'years' => '2012 a 2015'
            ],

            [
                'id' => 4740,
                'brand_id' => 91,
                'fipe_code' => '839004-5',
                'model' => 'F4-1000 RR',
                'years' => '2007 a 2015'
            ],

            [
                'id' => 7060,
                'brand_id' => 91,
                'fipe_code' => '839015-0',
                'model' => 'RIVALE 800',
                'years' => '2015 a 2015'
            ]
        ];

        $MVKModels = [
            [
                'id' => 5385,
                'brand_id' => 92,
                'fipe_code' => '845016-1',
                'model' => 'BIG FORCE 250 QUADRICICLO',
                'years' => '2007 a 2011'
            ],

            [
                'id' => 4324,
                'brand_id' => 92,
                'fipe_code' => '845009-9',
                'model' => 'BLACK STAR 150',
                'years' => '2007 a 2011'
            ],

            [
                'id' => 5386,
                'brand_id' => 92,
                'fipe_code' => '845020-0',
                'model' => 'BRX 140',
                'years' => '2008 a 2011'
            ],

            [
                'id' => 4413,
                'brand_id' => 92,
                'fipe_code' => '845013-7',
                'model' => 'DUAL 200',
                'years' => '2008 a 2008'
            ],

            [
                'id' => 4818,
                'brand_id' => 92,
                'fipe_code' => '845014-5',
                'model' => 'FENIX GOLD 240',
                'years' => '2009 a 2009'
            ],

            [
                'id' => 4325,
                'brand_id' => 92,
                'fipe_code' => '845010-2',
                'model' => 'FOX 110',
                'years' => '2007 a 2011'
            ],

            [
                'id' => 3920,
                'brand_id' => 92,
                'fipe_code' => '845005-6',
                'model' => 'GO 100',
                'years' => '2006 a 2007'
            ],

            [
                'id' => 4326,
                'brand_id' => 92,
                'fipe_code' => '845008-0',
                'model' => 'HALLEY / FENIX 200',
                'years' => '2007 a 2011'
            ],

            [
                'id' => 3921,
                'brand_id' => 92,
                'fipe_code' => '845006-4',
                'model' => 'HALLEY 150',
                'years' => '2006 a 2006'
            ],

            [
                'id' => 5387,
                'brand_id' => 92,
                'fipe_code' => '845019-6',
                'model' => 'JURASIC 300',
                'years' => '2007 a 2011'
            ],

            [
                'id' => 2945,
                'brand_id' => 92,
                'fipe_code' => '845002-1',
                'model' => 'MA 100-3B',
                'years' => '2000 a 2003'
            ],

            [
                'id' => 2947,
                'brand_id' => 92,
                'fipe_code' => '845004-8',
                'model' => 'MA 125-GY',
                'years' => '2001 a 2007'
            ],

            [
                'id' => 2946,
                'brand_id' => 92,
                'fipe_code' => '845003-0',
                'model' => 'MA/ BLACK STAR 125-7',
                'years' => '2001 a 2009'
            ],

            [
                'id' => 2944,
                'brand_id' => 92,
                'fipe_code' => '845001-3',
                'model' => 'MA/ FOXX 100-3',
                'years' => '2000 a 2007'
            ],

            [
                'id' => 5388,
                'brand_id' => 92,
                'fipe_code' => '845017-0',
                'model' => 'SIMBA 50 QUADRICICLO',
                'years' => '2009 a 2011'
            ],

            [
                'id' => 5389,
                'brand_id' => 92,
                'fipe_code' => '845018-8',
                'model' => 'SPORT 150 QUADRICICLO',
                'years' => '2007 a 2013'
            ],

            [
                'id' => 4819,
                'brand_id' => 92,
                'fipe_code' => '845015-3',
                'model' => 'SPYDER 270 / 320',
                'years' => '2008 a 2009'
            ],

            [
                'id' => 4327,
                'brand_id' => 92,
                'fipe_code' => '845007-2',
                'model' => 'STREET 150/STREET LIMITED',
                'years' => '2007 a 2013'
            ],

            [
                'id' => 4414,
                'brand_id' => 92,
                'fipe_code' => '845011-0',
                'model' => 'SUPER X 125 R',
                'years' => '2008 a 2011'
            ],

            [
                'id' => 4415,
                'brand_id' => 92,
                'fipe_code' => '845012-9',
                'model' => 'XRT 110',
                'years' => '2008 a 2008'
            ]
        ];

        $ORCAModels = [
            [
                'id' => 2948,
                'brand_id' => 93,
                'fipe_code' => '820002-5',
                'model' => 'AX 100',
                'years' => '1998 a 1998'
            ],

            [
                'id' => 2949,
                'brand_id' => 93,
                'fipe_code' => '820001-7',
                'model' => 'AX 100-A',
                'years' => '1998 a 1998'
            ],

            [
                'id' => 2950,
                'brand_id' => 93,
                'fipe_code' => '820005-0',
                'model' => 'JC 125',
                'years' => '1998 a 1998'
            ],

            [
                'id' => 2951,
                'brand_id' => 93,
                'fipe_code' => '820003-3',
                'model' => 'JC 125-2',
                'years' => '1998 a 1998'
            ],

            [
                'id' => 2952,
                'brand_id' => 93,
                'fipe_code' => '820004-1',
                'model' => 'JC 125-8',
                'years' => '1998 a 1998'
            ],

            [
                'id' => 2953,
                'brand_id' => 93,
                'fipe_code' => '820006-8',
                'model' => 'QM 50',
                'years' => '1998 a 1998'
            ]
        ];

        $PEUGEOTModels = [
            [
                'id' => 2954,
                'brand_id' => 94,
                'fipe_code' => '821001-2',
                'model' => 'BUXY 50',
                'years' => '1997 a 1998'
            ],

            [
                'id' => 2955,
                'brand_id' => 94,
                'fipe_code' => '821002-0',
                'model' => 'ELYSEO 125',
                'years' => '1999 a 2000'
            ],

            [
                'id' => 9952,
                'brand_id' => 94,
                'fipe_code' => '821003-9',
                'model' => 'SCOOT ELEC',
                'years' => '1997 a 1998'
            ],

            [
                'id' => 2957,
                'brand_id' => 94,
                'fipe_code' => '821004-7',
                'model' => 'SPEEDAKE 50',
                'years' => '1997 a 1999'
            ],

            [
                'id' => 2958,
                'brand_id' => 94,
                'fipe_code' => '821005-5',
                'model' => 'SPEEDFIGHT 100',
                'years' => '1999 a 2000'
            ],

            [
                'id' => 2959,
                'brand_id' => 94,
                'fipe_code' => '821007-1',
                'model' => 'SPEEDFIGHT 50',
                'years' => '1997 a 1999'
            ],

            [
                'id' => 2960,
                'brand_id' => 94,
                'fipe_code' => '821006-3',
                'model' => 'SPEEDFIGHT 50-LC',
                'years' => '1997 a 1999'
            ],

            [
                'id' => 2961,
                'brand_id' => 94,
                'fipe_code' => '821008-0',
                'model' => 'SQUAB 50',
                'years' => '1997 a 1998'
            ],

            [
                'id' => 2962,
                'brand_id' => 94,
                'fipe_code' => '821009-8',
                'model' => 'TREKKER 100',
                'years' => '1999 a 2000'
            ],

            [
                'id' => 2963,
                'brand_id' => 94,
                'fipe_code' => '821010-1',
                'model' => 'VIVACITY 50',
                'years' => '2000 a 2000'
            ],

            [
                'id' => 2964,
                'brand_id' => 94,
                'fipe_code' => '821011-0',
                'model' => 'ZENITH 50',
                'years' => '1997 a 1999'
            ]
        ];

        $PIAGGIOModels = [
            [
                'id' => 10851,
                'brand_id' => 95,
                'fipe_code' => '822043-3',
                'model' => 'Apé Cargo 300cc',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 10852,
                'brand_id' => 95,
                'fipe_code' => '822044-1',
                'model' => 'Apé Passenger 230cc',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 5156,
                'brand_id' => 95,
                'fipe_code' => '822023-9',
                'model' => 'BERVERLY  TOURING 300  i.e 278cc',
                'years' => '2010 a 2012'
            ],

            [
                'id' => 2965,
                'brand_id' => 95,
                'fipe_code' => '822015-8',
                'model' => 'BEVERLY 250 224cc',
                'years' => '2004 a 2009'
            ],

            [
                'id' => 2966,
                'brand_id' => 95,
                'fipe_code' => '822016-6',
                'model' => 'BEVERLY 500 460cc',
                'years' => '2004 a 2010'
            ],

            [
                'id' => 6474,
                'brand_id' => 95,
                'fipe_code' => '822024-7',
                'model' => 'BEVERLY SPORT TOURING 350 i.e 330cc',
                'years' => '2013 a 2014'
            ],

            [
                'id' => 4656,
                'brand_id' => 95,
                'fipe_code' => '822020-4',
                'model' => 'Liberty 200 200cc',
                'years' => '2007 a 2008'
            ],

            [
                'id' => 8222,
                'brand_id' => 95,
                'fipe_code' => '822036-0',
                'model' => 'Liberty S 150 IGET',
                'years' => '2016 a 2016'
            ],

            [
                'id' => 6604,
                'brand_id' => 95,
                'fipe_code' => '822026-3',
                'model' => 'MP3 300 278cc',
                'years' => '2012 a 2013'
            ],

            [
                'id' => 4561,
                'brand_id' => 95,
                'fipe_code' => '822019-0',
                'model' => 'MP3 400 398cc',
                'years' => '2008 a 2010'
            ],

            [
                'id' => 5016,
                'brand_id' => 95,
                'fipe_code' => '822021-2',
                'model' => 'MP3 500 493cc',
                'years' => '2010 a 2013'
            ],

            [
                'id' => 2967,
                'brand_id' => 95,
                'fipe_code' => '822014-0',
                'model' => 'NRG MC3 DD 49.4cc',
                'years' => '2004 a 2005'
            ],

            [
                'id' => 2968,
                'brand_id' => 95,
                'fipe_code' => '822010-7',
                'model' => 'RUNNER 50',
                'years' => '1999 a 1999'
            ],

            [
                'id' => 7864,
                'brand_id' => 95,
                'fipe_code' => '822034-4',
                'model' => 'VESPA 946 EMPORIO ARMANI 150',
                'years' => '2016 a 2017'
            ],

            [
                'id' => 8308,
                'brand_id' => 95,
                'fipe_code' => '822038-7',
                'model' => 'VESPA CLASSIC ELEGANTE 150',
                'years' => '2017 a 2020'
            ],

            [
                'id' => 8309,
                'brand_id' => 95,
                'fipe_code' => '822037-9',
                'model' => 'VESPA CLASSIC SXL 150',
                'years' => '2017 a 2022'
            ],

            [
                'id' => 8173,
                'brand_id' => 95,
                'fipe_code' => '822035-2',
                'model' => 'VESPA CLASSIC VXL 150',
                'years' => '2017 a 2023'
            ],

            [
                'id' => 9032,
                'brand_id' => 95,
                'fipe_code' => '822040-9',
                'model' => 'VESPA CLUB 125',
                'years' => '2020 a 2022'
            ],

            [
                'id' => 9578,
                'brand_id' => 95,
                'fipe_code' => '822041-7',
                'model' => 'VESPA CLUB ZX 125',
                'years' => '2022 a 2023'
            ],

            [
                'id' => 7865,
                'brand_id' => 95,
                'fipe_code' => '822033-6',
                'model' => 'VESPA GTS 300 ABS',
                'years' => '2016 a 2017'
            ],

            [
                'id' => 7866,
                'brand_id' => 95,
                'fipe_code' => '822032-8',
                'model' => 'VESPA GTS 300 SUPER ABS',
                'years' => '2016 a 2017'
            ],

            [
                'id' => 7867,
                'brand_id' => 95,
                'fipe_code' => '822031-0',
                'model' => 'VESPA GTS 300 SUPER SPORT ABS',
                'years' => '2016 a 2020'
            ],

            [
                'id' => 7868,
                'brand_id' => 95,
                'fipe_code' => '822030-1',
                'model' => 'VESPA GTS 300 TOURING ABS',
                'years' => '2016 a 2017'
            ],

            [
                'id' => 4209,
                'brand_id' => 95,
                'fipe_code' => '822018-2',
                'model' => 'VESPA GTS/SUPER/SUPER SPORT 250 i.e',
                'years' => '2007 a 2013'
            ],

            [
                'id' => 6475,
                'brand_id' => 95,
                'fipe_code' => '822025-5',
                'model' => 'VESPA GTV/GTS TOURING 300 i.e 278cc',
                'years' => '2013 a 2013'
            ],

            [
                'id' => 4210,
                'brand_id' => 95,
                'fipe_code' => '822017-4',
                'model' => 'VESPA LX 150 151cc',
                'years' => '2007 a 2012'
            ],

            [
                'id' => 5017,
                'brand_id' => 95,
                'fipe_code' => '822022-0',
                'model' => 'VESPA LXV 150 155cc',
                'years' => '2010 a 2010'
            ],

            [
                'id' => 9579,
                'brand_id' => 95,
                'fipe_code' => '822042-5',
                'model' => 'VESPA NOTTE 125',
                'years' => '2022 a 2023'
            ],

            [
                'id' => 7869,
                'brand_id' => 95,
                'fipe_code' => '822029-8',
                'model' => 'VESPA PRIMAVERA 125 IGET ABS',
                'years' => '2016 a 2020'
            ],

            [
                'id' => 7870,
                'brand_id' => 95,
                'fipe_code' => '822028-0',
                'model' => 'VESPA PRIMAVERA 150 IGET ABS',
                'years' => '2016 a 2016'
            ],

            [
                'id' => 2969,
                'brand_id' => 95,
                'fipe_code' => '822002-6',
                'model' => 'VESPA PX 150 ORIGINALE',
                'years' => '1998 a 1999'
            ],

            [
                'id' => 2970,
                'brand_id' => 95,
                'fipe_code' => '822003-4',
                'model' => 'VESPA PX 200',
                'years' => '1990 a 1991'
            ],

            [
                'id' => 7871,
                'brand_id' => 95,
                'fipe_code' => '822027-1',
                'model' => 'VESPA SPRINT 150 S IGET ABS',
                'years' => '2016 a 2016'
            ],

            [
                'id' => 9033,
                'brand_id' => 95,
                'fipe_code' => '822039-5',
                'model' => 'VESPA ZX PRIME 125',
                'years' => '2020 a 2022'
            ],

            [
                'id' => 2971,
                'brand_id' => 95,
                'fipe_code' => '822013-1',
                'model' => 'ZIP 50',
                'years' => '1998 a 2000'
            ]
        ];

        $SANYANGModels = [
            [
                'id' => 2972,
                'brand_id' => 96,
                'fipe_code' => '823001-3',
                'model' => 'ENJOY 50',
                'years' => '1996 a 1998'
            ],

            [
                'id' => 2973,
                'brand_id' => 96,
                'fipe_code' => '823002-1',
                'model' => 'HUSKY 150',
                'years' => '1996 a 1998'
            ],

            [
                'id' => 2974,
                'brand_id' => 96,
                'fipe_code' => '823003-0',
                'model' => 'PASSING 110',
                'years' => '1996 a 1998'
            ]
        ];

        $SIAMOTOModels = [
            [
                'id' => 2975,
                'brand_id' => 97,
                'fipe_code' => '831001-7',
                'model' => 'SCROSS 50cc',
                'years' => '2000 a 2000'
            ]
        ];

        $SUNDOWNModels = [
            [
                'id' => 2976,
                'brand_id' => 98,
                'fipe_code' => '824001-9',
                'model' => 'AKROS 50cc',
                'years' => '1996 a 1998'
            ],

            [
                'id' => 2977,
                'brand_id' => 98,
                'fipe_code' => '824002-7',
                'model' => 'AKROS 90cc',
                'years' => '1996 a 1998'
            ],

            [
                'id' => 2978,
                'brand_id' => 98,
                'fipe_code' => '824003-5',
                'model' => 'ERGON 50cc',
                'years' => '1996 a 1998'
            ],

            [
                'id' => 2979,
                'brand_id' => 98,
                'fipe_code' => '824004-3',
                'model' => 'FIFTY 50cc',
                'years' => '1998 a 2005'
            ],

            [
                'id' => 2980,
                'brand_id' => 98,
                'fipe_code' => '824013-2',
                'model' => 'FUTURE 125',
                'years' => '2005 a 2013'
            ],

            [
                'id' => 4525,
                'brand_id' => 98,
                'fipe_code' => '824019-1',
                'model' => 'HUNTER 100 95cc',
                'years' => '2008 a 2011'
            ],

            [
                'id' => 2981,
                'brand_id' => 98,
                'fipe_code' => '824010-8',
                'model' => 'HUNTER 125 SE',
                'years' => '2004 a 2009'
            ],

            [
                'id' => 4095,
                'brand_id' => 98,
                'fipe_code' => '824016-7',
                'model' => 'HUNTER 90  86cc',
                'years' => '2006 a 2007'
            ],

            [
                'id' => 2982,
                'brand_id' => 98,
                'fipe_code' => '824011-6',
                'model' => 'MAX 125 SE',
                'years' => '2004 a 2011'
            ],

            [
                'id' => 2983,
                'brand_id' => 98,
                'fipe_code' => '824012-4',
                'model' => 'MAX 125 SED',
                'years' => '2004 a 2014'
            ],

            [
                'id' => 2984,
                'brand_id' => 98,
                'fipe_code' => '824005-1',
                'model' => 'PALIO 50cc',
                'years' => '1996 a 1998'
            ],

            [
                'id' => 2985,
                'brand_id' => 98,
                'fipe_code' => '824006-0',
                'model' => 'PGO SPEED 50cc',
                'years' => '1997 a 1997'
            ],

            [
                'id' => 2986,
                'brand_id' => 98,
                'fipe_code' => '824007-8',
                'model' => 'PGO SPEED 90cc',
                'years' => '1997 a 1998'
            ],

            [
                'id' => 5097,
                'brand_id' => 98,
                'fipe_code' => '824020-5',
                'model' => 'STX 125cc',
                'years' => '2010 a 2011'
            ],

            [
                'id' => 4266,
                'brand_id' => 98,
                'fipe_code' => '824018-3',
                'model' => 'STX 200cc',
                'years' => '2007 a 2008'
            ],

            [
                'id' => 5098,
                'brand_id' => 98,
                'fipe_code' => '824021-3',
                'model' => 'STX MOTARD 125cc',
                'years' => '2010 a 2011'
            ],

            [
                'id' => 4267,
                'brand_id' => 98,
                'fipe_code' => '824017-5',
                'model' => 'STX MOTARD 200cc',
                'years' => '2007 a 2008'
            ],

            [
                'id' => 2987,
                'brand_id' => 98,
                'fipe_code' => '824008-6',
                'model' => 'SUPER FIFTY 50cc',
                'years' => '1996 a 1998'
            ],

            [
                'id' => 4079,
                'brand_id' => 98,
                'fipe_code' => '824014-0',
                'model' => 'VBLADE 250cc',
                'years' => '2006 a 2008'
            ],

            [
                'id' => 2988,
                'brand_id' => 98,
                'fipe_code' => '824009-4',
                'model' => 'WEB 97cc',
                'years' => '2002 a 2014'
            ],

            [
                'id' => 4096,
                'brand_id' => 98,
                'fipe_code' => '824015-9',
                'model' => 'WEB EVO 97cc',
                'years' => '2006 a 2011'
            ]
        ];

        $SUZUKIModels = [
            [
                'id' => 2989,
                'brand_id' => 99,
                'fipe_code' => '825001-4',
                'model' => 'ADDRESS/AE 50',
                'years' => '1994 a 2002'
            ],

            [
                'id' => 2990,
                'brand_id' => 99,
                'fipe_code' => '825002-2',
                'model' => 'ADDRESS/AG 100',
                'years' => '1994 a 2003'
            ],

            [
                'id' => 2991,
                'brand_id' => 99,
                'fipe_code' => '825044-8',
                'model' => 'AN 125 BURGMAN',
                'years' => '2006 a 2010'
            ],

            [
                'id' => 3808,
                'brand_id' => 99,
                'fipe_code' => '825045-6',
                'model' => 'BANDIT 1200S',
                'years' => '2005 a 2008'
            ],

            [
                'id' => 4670,
                'brand_id' => 99,
                'fipe_code' => '825051-0',
                'model' => 'BANDIT 1250S',
                'years' => '2009 a 2014'
            ],

            [
                'id' => 3809,
                'brand_id' => 99,
                'fipe_code' => '825046-4',
                'model' => 'BANDIT 600S/ 650S',
                'years' => '2005 a 2016'
            ],

            [
                'id' => 2992,
                'brand_id' => 99,
                'fipe_code' => '825003-0',
                'model' => 'BANDIT N-1200',
                'years' => '1996 a 2008'
            ],

            [
                'id' => 4671,
                'brand_id' => 99,
                'fipe_code' => '825050-2',
                'model' => 'BANDIT N-1250',
                'years' => '2008 a 2015'
            ],

            [
                'id' => 2993,
                'brand_id' => 99,
                'fipe_code' => '825004-9',
                'model' => 'BANDIT N-600/ 650',
                'years' => '1996 a 2016'
            ],

            [
                'id' => 2994,
                'brand_id' => 99,
                'fipe_code' => '825043-0',
                'model' => 'BOULEVARD C1500',
                'years' => '2006 a 2009'
            ],

            [
                'id' => 5320,
                'brand_id' => 99,
                'fipe_code' => '825054-5',
                'model' => 'BOULEVARD M1500',
                'years' => '2010 a 2014'
            ],

            [
                'id' => 5942,
                'brand_id' => 99,
                'fipe_code' => '825059-6',
                'model' => 'BOULEVARD M1500R',
                'years' => '2012 a 2016'
            ],

            [
                'id' => 7080,
                'brand_id' => 99,
                'fipe_code' => '825069-3',
                'model' => 'BOULEVARD M1800R',
                'years' => '2015 a 2018'
            ],

            [
                'id' => 7062,
                'brand_id' => 99,
                'fipe_code' => '825068-5',
                'model' => 'BOULEVARD M1800R B.O.S.S.',
                'years' => '2014 a 2019'
            ],

            [
                'id' => 3941,
                'brand_id' => 99,
                'fipe_code' => '825047-2',
                'model' => 'BOULEVARD M800',
                'years' => '2006 a 2016'
            ],

            [
                'id' => 5716,
                'brand_id' => 99,
                'fipe_code' => '825058-8',
                'model' => 'BOULEVARD M800R',
                'years' => '2012 a 2016'
            ],

            [
                'id' => 2995,
                'brand_id' => 99,
                'fipe_code' => '825033-2',
                'model' => 'BURGMAN 400',
                'years' => '2000 a 2016'
            ],

            [
                'id' => 4581,
                'brand_id' => 99,
                'fipe_code' => '825048-0',
                'model' => 'BURGMAN 650 EXECUTIVE/ 650',
                'years' => '2006 a 2019'
            ],

            [
                'id' => 5522,
                'brand_id' => 99,
                'fipe_code' => '825056-1',
                'model' => 'BURGMAN i 125cc',
                'years' => '2012 a 2019'
            ],

            [
                'id' => 9268,
                'brand_id' => 99,
                'fipe_code' => '825077-4',
                'model' => 'DL 1000  V-STROM ADVENTURE',
                'years' => '2020 a 2021'
            ],

            [
                'id' => 2996,
                'brand_id' => 99,
                'fipe_code' => '825041-3',
                'model' => 'DL 1000 V-STROM',
                'years' => '2003 a 2019'
            ],

            [
                'id' => 8261,
                'brand_id' => 99,
                'fipe_code' => '825075-8',
                'model' => 'DL 1000 XT V-STROM',
                'years' => '2018 a 2021'
            ],

            [
                'id' => 10975,
                'brand_id' => 99,
                'fipe_code' => '825081-2',
                'model' => 'DL 1050 V-STROM ',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 9637,
                'brand_id' => 99,
                'fipe_code' => '825079-0',
                'model' => 'DL 1050 XT V-STROM ',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 4858,
                'brand_id' => 99,
                'fipe_code' => '825053-7',
                'model' => 'DL 650 V-STROM',
                'years' => '2009 a 2022'
            ],

            [
                'id' => 9270,
                'brand_id' => 99,
                'fipe_code' => '825078-2',
                'model' => 'DL 650 V-STROM ADVENTURE',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 10612,
                'brand_id' => 99,
                'fipe_code' => '825070-7',
                'model' => 'DL 650 XT V-STROM',
                'years' => '2016 a Zero Km'
            ],

            [
                'id' => 11088,
                'brand_id' => 99,
                'fipe_code' => '825082-0',
                'model' => 'DL 800DE V-STROM',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 2997,
                'brand_id' => 99,
                'fipe_code' => '825006-5',
                'model' => 'DR 350',
                'years' => '1995 a 1997'
            ],

            [
                'id' => 2998,
                'brand_id' => 99,
                'fipe_code' => '825005-7',
                'model' => 'DR 350 SE',
                'years' => '1995 a 1997'
            ],

            [
                'id' => 2999,
                'brand_id' => 99,
                'fipe_code' => '825007-3',
                'model' => 'DR 650 RE',
                'years' => '1995 a 2001'
            ],

            [
                'id' => 3000,
                'brand_id' => 99,
                'fipe_code' => '825008-1',
                'model' => 'DR 650 RSE',
                'years' => '1993 a 1997'
            ],

            [
                'id' => 3001,
                'brand_id' => 99,
                'fipe_code' => '825009-0',
                'model' => 'DR 800 S',
                'years' => '1994 a 2001'
            ],

            [
                'id' => 3002,
                'brand_id' => 99,
                'fipe_code' => '825034-0',
                'model' => 'DR-Z400E',
                'years' => '2000 a 2012'
            ],

            [
                'id' => 3003,
                'brand_id' => 99,
                'fipe_code' => '825042-1',
                'model' => 'EN 125 YES',
                'years' => '2005 a 2012'
            ],

            [
                'id' => 6196,
                'brand_id' => 99,
                'fipe_code' => '825060-0',
                'model' => 'EN 125 YES CARGO',
                'years' => '2012 a 2012'
            ],

            [
                'id' => 5477,
                'brand_id' => 99,
                'fipe_code' => '825055-3',
                'model' => 'EN 125 YES SE',
                'years' => '2011 a 2016'
            ],

            [
                'id' => 3004,
                'brand_id' => 99,
                'fipe_code' => '825010-3',
                'model' => 'FREEWIND XF 650',
                'years' => '1999 a 2003'
            ],

            [
                'id' => 6550,
                'brand_id' => 99,
                'fipe_code' => '825066-9',
                'model' => 'GLADIUS 650',
                'years' => '2013 a 2016'
            ],

            [
                'id' => 6551,
                'brand_id' => 99,
                'fipe_code' => '825064-2',
                'model' => 'GS 120',
                'years' => '2014 a 2017'
            ],

            [
                'id' => 3005,
                'brand_id' => 99,
                'fipe_code' => '825011-1',
                'model' => 'GS 500-E',
                'years' => '1993 a 2009'
            ],

            [
                'id' => 6219,
                'brand_id' => 99,
                'fipe_code' => '825061-8',
                'model' => 'GSR 125',
                'years' => '2013 a 2016'
            ],

            [
                'id' => 6220,
                'brand_id' => 99,
                'fipe_code' => '825062-6',
                'model' => 'GSR 125S',
                'years' => '2013 a 2016'
            ],

            [
                'id' => 5633,
                'brand_id' => 99,
                'fipe_code' => '825057-0',
                'model' => 'GSR 150i',
                'years' => '2011 a 2017'
            ],

            [
                'id' => 6552,
                'brand_id' => 99,
                'fipe_code' => '825063-4',
                'model' => 'GSR 750',
                'years' => '2013 a 2016'
            ],

            [
                'id' => 4808,
                'brand_id' => 99,
                'fipe_code' => '825052-9',
                'model' => 'GSX  650F',
                'years' => '2009 a 2016'
            ],

            [
                'id' => 3006,
                'brand_id' => 99,
                'fipe_code' => '825012-0',
                'model' => 'GSX 1100 F',
                'years' => '1993 a 1997'
            ],

            [
                'id' => 6553,
                'brand_id' => 99,
                'fipe_code' => '825065-0',
                'model' => 'GSX 1250 F',
                'years' => '2014 a 2016'
            ],

            [
                'id' => 4592,
                'brand_id' => 99,
                'fipe_code' => '825049-9',
                'model' => 'GSX 1300 B-KING',
                'years' => '2008 a 2016'
            ],

            [
                'id' => 3007,
                'brand_id' => 99,
                'fipe_code' => '825017-0',
                'model' => 'GSX 1300-R HAYABUSA',
                'years' => '1999 a Zero Km'
            ],

            [
                'id' => 11152,
                'brand_id' => 99,
                'fipe_code' => '825084-7',
                'model' => 'GSX 1300-R HAYABUSA Ed. Especial 25 Anos',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 3008,
                'brand_id' => 99,
                'fipe_code' => '825013-8',
                'model' => 'GSX 750 F',
                'years' => '1994 a 2009'
            ],

            [
                'id' => 11153,
                'brand_id' => 99,
                'fipe_code' => '825083-9',
                'model' => 'GSX-8S',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 3009,
                'brand_id' => 99,
                'fipe_code' => '825039-1',
                'model' => 'GSX-R 1000',
                'years' => '2001 a 2020'
            ],

            [
                'id' => 8331,
                'brand_id' => 99,
                'fipe_code' => '825076-6',
                'model' => 'GSX-R 1000 R',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 3010,
                'brand_id' => 99,
                'fipe_code' => '825014-6',
                'model' => 'GSX-R 1100 W',
                'years' => '1991 a 2000'
            ],

            [
                'id' => 3011,
                'brand_id' => 99,
                'fipe_code' => '825016-2',
                'model' => 'GSX-R 750 W',
                'years' => '1993 a 1997'
            ],

            [
                'id' => 3012,
                'brand_id' => 99,
                'fipe_code' => '825015-4',
                'model' => 'GSX-R 750 W SRAD',
                'years' => '1996 a 2016'
            ],

            [
                'id' => 7384,
                'brand_id' => 99,
                'fipe_code' => '825071-5',
                'model' => 'GSX-S 1000',
                'years' => '2016 a Zero Km'
            ],

            [
                'id' => 7385,
                'brand_id' => 99,
                'fipe_code' => '825072-3',
                'model' => 'GSX-S 1000 F',
                'years' => '2016 a 2020'
            ],

            [
                'id' => 10791,
                'brand_id' => 99,
                'fipe_code' => '825080-4',
                'model' => 'GSX-S 1000 GT',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 8120,
                'brand_id' => 99,
                'fipe_code' => '825074-0',
                'model' => 'GSX-S 750',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 6878,
                'brand_id' => 99,
                'fipe_code' => '825067-7',
                'model' => 'INAZUMA 250cc',
                'years' => '2014 a 2016'
            ],

            [
                'id' => 3013,
                'brand_id' => 99,
                'fipe_code' => '825040-5',
                'model' => 'INTRUDER 125',
                'years' => '2002 a 2016'
            ],

            [
                'id' => 3014,
                'brand_id' => 99,
                'fipe_code' => '825020-0',
                'model' => 'INTRUDER 250',
                'years' => '1995 a 2003'
            ],

            [
                'id' => 3015,
                'brand_id' => 99,
                'fipe_code' => '825018-9',
                'model' => 'INTRUDER LC 1500',
                'years' => '1999 a 2005'
            ],

            [
                'id' => 3016,
                'brand_id' => 99,
                'fipe_code' => '825019-7',
                'model' => 'INTRUDER VS 1400-GLP',
                'years' => '1994 a 2001'
            ],

            [
                'id' => 3017,
                'brand_id' => 99,
                'fipe_code' => '825021-9',
                'model' => 'INTRUDER VS 800-GLP/ 800-GL',
                'years' => '1994 a 2003'
            ],

            [
                'id' => 3018,
                'brand_id' => 99,
                'fipe_code' => '825022-7',
                'model' => 'KATANA 125',
                'years' => '1996 a 2002'
            ],

            [
                'id' => 3019,
                'brand_id' => 99,
                'fipe_code' => '825038-3',
                'model' => 'Lets II 50cc',
                'years' => '2001 a 2003'
            ],

            [
                'id' => 3020,
                'brand_id' => 99,
                'fipe_code' => '825035-9',
                'model' => 'LT 50 Quadriciclo',
                'years' => '2001 a 2006'
            ],

            [
                'id' => 3021,
                'brand_id' => 99,
                'fipe_code' => '825036-7',
                'model' => 'LT 80 Quadriciclo',
                'years' => '2001 a 2003'
            ],

            [
                'id' => 3022,
                'brand_id' => 99,
                'fipe_code' => '825037-5',
                'model' => 'LT F160 Quadriciclo',
                'years' => '2001 a 2003'
            ],

            [
                'id' => 3023,
                'brand_id' => 99,
                'fipe_code' => '825023-5',
                'model' => 'MARAUDER 800',
                'years' => '1997 a 2005'
            ],

            [
                'id' => 3024,
                'brand_id' => 99,
                'fipe_code' => '825024-3',
                'model' => 'RF 600 R',
                'years' => '1993 a 1996'
            ],

            [
                'id' => 3025,
                'brand_id' => 99,
                'fipe_code' => '825025-1',
                'model' => 'RF 900 R',
                'years' => '1993 a 1999'
            ],

            [
                'id' => 3026,
                'brand_id' => 99,
                'fipe_code' => '825030-8',
                'model' => 'RM 125',
                'years' => '1992 a 2001'
            ],

            [
                'id' => 3027,
                'brand_id' => 99,
                'fipe_code' => '825031-6',
                'model' => 'RM 250',
                'years' => '1990 a 2002'
            ],

            [
                'id' => 3028,
                'brand_id' => 99,
                'fipe_code' => '825032-4',
                'model' => 'RM 80',
                'years' => '1996 a 2000'
            ],

            [
                'id' => 3029,
                'brand_id' => 99,
                'fipe_code' => '825029-4',
                'model' => 'RMX 250',
                'years' => '1990 a 2002'
            ],

            [
                'id' => 3030,
                'brand_id' => 99,
                'fipe_code' => '825026-0',
                'model' => 'SAVAGE LS 650',
                'years' => '1998 a 2002'
            ],

            [
                'id' => 7880,
                'brand_id' => 99,
                'fipe_code' => '825073-1',
                'model' => 'SV650',
                'years' => '2017 a 2020'
            ],

            [
                'id' => 3031,
                'brand_id' => 99,
                'fipe_code' => '825027-8',
                'model' => 'TL 1000 S',
                'years' => '1997 a 2002'
            ],

            [
                'id' => 3032,
                'brand_id' => 99,
                'fipe_code' => '825028-6',
                'model' => 'VX 800cc',
                'years' => '1994 a 1995'
            ]
        ];

        $TRIUMPHModels = [
            [
                'id' => 3033,
                'brand_id' => 100,
                'fipe_code' => '826001-0',
                'model' => 'ADVENTURER 900',
                'years' => '1996 a 1997'
            ],

            [
                'id' => 3034,
                'brand_id' => 100,
                'fipe_code' => '826021-4',
                'model' => 'BONNEVILLE 750cc/ 790cc / 865cc',
                'years' => '2001 a 2010'
            ],

            [
                'id' => 7995,
                'brand_id' => 100,
                'fipe_code' => '826060-5',
                'model' => 'BONNEVILLE BOBBER 1200cc',
                'years' => '2017 a Zero Km'
            ],

            [
                'id' => 8707,
                'brand_id' => 100,
                'fipe_code' => '826069-9',
                'model' => 'BONNEVILLE BOBBER BLACK 1200cc',
                'years' => '2019 a 2021'
            ],

            [
                'id' => 10934,
                'brand_id' => 100,
                'fipe_code' => '826092-3',
                'model' => 'BONNEVILLE BOBBER CHROME EDITION 1200cc',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 10146,
                'brand_id' => 100,
                'fipe_code' => '826088-5',
                'model' => 'BONNEVILLE SPEEDMASTER 1200cc',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 3035,
                'brand_id' => 100,
                'fipe_code' => '826023-0',
                'model' => 'BONNEVILLE T 100',
                'years' => '2004 a Zero Km'
            ],

            [
                'id' => 8387,
                'brand_id' => 100,
                'fipe_code' => '826067-2',
                'model' => 'BONNEVILLE T100 BLACK',
                'years' => '2018 a 2021'
            ],

            [
                'id' => 7676,
                'brand_id' => 100,
                'fipe_code' => '826055-9',
                'model' => 'BONNEVILLE T120',
                'years' => '2016 a 2018'
            ],

            [
                'id' => 8803,
                'brand_id' => 100,
                'fipe_code' => '826073-7',
                'model' => 'BONNEVILLE T120 ACE',
                'years' => '2020 a 2020'
            ],

            [
                'id' => 7677,
                'brand_id' => 100,
                'fipe_code' => '826057-5',
                'model' => 'BONNEVILLE T120 BLACK',
                'years' => '2017 a Zero Km'
            ],

            [
                'id' => 3036,
                'brand_id' => 100,
                'fipe_code' => '826002-8',
                'model' => 'DAYTONA 1200',
                'years' => '1994 a 1996'
            ],

            [
                'id' => 11202,
                'brand_id' => 100,
                'fipe_code' => '826101-6',
                'model' => 'DAYTONA 660',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 4129,
                'brand_id' => 100,
                'fipe_code' => '826030-3',
                'model' => 'DAYTONA 675i',
                'years' => '2006 a 2015'
            ],

            [
                'id' => 6504,
                'brand_id' => 100,
                'fipe_code' => '826039-7',
                'model' => 'DAYTONA 675R',
                'years' => '2013 a 2016'
            ],

            [
                'id' => 3037,
                'brand_id' => 100,
                'fipe_code' => '826003-6',
                'model' => 'DAYTONA 900',
                'years' => '1995 a 1996'
            ],

            [
                'id' => 3038,
                'brand_id' => 100,
                'fipe_code' => '826026-5',
                'model' => 'DAYTONA 955i',
                'years' => '2006 a 2007'
            ],

            [
                'id' => 3039,
                'brand_id' => 100,
                'fipe_code' => '826004-4',
                'model' => 'DAYTONA SUPER III',
                'years' => '1995 a 1996'
            ],

            [
                'id' => 3040,
                'brand_id' => 100,
                'fipe_code' => '826005-2',
                'model' => 'DAYTONA T-955',
                'years' => '1998 a 2002'
            ],

            [
                'id' => 3041,
                'brand_id' => 100,
                'fipe_code' => '826006-0',
                'model' => 'LEGEND 900',
                'years' => '1999 a 2001'
            ],

            [
                'id' => 3042,
                'brand_id' => 100,
                'fipe_code' => '826025-7',
                'model' => 'ROCKET III 2300cc',
                'years' => '2005 a 2009'
            ],

            [
                'id' => 4130,
                'brand_id' => 100,
                'fipe_code' => '826029-0',
                'model' => 'ROCKET III CLASSIC 2300cc',
                'years' => '2006 a 2009'
            ],

            [
                'id' => 10186,
                'brand_id' => 100,
                'fipe_code' => '826089-3',
                'model' => 'ROCKET III GT 2500cc',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 9123,
                'brand_id' => 100,
                'fipe_code' => '826074-5',
                'model' => 'ROCKET III R 2500cc',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 9672,
                'brand_id' => 100,
                'fipe_code' => '826082-6',
                'model' => 'ROCKET III R Black Edition 2500cc',
                'years' => '2022 a 2022'
            ],

            [
                'id' => 6338,
                'brand_id' => 100,
                'fipe_code' => '826038-9',
                'model' => 'ROCKET III ROADSTER 2300cc',
                'years' => '2011 a 2017'
            ],

            [
                'id' => 11057,
                'brand_id' => 100,
                'fipe_code' => '826099-0',
                'model' => 'SCRAMBLER 1200 X',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 8759,
                'brand_id' => 100,
                'fipe_code' => '826072-9',
                'model' => 'SCRAMBLER 1200 XC',
                'years' => '2019 a 2020'
            ],

            [
                'id' => 8760,
                'brand_id' => 100,
                'fipe_code' => '826071-0',
                'model' => 'SCRAMBLER 1200 XE',
                'years' => '2019 a Zero Km'
            ],

            [
                'id' => 10939,
                'brand_id' => 100,
                'fipe_code' => '826093-1',
                'model' => 'SCRAMBLER 1200 XE CHROME EDITION',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 11002,
                'brand_id' => 100,
                'fipe_code' => '826095-8',
                'model' => 'SCRAMBLER 400X',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 4131,
                'brand_id' => 100,
                'fipe_code' => '826031-1',
                'model' => 'SCRAMBLER 900cc',
                'years' => '2006 a Zero Km'
            ],

            [
                'id' => 11004,
                'brand_id' => 100,
                'fipe_code' => '826096-6',
                'model' => 'SPEED 400',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 3942,
                'brand_id' => 100,
                'fipe_code' => '826028-1',
                'model' => 'SPEED TRIPLE 1050i',
                'years' => '2006 a 2015'
            ],

            [
                'id' => 7647,
                'brand_id' => 100,
                'fipe_code' => '826052-4',
                'model' => 'SPEED TRIPLE 1050R',
                'years' => '2016 a 2017'
            ],

            [
                'id' => 3043,
                'brand_id' => 100,
                'fipe_code' => '826007-9',
                'model' => 'SPEED TRIPLE 900',
                'years' => '1995 a 1996'
            ],

            [
                'id' => 3044,
                'brand_id' => 100,
                'fipe_code' => '826024-9',
                'model' => 'SPEED TRIPLE 955i',
                'years' => '2001 a 2006'
            ],

            [
                'id' => 3045,
                'brand_id' => 100,
                'fipe_code' => '826008-7',
                'model' => 'SPEED TRIPLE T-509 900cc',
                'years' => '1997 a 2001'
            ],

            [
                'id' => 8724,
                'brand_id' => 100,
                'fipe_code' => '826070-2',
                'model' => 'Speed Twin 1200cc',
                'years' => '2019 a Zero Km'
            ],

            [
                'id' => 10129,
                'brand_id' => 100,
                'fipe_code' => '826087-7',
                'model' => 'Speed Twin 900cc',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 3046,
                'brand_id' => 100,
                'fipe_code' => '826009-5',
                'model' => 'SPRINT 900',
                'years' => '1995 a 2000'
            ],

            [
                'id' => 3047,
                'brand_id' => 100,
                'fipe_code' => '826020-6',
                'model' => 'SPRINT RS 955',
                'years' => '2000 a 2002'
            ],

            [
                'id' => 3048,
                'brand_id' => 100,
                'fipe_code' => '826027-3',
                'model' => 'SPRINT ST 1050i',
                'years' => '2006 a 2009'
            ],

            [
                'id' => 3049,
                'brand_id' => 100,
                'fipe_code' => '826019-2',
                'model' => 'SPRINT ST 955',
                'years' => '1999 a 2001'
            ],

            [
                'id' => 7497,
                'brand_id' => 100,
                'fipe_code' => '826051-6',
                'model' => 'STREET  TWIN 900cc',
                'years' => '2016 a 2022'
            ],

            [
                'id' => 7901,
                'brand_id' => 100,
                'fipe_code' => '826059-1',
                'model' => 'STREET CUP 900cc',
                'years' => '2017 a 2018'
            ],

            [
                'id' => 7996,
                'brand_id' => 100,
                'fipe_code' => '826061-3',
                'model' => 'STREET SCRAMBLER 900cc',
                'years' => '2017 a 2022'
            ],

            [
                'id' => 5018,
                'brand_id' => 100,
                'fipe_code' => '826034-6',
                'model' => 'STREET TRIPLE 675',
                'years' => '2008 a 2017'
            ],

            [
                'id' => 6620,
                'brand_id' => 100,
                'fipe_code' => '826040-0',
                'model' => 'STREET TRIPLE 675R',
                'years' => '2013 a 2017'
            ],

            [
                'id' => 10897,
                'brand_id' => 100,
                'fipe_code' => '826094-0',
                'model' => 'STREET TRIPLE 765 R',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 8075,
                'brand_id' => 100,
                'fipe_code' => '826062-1',
                'model' => 'STREET TRIPLE 765 RS',
                'years' => '2017 a Zero Km'
            ],

            [
                'id' => 8076,
                'brand_id' => 100,
                'fipe_code' => '826063-0',
                'model' => 'STREET TRIPLE 765 S',
                'years' => '2017 a 2020'
            ],

            [
                'id' => 4132,
                'brand_id' => 100,
                'fipe_code' => '826032-0',
                'model' => 'THRUXTON 900cc',
                'years' => '2006 a 2015'
            ],

            [
                'id' => 7678,
                'brand_id' => 100,
                'fipe_code' => '826056-7',
                'model' => 'THRUXTON R 1200cc',
                'years' => '2016 a 2020'
            ],

            [
                'id' => 6879,
                'brand_id' => 100,
                'fipe_code' => '826044-3',
                'model' => 'THUNDERBIRD 1700 COMMANDER',
                'years' => '2014 a 2016'
            ],

            [
                'id' => 6283,
                'brand_id' => 100,
                'fipe_code' => '826036-2',
                'model' => 'THUNDERBIRD 1700 STORM',
                'years' => '2012 a 2016'
            ],

            [
                'id' => 3050,
                'brand_id' => 100,
                'fipe_code' => '826011-7',
                'model' => 'THUNDERBIRD 900',
                'years' => '1995 a 2001'
            ],

            [
                'id' => 3051,
                'brand_id' => 100,
                'fipe_code' => '826010-9',
                'model' => 'THUNDERBIRD 900 SPORT',
                'years' => '1998 a 2001'
            ],

            [
                'id' => 4741,
                'brand_id' => 100,
                'fipe_code' => '826033-8',
                'model' => 'TIGER 1050',
                'years' => '2007 a 2010'
            ],

            [
                'id' => 6979,
                'brand_id' => 100,
                'fipe_code' => '826045-1',
                'model' => 'TIGER 1050 SPORT',
                'years' => '2014 a 2018'
            ],

            [
                'id' => 9238,
                'brand_id' => 100,
                'fipe_code' => '826079-6',
                'model' => 'TIGER 1200 ALPINE Edition',
                'years' => '2020 a 2021'
            ],

            [
                'id' => 9239,
                'brand_id' => 100,
                'fipe_code' => '826080-0',
                'model' => 'TIGER 1200 DESERT Edition',
                'years' => '2020 a 2021'
            ],

            [
                'id' => 6284,
                'brand_id' => 100,
                'fipe_code' => '826037-0',
                'model' => 'TIGER 1200 EXPLORER',
                'years' => '2012 a 2016'
            ],

            [
                'id' => 7749,
                'brand_id' => 100,
                'fipe_code' => '826058-3',
                'model' => 'TIGER 1200 EXPLORER XCA',
                'years' => '2017 a 2018'
            ],

            [
                'id' => 7679,
                'brand_id' => 100,
                'fipe_code' => '826053-2',
                'model' => 'TIGER 1200 EXPLORER XCX',
                'years' => '2016 a 2018'
            ],

            [
                'id' => 7680,
                'brand_id' => 100,
                'fipe_code' => '826054-0',
                'model' => 'TIGER 1200 EXPLORER XR',
                'years' => '2016 a 2018'
            ],

            [
                'id' => 9848,
                'brand_id' => 100,
                'fipe_code' => '826085-0',
                'model' => 'TIGER 1200 GT EXPLORER',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 11031,
                'brand_id' => 100,
                'fipe_code' => '826098-2',
                'model' => 'TIGER 1200 GT PRO',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 11032,
                'brand_id' => 100,
                'fipe_code' => '826097-4',
                'model' => 'TIGER 1200 RALLY BLACK Edition',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 9849,
                'brand_id' => 100,
                'fipe_code' => '826086-9',
                'model' => 'TIGER 1200 RALLY EXPLORER',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 9850,
                'brand_id' => 100,
                'fipe_code' => '826084-2',
                'model' => 'TIGER 1200 RALLY PRO',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 6657,
                'brand_id' => 100,
                'fipe_code' => '826041-9',
                'model' => 'TIGER 1200 XC EXPLORER',
                'years' => '2014 a 2016'
            ],

            [
                'id' => 8332,
                'brand_id' => 100,
                'fipe_code' => '826064-8',
                'model' => 'TIGER 1200 XCA',
                'years' => '2018 a 2020'
            ],

            [
                'id' => 8333,
                'brand_id' => 100,
                'fipe_code' => '826065-6',
                'model' => 'TIGER 1200 XCX',
                'years' => '2018 a 2020'
            ],

            [
                'id' => 8334,
                'brand_id' => 100,
                'fipe_code' => '826066-4',
                'model' => 'TIGER 1200 XR',
                'years' => '2018 a 2020'
            ],

            [
                'id' => 9800,
                'brand_id' => 100,
                'fipe_code' => '826083-4',
                'model' => 'TIGER 660 SPORT',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 3052,
                'brand_id' => 100,
                'fipe_code' => '826012-5',
                'model' => 'TIGER 750',
                'years' => '1995 a 1995'
            ],

            [
                'id' => 6658,
                'brand_id' => 100,
                'fipe_code' => '826042-7',
                'model' => 'TIGER 800',
                'years' => '2014 a 2015'
            ],

            [
                'id' => 6285,
                'brand_id' => 100,
                'fipe_code' => '826035-4',
                'model' => 'TIGER 800 XC',
                'years' => '2012 a 2016'
            ],

            [
                'id' => 7413,
                'brand_id' => 100,
                'fipe_code' => '826049-4',
                'model' => 'TIGER 800 XCA',
                'years' => '2016 a 2020'
            ],

            [
                'id' => 7175,
                'brand_id' => 100,
                'fipe_code' => '826046-0',
                'model' => 'TIGER 800 XCX',
                'years' => '2015 a 2020'
            ],

            [
                'id' => 7368,
                'brand_id' => 100,
                'fipe_code' => '826048-6',
                'model' => 'TIGER 800 XR',
                'years' => '2016 a 2020'
            ],

            [
                'id' => 8437,
                'brand_id' => 100,
                'fipe_code' => '826068-0',
                'model' => 'TIGER 800 XRT',
                'years' => '2018 a 2020'
            ],

            [
                'id' => 7176,
                'brand_id' => 100,
                'fipe_code' => '826047-8',
                'model' => 'TIGER 800 XRX',
                'years' => '2015 a 2020'
            ],

            [
                'id' => 7469,
                'brand_id' => 100,
                'fipe_code' => '826050-8',
                'model' => 'TIGER 800 XRXL',
                'years' => '2016 a 2020'
            ],

            [
                'id' => 3053,
                'brand_id' => 100,
                'fipe_code' => '826013-3',
                'model' => 'TIGER 900',
                'years' => '1994 a 2021'
            ],

            [
                'id' => 9156,
                'brand_id' => 100,
                'fipe_code' => '826077-0',
                'model' => 'TIGER 900 GT',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 10853,
                'brand_id' => 100,
                'fipe_code' => '826090-7',
                'model' => 'TIGER 900 GT ARAGON Edition',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 9124,
                'brand_id' => 100,
                'fipe_code' => '826076-1',
                'model' => 'TIGER 900 GT PRO',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 9157,
                'brand_id' => 100,
                'fipe_code' => '826078-8',
                'model' => 'TIGER 900 RALLY',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 10854,
                'brand_id' => 100,
                'fipe_code' => '826091-5',
                'model' => 'TIGER 900 RALLY ARAGON Edition',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 9125,
                'brand_id' => 100,
                'fipe_code' => '826075-3',
                'model' => 'TIGER 900 RALLY PRO',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 3054,
                'brand_id' => 100,
                'fipe_code' => '826022-2',
                'model' => 'TIGER 955i',
                'years' => '2001 a 2007'
            ],

            [
                'id' => 9639,
                'brand_id' => 100,
                'fipe_code' => '826081-8',
                'model' => 'TRIDENT 660',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 11208,
                'brand_id' => 100,
                'fipe_code' => '826100-8',
                'model' => 'TRIDENT 660 TRIPLE TRIBUTE',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 3055,
                'brand_id' => 100,
                'fipe_code' => '826014-1',
                'model' => 'TRIDENT 750',
                'years' => '1995 a 2000'
            ],

            [
                'id' => 3056,
                'brand_id' => 100,
                'fipe_code' => '826015-0',
                'model' => 'TRIDENT 900',
                'years' => '1994 a 2000'
            ],

            [
                'id' => 3057,
                'brand_id' => 100,
                'fipe_code' => '826016-8',
                'model' => 'TROPHY 1200',
                'years' => '1995 a 2001'
            ],

            [
                'id' => 3058,
                'brand_id' => 100,
                'fipe_code' => '826017-6',
                'model' => 'TROPHY 900',
                'years' => '1995 a 2000'
            ],

            [
                'id' => 6659,
                'brand_id' => 100,
                'fipe_code' => '826043-5',
                'model' => 'TROPHY SE 1200',
                'years' => '2013 a 2014'
            ],

            [
                'id' => 3059,
                'brand_id' => 100,
                'fipe_code' => '826018-4',
                'model' => 'TT 600',
                'years' => '2000 a 2001'
            ]
        ];

        $YAMAHAModels = [
            [
                'id' => 3060,
                'brand_id' => 101,
                'fipe_code' => '827001-5',
                'model' => '750 VIRAGO',
                'years' => '1993 a 1997'
            ],

            [
                'id' => 3061,
                'brand_id' => 101,
                'fipe_code' => '827002-3',
                'model' => 'AXIS 90',
                'years' => '1994 a 1998'
            ],

            [
                'id' => 9950,
                'brand_id' => 101,
                'fipe_code' => '827003-1',
                'model' => 'BW S 50',
                'years' => '1995 a 2000'
            ],

            [
                'id' => 3063,
                'brand_id' => 101,
                'fipe_code' => '827004-0',
                'model' => 'CRYPTON 100',
                'years' => '1997 a 2005'
            ],

            [
                'id' => 3064,
                'brand_id' => 101,
                'fipe_code' => '827006-6',
                'model' => 'DT 180-Z TRAIL',
                'years' => '1990 a 1997'
            ],

            [
                'id' => 3065,
                'brand_id' => 101,
                'fipe_code' => '827008-2',
                'model' => 'DT 200',
                'years' => '1992 a 1997'
            ],

            [
                'id' => 3066,
                'brand_id' => 101,
                'fipe_code' => '827007-4',
                'model' => 'DT 200 R',
                'years' => '1994 a 2000'
            ],

            [
                'id' => 3067,
                'brand_id' => 101,
                'fipe_code' => '827051-1',
                'model' => 'FAZER 600/ FZ6 S',
                'years' => '2005 a 2009'
            ],

            [
                'id' => 9777,
                'brand_id' => 101,
                'fipe_code' => '827121-6',
                'model' => 'FLUO 125 ABS',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 10084,
                'brand_id' => 101,
                'fipe_code' => '827124-0',
                'model' => 'FZ15 150 FAZER FLEX',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 9240,
                'brand_id' => 101,
                'fipe_code' => '827116-0',
                'model' => 'FZ25 250 FAZER CAPITÃ MARVEL FLEX',
                'years' => '2021 a 2023'
            ],

            [
                'id' => 8143,
                'brand_id' => 101,
                'fipe_code' => '827107-0',
                'model' => 'FZ25 250 FAZER FLEX',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 9241,
                'brand_id' => 101,
                'fipe_code' => '827117-8',
                'model' => 'FZ25 250 FAZER PANTERA NEGRA FLEX',
                'years' => '2021 a 2023'
            ],

            [
                'id' => 9951,
                'brand_id' => 101,
                'fipe_code' => '827123-2',
                'model' => 'FZ25 FAZER THOR FLEX',
                'years' => '2023 a 2023'
            ],

            [
                'id' => 4571,
                'brand_id' => 101,
                'fipe_code' => '827067-8',
                'model' => 'FZ6 N',
                'years' => '2008 a 2009'
            ],

            [
                'id' => 3068,
                'brand_id' => 101,
                'fipe_code' => '827009-0',
                'model' => 'FZR 1000',
                'years' => '1993 a 1995'
            ],

            [
                'id' => 3069,
                'brand_id' => 101,
                'fipe_code' => '827010-4',
                'model' => 'FZR 600',
                'years' => '1994 a 1995'
            ],

            [
                'id' => 3070,
                'brand_id' => 101,
                'fipe_code' => '827011-2',
                'model' => 'JOG 50',
                'years' => '1993 a 1999'
            ],

            [
                'id' => 3071,
                'brand_id' => 101,
                'fipe_code' => '827012-0',
                'model' => 'JOG TEEN 50',
                'years' => '1998 a 2005'
            ],

            [
                'id' => 3072,
                'brand_id' => 101,
                'fipe_code' => '827044-9',
                'model' => 'MAJESTY YP 250',
                'years' => '1998 a 1998'
            ],

            [
                'id' => 4211,
                'brand_id' => 101,
                'fipe_code' => '827060-0',
                'model' => 'MT-01 1.670cc',
                'years' => '2005 a 2009'
            ],

            [
                'id' => 9638,
                'brand_id' => 101,
                'fipe_code' => '827118-6',
                'model' => 'MT-03 321 ABS Homem de Ferro',
                'years' => '2022 a 2022'
            ],

            [
                'id' => 7527,
                'brand_id' => 101,
                'fipe_code' => '827103-8',
                'model' => 'MT-03 321/ABS',
                'years' => '2017 a Zero Km'
            ],

            [
                'id' => 4593,
                'brand_id' => 101,
                'fipe_code' => '827070-8',
                'model' => 'MT-03 660cc',
                'years' => '2008 a 2008'
            ],

            [
                'id' => 7145,
                'brand_id' => 101,
                'fipe_code' => '827095-3',
                'model' => 'MT-07/MT-07 ABS 689cc',
                'years' => '2016 a Zero Km'
            ],

            [
                'id' => 7064,
                'brand_id' => 101,
                'fipe_code' => '827094-5',
                'model' => 'MT-09 850cc/ABS',
                'years' => '2015 a Zero Km'
            ],

            [
                'id' => 7470,
                'brand_id' => 101,
                'fipe_code' => '827100-3',
                'model' => 'MT-09 TRACER',
                'years' => '2017 a 2018'
            ],

            [
                'id' => 8804,
                'brand_id' => 101,
                'fipe_code' => '827110-0',
                'model' => 'MT-09 TRACER 900 GT',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 3073,
                'brand_id' => 101,
                'fipe_code' => '827049-0',
                'model' => 'NEO AT 115cc',
                'years' => '2005 a 2007'
            ],

            [
                'id' => 4378,
                'brand_id' => 101,
                'fipe_code' => '827061-9',
                'model' => 'NEO AUTOMATIC 115cc',
                'years' => '2008 a 2012'
            ],

            [
                'id' => 7786,
                'brand_id' => 101,
                'fipe_code' => '827106-2',
                'model' => 'NEO AUTOMATIC 125cc',
                'years' => '2017 a Zero Km'
            ],

            [
                'id' => 7528,
                'brand_id' => 101,
                'fipe_code' => '827102-0',
                'model' => 'NMAX 160',
                'years' => '2017 a 2022'
            ],

            [
                'id' => 10231,
                'brand_id' => 101,
                'fipe_code' => '827125-9',
                'model' => 'NMAX Connected 160 ABS',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 10619,
                'brand_id' => 101,
                'fipe_code' => '827128-3',
                'model' => 'NMAX Connected MANDALORIAN 160 ABS',
                'years' => '2023 a 2023'
            ],

            [
                'id' => 10232,
                'brand_id' => 101,
                'fipe_code' => '827127-5',
                'model' => 'NMAX Connected SE 160 ABS',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 9670,
                'brand_id' => 101,
                'fipe_code' => '827119-4',
                'model' => 'NMAX HOMEM ARANHA 160 ABS',
                'years' => '2022 a 2022'
            ],

            [
                'id' => 9203,
                'brand_id' => 101,
                'fipe_code' => '827114-3',
                'model' => 'NMAX STAR WARS 160 ABS',
                'years' => '2020 a 2021'
            ],

            [
                'id' => 3074,
                'brand_id' => 101,
                'fipe_code' => '827014-7',
                'model' => 'RD 135',
                'years' => '1990 a 2000'
            ],

            [
                'id' => 3075,
                'brand_id' => 101,
                'fipe_code' => '827015-5',
                'model' => 'RD 350 LC/ R',
                'years' => '1990 a 1993'
            ],

            [
                'id' => 3076,
                'brand_id' => 101,
                'fipe_code' => '827016-3',
                'model' => 'RDZ 125',
                'years' => '1990 a 1993'
            ],

            [
                'id' => 3077,
                'brand_id' => 101,
                'fipe_code' => '827017-1',
                'model' => 'RDZ 135',
                'years' => '1990 a 1992'
            ],

            [
                'id' => 3078,
                'brand_id' => 101,
                'fipe_code' => '827018-0',
                'model' => 'ROYAL STAR 1300',
                'years' => '1996 a 2001'
            ],

            [
                'id' => 5163,
                'brand_id' => 101,
                'fipe_code' => '827079-1',
                'model' => 'T115 CRYPTON ED',
                'years' => '2010 a 2016'
            ],

            [
                'id' => 6477,
                'brand_id' => 101,
                'fipe_code' => '827084-8',
                'model' => 'T115 CRYPTON ED PENELOPE',
                'years' => '2014 a 2014'
            ],

            [
                'id' => 5164,
                'brand_id' => 101,
                'fipe_code' => '827078-3',
                'model' => 'T115 CRYPTON K',
                'years' => '2010 a 2016'
            ],

            [
                'id' => 3079,
                'brand_id' => 101,
                'fipe_code' => '827019-8',
                'model' => 'TDM 225',
                'years' => '1997 a 2005'
            ],

            [
                'id' => 3080,
                'brand_id' => 101,
                'fipe_code' => '827020-1',
                'model' => 'TDM 850',
                'years' => '1993 a 2001'
            ],

            [
                'id' => 3081,
                'brand_id' => 101,
                'fipe_code' => '827048-1',
                'model' => 'TDM 900',
                'years' => '2002 a 2008'
            ],

            [
                'id' => 3082,
                'brand_id' => 101,
                'fipe_code' => '827021-0',
                'model' => 'TDR 180',
                'years' => '1990 a 1993'
            ],

            [
                'id' => 6677,
                'brand_id' => 101,
                'fipe_code' => '827089-9',
                'model' => 'TMAX 530',
                'years' => '2014 a 2017'
            ],

            [
                'id' => 3083,
                'brand_id' => 101,
                'fipe_code' => '827022-8',
                'model' => 'TRX 850',
                'years' => '1997 a 1997'
            ],

            [
                'id' => 4483,
                'brand_id' => 101,
                'fipe_code' => '827062-7',
                'model' => 'TT-R 125 E',
                'years' => '2008 a 2011'
            ],

            [
                'id' => 4484,
                'brand_id' => 101,
                'fipe_code' => '827063-5',
                'model' => 'TT-R 125 LE',
                'years' => '2008 a 2011'
            ],

            [
                'id' => 7177,
                'brand_id' => 101,
                'fipe_code' => '827096-1',
                'model' => 'TT-R 125 LWE',
                'years' => '2015 a 2015'
            ],

            [
                'id' => 4485,
                'brand_id' => 101,
                'fipe_code' => '827064-3',
                'model' => 'TT-R 230',
                'years' => '2008 a Zero Km'
            ],

            [
                'id' => 3084,
                'brand_id' => 101,
                'fipe_code' => '827023-6',
                'model' => 'V-MAX 1200',
                'years' => '1991 a 2001'
            ],

            [
                'id' => 6678,
                'brand_id' => 101,
                'fipe_code' => '827090-2',
                'model' => 'V-MAX 1700',
                'years' => '2014 a 2015'
            ],

            [
                'id' => 3085,
                'brand_id' => 101,
                'fipe_code' => '827024-4',
                'model' => 'WR 200',
                'years' => '1994 a 1996'
            ],

            [
                'id' => 3086,
                'brand_id' => 101,
                'fipe_code' => '827043-0',
                'model' => 'WR 426 F',
                'years' => '2001 a 2001'
            ],

            [
                'id' => 9782,
                'brand_id' => 101,
                'fipe_code' => '827120-8',
                'model' => 'WR 450 F',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 3087,
                'brand_id' => 101,
                'fipe_code' => '827025-2',
                'model' => 'XJ 600',
                'years' => '1992 a 1992'
            ],

            [
                'id' => 5165,
                'brand_id' => 101,
                'fipe_code' => '827077-5',
                'model' => 'XJ6 F',
                'years' => '2010 a 2017'
            ],

            [
                'id' => 6764,
                'brand_id' => 101,
                'fipe_code' => '827091-0',
                'model' => 'XJ6 N SP',
                'years' => '2015 a 2016'
            ],

            [
                'id' => 5166,
                'brand_id' => 101,
                'fipe_code' => '827076-7',
                'model' => 'XJ6 N/ABS',
                'years' => '2010 a 2019'
            ],

            [
                'id' => 3088,
                'brand_id' => 101,
                'fipe_code' => '827026-0',
                'model' => 'XJR 1200',
                'years' => '1995 a 1995'
            ],

            [
                'id' => 9034,
                'brand_id' => 101,
                'fipe_code' => '827113-5',
                'model' => 'XMAX 250 ABS',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 9851,
                'brand_id' => 101,
                'fipe_code' => '827122-4',
                'model' => 'XMAX 250 ABS Darth Vader',
                'years' => '2022 a 2022'
            ],

            [
                'id' => 5523,
                'brand_id' => 101,
                'fipe_code' => '827081-3',
                'model' => 'XT 1200 Z  SUPER TÉNÉRÉ/ DX',
                'years' => '2011 a 2020'
            ],

            [
                'id' => 7471,
                'brand_id' => 101,
                'fipe_code' => '827101-1',
                'model' => 'XT 1200 Z S.TÉNÉRÉ 60th ANINIVERSARY',
                'years' => '2017 a 2017'
            ],

            [
                'id' => 3091,
                'brand_id' => 101,
                'fipe_code' => '827027-9',
                'model' => 'XT 225',
                'years' => '1996 a 2006'
            ],

            [
                'id' => 3092,
                'brand_id' => 101,
                'fipe_code' => '827028-7',
                'model' => 'XT 600 E',
                'years' => '1993 a 2005'
            ],

            [
                'id' => 3093,
                'brand_id' => 101,
                'fipe_code' => '827029-5',
                'model' => 'XT 600 Z TENERE',
                'years' => '1990 a 1993'
            ],

            [
                'id' => 3094,
                'brand_id' => 101,
                'fipe_code' => '827050-3',
                'model' => 'XT 660 R',
                'years' => '2005 a 2018'
            ],

            [
                'id' => 5738,
                'brand_id' => 101,
                'fipe_code' => '827083-0',
                'model' => 'XT 660Z TÉNÉRÉ',
                'years' => '2011 a 2017'
            ],

            [
                'id' => 3095,
                'brand_id' => 101,
                'fipe_code' => '827047-3',
                'model' => 'XTZ 125 E',
                'years' => '2003 a 2016'
            ],

            [
                'id' => 3096,
                'brand_id' => 101,
                'fipe_code' => '827046-5',
                'model' => 'XTZ 125 K',
                'years' => '2003 a 2014'
            ],

            [
                'id' => 4486,
                'brand_id' => 101,
                'fipe_code' => '827065-1',
                'model' => 'XTZ 125 XE',
                'years' => '2008 a 2016'
            ],

            [
                'id' => 4487,
                'brand_id' => 101,
                'fipe_code' => '827066-0',
                'model' => 'XTZ 125 XK',
                'years' => '2008 a 2013'
            ],

            [
                'id' => 6765,
                'brand_id' => 101,
                'fipe_code' => '827092-9',
                'model' => 'XTZ 150  CROSSER E/FLEX',
                'years' => '2014 a 2017'
            ],

            [
                'id' => 6766,
                'brand_id' => 101,
                'fipe_code' => '827093-7',
                'model' => 'XTZ 150  CROSSER ED /FLEX',
                'years' => '2014 a 2017'
            ],

            [
                'id' => 8190,
                'brand_id' => 101,
                'fipe_code' => '827108-9',
                'model' => 'XTZ 150 CROSSER S FLEX',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 8191,
                'brand_id' => 101,
                'fipe_code' => '827109-7',
                'model' => 'XTZ 150 CROSSER Z FLEX',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 4195,
                'brand_id' => 101,
                'fipe_code' => '827059-7',
                'model' => 'XTZ 250 LANDER 249cc/LANDER BLUEFLEX/ABS',
                'years' => '2007 a Zero Km'
            ],

            [
                'id' => 9242,
                'brand_id' => 101,
                'fipe_code' => '827115-1',
                'model' => 'XTZ 250 LANDER CAPITÃO AMÉRICA FLEX ABS',
                'years' => '2021 a 2023'
            ],

            [
                'id' => 5442,
                'brand_id' => 101,
                'fipe_code' => '827080-5',
                'model' => 'XTZ 250 TENERE/TENERE BLUEFLEX',
                'years' => '2011 a 2019'
            ],

            [
                'id' => 4658,
                'brand_id' => 101,
                'fipe_code' => '827071-6',
                'model' => 'XTZ 250X',
                'years' => '2007 a 2011'
            ],

            [
                'id' => 3097,
                'brand_id' => 101,
                'fipe_code' => '827030-9',
                'model' => 'XTZ 750 S TENERE',
                'years' => '1990 a 1998'
            ],

            [
                'id' => 3098,
                'brand_id' => 101,
                'fipe_code' => '827031-7',
                'model' => 'XV 1100 VIRAGO',
                'years' => '1993 a 1999'
            ],

            [
                'id' => 3099,
                'brand_id' => 101,
                'fipe_code' => '827032-5',
                'model' => 'XV 250 VIRAGO',
                'years' => '1995 a 2002'
            ],

            [
                'id' => 3100,
                'brand_id' => 101,
                'fipe_code' => '827033-3',
                'model' => 'XV 535 S VIRAGO',
                'years' => '1994 a 2002'
            ],

            [
                'id' => 3089,
                'brand_id' => 101,
                'fipe_code' => '827038-4',
                'model' => 'XVS 1100 DRAG STAR',
                'years' => '2000 a 2001'
            ],

            [
                'id' => 3090,
                'brand_id' => 101,
                'fipe_code' => '827005-8',
                'model' => 'XVS 650 DRAG STAR',
                'years' => '1997 a 2008'
            ],

            [
                'id' => 4956,
                'brand_id' => 101,
                'fipe_code' => '827075-9',
                'model' => 'XVS 950 MIDNIGHT STAR',
                'years' => '2009 a 2016'
            ],

            [
                'id' => 3101,
                'brand_id' => 101,
                'fipe_code' => '827039-2',
                'model' => 'YBR 125 E',
                'years' => '2000 a 2008'
            ],

            [
                'id' => 3102,
                'brand_id' => 101,
                'fipe_code' => '827045-7',
                'model' => 'YBR 125 ED',
                'years' => '2002 a 2008'
            ],

            [
                'id' => 4742,
                'brand_id' => 101,
                'fipe_code' => '827073-2',
                'model' => 'YBR 125 FACTOR E',
                'years' => '2009 a 2016'
            ],

            [
                'id' => 4743,
                'brand_id' => 101,
                'fipe_code' => '827074-0',
                'model' => 'YBR 125 FACTOR ED/FACTOR EDITION',
                'years' => '2009 a 2016'
            ],

            [
                'id' => 4744,
                'brand_id' => 101,
                'fipe_code' => '827072-4',
                'model' => 'YBR 125 FACTOR K/ FACTOR K1',
                'years' => '2009 a 2016'
            ],

            [
                'id' => 6568,
                'brand_id' => 101,
                'fipe_code' => '827086-4',
                'model' => 'YBR 125 FACTOR PRO E',
                'years' => '2014 a 2014'
            ],

            [
                'id' => 6569,
                'brand_id' => 101,
                'fipe_code' => '827085-6',
                'model' => 'YBR 125 FACTOR PRO K',
                'years' => '2014 a 2014'
            ],

            [
                'id' => 3103,
                'brand_id' => 101,
                'fipe_code' => '827040-6',
                'model' => 'YBR 125 K',
                'years' => '2001 a 2008'
            ],

            [
                'id' => 7648,
                'brand_id' => 101,
                'fipe_code' => '827104-6',
                'model' => 'YBR 125i FACTOR ED/FLEX',
                'years' => '2017 a Zero Km'
            ],

            [
                'id' => 7387,
                'brand_id' => 101,
                'fipe_code' => '827098-8',
                'model' => 'YBR 150 FACTOR E/FLEX',
                'years' => '2016 a 2018'
            ],

            [
                'id' => 7388,
                'brand_id' => 101,
                'fipe_code' => '827099-6',
                'model' => 'YBR 150 FACTOR ED/FLEX',
                'years' => '2016 a Zero Km'
            ],

            [
                'id' => 4080,
                'brand_id' => 101,
                'fipe_code' => '827057-0',
                'model' => 'YFM 250 BRUIN 230cc',
                'years' => '2006 a 2007'
            ],

            [
                'id' => 4196,
                'brand_id' => 101,
                'fipe_code' => '827058-9',
                'model' => 'YFM 350 GRIZZLY 350cc',
                'years' => '2006 a 2007'
            ],

            [
                'id' => 4081,
                'brand_id' => 101,
                'fipe_code' => '827056-2',
                'model' => 'YFM 660R 660cc',
                'years' => '2003 a 2006'
            ],

            [
                'id' => 4582,
                'brand_id' => 101,
                'fipe_code' => '827068-6',
                'model' => 'YFM 700R 686cc',
                'years' => '2008 a 2010'
            ],

            [
                'id' => 4082,
                'brand_id' => 101,
                'fipe_code' => '827054-6',
                'model' => 'YFM 80 79cc',
                'years' => '2003 a 2007'
            ],

            [
                'id' => 4083,
                'brand_id' => 101,
                'fipe_code' => '827055-4',
                'model' => 'YFS 200 BLASTER 195cc',
                'years' => '2003 a 2006'
            ],

            [
                'id' => 4583,
                'brand_id' => 101,
                'fipe_code' => '827069-4',
                'model' => 'YFZ 450/ YZ 450 F 449cc',
                'years' => '2008 a Zero Km'
            ],

            [
                'id' => 6605,
                'brand_id' => 101,
                'fipe_code' => '827087-2',
                'model' => 'YS 150 FAZER ED/FLEX',
                'years' => '2014 a 2015'
            ],

            [
                'id' => 6606,
                'brand_id' => 101,
                'fipe_code' => '827088-0',
                'model' => 'YS 150 FAZER SED/ FLEX',
                'years' => '2014 a Zero Km'
            ],

            [
                'id' => 3871,
                'brand_id' => 101,
                'fipe_code' => '827052-0',
                'model' => 'YS 250 FAZER/ FAZER L. EDITION /BLUEFLEX',
                'years' => '2006 a 2017'
            ],

            [
                'id' => 3104,
                'brand_id' => 101,
                'fipe_code' => '827041-4',
                'model' => 'YZ 125',
                'years' => '2000 a 2008'
            ],

            [
                'id' => 3105,
                'brand_id' => 101,
                'fipe_code' => '827042-2',
                'model' => 'YZ 250',
                'years' => '2000 a Zero Km'
            ],

            [
                'id' => 8805,
                'brand_id' => 101,
                'fipe_code' => '827111-9',
                'model' => 'YZ 250 F 250cc',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 8806,
                'brand_id' => 101,
                'fipe_code' => '827112-7',
                'model' => 'YZ 85 LW 85cc',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 3106,
                'brand_id' => 101,
                'fipe_code' => '827034-1',
                'model' => 'YZF 1000 THUNDERACE',
                'years' => '1996 a 1998'
            ],

            [
                'id' => 3107,
                'brand_id' => 101,
                'fipe_code' => '827035-0',
                'model' => 'YZF 600 THUNDERCAT',
                'years' => '1996 a 1997'
            ],

            [
                'id' => 3108,
                'brand_id' => 101,
                'fipe_code' => '827036-8',
                'model' => 'YZF 750',
                'years' => '1993 a 1994'
            ],

            [
                'id' => 3109,
                'brand_id' => 101,
                'fipe_code' => '827037-6',
                'model' => 'YZF R-1 1000',
                'years' => '1998 a 2016'
            ],

            [
                'id' => 10943,
                'brand_id' => 101,
                'fipe_code' => '827129-1',
                'model' => 'YZF R-15 155 ABS',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 7681,
                'brand_id' => 101,
                'fipe_code' => '827105-4',
                'model' => 'YZF R-1M 1000',
                'years' => '2016 a 2016'
            ],

            [
                'id' => 7338,
                'brand_id' => 101,
                'fipe_code' => '827097-0',
                'model' => 'YZF R-3 321/ABS',
                'years' => '2016 a Zero Km'
            ],

            [
                'id' => 10235,
                'brand_id' => 101,
                'fipe_code' => '827126-7',
                'model' => 'YZF R-3 World GP 60th ANINIVERSARY ED.',
                'years' => '2023 a 2023'
            ],

            [
                'id' => 3943,
                'brand_id' => 101,
                'fipe_code' => '827053-8',
                'model' => 'YZF R-6 600',
                'years' => '2004 a 2012'
            ]
        ];

        $BUELLModels = [
            [
                'id' => 5012,
                'brand_id' => 117,
                'fipe_code' => '846009-4',
                'model' => '1125CR',
                'years' => '2009 a 2009'
            ],

            [
                'id' => 4678,
                'brand_id' => 117,
                'fipe_code' => '846006-0',
                'model' => '1125R',
                'years' => '2008 a 2008'
            ],

            [
                'id' => 4206,
                'brand_id' => 117,
                'fipe_code' => '846005-1',
                'model' => 'FIREBOLT XB12 R',
                'years' => '2006 a 2008'
            ],

            [
                'id' => 3837,
                'brand_id' => 117,
                'fipe_code' => '846002-7',
                'model' => 'LIGHTNING CITY CROSS XB9SX',
                'years' => '2006 a 2009'
            ],

            [
                'id' => 3838,
                'brand_id' => 117,
                'fipe_code' => '846003-5',
                'model' => 'LIGHTNING XB12S',
                'years' => '2006 a 2008'
            ],

            [
                'id' => 4679,
                'brand_id' => 117,
                'fipe_code' => '846008-6',
                'model' => 'LIGHTNING XB12SCG',
                'years' => '2007 a 2008'
            ],

            [
                'id' => 3839,
                'brand_id' => 117,
                'fipe_code' => '846004-3',
                'model' => 'LIGHTNING XB12SS',
                'years' => '2006 a 2009'
            ],

            [
                'id' => 4680,
                'brand_id' => 117,
                'fipe_code' => '846007-8',
                'model' => 'LIGHTNING XB12STT',
                'years' => '2007 a 2008'
            ],

            [
                'id' => 3840,
                'brand_id' => 117,
                'fipe_code' => '846001-9',
                'model' => 'ULYSSES XB12X',
                'years' => '2006 a 2009'
            ]
        ];

        $KASINSKIModels = [
            [
                'id' => 5224,
                'brand_id' => 118,
                'fipe_code' => '816027-9',
                'model' => 'COMET 150',
                'years' => '2010 a 2013'
            ],

            [
                'id' => 3845,
                'brand_id' => 118,
                'fipe_code' => '816015-5',
                'model' => 'COMET 250cc / COMET GT 250cc',
                'years' => '2005 a 2013'
            ],

            [
                'id' => 5658,
                'brand_id' => 118,
                'fipe_code' => '816034-1',
                'model' => 'COMET GT 650',
                'years' => '2007 a 2013'
            ],

            [
                'id' => 4076,
                'brand_id' => 118,
                'fipe_code' => '816019-8',
                'model' => 'COMET GT 650R V2power',
                'years' => '2005 a 2013'
            ],

            [
                'id' => 4457,
                'brand_id' => 118,
                'fipe_code' => '816023-6',
                'model' => 'COMET GT-R 250cc',
                'years' => '2008 a 2013'
            ],

            [
                'id' => 3846,
                'brand_id' => 118,
                'fipe_code' => '816001-5',
                'model' => 'CRUISE 125',
                'years' => '1994 a 1996'
            ],

            [
                'id' => 3847,
                'brand_id' => 118,
                'fipe_code' => '816006-6',
                'model' => 'CRUISE II 125',
                'years' => '1997 a 2006'
            ],

            [
                'id' => 5317,
                'brand_id' => 118,
                'fipe_code' => '816028-7',
                'model' => 'CRZ 150',
                'years' => '2010 a 2013'
            ],

            [
                'id' => 5318,
                'brand_id' => 118,
                'fipe_code' => '816029-5',
                'model' => 'CRZ 150 SUPER MOTO',
                'years' => '2010 a 2013'
            ],

            [
                'id' => 3848,
                'brand_id' => 118,
                'fipe_code' => '816017-1',
                'model' => 'ERO PLUS 125cc',
                'years' => '2005 a 2005'
            ],

            [
                'id' => 3919,
                'brand_id' => 118,
                'fipe_code' => '816018-0',
                'model' => 'FLASH K 150cc',
                'years' => '2006 a 2008'
            ],

            [
                'id' => 3849,
                'brand_id' => 118,
                'fipe_code' => '816014-7',
                'model' => 'FÚRIA 250cc',
                'years' => '2003 a 2003'
            ],

            [
                'id' => 3850,
                'brand_id' => 118,
                'fipe_code' => '816002-3',
                'model' => 'GF 125 SPEED',
                'years' => '1997 a 2005'
            ],

            [
                'id' => 3851,
                'brand_id' => 118,
                'fipe_code' => '816010-4',
                'model' => 'GV 250 MIRAGE',
                'years' => '2001 a 2013'
            ],

            [
                'id' => 3852,
                'brand_id' => 118,
                'fipe_code' => '816013-9',
                'model' => 'MAGIK 125cc',
                'years' => '2002 a 2003'
            ],

            [
                'id' => 3853,
                'brand_id' => 118,
                'fipe_code' => '816003-1',
                'model' => 'MIDAS FX 110cc',
                'years' => '1998 a 2004'
            ],

            [
                'id' => 5162,
                'brand_id' => 118,
                'fipe_code' => '816026-0',
                'model' => 'MIRAGE 150',
                'years' => '2010 a 2013'
            ],

            [
                'id' => 4094,
                'brand_id' => 118,
                'fipe_code' => '816020-1',
                'model' => 'MIRAGE 650 V2power',
                'years' => '2006 a 2013'
            ],

            [
                'id' => 3854,
                'brand_id' => 118,
                'fipe_code' => '816011-2',
                'model' => 'MOTOKAR FURGÃO/ PICK-UP 174cc (1 pessoa)',
                'years' => '2002 a 2004'
            ],

            [
                'id' => 3855,
                'brand_id' => 118,
                'fipe_code' => '816012-0',
                'model' => 'MOTOKAR TAXI-KAR 174cc (4 pessoas)',
                'years' => '2002 a 2004'
            ],

            [
                'id' => 5516,
                'brand_id' => 118,
                'fipe_code' => '816032-5',
                'model' => 'PRIMA 150',
                'years' => '2011 a 2013'
            ],

            [
                'id' => 3856,
                'brand_id' => 118,
                'fipe_code' => '816008-2',
                'model' => 'PRIMA 50',
                'years' => '1999 a 2005'
            ],

            [
                'id' => 5384,
                'brand_id' => 118,
                'fipe_code' => '816030-9',
                'model' => 'PRIMA ELECTRA 2000W (Elétrica)',
                'years' => '2010 a 2013'
            ],

            [
                'id' => 3857,
                'brand_id' => 118,
                'fipe_code' => '816016-3',
                'model' => 'PRIMA RALLY 50cc',
                'years' => '2005 a 2006'
            ],

            [
                'id' => 3858,
                'brand_id' => 118,
                'fipe_code' => '816009-0',
                'model' => 'RX 125',
                'years' => '1999 a 2004'
            ],

            [
                'id' => 4253,
                'brand_id' => 118,
                'fipe_code' => '816022-8',
                'model' => 'SETA 125',
                'years' => '2007 a 2009'
            ],

            [
                'id' => 4559,
                'brand_id' => 118,
                'fipe_code' => '816025-2',
                'model' => 'SETA 150',
                'years' => '2008 a 2009'
            ],

            [
                'id' => 5494,
                'brand_id' => 118,
                'fipe_code' => '816031-7',
                'model' => 'SOFT 50cc',
                'years' => '2011 a 2013'
            ],

            [
                'id' => 3859,
                'brand_id' => 118,
                'fipe_code' => '816004-0',
                'model' => 'SUPER CAB 100cc',
                'years' => '1997 a 2001'
            ],

            [
                'id' => 3860,
                'brand_id' => 118,
                'fipe_code' => '816005-8',
                'model' => 'SUPER CAB 50cc',
                'years' => '1995 a 2006'
            ],

            [
                'id' => 3861,
                'brand_id' => 118,
                'fipe_code' => '816007-4',
                'model' => 'TN 125',
                'years' => '1995 a 1996'
            ],

            [
                'id' => 4560,
                'brand_id' => 118,
                'fipe_code' => '816024-4',
                'model' => 'WAY 125',
                'years' => '2008 a 2009'
            ],

            [
                'id' => 4152,
                'brand_id' => 118,
                'fipe_code' => '816021-0',
                'model' => 'WIN 110',
                'years' => '2006 a 2013'
            ],

            [
                'id' => 7221,
                'brand_id' => 118,
                'fipe_code' => '816035-0',
                'model' => 'WIN ELECTRA 1000W (Elétrica)',
                'years' => '2012 a 2013'
            ]
        ];

        $TRAXXModels = [
            [
                'id' => 3863,
                'brand_id' => 119,
                'fipe_code' => '814001-4',
                'model' => 'CJ 50-F',
                'years' => '1995 a 2000'
            ],

            [
                'id' => 6368,
                'brand_id' => 119,
                'fipe_code' => '814015-4',
                'model' => 'DUNNA 600cc',
                'years' => '2012 a 2012'
            ],

            [
                'id' => 3864,
                'brand_id' => 119,
                'fipe_code' => '814003-0',
                'model' => 'JH 125 G/ BEST',
                'years' => '1995 a 2007'
            ],

            [
                'id' => 3865,
                'brand_id' => 119,
                'fipe_code' => '814002-2',
                'model' => 'JH 125 L/ FLY',
                'years' => '1995 a 2012'
            ],

            [
                'id' => 4657,
                'brand_id' => 119,
                'fipe_code' => '814010-3',
                'model' => 'JH 125-35A  JOTO / JH 135-35A JOTO',
                'years' => '2008 a 2013'
            ],

            [
                'id' => 7300,
                'brand_id' => 119,
                'fipe_code' => '814020-0',
                'model' => 'JH 150 FLY',
                'years' => '2016 a 2017'
            ],

            [
                'id' => 7337,
                'brand_id' => 119,
                'fipe_code' => '814021-9',
                'model' => 'JH 150-7 TSS 150',
                'years' => '2016 a 2017'
            ],

            [
                'id' => 7111,
                'brand_id' => 119,
                'fipe_code' => '814018-9',
                'model' => 'JH 250 FLY',
                'years' => '2015 a 2017'
            ],

            [
                'id' => 7249,
                'brand_id' => 119,
                'fipe_code' => '814019-7',
                'model' => 'JH 250-8 TSS 250',
                'years' => '2015 a 2016'
            ],

            [
                'id' => 4881,
                'brand_id' => 119,
                'fipe_code' => '814011-1',
                'model' => 'JH 250E-5 SHARK',
                'years' => '2009 a 2011'
            ],

            [
                'id' => 3866,
                'brand_id' => 119,
                'fipe_code' => '814004-9',
                'model' => 'JH 50',
                'years' => '1995 a 2000'
            ],

            [
                'id' => 3867,
                'brand_id' => 119,
                'fipe_code' => '814006-5',
                'model' => 'JH 70',
                'years' => '1995 a 1998'
            ],

            [
                'id' => 3868,
                'brand_id' => 119,
                'fipe_code' => '814005-7',
                'model' => 'JH 70 III',
                'years' => '1995 a 2000'
            ],

            [
                'id' => 4179,
                'brand_id' => 119,
                'fipe_code' => '814009-0',
                'model' => 'JL 110-11 PRINCE',
                'years' => '2006 a 2007'
            ],

            [
                'id' => 3869,
                'brand_id' => 119,
                'fipe_code' => '814007-3',
                'model' => 'JL 110-3/ 110-8/ SKY',
                'years' => '2003 a 2011'
            ],

            [
                'id' => 5548,
                'brand_id' => 119,
                'fipe_code' => '814013-8',
                'model' => 'JL 125-9 SKY',
                'years' => '2011 a 2017'
            ],

            [
                'id' => 6197,
                'brand_id' => 119,
                'fipe_code' => '814014-6',
                'model' => 'JL 135 FLY',
                'years' => '2012 a 2012'
            ],

            [
                'id' => 3870,
                'brand_id' => 119,
                'fipe_code' => '814008-1',
                'model' => 'JL 50 Q-2/ STAR',
                'years' => '2004 a 2016'
            ],

            [
                'id' => 6503,
                'brand_id' => 119,
                'fipe_code' => '814016-2',
                'model' => 'JL 50 Q8/MOBY 50',
                'years' => '2013 a 2016'
            ],

            [
                'id' => 7412,
                'brand_id' => 119,
                'fipe_code' => '814023-5',
                'model' => 'JS 250 ATV-5 MONTEZ 250',
                'years' => '2009 a 2015'
            ],

            [
                'id' => 6978,
                'brand_id' => 119,
                'fipe_code' => '814017-0',
                'model' => 'SKY 50',
                'years' => '2014 a 2016'
            ],

            [
                'id' => 7386,
                'brand_id' => 119,
                'fipe_code' => '814022-7',
                'model' => 'SKY 50 PLUS',
                'years' => '2016 a 2017'
            ],

            [
                'id' => 5266,
                'brand_id' => 119,
                'fipe_code' => '814012-0',
                'model' => 'WORK 125',
                'years' => '2010 a 2016'
            ]
        ];

        $MIZAModels = [
            [
                'id' => 4353,
                'brand_id' => 126,
                'fipe_code' => '848004-4',
                'model' => 'DRAGO LJ 150-7',
                'years' => '2007 a 2011'
            ],

            [
                'id' => 4178,
                'brand_id' => 126,
                'fipe_code' => '848001-0',
                'model' => 'EASY LJ 110-10',
                'years' => '2006 a 2007'
            ],

            [
                'id' => 4426,
                'brand_id' => 126,
                'fipe_code' => '848006-0',
                'model' => 'EASY LJ 125-10',
                'years' => '2007 a 2011'
            ],

            [
                'id' => 4354,
                'brand_id' => 126,
                'fipe_code' => '848003-6',
                'model' => 'FAST LJ 150-2',
                'years' => '2007 a 2011'
            ],

            [
                'id' => 4265,
                'brand_id' => 126,
                'fipe_code' => '848002-8',
                'model' => 'Skema LJ 125-6',
                'years' => '2006 a 2011'
            ],

            [
                'id' => 4355,
                'brand_id' => 126,
                'fipe_code' => '848005-2',
                'model' => 'VITE LJ 150T-7',
                'years' => '2007 a 2011'
            ]
        ];

        $FYMModels = [
            [
                'id' => 4278,
                'brand_id' => 128,
                'fipe_code' => '849003-1',
                'model' => 'FY100-10A 100cc',
                'years' => '2006 a 2009'
            ],

            [
                'id' => 4279,
                'brand_id' => 128,
                'fipe_code' => '849004-0',
                'model' => 'FY125-19 125cc',
                'years' => '2006 a 2008'
            ],

            [
                'id' => 4280,
                'brand_id' => 128,
                'fipe_code' => '849001-5',
                'model' => 'FY125-20 Sachs 125cc',
                'years' => '2006 a 2008'
            ],

            [
                'id' => 4281,
                'brand_id' => 128,
                'fipe_code' => '849007-4',
                'model' => 'FY125EY-2 125cc',
                'years' => '2006 a 2008'
            ],

            [
                'id' => 4282,
                'brand_id' => 128,
                'fipe_code' => '849006-6',
                'model' => 'FY125Y-3 125cc',
                'years' => '2006 a 2007'
            ],

            [
                'id' => 4283,
                'brand_id' => 128,
                'fipe_code' => '849005-8',
                'model' => 'FY150-3 150cc',
                'years' => '2006 a 2008'
            ],

            [
                'id' => 4445,
                'brand_id' => 128,
                'fipe_code' => '849008-2',
                'model' => 'FY150T-18 150cc',
                'years' => '2007 a 2008'
            ],

            [
                'id' => 4284,
                'brand_id' => 128,
                'fipe_code' => '849002-3',
                'model' => 'FY250 250cc',
                'years' => '2006 a 2009'
            ]
        ];

        $KAHENAModels = [
            [
                'id' => 4747,
                'brand_id' => 129,
                'fipe_code' => '815005-2',
                'model' => '125 K-TOP',
                'years' => '2009 a 2011'
            ],

            [
                'id' => 4301,
                'brand_id' => 129,
                'fipe_code' => '815004-4',
                'model' => '125 TOP',
                'years' => '2006 a 2011'
            ],

            [
                'id' => 4837,
                'brand_id' => 129,
                'fipe_code' => '815006-0',
                'model' => '250 DUAL',
                'years' => '2009 a 2011'
            ],

            [
                'id' => 5564,
                'brand_id' => 129,
                'fipe_code' => '815007-9',
                'model' => '250 DUAL-T',
                'years' => '2010 a 2011'
            ]
        ];

        $BRAVAModels = [
            [
                'id' => 4359,
                'brand_id' => 130,
                'fipe_code' => '853001-7',
                'model' => 'YB 150T-15 150cc',
                'years' => '2007 a 2008'
            ]
        ];

        $AMAZONASModels = [
            [
                'id' => 4360,
                'brand_id' => 131,
                'fipe_code' => '855004-2',
                'model' => 'AME-110 MIX',
                'years' => '2006 a 2009'
            ],

            [
                'id' => 4361,
                'brand_id' => 131,
                'fipe_code' => '855002-6',
                'model' => 'AME-150 TC/ SC',
                'years' => '2006 a 2009'
            ],

            [
                'id' => 4362,
                'brand_id' => 131,
                'fipe_code' => '855001-8',
                'model' => 'AME-250 C1',
                'years' => '2006 a 2009'
            ],

            [
                'id' => 4363,
                'brand_id' => 131,
                'fipe_code' => '855003-4',
                'model' => 'AME-LX 125/26',
                'years' => '2006 a 2009'
            ]
        ];

        $FOXModels = [
            [
                'id' => 4364,
                'brand_id' => 132,
                'fipe_code' => '852001-1',
                'model' => '150T-3 Adventure',
                'years' => '2007 a 2009'
            ],

            [
                'id' => 4365,
                'brand_id' => 132,
                'fipe_code' => '852002-0',
                'model' => '250T-10 Elite',
                'years' => '2007 a 2009'
            ]
        ];

        $GREENModels = [
            [
                'id' => 4366,
                'brand_id' => 133,
                'fipe_code' => '854004-7',
                'model' => 'EASY 110cc',
                'years' => '2007 a 2007'
            ],

            [
                'id' => 4367,
                'brand_id' => 133,
                'fipe_code' => '854003-9',
                'model' => 'RUNNER 125cc',
                'years' => '2007 a 2007'
            ],

            [
                'id' => 4368,
                'brand_id' => 133,
                'fipe_code' => '854002-0',
                'model' => 'SAFARI 150cc',
                'years' => '2007 a 2007'
            ],

            [
                'id' => 4369,
                'brand_id' => 133,
                'fipe_code' => '854001-2',
                'model' => 'SPORT 150cc',
                'years' => '2007 a 2008'
            ]
        ];

        $SHINERAYModels = [
            [
                'id' => 10145,
                'brand_id' => 134,
                'fipe_code' => '850030-4',
                'model' => '50-Q RAY',
                'years' => '2023 a 2023'
            ],

            [
                'id' => 7299,
                'brand_id' => 134,
                'fipe_code' => '850023-1',
                'model' => 'BOLT 250',
                'years' => '2015 a 2018'
            ],

            [
                'id' => 11089,
                'brand_id' => 134,
                'fipe_code' => '850043-6',
                'model' => 'FREE 150 EFI',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 10233,
                'brand_id' => 134,
                'fipe_code' => '850032-0',
                'model' => 'PT-02 2000W (Elétrica)',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 10234,
                'brand_id' => 134,
                'fipe_code' => '850033-9',
                'model' => 'PT-02 S 2000W (Elétrica)',
                'years' => '2023 a 2023'
            ],

            [
                'id' => 9671,
                'brand_id' => 134,
                'fipe_code' => '850028-2',
                'model' => 'PT-03 2000W (Elétrica)',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 10938,
                'brand_id' => 134,
                'fipe_code' => '850038-0',
                'model' => 'PT-03 S 2000W (Elétrica)',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 7721,
                'brand_id' => 134,
                'fipe_code' => '850024-0',
                'model' => 'RETRO EX 50',
                'years' => '2017 a 2020'
            ],

            [
                'id' => 10386,
                'brand_id' => 134,
                'fipe_code' => '850034-7',
                'model' => 'SE-1 2000W (Elétrica)',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 9684,
                'brand_id' => 134,
                'fipe_code' => '850029-0',
                'model' => 'SE-2 2300W (Elétrica)',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 11003,
                'brand_id' => 134,
                'fipe_code' => '850041-0',
                'model' => 'SHE-S 3000W (Elétrica)',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 10188,
                'brand_id' => 134,
                'fipe_code' => '850031-2',
                'model' => 'SHI 175',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 11156,
                'brand_id' => 134,
                'fipe_code' => '850044-4',
                'model' => 'SHI 175 S EFI',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 6861,
                'brand_id' => 134,
                'fipe_code' => '850020-7',
                'model' => 'SUN 150',
                'years' => '2014 a 2015'
            ],

            [
                'id' => 7722,
                'brand_id' => 134,
                'fipe_code' => '850025-8',
                'model' => 'SUPER SMART 50',
                'years' => '2017 a 2022'
            ],

            [
                'id' => 11064,
                'brand_id' => 134,
                'fipe_code' => '850042-8',
                'model' => 'URBAN 150 EFI',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 9640,
                'brand_id' => 134,
                'fipe_code' => '850027-4',
                'model' => 'WORKER 125',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 10855,
                'brand_id' => 134,
                'fipe_code' => '850035-5',
                'model' => 'WORKER 150',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 4370,
                'brand_id' => 134,
                'fipe_code' => '850001-0',
                'model' => 'XY 110V WAVE',
                'years' => '2005 a 2012'
            ],

            [
                'id' => 6703,
                'brand_id' => 134,
                'fipe_code' => '850017-7',
                'model' => 'XY 125 JET',
                'years' => '2014 a Zero Km'
            ],

            [
                'id' => 10898,
                'brand_id' => 134,
                'fipe_code' => '850036-3',
                'model' => 'XY 125 JET SS',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 10899,
                'brand_id' => 134,
                'fipe_code' => '850037-1',
                'model' => 'XY 125 JET SS EFI',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 6078,
                'brand_id' => 134,
                'fipe_code' => '850014-2',
                'model' => 'XY 125 NEW WAVE',
                'years' => '2012 a 2013'
            ],

            [
                'id' => 11005,
                'brand_id' => 134,
                'fipe_code' => '850040-1',
                'model' => 'XY 125 RIO EFI',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 4371,
                'brand_id' => 134,
                'fipe_code' => '850006-1',
                'model' => 'XY 125-14 ESD',
                'years' => '2006 a 2008'
            ],

            [
                'id' => 4372,
                'brand_id' => 134,
                'fipe_code' => '850002-9',
                'model' => 'XY 150 ZH',
                'years' => '2006 a 2012'
            ],

            [
                'id' => 6862,
                'brand_id' => 134,
                'fipe_code' => '850019-3',
                'model' => 'XY 150-5 Fire/Maxi Fire',
                'years' => '2014 a 2018'
            ],

            [
                'id' => 5521,
                'brand_id' => 134,
                'fipe_code' => '850010-0',
                'model' => 'XY 150-5 MAX',
                'years' => '2011 a 2013'
            ],

            [
                'id' => 4373,
                'brand_id' => 134,
                'fipe_code' => '850003-7',
                'model' => 'XY 150-5 SPEED',
                'years' => '2006 a 2011'
            ],

            [
                'id' => 9073,
                'brand_id' => 134,
                'fipe_code' => '850026-6',
                'model' => 'XY 150-8 JEF',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 11209,
                'brand_id' => 134,
                'fipe_code' => '850046-0',
                'model' => 'XY 150-8 JEF S',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 4807,
                'brand_id' => 134,
                'fipe_code' => '850009-6',
                'model' => 'XY 150-GY/EXPLORER',
                'years' => '2007 a 2018'
            ],

            [
                'id' => 11210,
                'brand_id' => 134,
                'fipe_code' => '850045-2',
                'model' => 'XY 200 STORM EFI',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 5601,
                'brand_id' => 134,
                'fipe_code' => '850012-6',
                'model' => 'XY 200-5 A RACING',
                'years' => '2011 a 2012'
            ],

            [
                'id' => 5602,
                'brand_id' => 134,
                'fipe_code' => '850013-4',
                'model' => 'XY 200-5 ROAD WIND NAKED',
                'years' => '2011 a 2011'
            ],

            [
                'id' => 4374,
                'brand_id' => 134,
                'fipe_code' => '850004-5',
                'model' => 'XY 200-5 SPEED/ XY 200-5',
                'years' => '2006 a 2011'
            ],

            [
                'id' => 4375,
                'brand_id' => 134,
                'fipe_code' => '850005-3',
                'model' => 'XY 200-III',
                'years' => '2006 a 2012'
            ],

            [
                'id' => 4461,
                'brand_id' => 134,
                'fipe_code' => '850008-8',
                'model' => 'XY 250-5',
                'years' => '2007 a 2016'
            ],

            [
                'id' => 6729,
                'brand_id' => 134,
                'fipe_code' => '850018-5',
                'model' => 'XY 250-6B DISCOVER',
                'years' => '2014 a 2018'
            ],

            [
                'id' => 4376,
                'brand_id' => 134,
                'fipe_code' => '850007-0',
                'model' => 'XY 50-Q',
                'years' => '2007 a 2012'
            ],

            [
                'id' => 6903,
                'brand_id' => 134,
                'fipe_code' => '850021-5',
                'model' => 'XY 50-Q CROSS',
                'years' => '2015 a 2020'
            ],

            [
                'id' => 10942,
                'brand_id' => 134,
                'fipe_code' => '850039-8',
                'model' => 'XY 50-Q JET S',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 5547,
                'brand_id' => 134,
                'fipe_code' => '850011-8',
                'model' => 'XY 50-Q PHOENIX',
                'years' => '2011 a Zero Km'
            ],

            [
                'id' => 6367,
                'brand_id' => 134,
                'fipe_code' => '850015-0',
                'model' => 'XY 50-Q2 RETRO/JET/BIKE',
                'years' => '2013 a Zero Km'
            ],

            [
                'id' => 6366,
                'brand_id' => 134,
                'fipe_code' => '850016-9',
                'model' => 'XY 50Q VMV',
                'years' => '2013 a 2013'
            ],

            [
                'id' => 7061,
                'brand_id' => 134,
                'fipe_code' => '850022-3',
                'model' => 'XY 50Q-2 VENICE',
                'years' => '2014 a 2015'
            ]
        ];

        $WUYANGModels = [
            [
                'id' => 7723,
                'brand_id' => 135,
                'fipe_code' => '851008-3',
                'model' => 'JET+ 50',
                'years' => '2016 a 2018'
            ],

            [
                'id' => 7442,
                'brand_id' => 135,
                'fipe_code' => '851006-7',
                'model' => 'MIND X50q',
                'years' => '2016 a 2020'
            ],

            [
                'id' => 4377,
                'brand_id' => 135,
                'fipe_code' => '851001-6',
                'model' => 'WY 125-ESD',
                'years' => '2006 a 2011'
            ],

            [
                'id' => 4820,
                'brand_id' => 135,
                'fipe_code' => '851003-2',
                'model' => 'WY 125-ESD PLUS',
                'years' => '2009 a 2011'
            ],

            [
                'id' => 4462,
                'brand_id' => 135,
                'fipe_code' => '851002-4',
                'model' => 'WY 150-EX',
                'years' => '2008 a 2011'
            ],

            [
                'id' => 5495,
                'brand_id' => 135,
                'fipe_code' => '851004-0',
                'model' => 'WY 200 ZH/CARGO 200',
                'years' => '2011 a 2017'
            ],

            [
                'id' => 7063,
                'brand_id' => 135,
                'fipe_code' => '851005-9',
                'model' => 'WY 48Q-2 LIBERTY 50',
                'years' => '2014 a 2015'
            ],

            [
                'id' => 7724,
                'brand_id' => 135,
                'fipe_code' => '851007-5',
                'model' => 'WY 48Q-2 PHOENIX + 50',
                'years' => '2015 a 2019'
            ],

            [
                'id' => 7725,
                'brand_id' => 135,
                'fipe_code' => '851009-1',
                'model' => 'WY 48Q-2 PHOENIX S 50',
                'years' => '2017 a 2018'
            ]
        ];

        $DAYANGModels = [
            [
                'id' => 4784,
                'brand_id' => 137,
                'fipe_code' => '857007-8',
                'model' => 'DY100-31',
                'years' => '2008 a 2008'
            ],

            [
                'id' => 4452,
                'brand_id' => 137,
                'fipe_code' => '857002-7',
                'model' => 'DY110-20',
                'years' => '2007 a 2010'
            ],

            [
                'id' => 6816,
                'brand_id' => 137,
                'fipe_code' => '857018-3',
                'model' => 'DY125 SPRINT',
                'years' => '2014 a 2015'
            ],

            [
                'id' => 4785,
                'brand_id' => 137,
                'fipe_code' => '857005-1',
                'model' => 'DY125-18',
                'years' => '2008 a 2008'
            ],

            [
                'id' => 5049,
                'brand_id' => 137,
                'fipe_code' => '857009-4',
                'model' => 'DY125-36A',
                'years' => '2008 a 2008'
            ],

            [
                'id' => 4707,
                'brand_id' => 137,
                'fipe_code' => '857004-3',
                'model' => 'DY125-37',
                'years' => '2008 a 2010'
            ],

            [
                'id' => 5050,
                'brand_id' => 137,
                'fipe_code' => '857008-6',
                'model' => 'DY125-5',
                'years' => '2008 a 2008'
            ],

            [
                'id' => 4786,
                'brand_id' => 137,
                'fipe_code' => '857006-0',
                'model' => 'DY125-52',
                'years' => '2008 a 2014'
            ],

            [
                'id' => 4651,
                'brand_id' => 137,
                'fipe_code' => '857003-5',
                'model' => 'DY150-12',
                'years' => '2008 a 2009'
            ],

            [
                'id' => 6817,
                'brand_id' => 137,
                'fipe_code' => '857017-5',
                'model' => 'DY150-28 THOR',
                'years' => '2014 a 2016'
            ],

            [
                'id' => 6132,
                'brand_id' => 137,
                'fipe_code' => '857010-8',
                'model' => 'DY150-58 EAGLE/COPA',
                'years' => '2013 a 2015'
            ],

            [
                'id' => 4453,
                'brand_id' => 137,
                'fipe_code' => '857001-9',
                'model' => 'DY200',
                'years' => '2007 a 2010'
            ],

            [
                'id' => 6655,
                'brand_id' => 137,
                'fipe_code' => '857014-0',
                'model' => 'DY200 REV',
                'years' => '2014 a 2015'
            ],

            [
                'id' => 6674,
                'brand_id' => 137,
                'fipe_code' => '857016-7',
                'model' => 'DY200 THOR',
                'years' => '2014 a 2015'
            ],

            [
                'id' => 6656,
                'brand_id' => 137,
                'fipe_code' => '857013-2',
                'model' => 'DY250 REV',
                'years' => '2014 a 2015'
            ],

            [
                'id' => 6675,
                'brand_id' => 137,
                'fipe_code' => '857015-9',
                'model' => 'DY250 THOR',
                'years' => '2014 a 2015'
            ],

            [
                'id' => 6133,
                'brand_id' => 137,
                'fipe_code' => '857011-6',
                'model' => 'DY50 JOB',
                'years' => '2013 a 2015'
            ],

            [
                'id' => 6134,
                'brand_id' => 137,
                'fipe_code' => '857012-4',
                'model' => 'DY50 WARRIOR',
                'years' => '2013 a 2015'
            ],

            [
                'id' => 7239,
                'brand_id' => 137,
                'fipe_code' => '857019-1',
                'model' => 'THOR 230',
                'years' => '2016 a 2016'
            ]
        ];

        $HAOBAOModels = [
            [
                'id' => 5588,
                'brand_id' => 138,
                'fipe_code' => '856005-6',
                'model' => 'HB 50Q',
                'years' => '2011 a 2014'
            ],

            [
                'id' => 4454,
                'brand_id' => 138,
                'fipe_code' => '856002-1',
                'model' => 'HB110-3',
                'years' => '2008 a 2014'
            ],

            [
                'id' => 4455,
                'brand_id' => 138,
                'fipe_code' => '856001-3',
                'model' => 'HB125-9 FEARFULSPEED',
                'years' => '2008 a 2014'
            ],

            [
                'id' => 4756,
                'brand_id' => 138,
                'fipe_code' => '856004-8',
                'model' => 'HB150',
                'years' => '2008 a 2014'
            ],

            [
                'id' => 4456,
                'brand_id' => 138,
                'fipe_code' => '856003-0',
                'model' => 'HB150-T R5 FEARFULSPEED',
                'years' => '2007 a 2011'
            ]
        ];

        $LERIVOModels = [
            [
                'id' => 4459,
                'brand_id' => 139,
                'fipe_code' => '858002-2',
                'model' => 'Formigão Furgão 200cc',
                'years' => '2005 a 2008'
            ],

            [
                'id' => 4460,
                'brand_id' => 139,
                'fipe_code' => '858001-4',
                'model' => 'Formigão Pick-Up 200cc',
                'years' => '2005 a 2008'
            ]
        ];

        $JIAPENGVOLCANOModels = [
            [
                'id' => 4510,
                'brand_id' => 141,
                'fipe_code' => '859002-8',
                'model' => 'JP 110',
                'years' => '2007 a 2007'
            ],

            [
                'id' => 4511,
                'brand_id' => 141,
                'fipe_code' => '859001-0',
                'model' => 'JP 150',
                'years' => '2007 a 2009'
            ]
        ];

        $DAYUNModels = [
            [
                'id' => 4537,
                'brand_id' => 142,
                'fipe_code' => '860001-5',
                'model' => 'DY110-6',
                'years' => '2008 a 2011'
            ],

            [
                'id' => 4538,
                'brand_id' => 142,
                'fipe_code' => '860003-1',
                'model' => 'DY125-8',
                'years' => '2008 a 2008'
            ],

            [
                'id' => 4539,
                'brand_id' => 142,
                'fipe_code' => '860002-3',
                'model' => 'DY125T-10',
                'years' => '2008 a 2011'
            ],

            [
                'id' => 4540,
                'brand_id' => 142,
                'fipe_code' => '860004-0',
                'model' => 'DY150-7',
                'years' => '2008 a 2011'
            ],

            [
                'id' => 4541,
                'brand_id' => 142,
                'fipe_code' => '860005-8',
                'model' => 'DY150-9',
                'years' => '2008 a 2011'
            ],

            [
                'id' => 4542,
                'brand_id' => 142,
                'fipe_code' => '860006-6',
                'model' => 'DY150GY',
                'years' => '2008 a 2011'
            ],

            [
                'id' => 4543,
                'brand_id' => 142,
                'fipe_code' => '860007-4',
                'model' => 'DY150ZH   (triciclo carga)',
                'years' => '2008 a 2010'
            ],

            [
                'id' => 5152,
                'brand_id' => 142,
                'fipe_code' => '860009-0',
                'model' => 'DY200ZH  (triciclo carga)',
                'years' => '2010 a 2011'
            ],

            [
                'id' => 4544,
                'brand_id' => 142,
                'fipe_code' => '860008-2',
                'model' => 'DY250-2',
                'years' => '2008 a 2008'
            ]
        ];

        $GARINNIModels = [
            [
                'id' => 4548,
                'brand_id' => 143,
                'fipe_code' => '847001-4',
                'model' => 'GR08T4',
                'years' => '2006 a 2007'
            ],

            [
                'id' => 5287,
                'brand_id' => 143,
                'fipe_code' => '847011-1',
                'model' => 'GR125S',
                'years' => '2009 a 2009'
            ],

            [
                'id' => 4738,
                'brand_id' => 143,
                'fipe_code' => '847009-0',
                'model' => 'GR125ST',
                'years' => '2008 a 2010'
            ],

            [
                'id' => 4549,
                'brand_id' => 143,
                'fipe_code' => '847003-0',
                'model' => 'GR125T3',
                'years' => '2006 a 2009'
            ],

            [
                'id' => 4550,
                'brand_id' => 143,
                'fipe_code' => '847007-3',
                'model' => 'GR125U',
                'years' => '2007 a 2008'
            ],

            [
                'id' => 4551,
                'brand_id' => 143,
                'fipe_code' => '847002-2',
                'model' => 'GR125Z',
                'years' => '2006 a 2008'
            ],

            [
                'id' => 4552,
                'brand_id' => 143,
                'fipe_code' => '847006-5',
                'model' => 'GR150P/ GR150PI',
                'years' => '2006 a 2008'
            ],

            [
                'id' => 4739,
                'brand_id' => 143,
                'fipe_code' => '847008-1',
                'model' => 'GR150ST',
                'years' => '2007 a 2011'
            ],

            [
                'id' => 4553,
                'brand_id' => 143,
                'fipe_code' => '847004-9',
                'model' => 'GR150T3/ GR150TI',
                'years' => '2006 a 2009'
            ],

            [
                'id' => 4554,
                'brand_id' => 143,
                'fipe_code' => '847005-7',
                'model' => 'GR150U',
                'years' => '2006 a 2007'
            ],

            [
                'id' => 4787,
                'brand_id' => 143,
                'fipe_code' => '847010-3',
                'model' => 'GR250T3',
                'years' => '2008 a 2009'
            ]
        ];

        $DAFRAModels = [
            [
                'id' => 5200,
                'brand_id' => 145,
                'fipe_code' => '861009-6',
                'model' => 'APACHE 150cc',
                'years' => '2010 a 2015'
            ],

            [
                'id' => 8677,
                'brand_id' => 145,
                'fipe_code' => '861025-8',
                'model' => 'APACHE RTR 200cc',
                'years' => '2019 a Zero Km'
            ],

            [
                'id' => 7126,
                'brand_id' => 145,
                'fipe_code' => '861020-7',
                'model' => 'CITYCLASS 200i',
                'years' => '2015 a 2020'
            ],

            [
                'id' => 5382,
                'brand_id' => 145,
                'fipe_code' => '861010-0',
                'model' => 'CITYCOM 300i',
                'years' => '2011 a 2016'
            ],

            [
                'id' => 9070,
                'brand_id' => 145,
                'fipe_code' => '861027-4',
                'model' => 'CITYCOM HD 300i',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 7496,
                'brand_id' => 145,
                'fipe_code' => '861022-3',
                'model' => 'CITYCOM S 300i/300i ABS',
                'years' => '2017 a Zero Km'
            ],

            [
                'id' => 9568,
                'brand_id' => 145,
                'fipe_code' => '861029-0',
                'model' => 'CRUISYM 150',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 10229,
                'brand_id' => 145,
                'fipe_code' => '861030-4',
                'model' => 'CRUISYM 300 ',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 7675,
                'brand_id' => 145,
                'fipe_code' => '861023-1',
                'model' => 'FIDDLE III 125',
                'years' => '2017 a 2018'
            ],

            [
                'id' => 7381,
                'brand_id' => 145,
                'fipe_code' => '861021-5',
                'model' => 'HORIZON 150',
                'years' => '2016 a 2022'
            ],

            [
                'id' => 6494,
                'brand_id' => 145,
                'fipe_code' => '861018-5',
                'model' => 'HORIZON 250',
                'years' => '2013 a 2017'
            ],

            [
                'id' => 4588,
                'brand_id' => 145,
                'fipe_code' => '861003-7',
                'model' => 'KANSAS 150',
                'years' => '2008 a 2015'
            ],

            [
                'id' => 4910,
                'brand_id' => 145,
                'fipe_code' => '861006-1',
                'model' => 'KANSAS 250',
                'years' => '2009 a 2009'
            ],

            [
                'id' => 4589,
                'brand_id' => 145,
                'fipe_code' => '861004-5',
                'model' => 'LASER 150',
                'years' => '2008 a 2010'
            ],

            [
                'id' => 6815,
                'brand_id' => 145,
                'fipe_code' => '861019-3',
                'model' => 'MAXSYM 400i',
                'years' => '2015 a Zero Km'
            ],

            [
                'id' => 5984,
                'brand_id' => 145,
                'fipe_code' => '861016-9',
                'model' => 'NEXT 250cc',
                'years' => '2013 a 2017'
            ],

            [
                'id' => 8375,
                'brand_id' => 145,
                'fipe_code' => '861024-0',
                'model' => 'NEXT 300cc',
                'years' => '2019 a 2020'
            ],

            [
                'id' => 8973,
                'brand_id' => 145,
                'fipe_code' => '861026-6',
                'model' => 'NH 190',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 10643,
                'brand_id' => 145,
                'fipe_code' => '861031-2',
                'model' => 'NH 300',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 5753,
                'brand_id' => 145,
                'fipe_code' => '861014-2',
                'model' => 'RIVA 150cc',
                'years' => '2012 a 2017'
            ],

            [
                'id' => 6364,
                'brand_id' => 145,
                'fipe_code' => '861017-7',
                'model' => 'RIVA Cargo 150cc',
                'years' => '2013 a 2016'
            ],

            [
                'id' => 5754,
                'brand_id' => 145,
                'fipe_code' => '861015-0',
                'model' => 'ROADWIN 250R',
                'years' => '2012 a 2015'
            ],

            [
                'id' => 5119,
                'brand_id' => 145,
                'fipe_code' => '861008-8',
                'model' => 'SMART 125cc',
                'years' => '2010 a 2015'
            ],

            [
                'id' => 9155,
                'brand_id' => 145,
                'fipe_code' => '861028-2',
                'model' => 'SPEED  Cargo 150',
                'years' => '2010 a 2012'
            ],

            [
                'id' => 4590,
                'brand_id' => 145,
                'fipe_code' => '861002-9',
                'model' => 'SPEED 150',
                'years' => '2008 a 2015'
            ],

            [
                'id' => 4591,
                'brand_id' => 145,
                'fipe_code' => '861001-0',
                'model' => 'SUPER 100',
                'years' => '2008 a 2015'
            ],

            [
                'id' => 5383,
                'brand_id' => 145,
                'fipe_code' => '861011-8',
                'model' => 'SUPER 50',
                'years' => '2011 a 2017'
            ],

            [
                'id' => 5120,
                'brand_id' => 145,
                'fipe_code' => '861007-0',
                'model' => 'ZIG 100',
                'years' => '2010 a 2012'
            ],

            [
                'id' => 5587,
                'brand_id' => 145,
                'fipe_code' => '861012-6',
                'model' => 'ZIG 100+',
                'years' => '2012 a 2016'
            ],

            [
                'id' => 5657,
                'brand_id' => 145,
                'fipe_code' => '861013-4',
                'model' => 'ZIG 50',
                'years' => '2012 a 2017'
            ]
        ];

        $MalagutiModels = [
            [
                'id' => 4634,
                'brand_id' => 146,
                'fipe_code' => '862002-4',
                'model' => 'CIAK MASTER 200',
                'years' => '2007 a 2007'
            ],

            [
                'id' => 4635,
                'brand_id' => 146,
                'fipe_code' => '862001-6',
                'model' => 'SPIDER MAXGT 500',
                'years' => '2007 a 2008'
            ]
        ];

        $LonVModels = [
            [
                'id' => 5226,
                'brand_id' => 148,
                'fipe_code' => '863004-6',
                'model' => 'DELUXE 152cc',
                'years' => '2010 a 2013'
            ],

            [
                'id' => 5264,
                'brand_id' => 148,
                'fipe_code' => '863006-2',
                'model' => 'E RETRÔ 2000 Watts (Elétrica)',
                'years' => '2010 a 2010'
            ],

            [
                'id' => 5265,
                'brand_id' => 148,
                'fipe_code' => '863005-4',
                'model' => 'LY 125T -5 RETRÔ',
                'years' => '2009 a 2012'
            ],

            [
                'id' => 4653,
                'brand_id' => 148,
                'fipe_code' => '863003-8',
                'model' => 'LY 150T-5 RETRÔ',
                'years' => '2008 a 2013'
            ],

            [
                'id' => 4654,
                'brand_id' => 148,
                'fipe_code' => '863002-0',
                'model' => 'LY 150T-6A CLASSIC',
                'years' => '2008 a 2009'
            ],

            [
                'id' => 4655,
                'brand_id' => 148,
                'fipe_code' => '863001-1',
                'model' => 'LY 150T-7A RACER LIMITED EDITION',
                'years' => '2008 a 2009'
            ]
        ];

        $BRPModels = [
            [
                'id' => 10789,
                'brand_id' => 150,
                'fipe_code' => '864056-4',
                'model' => 'can-am Commander MAX DPS 1000R',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 11142,
                'brand_id' => 150,
                'fipe_code' => '864058-0',
                'model' => 'can-am Defen. 976 MAX LTD HD10 4x4 (UTV)',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 10768,
                'brand_id' => 150,
                'fipe_code' => '864055-6',
                'model' => 'can-am Defender 650 DPS HD7 4x4 (UTV)',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 10417,
                'brand_id' => 150,
                'fipe_code' => '864054-8',
                'model' => 'can-am Defender 650 MAX HD7 4x4 (UTV)',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 8758,
                'brand_id' => 150,
                'fipe_code' => '864041-6',
                'model' => 'can-am Defender 800 MAX DPS 4x4 (UTV)',
                'years' => '2018 a 2020'
            ],

            [
                'id' => 10418,
                'brand_id' => 150,
                'fipe_code' => '864052-1',
                'model' => 'can-am Defender 976 MAX DPS 4x4 (UTV)',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 10419,
                'brand_id' => 150,
                'fipe_code' => '864053-0',
                'model' => 'can-am Defender 976 MAX HD9 4x4 (UTV)',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 5262,
                'brand_id' => 150,
                'fipe_code' => '864005-0',
                'model' => 'can-am DS 250 EFI 4X2 Quadr.',
                'years' => '2010 a Zero Km'
            ],

            [
                'id' => 8429,
                'brand_id' => 150,
                'fipe_code' => '864036-0',
                'model' => 'can-am DS 90 4X2 Quadriciclo',
                'years' => '2018 a 2022'
            ],

            [
                'id' => 9308,
                'brand_id' => 150,
                'fipe_code' => '864045-9',
                'model' => 'can-am Maver. X3 MAX XRS TB 900 RR (UTV)',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 9069,
                'brand_id' => 150,
                'fipe_code' => '864042-4',
                'model' => 'can-am Maverick MAX XRS 1000 4x4 (UTV)',
                'years' => '2017 a 2017'
            ],

            [
                'id' => 11143,
                'brand_id' => 150,
                'fipe_code' => '864059-9',
                'model' => 'can-am Maverick R XRS 999T DCT (UTV)',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 9099,
                'brand_id' => 150,
                'fipe_code' => '864043-2',
                'model' => 'can-am Maverick Sport DPS 1000 4x4 (UTV)',
                'years' => '2020 a 2020'
            ],

            [
                'id' => 8676,
                'brand_id' => 150,
                'fipe_code' => '864040-8',
                'model' => 'can-am Maverick Trail DPS 4x4 (UTV)',
                'years' => '2018 a 2020'
            ],

            [
                'id' => 9309,
                'brand_id' => 150,
                'fipe_code' => '864047-5',
                'model' => 'Can-am Maverick X3 MAX DS TB 900 R (UTV)',
                'years' => '2021 a 2021'
            ],

            [
                'id' => 9363,
                'brand_id' => 150,
                'fipe_code' => '864048-3',
                'model' => 'can-am Maverick X3 MAX DS Turbo (UTV)',
                'years' => '2021 a 2021'
            ],

            [
                'id' => 9364,
                'brand_id' => 150,
                'fipe_code' => '864049-1',
                'model' => 'can-am Maverick X3 RS Turbo R(UTV)',
                'years' => '2021 a 2021'
            ],

            [
                'id' => 9236,
                'brand_id' => 150,
                'fipe_code' => '864044-0',
                'model' => 'can-am Maverick X3 XRC 900 TB RR  (UTV)',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 9310,
                'brand_id' => 150,
                'fipe_code' => '864046-7',
                'model' => 'can-am Maverick X3 XRS TB 900 RR (UTV)',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 9566,
                'brand_id' => 150,
                'fipe_code' => '864051-3',
                'model' => 'can-am Oultland. Max LTD 1000R 4x4 Quad.',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 6849,
                'brand_id' => 150,
                'fipe_code' => '864008-4',
                'model' => 'can-am Outlander 400 4X4 Quadr.',
                'years' => '2014 a 2014'
            ],

            [
                'id' => 9365,
                'brand_id' => 150,
                'fipe_code' => '864050-5',
                'model' => 'can-am Outlander 450 4X4 Quadriciclo',
                'years' => '2021 a 2021'
            ],

            [
                'id' => 8430,
                'brand_id' => 150,
                'fipe_code' => '864037-8',
                'model' => 'can-am Outlander 570 4X4 Quadriciclo',
                'years' => '2018 a 2020'
            ],

            [
                'id' => 7273,
                'brand_id' => 150,
                'fipe_code' => '864023-8',
                'model' => 'can-am Outlander L 450 4X4 Quadriciclo',
                'years' => '2015 a 2016'
            ],

            [
                'id' => 7274,
                'brand_id' => 150,
                'fipe_code' => '864024-6',
                'model' => 'can-am Outlander L 500 4X4 Quadriciclo',
                'years' => '2015 a 2015'
            ],

            [
                'id' => 7641,
                'brand_id' => 150,
                'fipe_code' => '864029-7',
                'model' => 'can-am Outlander L 570 4X4 Quadriciclo',
                'years' => '2016 a 2016'
            ],

            [
                'id' => 7275,
                'brand_id' => 150,
                'fipe_code' => '864026-2',
                'model' => 'can-am Outlander L DPS 500 4X4 Quadr.',
                'years' => '2015 a 2015'
            ],

            [
                'id' => 7642,
                'brand_id' => 150,
                'fipe_code' => '864030-0',
                'model' => 'can-am Outlander L DPS 570 4X4 Quadr.',
                'years' => '2016 a 2016'
            ],

            [
                'id' => 7276,
                'brand_id' => 150,
                'fipe_code' => '864025-4',
                'model' => 'can-am Outlander L MAX 450 4X4 Quadr.',
                'years' => '2015 a 2016'
            ],

            [
                'id' => 7277,
                'brand_id' => 150,
                'fipe_code' => '864027-0',
                'model' => 'can-am Outlander L MAX DPS 500 4X4 Quad.',
                'years' => '2015 a 2015'
            ],

            [
                'id' => 7643,
                'brand_id' => 150,
                'fipe_code' => '864031-9',
                'model' => 'can-am Outlander L X MR 570 4X4 Quadr.',
                'years' => '2016 a 2016'
            ],

            [
                'id' => 7644,
                'brand_id' => 150,
                'fipe_code' => '864032-7',
                'model' => 'can-am Outlander MAX  XT 850 4X4 Quadr.',
                'years' => '2016 a Zero Km'
            ],

            [
                'id' => 6850,
                'brand_id' => 150,
                'fipe_code' => '864010-6',
                'model' => 'can-am Outlander MAX 400 4X4 Quadr.',
                'years' => '2014 a 2015'
            ],

            [
                'id' => 8431,
                'brand_id' => 150,
                'fipe_code' => '864038-6',
                'model' => 'can-am Outlander MAX 570 4X4 Quadriciclo',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 8134,
                'brand_id' => 150,
                'fipe_code' => '864035-1',
                'model' => 'can-am Outlander MAX DPS 570 4x4 Quadri.',
                'years' => '2016 a 2017'
            ],

            [
                'id' => 6851,
                'brand_id' => 150,
                'fipe_code' => '864016-5',
                'model' => 'can-am Outlander MAX L.1000 4X4 Quadr.',
                'years' => '2014 a 2016'
            ],

            [
                'id' => 6852,
                'brand_id' => 150,
                'fipe_code' => '864017-3',
                'model' => 'can-am Outlander MAX XT 400 4X4 Quadr.',
                'years' => '2011 a 2015'
            ],

            [
                'id' => 6853,
                'brand_id' => 150,
                'fipe_code' => '864012-2',
                'model' => 'can-am Outlander MAX XT 650 4X4 Quadr.',
                'years' => '2014 a 2020'
            ],

            [
                'id' => 11051,
                'brand_id' => 150,
                'fipe_code' => '864057-2',
                'model' => 'can-am Outlander MAX XT 700 4X4 Quadr.',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 7278,
                'brand_id' => 150,
                'fipe_code' => '864022-0',
                'model' => 'can-am Outlander MAX XT 800R 4X4 Quadr.',
                'years' => '2015 a 2015'
            ],

            [
                'id' => 7645,
                'brand_id' => 150,
                'fipe_code' => '864033-5',
                'model' => 'can-am Outlander MAX XT-P 1000 4X4 Quad.',
                'years' => '2016 a 2020'
            ],

            [
                'id' => 6854,
                'brand_id' => 150,
                'fipe_code' => '864015-7',
                'model' => 'can-am Outlander MAX XT-P 800 4X4 Quadr.',
                'years' => '2014 a 2015'
            ],

            [
                'id' => 10082,
                'brand_id' => 150,
                'fipe_code' => '864014-9',
                'model' => 'can-am Outlander X MR 1000/1000R 4X4',
                'years' => '2014 a Zero Km'
            ],

            [
                'id' => 8432,
                'brand_id' => 150,
                'fipe_code' => '864039-4',
                'model' => 'can-am Outlander X MR 570 4X4 Quadr.',
                'years' => '2018 a 2020'
            ],

            [
                'id' => 6856,
                'brand_id' => 150,
                'fipe_code' => '864011-4',
                'model' => 'can-am Outlander X MR 650 4X4 Quadr.',
                'years' => '2014 a 2016'
            ],

            [
                'id' => 7279,
                'brand_id' => 150,
                'fipe_code' => '864020-3',
                'model' => 'can-am Outlander XT 1000 6X6',
                'years' => '2015 a 2015'
            ],

            [
                'id' => 6857,
                'brand_id' => 150,
                'fipe_code' => '864009-2',
                'model' => 'can-am Outlander XT 650 4X4 Quadr.',
                'years' => '2014 a 2016'
            ],

            [
                'id' => 6858,
                'brand_id' => 150,
                'fipe_code' => '864013-0',
                'model' => 'can-am Outlander XT-P 800 4X4 Quadr.',
                'years' => '2014 a 2014'
            ],

            [
                'id' => 7280,
                'brand_id' => 150,
                'fipe_code' => '864021-1',
                'model' => 'can-am Outlander XT-P1000 4X4 Quadr.',
                'years' => '2015 a 2019'
            ],

            [
                'id' => 7328,
                'brand_id' => 150,
                'fipe_code' => '864028-9',
                'model' => 'can-am Spyder 1330 F3-S',
                'years' => '2015 a 2018'
            ],

            [
                'id' => 6944,
                'brand_id' => 150,
                'fipe_code' => '864018-1',
                'model' => 'can-am Spyder 1330 RT-Limited',
                'years' => '2014 a 2019'
            ],

            [
                'id' => 7220,
                'brand_id' => 150,
                'fipe_code' => '864019-0',
                'model' => 'can-am Spyder 1330 RT-S',
                'years' => '2014 a 2015'
            ],

            [
                'id' => 4698,
                'brand_id' => 150,
                'fipe_code' => '864001-7',
                'model' => 'can-am Spyder 990 RS',
                'years' => '2008 a 2015'
            ],

            [
                'id' => 5197,
                'brand_id' => 150,
                'fipe_code' => '864002-5',
                'model' => 'can-am Spyder 990 RS-S',
                'years' => '2010 a 2014'
            ],

            [
                'id' => 5198,
                'brand_id' => 150,
                'fipe_code' => '864003-3',
                'model' => 'can-am Spyder 990 RT Techno',
                'years' => '2010 a 2011'
            ],

            [
                'id' => 5752,
                'brand_id' => 150,
                'fipe_code' => '864006-8',
                'model' => 'can-am Spyder 990 RT-Limited',
                'years' => '2011 a 2014'
            ],

            [
                'id' => 5199,
                'brand_id' => 150,
                'fipe_code' => '864004-1',
                'model' => 'can-am Spyder 990 RT-S',
                'years' => '2010 a 2014'
            ],

            [
                'id' => 6814,
                'brand_id' => 150,
                'fipe_code' => '864007-6',
                'model' => 'can-am Spyder 990 ST-S',
                'years' => '2013 a 2014'
            ],

            [
                'id' => 7820,
                'brand_id' => 150,
                'fipe_code' => '864034-3',
                'model' => 'can-am Spyder Daytona 1330 F3-S',
                'years' => '2017 a 2017'
            ]
        ];

        $JONNYModels = [
            [
                'id' => 4710,
                'brand_id' => 151,
                'fipe_code' => '865001-2',
                'model' => 'ATLANTIC 150cc',
                'years' => '2006 a 2011'
            ],

            [
                'id' => 4711,
                'brand_id' => 151,
                'fipe_code' => '865006-3',
                'model' => 'ATLANTIC 250cc',
                'years' => '2008 a 2011'
            ],

            [
                'id' => 4712,
                'brand_id' => 151,
                'fipe_code' => '865002-0',
                'model' => 'HYPE 110cc',
                'years' => '2007 a 2012'
            ],

            [
                'id' => 6136,
                'brand_id' => 151,
                'fipe_code' => '865013-6',
                'model' => 'HYPE 125cc',
                'years' => '2012 a 2012'
            ],

            [
                'id' => 5096,
                'brand_id' => 151,
                'fipe_code' => '865008-0',
                'model' => 'HYPE 50cc',
                'years' => '2010 a 2014'
            ],

            [
                'id' => 4713,
                'brand_id' => 151,
                'fipe_code' => '865003-9',
                'model' => 'JONNY 50 49cc',
                'years' => '2006 a 2013'
            ],

            [
                'id' => 6603,
                'brand_id' => 151,
                'fipe_code' => '865014-4',
                'model' => 'Meet 50cc',
                'years' => '2013 a 2014'
            ],

            [
                'id' => 6137,
                'brand_id' => 151,
                'fipe_code' => '865010-1',
                'model' => 'Naked 150cc',
                'years' => '2012 a 2012'
            ],

            [
                'id' => 4714,
                'brand_id' => 151,
                'fipe_code' => '865004-7',
                'model' => 'Orbit 150cc',
                'years' => '2006 a 2011'
            ],

            [
                'id' => 4715,
                'brand_id' => 151,
                'fipe_code' => '865007-1',
                'model' => 'PEGASUS 150cc',
                'years' => '2006 a 2011'
            ],

            [
                'id' => 5563,
                'brand_id' => 151,
                'fipe_code' => '865009-8',
                'model' => 'QUICK 150cc',
                'years' => '2011 a 2014'
            ],

            [
                'id' => 6138,
                'brand_id' => 151,
                'fipe_code' => '865011-0',
                'model' => 'RACER 150cc',
                'years' => '2012 a 2013'
            ],

            [
                'id' => 6139,
                'brand_id' => 151,
                'fipe_code' => '865012-8',
                'model' => 'TEXAS 150cc',
                'years' => '2011 a 2013'
            ],

            [
                'id' => 4716,
                'brand_id' => 151,
                'fipe_code' => '865005-5',
                'model' => 'TR 150cc',
                'years' => '2006 a 2012'
            ]
        ];

        $BUENOModels = [
            [
                'id' => 4873,
                'brand_id' => 155,
                'fipe_code' => '866001-8',
                'model' => 'JBr 125e',
                'years' => '2009 a 2012'
            ],

            [
                'id' => 4874,
                'brand_id' => 155,
                'fipe_code' => '866002-6',
                'model' => 'JBr 150e',
                'years' => '2009 a 2011'
            ],

            [
                'id' => 4875,
                'brand_id' => 155,
                'fipe_code' => '866003-4',
                'model' => 'JBr 250e',
                'years' => '2009 a 2011'
            ]
        ];

        $IROSModels = [
            [
                'id' => 4941,
                'brand_id' => 158,
                'fipe_code' => '867001-3',
                'model' => 'ACTION 100 ES',
                'years' => '2009 a 2012'
            ],

            [
                'id' => 4942,
                'brand_id' => 158,
                'fipe_code' => '867002-1',
                'model' => 'ACTION 100 ESA',
                'years' => '2009 a 2009'
            ],

            [
                'id' => 4943,
                'brand_id' => 158,
                'fipe_code' => '867011-0',
                'model' => 'Brave 150 QUADRICICLO',
                'years' => '2009 a 2011'
            ],

            [
                'id' => 4944,
                'brand_id' => 158,
                'fipe_code' => '867012-9',
                'model' => 'Brave 450 QUADRICICLO',
                'years' => '2009 a 2010'
            ],

            [
                'id' => 4945,
                'brand_id' => 158,
                'fipe_code' => '867010-2',
                'model' => 'Brave 70  QUADRICICLO',
                'years' => '2009 a 2011'
            ],

            [
                'id' => 4946,
                'brand_id' => 158,
                'fipe_code' => '867009-9',
                'model' => 'MATRIX 150',
                'years' => '2009 a 2011'
            ],

            [
                'id' => 4947,
                'brand_id' => 158,
                'fipe_code' => '867006-4',
                'model' => 'MOVING 125 ES',
                'years' => '2009 a 2013'
            ],

            [
                'id' => 4948,
                'brand_id' => 158,
                'fipe_code' => '867007-2',
                'model' => 'MOVING 125 ESD',
                'years' => '2009 a 2013'
            ],

            [
                'id' => 4949,
                'brand_id' => 158,
                'fipe_code' => '867003-0',
                'model' => 'ONE 125 ES',
                'years' => '2009 a 2013'
            ],

            [
                'id' => 4950,
                'brand_id' => 158,
                'fipe_code' => '867004-8',
                'model' => 'ONE 125 ESD',
                'years' => '2009 a 2013'
            ],

            [
                'id' => 4951,
                'brand_id' => 158,
                'fipe_code' => '867005-6',
                'model' => 'ONE 125 EX',
                'years' => '2009 a 2013'
            ],

            [
                'id' => 4952,
                'brand_id' => 158,
                'fipe_code' => '867008-0',
                'model' => 'VINTAGE 150',
                'years' => '2009 a 2012'
            ],

            [
                'id' => 4953,
                'brand_id' => 158,
                'fipe_code' => '867013-7',
                'model' => 'WARRIOR 250 QUADRICICLO',
                'years' => '2009 a 2009'
            ],

            [
                'id' => 4954,
                'brand_id' => 158,
                'fipe_code' => '867014-5',
                'model' => 'WARRIOR 400 4x4 QUADRICICLO',
                'years' => '2009 a 2009'
            ],

            [
                'id' => 4955,
                'brand_id' => 158,
                'fipe_code' => '867015-3',
                'model' => 'WARRIOR 700 4x4 QUADRICICLO',
                'years' => '2009 a 2009'
            ]
        ];

        $LANDUMModels = [
            [
                'id' => 5014,
                'brand_id' => 159,
                'fipe_code' => '869001-4',
                'model' => 'MOTO TRUCK LD 150 ZH',
                'years' => '2007 a 2007'
            ]
        ];

        $MRXModels = [
            [
                'id' => 5015,
                'brand_id' => 160,
                'fipe_code' => '868001-9',
                'model' => '230R',
                'years' => '2008 a 2010'
            ]
        ];

        $BenelliModels = [
            [
                'id' => 5043,
                'brand_id' => 162,
                'fipe_code' => '870002-8',
                'model' => 'TNT 1130 Sport evo',
                'years' => '2008 a 2008'
            ],

            [
                'id' => 5044,
                'brand_id' => 162,
                'fipe_code' => '870001-0',
                'model' => 'TNT 899',
                'years' => '2008 a 2014'
            ],

            [
                'id' => 5045,
                'brand_id' => 162,
                'fipe_code' => '870005-2',
                'model' => 'TNT Café 1130 Racer',
                'years' => '2008 a 2008'
            ],

            [
                'id' => 5046,
                'brand_id' => 162,
                'fipe_code' => '870003-6',
                'model' => 'TRE 1130 K',
                'years' => '2008 a 2014'
            ],

            [
                'id' => 5047,
                'brand_id' => 162,
                'fipe_code' => '870004-4',
                'model' => 'TRE 1130 K Amazonas',
                'years' => '2008 a 2014'
            ],

            [
                'id' => 6652,
                'brand_id' => 162,
                'fipe_code' => '870006-0',
                'model' => 'TRE 899 K',
                'years' => '2014 a 2014'
            ]
        ];

        $PEGASSIModels = [
            [
                'id' => 5155,
                'brand_id' => 164,
                'fipe_code' => '871001-5',
                'model' => 'BR III 150CC',
                'years' => '2009 a 2009'
            ]
        ];

        $REGALRAPTORModels = [
            [
                'id' => 5405,
                'brand_id' => 173,
                'fipe_code' => '872003-7',
                'model' => 'BLACK JACK 320',
                'years' => '2009 a 2011'
            ],

            [
                'id' => 5406,
                'brand_id' => 173,
                'fipe_code' => '872001-0',
                'model' => 'FENIX GOLD 240',
                'years' => '2009 a 2012'
            ],

            [
                'id' => 5407,
                'brand_id' => 173,
                'fipe_code' => '872004-5',
                'model' => 'GHOST 270/320',
                'years' => '2009 a 2011'
            ],

            [
                'id' => 5408,
                'brand_id' => 173,
                'fipe_code' => '872002-9',
                'model' => 'SPYDER 320',
                'years' => '2009 a 2014'
            ]
        ];

        $JOHNNYPAGModels = [
            [
                'id' => 5433,
                'brand_id' => 174,
                'fipe_code' => '875003-3',
                'model' => 'BARHOG 300cc',
                'years' => '2010 a 2011'
            ],

            [
                'id' => 5434,
                'brand_id' => 174,
                'fipe_code' => '875001-7',
                'model' => 'PROSTREET 300cc',
                'years' => '2009 a 2010'
            ],

            [
                'id' => 5435,
                'brand_id' => 174,
                'fipe_code' => '875002-5',
                'model' => 'SPYDER 300cc',
                'years' => '2010 a 2011'
            ]
        ];

        $MAGRAOTRICICLOSModels = [
            [
                'id' => 6218,
                'brand_id' => 175,
                'fipe_code' => '873003-2',
                'model' => 'MT7 CHOPPER 1.6 Pop',
                'years' => '2012 a 2016'
            ],

            [
                'id' => 5438,
                'brand_id' => 175,
                'fipe_code' => '873001-6',
                'model' => 'MT7 CHOPPER 1.6 Std.',
                'years' => '2008 a 2019'
            ],

            [
                'id' => 5439,
                'brand_id' => 175,
                'fipe_code' => '873002-4',
                'model' => 'MT7 CHOPPER 1.6 Top.',
                'years' => '2008 a 2019'
            ]
        ];

        $TARGOSModels = [
            [
                'id' => 5440,
                'brand_id' => 176,
                'fipe_code' => '874001-1',
                'model' => 'TRIMOTO 125cc Picape',
                'years' => '2010 a 2011'
            ],

            [
                'id' => 5441,
                'brand_id' => 176,
                'fipe_code' => '874002-0',
                'model' => 'TRIMOTO 125cc Picape Baú',
                'years' => '2010 a 2011'
            ]
        ];

        $LIFANModels = [
            [
                'id' => 5565,
                'brand_id' => 178,
                'fipe_code' => '876001-2',
                'model' => 'CARGO 200 ZH (triciclo carga)',
                'years' => '2008 a 2011'
            ]
        ];

        $VENTOModels = [
            [
                'id' => 5603,
                'brand_id' => 180,
                'fipe_code' => '877001-8',
                'model' => 'REBELLIAN 250',
                'years' => '2011 a 2011'
            ],

            [
                'id' => 5604,
                'brand_id' => 180,
                'fipe_code' => '877002-6',
                'model' => 'TRITON Li 150',
                'years' => '2011 a 2011'
            ],

            [
                'id' => 5605,
                'brand_id' => 180,
                'fipe_code' => '877003-4',
                'model' => 'VTHUNDER 250',
                'years' => '2011 a 2013'
            ]
        ];

        $TIGERModels = [
            [
                'id' => 6336,
                'brand_id' => 187,
                'fipe_code' => '878004-8',
                'model' => 'Trciclo TC Cargo Chassi',
                'years' => '2010 a 2015'
            ],

            [
                'id' => 6337,
                'brand_id' => 187,
                'fipe_code' => '878003-0',
                'model' => 'Triciclo TB Cargo Bau',
                'years' => '2010 a 2015'
            ],

            [
                'id' => 6312,
                'brand_id' => 187,
                'fipe_code' => '878002-1',
                'model' => 'Triciclo TC Cargo Carroceria',
                'years' => '2011 a 2015'
            ],

            [
                'id' => 6313,
                'brand_id' => 187,
                'fipe_code' => '878001-3',
                'model' => 'Triciclo TC Cargo Plataforma',
                'years' => '2011 a 2015'
            ]
        ];

        $RoyalEnfieldModels = [
            [
                'id' => 7942,
                'brand_id' => 192,
                'fipe_code' => '879008-6',
                'model' => 'Bullet 500',
                'years' => '2016 a 2020'
            ],

            [
                'id' => 7943,
                'brand_id' => 192,
                'fipe_code' => '879007-8',
                'model' => 'Classic 500 EFI',
                'years' => '2016 a 2022'
            ],

            [
                'id' => 7944,
                'brand_id' => 192,
                'fipe_code' => '879006-0',
                'model' => 'Classic Battle Green 500 EFI',
                'years' => '2016 a 2022'
            ],

            [
                'id' => 10120,
                'brand_id' => 192,
                'fipe_code' => '879030-2',
                'model' => 'Classic Chrome 350cc ABS',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 7945,
                'brand_id' => 192,
                'fipe_code' => '879003-5',
                'model' => 'Classic Chrome 500 EFI',
                'years' => '2016 a 2020'
            ],

            [
                'id' => 10121,
                'brand_id' => 192,
                'fipe_code' => '879029-9',
                'model' => 'Classic Dark 350cc ABS',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 7946,
                'brand_id' => 192,
                'fipe_code' => '879005-1',
                'model' => 'Classic Desert Storm 500 EFI',
                'years' => '2016 a 2020'
            ],

            [
                'id' => 8223,
                'brand_id' => 192,
                'fipe_code' => '879011-6',
                'model' => 'Classic Gun Metal Grey 500 EFI',
                'years' => '2018 a 2020'
            ],

            [
                'id' => 10122,
                'brand_id' => 192,
                'fipe_code' => '879027-2',
                'model' => 'Classic Halcyon 350cc ABS',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 8494,
                'brand_id' => 192,
                'fipe_code' => '879012-4',
                'model' => 'Classic Pegasus 500 EFI',
                'years' => '2018 a 2019'
            ],

            [
                'id' => 8189,
                'brand_id' => 192,
                'fipe_code' => '879009-4',
                'model' => 'Classic Redditch 500 EFI',
                'years' => '2018 a 2018'
            ],

            [
                'id' => 10123,
                'brand_id' => 192,
                'fipe_code' => '879028-0',
                'model' => 'Classic Signals 350cc ABS',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 7947,
                'brand_id' => 192,
                'fipe_code' => '879004-3',
                'model' => 'Classic Squadron Blue 500 EFI',
                'years' => '2016 a 2020'
            ],

            [
                'id' => 8224,
                'brand_id' => 192,
                'fipe_code' => '879010-8',
                'model' => 'Classic Stealth Black 500 EFI',
                'years' => '2018 a 2020'
            ],

            [
                'id' => 9507,
                'brand_id' => 192,
                'fipe_code' => '879021-3',
                'model' => 'Classic Tribute Black 500 EFI',
                'years' => '2022 a 2022'
            ],

            [
                'id' => 6476,
                'brand_id' => 192,
                'fipe_code' => '879001-9',
                'model' => 'Classic/Classic Chrome 500cc',
                'years' => '2013 a 2013'
            ],

            [
                'id' => 7948,
                'brand_id' => 192,
                'fipe_code' => '879002-7',
                'model' => 'Continental 535 EFI',
                'years' => '2016 a 2017'
            ],

            [
                'id' => 10083,
                'brand_id' => 192,
                'fipe_code' => '879026-4',
                'model' => 'Continental GT 120 Year Edit. 650cc ABS',
                'years' => '2022 a 2022'
            ],

            [
                'id' => 8999,
                'brand_id' => 192,
                'fipe_code' => '879017-5',
                'model' => 'Continental GT 650cc ABS',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 9000,
                'brand_id' => 192,
                'fipe_code' => '879019-1',
                'model' => 'Continental GT Custom 650cc ABS',
                'years' => '2019 a Zero Km'
            ],

            [
                'id' => 9001,
                'brand_id' => 192,
                'fipe_code' => '879020-5',
                'model' => 'Continental GT Spec. Colorway 650cc ABS',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 8582,
                'brand_id' => 192,
                'fipe_code' => '879013-2',
                'model' => 'Himalayan 411 EFI',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 8978,
                'brand_id' => 192,
                'fipe_code' => '879014-0',
                'model' => 'Himalayan Sleet 411 EFI',
                'years' => '2020 a 2020'
            ],

            [
                'id' => 10841,
                'brand_id' => 192,
                'fipe_code' => '879032-9',
                'model' => 'Hunter Dapper 350cc ABS',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 10842,
                'brand_id' => 192,
                'fipe_code' => '879033-7',
                'model' => 'Hunter Rebel 350cc ABS',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 10126,
                'brand_id' => 192,
                'fipe_code' => '879025-6',
                'model' => 'Interceptor 120 Year Edition 650cc ABS',
                'years' => '2022 a 2022'
            ],

            [
                'id' => 9002,
                'brand_id' => 192,
                'fipe_code' => '879015-9',
                'model' => 'Interceptor 650cc ABS',
                'years' => '2019 a Zero Km'
            ],

            [
                'id' => 9003,
                'brand_id' => 192,
                'fipe_code' => '879016-7',
                'model' => 'Interceptor Custom 650cc ABS',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 9004,
                'brand_id' => 192,
                'fipe_code' => '879018-3',
                'model' => 'Interceptor Special Colorway 650cc ABS',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 9572,
                'brand_id' => 192,
                'fipe_code' => '879022-1',
                'model' => 'Meteor Fireball 350cc ABS',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 9573,
                'brand_id' => 192,
                'fipe_code' => '879023-0',
                'model' => 'Meteor Stellar 350cc ABS',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 9574,
                'brand_id' => 192,
                'fipe_code' => '879024-8',
                'model' => 'Meteor Supernova 350cc ABS',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 10688,
                'brand_id' => 192,
                'fipe_code' => '879031-0',
                'model' => 'Scram 411 EFI',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 11058,
                'brand_id' => 192,
                'fipe_code' => '879034-5',
                'model' => 'Super Meteor Astral 650cc ABS',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 11059,
                'brand_id' => 192,
                'fipe_code' => '879036-1',
                'model' => 'Super Meteor Celestial 650cc ABS',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 11060,
                'brand_id' => 192,
                'fipe_code' => '879035-3',
                'model' => 'Super Meteor Interstellar 650cc ABS',
                'years' => '2025 a Zero Km'
            ]
        ];

        $RIGUETEModels = [
            [
                'id' => 6721,
                'brand_id' => 198,
                'fipe_code' => '880006-5',
                'model' => 'TRC-01 GRAN LUXO 1.6',
                'years' => '2013 a 2023'
            ],

            [
                'id' => 6761,
                'brand_id' => 198,
                'fipe_code' => '880011-1',
                'model' => 'TRC-01 GRAN LUXO 1.8',
                'years' => '2014 a 2017'
            ],

            [
                'id' => 6722,
                'brand_id' => 198,
                'fipe_code' => '880001-4',
                'model' => 'TRC-01 JUNIOR 1.8',
                'years' => '2010 a 2022'
            ],

            [
                'id' => 6723,
                'brand_id' => 198,
                'fipe_code' => '880002-2',
                'model' => 'TRC-01 JUNIOR SE 1.8',
                'years' => '2010 a 2014'
            ],

            [
                'id' => 6724,
                'brand_id' => 198,
                'fipe_code' => '880003-0',
                'model' => 'TRC-01 LUXO 1.6',
                'years' => '2010 a 2018'
            ],

            [
                'id' => 7872,
                'brand_id' => 198,
                'fipe_code' => '880012-0',
                'model' => 'TRC-01 RGT-5 1.6',
                'years' => '2017 a Zero Km'
            ],

            [
                'id' => 6725,
                'brand_id' => 198,
                'fipe_code' => '880004-9',
                'model' => 'TRC-01 SUPER LUXO 1.6',
                'years' => '2010 a 2016'
            ],

            [
                'id' => 6762,
                'brand_id' => 198,
                'fipe_code' => '880009-0',
                'model' => 'TRC-01 SUPER LUXO 1.8',
                'years' => '2014 a 2017'
            ],

            [
                'id' => 6726,
                'brand_id' => 198,
                'fipe_code' => '880005-7',
                'model' => 'TRC-01 SUPER LUXO SE 1.6',
                'years' => '2011 a 2023'
            ],

            [
                'id' => 6763,
                'brand_id' => 198,
                'fipe_code' => '880010-3',
                'model' => 'TRC-01 SUPER LUXO SE 1.8',
                'years' => '2014 a 2017'
            ],

            [
                'id' => 6727,
                'brand_id' => 198,
                'fipe_code' => '880007-3',
                'model' => 'TRC-01 VERSÃO 1 1.8',
                'years' => '2006 a 2012'
            ],

            [
                'id' => 6728,
                'brand_id' => 198,
                'fipe_code' => '880008-1',
                'model' => 'TRC-01 VERSÃO 2 1.8',
                'years' => '2006 a 2016'
            ]
        ];

        $MOTORINOModels = [
            [
                'id' => 6822,
                'brand_id' => 200,
                'fipe_code' => '881008-7',
                'model' => 'Bacio 125cc',
                'years' => '2009 a 2014'
            ],

            [
                'id' => 6823,
                'brand_id' => 200,
                'fipe_code' => '881007-9',
                'model' => 'Bellavita 150cc',
                'years' => '2009 a 2015'
            ],

            [
                'id' => 7994,
                'brand_id' => 200,
                'fipe_code' => '881013-3',
                'model' => 'Cappuccino 50cc',
                'years' => '2015 a 2015'
            ],

            [
                'id' => 10935,
                'brand_id' => 200,
                'fipe_code' => '881019-2',
                'model' => 'Cappuccino Absoluta 150cc',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 10936,
                'brand_id' => 200,
                'fipe_code' => '881018-4',
                'model' => 'Cappuccino Ousada 150cc',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 8118,
                'brand_id' => 200,
                'fipe_code' => '881014-1',
                'model' => 'Cappuccino S 50cc',
                'years' => '2015 a 2015'
            ],

            [
                'id' => 6824,
                'brand_id' => 200,
                'fipe_code' => '881010-9',
                'model' => 'Cappuccino150cc',
                'years' => '2014 a Zero Km'
            ],

            [
                'id' => 6825,
                'brand_id' => 200,
                'fipe_code' => '881004-4',
                'model' => 'Custom 150cc',
                'years' => '2012 a 2016'
            ],

            [
                'id' => 6826,
                'brand_id' => 200,
                'fipe_code' => '881003-6',
                'model' => 'Custom S 150cc',
                'years' => '2012 a 2015'
            ],

            [
                'id' => 8436,
                'brand_id' => 200,
                'fipe_code' => '881017-6',
                'model' => 'Lambreta V200 Special',
                'years' => '2018 a 2019'
            ],

            [
                'id' => 6827,
                'brand_id' => 200,
                'fipe_code' => '881001-0',
                'model' => 'Star 150cc',
                'years' => '2011 a 2013'
            ],

            [
                'id' => 6828,
                'brand_id' => 200,
                'fipe_code' => '881002-8',
                'model' => 'Star 200cc',
                'years' => '2011 a 2015'
            ],

            [
                'id' => 6829,
                'brand_id' => 200,
                'fipe_code' => '881011-7',
                'model' => 'Star Automatic 125cc',
                'years' => '2013 a 2015'
            ],

            [
                'id' => 6830,
                'brand_id' => 200,
                'fipe_code' => '881006-0',
                'model' => 'Velocette 150cc',
                'years' => '2014 a 2019'
            ],

            [
                'id' => 6831,
                'brand_id' => 200,
                'fipe_code' => '881005-2',
                'model' => 'Velvet 150cc/LT',
                'years' => '2012 a 2021'
            ],

            [
                'id' => 8119,
                'brand_id' => 200,
                'fipe_code' => '881015-0',
                'model' => 'Velvet 50cc',
                'years' => '2013 a 2013'
            ],

            [
                'id' => 8382,
                'brand_id' => 200,
                'fipe_code' => '881016-8',
                'model' => 'Velvet LT 125cc',
                'years' => '2018 a 2021'
            ],

            [
                'id' => 7248,
                'brand_id' => 200,
                'fipe_code' => '881012-5',
                'model' => 'Vitesse 150cc',
                'years' => '2013 a 2015'
            ],

            [
                'id' => 6832,
                'brand_id' => 200,
                'fipe_code' => '881009-5',
                'model' => 'Volti 3000w',
                'years' => '2013 a 2015'
            ]
        ];

        $MOTOCARModels = [
            [
                'id' => 7245,
                'brand_id' => 201,
                'fipe_code' => '882003-1',
                'model' => 'MCA-200',
                'years' => '2013 a 2016'
            ],

            [
                'id' => 8073,
                'brand_id' => 201,
                'fipe_code' => '882005-8',
                'model' => 'MCA-250',
                'years' => '2017 a 2017'
            ],

            [
                'id' => 7246,
                'brand_id' => 201,
                'fipe_code' => '882002-3',
                'model' => 'MCF-200',
                'years' => '2013 a 2016'
            ],

            [
                'id' => 8074,
                'brand_id' => 201,
                'fipe_code' => '882004-0',
                'model' => 'MCF-250',
                'years' => '2017 a 2018'
            ],

            [
                'id' => 7247,
                'brand_id' => 201,
                'fipe_code' => '882001-5',
                'model' => 'MTX-150',
                'years' => '2013 a 2016'
            ]
        ];

        $INDIANModels = [
            [
                'id' => 8465,
                'brand_id' => 202,
                'fipe_code' => '883010-0',
                'model' => 'CHIEF',
                'years' => '2018 a 2018'
            ],

            [
                'id' => 7439,
                'brand_id' => 202,
                'fipe_code' => '883002-9',
                'model' => 'CHIEF CLASSIC',
                'years' => '2015 a 2017'
            ],

            [
                'id' => 8170,
                'brand_id' => 202,
                'fipe_code' => '883008-8',
                'model' => 'CHIEF DARK HORSE',
                'years' => '2018 a 2018'
            ],

            [
                'id' => 7821,
                'brand_id' => 202,
                'fipe_code' => '883006-1',
                'model' => 'CHIEF SPRINGFIELD',
                'years' => '2017 a 2018'
            ],

            [
                'id' => 7440,
                'brand_id' => 202,
                'fipe_code' => '883003-7',
                'model' => 'CHIEF VINTAGE',
                'years' => '2015 a 2017'
            ],

            [
                'id' => 7573,
                'brand_id' => 202,
                'fipe_code' => '883004-5',
                'model' => 'CHIEFTAIN',
                'years' => '2016 a 2017'
            ],

            [
                'id' => 8171,
                'brand_id' => 202,
                'fipe_code' => '883009-6',
                'model' => 'CHIEFTAIN DARK HORSE',
                'years' => '2018 a 2018'
            ],

            [
                'id' => 7574,
                'brand_id' => 202,
                'fipe_code' => '883005-3',
                'model' => 'ROADMASTER',
                'years' => '2016 a 2018'
            ],

            [
                'id' => 7441,
                'brand_id' => 202,
                'fipe_code' => '883001-0',
                'model' => 'SCOUT',
                'years' => '2015 a 2018'
            ],

            [
                'id' => 8172,
                'brand_id' => 202,
                'fipe_code' => '883007-0',
                'model' => 'SCOUT BOBBER',
                'years' => '2018 a 2018'
            ]
        ];

        $HAOJUEModels = [
            [
                'id' => 7929,
                'brand_id' => 203,
                'fipe_code' => '885002-0',
                'model' => 'CHOPPER ROAD 150',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 8188,
                'brand_id' => 203,
                'fipe_code' => '885004-6',
                'model' => 'DK 150',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 8799,
                'brand_id' => 203,
                'fipe_code' => '885005-4',
                'model' => 'DK 150 S',
                'years' => '2020 a 2023'
            ],

            [
                'id' => 10147,
                'brand_id' => 203,
                'fipe_code' => '885011-9',
                'model' => 'DK 160',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 9071,
                'brand_id' => 203,
                'fipe_code' => '885008-9',
                'model' => 'DR 160',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 7930,
                'brand_id' => 203,
                'fipe_code' => '885001-1',
                'model' => 'LINDY 125',
                'years' => '2017 a Zero Km'
            ],

            [
                'id' => 9626,
                'brand_id' => 203,
                'fipe_code' => '885009-7',
                'model' => 'MASTER RIDE 150',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 7931,
                'brand_id' => 203,
                'fipe_code' => '885003-8',
                'model' => 'NEX 110',
                'years' => '2017 a 2019'
            ],

            [
                'id' => 8975,
                'brand_id' => 203,
                'fipe_code' => '885006-2',
                'model' => 'NEX 115',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 9780,
                'brand_id' => 203,
                'fipe_code' => '885010-0',
                'model' => 'NK 150',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 9029,
                'brand_id' => 203,
                'fipe_code' => '885007-0',
                'model' => 'VR 150',
                'years' => '2021 a Zero Km'
            ]
        ];

        $KYMCOModels = [
            [
                'id' => 8706,
                'brand_id' => 204,
                'fipe_code' => '832031-4',
                'model' => 'AGILITY 16+ 200i ABS',
                'years' => '2020 a 2022'
            ],

            [
                'id' => 9220,
                'brand_id' => 204,
                'fipe_code' => '832032-2',
                'model' => 'AK 550i ABS',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 7933,
                'brand_id' => 204,
                'fipe_code' => '832001-2',
                'model' => 'DJW 50 50cc',
                'years' => '1997 a 2002'
            ],

            [
                'id' => 7934,
                'brand_id' => 204,
                'fipe_code' => '832029-2',
                'model' => 'DOWNTOWN 300i',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 7935,
                'brand_id' => 204,
                'fipe_code' => '832002-0',
                'model' => 'M´BOY 90cc',
                'years' => '1997 a 2002'
            ],

            [
                'id' => 7936,
                'brand_id' => 204,
                'fipe_code' => '832027-6',
                'model' => 'PEOPLE 50',
                'years' => '2001 a 2003'
            ],

            [
                'id' => 7937,
                'brand_id' => 204,
                'fipe_code' => '832030-6',
                'model' => 'PEOPLE GT 300i',
                'years' => '2017 a Zero Km'
            ],

            [
                'id' => 7938,
                'brand_id' => 204,
                'fipe_code' => '832028-4',
                'model' => 'ZING 150',
                'years' => '2000 a 2003'
            ]
        ];

        $BEEModels = [
            [
                'id' => 8153,
                'brand_id' => 205,
                'fipe_code' => '886002-5',
                'model' => 'BEE 125cc Monaco',
                'years' => '2015 a 2016'
            ],

            [
                'id' => 8374,
                'brand_id' => 205,
                'fipe_code' => '886005-0',
                'model' => 'BEE 200cc GT',
                'years' => '2019 a 2019'
            ],

            [
                'id' => 8154,
                'brand_id' => 205,
                'fipe_code' => '886003-3',
                'model' => 'BEE 200cc Royale',
                'years' => '2016 a 2020'
            ],

            [
                'id' => 8155,
                'brand_id' => 205,
                'fipe_code' => '886001-7',
                'model' => 'BEE 50cc',
                'years' => '2016 a 2019'
            ],

            [
                'id' => 8327,
                'brand_id' => 205,
                'fipe_code' => '886004-1',
                'model' => 'Monaco 150cc',
                'years' => '2019 a 2020'
            ]
        ];

        $FUSCOMOTOSEGURAModels = [
            [
                'id' => 8377,
                'brand_id' => 209,
                'fipe_code' => '887001-2',
                'model' => 'CARGA Baú 125cc',
                'years' => '2016 a 2019'
            ],

            [
                'id' => 8378,
                'brand_id' => 209,
                'fipe_code' => '887003-9',
                'model' => 'CARGA Baú 160cc',
                'years' => '2016 a Zero Km'
            ],

            [
                'id' => 8379,
                'brand_id' => 209,
                'fipe_code' => '887002-0',
                'model' => 'CARGA Caçamba 125cc',
                'years' => '2016 a 2019'
            ],

            [
                'id' => 8380,
                'brand_id' => 209,
                'fipe_code' => '887005-5',
                'model' => 'CARGA Caçamba 160cc',
                'years' => '2016 a Zero Km'
            ],

            [
                'id' => 8381,
                'brand_id' => 209,
                'fipe_code' => '887004-7',
                'model' => 'CARGA Gás 160cc',
                'years' => '2016 a Zero Km'
            ],

            [
                'id' => 10845,
                'brand_id' => 209,
                'fipe_code' => '887008-0',
                'model' => 'Wit Baú 4500W Convercional (Elétrico)',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 10846,
                'brand_id' => 209,
                'fipe_code' => '887007-1',
                'model' => 'Wit Caçamba 4500W (Elétrico)',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 10847,
                'brand_id' => 209,
                'fipe_code' => '887006-3',
                'model' => 'Wit Gás 4500W (Elétrico)',
                'years' => '2024 a Zero Km'
            ]
        ];

        $POLARISModels = [
            [
                'id' => 8650,
                'brand_id' => 210,
                'fipe_code' => '884011-3',
                'model' => 'General 1000 CREW 4x4 (UTV)',
                'years' => '2019 a 2020'
            ],

            [
                'id' => 9778,
                'brand_id' => 210,
                'fipe_code' => '884023-7',
                'model' => 'General XP 1000 DELUXE (UTV)',
                'years' => '2022 a 2022'
            ],

            [
                'id' => 10744,
                'brand_id' => 210,
                'fipe_code' => '884028-8',
                'model' => 'General XP 4 1000 PREMIUM (UTV)',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 10745,
                'brand_id' => 210,
                'fipe_code' => '884027-0',
                'model' => 'General XP 4 1000 ULTIMATE (UTV)',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 9087,
                'brand_id' => 210,
                'fipe_code' => '884015-6',
                'model' => 'Ranger 1000 4x4 (UTV)',
                'years' => '2020 a 2021'
            ],

            [
                'id' => 9844,
                'brand_id' => 210,
                'fipe_code' => '884005-9',
                'model' => 'Ranger 570 4x4 (UTV)/SP',
                'years' => '2014 a Zero Km'
            ],

            [
                'id' => 10426,
                'brand_id' => 210,
                'fipe_code' => '884025-3',
                'model' => 'Ranger 570 SP Premium 4x4 (UTV)',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 9845,
                'brand_id' => 210,
                'fipe_code' => '884014-8',
                'model' => 'Ranger 570-4 CREW 4x4 (UTV)/SP',
                'years' => '2020 a Zero Km'
            ],

            [
                'id' => 10427,
                'brand_id' => 210,
                'fipe_code' => '884026-1',
                'model' => 'Ranger 570-4 CREW SP Premium 4x4 (UTV)',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 9089,
                'brand_id' => 210,
                'fipe_code' => '884016-4',
                'model' => 'RZR PRO XP PREMIUM Turbo 4x4 (UTV)',
                'years' => '2020 a 2022'
            ],

            [
                'id' => 9368,
                'brand_id' => 210,
                'fipe_code' => '884020-2',
                'model' => 'RZR PRO XP SPORT Turbo 4x4 (UTV)',
                'years' => '2021 a 2021'
            ],

            [
                'id' => 9090,
                'brand_id' => 210,
                'fipe_code' => '884017-2',
                'model' => 'RZR PRO XP ULTIMATE Turbo 4x4 (UTV)',
                'years' => '2020 a 2022'
            ],

            [
                'id' => 9091,
                'brand_id' => 210,
                'fipe_code' => '884018-0',
                'model' => 'RZR PRO XP4 ULTIMATE Turbo 4x4 (UTV)',
                'years' => '2020 a 2022'
            ],

            [
                'id' => 10187,
                'brand_id' => 210,
                'fipe_code' => '884024-5',
                'model' => 'RZR R 4 ULTIMATE Turbo 4x4 (UTV)',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 8653,
                'brand_id' => 210,
                'fipe_code' => '884006-7',
                'model' => 'RZR S 900 EPS 4x4 (UTV)',
                'years' => '2015 a 2020'
            ],

            [
                'id' => 8652,
                'brand_id' => 210,
                'fipe_code' => '884007-5',
                'model' => 'RZR S1000 EPS 4x4 (UTV)',
                'years' => '2019 a 2020'
            ],

            [
                'id' => 9092,
                'brand_id' => 210,
                'fipe_code' => '884013-0',
                'model' => 'RZR S4 1000 EPS 4x4 (UTV)',
                'years' => '2020 a 2020'
            ],

            [
                'id' => 9517,
                'brand_id' => 210,
                'fipe_code' => '884021-0',
                'model' => 'RZR TRAIL S 1000 Premium 4x4 (UTV)',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 9518,
                'brand_id' => 210,
                'fipe_code' => '884022-9',
                'model' => 'RZR TRAIL S 900 Sport 4x4 (UTV)',
                'years' => '2021 a 2022'
            ],

            [
                'id' => 8654,
                'brand_id' => 210,
                'fipe_code' => '884008-3',
                'model' => 'RZR XP 1000 EPS 4x4 (UTV)',
                'years' => '2015 a 2021'
            ],

            [
                'id' => 8655,
                'brand_id' => 210,
                'fipe_code' => '884010-5',
                'model' => 'RZR XP 4 1000 4x4 (UTV)',
                'years' => '2015 a 2021'
            ],

            [
                'id' => 8656,
                'brand_id' => 210,
                'fipe_code' => '884009-1',
                'model' => 'RZR XP TURBO 4x4 (UTV)',
                'years' => '2016 a 2019'
            ],

            [
                'id' => 8657,
                'brand_id' => 210,
                'fipe_code' => '884012-1',
                'model' => 'RZR XP TURBO S 4x4 (UTV)',
                'years' => '2018 a 2020'
            ],

            [
                'id' => 9313,
                'brand_id' => 210,
                'fipe_code' => '884019-9',
                'model' => 'Sportsman 570  LE 4x4 Quadriciclo',
                'years' => '2020 a 2020'
            ],

            [
                'id' => 8383,
                'brand_id' => 210,
                'fipe_code' => '884004-0',
                'model' => 'Sportsman 570 EFI 4x4 Quadriciclo',
                'years' => '2014 a Zero Km'
            ],

            [
                'id' => 10844,
                'brand_id' => 210,
                'fipe_code' => '884029-6',
                'model' => 'Sportsman 570 EFI 4x4 Quadriciclo EPS',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 8385,
                'brand_id' => 210,
                'fipe_code' => '884002-4',
                'model' => 'Sportsman 570 EFI Tour. 4x4 Quad. EPS/SP',
                'years' => '2018 a Zero Km'
            ],

            [
                'id' => 8384,
                'brand_id' => 210,
                'fipe_code' => '884003-2',
                'model' => 'Sportsman 570 EFI Touri. 4x4 Quadriciclo',
                'years' => '2015 a 2022'
            ],

            [
                'id' => 8386,
                'brand_id' => 210,
                'fipe_code' => '884001-6',
                'model' => 'Sportsman XP 1000 4x4 Quadriciclo',
                'years' => '2018 a 2018'
            ]
        ];

        $BULLModels = [
            [
                'id' => 9410,
                'brand_id' => 212,
                'fipe_code' => '888006-9',
                'model' => 'BM-S 180',
                'years' => '2019 a 2021'
            ],

            [
                'id' => 9411,
                'brand_id' => 212,
                'fipe_code' => '888011-5',
                'model' => 'BM-T180',
                'years' => '2019 a 2021'
            ],

            [
                'id' => 9412,
                'brand_id' => 212,
                'fipe_code' => '888009-3',
                'model' => 'Café Racer B31',
                'years' => '2019 a 2019'
            ],

            [
                'id' => 9413,
                'brand_id' => 212,
                'fipe_code' => '888007-7',
                'model' => 'Ciclo City Veloce 1000W (Elétrica)',
                'years' => '2019 a 2020'
            ],

            [
                'id' => 9414,
                'brand_id' => 212,
                'fipe_code' => '888005-0',
                'model' => 'Eko City 1200W (Elétrica)',
                'years' => '2019 a 2022'
            ],

            [
                'id' => 9415,
                'brand_id' => 212,
                'fipe_code' => '888008-5',
                'model' => 'Eko Hunter 2000W (Elétrica)',
                'years' => '2019 a 2022'
            ],

            [
                'id' => 9416,
                'brand_id' => 212,
                'fipe_code' => '888014-0',
                'model' => 'Eko Sport 1200W (Elétrica)',
                'years' => '2021 a 2022'
            ],

            [
                'id' => 9419,
                'brand_id' => 212,
                'fipe_code' => '888004-2',
                'model' => 'GTR 250',
                'years' => '2019 a 2019'
            ],

            [
                'id' => 9420,
                'brand_id' => 212,
                'fipe_code' => '888012-3',
                'model' => 'KHRISMA 50',
                'years' => '2020 a 2022'
            ],

            [
                'id' => 9421,
                'brand_id' => 212,
                'fipe_code' => '888010-7',
                'model' => 'KRC F5-LX 50',
                'years' => '2019 a 2023'
            ],

            [
                'id' => 9422,
                'brand_id' => 212,
                'fipe_code' => '888002-6',
                'model' => 'KRC LIV-50',
                'years' => '2019 a 2020'
            ],

            [
                'id' => 9423,
                'brand_id' => 212,
                'fipe_code' => '888001-8',
                'model' => 'MAXX KRC50',
                'years' => '2019 a 2019'
            ],

            [
                'id' => 9424,
                'brand_id' => 212,
                'fipe_code' => '888003-4',
                'model' => 'NOW 125',
                'years' => '2018 a 2021'
            ],

            [
                'id' => 9425,
                'brand_id' => 212,
                'fipe_code' => '888013-1',
                'model' => 'Spirit SE 50',
                'years' => '2020 a 2023'
            ]
        ];

        $VOLTZModels = [
            [
                'id' => 9799,
                'brand_id' => 215,
                'fipe_code' => '889001-3',
                'model' => 'EV01 1800W (Elétrica)',
                'years' => '2019 a 2021'
            ],

            [
                'id' => 9510,
                'brand_id' => 215,
                'fipe_code' => '889003-0',
                'model' => 'EV1 Sport 3000W (elétrica)',
                'years' => '2021 a 2023'
            ],

            [
                'id' => 9418,
                'brand_id' => 215,
                'fipe_code' => '889002-1',
                'model' => 'EVS 3000W (elétrica)',
                'years' => '2021 a 2023'
            ]
        ];

        $AVELLOZModels = [
            [
                'id' => 9409,
                'brand_id' => 216,
                'fipe_code' => '890001-9',
                'model' => 'AZ 01 50cc',
                'years' => '2021 a Zero Km'
            ]
        ];

        $SUPERSOCOModels = [
            [
                'id' => 9884,
                'brand_id' => 237,
                'fipe_code' => '891002-2',
                'model' => 'Change Urban 1200W (ELÉTRICA)',
                'years' => '2020 a 2021'
            ],

            [
                'id' => 10790,
                'brand_id' => 237,
                'fipe_code' => '891003-0',
                'model' => 'CUX 2788W (Elétrica)',
                'years' => '2020 a 2022'
            ],

            [
                'id' => 10794,
                'brand_id' => 237,
                'fipe_code' => '891001-4',
                'model' => 'TC 3000W (Elétrica)',
                'years' => '2020 a 2022'
            ],

            [
                'id' => 10795,
                'brand_id' => 237,
                'fipe_code' => '891004-9',
                'model' => 'TC Max 5000W (Elétrica)',
                'years' => '2020 a 2022'
            ],

            [
                'id' => 10796,
                'brand_id' => 237,
                'fipe_code' => '891005-7',
                'model' => 'TSX 3000W (Elétrica)',
                'years' => '2020 a 2022'
            ]
        ];

        $NIUModels = [
            [
                'id' => 10423,
                'brand_id' => 239,
                'fipe_code' => '893003-1',
                'model' => 'NQI GTS 3000W (Elétrica)',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 10424,
                'brand_id' => 239,
                'fipe_code' => '893002-3',
                'model' => 'NQI Sport 1500W (Elétrica)',
                'years' => '2021 a Zero Km'
            ],

            [
                'id' => 10428,
                'brand_id' => 239,
                'fipe_code' => '893001-5',
                'model' => 'UQI GT 1200W (Elétrica)',
                'years' => '2021 a Zero Km'
            ]
        ];

        $ZONTESModels = [
            [
                'id' => 11052,
                'brand_id' => 242,
                'fipe_code' => '895004-0',
                'model' => 'E 350',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 11053,
                'brand_id' => 242,
                'fipe_code' => '895009-1',
                'model' => 'GK 350',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 10644,
                'brand_id' => 242,
                'fipe_code' => '895001-6',
                'model' => 'R 310',
                'years' => '2024 a Zero Km'
            ],

            [
                'id' => 11055,
                'brand_id' => 242,
                'fipe_code' => '895005-9',
                'model' => 'R 350',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 11207,
                'brand_id' => 242,
                'fipe_code' => '895010-5',
                'model' => 'S 350',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 10645,
                'brand_id' => 242,
                'fipe_code' => '895003-2',
                'model' => 'T 310',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 11061,
                'brand_id' => 242,
                'fipe_code' => '895006-7',
                'model' => 'T 350',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 11062,
                'brand_id' => 242,
                'fipe_code' => '895007-5',
                'model' => 'T 350 X',
                'years' => '2025 a Zero Km'
            ],

            [
                'id' => 10646,
                'brand_id' => 242,
                'fipe_code' => '895002-4',
                'model' => 'V 310',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 11065,
                'brand_id' => 242,
                'fipe_code' => '895008-3',
                'model' => 'V 350',
                'years' => '2025 a Zero Km'
            ]
        ];

        $WATTSModels = [
            [
                'id' => 10647,
                'brand_id' => 243,
                'fipe_code' => '894001-0',
                'model' => 'W125 3000W (Elétrica)',
                'years' => '2022 a Zero Km'
            ],

            [
                'id' => 10940,
                'brand_id' => 243,
                'fipe_code' => '894003-7',
                'model' => 'W160S 10000W (Elétrica)',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 10941,
                'brand_id' => 243,
                'fipe_code' => '894002-9',
                'model' => 'WS120 3500W (Elétrica)',
                'years' => '2023 a Zero Km'
            ]
        ];

        $VentaneMotorsModels = [
            [
                'id' => 10792,
                'brand_id' => 244,
                'fipe_code' => '896004-6',
                'model' => 'MILANO 3000W (Elétrica)',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 10793,
                'brand_id' => 244,
                'fipe_code' => '896003-8',
                'model' => 'ROMA 3000W (Elétrica)',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 10797,
                'brand_id' => 244,
                'fipe_code' => '896001-1',
                'model' => 'VTX 3000W (Elétrica)',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 10798,
                'brand_id' => 244,
                'fipe_code' => '896002-0',
                'model' => 'WIND 2000W (Elétrica)',
                'years' => '2023 a Zero Km'
            ]
        ];

        $FEVERModels = [
            [
                'id' => 10976,
                'brand_id' => 248,
                'fipe_code' => '897005-0',
                'model' => 'FR150 FRIGO (Elétrica)',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 10977,
                'brand_id' => 248,
                'fipe_code' => '897002-5',
                'model' => 'FR250 BOX (Elétrica)',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 10978,
                'brand_id' => 248,
                'fipe_code' => '897004-1',
                'model' => 'FR250 CAGE (Elétrica)',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 10979,
                'brand_id' => 248,
                'fipe_code' => '897003-3',
                'model' => 'FR250 PET (Elétrica)',
                'years' => '2023 a Zero Km'
            ],

            [
                'id' => 10980,
                'brand_id' => 248,
                'fipe_code' => '897001-7',
                'model' => 'FR250 PICK-UP (Elétrica)',
                'years' => '2023 a Zero Km'
            ]
        ];

        foreach (array_merge($ADLYModels,$AGRALEModels,$APRILIAModels,$ATALAModels,$BAJAJModels,$BETAModels,$BIMOTAModels,$BMWModels,$nameYModels,$byCristoModels,$CAGIVAModels,$CALOIModels,$DAELIMModels,$DERBIModels,$DUCATIModels,$EMMEModels,$GASGASModels,$HARLEYDAVIDSONModels,$HARTFORDModels,$HEROModels,$HONDAModels,$HUSABERGModels,$HUSQVARNAModels,$KAWASAKIModels,$KTMModels,$LAQUILAModels,$LAVRALEModels,$MOTOGUZZIModels,$MVAGUSTAModels,$MVKModels,$ORCAModels,$PEUGEOTModels,$PIAGGIOModels,$SANYANGModels,$SIAMOTOModels,$SUNDOWNModels,$SUZUKIModels,$TRIUMPHModels,$YAMAHAModels,$BUELLModels,$KASINSKIModels,$TRAXXModels,$MIZAModels,$FYMModels,$KAHENAModels,$BRAVAModels,$AMAZONASModels,$FOXModels,$GREENModels,$SHINERAYModels,$WUYANGModels,$DAYANGModels,$HAOBAOModels,$LERIVOModels,$JIAPENGVOLCANOModels,$DAYUNModels,$GARINNIModels,$DAFRAModels,$MalagutiModels,$LonVModels,$BRPModels,$JONNYModels,$BUENOModels,$IROSModels,$LANDUMModels,$MRXModels,$BenelliModels,$PEGASSIModels,$REGALRAPTORModels,$JOHNNYPAGModels,$MAGRAOTRICICLOSModels,$TARGOSModels,$LIFANModels,$VENTOModels,$TIGERModels,$RoyalEnfieldModels,$RIGUETEModels,$MOTORINOModels,$MOTOCARModels,$INDIANModels,$HAOJUEModels,$KYMCOModels,$BEEModels,$FUSCOMOTOSEGURAModels,$POLARISModels,$BULLModels,$VOLTZModels,$AVELLOZModels,$SUPERSOCOModels,$NIUModels,$ZONTESModels,$WATTSModels,$VentaneMotorsModels,$FEVERModels,) as $model) {
            DB::table('bike_models')->insert($model);
        }


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bike_models');
    }
};
