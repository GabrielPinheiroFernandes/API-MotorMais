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
        Schema::create('truck_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id'); // Chave estrangeira para a tabela brands
            $table->string('fipe_code');
            $table->string('model');
            $table->string('years');
            $table->timestamps();

            // Definindo a chave estrangeira
            $table->foreign('brand_id')->references('id')->on('truck_brands')->onDelete('cascade');
        });


        $AGRALEModels = [
            [
                'id' => 5986,
                'brand_id' => 102,
                'fipe_code' => '501034-9',
                'model' => '10000 / 10000 S  2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 7529,
                'brand_id' => 102,
                'fipe_code' => '501039-0',
                'model' => '10000 LX 2p (diesel) (E5)',
                'years' => '2016 a 2017'
            ],
            
            [
                'id' => 4448,
                'brand_id' => 102,
                'fipe_code' => '501027-6',
                'model' => '13000 Turbo 2p (diesel)',
                'years' => '2007 a 2012'
            ],
            
            [
                'id' => 4513,
                'brand_id' => 102,
                'fipe_code' => '501028-4',
                'model' => '13000 Turbo 3-Eixos 2p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 5987,
                'brand_id' => 102,
                'fipe_code' => '501030-6',
                'model' => '14000 / 14000 S 2p (diesel) (E5)',
                'years' => '2012 a 2023'
            ],
            
            [
                'id' => 5988,
                'brand_id' => 102,
                'fipe_code' => '501031-4',
                'model' => '14000 / 14000 S 6x2 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 7530,
                'brand_id' => 102,
                'fipe_code' => '501040-3',
                'model' => '14000 LX 2p (diesel) (E5)',
                'years' => '2016 a 2017'
            ],
            
            [
                'id' => 3110,
                'brand_id' => 102,
                'fipe_code' => '501001-2',
                'model' => '1600 D-RD 2p (diesel)',
                'years' => '1985 a 1994'
            ],
            
            [
                'id' => 3111,
                'brand_id' => 102,
                'fipe_code' => '501002-0',
                'model' => '1600 D-RS 2p (diesel)',
                'years' => '1985 a 1994'
            ],
            
            [
                'id' => 3112,
                'brand_id' => 102,
                'fipe_code' => '501003-9',
                'model' => '1800 D-RD 2p (diesel)',
                'years' => '1988 a 1994'
            ],
            
            [
                'id' => 3113,
                'brand_id' => 102,
                'fipe_code' => '501004-7',
                'model' => '1800 D-RS 2p (diesel)',
                'years' => '1988 a 1994'
            ],
            
            [
                'id' => 3114,
                'brand_id' => 102,
                'fipe_code' => '501005-5',
                'model' => '4500 D-RD 2p (diesel)',
                'years' => '1994 a 1997'
            ],
            
            [
                'id' => 3115,
                'brand_id' => 102,
                'fipe_code' => '501006-3',
                'model' => '4500 D-RS 2p (diesel)',
                'years' => '1994 a 1997'
            ],
            
            [
                'id' => 3116,
                'brand_id' => 102,
                'fipe_code' => '501007-1',
                'model' => '5000 D-RD 2p (diesel)',
                'years' => '1994 a 1998'
            ],
            
            [
                'id' => 3117,
                'brand_id' => 102,
                'fipe_code' => '501008-0',
                'model' => '5000 D-RS 2p (diesel)',
                'years' => '1994 a 1997'
            ],
            
            [
                'id' => 3118,
                'brand_id' => 102,
                'fipe_code' => '501021-7',
                'model' => '6000 D CD RS/ RD 3p (diesel)',
                'years' => '2001 a 2006'
            ],
            
            [
                'id' => 3119,
                'brand_id' => 102,
                'fipe_code' => '501020-9',
                'model' => '6000 D CS 2p (diesel)',
                'years' => '2000 a 2012'
            ],
            
            [
                'id' => 3120,
                'brand_id' => 102,
                'fipe_code' => '501022-5',
                'model' => '6000 Furgovan 2.8 TDI RS/ RD 4p',
                'years' => '2002 a 2011'
            ],
            
            [
                'id' => 3121,
                'brand_id' => 102,
                'fipe_code' => '501009-8',
                'model' => '7000 D 2p (diesel)',
                'years' => '1993 a 2002'
            ],
            
            [
                'id' => 3122,
                'brand_id' => 102,
                'fipe_code' => '501010-1',
                'model' => '7000 D-RD CD 4p (diesel)',
                'years' => '1995 a 1998'
            ],
            
            [
                'id' => 3123,
                'brand_id' => 102,
                'fipe_code' => '501011-0',
                'model' => '7000 DX 2p (diesel)',
                'years' => '1996 a 2002'
            ],
            
            [
                'id' => 3124,
                'brand_id' => 102,
                'fipe_code' => '501012-8',
                'model' => '7500 TD 2p (diesel)',
                'years' => '1994 a 2005'
            ],
            
            [
                'id' => 3125,
                'brand_id' => 102,
                'fipe_code' => '501013-6',
                'model' => '7500 TDX 2p (diesel)',
                'years' => '1996 a 2004'
            ],
            
            [
                'id' => 3126,
                'brand_id' => 102,
                'fipe_code' => '501025-0',
                'model' => '8000 Furgovan 4.3 TDI 145cv Aut 4p',
                'years' => '2004 a 2005'
            ],
            
            [
                'id' => 3127,
                'brand_id' => 102,
                'fipe_code' => '501024-1',
                'model' => '8000 Furgovan 4.3 TDI Mec 4p',
                'years' => '2004 a 2011'
            ],
            
            [
                'id' => 4084,
                'brand_id' => 102,
                'fipe_code' => '501026-8',
                'model' => '8500 E-tronic CE 2p (diesel)',
                'years' => '2006 a 2012'
            ],
            
            [
                'id' => 3128,
                'brand_id' => 102,
                'fipe_code' => '501014-4',
                'model' => '8500 Turbo 2p (diesel)',
                'years' => '1997 a 2012'
            ],
            
            [
                'id' => 4757,
                'brand_id' => 102,
                'fipe_code' => '501029-2',
                'model' => '8500 Turbo CD 3p (diesel)',
                'years' => '2007 a 2012'
            ],
            
            [
                'id' => 5989,
                'brand_id' => 102,
                'fipe_code' => '501032-2',
                'model' => '8700 / 8700 S 2p (diesel) (E5)',
                'years' => '2012 a 2023'
            ],
            
            [
                'id' => 7531,
                'brand_id' => 102,
                'fipe_code' => '501038-1',
                'model' => '8700 LX 2p (diesel) (E5)',
                'years' => '2016 a 2017'
            ],
            
            [
                'id' => 5990,
                'brand_id' => 102,
                'fipe_code' => '501033-0',
                'model' => '8700 TR 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 3129,
                'brand_id' => 102,
                'fipe_code' => '501023-3',
                'model' => '9200 Turbo 2p (diesel)',
                'years' => '2004 a 2012'
            ],
            
            [
                'id' => 7532,
                'brand_id' => 102,
                'fipe_code' => '501037-3',
                'model' => 'A10000 2p (diesel) (E5)',
                'years' => '2015 a 2022'
            ],
            
            [
                'id' => 10873,
                'brand_id' => 102,
                'fipe_code' => '501042-0',
                'model' => 'A10000 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7873,
                'brand_id' => 102,
                'fipe_code' => '501041-1',
                'model' => 'A7500 2p (diesel)(E5)',
                'years' => '2016 a 2022'
            ],
            
            [
                'id' => 7533,
                'brand_id' => 102,
                'fipe_code' => '501036-5',
                'model' => 'A8700 2p (diesel) (E5)',
                'years' => '2015 a 2022'
            ],
            
            [
                'id' => 10874,
                'brand_id' => 102,
                'fipe_code' => '501043-8',
                'model' => 'A8700 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 6704,
                'brand_id' => 102,
                'fipe_code' => '501035-7',
                'model' => 'MARRUÁ AM 300 2.8 CS TDI Diesel (E5)',
                'years' => '2012 a 2022'
            ]
            ];
            
            $CHEVROLETModels = [
            [
                'id' => 3130,
                'brand_id' => 103,
                'fipe_code' => '502001-8',
                'model' => '11000 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3131,
                'brand_id' => 103,
                'fipe_code' => '502002-6',
                'model' => '11000 3-Eixos 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3132,
                'brand_id' => 103,
                'fipe_code' => '502003-4',
                'model' => '12000 2p (diesel)',
                'years' => '1981 a 1996'
            ],
            
            [
                'id' => 3133,
                'brand_id' => 103,
                'fipe_code' => '502004-2',
                'model' => '12000 3-Eixos 2p (diesel)',
                'years' => '1981 a 1996'
            ],
            
            [
                'id' => 3134,
                'brand_id' => 103,
                'fipe_code' => '502005-0',
                'model' => '13000 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3135,
                'brand_id' => 103,
                'fipe_code' => '502006-9',
                'model' => '13000 3-Eixos 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3136,
                'brand_id' => 103,
                'fipe_code' => '502007-7',
                'model' => '14000 Turbo 2p (diesel)',
                'years' => '1985 a 1996'
            ],
            
            [
                'id' => 3137,
                'brand_id' => 103,
                'fipe_code' => '502008-5',
                'model' => '14000 Turbo 3-Eixos 2p (diesel)',
                'years' => '1985 a 1996'
            ],
            
            [
                'id' => 3138,
                'brand_id' => 103,
                'fipe_code' => '502009-3',
                'model' => '19000 2p (diesel)',
                'years' => '1985 a 1989'
            ],
            
            [
                'id' => 3139,
                'brand_id' => 103,
                'fipe_code' => '502010-7',
                'model' => '19000 3-Eixos 2p (diesel)',
                'years' => '1985 a 1989'
            ],
            
            [
                'id' => 3140,
                'brand_id' => 103,
                'fipe_code' => '502011-5',
                'model' => '21000 2p (diesel)',
                'years' => '1985 a 1989'
            ],
            
            [
                'id' => 3141,
                'brand_id' => 103,
                'fipe_code' => '502012-3',
                'model' => '22000 2p (diesel)',
                'years' => '1985 a 1990'
            ],
            
            [
                'id' => 3142,
                'brand_id' => 103,
                'fipe_code' => '502013-1',
                'model' => '6000 2p (diesel)',
                'years' => '1993 a 1996'
            ],
            
            [
                'id' => 3143,
                'brand_id' => 103,
                'fipe_code' => '502014-0',
                'model' => 'C-60 2p (Gas.)',
                'years' => '1981 a 1984'
            ],
            
            [
                'id' => 3144,
                'brand_id' => 103,
                'fipe_code' => '502015-8',
                'model' => 'D-40 2p (diesel)',
                'years' => '1985 a 1994'
            ],
            
            [
                'id' => 3145,
                'brand_id' => 103,
                'fipe_code' => '502016-6',
                'model' => 'D-60 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3146,
                'brand_id' => 103,
                'fipe_code' => '502017-4',
                'model' => 'D-70 2p (diesel)',
                'years' => '1981 a 1989'
            ]
            ];
            
            $FIATModels = [
            [
                'id' => 3147,
                'brand_id' => 104,
                'fipe_code' => '503001-3',
                'model' => '190 2p (diesel)',
                'years' => '1981 a 1984'
            ],
            
            [
                'id' => 3148,
                'brand_id' => 104,
                'fipe_code' => '503002-1',
                'model' => '190 E 2p (diesel)',
                'years' => '1981 a 1984'
            ],
            
            [
                'id' => 3149,
                'brand_id' => 104,
                'fipe_code' => '503003-0',
                'model' => '190 H 2p (diesel)',
                'years' => '1981 a 1984'
            ],
            
            [
                'id' => 3150,
                'brand_id' => 104,
                'fipe_code' => '503004-8',
                'model' => '190 T 2p (diesel)',
                'years' => '1981 a 1984'
            ]
            ];
            
            $FORDModels = [
            [
                'id' => 3151,
                'brand_id' => 105,
                'fipe_code' => '504005-1',
                'model' => 'CARGO 1113 2p (diesel)',
                'years' => '1985 a 1989'
            ],
            
            [
                'id' => 3152,
                'brand_id' => 105,
                'fipe_code' => '504006-0',
                'model' => 'CARGO 1113 3-Eixos 2p (diesel)',
                'years' => '1985 a 1989'
            ],
            
            [
                'id' => 3153,
                'brand_id' => 105,
                'fipe_code' => '504007-8',
                'model' => 'CARGO 1114 2p (diesel)',
                'years' => '1985 a 1989'
            ],
            
            [
                'id' => 3154,
                'brand_id' => 105,
                'fipe_code' => '504008-6',
                'model' => 'CARGO 1114 3-Eixos 2p (diesel)',
                'years' => '1985 a 1989'
            ],
            
            [
                'id' => 3155,
                'brand_id' => 105,
                'fipe_code' => '504009-4',
                'model' => 'CARGO 1117 T 3-Eixos 2p (diesel)',
                'years' => '1985 a 1989'
            ],
            
            [
                'id' => 3156,
                'brand_id' => 105,
                'fipe_code' => '504010-8',
                'model' => 'CARGO 1117 Turbo 2p (diesel)',
                'years' => '1985 a 1989'
            ],
            
            [
                'id' => 6679,
                'brand_id' => 105,
                'fipe_code' => '504149-0',
                'model' => 'CARGO 1119 Turbo 2p (diesel)(E5)',
                'years' => '2014 a 2019'
            ],
            
            [
                'id' => 3157,
                'brand_id' => 105,
                'fipe_code' => '504011-6',
                'model' => 'CARGO 1215 2p (diesel)',
                'years' => '1985 a 2001'
            ],
            
            [
                'id' => 3158,
                'brand_id' => 105,
                'fipe_code' => '504012-4',
                'model' => 'CARGO 1215 3-Eixos 2p (diesel)',
                'years' => '1985 a 2000'
            ],
            
            [
                'id' => 3159,
                'brand_id' => 105,
                'fipe_code' => '504082-5',
                'model' => 'CARGO 1217 2p (diesel)',
                'years' => '2001 a 2002'
            ],
            
            [
                'id' => 3160,
                'brand_id' => 105,
                'fipe_code' => '504083-3',
                'model' => 'CARGO 1217 3-Eixos 2p (diesel)',
                'years' => '2001 a 2002'
            ],
            
            [
                'id' => 3161,
                'brand_id' => 105,
                'fipe_code' => '504013-2',
                'model' => 'CARGO 1218 T 3-Eixos 2p (diesel)',
                'years' => '1985 a 1991'
            ],
            
            [
                'id' => 3162,
                'brand_id' => 105,
                'fipe_code' => '504014-0',
                'model' => 'CARGO 1218 Turbo 2p (diesel)',
                'years' => '1985 a 1991'
            ],
            
            [
                'id' => 3163,
                'brand_id' => 105,
                'fipe_code' => '504015-9',
                'model' => 'CARGO 1313 2p (diesel)',
                'years' => '1985 a 1989'
            ],
            
            [
                'id' => 3164,
                'brand_id' => 105,
                'fipe_code' => '504016-7',
                'model' => 'CARGO 1313 3-Eixos 2p (diesel)',
                'years' => '1985 a 1989'
            ],
            
            [
                'id' => 3165,
                'brand_id' => 105,
                'fipe_code' => '504017-5',
                'model' => 'CARGO 1314 2p (diesel)',
                'years' => '1985 a 1989'
            ],
            
            [
                'id' => 3166,
                'brand_id' => 105,
                'fipe_code' => '504018-3',
                'model' => 'CARGO 1314 3-Eixos 2p (diesel)',
                'years' => '1985 a 1989'
            ],
            
            [
                'id' => 3167,
                'brand_id' => 105,
                'fipe_code' => '504019-1',
                'model' => 'CARGO 1317/ 1317 E T 2p (diesel)',
                'years' => '1985 a 2012'
            ],
            
            [
                'id' => 3168,
                'brand_id' => 105,
                'fipe_code' => '504020-5',
                'model' => 'CARGO 1317/ 1317 E T 3-Eixos 2p (diesel)',
                'years' => '1985 a 2012'
            ],
            
            [
                'id' => 5972,
                'brand_id' => 105,
                'fipe_code' => '504135-0',
                'model' => 'CARGO 1319 E Turbo 2p (diesel)(E5)',
                'years' => '2012 a 2017'
            ],
            
            [
                'id' => 3169,
                'brand_id' => 105,
                'fipe_code' => '504021-3',
                'model' => 'CARGO 1415 2p (diesel)',
                'years' => '1985 a 2000'
            ],
            
            [
                'id' => 3170,
                'brand_id' => 105,
                'fipe_code' => '504022-1',
                'model' => 'CARGO 1415 3-Eixos 2p (diesel)',
                'years' => '1985 a 2000'
            ],
            
            [
                'id' => 3171,
                'brand_id' => 105,
                'fipe_code' => '504084-1',
                'model' => 'CARGO 1417 2p (diesel)',
                'years' => '1985 a 2002'
            ],
            
            [
                'id' => 3172,
                'brand_id' => 105,
                'fipe_code' => '504085-0',
                'model' => 'CARGO 1417 3-Eixos 2p (diesel)',
                'years' => '2001 a 2002'
            ],
            
            [
                'id' => 3173,
                'brand_id' => 105,
                'fipe_code' => '504023-0',
                'model' => 'CARGO 1418 2p (diesel)',
                'years' => '1985 a 1990'
            ],
            
            [
                'id' => 3174,
                'brand_id' => 105,
                'fipe_code' => '504024-8',
                'model' => 'CARGO 1418 3-Eixos 2p (diesel)',
                'years' => '1985 a 1990'
            ],
            
            [
                'id' => 3175,
                'brand_id' => 105,
                'fipe_code' => '504025-6',
                'model' => 'CARGO 1419 T 3-Eixos 2p (diesel)',
                'years' => '1990 a 1992'
            ],
            
            [
                'id' => 3176,
                'brand_id' => 105,
                'fipe_code' => '504026-4',
                'model' => 'CARGO 1419 Turbo 2p (diesel)',
                'years' => '1990 a 1992'
            ],
            
            [
                'id' => 7575,
                'brand_id' => 105,
                'fipe_code' => '504159-7',
                'model' => 'CARGO 1419 Turbo 2p (diesel)(E5)',
                'years' => '2016 a 2019'
            ],
            
            [
                'id' => 3177,
                'brand_id' => 105,
                'fipe_code' => '504080-9',
                'model' => 'CARGO 1421 2p (diesel)',
                'years' => '2000 a 2002'
            ],
            
            [
                'id' => 4085,
                'brand_id' => 105,
                'fipe_code' => '504118-0',
                'model' => 'CARGO 1421 3-Eixos 2p (diesel)',
                'years' => '2000 a 2002'
            ],
            
            [
                'id' => 3178,
                'brand_id' => 105,
                'fipe_code' => '504027-2',
                'model' => 'CARGO 1422 2p (diesel)',
                'years' => '1991 a 2000'
            ],
            
            [
                'id' => 3179,
                'brand_id' => 105,
                'fipe_code' => '504028-0',
                'model' => 'CARGO 1422 3-Eixos 2p (diesel)',
                'years' => '1991 a 2000'
            ],
            
            [
                'id' => 3180,
                'brand_id' => 105,
                'fipe_code' => '504029-9',
                'model' => 'CARGO 1517 T 3-Eixos 2p (diesel)',
                'years' => '1985 a 2012'
            ],
            
            [
                'id' => 3181,
                'brand_id' => 105,
                'fipe_code' => '504030-2',
                'model' => 'CARGO 1517 Turbo 2p (diesel)',
                'years' => '1985 a 2012'
            ],
            
            [
                'id' => 5973,
                'brand_id' => 105,
                'fipe_code' => '504136-8',
                'model' => 'CARGO 1519 E Turbo 2p (diesel)(E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 3872,
                'brand_id' => 105,
                'fipe_code' => '504110-4',
                'model' => 'CARGO 1519 T 3-Eixos 2p (diesel)',
                'years' => '1990 a 1992'
            ],
            
            [
                'id' => 3873,
                'brand_id' => 105,
                'fipe_code' => '504109-0',
                'model' => 'CARGO 1519 Turbo 2p (diesel)',
                'years' => '1990 a 1992'
            ],
            
            [
                'id' => 3182,
                'brand_id' => 105,
                'fipe_code' => '504104-0',
                'model' => 'CARGO 1521 T 3-Eixos 2p (diesel)',
                'years' => '2003 a 2006'
            ],
            
            [
                'id' => 3183,
                'brand_id' => 105,
                'fipe_code' => '504100-7',
                'model' => 'CARGO 1521 Turbo 2p (diesel)',
                'years' => '2003 a 2006'
            ],
            
            [
                'id' => 3184,
                'brand_id' => 105,
                'fipe_code' => '504031-0',
                'model' => 'CARGO 1615 2p (diesel)',
                'years' => '1985 a 1990'
            ],
            
            [
                'id' => 3185,
                'brand_id' => 105,
                'fipe_code' => '504032-9',
                'model' => 'CARGO 1615 3-Eixos 2p (diesel)',
                'years' => '1985 a 1990'
            ],
            
            [
                'id' => 3186,
                'brand_id' => 105,
                'fipe_code' => '504033-7',
                'model' => 'CARGO 1617 2p (diesel)',
                'years' => '1985 a 2002'
            ],
            
            [
                'id' => 3187,
                'brand_id' => 105,
                'fipe_code' => '504034-5',
                'model' => 'CARGO 1617 3-Eixos 2p (diesel)',
                'years' => '1985 a 2002'
            ],
            
            [
                'id' => 3188,
                'brand_id' => 105,
                'fipe_code' => '504035-3',
                'model' => 'CARGO 1618 T 3-Eixos 2p (diesel)',
                'years' => '1985 a 1990'
            ],
            
            [
                'id' => 3189,
                'brand_id' => 105,
                'fipe_code' => '504036-1',
                'model' => 'CARGO 1618 Turbo 2p (diesel)',
                'years' => '1985 a 1990'
            ],
            
            [
                'id' => 3190,
                'brand_id' => 105,
                'fipe_code' => '504037-0',
                'model' => 'CARGO 1619 T 3-Eixos 2p (diesel)',
                'years' => '1985 a 1990'
            ],
            
            [
                'id' => 3191,
                'brand_id' => 105,
                'fipe_code' => '504038-8',
                'model' => 'CARGO 1619 Turbo 2p (diesel)',
                'years' => '1985 a 1990'
            ],
            
            [
                'id' => 3192,
                'brand_id' => 105,
                'fipe_code' => '504081-7',
                'model' => 'CARGO 1621 2p (diesel)',
                'years' => '2000 a 2002'
            ],
            
            [
                'id' => 3193,
                'brand_id' => 105,
                'fipe_code' => '504087-6',
                'model' => 'CARGO 1621 3-Eixos 2p (diesel)',
                'years' => '2000 a 2002'
            ],
            
            [
                'id' => 3194,
                'brand_id' => 105,
                'fipe_code' => '504039-6',
                'model' => 'CARGO 1622 T 3-Eixos 2p (diesel)',
                'years' => '1991 a 2002'
            ],
            
            [
                'id' => 3195,
                'brand_id' => 105,
                'fipe_code' => '504040-0',
                'model' => 'CARGO 1622 Turbo 2p (diesel)',
                'years' => '1991 a 2002'
            ],
            
            [
                'id' => 4594,
                'brand_id' => 105,
                'fipe_code' => '504122-8',
                'model' => 'CARGO 1624 Turbo 2p (diesel)',
                'years' => '1990 a 1990'
            ],
            
            [
                'id' => 4595,
                'brand_id' => 105,
                'fipe_code' => '504123-6',
                'model' => 'CARGO 1624 Turbo 3-Eixos 2p (diesel)',
                'years' => '1990 a 1990'
            ],
            
            [
                'id' => 3196,
                'brand_id' => 105,
                'fipe_code' => '504089-2',
                'model' => 'CARGO 1630 T 3-Eixos 2p (diesel)',
                'years' => '2001 a 2002'
            ],
            
            [
                'id' => 3197,
                'brand_id' => 105,
                'fipe_code' => '504097-3',
                'model' => 'CARGO 1630 Turbo 2p (diesel)',
                'years' => '2001 a 2002'
            ],
            
            [
                'id' => 6314,
                'brand_id' => 105,
                'fipe_code' => '504145-7',
                'model' => 'CARGO 1717 3-Eixos 2p (diesel)',
                'years' => '2003 a 2012'
            ],
            
            [
                'id' => 3198,
                'brand_id' => 105,
                'fipe_code' => '504099-0',
                'model' => 'CARGO 1717/ 1717 E Turbo 2p (diesel)',
                'years' => '2003 a 2012'
            ],
            
            [
                'id' => 5965,
                'brand_id' => 105,
                'fipe_code' => '504137-6',
                'model' => 'CARGO 1719 Turbo 2p (diesel)(E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 3199,
                'brand_id' => 105,
                'fipe_code' => '504096-5',
                'model' => 'CARGO 1721 T 3-Eixos 2p (diesel)',
                'years' => '2002 a 2005'
            ],
            
            [
                'id' => 3200,
                'brand_id' => 105,
                'fipe_code' => '504092-2',
                'model' => 'CARGO 1721 Turbo 2p (diesel)',
                'years' => '2002 a 2005'
            ],
            
            [
                'id' => 3201,
                'brand_id' => 105,
                'fipe_code' => '504091-4',
                'model' => 'CARGO 1722/ 1722 E T 3-Eixos 2p (diesel)',
                'years' => '2002 a 2012'
            ],
            
            [
                'id' => 3202,
                'brand_id' => 105,
                'fipe_code' => '504088-4',
                'model' => 'CARGO 1722/ 1722 E Turbo 2p (diesel)',
                'years' => '2002 a 2012'
            ],
            
            [
                'id' => 5966,
                'brand_id' => 105,
                'fipe_code' => '504138-4',
                'model' => 'CARGO 1723 E Turbo 2p (diesel)(E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 6730,
                'brand_id' => 105,
                'fipe_code' => '504150-3',
                'model' => 'CARGO 1729 E Turbo 2p (diesel)(E5)',
                'years' => '2014 a 2018'
            ],
            
            [
                'id' => 8262,
                'brand_id' => 105,
                'fipe_code' => '504167-8',
                'model' => 'CARGO 1731 R 4x2 2p (diesel)(E5)',
                'years' => '2018 a 2019'
            ],
            
            [
                'id' => 3203,
                'brand_id' => 105,
                'fipe_code' => '504102-3',
                'model' => 'CARGO 1731 T 3-Eixos 2p (diesel)',
                'years' => '2003 a 2005'
            ],
            
            [
                'id' => 8263,
                'brand_id' => 105,
                'fipe_code' => '504168-6',
                'model' => 'CARGO 1731 TRACTOR 2p (diesel)(E5)',
                'years' => '2019 a 2019'
            ],
            
            [
                'id' => 3204,
                'brand_id' => 105,
                'fipe_code' => '504101-5',
                'model' => 'CARGO 1731 Turbo 2p (diesel)',
                'years' => '2003 a 2005'
            ],
            
            [
                'id' => 5139,
                'brand_id' => 105,
                'fipe_code' => '504129-5',
                'model' => 'CARGO 1832 E Turbo 2p (diesel)',
                'years' => '2010 a 2011'
            ],
            
            [
                'id' => 5568,
                'brand_id' => 105,
                'fipe_code' => '504132-5',
                'model' => 'CARGO 1932 E Turbo 2p (diesel)',
                'years' => '2011 a 2012'
            ],
            
            [
                'id' => 5967,
                'brand_id' => 105,
                'fipe_code' => '504139-2',
                'model' => 'CARGO 1933 E Turbo 2p (diesel)(E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 6554,
                'brand_id' => 105,
                'fipe_code' => '504147-3',
                'model' => 'CARGO 2042 E Turbo 4x2 2p (diesel)(E5)',
                'years' => '2013 a 2019'
            ],
            
            [
                'id' => 3874,
                'brand_id' => 105,
                'fipe_code' => '504111-2',
                'model' => 'CARGO 2217 3-Eixos 2p (diesel)',
                'years' => '1985 a 1986'
            ],
            
            [
                'id' => 3205,
                'brand_id' => 105,
                'fipe_code' => '504041-8',
                'model' => 'CARGO 2218 3-Eixos 2p (diesel)',
                'years' => '1988 a 1990'
            ],
            
            [
                'id' => 3206,
                'brand_id' => 105,
                'fipe_code' => '504042-6',
                'model' => 'CARGO 2319 T 3-Eixos 2p (diesel)',
                'years' => '1990 a 1990'
            ],
            
            [
                'id' => 3207,
                'brand_id' => 105,
                'fipe_code' => '504043-4',
                'model' => 'CARGO 2322 T 3-Eixos 2p (diesel)',
                'years' => '1991 a 1996'
            ],
            
            [
                'id' => 3208,
                'brand_id' => 105,
                'fipe_code' => '504044-2',
                'model' => 'CARGO 2324 3-Eixos 2p (diesel)',
                'years' => '1990 a 1997'
            ],
            
            [
                'id' => 3209,
                'brand_id' => 105,
                'fipe_code' => '504105-8',
                'model' => 'CARGO 2421 T 3-Eixos 2p (diesel)',
                'years' => '2004 a 2005'
            ],
            
            [
                'id' => 3210,
                'brand_id' => 105,
                'fipe_code' => '504045-0',
                'model' => 'CARGO 2422/ 2422 E 3-Eixos 2p (diesel)',
                'years' => '1993 a 2012'
            ],
            
            [
                'id' => 5968,
                'brand_id' => 105,
                'fipe_code' => '504140-6',
                'model' => 'CARGO 2423 E 6x2 Turbo 2p (diesel)(E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 3211,
                'brand_id' => 105,
                'fipe_code' => '504046-9',
                'model' => 'CARGO 2425 3-Eixos 2p (diesel)',
                'years' => '1996 a 2002'
            ],
            
            [
                'id' => 3985,
                'brand_id' => 105,
                'fipe_code' => '504113-9',
                'model' => 'CARGO 2428 E T 3-Eixos 2p (diesel)',
                'years' => '2006 a 2012'
            ],
            
            [
                'id' => 4730,
                'brand_id' => 105,
                'fipe_code' => '504125-2',
                'model' => 'CARGO 2428 E T 8x2 2p (diesel)',
                'years' => '2008 a 2011'
            ],
            
            [
                'id' => 5969,
                'brand_id' => 105,
                'fipe_code' => '504141-4',
                'model' => 'CARGO 2429 E 6x2 Turbo 2p (diesel)(E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 8264,
                'brand_id' => 105,
                'fipe_code' => '504163-5',
                'model' => 'CARGO 2431 E 6x2 Turbo 2p (diesel)(E5)',
                'years' => '2018 a 2019'
            ],
            
            [
                'id' => 3212,
                'brand_id' => 105,
                'fipe_code' => '504093-0',
                'model' => 'CARGO 2622/2622 E 6x4 T 3-Eixos 2p (die)',
                'years' => '2002 a 2012'
            ],
            
            [
                'id' => 5970,
                'brand_id' => 105,
                'fipe_code' => '504142-2',
                'model' => 'CARGO 2623 E 6x4 Turbo 2p (diesel)(E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 3213,
                'brand_id' => 105,
                'fipe_code' => '504094-9',
                'model' => 'CARGO 2626 6x4 T 3-Eixos 2p (diesel)',
                'years' => '2002 a 2006'
            ],
            
            [
                'id' => 3986,
                'brand_id' => 105,
                'fipe_code' => '504114-7',
                'model' => 'CARGO 2628 E 6x4 T 3-Eixos 2p (diesel)',
                'years' => '2006 a 2012'
            ],
            
            [
                'id' => 5963,
                'brand_id' => 105,
                'fipe_code' => '504143-0',
                'model' => 'CARGO 2629 E 6x4 Turbo 2p (diesel)(E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 3214,
                'brand_id' => 105,
                'fipe_code' => '504047-7',
                'model' => 'CARGO 2630 6x4 3-Eixos 2p (diesel)',
                'years' => '1998 a 2002'
            ],
            
            [
                'id' => 3215,
                'brand_id' => 105,
                'fipe_code' => '504090-6',
                'model' => 'CARGO 2631 6x4 3-Eixos 2p (diesel)',
                'years' => '2002 a 2005'
            ],
            
            [
                'id' => 8265,
                'brand_id' => 105,
                'fipe_code' => '504165-1',
                'model' => 'CARGO 2631 E 6x4 Turbo 2p (diesel)(E5)',
                'years' => '2018 a 2019'
            ],
            
            [
                'id' => 3987,
                'brand_id' => 105,
                'fipe_code' => '504115-5',
                'model' => 'CARGO 2632 E 6x4 T 3-Eixos 2p (diesel)',
                'years' => '2006 a 2008'
            ],
            
            [
                'id' => 3810,
                'brand_id' => 105,
                'fipe_code' => '504108-2',
                'model' => 'CARGO 2831 6x4 T 3-Eixos 2p (diesel)',
                'years' => '2005 a 2005'
            ],
            
            [
                'id' => 6555,
                'brand_id' => 105,
                'fipe_code' => '504148-1',
                'model' => 'CARGO 2842 E Turbo 6x2 2p (diesel)(E5)',
                'years' => '2013 a 2019'
            ],
            
            [
                'id' => 3988,
                'brand_id' => 105,
                'fipe_code' => '504116-3',
                'model' => 'CARGO 2932 E 6x4 T 3-Eixos 2p (diesel)',
                'years' => '2006 a 2008'
            ],
            
            [
                'id' => 8266,
                'brand_id' => 105,
                'fipe_code' => '504164-3',
                'model' => 'CARGO 3031 E 8x2 Turbo 2p (diesel)(E5)',
                'years' => '2018 a 2019'
            ],
            
            [
                'id' => 7610,
                'brand_id' => 105,
                'fipe_code' => '504160-0',
                'model' => 'CARGO 3129 6x4 Turbo 2p (diesel)(E5)',
                'years' => '2016 a 2018'
            ],
            
            [
                'id' => 8267,
                'brand_id' => 105,
                'fipe_code' => '504166-0',
                'model' => 'CARGO 3131 E 6x4 Turbo 2p (diesel)(E5)',
                'years' => '2018 a 2019'
            ],
            
            [
                'id' => 5569,
                'brand_id' => 105,
                'fipe_code' => '504133-3',
                'model' => 'CARGO 3132 E 6x4 T 3-Eixos 2p (diesel)',
                'years' => '2011 a 2012'
            ],
            
            [
                'id' => 5964,
                'brand_id' => 105,
                'fipe_code' => '504144-9',
                'model' => 'CARGO 3133 E 6x4 Turbo 2p (diesel)(E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 3216,
                'brand_id' => 105,
                'fipe_code' => '504098-1',
                'model' => 'CARGO 3222 Turbo 2p (diesel)',
                'years' => '2003 a 2005'
            ],
            
            [
                'id' => 3217,
                'brand_id' => 105,
                'fipe_code' => '504048-5',
                'model' => 'CARGO 3224 2p (diesel)',
                'years' => '1989 a 1997'
            ],
            
            [
                'id' => 3218,
                'brand_id' => 105,
                'fipe_code' => '504049-3',
                'model' => 'CARGO 3530 Turbo 2p (diesel)',
                'years' => '1991 a 1997'
            ],
            
            [
                'id' => 3219,
                'brand_id' => 105,
                'fipe_code' => '504050-7',
                'model' => 'CARGO 4030 2p (diesel)',
                'years' => '1994 a 2002'
            ],
            
            [
                'id' => 3220,
                'brand_id' => 105,
                'fipe_code' => '504095-7',
                'model' => 'CARGO 4031 Turbo 2p (diesel)',
                'years' => '2002 a 2005'
            ],
            
            [
                'id' => 3221,
                'brand_id' => 105,
                'fipe_code' => '504103-1',
                'model' => 'CARGO 4331/ 4331S Turbo 2p (diesel)',
                'years' => '2003 a 2006'
            ],
            
            [
                'id' => 3989,
                'brand_id' => 105,
                'fipe_code' => '504112-0',
                'model' => 'CARGO 4432 E Turbo 2p (diesel)',
                'years' => '2006 a 2007'
            ],
            
            [
                'id' => 4356,
                'brand_id' => 105,
                'fipe_code' => '504120-1',
                'model' => 'CARGO 4532 E Turbo 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 3222,
                'brand_id' => 105,
                'fipe_code' => '504107-4',
                'model' => 'CARGO 5031 6x4 T 3-Eixos 2p (diesel)',
                'years' => '2005 a 2005'
            ],
            
            [
                'id' => 3990,
                'brand_id' => 105,
                'fipe_code' => '504117-1',
                'model' => 'CARGO 5032 E 6x4 T 3-Eixos 2p (diesel)',
                'years' => '2006 a 2008'
            ],
            
            [
                'id' => 4636,
                'brand_id' => 105,
                'fipe_code' => '504124-4',
                'model' => 'CARGO 6332 E 6x4 T 3-Eixos 2p (diesel)',
                'years' => '2008 a 2011'
            ],
            
            [
                'id' => 4391,
                'brand_id' => 105,
                'fipe_code' => '504121-0',
                'model' => 'CARGO 712 E Turbo 2p (diesel)',
                'years' => '2007 a 2012'
            ],
            
            [
                'id' => 3223,
                'brand_id' => 105,
                'fipe_code' => '504051-5',
                'model' => 'CARGO 814 Turbo 2p (diesel)',
                'years' => '1996 a 2001'
            ],
            
            [
                'id' => 3224,
                'brand_id' => 105,
                'fipe_code' => '504086-8',
                'model' => 'CARGO 815/815 S/815 E Turbo 2p (diesel)',
                'years' => '2001 a 2012'
            ],
            
            [
                'id' => 5971,
                'brand_id' => 105,
                'fipe_code' => '504134-1',
                'model' => 'CARGO 816 E/816 S Turbo 2p (diesel)(E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 3225,
                'brand_id' => 105,
                'fipe_code' => '504052-3',
                'model' => 'F-11000 2p (diesel)',
                'years' => '1981 a 1992'
            ],
            
            [
                'id' => 3226,
                'brand_id' => 105,
                'fipe_code' => '504053-1',
                'model' => 'F-11000 3-Eixos 2p (diesel)',
                'years' => '1981 a 1992'
            ],
            
            [
                'id' => 3227,
                'brand_id' => 105,
                'fipe_code' => '504056-6',
                'model' => 'F-12000 2p (diesel)',
                'years' => '1992 a 2005'
            ],
            
            [
                'id' => 3228,
                'brand_id' => 105,
                'fipe_code' => '504057-4',
                'model' => 'F-12000 3-Eixos 2p (diesel)',
                'years' => '1992 a 2005'
            ],
            
            [
                'id' => 3229,
                'brand_id' => 105,
                'fipe_code' => '504058-2',
                'model' => 'F-13000 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3230,
                'brand_id' => 105,
                'fipe_code' => '504059-0',
                'model' => 'F-13000 3-Eixos 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3231,
                'brand_id' => 105,
                'fipe_code' => '504062-0',
                'model' => 'F-14000 2p (diesel)',
                'years' => '1981 a 2005'
            ],
            
            [
                'id' => 3232,
                'brand_id' => 105,
                'fipe_code' => '504063-9',
                'model' => 'F-14000 3-Eixos 2p (diesel)',
                'years' => '1981 a 2005'
            ],
            
            [
                'id' => 3233,
                'brand_id' => 105,
                'fipe_code' => '504064-7',
                'model' => 'F-14000 HD 2p (diesel)',
                'years' => '1992 a 1998'
            ],
            
            [
                'id' => 3234,
                'brand_id' => 105,
                'fipe_code' => '504065-5',
                'model' => 'F-14000 HD 3-Eixos 2p (diesel)',
                'years' => '1992 a 1998'
            ],
            
            [
                'id' => 3235,
                'brand_id' => 105,
                'fipe_code' => '504066-3',
                'model' => 'F-16000 2p (diesel)',
                'years' => '1999 a 2004'
            ],
            
            [
                'id' => 3236,
                'brand_id' => 105,
                'fipe_code' => '504067-1',
                'model' => 'F-16000 3-Eixos 2p (diesel)',
                'years' => '1999 a 2004'
            ],
            
            [
                'id' => 3237,
                'brand_id' => 105,
                'fipe_code' => '504068-0',
                'model' => 'F-19000 2p (diesel)',
                'years' => '1981 a 1982'
            ],
            
            [
                'id' => 3238,
                'brand_id' => 105,
                'fipe_code' => '504069-8',
                'model' => 'F-19000 3-Eixos 2p (diesel)',
                'years' => '1981 a 1982'
            ],
            
            [
                'id' => 3239,
                'brand_id' => 105,
                'fipe_code' => '504070-1',
                'model' => 'F-2000 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3240,
                'brand_id' => 105,
                'fipe_code' => '504071-0',
                'model' => 'F-21000 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3241,
                'brand_id' => 105,
                'fipe_code' => '504072-8',
                'model' => 'F-22000 2p (diesel)',
                'years' => '1981 a 1992'
            ],
            
            [
                'id' => 3242,
                'brand_id' => 105,
                'fipe_code' => '504073-6',
                'model' => 'F-350 2p (diesel)',
                'years' => '1998 a 2012'
            ],
            
            [
                'id' => 6947,
                'brand_id' => 105,
                'fipe_code' => '504152-0',
                'model' => 'F-350 2p (diesel)(E5)',
                'years' => '2015 a 2019'
            ],
            
            [
                'id' => 3243,
                'brand_id' => 105,
                'fipe_code' => '504074-4',
                'model' => 'F-350 7.3 V-8 2p (Gas.)',
                'years' => '1991 a 1992'
            ],
            
            [
                'id' => 3244,
                'brand_id' => 105,
                'fipe_code' => '504106-6',
                'model' => 'F-350 CD 4p (diesel)',
                'years' => '2005 a 2012'
            ],
            
            [
                'id' => 6980,
                'brand_id' => 105,
                'fipe_code' => '504154-6',
                'model' => 'F-350 TROPICAMPO CD 2.8 (diesel)(E5)',
                'years' => '2015 a 2019'
            ],
            
            [
                'id' => 4268,
                'brand_id' => 105,
                'fipe_code' => '504119-8',
                'model' => 'F-350 TROPICAMPO CD 3.9  TDI (diesel)',
                'years' => '2001 a 2011'
            ],
            
            [
                'id' => 7250,
                'brand_id' => 105,
                'fipe_code' => '504157-0',
                'model' => 'F-4 MILHA CD 2.8 4x2 (diesel)(E5)',
                'years' => '2015 a 2019'
            ],
            
            [
                'id' => 7251,
                'brand_id' => 105,
                'fipe_code' => '504158-9',
                'model' => 'F-4 MILHA CD 2.8 4x4 (diesel)(E5)',
                'years' => '2015 a 2019'
            ],
            
            [
                'id' => 5055,
                'brand_id' => 105,
                'fipe_code' => '504128-7',
                'model' => 'F-4 MILHA CD 3.9 TDI (diesel)',
                'years' => '2009 a 2012'
            ],
            
            [
                'id' => 6948,
                'brand_id' => 105,
                'fipe_code' => '504151-1',
                'model' => 'F-4000 4x2 2p (diesel)(E5)',
                'years' => '2015 a 2019'
            ],
            
            [
                'id' => 6981,
                'brand_id' => 105,
                'fipe_code' => '504155-4',
                'model' => 'F-4000 4x4 2p (diesel)(E5)',
                'years' => '2015 a 2019'
            ],
            
            [
                'id' => 8034,
                'brand_id' => 105,
                'fipe_code' => '504162-7',
                'model' => 'F-4000 Trop. Multi CT 2.8 4x2 (die.)(E5)',
                'years' => '2015 a 2019'
            ],
            
            [
                'id' => 8035,
                'brand_id' => 105,
                'fipe_code' => '504161-9',
                'model' => 'F-4000 Trop. Multi CT 2.8 4x4 (die.)(E5)',
                'years' => '2015 a 2019'
            ],
            
            [
                'id' => 7252,
                'brand_id' => 105,
                'fipe_code' => '504156-2',
                'model' => 'F-4000 TROP.MULTI CD 2.8 4x4 (dies.)(E5)',
                'years' => '2015 a 2019'
            ],
            
            [
                'id' => 6982,
                'brand_id' => 105,
                'fipe_code' => '504153-8',
                'model' => 'F-4000 TROPICAMPO CD 2.8 (diesel)(E5)',
                'years' => '2015 a 2019'
            ],
            
            [
                'id' => 5056,
                'brand_id' => 105,
                'fipe_code' => '504127-9',
                'model' => 'F-4000 TROPICAMPO CD 3.9 TDI (diesel)',
                'years' => '2009 a 2012'
            ],
            
            [
                'id' => 3245,
                'brand_id' => 105,
                'fipe_code' => '504077-9',
                'model' => 'F-4000 TURBO CUMMINS 2p (diesel)',
                'years' => '1997 a 2012'
            ],
            
            [
                'id' => 4758,
                'brand_id' => 105,
                'fipe_code' => '504126-0',
                'model' => 'F-4000 TURBO CUMMINS 4x4 2p (diesel)',
                'years' => '2009 a 2012'
            ],
            
            [
                'id' => 3246,
                'brand_id' => 105,
                'fipe_code' => '504078-7',
                'model' => 'F-4000 TURBO MWM 2p (diesel)',
                'years' => '1981 a 1998'
            ],
            
            [
                'id' => 3247,
                'brand_id' => 105,
                'fipe_code' => '504079-5',
                'model' => 'F-7000 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 9159,
                'brand_id' => 105,
                'fipe_code' => '504169-4',
                'model' => 'F-MAXX 1723 E Turbo 228cv 6p (die.)(E5)',
                'years' => '2017 a 2019'
            ],
            
            [
                'id' => 5157,
                'brand_id' => 105,
                'fipe_code' => '504130-9',
                'model' => 'F-MAXX 815e 4.0 150cv (diesel) 6p',
                'years' => '2009 a 2013'
            ],
            
            [
                'id' => 6456,
                'brand_id' => 105,
                'fipe_code' => '504146-5',
                'model' => 'F-MAXX 816e 162cv (diesel) 6p(E5)',
                'years' => '2013 a 2017'
            ],
            
            [
                'id' => 5443,
                'brand_id' => 105,
                'fipe_code' => '504131-7',
                'model' => 'F-MAXX F-12000 5.9 162cv TD (diesel) 6p',
                'years' => '2001 a 2005'
            ]
            ];
            
            $GMCModels = [
            [
                'id' => 3248,
                'brand_id' => 106,
                'fipe_code' => '505001-4',
                'model' => '12-170 T 3-Eixos 2p (diesel)',
                'years' => '1996 a 2002'
            ],
            
            [
                'id' => 3249,
                'brand_id' => 106,
                'fipe_code' => '505002-2',
                'model' => '12-170 Turbo 2p (diesel)',
                'years' => '1996 a 2002'
            ],
            
            [
                'id' => 3250,
                'brand_id' => 106,
                'fipe_code' => '505003-0',
                'model' => '14-190 T 3-Eixos 2p (diesel)',
                'years' => '1996 a 2002'
            ],
            
            [
                'id' => 3251,
                'brand_id' => 106,
                'fipe_code' => '505004-9',
                'model' => '14-190 Turbo 2p (diesel)',
                'years' => '1996 a 2002'
            ],
            
            [
                'id' => 3252,
                'brand_id' => 106,
                'fipe_code' => '505005-7',
                'model' => '15-190 T 3-Eixos 2p (diesel)',
                'years' => '1997 a 2001'
            ],
            
            [
                'id' => 3253,
                'brand_id' => 106,
                'fipe_code' => '505006-5',
                'model' => '15-190 Turbo 2p (diesel)',
                'years' => '1997 a 2001'
            ],
            
            [
                'id' => 3254,
                'brand_id' => 106,
                'fipe_code' => '505007-3',
                'model' => '16-220 T 3-Eixos 2p (diesel)',
                'years' => '1996 a 2002'
            ],
            
            [
                'id' => 3255,
                'brand_id' => 106,
                'fipe_code' => '505008-1',
                'model' => '16-220 Turbo 2p (diesel)',
                'years' => '1996 a 2002'
            ],
            
            [
                'id' => 3256,
                'brand_id' => 106,
                'fipe_code' => '505013-8',
                'model' => '3500 HD Turbo (diesel)',
                'years' => '2001 a 2002'
            ],
            
            [
                'id' => 3257,
                'brand_id' => 106,
                'fipe_code' => '505009-0',
                'model' => '5-90 2p (diesel)',
                'years' => '1998 a 2001'
            ],
            
            [
                'id' => 3258,
                'brand_id' => 106,
                'fipe_code' => '505010-3',
                'model' => '6-100 2p (diesel)',
                'years' => '1996 a 2002'
            ],
            
            [
                'id' => 3259,
                'brand_id' => 106,
                'fipe_code' => '505011-1',
                'model' => '6-150 Turbo 2p (diesel)',
                'years' => '1996 a 2002'
            ],
            
            [
                'id' => 3260,
                'brand_id' => 106,
                'fipe_code' => '505012-0',
                'model' => '7-110 Turbo 2p (diesel)',
                'years' => '1996 a 2002'
            ]
            ];
            
            $MARCOPOLOModels = [
            [
                'id' => 10692,
                'brand_id' => 108,
                'fipe_code' => '508101-7',
                'model' => 'VOLARE ATT. 8 CURTO EXECUTIVO (die)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10693,
                'brand_id' => 108,
                'fipe_code' => '508105-0',
                'model' => 'VOLARE ATT. 8 CURTO FRETAMENTO (die)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10694,
                'brand_id' => 108,
                'fipe_code' => '508103-3',
                'model' => 'VOLARE ATT. 8 E. LONGO ESCOLAR (die)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10695,
                'brand_id' => 108,
                'fipe_code' => '508089-4',
                'model' => 'VOLARE ATT. 8 E. LONGO EXECUT (die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10696,
                'brand_id' => 108,
                'fipe_code' => '508091-6',
                'model' => 'VOLARE ATT. 8 E. LONGO FRET. (die) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10697,
                'brand_id' => 108,
                'fipe_code' => '508092-4',
                'model' => 'VOLARE ATT. 8 LONGO EXECUTIVO (die) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10698,
                'brand_id' => 108,
                'fipe_code' => '508097-5',
                'model' => 'VOLARE ATT. 8 LONGO FRETAMENTO (die)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10699,
                'brand_id' => 108,
                'fipe_code' => '508096-7',
                'model' => 'VOLARE ATT. 8 MEDIO EXECUTIVO (die)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10700,
                'brand_id' => 108,
                'fipe_code' => '508102-5',
                'model' => 'VOLARE ATT. 8 MEDIO FRETAMENTO (die)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10701,
                'brand_id' => 108,
                'fipe_code' => '508081-9',
                'model' => 'VOLARE ATTACK 8 4X4 ESCOLAR (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10702,
                'brand_id' => 108,
                'fipe_code' => '508078-9',
                'model' => 'VOLARE ATTACK 8 4X4 EXECUTIVO (die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10703,
                'brand_id' => 108,
                'fipe_code' => '508080-0',
                'model' => 'VOLARE ATTACK 8 4X4 FRETAMENTO (die)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10704,
                'brand_id' => 108,
                'fipe_code' => '508108-4',
                'model' => 'VOLARE ATTACK 8 CURTO ESCOLAR (die)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10705,
                'brand_id' => 108,
                'fipe_code' => '508104-1',
                'model' => 'VOLARE ATTACK 8 CURTO RURAL (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10706,
                'brand_id' => 108,
                'fipe_code' => '508109-2',
                'model' => 'VOLARE ATTACK 8 CURTO URBANO (die.) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10707,
                'brand_id' => 108,
                'fipe_code' => '508090-8',
                'model' => 'VOLARE ATTACK 8 E. LONGO RURAL (die)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10708,
                'brand_id' => 108,
                'fipe_code' => '508106-8',
                'model' => 'VOLARE ATTACK 8 LONGO ESCOLAR (die)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10709,
                'brand_id' => 108,
                'fipe_code' => '508094-0',
                'model' => 'VOLARE ATTACK 8 LONGO RURAL (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10710,
                'brand_id' => 108,
                'fipe_code' => '508095-9',
                'model' => 'VOLARE ATTACK 8 LONGO URBANO (die) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10711,
                'brand_id' => 108,
                'fipe_code' => '508107-6',
                'model' => 'VOLARE ATTACK 8 MEDIO ESCOLAR (die)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10712,
                'brand_id' => 108,
                'fipe_code' => '508098-3',
                'model' => 'VOLARE ATTACK 8 MEDIO RURAL (die)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10713,
                'brand_id' => 108,
                'fipe_code' => '508100-9',
                'model' => 'VOLARE ATTACK 8 MEDIO URBANO (die)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10714,
                'brand_id' => 108,
                'fipe_code' => '508099-1',
                'model' => 'VOLARE ATTACK 9 ESCOLAR (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10715,
                'brand_id' => 108,
                'fipe_code' => '508083-5',
                'model' => 'VOLARE ATTACK 9 EXECUTIVO (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10716,
                'brand_id' => 108,
                'fipe_code' => '508088-6',
                'model' => 'VOLARE ATTACK 9 FRETAMENTO (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10717,
                'brand_id' => 108,
                'fipe_code' => '508087-8',
                'model' => 'VOLARE ATTACK 9 URBANO (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7651,
                'brand_id' => 108,
                'fipe_code' => '508069-0',
                'model' => 'VOLARE CINCO ESCOLAR (diesel)(E5)',
                'years' => '2016 a 2020'
            ],
            
            [
                'id' => 7652,
                'brand_id' => 108,
                'fipe_code' => '508070-3',
                'model' => 'VOLARE CINCO EXECUTIVO (diesel)(E5)',
                'years' => '2016 a 2023'
            ],
            
            [
                'id' => 7653,
                'brand_id' => 108,
                'fipe_code' => '508071-1',
                'model' => 'VOLARE CINCO EXECUTIVO PLUS (diesel)(E5)',
                'years' => '2016 a 2020'
            ],
            
            [
                'id' => 5915,
                'brand_id' => 108,
                'fipe_code' => '508016-9',
                'model' => 'VOLARE ESC./LOT. W9/DW9 FLY (dies.)(E5)',
                'years' => '2012 a 2015'
            ],
            
            [
                'id' => 6983,
                'brand_id' => 108,
                'fipe_code' => '508035-5',
                'model' => 'VOLARE ESCOLAR V6L (diesel)(E5)',
                'years' => '2014 a 2017'
            ],
            
            [
                'id' => 6984,
                'brand_id' => 108,
                'fipe_code' => '508039-8',
                'model' => 'VOLARE ESCOLAR V8L 4x4 (diesel)(E5)',
                'years' => '2013 a 2023'
            ],
            
            [
                'id' => 6985,
                'brand_id' => 108,
                'fipe_code' => '508036-3',
                'model' => 'VOLARE ESCOLAR V8L CURTO (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 6986,
                'brand_id' => 108,
                'fipe_code' => '508038-0',
                'model' => 'VOLARE ESCOLAR V8L LONGO (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 6987,
                'brand_id' => 108,
                'fipe_code' => '508037-1',
                'model' => 'VOLARE ESCOLAR V8L MÉDIO (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 7915,
                'brand_id' => 108,
                'fipe_code' => '508074-6',
                'model' => 'VOLARE ESCOLAR V9L (diesel)(E5)',
                'years' => '2017 a 2023'
            ],
            
            [
                'id' => 6992,
                'brand_id' => 108,
                'fipe_code' => '508034-7',
                'model' => 'VOLARE ESCOLAR W-L (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 6988,
                'brand_id' => 108,
                'fipe_code' => '508030-4',
                'model' => 'VOLARE ESCOLAR W6 (diesel)(E5)',
                'years' => '2014 a 2017'
            ],
            
            [
                'id' => 6989,
                'brand_id' => 108,
                'fipe_code' => '508031-2',
                'model' => 'VOLARE ESCOLAR W7 (diesel)(E5)',
                'years' => '2014 a 2018'
            ],
            
            [
                'id' => 6990,
                'brand_id' => 108,
                'fipe_code' => '508032-0',
                'model' => 'VOLARE ESCOLAR W8 (diesel)(E5)',
                'years' => '2014 a 2018'
            ],
            
            [
                'id' => 6991,
                'brand_id' => 108,
                'fipe_code' => '508033-9',
                'model' => 'VOLARE ESCOLAR W9/DW9 (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 6607,
                'brand_id' => 108,
                'fipe_code' => '508029-0',
                'model' => 'VOLARE ESCOLAR/LOT. W6 FLY (diesel) (E5)',
                'years' => '2013 a 2014'
            ],
            
            [
                'id' => 6458,
                'brand_id' => 108,
                'fipe_code' => '508023-1',
                'model' => 'VOLARE ESCOLAR/LOT. W7 FLY (dies.)(E5)',
                'years' => '2013 a 2014'
            ],
            
            [
                'id' => 5914,
                'brand_id' => 108,
                'fipe_code' => '508015-0',
                'model' => 'VOLARE ESCOLAR/LOT. W8 FLY (dies.)(E5)',
                'years' => '2012 a 2014'
            ],
            
            [
                'id' => 6570,
                'brand_id' => 108,
                'fipe_code' => '508027-4',
                'model' => 'VOLARE ESCOLARBUS 4x4 V8 (diesel)(E5)',
                'years' => '2013 a 2014'
            ],
            
            [
                'id' => 5918,
                'brand_id' => 108,
                'fipe_code' => '508012-6',
                'model' => 'VOLARE ESCOLARBUS/LOTAÇÃO V5 (dies.)(E5)',
                'years' => '2012 a 2014'
            ],
            
            [
                'id' => 5912,
                'brand_id' => 108,
                'fipe_code' => '508013-4',
                'model' => 'VOLARE ESCOLARBUS/LOTAÇÂO V6 (dies.)(E5)',
                'years' => '2012 a 2014'
            ],
            
            [
                'id' => 5913,
                'brand_id' => 108,
                'fipe_code' => '508014-2',
                'model' => 'VOLARE ESCOLARBUS/LOTAÇÃO V8 (dies.)(E5)',
                'years' => '2012 a 2014'
            ],
            
            [
                'id' => 5916,
                'brand_id' => 108,
                'fipe_code' => '508017-7',
                'model' => 'VOLARE EXECUTIVE V5 (diesel)(E5)',
                'years' => '2012 a 2014'
            ],
            
            [
                'id' => 5917,
                'brand_id' => 108,
                'fipe_code' => '508018-5',
                'model' => 'VOLARE EXECUTIVE V6 (diesel)(E5)',
                'years' => '2012 a 2014'
            ],
            
            [
                'id' => 5908,
                'brand_id' => 108,
                'fipe_code' => '508019-3',
                'model' => 'VOLARE EXECUTIVE V8 (diesel)(E5)',
                'years' => '2012 a 2014'
            ],
            
            [
                'id' => 6608,
                'brand_id' => 108,
                'fipe_code' => '508028-2',
                'model' => 'VOLARE EXECUTIVE W6 FLY (diesel) (E5)',
                'years' => '2013 a 2014'
            ],
            
            [
                'id' => 6459,
                'brand_id' => 108,
                'fipe_code' => '508024-0',
                'model' => 'VOLARE EXECUTIVE W7 FLY (diesel)(E5)',
                'years' => '2013 a 2014'
            ],
            
            [
                'id' => 5909,
                'brand_id' => 108,
                'fipe_code' => '508020-7',
                'model' => 'VOLARE EXECUTIVE W8 FLY (diesel)(E5)',
                'years' => '2012 a 2014'
            ],
            
            [
                'id' => 5910,
                'brand_id' => 108,
                'fipe_code' => '508021-5',
                'model' => 'VOLARE EXECUTIVE W9/DW9 FLY (diesel)(E5)',
                'years' => '2012 a 2014'
            ],
            
            [
                'id' => 6506,
                'brand_id' => 108,
                'fipe_code' => '508025-8',
                'model' => 'VOLARE EXECUTIVE WL FLY (diesel)(E5)',
                'years' => '2013 a 2014'
            ],
            
            [
                'id' => 3294,
                'brand_id' => 108,
                'fipe_code' => '508003-7',
                'model' => 'VOLARE EXECUTIVO A5/V5 (diesel)',
                'years' => '2002 a 2012'
            ],
            
            [
                'id' => 3295,
                'brand_id' => 108,
                'fipe_code' => '508001-0',
                'model' => 'VOLARE EXECUTIVO A6/V6 (diesel)',
                'years' => '1998 a 2012'
            ],
            
            [
                'id' => 3296,
                'brand_id' => 108,
                'fipe_code' => '508005-3',
                'model' => 'VOLARE EXECUTIVO A8/V8 (diesel)',
                'years' => '2000 a 2012'
            ],
            
            [
                'id' => 5572,
                'brand_id' => 108,
                'fipe_code' => '508011-8',
                'model' => 'VOLARE EXECUTIVO DW9 (diesel)',
                'years' => '2011 a 2012'
            ],
            
            [
                'id' => 6993,
                'brand_id' => 108,
                'fipe_code' => '508056-8',
                'model' => 'VOLARE EXECUTIVO V6L (diesel)(E5)',
                'years' => '2014 a 2017'
            ],
            
            [
                'id' => 6994,
                'brand_id' => 108,
                'fipe_code' => '508057-6',
                'model' => 'VOLARE EXECUTIVO V8L CURTO (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 6995,
                'brand_id' => 108,
                'fipe_code' => '508058-4',
                'model' => 'VOLARE EXECUTIVO V8L MÉDIO (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 7913,
                'brand_id' => 108,
                'fipe_code' => '508072-0',
                'model' => 'VOLARE EXECUTIVO V9L (diesel)(E5)',
                'years' => '2017 a 2023'
            ],
            
            [
                'id' => 7000,
                'brand_id' => 108,
                'fipe_code' => '508055-0',
                'model' => 'VOLARE EXECUTIVO W-L (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 6996,
                'brand_id' => 108,
                'fipe_code' => '508051-7',
                'model' => 'VOLARE EXECUTIVO W6 (diesel)(E5)',
                'years' => '2014 a 2017'
            ],
            
            [
                'id' => 6997,
                'brand_id' => 108,
                'fipe_code' => '508052-5',
                'model' => 'VOLARE EXECUTIVO W7 (diesel)(E5)',
                'years' => '2014 a 2018'
            ],
            
            [
                'id' => 3297,
                'brand_id' => 108,
                'fipe_code' => '508007-0',
                'model' => 'VOLARE EXECUTIVO W8 (diesel)',
                'years' => '2002 a 2012'
            ],
            
            [
                'id' => 6998,
                'brand_id' => 108,
                'fipe_code' => '508053-3',
                'model' => 'VOLARE EXECUTIVO W8 (diesel)(E5)',
                'years' => '2014 a 2018'
            ],
            
            [
                'id' => 4087,
                'brand_id' => 108,
                'fipe_code' => '508009-6',
                'model' => 'VOLARE EXECUTIVO W9 (diesel)',
                'years' => '2006 a 2012'
            ],
            
            [
                'id' => 6999,
                'brand_id' => 108,
                'fipe_code' => '508054-1',
                'model' => 'VOLARE EXECUTIVO W9/DW9 (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 10718,
                'brand_id' => 108,
                'fipe_code' => '508085-1',
                'model' => 'VOLARE FLY 10 ESCOLAR (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10719,
                'brand_id' => 108,
                'fipe_code' => '508077-0',
                'model' => 'VOLARE FLY 10 EXECUTIVO (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10720,
                'brand_id' => 108,
                'fipe_code' => '508079-7',
                'model' => 'VOLARE FLY 10 FRETAMENTO (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10721,
                'brand_id' => 108,
                'fipe_code' => '508076-2',
                'model' => 'VOLARE FLY 10 URBANO (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10722,
                'brand_id' => 108,
                'fipe_code' => '508093-2',
                'model' => 'VOLARE FLY 9 ESCOLAR (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10723,
                'brand_id' => 108,
                'fipe_code' => '508082-7',
                'model' => 'VOLARE FLY 9 EXECUTIVO (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10724,
                'brand_id' => 108,
                'fipe_code' => '508086-0',
                'model' => 'VOLARE FLY 9 FRETAMENTO (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10725,
                'brand_id' => 108,
                'fipe_code' => '508084-3',
                'model' => 'VOLARE FLY 9 URBANO (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7001,
                'brand_id' => 108,
                'fipe_code' => '508049-5',
                'model' => 'VOLARE FRETAMENTO RURAL V8L  (die.)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 7002,
                'brand_id' => 108,
                'fipe_code' => '508045-2',
                'model' => 'VOLARE FRETAMENTO V6L (diesel)(E5)',
                'years' => '2014 a 2017'
            ],
            
            [
                'id' => 7003,
                'brand_id' => 108,
                'fipe_code' => '508050-9',
                'model' => 'VOLARE FRETAMENTO V8L 4x4 (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 7004,
                'brand_id' => 108,
                'fipe_code' => '508046-0',
                'model' => 'VOLARE FRETAMENTO V8L CURTO (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 7005,
                'brand_id' => 108,
                'fipe_code' => '508048-7',
                'model' => 'VOLARE FRETAMENTO V8L LONGO (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 7006,
                'brand_id' => 108,
                'fipe_code' => '508047-9',
                'model' => 'VOLARE FRETAMENTO V8L MÉDIO (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 7916,
                'brand_id' => 108,
                'fipe_code' => '508075-4',
                'model' => 'VOLARE FRETAMENTO V9L (diesel)(E5)',
                'years' => '2017 a 2023'
            ],
            
            [
                'id' => 7011,
                'brand_id' => 108,
                'fipe_code' => '508044-4',
                'model' => 'VOLARE FRETAMENTO W-L (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 7007,
                'brand_id' => 108,
                'fipe_code' => '508040-1',
                'model' => 'VOLARE FRETAMENTO W6 (diesel)(E5)',
                'years' => '2014 a 2017'
            ],
            
            [
                'id' => 7008,
                'brand_id' => 108,
                'fipe_code' => '508041-0',
                'model' => 'VOLARE FRETAMENTO W7 (diesel)(E5)',
                'years' => '2014 a 2018'
            ],
            
            [
                'id' => 7009,
                'brand_id' => 108,
                'fipe_code' => '508042-8',
                'model' => 'VOLARE FRETAMENTO W8 (diesel)(E5)',
                'years' => '2014 a 2018'
            ],
            
            [
                'id' => 7010,
                'brand_id' => 108,
                'fipe_code' => '508043-6',
                'model' => 'VOLARE FRETAMENTO W9/DW9 (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 7012,
                'brand_id' => 108,
                'fipe_code' => '508065-7',
                'model' => 'VOLARE FURGÃO V6L  (diesel)(E5)',
                'years' => '2014 a 2017'
            ],
            
            [
                'id' => 7013,
                'brand_id' => 108,
                'fipe_code' => '508068-1',
                'model' => 'VOLARE FURGÃO V8L 4x4 (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 7014,
                'brand_id' => 108,
                'fipe_code' => '508066-5',
                'model' => 'VOLARE FURGÃO V8L CURTO (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 7015,
                'brand_id' => 108,
                'fipe_code' => '508067-3',
                'model' => 'VOLARE FURGÃO V8L MÉDIO (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 7017,
                'brand_id' => 108,
                'fipe_code' => '508060-6',
                'model' => 'VOLARE LIMOUSINE W-L (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 7016,
                'brand_id' => 108,
                'fipe_code' => '508059-2',
                'model' => 'VOLARE LIMOUSINE W9/DW9 (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 5911,
                'brand_id' => 108,
                'fipe_code' => '508022-3',
                'model' => 'VOLARE LIMOUSINE W9/DW9 FLY (diesel)(E5)',
                'years' => '2012 a 2014'
            ],
            
            [
                'id' => 6507,
                'brand_id' => 108,
                'fipe_code' => '508026-6',
                'model' => 'VOLARE LIMOUSINE WL FLY (diesel)(E5)',
                'years' => '2013 a 2014'
            ],
            
            [
                'id' => 3298,
                'brand_id' => 108,
                'fipe_code' => '508004-5',
                'model' => 'VOLARE LOTAÇÃO E ESCOLAR A5/V5 (diesel',
                'years' => '2002 a 2012'
            ],
            
            [
                'id' => 3299,
                'brand_id' => 108,
                'fipe_code' => '508002-9',
                'model' => 'VOLARE LOTAÇÃO E ESCOLAR A6/V6 (diesel',
                'years' => '1998 a 2012'
            ],
            
            [
                'id' => 3300,
                'brand_id' => 108,
                'fipe_code' => '508006-1',
                'model' => 'VOLARE LOTAÇÃO E ESCOLAR A8/V8 (diesel',
                'years' => '2000 a 2012'
            ],
            
            [
                'id' => 3301,
                'brand_id' => 108,
                'fipe_code' => '508008-8',
                'model' => 'VOLARE LOTAÇÃO E ESCOLAR W8 (diesel)',
                'years' => '2002 a 2014'
            ],
            
            [
                'id' => 4086,
                'brand_id' => 108,
                'fipe_code' => '508010-0',
                'model' => 'VOLARE LOTAÇÃO E ESCOLAR W9 (diesel)',
                'years' => '2006 a 2012'
            ],
            
            [
                'id' => 7914,
                'brand_id' => 108,
                'fipe_code' => '508073-8',
                'model' => 'VOLARE URBANO V9L (diesel)(E5)',
                'years' => '2017 a 2023'
            ],
            
            [
                'id' => 7021,
                'brand_id' => 108,
                'fipe_code' => '508064-9',
                'model' => 'VOLARE URBANO W-L (diesel)(E5)',
                'years' => '2013 a 2023'
            ],
            
            [
                'id' => 7018,
                'brand_id' => 108,
                'fipe_code' => '508061-4',
                'model' => 'VOLARE URBANO W6 (diesel)(E5)',
                'years' => '2014 a 2017'
            ],
            
            [
                'id' => 7019,
                'brand_id' => 108,
                'fipe_code' => '508062-2',
                'model' => 'VOLARE URBANO W7 (diesel)(E5)',
                'years' => '2014 a 2018'
            ],
            
            [
                'id' => 7020,
                'brand_id' => 108,
                'fipe_code' => '508063-0',
                'model' => 'VOLARE URBANO W9/DW9 (diesel)(E5)',
                'years' => '2014 a 2023'
            ]
            ];
            
            $MERCEDESBENZModels = [
            [
                'id' => 3302,
                'brand_id' => 109,
                'fipe_code' => '509001-6',
                'model' => '1114 3-Eixos 2p (diesel)',
                'years' => '1994 a 1997'
            ],
            
            [
                'id' => 3303,
                'brand_id' => 109,
                'fipe_code' => '509002-4',
                'model' => '1214 2p (diesel)',
                'years' => '1989 a 1997'
            ],
            
            [
                'id' => 3304,
                'brand_id' => 109,
                'fipe_code' => '509003-2',
                'model' => '1214 3-Eixos 2p (diesel)',
                'years' => '1989 a 1997'
            ],
            
            [
                'id' => 3305,
                'brand_id' => 109,
                'fipe_code' => '509004-0',
                'model' => '1214 C 2p (diesel)',
                'years' => '1997 a 1999'
            ],
            
            [
                'id' => 3306,
                'brand_id' => 109,
                'fipe_code' => '509005-9',
                'model' => '1215 C 2p (diesel)',
                'years' => '1999 a 2004'
            ],
            
            [
                'id' => 3307,
                'brand_id' => 109,
                'fipe_code' => '509208-6',
                'model' => '1215 C 3-Eixos 2p (diesel)',
                'years' => '1999 a 2004'
            ],
            
            [
                'id' => 3308,
                'brand_id' => 109,
                'fipe_code' => '509006-7',
                'model' => '1218 2p (diesel)',
                'years' => '1991 a 1997'
            ],
            
            [
                'id' => 3309,
                'brand_id' => 109,
                'fipe_code' => '509007-5',
                'model' => '1218 3-Eixos 2p (diesel)',
                'years' => '1991 a 1997'
            ],
            
            [
                'id' => 3310,
                'brand_id' => 109,
                'fipe_code' => '509215-9',
                'model' => '1318 2p (diesel)',
                'years' => '2003 a 2004'
            ],
            
            [
                'id' => 3311,
                'brand_id' => 109,
                'fipe_code' => '509227-2',
                'model' => '1318 3-Eixos 2p (diesel)',
                'years' => '2003 a 2004'
            ],
            
            [
                'id' => 3312,
                'brand_id' => 109,
                'fipe_code' => '509008-3',
                'model' => '1414 2p (diesel)',
                'years' => '1990 a 1994'
            ],
            
            [
                'id' => 3313,
                'brand_id' => 109,
                'fipe_code' => '509009-1',
                'model' => '1414 3-Eixos 2p (diesel)',
                'years' => '1990 a 1994'
            ],
            
            [
                'id' => 3314,
                'brand_id' => 109,
                'fipe_code' => '509010-5',
                'model' => '1418 2p (diesel)',
                'years' => '1989 a 2001'
            ],
            
            [
                'id' => 3315,
                'brand_id' => 109,
                'fipe_code' => '509011-3',
                'model' => '1418 3-Eixos 2p (diesel)',
                'years' => '1989 a 2001'
            ],
            
            [
                'id' => 3316,
                'brand_id' => 109,
                'fipe_code' => '509209-4',
                'model' => '1420 2p (diesel)',
                'years' => '2002 a 2005'
            ],
            
            [
                'id' => 3317,
                'brand_id' => 109,
                'fipe_code' => '509226-4',
                'model' => '1420 3-Eixos 2p (diesel)',
                'years' => '2002 a 2005'
            ],
            
            [
                'id' => 3318,
                'brand_id' => 109,
                'fipe_code' => '509012-1',
                'model' => '1714 2p (diesel)',
                'years' => '1991 a 1996'
            ],
            
            [
                'id' => 3319,
                'brand_id' => 109,
                'fipe_code' => '509013-0',
                'model' => '1714 3-Eixos 2p (diesel)',
                'years' => '1991 a 1996'
            ],
            
            [
                'id' => 3320,
                'brand_id' => 109,
                'fipe_code' => '509014-8',
                'model' => '1718 2p (diesel)',
                'years' => '1991 a 2012'
            ],
            
            [
                'id' => 3321,
                'brand_id' => 109,
                'fipe_code' => '509015-6',
                'model' => '1718 3-Eixos 2p (diesel)',
                'years' => '1991 a 2012'
            ],
            
            [
                'id' => 3322,
                'brand_id' => 109,
                'fipe_code' => '509194-2',
                'model' => '1718-A 2p (diesel)',
                'years' => '1999 a 2001'
            ],
            
            [
                'id' => 3323,
                'brand_id' => 109,
                'fipe_code' => '509196-9',
                'model' => '1718-K 2p (diesel)',
                'years' => '1997 a 2001'
            ],
            
            [
                'id' => 3324,
                'brand_id' => 109,
                'fipe_code' => '509197-7',
                'model' => '1718-K 3-Eixos 2p (diesel)',
                'years' => '1997 a 2001'
            ],
            
            [
                'id' => 3325,
                'brand_id' => 109,
                'fipe_code' => '509199-3',
                'model' => '1718-M 2p (diesel)',
                'years' => '2000 a 2004'
            ],
            
            [
                'id' => 3326,
                'brand_id' => 109,
                'fipe_code' => '509200-0',
                'model' => '1718-M 3-Eixos 2p (diesel)',
                'years' => '2001 a 2004'
            ],
            
            [
                'id' => 3327,
                'brand_id' => 109,
                'fipe_code' => '509016-4',
                'model' => '1720 2p (diesel)',
                'years' => '1997 a 2004'
            ],
            
            [
                'id' => 3328,
                'brand_id' => 109,
                'fipe_code' => '509017-2',
                'model' => '1720 3-Eixos 2p (diesel)',
                'years' => '1997 a 2006'
            ],
            
            [
                'id' => 3329,
                'brand_id' => 109,
                'fipe_code' => '509214-0',
                'model' => '1720-A 2p (diesel)',
                'years' => '2002 a 2005'
            ],
            
            [
                'id' => 3330,
                'brand_id' => 109,
                'fipe_code' => '509216-7',
                'model' => '1720-K 2p (diesel)',
                'years' => '2002 a 2004'
            ],
            
            [
                'id' => 3331,
                'brand_id' => 109,
                'fipe_code' => '509018-0',
                'model' => '1721/ 1721 S 2p (diesel)',
                'years' => '1991 a 1998'
            ],
            
            [
                'id' => 3332,
                'brand_id' => 109,
                'fipe_code' => '509019-9',
                'model' => '1721/ 1721 S 3-Eixos 2p (diesel)',
                'years' => '1991 a 1998'
            ],
            
            [
                'id' => 3333,
                'brand_id' => 109,
                'fipe_code' => '509020-2',
                'model' => '1723 2p (diesel)',
                'years' => '1997 a 2001'
            ],
            
            [
                'id' => 3334,
                'brand_id' => 109,
                'fipe_code' => '509021-0',
                'model' => '1723 3-Eixos 2p (diesel)',
                'years' => '1997 a 2001'
            ],
            
            [
                'id' => 3335,
                'brand_id' => 109,
                'fipe_code' => '509022-9',
                'model' => '1723-S 2p (diesel)',
                'years' => '1997 a 2001'
            ],
            
            [
                'id' => 3336,
                'brand_id' => 109,
                'fipe_code' => '509223-0',
                'model' => '1728 2p (diesel)',
                'years' => '2003 a 2006'
            ],
            
            [
                'id' => 3337,
                'brand_id' => 109,
                'fipe_code' => '509225-6',
                'model' => '1728 3-Eixos 2p (diesel)',
                'years' => '2003 a 2006'
            ],
            
            [
                'id' => 3338,
                'brand_id' => 109,
                'fipe_code' => '509024-5',
                'model' => '1938-S 2p (diesel)',
                'years' => '1999 a 2006'
            ],
            
            [
                'id' => 3339,
                'brand_id' => 109,
                'fipe_code' => '509217-5',
                'model' => '1938-S 3-Eixos 2p (diesel)',
                'years' => '1999 a 2006'
            ],
            
            [
                'id' => 3340,
                'brand_id' => 109,
                'fipe_code' => '509218-3',
                'model' => '1944-S 2p (diesel)',
                'years' => '2003 a 2005'
            ],
            
            [
                'id' => 3341,
                'brand_id' => 109,
                'fipe_code' => '509219-1',
                'model' => '1944-S 3-Eixos 2p (diesel)',
                'years' => '2003 a 2005'
            ],
            
            [
                'id' => 3342,
                'brand_id' => 109,
                'fipe_code' => '509025-3',
                'model' => '2038 S 3-Eixos 2p (diesel)',
                'years' => '1996 a 1998'
            ],
            
            [
                'id' => 3343,
                'brand_id' => 109,
                'fipe_code' => '509239-6',
                'model' => '2418 3-Eixos 2p (diesel)',
                'years' => '1990 a 1999'
            ],
            
            [
                'id' => 3344,
                'brand_id' => 109,
                'fipe_code' => '509026-1',
                'model' => '2418 6x4 3-Eixos 2p (diesel)',
                'years' => '1990 a 1999'
            ],
            
            [
                'id' => 3345,
                'brand_id' => 109,
                'fipe_code' => '509027-0',
                'model' => '2423 6x4 3-Eixos 2p (diesel)',
                'years' => '1999 a 2009'
            ],
            
            [
                'id' => 3346,
                'brand_id' => 109,
                'fipe_code' => '509198-5',
                'model' => '2428 6x4 2p (diesel)',
                'years' => '2001 a 2006'
            ],
            
            [
                'id' => 3347,
                'brand_id' => 109,
                'fipe_code' => '509028-8',
                'model' => '2638 S 3-Eixos 2p (diesel)',
                'years' => '1996 a 1998'
            ],
            
            [
                'id' => 4693,
                'brand_id' => 109,
                'fipe_code' => '509262-0',
                'model' => '2726 6x4 2p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 3348,
                'brand_id' => 109,
                'fipe_code' => '509029-6',
                'model' => '608 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3349,
                'brand_id' => 109,
                'fipe_code' => '509030-0',
                'model' => '708 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3350,
                'brand_id' => 109,
                'fipe_code' => '509031-8',
                'model' => '709 2p (diesel)',
                'years' => '1981 a 1998'
            ],
            
            [
                'id' => 3351,
                'brand_id' => 109,
                'fipe_code' => '509032-6',
                'model' => '710/ 710 Plus 2p (diesel)',
                'years' => '1992 a 2012'
            ],
            
            [
                'id' => 3352,
                'brand_id' => 109,
                'fipe_code' => '509033-4',
                'model' => '712 2p (diesel)',
                'years' => '1992 a 2003'
            ],
            
            [
                'id' => 3353,
                'brand_id' => 109,
                'fipe_code' => '509034-2',
                'model' => '912 2p (diesel)',
                'years' => '1987 a 1995'
            ],
            
            [
                'id' => 3354,
                'brand_id' => 109,
                'fipe_code' => '509035-0',
                'model' => '914 2p (diesel)',
                'years' => '1994 a 1999'
            ],
            
            [
                'id' => 3355,
                'brand_id' => 109,
                'fipe_code' => '509036-9',
                'model' => '914-C 2p (diesel)',
                'years' => '1997 a 2003'
            ],
            
            [
                'id' => 5784,
                'brand_id' => 109,
                'fipe_code' => '509279-5',
                'model' => 'Accelo 1016 2p (diesel) (E5)',
                'years' => '2011 a 2023'
            ],
            
            [
                'id' => 10259,
                'brand_id' => 109,
                'fipe_code' => '509335-0',
                'model' => 'Accelo 1017 4x2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7414,
                'brand_id' => 109,
                'fipe_code' => '509311-2',
                'model' => 'Accelo 1316 6x2 2p (diesel)(E5)',
                'years' => '2015 a 2023'
            ],
            
            [
                'id' => 10260,
                'brand_id' => 109,
                'fipe_code' => '509336-8',
                'model' => 'Accelo 1317 6x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 3356,
                'brand_id' => 109,
                'fipe_code' => '509224-8',
                'model' => 'Accelo 715C 2p (diesel)',
                'years' => '2002 a 2011'
            ],
            
            [
                'id' => 5783,
                'brand_id' => 109,
                'fipe_code' => '509278-7',
                'model' => 'Accelo 815 2p (diesel) (E5)',
                'years' => '2011 a 2023'
            ],
            
            [
                'id' => 10261,
                'brand_id' => 109,
                'fipe_code' => '509334-1',
                'model' => 'Accelo 817 4x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 3357,
                'brand_id' => 109,
                'fipe_code' => '509222-1',
                'model' => 'Accelo 915C 2p (diesel)',
                'years' => '2002 a 2013'
            ],
            
            [
                'id' => 10432,
                'brand_id' => 109,
                'fipe_code' => '509352-0',
                'model' => 'Actros 2045 LS 4x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 9126,
                'brand_id' => 109,
                'fipe_code' => '509320-1',
                'model' => 'Actros 2045 MP5 LS 4x2 2p (diesel)(E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 5395,
                'brand_id' => 109,
                'fipe_code' => '509267-1',
                'model' => 'Actros 2546 LS 6x2 2p (diesel)',
                'years' => '2011 a 2011'
            ],
            
            [
                'id' => 5795,
                'brand_id' => 109,
                'fipe_code' => '509269-8',
                'model' => 'Actros 2546 LS 6x2 2p (diesel) (E5)',
                'years' => '2012 a 2021'
            ],
            
            [
                'id' => 10433,
                'brand_id' => 109,
                'fipe_code' => '509353-8',
                'model' => 'Actros 2548 LS 6x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 9127,
                'brand_id' => 109,
                'fipe_code' => '509321-0',
                'model' => 'Actros 2548 MP5 LS 6x2 2p (diesel)(E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 10434,
                'brand_id' => 109,
                'fipe_code' => '509356-2',
                'model' => 'Actros 2553 LS 6x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 9128,
                'brand_id' => 109,
                'fipe_code' => '509322-8',
                'model' => 'Actros 2553 MP5 LS 6x2 2p (diesel)(E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 5289,
                'brand_id' => 109,
                'fipe_code' => '509266-3',
                'model' => 'Actros 2646 LS 6x4 2p (diesel)',
                'years' => '2010 a 2011'
            ],
            
            [
                'id' => 5796,
                'brand_id' => 109,
                'fipe_code' => '509270-1',
                'model' => 'Actros 2646 LS 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2021'
            ],
            
            [
                'id' => 5763,
                'brand_id' => 109,
                'fipe_code' => '509302-3',
                'model' => 'Actros 2646 S 6x4 2p (diesel) (E5)',
                'years' => '2011 a 2021'
            ],
            
            [
                'id' => 9129,
                'brand_id' => 109,
                'fipe_code' => '509326-0',
                'model' => 'Actros 2648 MP5 LS 6x4 (diesel)(E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 9221,
                'brand_id' => 109,
                'fipe_code' => '509327-9',
                'model' => 'Actros 2648 MP5 S 6x4 2p (diesel)(E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 10435,
                'brand_id' => 109,
                'fipe_code' => '509355-4',
                'model' => 'Actros 2651 LS 6x4 (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7472,
                'brand_id' => 109,
                'fipe_code' => '509313-9',
                'model' => 'Actros 2651 LS 6x4 2p (diesel)(E5)',
                'years' => '2016 a 2021'
            ],
            
            [
                'id' => 9130,
                'brand_id' => 109,
                'fipe_code' => '509323-6',
                'model' => 'Actros 2651 MP5 LS 6x4 2p (diesel)(E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 9131,
                'brand_id' => 109,
                'fipe_code' => '509324-4',
                'model' => 'Actros 2651 MP5 S 6x4 2p (diesel)(E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 7576,
                'brand_id' => 109,
                'fipe_code' => '509317-1',
                'model' => 'Actros 2651 S 6x4 2p (diesel)(E5)',
                'years' => '2016 a 2022'
            ],
            
            [
                'id' => 10436,
                'brand_id' => 109,
                'fipe_code' => '509354-6',
                'model' => 'Actros 2651 S 6x4 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10437,
                'brand_id' => 109,
                'fipe_code' => '509358-9',
                'model' => 'Actros 2653 LS 6x4 (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 9132,
                'brand_id' => 109,
                'fipe_code' => '509325-2',
                'model' => 'Actros 2653 MP5 LS 6X4 2p (diesel)(E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 9222,
                'brand_id' => 109,
                'fipe_code' => '509328-7',
                'model' => 'Actros 2653 MP5 S 6x4 2p (diesel)(E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 10438,
                'brand_id' => 109,
                'fipe_code' => '509357-0',
                'model' => 'Actros 2653 S 6x4 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 6571,
                'brand_id' => 109,
                'fipe_code' => '509305-8',
                'model' => 'Actros 2655 LS 6x4 2p (diesel)(E5)',
                'years' => '2012 a 2016'
            ],
            
            [
                'id' => 4965,
                'brand_id' => 109,
                'fipe_code' => '509263-9',
                'model' => 'Actros 4844 K 8x4 2p (diesel)',
                'years' => '2008 a 2011'
            ],
            
            [
                'id' => 5794,
                'brand_id' => 109,
                'fipe_code' => '509268-0',
                'model' => 'Actros 4844 K 8x4 2p (diesel) (E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 10439,
                'brand_id' => 109,
                'fipe_code' => '509359-7',
                'model' => 'AROCS 3351 6x4 (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10262,
                'brand_id' => 109,
                'fipe_code' => '509349-0',
                'model' => 'AROCS 3351K 6x4 (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10263,
                'brand_id' => 109,
                'fipe_code' => '509350-3',
                'model' => 'AROCS 3351S 6x4 (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 11007,
                'brand_id' => 109,
                'fipe_code' => '509363-5',
                'model' => 'AROCS 3353S 6x4 (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10264,
                'brand_id' => 109,
                'fipe_code' => '509351-1',
                'model' => 'AROCS 4151K 6x4 (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10440,
                'brand_id' => 109,
                'fipe_code' => '509360-0',
                'model' => 'AROCS 4851 8x4 (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 9674,
                'brand_id' => 109,
                'fipe_code' => '509330-9',
                'model' => 'AROCS 4851 K 8x4 (diesel)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 3358,
                'brand_id' => 109,
                'fipe_code' => '509228-0',
                'model' => 'Atego 1315 2p (diesel)',
                'years' => '2005 a 2010'
            ],
            
            [
                'id' => 3359,
                'brand_id' => 109,
                'fipe_code' => '509235-3',
                'model' => 'Atego 1315 3-Eixos 2p (diesel)',
                'years' => '2005 a 2010'
            ],
            
            [
                'id' => 3360,
                'brand_id' => 109,
                'fipe_code' => '509229-9',
                'model' => 'Atego 1418 2p (diesel)',
                'years' => '2004 a 2012'
            ],
            
            [
                'id' => 3361,
                'brand_id' => 109,
                'fipe_code' => '509236-1',
                'model' => 'Atego 1418 3-Eixos 2p (diesel)',
                'years' => '2004 a 2012'
            ],
            
            [
                'id' => 5785,
                'brand_id' => 109,
                'fipe_code' => '509280-9',
                'model' => 'Atego 1419 2p (diesel) (E5)',
                'years' => '2011 a 2023'
            ],
            
            [
                'id' => 10265,
                'brand_id' => 109,
                'fipe_code' => '509337-6',
                'model' => 'Atego 1419 4x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 3362,
                'brand_id' => 109,
                'fipe_code' => '509230-2',
                'model' => 'Atego 1518 2p (diesel)',
                'years' => '2005 a 2012'
            ],
            
            [
                'id' => 3363,
                'brand_id' => 109,
                'fipe_code' => '509234-5',
                'model' => 'Atego 1518 3-Eixos 2p (diesel)',
                'years' => '2005 a 2012'
            ],
            
            [
                'id' => 3364,
                'brand_id' => 109,
                'fipe_code' => '509231-0',
                'model' => 'Atego 1718 2p (diesel)',
                'years' => '2005 a 2012'
            ],
            
            [
                'id' => 3365,
                'brand_id' => 109,
                'fipe_code' => '509237-0',
                'model' => 'Atego 1718 3-Eixos 2p (diesel)',
                'years' => '2005 a 2012'
            ],
            
            [
                'id' => 5786,
                'brand_id' => 109,
                'fipe_code' => '509281-7',
                'model' => 'Atego 1719 2p (diesel) (E5)',
                'years' => '2011 a 2023'
            ],
            
            [
                'id' => 10266,
                'brand_id' => 109,
                'fipe_code' => '509338-4',
                'model' => 'Atego 1719 4x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 3366,
                'brand_id' => 109,
                'fipe_code' => '509232-9',
                'model' => 'Atego 1725 2p (diesel)',
                'years' => '2004 a 2012'
            ],
            
            [
                'id' => 3367,
                'brand_id' => 109,
                'fipe_code' => '509238-8',
                'model' => 'Atego 1725 3-Eixos 2p (diesel)',
                'years' => '2004 a 2012'
            ],
            
            [
                'id' => 5230,
                'brand_id' => 109,
                'fipe_code' => '509265-5',
                'model' => 'Atego 1725 4x4 2p (diesel)',
                'years' => '2009 a 2012'
            ],
            
            [
                'id' => 5787,
                'brand_id' => 109,
                'fipe_code' => '509282-5',
                'model' => 'Atego 1726 2p (diesel) (E5)',
                'years' => '2012 a 2023'
            ],
            
            [
                'id' => 10267,
                'brand_id' => 109,
                'fipe_code' => '509339-2',
                'model' => 'Atego 1726 4x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 6508,
                'brand_id' => 109,
                'fipe_code' => '509304-0',
                'model' => 'Atego 1726 4x4 2p (diesel)(E5)',
                'years' => '2013 a 2020'
            ],
            
            [
                'id' => 4472,
                'brand_id' => 109,
                'fipe_code' => '509260-4',
                'model' => 'Atego 1728 S 2p (diesel)',
                'years' => '2007 a 2012'
            ],
            
            [
                'id' => 6833,
                'brand_id' => 109,
                'fipe_code' => '509308-2',
                'model' => 'Atego 1729 2p (diesel)(E5)',
                'years' => '2013 a 2023'
            ],
            
            [
                'id' => 5776,
                'brand_id' => 109,
                'fipe_code' => '509283-3',
                'model' => 'Atego 1729 S 2p (diesel) (E5)',
                'years' => '2012 a 2016'
            ],
            
            [
                'id' => 9315,
                'brand_id' => 109,
                'fipe_code' => '509329-5',
                'model' => 'Atego 1730 2p (diesel)(E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 7415,
                'brand_id' => 109,
                'fipe_code' => '509312-0',
                'model' => 'Atego 1730 S 2p (diesel)(E5)',
                'years' => '2016 a 2023'
            ],
            
            [
                'id' => 10850,
                'brand_id' => 109,
                'fipe_code' => '509362-7',
                'model' => 'Atego 1733 4x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 11160,
                'brand_id' => 109,
                'fipe_code' => '509364-3',
                'model' => 'Atego 1933 LS 4x2 2p (diesel)(E6)',
                'years' => '2025 a Zero Km'
            ],
            
            [
                'id' => 3368,
                'brand_id' => 109,
                'fipe_code' => '509240-0',
                'model' => 'Atego 2425 3-Eixos 2p (diesel)',
                'years' => '2005 a 2012'
            ],
            
            [
                'id' => 5777,
                'brand_id' => 109,
                'fipe_code' => '509284-1',
                'model' => 'Atego 2426 6x2 2p (diesel) (E5)',
                'years' => '2011 a 2023'
            ],
            
            [
                'id' => 4562,
                'brand_id' => 109,
                'fipe_code' => '509261-2',
                'model' => 'Atego 2428 3-Eixos 2p (diesel)',
                'years' => '2007 a 2012'
            ],
            
            [
                'id' => 5778,
                'brand_id' => 109,
                'fipe_code' => '509285-0',
                'model' => 'Atego 2429 6x2 2p (diesel) (E5)',
                'years' => '2012 a 2015'
            ],
            
            [
                'id' => 10268,
                'brand_id' => 109,
                'fipe_code' => '509340-6',
                'model' => 'Atego 2429 6x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 6834,
                'brand_id' => 109,
                'fipe_code' => '509309-0',
                'model' => 'Atego 2430 6x2 2p (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 10269,
                'brand_id' => 109,
                'fipe_code' => '509341-4',
                'model' => 'Atego 2433 6x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7534,
                'brand_id' => 109,
                'fipe_code' => '509314-7',
                'model' => 'Atego 2730 6x4 2p (diesel)(E5)',
                'years' => '2016 a 2023'
            ],
            
            [
                'id' => 10270,
                'brand_id' => 109,
                'fipe_code' => '509343-0',
                'model' => 'Atego 2730 6x4 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7535,
                'brand_id' => 109,
                'fipe_code' => '509315-5',
                'model' => 'Atego 2730B 6x4 2p (diesel)(E5)',
                'years' => '2016 a 2023'
            ],
            
            [
                'id' => 10271,
                'brand_id' => 109,
                'fipe_code' => '509344-9',
                'model' => 'Atego 2730B 6x4 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7536,
                'brand_id' => 109,
                'fipe_code' => '509316-3',
                'model' => 'Atego 2730K 6x4 2p (diesel)(E5)',
                'years' => '2016 a 2023'
            ],
            
            [
                'id' => 10272,
                'brand_id' => 109,
                'fipe_code' => '509345-7',
                'model' => 'Atego 2730K 6x4 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7654,
                'brand_id' => 109,
                'fipe_code' => '509318-0',
                'model' => 'Atego 3026 8x2 2p (diesel)(E5)',
                'years' => '2016 a 2023'
            ],
            
            [
                'id' => 7655,
                'brand_id' => 109,
                'fipe_code' => '509319-8',
                'model' => 'Atego 3030 8x2 2p (diesel)(E5)',
                'years' => '2016 a 2023'
            ],
            
            [
                'id' => 10273,
                'brand_id' => 109,
                'fipe_code' => '509342-2',
                'model' => 'Atego 3033 8x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 11161,
                'brand_id' => 109,
                'fipe_code' => '509365-1',
                'model' => 'Atego 3133 6x4 2p (diesel)(E6)',
                'years' => '2025 a Zero Km'
            ],
            
            [
                'id' => 10116,
                'brand_id' => 109,
                'fipe_code' => '509333-3',
                'model' => 'Atego 3330 8x4 2p (diesel)(E5)',
                'years' => '2023 a 2023'
            ],
            
            [
                'id' => 10274,
                'brand_id' => 109,
                'fipe_code' => '509346-5',
                'model' => 'Atego 3330 8x4 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10117,
                'brand_id' => 109,
                'fipe_code' => '509332-5',
                'model' => 'Atego 3330 B 8x4 2p (diesel)(E5)',
                'years' => '2022 a 2023'
            ],
            
            [
                'id' => 10118,
                'brand_id' => 109,
                'fipe_code' => '509331-7',
                'model' => 'Atego 3330 K 8x4 2p (diesel)(E5)',
                'years' => '2022 a 2023'
            ],
            
            [
                'id' => 10275,
                'brand_id' => 109,
                'fipe_code' => '509347-3',
                'model' => 'Atego 3330B 8x4 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10276,
                'brand_id' => 109,
                'fipe_code' => '509348-1',
                'model' => 'Atego 3330K 8x4 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 4427,
                'brand_id' => 109,
                'fipe_code' => '509259-0',
                'model' => 'Atilis 712 E Furgão Caio 4p (Diesel)',
                'years' => '2006 a 2009'
            ],
            
            [
                'id' => 5781,
                'brand_id' => 109,
                'fipe_code' => '509288-4',
                'model' => 'Atron 1319 2p (diesel) (E5)',
                'years' => '2012 a 2016'
            ],
            
            [
                'id' => 5779,
                'brand_id' => 109,
                'fipe_code' => '509286-8',
                'model' => 'Atron 1635 S 2p (diesel) (E5)',
                'years' => '2012 a 2021'
            ],
            
            [
                'id' => 6478,
                'brand_id' => 109,
                'fipe_code' => '509303-1',
                'model' => 'Atron 1719 2p (diesel)(E5)',
                'years' => '2013 a 2016'
            ],
            
            [
                'id' => 5780,
                'brand_id' => 109,
                'fipe_code' => '509287-6',
                'model' => 'Atron 2324 6x2 2p (diesel) (E5)',
                'years' => '2011 a 2016'
            ],
            
            [
                'id' => 5772,
                'brand_id' => 109,
                'fipe_code' => '509291-4',
                'model' => 'Atron 2729 6x4 2p (diesel) (E5)',
                'years' => '2011 a 2016'
            ],
            
            [
                'id' => 5771,
                'brand_id' => 109,
                'fipe_code' => '509290-6',
                'model' => 'Atron 2729 B 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2016'
            ],
            
            [
                'id' => 5770,
                'brand_id' => 109,
                'fipe_code' => '509289-2',
                'model' => 'Atron 2729 K 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2016'
            ],
            
            [
                'id' => 3369,
                'brand_id' => 109,
                'fipe_code' => '509241-8',
                'model' => 'Axor 1933 S 2p (diesel)',
                'years' => '2005 a 2012'
            ],
            
            [
                'id' => 5782,
                'brand_id' => 109,
                'fipe_code' => '509277-9',
                'model' => 'Axor 1933 S/ LS 2p (diesel) (E5)',
                'years' => '2012 a 2023'
            ],
            
            [
                'id' => 3370,
                'brand_id' => 109,
                'fipe_code' => '509242-6',
                'model' => 'Axor 2035 S 2p (diesel)',
                'years' => '2005 a 2013'
            ],
            
            [
                'id' => 5773,
                'brand_id' => 109,
                'fipe_code' => '509292-2',
                'model' => 'Axor 2036 S/LS 2p (diesel) (E5)',
                'years' => '2011 a 2023'
            ],
            
            [
                'id' => 3371,
                'brand_id' => 109,
                'fipe_code' => '509243-4',
                'model' => 'Axor 2040 S 2p (diesel)',
                'years' => '2005 a 2012'
            ],
            
            [
                'id' => 5774,
                'brand_id' => 109,
                'fipe_code' => '509293-0',
                'model' => 'Axor 2041 S/LS 2p (diesel) (E5)',
                'years' => '2011 a 2023'
            ],
            
            [
                'id' => 3372,
                'brand_id' => 109,
                'fipe_code' => '509244-2',
                'model' => 'Axor 2044 S 2p (diesel)',
                'years' => '2005 a 2012'
            ],
            
            [
                'id' => 3373,
                'brand_id' => 109,
                'fipe_code' => '509245-0',
                'model' => 'Axor 2533 6x2 2p (diesel)',
                'years' => '2005 a 2012'
            ],
            
            [
                'id' => 5793,
                'brand_id' => 109,
                'fipe_code' => '509276-0',
                'model' => 'Axor 2533 6x2 2p (diesel) (E5)',
                'years' => '2012 a 2023'
            ],
            
            [
                'id' => 5122,
                'brand_id' => 109,
                'fipe_code' => '509264-7',
                'model' => 'Axor 2535 S 6x2 2p (diesel)',
                'years' => '2009 a 2013'
            ],
            
            [
                'id' => 5775,
                'brand_id' => 109,
                'fipe_code' => '509294-9',
                'model' => 'Axor 2536 S/LS 6x2 2p (diesel) (E5)',
                'years' => '2012 a 2023'
            ],
            
            [
                'id' => 3374,
                'brand_id' => 109,
                'fipe_code' => '509246-9',
                'model' => 'Axor 2540 S 6x2 2p (diesel)',
                'years' => '2004 a 2012'
            ],
            
            [
                'id' => 5764,
                'brand_id' => 109,
                'fipe_code' => '509295-7',
                'model' => 'Axor 2541 S/LS 6x2 2p (diesel) (E5)',
                'years' => '2011 a 2020'
            ],
            
            [
                'id' => 3375,
                'brand_id' => 109,
                'fipe_code' => '509247-7',
                'model' => 'Axor 2544 S 6x2 2p (diesel)',
                'years' => '2005 a 2012'
            ],
            
            [
                'id' => 5792,
                'brand_id' => 109,
                'fipe_code' => '509275-2',
                'model' => 'Axor 2544 S/LS 6x2 2p (diesel) (E5)',
                'years' => '2012 a 2023'
            ],
            
            [
                'id' => 3376,
                'brand_id' => 109,
                'fipe_code' => '509248-5',
                'model' => 'Axor 2640 S 6x4 2p (diesel)',
                'years' => '2006 a 2012'
            ],
            
            [
                'id' => 5765,
                'brand_id' => 109,
                'fipe_code' => '509296-5',
                'model' => 'Axor 2641 S 6x4 2P (diesel) (E5)',
                'years' => '2012 a 2016'
            ],
            
            [
                'id' => 3377,
                'brand_id' => 109,
                'fipe_code' => '509249-3',
                'model' => 'Axor 2644 S 6x4 2p (diesel)',
                'years' => '2005 a 2012'
            ],
            
            [
                'id' => 5791,
                'brand_id' => 109,
                'fipe_code' => '509274-4',
                'model' => 'Axor 2644 S/LS 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2023'
            ],
            
            [
                'id' => 4088,
                'brand_id' => 109,
                'fipe_code' => '509256-6',
                'model' => 'Axor 2826 6x4 2p (diesel)',
                'years' => '2006 a 2011'
            ],
            
            [
                'id' => 4089,
                'brand_id' => 109,
                'fipe_code' => '509257-4',
                'model' => 'Axor 2831 6x4 2p (diesel)',
                'years' => '2006 a 2012'
            ],
            
            [
                'id' => 5790,
                'brand_id' => 109,
                'fipe_code' => '509273-6',
                'model' => 'Axor 2831 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2015'
            ],
            
            [
                'id' => 5766,
                'brand_id' => 109,
                'fipe_code' => '509297-3',
                'model' => 'Axor 2831 K 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2015'
            ],
            
            [
                'id' => 6708,
                'brand_id' => 109,
                'fipe_code' => '509307-4',
                'model' => 'Axor 3131 6x4 2p (diesel)(E5)',
                'years' => '2013 a 2023'
            ],
            
            [
                'id' => 10771,
                'brand_id' => 109,
                'fipe_code' => '509361-9',
                'model' => 'Axor 3131 B 6x4 2p (diesel)(E5)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 6880,
                'brand_id' => 109,
                'fipe_code' => '509310-4',
                'model' => 'Axor 3131 K 6x4 2p (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 3378,
                'brand_id' => 109,
                'fipe_code' => '509251-5',
                'model' => 'Axor 3340 S 6x4 2p (diesel)',
                'years' => '2006 a 2011'
            ],
            
            [
                'id' => 3379,
                'brand_id' => 109,
                'fipe_code' => '509250-7',
                'model' => 'Axor 3340/ 3340 K 6x4 2p (diesel)',
                'years' => '2005 a 2011'
            ],
            
            [
                'id' => 5767,
                'brand_id' => 109,
                'fipe_code' => '509298-1',
                'model' => 'Axor 3341 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2016'
            ],
            
            [
                'id' => 5769,
                'brand_id' => 109,
                'fipe_code' => '509300-7',
                'model' => 'Axor 3341 K 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2016'
            ],
            
            [
                'id' => 5768,
                'brand_id' => 109,
                'fipe_code' => '509299-0',
                'model' => 'Axor 3341 S 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2016'
            ],
            
            [
                'id' => 3380,
                'brand_id' => 109,
                'fipe_code' => '509253-1',
                'model' => 'Axor 3344 S 6x4 2p (diesel)',
                'years' => '2005 a 2012'
            ],
            
            [
                'id' => 5788,
                'brand_id' => 109,
                'fipe_code' => '509271-0',
                'model' => 'Axor 3344 S 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2023'
            ],
            
            [
                'id' => 3381,
                'brand_id' => 109,
                'fipe_code' => '509252-3',
                'model' => 'Axor 3344/ 3344 K 6x4 2p (diesel)',
                'years' => '2006 a 2012'
            ],
            
            [
                'id' => 5789,
                'brand_id' => 109,
                'fipe_code' => '509272-8',
                'model' => 'Axor 3344/ 3344 K 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2023'
            ],
            
            [
                'id' => 4051,
                'brand_id' => 109,
                'fipe_code' => '509254-0',
                'model' => 'Axor 4140 K 6x4 2p (diesel)',
                'years' => '2006 a 2011'
            ],
            
            [
                'id' => 5762,
                'brand_id' => 109,
                'fipe_code' => '509301-5',
                'model' => 'Axor 4141 K 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2016'
            ],
            
            [
                'id' => 4052,
                'brand_id' => 109,
                'fipe_code' => '509255-8',
                'model' => 'Axor 4144 K 6x4 2p (diesel)',
                'years' => '2006 a 2012'
            ],
            
            [
                'id' => 6627,
                'brand_id' => 109,
                'fipe_code' => '509306-6',
                'model' => 'Axor 4144 K 6x4 2p (diesel) (E5)',
                'years' => '2013 a 2023'
            ],
            
            [
                'id' => 3382,
                'brand_id' => 109,
                'fipe_code' => '509037-7',
                'model' => 'L-1113 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3383,
                'brand_id' => 109,
                'fipe_code' => '509038-5',
                'model' => 'L-1113 3-Eixos 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3384,
                'brand_id' => 109,
                'fipe_code' => '509039-3',
                'model' => 'L-1114 2p (diesel)',
                'years' => '1981 a 1990'
            ],
            
            [
                'id' => 3385,
                'brand_id' => 109,
                'fipe_code' => '509040-7',
                'model' => 'L-1114 3-Eixos 2p (diesel)',
                'years' => '1981 a 1990'
            ],
            
            [
                'id' => 3386,
                'brand_id' => 109,
                'fipe_code' => '509041-5',
                'model' => 'L-1117 2p (diesel)',
                'years' => '1981 a 1990'
            ],
            
            [
                'id' => 3387,
                'brand_id' => 109,
                'fipe_code' => '509042-3',
                'model' => 'L-1117 3-Eixos 2p (diesel)',
                'years' => '1981 a 1990'
            ],
            
            [
                'id' => 3388,
                'brand_id' => 109,
                'fipe_code' => '509043-1',
                'model' => 'L-1118 2p (diesel)',
                'years' => '1987 a 1990'
            ],
            
            [
                'id' => 3389,
                'brand_id' => 109,
                'fipe_code' => '509044-0',
                'model' => 'L-1118 3-Eixos 2p (diesel)',
                'years' => '1987 a 1990'
            ],
            
            [
                'id' => 3390,
                'brand_id' => 109,
                'fipe_code' => '509045-8',
                'model' => 'L-1214 2p (diesel)',
                'years' => '1989 a 1997'
            ],
            
            [
                'id' => 3391,
                'brand_id' => 109,
                'fipe_code' => '509046-6',
                'model' => 'L-1214 3-Eixos 2p (diesel)',
                'years' => '1989 a 1997'
            ],
            
            [
                'id' => 3392,
                'brand_id' => 109,
                'fipe_code' => '509047-4',
                'model' => 'L-1218 2p (diesel)',
                'years' => '1989 a 2004'
            ],
            
            [
                'id' => 3393,
                'brand_id' => 109,
                'fipe_code' => '509048-2',
                'model' => 'L-1218 3-Eixos 2p (diesel)',
                'years' => '1989 a 2004'
            ],
            
            [
                'id' => 3394,
                'brand_id' => 109,
                'fipe_code' => '509049-0',
                'model' => 'L-1313 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3395,
                'brand_id' => 109,
                'fipe_code' => '509050-4',
                'model' => 'L-1313 3-Eixos 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3396,
                'brand_id' => 109,
                'fipe_code' => '509051-2',
                'model' => 'L-1314 2p (diesel)',
                'years' => '1987 a 1990'
            ],
            
            [
                'id' => 3397,
                'brand_id' => 109,
                'fipe_code' => '509052-0',
                'model' => 'L-1314 3-Eixos 2p (diesel)',
                'years' => '1987 a 1990'
            ],
            
            [
                'id' => 3398,
                'brand_id' => 109,
                'fipe_code' => '509053-9',
                'model' => 'L-1316 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3399,
                'brand_id' => 109,
                'fipe_code' => '509054-7',
                'model' => 'L-1316 3-Eixos 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3400,
                'brand_id' => 109,
                'fipe_code' => '509055-5',
                'model' => 'L-1317 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3401,
                'brand_id' => 109,
                'fipe_code' => '509056-3',
                'model' => 'L-1317 3-Eixos 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3402,
                'brand_id' => 109,
                'fipe_code' => '509057-1',
                'model' => 'L-1318 2p (diesel)',
                'years' => '1984 a 2012'
            ],
            
            [
                'id' => 3403,
                'brand_id' => 109,
                'fipe_code' => '509058-0',
                'model' => 'L-1318 3-Eixos 2p (diesel)',
                'years' => '1984 a 2012'
            ],
            
            [
                'id' => 3404,
                'brand_id' => 109,
                'fipe_code' => '509059-8',
                'model' => 'L-1319 2p (diesel)',
                'years' => '1984 a 1989'
            ],
            
            [
                'id' => 3405,
                'brand_id' => 109,
                'fipe_code' => '509060-1',
                'model' => 'L-1319 3-Eixos 2p (diesel)',
                'years' => '1984 a 1989'
            ],
            
            [
                'id' => 3406,
                'brand_id' => 109,
                'fipe_code' => '509061-0',
                'model' => 'L-1414 2p (diesel)',
                'years' => '1981 a 1996'
            ],
            
            [
                'id' => 3407,
                'brand_id' => 109,
                'fipe_code' => '509062-8',
                'model' => 'L-1414 3-Eixos 2p (diesel)',
                'years' => '1981 a 1996'
            ],
            
            [
                'id' => 3408,
                'brand_id' => 109,
                'fipe_code' => '509063-6',
                'model' => 'L-1418 2p (diesel)',
                'years' => '1984 a 2003'
            ],
            
            [
                'id' => 3409,
                'brand_id' => 109,
                'fipe_code' => '509064-4',
                'model' => 'L-1418 3-Eixos 2p (diesel)',
                'years' => '1984 a 2003'
            ],
            
            [
                'id' => 3410,
                'brand_id' => 109,
                'fipe_code' => '509065-2',
                'model' => 'L-1513 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3411,
                'brand_id' => 109,
                'fipe_code' => '509066-0',
                'model' => 'L-1513 3-Eixos 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3412,
                'brand_id' => 109,
                'fipe_code' => '509067-9',
                'model' => 'L-1514 2p (diesel)',
                'years' => '1981 a 1990'
            ],
            
            [
                'id' => 3413,
                'brand_id' => 109,
                'fipe_code' => '509068-7',
                'model' => 'L-1514 3-Eixos 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3414,
                'brand_id' => 109,
                'fipe_code' => '509069-5',
                'model' => 'L-1516 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3415,
                'brand_id' => 109,
                'fipe_code' => '509070-9',
                'model' => 'L-1516 3-Eixos 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3416,
                'brand_id' => 109,
                'fipe_code' => '509071-7',
                'model' => 'L-1517 2p (diesel)',
                'years' => '1986 a 1987'
            ],
            
            [
                'id' => 3417,
                'brand_id' => 109,
                'fipe_code' => '509072-5',
                'model' => 'L-1517 3-Eixos 2p (diesel)',
                'years' => '1986 a 1987'
            ],
            
            [
                'id' => 3418,
                'brand_id' => 109,
                'fipe_code' => '509073-3',
                'model' => 'L-1518 2p (diesel)',
                'years' => '1981 a 1991'
            ],
            
            [
                'id' => 3419,
                'brand_id' => 109,
                'fipe_code' => '509074-1',
                'model' => 'L-1518 3-Eixos 2p (diesel)',
                'years' => '1981 a 1991'
            ],
            
            [
                'id' => 3420,
                'brand_id' => 109,
                'fipe_code' => '509075-0',
                'model' => 'L-1519 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3421,
                'brand_id' => 109,
                'fipe_code' => '509076-8',
                'model' => 'L-1519 3-Eixos 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3422,
                'brand_id' => 109,
                'fipe_code' => '509077-6',
                'model' => 'L-1520 2p (diesel)',
                'years' => '1987 a 1990'
            ],
            
            [
                'id' => 3423,
                'brand_id' => 109,
                'fipe_code' => '509078-4',
                'model' => 'L-1520 3-Eixos 2p (diesel)',
                'years' => '1987 a 1990'
            ],
            
            [
                'id' => 3424,
                'brand_id' => 109,
                'fipe_code' => '509079-2',
                'model' => 'L-1614 2p (diesel)',
                'years' => '1981 a 1996'
            ],
            
            [
                'id' => 3425,
                'brand_id' => 109,
                'fipe_code' => '509080-6',
                'model' => 'L-1614 3-Eixos 2p (diesel)',
                'years' => '1981 a 1996'
            ],
            
            [
                'id' => 3426,
                'brand_id' => 109,
                'fipe_code' => '509081-4',
                'model' => 'L-1618 2p (diesel)',
                'years' => '1981 a 1996'
            ],
            
            [
                'id' => 3427,
                'brand_id' => 109,
                'fipe_code' => '509082-2',
                'model' => 'L-1618 3-Eixos 2p (diesel)',
                'years' => '1981 a 1996'
            ],
            
            [
                'id' => 3428,
                'brand_id' => 109,
                'fipe_code' => '509083-0',
                'model' => 'L-1620 2p (diesel)',
                'years' => '1993 a 2004'
            ],
            
            [
                'id' => 3429,
                'brand_id' => 109,
                'fipe_code' => '509084-9',
                'model' => 'L-1620 3-Eixos 2p (diesel)',
                'years' => '1993 a 2012'
            ],
            
            [
                'id' => 3430,
                'brand_id' => 109,
                'fipe_code' => '509085-7',
                'model' => 'L-1621 2p (diesel)',
                'years' => '1981 a 1997'
            ],
            
            [
                'id' => 3431,
                'brand_id' => 109,
                'fipe_code' => '509086-5',
                'model' => 'L-1621 3-Eixos 2p (diesel)',
                'years' => '1981 a 1997'
            ],
            
            [
                'id' => 3432,
                'brand_id' => 109,
                'fipe_code' => '509202-7',
                'model' => 'L-1622 2p (diesel)',
                'years' => '2001 a 2004'
            ],
            
            [
                'id' => 3433,
                'brand_id' => 109,
                'fipe_code' => '509203-5',
                'model' => 'L-1622 3-Eixos 2p (diesel)',
                'years' => '2001 a 2005'
            ],
            
            [
                'id' => 3434,
                'brand_id' => 109,
                'fipe_code' => '509087-3',
                'model' => 'L-1625 2p (diesel)',
                'years' => '1989 a 1996'
            ],
            
            [
                'id' => 3435,
                'brand_id' => 109,
                'fipe_code' => '509088-1',
                'model' => 'L-1625 3-Eixos 2p (diesel)',
                'years' => '1989 a 1996'
            ],
            
            [
                'id' => 3436,
                'brand_id' => 109,
                'fipe_code' => '509089-0',
                'model' => 'L-1630 2p (diesel)',
                'years' => '1990 a 1998'
            ],
            
            [
                'id' => 3437,
                'brand_id' => 109,
                'fipe_code' => '509090-3',
                'model' => 'L-1630 3-Eixos 2p (diesel)',
                'years' => '1990 a 1998'
            ],
            
            [
                'id' => 3438,
                'brand_id' => 109,
                'fipe_code' => '509091-1',
                'model' => 'L-2013 3-Eixos 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3439,
                'brand_id' => 109,
                'fipe_code' => '509092-0',
                'model' => 'L-2014 3-Eixos 2p (diesel)',
                'years' => '1981 a 1990'
            ],
            
            [
                'id' => 3440,
                'brand_id' => 109,
                'fipe_code' => '509093-8',
                'model' => 'L-2017 3-Eixos 2p (diesel)',
                'years' => '1981 a 1991'
            ],
            
            [
                'id' => 3441,
                'brand_id' => 109,
                'fipe_code' => '509094-6',
                'model' => 'L-2213 3-Eixos 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3442,
                'brand_id' => 109,
                'fipe_code' => '509095-4',
                'model' => 'L-2214 3-Eixos 2p (diesel)',
                'years' => '1987 a 1989'
            ],
            
            [
                'id' => 3443,
                'brand_id' => 109,
                'fipe_code' => '509096-2',
                'model' => 'L-2215 3-Eixos 2p (diesel)',
                'years' => '1984 a 1986'
            ],
            
            [
                'id' => 3444,
                'brand_id' => 109,
                'fipe_code' => '509097-0',
                'model' => 'L-2216 3-Eixos 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3445,
                'brand_id' => 109,
                'fipe_code' => '509098-9',
                'model' => 'L-2217 3-Eixos 2p (diesel)',
                'years' => '1981 a 1990'
            ],
            
            [
                'id' => 3446,
                'brand_id' => 109,
                'fipe_code' => '509099-7',
                'model' => 'L-2219 3-Eixos 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3447,
                'brand_id' => 109,
                'fipe_code' => '509100-4',
                'model' => 'L-2220 3-Eixos 2p (diesel)',
                'years' => '1987 a 1991'
            ],
            
            [
                'id' => 3448,
                'brand_id' => 109,
                'fipe_code' => '509101-2',
                'model' => 'L-2225 3-Eixos 2p (diesel)',
                'years' => '1987 a 1990'
            ],
            
            [
                'id' => 3449,
                'brand_id' => 109,
                'fipe_code' => '509102-0',
                'model' => 'L-2314 3-Eixos 2p (diesel)',
                'years' => '1990 a 1994'
            ],
            
            [
                'id' => 3450,
                'brand_id' => 109,
                'fipe_code' => '509204-3',
                'model' => 'L-2318 3-Eixos 2p (diesel)',
                'years' => '1991 a 1996'
            ],
            
            [
                'id' => 3451,
                'brand_id' => 109,
                'fipe_code' => '509103-9',
                'model' => 'L-2318 6x4 3-Eixos 2p (diesel)',
                'years' => '1990 a 1999'
            ],
            
            [
                'id' => 3452,
                'brand_id' => 109,
                'fipe_code' => '509104-7',
                'model' => 'L-2325 6x4 3-Eixos 2p (diesel)',
                'years' => '1989 a 2000'
            ],
            
            [
                'id' => 3453,
                'brand_id' => 109,
                'fipe_code' => '509105-5',
                'model' => 'L-2635 3-Eixos 2p (diesel)',
                'years' => '1992 a 1999'
            ],
            
            [
                'id' => 3454,
                'brand_id' => 109,
                'fipe_code' => '509106-3',
                'model' => 'L-2638 6x4 3-Eixos 2p (diesel)',
                'years' => '1998 a 2006'
            ],
            
            [
                'id' => 3455,
                'brand_id' => 109,
                'fipe_code' => '509212-4',
                'model' => 'LK-1618 3-Eixos 2p (diesel)',
                'years' => '1990 a 1996'
            ],
            
            [
                'id' => 3456,
                'brand_id' => 109,
                'fipe_code' => '509205-1',
                'model' => 'LK-1620 2p (diesel)',
                'years' => '1996 a 2004'
            ],
            
            [
                'id' => 3457,
                'brand_id' => 109,
                'fipe_code' => '509206-0',
                'model' => 'LK-1620 3-Eixos 2p (diesel)',
                'years' => '1996 a 2005'
            ],
            
            [
                'id' => 3458,
                'brand_id' => 109,
                'fipe_code' => '509221-3',
                'model' => 'LK-2635 6x4 3-Eixos 2p (diesel)',
                'years' => '1993 a 1999'
            ],
            
            [
                'id' => 3459,
                'brand_id' => 109,
                'fipe_code' => '509220-5',
                'model' => 'LK-2638 6x4 3-Eixos 2p (diesel)',
                'years' => '1999 a 2006'
            ],
            
            [
                'id' => 3460,
                'brand_id' => 109,
                'fipe_code' => '509115-2',
                'model' => 'LS-1313 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3461,
                'brand_id' => 109,
                'fipe_code' => '509116-0',
                'model' => 'LS-1519 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3462,
                'brand_id' => 109,
                'fipe_code' => '509117-9',
                'model' => 'LS-1520 2p (diesel)',
                'years' => '1981 a 1990'
            ],
            
            [
                'id' => 3463,
                'brand_id' => 109,
                'fipe_code' => '509118-7',
                'model' => 'LS-1524 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3464,
                'brand_id' => 109,
                'fipe_code' => '509119-5',
                'model' => 'LS-1525 2p (diesel)',
                'years' => '1987 a 1990'
            ],
            
            [
                'id' => 3465,
                'brand_id' => 109,
                'fipe_code' => '509120-9',
                'model' => 'LS-1625 2p (diesel)',
                'years' => '1989 a 1996'
            ],
            
            [
                'id' => 3466,
                'brand_id' => 109,
                'fipe_code' => '509121-7',
                'model' => 'LS-1630 2p (diesel)',
                'years' => '1990 a 1999'
            ],
            
            [
                'id' => 3467,
                'brand_id' => 109,
                'fipe_code' => '509213-2',
                'model' => 'LS-1630 3-Eixos 2p (diesel)',
                'years' => '1990 a 1999'
            ],
            
            [
                'id' => 3468,
                'brand_id' => 109,
                'fipe_code' => '509122-5',
                'model' => 'LS-1632 2p (diesel)',
                'years' => '1999 a 2002'
            ],
            
            [
                'id' => 3469,
                'brand_id' => 109,
                'fipe_code' => '509201-9',
                'model' => 'LS-1634 2p (diesel)',
                'years' => '2001 a 2012'
            ],
            
            [
                'id' => 4357,
                'brand_id' => 109,
                'fipe_code' => '509258-2',
                'model' => 'LS-1634 3-Eixos 2p (diesel)',
                'years' => '2001 a 2012'
            ],
            
            [
                'id' => 3470,
                'brand_id' => 109,
                'fipe_code' => '509123-3',
                'model' => 'LS-1924 2p (diesel)',
                'years' => '1981 a 1987'
            ],
            
            [
                'id' => 3471,
                'brand_id' => 109,
                'fipe_code' => '509124-1',
                'model' => 'LS-1929 2p (diesel)',
                'years' => '1981 a 1987'
            ],
            
            [
                'id' => 3472,
                'brand_id' => 109,
                'fipe_code' => '509125-0',
                'model' => 'LS-1932 2p (diesel)',
                'years' => '1984 a 1989'
            ],
            
            [
                'id' => 3473,
                'brand_id' => 109,
                'fipe_code' => '509126-8',
                'model' => 'LS-1933 2p (diesel)',
                'years' => '1984 a 1989'
            ],
            
            [
                'id' => 3474,
                'brand_id' => 109,
                'fipe_code' => '509127-6',
                'model' => 'LS-1934 2p (diesel)',
                'years' => '1984 a 1991'
            ],
            
            [
                'id' => 3475,
                'brand_id' => 109,
                'fipe_code' => '509128-4',
                'model' => 'LS-1935 2p (diesel)',
                'years' => '1989 a 1999'
            ],
            
            [
                'id' => 3476,
                'brand_id' => 109,
                'fipe_code' => '509210-8',
                'model' => 'LS-1935 3-Eixos 2p (diesel)',
                'years' => '1989 a 1999'
            ],
            
            [
                'id' => 3477,
                'brand_id' => 109,
                'fipe_code' => '509129-2',
                'model' => 'LS-1938 2p (diesel)',
                'years' => '1998 a 2005'
            ],
            
            [
                'id' => 3478,
                'brand_id' => 109,
                'fipe_code' => '509207-8',
                'model' => 'LS-1938 3-Eixos 2p (diesel)',
                'years' => '1998 a 2005'
            ],
            
            [
                'id' => 3479,
                'brand_id' => 109,
                'fipe_code' => '509130-6',
                'model' => 'LS-1941 2p (diesel)',
                'years' => '1989 a 1997'
            ],
            
            [
                'id' => 3480,
                'brand_id' => 109,
                'fipe_code' => '509233-7',
                'model' => 'LS-1941 3-Eixos 2p (diesel)',
                'years' => '1989 a 1997'
            ],
            
            [
                'id' => 3481,
                'brand_id' => 109,
                'fipe_code' => '509131-4',
                'model' => 'LS-2635 2p (diesel)',
                'years' => '1992 a 1999'
            ],
            
            [
                'id' => 3482,
                'brand_id' => 109,
                'fipe_code' => '509132-2',
                'model' => 'LS-2638 6x4 2p (diesel)',
                'years' => '1998 a 2006'
            ]
            ];
            
            $NAVISTARModels = [
            [
                'id' => 5683,
                'brand_id' => 110,
                'fipe_code' => '510010-0',
                'model' => 'DURASTAR 4400 4x2 2p (diesel)',
                'years' => '2012 a 2012'
            ],
            
            [
                'id' => 6371,
                'brand_id' => 110,
                'fipe_code' => '510013-5',
                'model' => 'DURASTAR 4400 4x2 2p (diesel)(E5)',
                'years' => '2013 a 2014'
            ],
            
            [
                'id' => 5684,
                'brand_id' => 110,
                'fipe_code' => '510011-9',
                'model' => 'DURASTAR 4400 6x2 2p (diesel)',
                'years' => '2012 a 2012'
            ],
            
            [
                'id' => 6372,
                'brand_id' => 110,
                'fipe_code' => '510014-3',
                'model' => 'DURASTAR 4400 6x2 2p (diesel)(E5)',
                'years' => '2013 a 2016'
            ],
            
            [
                'id' => 5685,
                'brand_id' => 110,
                'fipe_code' => '510012-7',
                'model' => 'DURASTAR 4400 6x4 2p (diesel)',
                'years' => '2012 a 2012'
            ],
            
            [
                'id' => 6373,
                'brand_id' => 110,
                'fipe_code' => '510015-1',
                'model' => 'DURASTAR 4400 6x4 2p (diesel)(E5)',
                'years' => '2013 a 2015'
            ],
            
            [
                'id' => 3486,
                'brand_id' => 110,
                'fipe_code' => '510001-1',
                'model' => 'INTERNATIONAL 4700 2p (diesel)',
                'years' => '1998 a 2002'
            ],
            
            [
                'id' => 3487,
                'brand_id' => 110,
                'fipe_code' => '510002-0',
                'model' => 'INTERNATIONAL 4700 3-Eixos 2p (diesel)',
                'years' => '1998 a 2002'
            ],
            
            [
                'id' => 3488,
                'brand_id' => 110,
                'fipe_code' => '510003-8',
                'model' => 'INTERNATIONAL 4900 4x2 2p (diesel)',
                'years' => '1998 a 2002'
            ],
            
            [
                'id' => 3483,
                'brand_id' => 110,
                'fipe_code' => '510006-2',
                'model' => 'INTERNATIONAL 4900 6x4 2p (diesel)',
                'years' => '1998 a 2002'
            ],
            
            [
                'id' => 3489,
                'brand_id' => 110,
                'fipe_code' => '510004-6',
                'model' => 'INTERNATIONAL 9200 4x2 2p (diesel)',
                'years' => '1998 a 2002'
            ],
            
            [
                'id' => 3490,
                'brand_id' => 110,
                'fipe_code' => '510005-4',
                'model' => 'INTERNATIONAL 9200 6x4 2p (diesel)',
                'years' => '1999 a 2002'
            ],
            
            [
                'id' => 3484,
                'brand_id' => 110,
                'fipe_code' => '510008-9',
                'model' => 'INTERNATIONAL 9800 4x2 2p (diesel)',
                'years' => '2001 a 2002'
            ],
            
            [
                'id' => 5524,
                'brand_id' => 110,
                'fipe_code' => '510009-7',
                'model' => 'INTERNATIONAL 9800/9800i 6x2 2p (diesel)',
                'years' => '2011 a 2012'
            ],
            
            [
                'id' => 3485,
                'brand_id' => 110,
                'fipe_code' => '510007-0',
                'model' => 'INTERNATIONAL 9800/9800i 6x4 2p (diesel)',
                'years' => '1999 a 2012'
            ],
            
            [
                'id' => 6374,
                'brand_id' => 110,
                'fipe_code' => '510016-0',
                'model' => 'INTERNATIONAL 9800i 6x2 2p (diesel)(E5)',
                'years' => '2013 a 2014'
            ],
            
            [
                'id' => 6375,
                'brand_id' => 110,
                'fipe_code' => '510017-8',
                'model' => 'INTERNATIONAL 9800i 6x4 2p (diesel)(E5)',
                'years' => '2013 a 2016'
            ]
            ];
            
            $NEOBUSModels = [
            [
                'id' => 3494,
                'brand_id' => 111,
                'fipe_code' => '517001-0',
                'model' => 'T.BOY/ WAY LOT./ESC./ SPTRANS (diesel)',
                'years' => '2000 a 2011'
            ],
            
            [
                'id' => 6221,
                'brand_id' => 111,
                'fipe_code' => '517011-7',
                'model' => 'THUNDER + EXECUTIVO (diesel)(E5)',
                'years' => '2012 a 2016'
            ],
            
            [
                'id' => 3491,
                'brand_id' => 111,
                'fipe_code' => '517004-4',
                'model' => 'THUNDER + EXECUTIVO 1p (diesel)',
                'years' => '2002 a 2011'
            ],
            
            [
                'id' => 6222,
                'brand_id' => 111,
                'fipe_code' => '517010-9',
                'model' => 'THUNDER + LOT./ESC. (diesel)(E5)',
                'years' => '2012 a 2015'
            ],
            
            [
                'id' => 3492,
                'brand_id' => 111,
                'fipe_code' => '517003-6',
                'model' => 'THUNDER + LOT./ESC./ SPTRANS  (diesel',
                'years' => '2002 a 2011'
            ],
            
            [
                'id' => 6223,
                'brand_id' => 111,
                'fipe_code' => '517007-9',
                'model' => 'THUNDER + NEOSTAR URBANO (diesel)(E5)',
                'years' => '2012 a 2015'
            ],
            
            [
                'id' => 3493,
                'brand_id' => 111,
                'fipe_code' => '517002-8',
                'model' => 'THUNDER BOY/ WAY EXECUTIVO 1p (diesel)',
                'years' => '2000 a 2011'
            ],
            
            [
                'id' => 6224,
                'brand_id' => 111,
                'fipe_code' => '517012-5',
                'model' => 'THUNDER PLUS EXECUTIVO (diesel)(E5)',
                'years' => '2012 a 2015'
            ],
            
            [
                'id' => 4699,
                'brand_id' => 111,
                'fipe_code' => '517005-2',
                'model' => 'THUNDER PLUS EXECUTIVO 1p (diesel)',
                'years' => '2008 a 2011'
            ],
            
            [
                'id' => 6225,
                'brand_id' => 111,
                'fipe_code' => '517009-5',
                'model' => 'THUNDER WAY EXECUTIVO (diesel)(E5)',
                'years' => '2012 a 2015'
            ],
            
            [
                'id' => 6226,
                'brand_id' => 111,
                'fipe_code' => '517008-7',
                'model' => 'THUNDER WAY LOT./ESC. (diesel)(E5)',
                'years' => '2012 a 2015'
            ],
            
            [
                'id' => 6227,
                'brand_id' => 111,
                'fipe_code' => '517006-0',
                'model' => 'THUNDER+ NEOSTAR URBANO (diesel)',
                'years' => '2011 a 2012'
            ]
            ];
            
            $PUMAALFAModels = [
            [
                'id' => 3495,
                'brand_id' => 112,
                'fipe_code' => '511001-7',
                'model' => '7900 CB 2p (diesel)',
                'years' => '1996 a 1998'
            ],
            
            [
                'id' => 3496,
                'brand_id' => 112,
                'fipe_code' => '511002-5',
                'model' => '7900 CB TURBO 2p (diesel)',
                'years' => '1997 a 1998'
            ],
            
            [
                'id' => 3497,
                'brand_id' => 112,
                'fipe_code' => '511003-3',
                'model' => '7900 CD 4p (diesel)',
                'years' => '1997 a 1998'
            ],
            
            [
                'id' => 3498,
                'brand_id' => 112,
                'fipe_code' => '511004-1',
                'model' => '7900 CD TURBO 4p (diesel)',
                'years' => '1997 a 1998'
            ],
            
            [
                'id' => 3499,
                'brand_id' => 112,
                'fipe_code' => '511005-0',
                'model' => '9000 2p (diesel)',
                'years' => '1995 a 1995'
            ],
            
            [
                'id' => 3500,
                'brand_id' => 112,
                'fipe_code' => '511006-8',
                'model' => '914 CD 4p (diesel)',
                'years' => '1991 a 1997'
            ],
            
            [
                'id' => 3501,
                'brand_id' => 112,
                'fipe_code' => '511007-6',
                'model' => '914 CS 2p (diesel)',
                'years' => '1991 a 1997'
            ]
            ];
            
            $SAABSCANIAModels = [
            [
                'id' => 3502,
                'brand_id' => 113,
                'fipe_code' => '512001-2',
                'model' => 'R-112 E 320 6x4 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3503,
                'brand_id' => 113,
                'fipe_code' => '512002-0',
                'model' => 'R-112 EW 320 6x4 2p (diesel)',
                'years' => '1990 a 1991'
            ],
            
            [
                'id' => 3504,
                'brand_id' => 113,
                'fipe_code' => '512003-9',
                'model' => 'R-112 H 320 4x2 2p (diesel)',
                'years' => '1982 a 1989'
            ],
            
            [
                'id' => 3505,
                'brand_id' => 113,
                'fipe_code' => '512004-7',
                'model' => 'R-112 HS 320 4x2 2p (diesel)',
                'years' => '1987 a 1990'
            ],
            
            [
                'id' => 3506,
                'brand_id' => 113,
                'fipe_code' => '512005-5',
                'model' => 'R-112 HW 320 4x2 2p (diesel)',
                'years' => '1990 a 1991'
            ],
            
            [
                'id' => 4584,
                'brand_id' => 113,
                'fipe_code' => '512027-6',
                'model' => 'R-112 HW 360 4x2 2p (diesel)',
                'years' => '1990 a 1991'
            ],
            
            [
                'id' => 3507,
                'brand_id' => 113,
                'fipe_code' => '512006-3',
                'model' => 'R-142 E 450 6x4 2p (diesel)',
                'years' => '1982 a 1989'
            ],
            
            [
                'id' => 3508,
                'brand_id' => 113,
                'fipe_code' => '512007-1',
                'model' => 'R-142 EW 450 6x4 2p (diesel)',
                'years' => '1990 a 1991'
            ],
            
            [
                'id' => 3509,
                'brand_id' => 113,
                'fipe_code' => '512008-0',
                'model' => 'R-142 H 450 4x2 2p (diesel)',
                'years' => '1982 a 1987'
            ],
            
            [
                'id' => 3510,
                'brand_id' => 113,
                'fipe_code' => '512009-8',
                'model' => 'R-142 HS 450 4x2 2p (diesel)',
                'years' => '1987 a 1989'
            ],
            
            [
                'id' => 3511,
                'brand_id' => 113,
                'fipe_code' => '512010-1',
                'model' => 'R-142 HW 450 4x2 2p (diesel)',
                'years' => '1990 a 1991'
            ],
            
            [
                'id' => 3512,
                'brand_id' => 113,
                'fipe_code' => '512011-0',
                'model' => 'T-112 E 320 6x4 2p (diesel)',
                'years' => '1981 a 1987'
            ],
            
            [
                'id' => 3513,
                'brand_id' => 113,
                'fipe_code' => '512012-8',
                'model' => 'T-112 ES 320 6x4 2p (diesel)',
                'years' => '1981 a 1987'
            ],
            
            [
                'id' => 3514,
                'brand_id' => 113,
                'fipe_code' => '512013-6',
                'model' => 'T-112 EW 320 6x4 2p (diesel)',
                'years' => '1990 a 1991'
            ],
            
            [
                'id' => 3515,
                'brand_id' => 113,
                'fipe_code' => '512014-4',
                'model' => 'T-112 H 320 4x2 2p (diesel)',
                'years' => '1981 a 1990'
            ],
            
            [
                'id' => 3516,
                'brand_id' => 113,
                'fipe_code' => '512025-0',
                'model' => 'T-112 H 320 6x2 2p (diesel)',
                'years' => '1981 a 1990'
            ],
            
            [
                'id' => 3517,
                'brand_id' => 113,
                'fipe_code' => '512015-2',
                'model' => 'T-112 HS 320 4x2 2p (diesel)',
                'years' => '1984 a 1989'
            ],
            
            [
                'id' => 3944,
                'brand_id' => 113,
                'fipe_code' => '512026-8',
                'model' => 'T-112 HW 310 4x2 2p (diesel)',
                'years' => '1989 a 1991'
            ],
            
            [
                'id' => 3518,
                'brand_id' => 113,
                'fipe_code' => '512016-0',
                'model' => 'T-112 HW 320 4x2 2p (diesel)',
                'years' => '1990 a 1991'
            ],
            
            [
                'id' => 3519,
                'brand_id' => 113,
                'fipe_code' => '512024-1',
                'model' => 'T-112 HW 320 6x2 2p (diesel)',
                'years' => '1990 a 1991'
            ],
            
            [
                'id' => 3520,
                'brand_id' => 113,
                'fipe_code' => '512017-9',
                'model' => 'T-112 HW 360 4x2 2p (diesel)',
                'years' => '1989 a 1991'
            ],
            
            [
                'id' => 5478,
                'brand_id' => 113,
                'fipe_code' => '512028-4',
                'model' => 'T-112 HW 360 6x2 2p (diesel)',
                'years' => '1989 a 1991'
            ],
            
            [
                'id' => 3521,
                'brand_id' => 113,
                'fipe_code' => '512018-7',
                'model' => 'T-142 E 450 6x4 2p (diesel)',
                'years' => '1982 a 1987'
            ],
            
            [
                'id' => 3522,
                'brand_id' => 113,
                'fipe_code' => '512019-5',
                'model' => 'T-142 ES 450 6x4 2p (diesel)',
                'years' => '1987 a 1989'
            ],
            
            [
                'id' => 3523,
                'brand_id' => 113,
                'fipe_code' => '512020-9',
                'model' => 'T-142 EW 450 6x4 2p (diesel)',
                'years' => '1989 a 1991'
            ],
            
            [
                'id' => 3524,
                'brand_id' => 113,
                'fipe_code' => '512021-7',
                'model' => 'T-142 H 450 4x2 2p (diesel)',
                'years' => '1983 a 1987'
            ],
            
            [
                'id' => 3525,
                'brand_id' => 113,
                'fipe_code' => '512022-5',
                'model' => 'T-142 HS 450 4x2 2p (diesel)',
                'years' => '1987 a 1989'
            ],
            
            [
                'id' => 3526,
                'brand_id' => 113,
                'fipe_code' => '512023-3',
                'model' => 'T-142 HW 450 4x2 2p (diesel)',
                'years' => '1990 a 1991'
            ]
            ];
            
            $SCANIAModels = [
            [
                'id' => 9133,
                'brand_id' => 114,
                'fipe_code' => '513333-5',
                'model' => 'G-340 A 4x2 CNG 2p (GNV)(E5)',
                'years' => '2020 a 2020'
            ],
            
            [
                'id' => 10388,
                'brand_id' => 114,
                'fipe_code' => '513426-9',
                'model' => 'G-340 A 4x2 CNG 2p (GNV)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 5921,
                'brand_id' => 114,
                'fipe_code' => '513250-9',
                'model' => 'G-360 A 4x2 (diesel)(E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 5920,
                'brand_id' => 114,
                'fipe_code' => '513249-5',
                'model' => 'G-360 A 4x2 3-Eixos/A 6x2 2p (dies.)(E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 9370,
                'brand_id' => 114,
                'fipe_code' => '513337-8',
                'model' => 'G-360 B 6x2 2p (diesel)(E5)',
                'years' => '2021 a 2021'
            ],
            
            [
                'id' => 9204,
                'brand_id' => 114,
                'fipe_code' => '513334-3',
                'model' => 'G-360 B 6x4 2p (diesel)(E5)',
                'years' => '2021 a 2022'
            ],
            
            [
                'id' => 8708,
                'brand_id' => 114,
                'fipe_code' => '513309-2',
                'model' => 'G-360 B 8x2 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 10277,
                'brand_id' => 114,
                'fipe_code' => '513367-0',
                'model' => 'G-360 B 8x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10534,
                'brand_id' => 114,
                'fipe_code' => '513439-0',
                'model' => 'G-360 B 8x4 2p (diesel)(E5)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10981,
                'brand_id' => 114,
                'fipe_code' => '513440-4',
                'model' => 'G-370 A 4x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10278,
                'brand_id' => 114,
                'fipe_code' => '513370-0',
                'model' => 'G-370 A 6x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 4596,
                'brand_id' => 114,
                'fipe_code' => '513159-6',
                'model' => 'G-380 A 4x2 2p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 4597,
                'brand_id' => 114,
                'fipe_code' => '513160-0',
                'model' => 'G-380 A 4x2 3-Eixos/ A 6x2 2p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 5822,
                'brand_id' => 114,
                'fipe_code' => '513217-7',
                'model' => 'G-400 A 4x2 2p (diesel) (E5)',
                'years' => '2012 a 2018'
            ],
            
            [
                'id' => 5823,
                'brand_id' => 114,
                'fipe_code' => '513218-5',
                'model' => 'G-400 A 4x2 3-Eixos/A 6x2 2p(dies.) (E5)',
                'years' => '2012 a 2018'
            ],
            
            [
                'id' => 5808,
                'brand_id' => 114,
                'fipe_code' => '513239-8',
                'model' => 'G-400 A 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2016'
            ],
            
            [
                'id' => 5804,
                'brand_id' => 114,
                'fipe_code' => '513235-5',
                'model' => 'G-400 B 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2018'
            ],
            
            [
                'id' => 8603,
                'brand_id' => 114,
                'fipe_code' => '513282-7',
                'model' => 'G-410 A 4x2 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 8604,
                'brand_id' => 114,
                'fipe_code' => '513285-1',
                'model' => 'G-410 A 6x2 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 10154,
                'brand_id' => 114,
                'fipe_code' => '513348-3',
                'model' => 'G-410 A 6x2 2p (GNV)(E5)',
                'years' => '2023 a 2023'
            ],
            
            [
                'id' => 10279,
                'brand_id' => 114,
                'fipe_code' => '513427-7',
                'model' => 'G-410 A 6x2 CNG 2p (GNV)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10280,
                'brand_id' => 114,
                'fipe_code' => '513428-5',
                'model' => 'G-410 A 6x2 LNG 2p (GNV)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 9675,
                'brand_id' => 114,
                'fipe_code' => '513346-7',
                'model' => 'G-410 A 6x4 CNG 2p (GNV)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 10389,
                'brand_id' => 114,
                'fipe_code' => '513429-3',
                'model' => 'G-410 A 6x4 CNG 2p (GNV)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10535,
                'brand_id' => 114,
                'fipe_code' => '513438-2',
                'model' => 'G-410 A 6x4 CNG XT (GNV)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 8725,
                'brand_id' => 114,
                'fipe_code' => '513313-0',
                'model' => 'G-410 B 6x4 2p (diesel)(E5)',
                'years' => '2019 a 2022'
            ],
            
            [
                'id' => 9093,
                'brand_id' => 114,
                'fipe_code' => '513330-0',
                'model' => 'G-410 B 8x4 2p (diesel)(E5)',
                'years' => '2020 a 2020'
            ],
            
            [
                'id' => 4598,
                'brand_id' => 114,
                'fipe_code' => '513161-8',
                'model' => 'G-420 A 4x2 2p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 10281,
                'brand_id' => 114,
                'fipe_code' => '513372-6',
                'model' => 'G-420 A 4x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 4599,
                'brand_id' => 114,
                'fipe_code' => '513162-6',
                'model' => 'G-420 A 4x2 3-Eixos/ A 6x2 2p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 10282,
                'brand_id' => 114,
                'fipe_code' => '513375-0',
                'model' => 'G-420 A 6x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 4600,
                'brand_id' => 114,
                'fipe_code' => '513163-4',
                'model' => 'G-420 A 6x4 2p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 4918,
                'brand_id' => 114,
                'fipe_code' => '513187-1',
                'model' => 'G-420 B 6x4 2p (diesel)',
                'years' => '2009 a 2012'
            ],
            
            [
                'id' => 10982,
                'brand_id' => 114,
                'fipe_code' => '513446-3',
                'model' => 'G-420 B 6x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 5321,
                'brand_id' => 114,
                'fipe_code' => '513205-3',
                'model' => 'G-420 B 8x4 2p (diesel)',
                'years' => '2010 a 2011'
            ],
            
            [
                'id' => 4601,
                'brand_id' => 114,
                'fipe_code' => '513164-2',
                'model' => 'G-440 A 4x2 2p (diesel)',
                'years' => '2008 a 2011'
            ],
            
            [
                'id' => 6412,
                'brand_id' => 114,
                'fipe_code' => '513257-6',
                'model' => 'G-440 A 4x2 2p (diesel)(E5)',
                'years' => '2012 a 2016'
            ],
            
            [
                'id' => 4602,
                'brand_id' => 114,
                'fipe_code' => '513165-0',
                'model' => 'G-440 A 4x2 3-Eixos/ A 6x2 2p (diesel)',
                'years' => '2008 a 2011'
            ],
            
            [
                'id' => 6030,
                'brand_id' => 114,
                'fipe_code' => '513253-3',
                'model' => 'G-440 A 6x2 2p (diesel)(E5)',
                'years' => '2012 a 2016'
            ],
            
            [
                'id' => 4603,
                'brand_id' => 114,
                'fipe_code' => '513166-9',
                'model' => 'G-440 A 6x4 2p (diesel)',
                'years' => '2008 a 2011'
            ],
            
            [
                'id' => 5809,
                'brand_id' => 114,
                'fipe_code' => '513240-1',
                'model' => 'G-440 A 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 5805,
                'brand_id' => 114,
                'fipe_code' => '513236-3',
                'model' => 'G-440 B 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2018'
            ],
            
            [
                'id' => 5322,
                'brand_id' => 114,
                'fipe_code' => '513206-1',
                'model' => 'G-440 B 8x4 2p (diesel)',
                'years' => '2010 a 2011'
            ],
            
            [
                'id' => 5806,
                'brand_id' => 114,
                'fipe_code' => '513237-1',
                'model' => 'G-440 B 8x4 2p (diesel) (E5)',
                'years' => '2012 a 2018'
            ],
            
            [
                'id' => 8627,
                'brand_id' => 114,
                'fipe_code' => '513302-5',
                'model' => 'G-450 A 4x2 2p (diesel)(E5)',
                'years' => '2019 a 2022'
            ],
            
            [
                'id' => 8763,
                'brand_id' => 114,
                'fipe_code' => '513320-3',
                'model' => 'G-450 A 6x2 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 11008,
                'brand_id' => 114,
                'fipe_code' => '513448-0',
                'model' => 'G-450 A 6x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 8605,
                'brand_id' => 114,
                'fipe_code' => '513291-6',
                'model' => 'G-450 A 6x4 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 8606,
                'brand_id' => 114,
                'fipe_code' => '513294-0',
                'model' => 'G-450 B 6x4 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 11009,
                'brand_id' => 114,
                'fipe_code' => '513447-1',
                'model' => 'G-450 B 6x4 XT (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 9371,
                'brand_id' => 114,
                'fipe_code' => '513338-6',
                'model' => 'G-450 B 8x4 2p (diesel)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 10283,
                'brand_id' => 114,
                'fipe_code' => '513381-5',
                'model' => 'G-460 A 4x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10284,
                'brand_id' => 114,
                'fipe_code' => '513384-0',
                'model' => 'G-460 A 4x2 XT (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10285,
                'brand_id' => 114,
                'fipe_code' => '513385-8',
                'model' => 'G-460 A 6x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10286,
                'brand_id' => 114,
                'fipe_code' => '513389-0',
                'model' => 'G-460 A 6x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10287,
                'brand_id' => 114,
                'fipe_code' => '513391-2',
                'model' => 'G-460 A 6x4 XT (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10288,
                'brand_id' => 114,
                'fipe_code' => '513392-0',
                'model' => 'G-460 B 6x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10289,
                'brand_id' => 114,
                'fipe_code' => '513393-9',
                'model' => 'G-460 B 6x4 XT (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10290,
                'brand_id' => 114,
                'fipe_code' => '513394-7',
                'model' => 'G-460 B 8x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10291,
                'brand_id' => 114,
                'fipe_code' => '513395-5',
                'model' => 'G-460 B 8x4 XT (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 4604,
                'brand_id' => 114,
                'fipe_code' => '513167-7',
                'model' => 'G-470 A 4x2 2p (diesel)',
                'years' => '2008 a 2011'
            ],
            
            [
                'id' => 4605,
                'brand_id' => 114,
                'fipe_code' => '513168-5',
                'model' => 'G-470 A 4x2 3-Eixos/ A 6x2 2p (diesel)',
                'years' => '2008 a 2011'
            ],
            
            [
                'id' => 4606,
                'brand_id' => 114,
                'fipe_code' => '513169-3',
                'model' => 'G-470 A 6x4 2p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 4957,
                'brand_id' => 114,
                'fipe_code' => '513188-0',
                'model' => 'G-470 B 6x4 2p (diesel)',
                'years' => '2009 a 2011'
            ],
            
            [
                'id' => 4625,
                'brand_id' => 114,
                'fipe_code' => '513182-0',
                'model' => 'G-470 B 8x4 2p (diesel)',
                'years' => '2008 a 2011'
            ],
            
            [
                'id' => 5798,
                'brand_id' => 114,
                'fipe_code' => '513241-0',
                'model' => 'G-480 A 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 5807,
                'brand_id' => 114,
                'fipe_code' => '513238-0',
                'model' => 'G-480 B 8x4 2p (diesel) (E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 9505,
                'brand_id' => 114,
                'fipe_code' => '513341-6',
                'model' => 'G-500 A 6x2 2p (diesel)(E5)',
                'years' => '2021 a 2021'
            ],
            
            [
                'id' => 8607,
                'brand_id' => 114,
                'fipe_code' => '513292-4',
                'model' => 'G-500 A 6x4 2p (diesel)(E5)',
                'years' => '2019 a 2022'
            ],
            
            [
                'id' => 10292,
                'brand_id' => 114,
                'fipe_code' => '513398-0',
                'model' => 'G-500 A 6x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10293,
                'brand_id' => 114,
                'fipe_code' => '513400-5',
                'model' => 'G-500 A 6x4 XT (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 8841,
                'brand_id' => 114,
                'fipe_code' => '513323-8',
                'model' => 'G-500 B 6x4 2p (diesel) (E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 10294,
                'brand_id' => 114,
                'fipe_code' => '513403-0',
                'model' => 'G-500 B 6x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10295,
                'brand_id' => 114,
                'fipe_code' => '513404-8',
                'model' => 'G-500 B 6x4 XT (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 8608,
                'brand_id' => 114,
                'fipe_code' => '513295-9',
                'model' => 'G-500 B 8x4 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 10296,
                'brand_id' => 114,
                'fipe_code' => '513405-6',
                'model' => 'G-500 B 8x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10297,
                'brand_id' => 114,
                'fipe_code' => '513406-4',
                'model' => 'G-500 B 8x4 XT (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 8609,
                'brand_id' => 114,
                'fipe_code' => '513293-2',
                'model' => 'G-540 A 6x4 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 9372,
                'brand_id' => 114,
                'fipe_code' => '513340-8',
                'model' => 'G-540 B 6x4 2p (diesel)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 10156,
                'brand_id' => 114,
                'fipe_code' => '513349-1',
                'model' => 'G-540 B 8x4 2p (diesel)(E5)',
                'years' => '2023 a 2023'
            ],
            
            [
                'id' => 10298,
                'brand_id' => 114,
                'fipe_code' => '513409-9',
                'model' => 'G-560 A 6x4 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10299,
                'brand_id' => 114,
                'fipe_code' => '513412-9',
                'model' => 'G-560 A 6x4 XT (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10300,
                'brand_id' => 114,
                'fipe_code' => '513414-5',
                'model' => 'G-560 B 6x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10301,
                'brand_id' => 114,
                'fipe_code' => '513434-0',
                'model' => 'G-560 B 6x4 XT (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10536,
                'brand_id' => 114,
                'fipe_code' => '513436-6',
                'model' => 'G-560 B 8x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10537,
                'brand_id' => 114,
                'fipe_code' => '513437-4',
                'model' => 'G-560 B 8x4 XT (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 3527,
                'brand_id' => 114,
                'fipe_code' => '513001-8',
                'model' => 'L-111 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3528,
                'brand_id' => 114,
                'fipe_code' => '513002-6',
                'model' => 'L-141 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3529,
                'brand_id' => 114,
                'fipe_code' => '513033-6',
                'model' => 'P-114 CA 360 6x4 NZ 2p (diesel)',
                'years' => '1997 a 1999'
            ],
            
            [
                'id' => 3530,
                'brand_id' => 114,
                'fipe_code' => '513100-6',
                'model' => 'P-114 CB 330 6x4 NZ 2p (diesel)',
                'years' => '2001 a 2004'
            ],
            
            [
                'id' => 3531,
                'brand_id' => 114,
                'fipe_code' => '513034-4',
                'model' => 'P-114 CB 360 6x4 NZ 2p (diesel)',
                'years' => '1997 a 1999'
            ],
            
            [
                'id' => 3532,
                'brand_id' => 114,
                'fipe_code' => '513035-2',
                'model' => 'P-114 GA 320 4x2 NZ 2p (diesel)',
                'years' => '1997 a 1999'
            ],
            
            [
                'id' => 3533,
                'brand_id' => 114,
                'fipe_code' => '513036-0',
                'model' => 'P-114 GA 330 4x2 NZ 2p (diesel)',
                'years' => '1999 a 2006'
            ],
            
            [
                'id' => 3922,
                'brand_id' => 114,
                'fipe_code' => '513138-3',
                'model' => 'P-114 GA 340 4x2 NZ 2p (diesel)',
                'years' => '2006 a 2008'
            ],
            
            [
                'id' => 4607,
                'brand_id' => 114,
                'fipe_code' => '513155-3',
                'model' => 'P-114 GA 360 4x2 NZ 2p (diesel)',
                'years' => '1998 a 2000'
            ],
            
            [
                'id' => 3534,
                'brand_id' => 114,
                'fipe_code' => '513108-1',
                'model' => 'P-114 GB 330 4x2 NZ 2p (diesel)',
                'years' => '2003 a 2006'
            ],
            
            [
                'id' => 3923,
                'brand_id' => 114,
                'fipe_code' => '513139-1',
                'model' => 'P-114 LA 340 6x2 NA 2p (diesel)',
                'years' => '2006 a 2007'
            ],
            
            [
                'id' => 3535,
                'brand_id' => 114,
                'fipe_code' => '513037-9',
                'model' => 'P-124 CA 360 6x4 NZ 2p (diesel)',
                'years' => '1997 a 2006'
            ],
            
            [
                'id' => 3536,
                'brand_id' => 114,
                'fipe_code' => '513110-3',
                'model' => 'P-124 CA 400 6x4 NZ 2p (diesel)',
                'years' => '2001 a 2006'
            ],
            
            [
                'id' => 3537,
                'brand_id' => 114,
                'fipe_code' => '513099-9',
                'model' => 'P-124 CA 420 6x4 NZ 2p (diesel)',
                'years' => '2001 a 2008'
            ],
            
            [
                'id' => 3538,
                'brand_id' => 114,
                'fipe_code' => '513038-7',
                'model' => 'P-124 CB 360 6x4 NZ 2p (diesel)',
                'years' => '1997 a 2006'
            ],
            
            [
                'id' => 3539,
                'brand_id' => 114,
                'fipe_code' => '513094-8',
                'model' => 'P-124 CB 360 8x4 NZ 2p (diesel)',
                'years' => '1999 a 2006'
            ],
            
            [
                'id' => 3540,
                'brand_id' => 114,
                'fipe_code' => '513095-6',
                'model' => 'P-124 CB 400 6x4 NZ 2p (diesel)',
                'years' => '2001 a 2006'
            ],
            
            [
                'id' => 3541,
                'brand_id' => 114,
                'fipe_code' => '513126-0',
                'model' => 'P-124 CB 400 8x4 NZ 2p (diesel)',
                'years' => '2002 a 2006'
            ],
            
            [
                'id' => 3542,
                'brand_id' => 114,
                'fipe_code' => '513101-4',
                'model' => 'P-124 CB 420 6x4 NZ 2p (diesel)',
                'years' => '2001 a 2008'
            ],
            
            [
                'id' => 3924,
                'brand_id' => 114,
                'fipe_code' => '513134-0',
                'model' => 'P-124 CB 420 8x4 NZ 2p (diesel)',
                'years' => '2003 a 2008'
            ],
            
            [
                'id' => 3543,
                'brand_id' => 114,
                'fipe_code' => '513092-1',
                'model' => 'P-124 GA 360 4x2 NZ 2p (diesel)',
                'years' => '1998 a 2006'
            ],
            
            [
                'id' => 5606,
                'brand_id' => 114,
                'fipe_code' => '513212-6',
                'model' => 'P-124 GA 420 6x4 NA 2p (diesel)',
                'years' => '2005 a 2006'
            ],
            
            [
                'id' => 6228,
                'brand_id' => 114,
                'fipe_code' => '513256-8',
                'model' => 'P-124 LA 360 6x2 NA 2p (diesel)',
                'years' => '2004 a 2005'
            ],
            
            [
                'id' => 4153,
                'brand_id' => 114,
                'fipe_code' => '513140-5',
                'model' => 'P-124 LA 420 6x2 NA 2p (diesel)',
                'years' => '2001 a 2007'
            ],
            
            [
                'id' => 4884,
                'brand_id' => 114,
                'fipe_code' => '513185-5',
                'model' => 'P-230 B 4x2 2p (diesel)',
                'years' => '2009 a 2012'
            ],
            
            [
                'id' => 8610,
                'brand_id' => 114,
                'fipe_code' => '513279-7',
                'model' => 'P-250 A 4x2 2p (diesel)(E5)',
                'years' => '2019 a 2022'
            ],
            
            [
                'id' => 9676,
                'brand_id' => 114,
                'fipe_code' => '513344-0',
                'model' => 'P-250 A 6x2 2p (Diesel)(E5)',
                'years' => '2022 a 2022'
            ],
            
            [
                'id' => 5799,
                'brand_id' => 114,
                'fipe_code' => '513242-8',
                'model' => 'P-250 B 4x2 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 11033,
                'brand_id' => 114,
                'fipe_code' => '513449-8',
                'model' => 'P-250 B 4x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 5800,
                'brand_id' => 114,
                'fipe_code' => '513243-6',
                'model' => 'P-250 B 6x2 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 11034,
                'brand_id' => 114,
                'fipe_code' => '513450-1',
                'model' => 'P-250 B 6x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 5811,
                'brand_id' => 114,
                'fipe_code' => '513230-4',
                'model' => 'P-250 B 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2018'
            ],
            
            [
                'id' => 5801,
                'brand_id' => 114,
                'fipe_code' => '513244-4',
                'model' => 'P-250 B 8x2 2p (diesel) (E5)',
                'years' => '2012 a 2018'
            ],
            
            [
                'id' => 5812,
                'brand_id' => 114,
                'fipe_code' => '513231-2',
                'model' => 'P-250 B 8x4 2p (diesel) (E5)',
                'years' => '2012 a 2016'
            ],
            
            [
                'id' => 4608,
                'brand_id' => 114,
                'fipe_code' => '513156-1',
                'model' => 'P-270 A 4x2 2p (diesel)',
                'years' => '2008 a 2011'
            ],
            
            [
                'id' => 4885,
                'brand_id' => 114,
                'fipe_code' => '513184-7',
                'model' => 'P-270 B 4x2 2p (diesel)',
                'years' => '2009 a 2012'
            ],
            
            [
                'id' => 4886,
                'brand_id' => 114,
                'fipe_code' => '513186-3',
                'model' => 'P-270 B 6x2 2p (diesel)',
                'years' => '2009 a 2012'
            ],
            
            [
                'id' => 8611,
                'brand_id' => 114,
                'fipe_code' => '513280-0',
                'model' => 'P-280 A 4x2 2p (diesel)(E5)',
                'years' => '2019 a 2022'
            ],
            
            [
                'id' => 8612,
                'brand_id' => 114,
                'fipe_code' => '513296-7',
                'model' => 'P-280 B 4x2 2p (diesel)(E5)',
                'years' => '2019 a 2022'
            ],
            
            [
                'id' => 10304,
                'brand_id' => 114,
                'fipe_code' => '513351-3',
                'model' => 'P-280 B 4x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 8726,
                'brand_id' => 114,
                'fipe_code' => '513318-1',
                'model' => 'P-280 B 6x2 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 10305,
                'brand_id' => 114,
                'fipe_code' => '513352-1',
                'model' => 'P-280 B 6x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 8980,
                'brand_id' => 114,
                'fipe_code' => '513325-4',
                'model' => 'P-280 B 6x4 2p (diesel)(E5)',
                'years' => '2019 a 2022'
            ],
            
            [
                'id' => 10306,
                'brand_id' => 114,
                'fipe_code' => '513353-0',
                'model' => 'P-280 B 6x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 8613,
                'brand_id' => 114,
                'fipe_code' => '513298-3',
                'model' => 'P-280 B 8x2 2p (diesel)(E5)',
                'years' => '2019 a 2022'
            ],
            
            [
                'id' => 10307,
                'brand_id' => 114,
                'fipe_code' => '513354-8',
                'model' => 'P-280 B 8x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 4609,
                'brand_id' => 114,
                'fipe_code' => '513157-0',
                'model' => 'P-310 A 4x2 2p (diesel)',
                'years' => '2008 a 2011'
            ],
            
            [
                'id' => 5829,
                'brand_id' => 114,
                'fipe_code' => '513214-2',
                'model' => 'P-310 A 4x2 2p (diesel) (E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 6572,
                'brand_id' => 114,
                'fipe_code' => '513258-4',
                'model' => 'P-310 B 4x2 2p (diesel)(E5)',
                'years' => '2013 a 2019'
            ],
            
            [
                'id' => 6031,
                'brand_id' => 114,
                'fipe_code' => '513252-5',
                'model' => 'P-310 B 6x2 2p (diesel) (E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 4610,
                'brand_id' => 114,
                'fipe_code' => '513178-2',
                'model' => 'P-310 B 6x4 2p (diesel)',
                'years' => '2008 a 2011'
            ],
            
            [
                'id' => 5813,
                'brand_id' => 114,
                'fipe_code' => '513232-0',
                'model' => 'P-310 B 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 5802,
                'brand_id' => 114,
                'fipe_code' => '513245-2',
                'model' => 'P-310 B 8x2 (diesel) (E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 5828,
                'brand_id' => 114,
                'fipe_code' => '513213-4',
                'model' => 'P-310 B 8x2 2p (diesel)',
                'years' => '2011 a 2012'
            ],
            
            [
                'id' => 4611,
                'brand_id' => 114,
                'fipe_code' => '513179-0',
                'model' => 'P-310 B 8x4 2p (diesel)',
                'years' => '2008 a 2011'
            ],
            
            [
                'id' => 5814,
                'brand_id' => 114,
                'fipe_code' => '513233-9',
                'model' => 'P-310 B 8x4 2p (diesel) (E5)',
                'years' => '2012 a 2018'
            ],
            
            [
                'id' => 8614,
                'brand_id' => 114,
                'fipe_code' => '513281-9',
                'model' => 'P-320 A 4x2 2p (diesel)(E5)',
                'years' => '2019 a 2022'
            ],
            
            [
                'id' => 8615,
                'brand_id' => 114,
                'fipe_code' => '513297-5',
                'model' => 'P-320 B 4x2 2p (diesel)(E5)',
                'years' => '2019 a 2022'
            ],
            
            [
                'id' => 10308,
                'brand_id' => 114,
                'fipe_code' => '513355-6',
                'model' => 'P-320 B 4x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10309,
                'brand_id' => 114,
                'fipe_code' => '513356-4',
                'model' => 'P-320 B 4x2 XT (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 8616,
                'brand_id' => 114,
                'fipe_code' => '513299-1',
                'model' => 'P-320 B 6x2 2p (diesel)(E5)',
                'years' => '2019 a 2022'
            ],
            
            [
                'id' => 10310,
                'brand_id' => 114,
                'fipe_code' => '513357-2',
                'model' => 'P-320 B 6x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 8764,
                'brand_id' => 114,
                'fipe_code' => '513321-1',
                'model' => 'P-320 B 6x4 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 10311,
                'brand_id' => 114,
                'fipe_code' => '513358-0',
                'model' => 'P-320 B 6x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10312,
                'brand_id' => 114,
                'fipe_code' => '513359-9',
                'model' => 'P-320 B 6x4 XT (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 8617,
                'brand_id' => 114,
                'fipe_code' => '513300-9',
                'model' => 'P-320 B 8x2 2p (diesel)(E5)',
                'years' => '2019 a 2022'
            ],
            
            [
                'id' => 10313,
                'brand_id' => 114,
                'fipe_code' => '513360-2',
                'model' => 'P-320 B 8x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 4612,
                'brand_id' => 114,
                'fipe_code' => '513158-8',
                'model' => 'P-340 A 4x2 2p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 10314,
                'brand_id' => 114,
                'fipe_code' => '513425-0',
                'model' => 'P-340 A 4x2 CNG 2p (GNV)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 9580,
                'brand_id' => 114,
                'fipe_code' => '513342-4',
                'model' => 'P-340 A 4x2 GNC 2p (GNV)(E5)',
                'years' => '2021 a 2022'
            ],
            
            [
                'id' => 5019,
                'brand_id' => 114,
                'fipe_code' => '513189-8',
                'model' => 'P-340 A 6x2 2p (diesel)',
                'years' => '2009 a 2012'
            ],
            
            [
                'id' => 5573,
                'brand_id' => 114,
                'fipe_code' => '513211-8',
                'model' => 'P-340 B 6x4 2p (diesel)',
                'years' => '2011 a 2012'
            ],
            
            [
                'id' => 5830,
                'brand_id' => 114,
                'fipe_code' => '513215-0',
                'model' => 'P-360 A 4x2 2p (diesel) (E5)',
                'years' => '2012 a 2023'
            ],
            
            [
                'id' => 5831,
                'brand_id' => 114,
                'fipe_code' => '513216-9',
                'model' => 'P-360 A 6x2 2p (diesel) (E5)',
                'years' => '2012 a 2023'
            ],
            
            [
                'id' => 9677,
                'brand_id' => 114,
                'fipe_code' => '513345-9',
                'model' => 'P-360 B 4x2 2p (diesel)(E5)',
                'years' => '2022 a 2023'
            ],
            
            [
                'id' => 10315,
                'brand_id' => 114,
                'fipe_code' => '513361-0',
                'model' => 'P-360 B 4x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10316,
                'brand_id' => 114,
                'fipe_code' => '513362-9',
                'model' => 'P-360 B 4x2 XT (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 6949,
                'brand_id' => 114,
                'fipe_code' => '513259-2',
                'model' => 'P-360 B 6x2 2p (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 10317,
                'brand_id' => 114,
                'fipe_code' => '513363-7',
                'model' => 'P-360 B 6x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 5815,
                'brand_id' => 114,
                'fipe_code' => '513234-7',
                'model' => 'P-360 B 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2023'
            ],
            
            [
                'id' => 10318,
                'brand_id' => 114,
                'fipe_code' => '513364-5',
                'model' => 'P-360 B 6x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10319,
                'brand_id' => 114,
                'fipe_code' => '513365-3',
                'model' => 'P-360 B 6x4 XT (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 8727,
                'brand_id' => 114,
                'fipe_code' => '513317-3',
                'model' => 'P-360 B 8x2 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 10320,
                'brand_id' => 114,
                'fipe_code' => '513366-1',
                'model' => 'P-360 B 8x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 8174,
                'brand_id' => 114,
                'fipe_code' => '513267-3',
                'model' => 'P-360 B 8x4 2p (diesel)(E5)',
                'years' => '2018 a 2018'
            ],
            
            [
                'id' => 10321,
                'brand_id' => 114,
                'fipe_code' => '513368-8',
                'model' => 'P-370 A 4x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10322,
                'brand_id' => 114,
                'fipe_code' => '513369-6',
                'model' => 'P-370 A 6x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 9075,
                'brand_id' => 114,
                'fipe_code' => '513329-7',
                'model' => 'P-410 A 4x2 (diesel)(E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 8944,
                'brand_id' => 114,
                'fipe_code' => '513324-6',
                'model' => 'P-410 A 6x2 2p (diesel)(E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 8728,
                'brand_id' => 114,
                'fipe_code' => '513315-7',
                'model' => 'P-410 B 6x4 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 9296,
                'brand_id' => 114,
                'fipe_code' => '513336-0',
                'model' => 'P-410 B 8x2 (diesel)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 9076,
                'brand_id' => 114,
                'fipe_code' => '513328-9',
                'model' => 'P-410 B 8x4 (diesel)(E5)',
                'years' => '2020 a 2022'
            ],
            
            [
                'id' => 10323,
                'brand_id' => 114,
                'fipe_code' => '513371-8',
                'model' => 'P-420 A 4x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10324,
                'brand_id' => 114,
                'fipe_code' => '513374-2',
                'model' => 'P-420 A 6x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 4613,
                'brand_id' => 114,
                'fipe_code' => '513183-9',
                'model' => 'P-420 A 6x4 2p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 4614,
                'brand_id' => 114,
                'fipe_code' => '513180-4',
                'model' => 'P-420 B 6x4 2p (diesel)',
                'years' => '2008 a 2011'
            ],
            
            [
                'id' => 10325,
                'brand_id' => 114,
                'fipe_code' => '513377-7',
                'model' => 'P-420 B 6x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10326,
                'brand_id' => 114,
                'fipe_code' => '513378-5',
                'model' => 'P-420 B 6x4 XT (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10327,
                'brand_id' => 114,
                'fipe_code' => '513379-3',
                'model' => 'P-420 B 8x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 4626,
                'brand_id' => 114,
                'fipe_code' => '513181-2',
                'model' => 'P-420 B 8x4 2p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 9243,
                'brand_id' => 114,
                'fipe_code' => '513335-1',
                'model' => 'P-450 B 6x4 2p (diesel)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 11066,
                'brand_id' => 114,
                'fipe_code' => '513451-0',
                'model' => 'P-450 B 6x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10328,
                'brand_id' => 114,
                'fipe_code' => '513380-7',
                'model' => 'P-460 B 6x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10329,
                'brand_id' => 114,
                'fipe_code' => '513388-2',
                'model' => 'P-460 B 6x4 XT (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 3544,
                'brand_id' => 114,
                'fipe_code' => '513039-5',
                'model' => 'P-93 H 250 4x2 2p (diesel)',
                'years' => '1995 a 1999'
            ],
            
            [
                'id' => 3545,
                'brand_id' => 114,
                'fipe_code' => '513040-9',
                'model' => 'P-94 CB 260 6x4 NZ 2p (diesel)',
                'years' => '1998 a 2004'
            ],
            
            [
                'id' => 3546,
                'brand_id' => 114,
                'fipe_code' => '513124-3',
                'model' => 'P-94 CB 270 6x4 NZ 2p (diesel)',
                'years' => '2005 a 2007'
            ],
            
            [
                'id' => 3547,
                'brand_id' => 114,
                'fipe_code' => '513125-1',
                'model' => 'P-94 CB 310 6x4 NZ 2p (diesel)',
                'years' => '2005 a 2008'
            ],
            
            [
                'id' => 3548,
                'brand_id' => 114,
                'fipe_code' => '513097-2',
                'model' => 'P-94 DB 220 4x2 NZ 2p (diesel)',
                'years' => '2001 a 2004'
            ],
            
            [
                'id' => 3549,
                'brand_id' => 114,
                'fipe_code' => '513121-9',
                'model' => 'P-94 DB 230 4x2 NZ 2p (diesel)',
                'years' => '2005 a 2007'
            ],
            
            [
                'id' => 3550,
                'brand_id' => 114,
                'fipe_code' => '513041-7',
                'model' => 'P-94 DB 260 4x2 NZ 2p (diesel)',
                'years' => '1998 a 2004'
            ],
            
            [
                'id' => 3551,
                'brand_id' => 114,
                'fipe_code' => '513042-5',
                'model' => 'P-94 DB 260 6x2 NA 2p (diesel)',
                'years' => '1998 a 2004'
            ],
            
            [
                'id' => 3552,
                'brand_id' => 114,
                'fipe_code' => '513122-7',
                'model' => 'P-94 DB 270 4x2 NZ 2p (diesel)',
                'years' => '2005 a 2007'
            ],
            
            [
                'id' => 3553,
                'brand_id' => 114,
                'fipe_code' => '513123-5',
                'model' => 'P-94 DB 270 6x2 NA 2p (diesel)',
                'years' => '2005 a 2007'
            ],
            
            [
                'id' => 3554,
                'brand_id' => 114,
                'fipe_code' => '513043-3',
                'model' => 'P-94 GA 260 4x2 NZ 2p (diesel)',
                'years' => '1998 a 2004'
            ],
            
            [
                'id' => 3925,
                'brand_id' => 114,
                'fipe_code' => '513137-5',
                'model' => 'P-94 GA 270 4x2 NZ 2p (diesel)',
                'years' => '2006 a 2007'
            ],
            
            [
                'id' => 3555,
                'brand_id' => 114,
                'fipe_code' => '513117-0',
                'model' => 'P-94 GA 300 4x2 NZ 2p (diesel)',
                'years' => '2003 a 2004'
            ],
            
            [
                'id' => 3556,
                'brand_id' => 114,
                'fipe_code' => '513119-7',
                'model' => 'P-94 GA 310 4x2 NZ 2p (diesel)',
                'years' => '2004 a 2008'
            ],
            
            [
                'id' => 4254,
                'brand_id' => 114,
                'fipe_code' => '513141-3',
                'model' => 'P-94 GB 230 4x2 NZ 2p (diesel)',
                'years' => '2005 a 2007'
            ],
            
            [
                'id' => 3557,
                'brand_id' => 114,
                'fipe_code' => '513112-0',
                'model' => 'R-113 E 310 6x4 2p (diesel)',
                'years' => '1992 a 1998'
            ],
            
            [
                'id' => 3558,
                'brand_id' => 114,
                'fipe_code' => '513044-1',
                'model' => 'R-113 E 320 6x4 2p (diesel)',
                'years' => '1992 a 1998'
            ],
            
            [
                'id' => 3559,
                'brand_id' => 114,
                'fipe_code' => '513113-8',
                'model' => 'R-113 E 360 6x4 2p (diesel)',
                'years' => '1992 a 1998'
            ],
            
            [
                'id' => 3560,
                'brand_id' => 114,
                'fipe_code' => '513045-0',
                'model' => 'R-113 H 320 4x2 2p (diesel)',
                'years' => '1992 a 1998'
            ],
            
            [
                'id' => 3561,
                'brand_id' => 114,
                'fipe_code' => '513046-8',
                'model' => 'R-113 H 360 4x2 2p (diesel)',
                'years' => '1992 a 1998'
            ],
            
            [
                'id' => 3562,
                'brand_id' => 114,
                'fipe_code' => '513109-0',
                'model' => 'R-113 H 360 4x2 Top-Line 2p (diesel)',
                'years' => '1992 a 1998'
            ],
            
            [
                'id' => 3563,
                'brand_id' => 114,
                'fipe_code' => '513047-6',
                'model' => 'R-114 GA 320 4x2 NZ 2p (diesel)',
                'years' => '1997 a 1999'
            ],
            
            [
                'id' => 3564,
                'brand_id' => 114,
                'fipe_code' => '513048-4',
                'model' => 'R-114 GA 330 4x2 NZ 2p (diesel)',
                'years' => '1999 a 2006'
            ],
            
            [
                'id' => 3565,
                'brand_id' => 114,
                'fipe_code' => '513049-2',
                'model' => 'R-114 GA 360 4x2 NZ 2p (diesel)',
                'years' => '1997 a 1999'
            ],
            
            [
                'id' => 3566,
                'brand_id' => 114,
                'fipe_code' => '513131-6',
                'model' => 'R-114 GA 380 4x2 NZ 2p (diesel)',
                'years' => '2005 a 2008'
            ],
            
            [
                'id' => 3567,
                'brand_id' => 114,
                'fipe_code' => '513132-4',
                'model' => 'R-114 GA 380 6x2 NZ/4x2 3-Eixos 2p (die)',
                'years' => '2005 a 2008'
            ],
            
            [
                'id' => 3568,
                'brand_id' => 114,
                'fipe_code' => '513050-6',
                'model' => 'R-114 GB 320 4x2 NZ 2p (diesel)',
                'years' => '1997 a 1999'
            ],
            
            [
                'id' => 3569,
                'brand_id' => 114,
                'fipe_code' => '513084-0',
                'model' => 'R-114 GB 330 4x2 2p (diesel)',
                'years' => '2000 a 2006'
            ],
            
            [
                'id' => 3570,
                'brand_id' => 114,
                'fipe_code' => '513051-4',
                'model' => 'R-114 GB 360 4x2 NZ 2p (diesel)',
                'years' => '1999 a 1999'
            ],
            
            [
                'id' => 4269,
                'brand_id' => 114,
                'fipe_code' => '513142-1',
                'model' => 'R-114 LA 380 4x2 NA 2p (diesel)',
                'years' => '2007 a 2007'
            ],
            
            [
                'id' => 3571,
                'brand_id' => 114,
                'fipe_code' => '513133-2',
                'model' => 'R-114 LA 380 6x2 NA 2p (diesel)',
                'years' => '2005 a 2008'
            ],
            
            [
                'id' => 3572,
                'brand_id' => 114,
                'fipe_code' => '513052-2',
                'model' => 'R-124 GA 360 4x2 NZ 2p (diesel) / Millen',
                'years' => '1997 a 2006'
            ],
            
            [
                'id' => 3926,
                'brand_id' => 114,
                'fipe_code' => '513136-7',
                'model' => 'R-124 GA 360 6x2 NZ/4x2 3-Eixos 2p (die)',
                'years' => '2006 a 2006'
            ],
            
            [
                'id' => 3573,
                'brand_id' => 114,
                'fipe_code' => '513053-0',
                'model' => 'R-124 GA 360 6x4 NZ 2p (diesel)',
                'years' => '1997 a 2006'
            ],
            
            [
                'id' => 3574,
                'brand_id' => 114,
                'fipe_code' => '513087-5',
                'model' => 'R-124 GA 400 4x2 NZ 2p (diesel)',
                'years' => '2001 a 2006'
            ],
            
            [
                'id' => 3575,
                'brand_id' => 114,
                'fipe_code' => '513107-3',
                'model' => 'R-124 GA 400 6x4 NZ 2p (diesel)',
                'years' => '2002 a 2006'
            ],
            
            [
                'id' => 3576,
                'brand_id' => 114,
                'fipe_code' => '513054-9',
                'model' => 'R-124 GA 420 4x2 NZ 2p (diesel) / Millen',
                'years' => '1997 a 2008'
            ],
            
            [
                'id' => 3927,
                'brand_id' => 114,
                'fipe_code' => '513135-9',
                'model' => 'R-124 GA 420 6x2 NZ/4x2 3-Eixos 2p (die)',
                'years' => '2002 a 2008'
            ],
            
            [
                'id' => 3577,
                'brand_id' => 114,
                'fipe_code' => '513055-7',
                'model' => 'R-124 GA 420 6x4 NZ 2p (diesel)',
                'years' => '1997 a 2008'
            ],
            
            [
                'id' => 4449,
                'brand_id' => 114,
                'fipe_code' => '513143-0',
                'model' => 'R-124 GA 470 6x2 NZ 2p (diesel)',
                'years' => '2007 a 2007'
            ],
            
            [
                'id' => 3578,
                'brand_id' => 114,
                'fipe_code' => '513056-5',
                'model' => 'R-124 GB 360 4x2 NZ 2p (diesel)',
                'years' => '1997 a 2006'
            ],
            
            [
                'id' => 3579,
                'brand_id' => 114,
                'fipe_code' => '513116-2',
                'model' => 'R-124 GB 360 6x4 NZ 2p (diesel)',
                'years' => '2003 a 2004'
            ],
            
            [
                'id' => 3580,
                'brand_id' => 114,
                'fipe_code' => '513096-4',
                'model' => 'R-124 GB 400 4x2 NZ 2p (diesel)',
                'years' => '2001 a 2006'
            ],
            
            [
                'id' => 3581,
                'brand_id' => 114,
                'fipe_code' => '513057-3',
                'model' => 'R-124 GB 420 4x2 NZ 2p (diesel)',
                'years' => '1997 a 2007'
            ],
            
            [
                'id' => 3582,
                'brand_id' => 114,
                'fipe_code' => '513058-1',
                'model' => 'R-124 LA 360 4x2 NA 2p (diesel)',
                'years' => '1997 a 2006'
            ],
            
            [
                'id' => 3583,
                'brand_id' => 114,
                'fipe_code' => '513059-0',
                'model' => 'R-124 LA 360 6x2 NA 2p (diesel)',
                'years' => '1997 a 2006'
            ],
            
            [
                'id' => 3584,
                'brand_id' => 114,
                'fipe_code' => '513089-1',
                'model' => 'R-124 LA 400 4x2 NA 2p (diesel)',
                'years' => '2001 a 2006'
            ],
            
            [
                'id' => 3585,
                'brand_id' => 114,
                'fipe_code' => '513090-5',
                'model' => 'R-124 LA 400 6x2 NA 2p (diesel)',
                'years' => '2001 a 2006'
            ],
            
            [
                'id' => 3586,
                'brand_id' => 114,
                'fipe_code' => '513060-3',
                'model' => 'R-124 LA 420 4x2 NA 2p (diesel)',
                'years' => '1997 a 2008'
            ],
            
            [
                'id' => 3587,
                'brand_id' => 114,
                'fipe_code' => '513061-1',
                'model' => 'R-124 LA 420 6x2 NA 2p (diesel)',
                'years' => '1997 a 2008'
            ],
            
            [
                'id' => 3588,
                'brand_id' => 114,
                'fipe_code' => '513120-0',
                'model' => 'R-124 LA 420 6x4 NA 2p (diesel)',
                'years' => '2004 a 2004'
            ],
            
            [
                'id' => 3589,
                'brand_id' => 114,
                'fipe_code' => '513062-0',
                'model' => 'R-143 E 450 6x4 2p (diesel)',
                'years' => '1991 a 1996'
            ],
            
            [
                'id' => 3590,
                'brand_id' => 114,
                'fipe_code' => '513063-8',
                'model' => 'R-143 H 450 4x2 2p (diesel)',
                'years' => '1992 a 1996'
            ],
            
            [
                'id' => 3591,
                'brand_id' => 114,
                'fipe_code' => '513106-5',
                'model' => 'R-164 CA 480 8x4 NZ 2p (diesel)',
                'years' => '2002 a 2007'
            ],
            
            [
                'id' => 3592,
                'brand_id' => 114,
                'fipe_code' => '513102-2',
                'model' => 'R-164 GA 480 4x2 NZ 2p (diesel)',
                'years' => '2002 a 2007'
            ],
            
            [
                'id' => 3593,
                'brand_id' => 114,
                'fipe_code' => '513103-0',
                'model' => 'R-164 GA 480 6x4 NZ 2p (diesel)',
                'years' => '2002 a 2008'
            ],
            
            [
                'id' => 3594,
                'brand_id' => 114,
                'fipe_code' => '513130-8',
                'model' => 'R-164 LA 480 6x2 NA 2p (diesel)',
                'years' => '2005 a 2007'
            ],
            
            [
                'id' => 5206,
                'brand_id' => 114,
                'fipe_code' => '513190-1',
                'model' => 'R-380 A 4x2 2p (diesel)',
                'years' => '2010 a 2012'
            ],
            
            [
                'id' => 5207,
                'brand_id' => 114,
                'fipe_code' => '513191-0',
                'model' => 'R-380 A 4x2 3-Eixos/A 6x2 2p (diesel)',
                'years' => '2010 a 2012'
            ],
            
            [
                'id' => 5944,
                'brand_id' => 114,
                'fipe_code' => '513251-7',
                'model' => 'R-400 A 4x2 2p (diesel) (E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 5919,
                'brand_id' => 114,
                'fipe_code' => '513248-7',
                'model' => 'R-400 A 4x2 3-Eixos/A 6x2 2p (dies.)(E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 6042,
                'brand_id' => 114,
                'fipe_code' => '513254-1',
                'model' => 'R-400 A 4x2 HIGHLINE 2p (diesel)(E5)',
                'years' => '2012 a 2018'
            ],
            
            [
                'id' => 6199,
                'brand_id' => 114,
                'fipe_code' => '513255-0',
                'model' => 'R-400 A 6x2 HIGHLINE 2p (diesel)(E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 8618,
                'brand_id' => 114,
                'fipe_code' => '513283-5',
                'model' => 'R-410 A 4x2 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 9752,
                'brand_id' => 114,
                'fipe_code' => '513347-5',
                'model' => 'R-410 A 4x2 2p CNG (GNV)(E5)',
                'years' => '2020 a 2022'
            ],
            
            [
                'id' => 10331,
                'brand_id' => 114,
                'fipe_code' => '513430-7',
                'model' => 'R-410 A 4x2 CNG 2p (GNV)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10332,
                'brand_id' => 114,
                'fipe_code' => '513431-5',
                'model' => 'R-410 A 4x2 LNG 2p (GNV)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 8619,
                'brand_id' => 114,
                'fipe_code' => '513286-0',
                'model' => 'R-410 A 6x2 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 9134,
                'brand_id' => 114,
                'fipe_code' => '513332-7',
                'model' => 'R-410 A 6x2 CNG 2p (GNV)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 10390,
                'brand_id' => 114,
                'fipe_code' => '513432-3',
                'model' => 'R-410 A 6x2 CNG 2p (GNV)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10333,
                'brand_id' => 114,
                'fipe_code' => '513433-1',
                'model' => 'R-410 A 6x2 LNG 2p (GNV)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 5290,
                'brand_id' => 114,
                'fipe_code' => '513193-6',
                'model' => 'R-420 A 4x2 2p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 10334,
                'brand_id' => 114,
                'fipe_code' => '513373-4',
                'model' => 'R-420 A 4x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5231,
                'brand_id' => 114,
                'fipe_code' => '513192-8',
                'model' => 'R-420 A 4x2 3-Eixos/ A 6x2 2p (diesel)',
                'years' => '2010 a 2012'
            ],
            
            [
                'id' => 4615,
                'brand_id' => 114,
                'fipe_code' => '513170-7',
                'model' => 'R-420 A 4x2 HIG. 3-Eixos/A 6x2 2p (die.)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 5323,
                'brand_id' => 114,
                'fipe_code' => '513195-2',
                'model' => 'R-420 A 4x2 HIGHLINE 2p (diesel)',
                'years' => '2010 a 2011'
            ],
            
            [
                'id' => 10335,
                'brand_id' => 114,
                'fipe_code' => '513376-9',
                'model' => 'R-420 A 6x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5324,
                'brand_id' => 114,
                'fipe_code' => '513194-4',
                'model' => 'R-420 A 6x4 2p (diesel)',
                'years' => '2010 a 2012'
            ],
            
            [
                'id' => 4616,
                'brand_id' => 114,
                'fipe_code' => '513171-5',
                'model' => 'R-420 A 6x4 HIGHLINE 2p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 4488,
                'brand_id' => 114,
                'fipe_code' => '513147-2',
                'model' => 'R-420 LA 4x2 HZ HIG. 3-Eixos 2p (diesel)',
                'years' => '2008 a 2008'
            ],
            
            [
                'id' => 4489,
                'brand_id' => 114,
                'fipe_code' => '513144-8',
                'model' => 'R-420 LA 6x2 NA HIGHLINE 2p (diesel)',
                'years' => '2008 a 2008'
            ],
            
            [
                'id' => 4490,
                'brand_id' => 114,
                'fipe_code' => '513146-4',
                'model' => 'R-420 LA 6x4 HZ HIGHLINE 2p (diesel)',
                'years' => '2008 a 2008'
            ],
            
            [
                'id' => 4491,
                'brand_id' => 114,
                'fipe_code' => '513145-6',
                'model' => 'R-420 LA 6x4 NA HIGHLINE 2p (diesel)',
                'years' => '2008 a 2008'
            ],
            
            [
                'id' => 5325,
                'brand_id' => 114,
                'fipe_code' => '513197-9',
                'model' => 'R-440 A 4x2 2p (diesel)',
                'years' => '2010 a 2011'
            ],
            
            [
                'id' => 5824,
                'brand_id' => 114,
                'fipe_code' => '513219-3',
                'model' => 'R-440 A 4x2 2p (diesel) (E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 5326,
                'brand_id' => 114,
                'fipe_code' => '513198-7',
                'model' => 'R-440 A 4x2 3-Eixos/ A 6x2 2p (diesel)',
                'years' => '2010 a 2011'
            ],
            
            [
                'id' => 5825,
                'brand_id' => 114,
                'fipe_code' => '513220-7',
                'model' => 'R-440 A 4x2 3-Eixos/A 6x2 2p(dies.) (E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 5803,
                'brand_id' => 114,
                'fipe_code' => '513246-0',
                'model' => 'R-440 A 4x2 HIG. 3-E./A 6x2  (die.) (E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 4617,
                'brand_id' => 114,
                'fipe_code' => '513172-3',
                'model' => 'R-440 A 4x2 HIG. 3-Eixos/A 6x2 2p (die.)',
                'years' => '2008 a 2011'
            ],
            
            [
                'id' => 7115,
                'brand_id' => 114,
                'fipe_code' => '513261-4',
                'model' => 'R-440 A 4x2 HIGHLINE (diesel)(E5)',
                'years' => '2013 a 2018'
            ],
            
            [
                'id' => 5327,
                'brand_id' => 114,
                'fipe_code' => '513199-5',
                'model' => 'R-440 A 6x4 2p (diesel)',
                'years' => '2010 a 2011'
            ],
            
            [
                'id' => 5826,
                'brand_id' => 114,
                'fipe_code' => '513221-5',
                'model' => 'R-440 A 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 5819,
                'brand_id' => 114,
                'fipe_code' => '513226-6',
                'model' => 'R-440 A 6x4 HIGH./STRE. 2p (diesel) (E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 4618,
                'brand_id' => 114,
                'fipe_code' => '513173-1',
                'model' => 'R-440 A 6x4 HIGHLINE 2p (diesel)',
                'years' => '2008 a 2011'
            ],
            
            [
                'id' => 7416,
                'brand_id' => 114,
                'fipe_code' => '513264-9',
                'model' => 'R-440 A 8x2 2p (diesel)(E5)',
                'years' => '2014 a 2019'
            ],
            
            [
                'id' => 7417,
                'brand_id' => 114,
                'fipe_code' => '513263-0',
                'model' => 'R-440 A 8x2 HIGH.STREAM. 2p (diesel)(E5)',
                'years' => '2016 a 2019'
            ],
            
            [
                'id' => 8310,
                'brand_id' => 114,
                'fipe_code' => '513276-2',
                'model' => 'R-440 B 4x2 HIGHLINE 2p (diesel) (E5)',
                'years' => '2018 a 2018'
            ],
            
            [
                'id' => 4492,
                'brand_id' => 114,
                'fipe_code' => '513148-0',
                'model' => 'R-440 LA 4x2 HZ HIG. 3-Eixos 2p (diesel)',
                'years' => '2008 a 2008'
            ],
            
            [
                'id' => 8620,
                'brand_id' => 114,
                'fipe_code' => '513284-3',
                'model' => 'R-450 A 4x2 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 10746,
                'brand_id' => 114,
                'fipe_code' => '513441-2',
                'model' => 'R-450 A 4x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 8311,
                'brand_id' => 114,
                'fipe_code' => '513274-6',
                'model' => 'R-450 A 6x2 2p (diesel)(E5)',
                'years' => '2018 a 2023'
            ],
            
            [
                'id' => 10747,
                'brand_id' => 114,
                'fipe_code' => '513442-0',
                'model' => 'R-450 A 6x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 8269,
                'brand_id' => 114,
                'fipe_code' => '513272-0',
                'model' => 'R-450 A 6x2 HIGH./STRE. 2p (diesel)(E5)',
                'years' => '2018 a 2019'
            ],
            
            [
                'id' => 8312,
                'brand_id' => 114,
                'fipe_code' => '513273-8',
                'model' => 'R-450 A 6x4 2p (diesel)(E5)',
                'years' => '2018 a 2022'
            ],
            
            [
                'id' => 8313,
                'brand_id' => 114,
                'fipe_code' => '513275-4',
                'model' => 'R-450 A 6x4 HIGH./STRE. 2p (diesel)(E5)',
                'years' => '2018 a 2019'
            ],
            
            [
                'id' => 8683,
                'brand_id' => 114,
                'fipe_code' => '513303-3',
                'model' => 'R-450 A 8x2 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 8729,
                'brand_id' => 114,
                'fipe_code' => '513312-2',
                'model' => 'R-450 B 8x2 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 10336,
                'brand_id' => 114,
                'fipe_code' => '513382-3',
                'model' => 'R-460 A 4x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10337,
                'brand_id' => 114,
                'fipe_code' => '513386-6',
                'model' => 'R-460 A 6x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10338,
                'brand_id' => 114,
                'fipe_code' => '513390-4',
                'model' => 'R-460 A 6x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10983,
                'brand_id' => 114,
                'fipe_code' => '513445-5',
                'model' => 'R-460 B 8x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 5328,
                'brand_id' => 114,
                'fipe_code' => '513200-2',
                'model' => 'R-470 A 4x2 2p (diesel)',
                'years' => '2010 a 2011'
            ],
            
            [
                'id' => 5329,
                'brand_id' => 114,
                'fipe_code' => '513201-0',
                'model' => 'R-470 A 4x2 3-Eixos/ A 6x2 2p (diesel)',
                'years' => '2010 a 2011'
            ],
            
            [
                'id' => 4619,
                'brand_id' => 114,
                'fipe_code' => '513174-0',
                'model' => 'R-470 A 4x2 HIG. 3-Eixos/A 6x2 2p (die.)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 5330,
                'brand_id' => 114,
                'fipe_code' => '513196-0',
                'model' => 'R-470 A 4x2 HIGHLINE 2p (diesel)',
                'years' => '2009 a 2011'
            ],
            
            [
                'id' => 5331,
                'brand_id' => 114,
                'fipe_code' => '513202-9',
                'model' => 'R-470 A 6x4 2p (diesel)',
                'years' => '2010 a 2012'
            ],
            
            [
                'id' => 4620,
                'brand_id' => 114,
                'fipe_code' => '513175-8',
                'model' => 'R-470 A 6x4 HIGHLINE 2p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 4493,
                'brand_id' => 114,
                'fipe_code' => '513149-9',
                'model' => 'R-470 LA 4x2 HZ HIGHLINE 3-Eixos 2p (die',
                'years' => '2008 a 2008'
            ],
            
            [
                'id' => 4494,
                'brand_id' => 114,
                'fipe_code' => '513150-2',
                'model' => 'R-470 LA 6x2 NA HIGHLINE 2p (diesel)',
                'years' => '2008 a 2008'
            ],
            
            [
                'id' => 4495,
                'brand_id' => 114,
                'fipe_code' => '513151-0',
                'model' => 'R-470 LA 6x4 HZ HIGHLINE 2p (diesel)',
                'years' => '2008 a 2008'
            ],
            
            [
                'id' => 4496,
                'brand_id' => 114,
                'fipe_code' => '513152-9',
                'model' => 'R-470 LA 6x4 NA HIGHLINE  2p (diesel)',
                'years' => '2008 a 2008'
            ],
            
            [
                'id' => 5827,
                'brand_id' => 114,
                'fipe_code' => '513222-3',
                'model' => 'R-480 A 4x2 3-Eixos/A 6x2 2p(dies.) (E5)',
                'years' => '2012 a 2018'
            ],
            
            [
                'id' => 5797,
                'brand_id' => 114,
                'fipe_code' => '513247-9',
                'model' => 'R-480 A 4x2 HIG. 3-E./A 6x2 (dies.) (E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 5816,
                'brand_id' => 114,
                'fipe_code' => '513223-1',
                'model' => 'R-480 A 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 5820,
                'brand_id' => 114,
                'fipe_code' => '513227-4',
                'model' => 'R-480 A 6x4 HIGHLINE 2p (diesel) (E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 7443,
                'brand_id' => 114,
                'fipe_code' => '513266-5',
                'model' => 'R-480 A 8x2 2p (diesel)(E5)',
                'years' => '2016 a 2018'
            ],
            
            [
                'id' => 7444,
                'brand_id' => 114,
                'fipe_code' => '513265-7',
                'model' => 'R-480 A 8x2 HIGHLINE 2p (diesel)(E5)',
                'years' => '2016 a 2018'
            ],
            
            [
                'id' => 8730,
                'brand_id' => 114,
                'fipe_code' => '513314-9',
                'model' => 'R-500 A 4x2 2p (diesel)(E5)',
                'years' => '2019 a 2022'
            ],
            
            [
                'id' => 5332,
                'brand_id' => 114,
                'fipe_code' => '513203-7',
                'model' => 'R-500 A 4x2 3-Eixos/ A 6x2 2p (diesel)',
                'years' => '2010 a 2012'
            ],
            
            [
                'id' => 8621,
                'brand_id' => 114,
                'fipe_code' => '513287-8',
                'model' => 'R-500 A 6x2 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 10339,
                'brand_id' => 114,
                'fipe_code' => '513396-3',
                'model' => 'R-500 A 6x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 4621,
                'brand_id' => 114,
                'fipe_code' => '513176-6',
                'model' => 'R-500 A 6x2 HIGHLINE 2p (diesel)',
                'years' => '2008 a 2011'
            ],
            
            [
                'id' => 5333,
                'brand_id' => 114,
                'fipe_code' => '513204-5',
                'model' => 'R-500 A 6x4 2p (diesel)',
                'years' => '2010 a 2012'
            ],
            
            [
                'id' => 8622,
                'brand_id' => 114,
                'fipe_code' => '513288-6',
                'model' => 'R-500 A 6x4 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 10340,
                'brand_id' => 114,
                'fipe_code' => '513399-8',
                'model' => 'R-500 A 6x4 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 4622,
                'brand_id' => 114,
                'fipe_code' => '513177-4',
                'model' => 'R-500 A 6x4 HIGHLINE 2p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 10341,
                'brand_id' => 114,
                'fipe_code' => '513402-1',
                'model' => 'R-500 A 6x4 XT (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 8731,
                'brand_id' => 114,
                'fipe_code' => '513316-5',
                'model' => 'R-500 A 8x2 2p (diesel)(E5)',
                'years' => '2019 a 2022'
            ],
            
            [
                'id' => 9102,
                'brand_id' => 114,
                'fipe_code' => '513331-9',
                'model' => 'R-500 B 6X4 2p (diesel)(E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 10903,
                'brand_id' => 114,
                'fipe_code' => '513444-7',
                'model' => 'R-500 B 6x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 4497,
                'brand_id' => 114,
                'fipe_code' => '513154-5',
                'model' => 'R-500 LA 6x4 HZ HIGHLINE 2p (diesel)',
                'years' => '2008 a 2008'
            ],
            
            [
                'id' => 4498,
                'brand_id' => 114,
                'fipe_code' => '513153-7',
                'model' => 'R-500 LA 6x4 NA HIGHLINE 2p (diesel)',
                'years' => '2008 a 2008'
            ],
            
            [
                'id' => 8335,
                'brand_id' => 114,
                'fipe_code' => '513277-0',
                'model' => 'R-510 A 6x2 2p (diesel)(E5)',
                'years' => '2018 a 2019'
            ],
            
            [
                'id' => 8270,
                'brand_id' => 114,
                'fipe_code' => '513269-0',
                'model' => 'R-510 A 6x2 HIGHLINE 2p (diesel)(E5)',
                'years' => '2018 a 2019'
            ],
            
            [
                'id' => 8336,
                'brand_id' => 114,
                'fipe_code' => '513278-9',
                'model' => 'R-510 A 6x4 2p (diesel)(E5)',
                'years' => '2018 a 2019'
            ],
            
            [
                'id' => 8271,
                'brand_id' => 114,
                'fipe_code' => '513270-3',
                'model' => 'R-510 A 6x4 HIGHLINE 2p (diesel)(E5)',
                'years' => '2018 a 2019'
            ],
            
            [
                'id' => 9373,
                'brand_id' => 114,
                'fipe_code' => '513339-4',
                'model' => 'R-540 A 4x2 2p (diesel)(E5)',
                'years' => '2021 a 2021'
            ],
            
            [
                'id' => 8709,
                'brand_id' => 114,
                'fipe_code' => '513308-4',
                'model' => 'R-540 A 6x2 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 8623,
                'brand_id' => 114,
                'fipe_code' => '513289-4',
                'model' => 'R-540 A 6x4 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 10748,
                'brand_id' => 114,
                'fipe_code' => '513443-9',
                'model' => 'R-540 A 6x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 9627,
                'brand_id' => 114,
                'fipe_code' => '513343-2',
                'model' => 'R-540 B 8x2 (diesel)(E5)',
                'years' => '2022 a 2022'
            ],
            
            [
                'id' => 10342,
                'brand_id' => 114,
                'fipe_code' => '513407-2',
                'model' => 'R-560 A 6x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 7146,
                'brand_id' => 114,
                'fipe_code' => '513262-2',
                'model' => 'R-560 A 6x2 HIGHLINE (diesel)(E5)',
                'years' => '2015 a 2016'
            ],
            
            [
                'id' => 5817,
                'brand_id' => 114,
                'fipe_code' => '513224-0',
                'model' => 'R-560 A 6x4 (diesel) (E5)',
                'years' => '2012 a 2018'
            ],
            
            [
                'id' => 10343,
                'brand_id' => 114,
                'fipe_code' => '513410-2',
                'model' => 'R-560 A 6x4 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5821,
                'brand_id' => 114,
                'fipe_code' => '513228-2',
                'model' => 'R-560 A 6x4 HIGHLINE 2p (diesel) (E5)',
                'years' => '2012 a 2018'
            ],
            
            [
                'id' => 10344,
                'brand_id' => 114,
                'fipe_code' => '513413-7',
                'model' => 'R-560 A 6x4 XT (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10345,
                'brand_id' => 114,
                'fipe_code' => '513435-8',
                'model' => 'R-560 B 8x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 5525,
                'brand_id' => 114,
                'fipe_code' => '513208-8',
                'model' => 'R-580 A 4x2 3-Eixos/ A 6x2 2p (diesel)',
                'years' => '2011 a 2011'
            ],
            
            [
                'id' => 5526,
                'brand_id' => 114,
                'fipe_code' => '513207-0',
                'model' => 'R-580 A 6x4 2p (diesel)',
                'years' => '2011 a 2012'
            ],
            
            [
                'id' => 8272,
                'brand_id' => 114,
                'fipe_code' => '513271-1',
                'model' => 'R-620 A 4x2 HIGHLINE 2p (diesel)(E5)',
                'years' => '2018 a 2018'
            ],
            
            [
                'id' => 7082,
                'brand_id' => 114,
                'fipe_code' => '513260-6',
                'model' => 'R-620 A 6x2 2p (diesel)(E5)',
                'years' => '2015 a 2023'
            ],
            
            [
                'id' => 8273,
                'brand_id' => 114,
                'fipe_code' => '513268-1',
                'model' => 'R-620 A 6x2 HIGHLINE 2p (diesel)(E5)',
                'years' => '2018 a 2018'
            ],
            
            [
                'id' => 5818,
                'brand_id' => 114,
                'fipe_code' => '513225-8',
                'model' => 'R-620 A 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 5810,
                'brand_id' => 114,
                'fipe_code' => '513229-0',
                'model' => 'R-620 A 6x4 HIGHLINE 2p (diesel) (E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 10346,
                'brand_id' => 114,
                'fipe_code' => '513416-1',
                'model' => 'R-660 A 6x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10347,
                'brand_id' => 114,
                'fipe_code' => '513418-8',
                'model' => 'R-660 A 6x4 XT (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10348,
                'brand_id' => 114,
                'fipe_code' => '513419-6',
                'model' => 'R-660 B 8x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10349,
                'brand_id' => 114,
                'fipe_code' => '513420-0',
                'model' => 'R-660 B 8x4 XT (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10350,
                'brand_id' => 114,
                'fipe_code' => '513421-8',
                'model' => 'R-770 A 6x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10351,
                'brand_id' => 114,
                'fipe_code' => '513423-4',
                'model' => 'R-770 A 6x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 8981,
                'brand_id' => 114,
                'fipe_code' => '513326-2',
                'model' => 'S-450 A 4x2 2p (diesel)(E5)',
                'years' => '2020 a 2022'
            ],
            
            [
                'id' => 8625,
                'brand_id' => 114,
                'fipe_code' => '513301-7',
                'model' => 'S-450 A 6x2 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 8684,
                'brand_id' => 114,
                'fipe_code' => '513305-0',
                'model' => 'S-450 A 6x4 2p (diesel)(E5)',
                'years' => '2019 a 2022'
            ],
            
            [
                'id' => 10190,
                'brand_id' => 114,
                'fipe_code' => '513350-5',
                'model' => 'S-450 B 6x2 2p (diesel)(E5)',
                'years' => '2023 a 2023'
            ],
            
            [
                'id' => 10352,
                'brand_id' => 114,
                'fipe_code' => '513383-1',
                'model' => 'S-460 A 4x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10353,
                'brand_id' => 114,
                'fipe_code' => '513387-4',
                'model' => 'S-460 A 6x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 8982,
                'brand_id' => 114,
                'fipe_code' => '513327-0',
                'model' => 'S-500 A 4x2 2p (diesel) (E5)',
                'years' => '2019 a 2022'
            ],
            
            [
                'id' => 8732,
                'brand_id' => 114,
                'fipe_code' => '513311-4',
                'model' => 'S-500 A 6x2 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 10354,
                'brand_id' => 114,
                'fipe_code' => '513397-1',
                'model' => 'S-500 A 6x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 8685,
                'brand_id' => 114,
                'fipe_code' => '513306-8',
                'model' => 'S-500 A 6x4 2p (diesel)(E5)',
                'years' => '2019 a 2022'
            ],
            
            [
                'id' => 10355,
                'brand_id' => 114,
                'fipe_code' => '513401-3',
                'model' => 'S-500 A 6x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 8813,
                'brand_id' => 114,
                'fipe_code' => '513322-0',
                'model' => 'S-500 A 8x2 2p (diesel)(E5)',
                'years' => '2019 a 2022'
            ],
            
            [
                'id' => 8686,
                'brand_id' => 114,
                'fipe_code' => '513304-1',
                'model' => 'S-540 A 4x2 2p (Diesel)(E5)',
                'years' => '2019 a 2022'
            ],
            
            [
                'id' => 8710,
                'brand_id' => 114,
                'fipe_code' => '513310-6',
                'model' => 'S-540 A 6x2 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 8624,
                'brand_id' => 114,
                'fipe_code' => '513290-8',
                'model' => 'S-540 A 6x4 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 10356,
                'brand_id' => 114,
                'fipe_code' => '513408-0',
                'model' => 'S-560 A 6x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10357,
                'brand_id' => 114,
                'fipe_code' => '513411-0',
                'model' => 'S-560 A 6x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 8765,
                'brand_id' => 114,
                'fipe_code' => '513319-0',
                'model' => 'S-620 A 6x2 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 8687,
                'brand_id' => 114,
                'fipe_code' => '513307-6',
                'model' => 'S-620 A 6x4 2p (diesel)(E5)',
                'years' => '2019 a 2022'
            ],
            
            [
                'id' => 10358,
                'brand_id' => 114,
                'fipe_code' => '513415-3',
                'model' => 'S-660 A 6x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10359,
                'brand_id' => 114,
                'fipe_code' => '513417-0',
                'model' => 'S-660 A 6x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10360,
                'brand_id' => 114,
                'fipe_code' => '513422-6',
                'model' => 'S-770 A 6x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10361,
                'brand_id' => 114,
                'fipe_code' => '513424-2',
                'model' => 'S-770 A 6x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 3595,
                'brand_id' => 114,
                'fipe_code' => '513115-4',
                'model' => 'T-112 MA 320 4x2 2p (diesel)',
                'years' => '1981 a 1985'
            ],
            
            [
                'id' => 3596,
                'brand_id' => 114,
                'fipe_code' => '513114-6',
                'model' => 'T-113 E 310 6x4 2p (diesel)',
                'years' => '1991 a 1998'
            ],
            
            [
                'id' => 3597,
                'brand_id' => 114,
                'fipe_code' => '513064-6',
                'model' => 'T-113 E 320 6x4 2p (diesel)',
                'years' => '1991 a 1998'
            ],
            
            [
                'id' => 3598,
                'brand_id' => 114,
                'fipe_code' => '513065-4',
                'model' => 'T-113 E 360 6x4 2p (diesel)',
                'years' => '1991 a 1998'
            ],
            
            [
                'id' => 3599,
                'brand_id' => 114,
                'fipe_code' => '513066-2',
                'model' => 'T-113 H 310 4x2 2p (diesel)',
                'years' => '1991 a 1994'
            ],
            
            [
                'id' => 3600,
                'brand_id' => 114,
                'fipe_code' => '513067-0',
                'model' => 'T-113 H 320 4x2 2p (diesel)',
                'years' => '1991 a 1998'
            ],
            
            [
                'id' => 3601,
                'brand_id' => 114,
                'fipe_code' => '513068-9',
                'model' => 'T-113 H 320 4x2 Top-Line 2p (diesel)',
                'years' => '1993 a 1998'
            ],
            
            [
                'id' => 3602,
                'brand_id' => 114,
                'fipe_code' => '513118-9',
                'model' => 'T-113 H 320 6x2 2p (diesel)',
                'years' => '1991 a 1998'
            ],
            
            [
                'id' => 3603,
                'brand_id' => 114,
                'fipe_code' => '513069-7',
                'model' => 'T-113 H 360 4x2 2p (diesel)',
                'years' => '1991 a 1998'
            ],
            
            [
                'id' => 3605,
                'brand_id' => 114,
                'fipe_code' => '513104-9',
                'model' => 'T-113 H 360 4x2 Top-L. 3-Eixos 2p (die.)',
                'years' => '1992 a 1998'
            ],
            
            [
                'id' => 3604,
                'brand_id' => 114,
                'fipe_code' => '513070-0',
                'model' => 'T-113 H 360 4x2 Top-Line 2p (diesel)',
                'years' => '1992 a 1998'
            ],
            
            [
                'id' => 3606,
                'brand_id' => 114,
                'fipe_code' => '513111-1',
                'model' => 'T-113 H 360 6x2 2p (diesel)',
                'years' => '1991 a 1998'
            ],
            
            [
                'id' => 3607,
                'brand_id' => 114,
                'fipe_code' => '513071-9',
                'model' => 'T-114 GA 320 4x2 NZ 2p (diesel)',
                'years' => '1998 a 2000'
            ],
            
            [
                'id' => 3608,
                'brand_id' => 114,
                'fipe_code' => '513072-7',
                'model' => 'T-114 GA 330 4x2 NZ 2p (diesel)',
                'years' => '1999 a 2006'
            ],
            
            [
                'id' => 3609,
                'brand_id' => 114,
                'fipe_code' => '513073-5',
                'model' => 'T-114 GA 360 4x2 NZ 2p (diesel)',
                'years' => '1998 a 1999'
            ],
            
            [
                'id' => 3610,
                'brand_id' => 114,
                'fipe_code' => '513074-3',
                'model' => 'T-114 GB 320 4x2 NZ 2p (diesel)',
                'years' => '1998 a 1999'
            ],
            
            [
                'id' => 3611,
                'brand_id' => 114,
                'fipe_code' => '513085-9',
                'model' => 'T-114 GB 330 4x2 NZ 2p (diesel)',
                'years' => '2000 a 2006'
            ],
            
            [
                'id' => 3612,
                'brand_id' => 114,
                'fipe_code' => '513075-1',
                'model' => 'T-114 GB 360 4x2 NZ 2p (diesel)',
                'years' => '1998 a 2006'
            ],
            
            [
                'id' => 3613,
                'brand_id' => 114,
                'fipe_code' => '513076-0',
                'model' => 'T-124 GA 360 4x2 NZ 2p (diesel) / Millen',
                'years' => '1997 a 2006'
            ],
            
            [
                'id' => 5574,
                'brand_id' => 114,
                'fipe_code' => '513209-6',
                'model' => 'T-124 GA 360 6x2 NZ 2p (diesel) / Millen',
                'years' => '1997 a 2006'
            ],
            
            [
                'id' => 3614,
                'brand_id' => 114,
                'fipe_code' => '513077-8',
                'model' => 'T-124 GA 360 6x4 NZ 2p (diesel)',
                'years' => '1997 a 2006'
            ],
            
            [
                'id' => 3615,
                'brand_id' => 114,
                'fipe_code' => '513091-3',
                'model' => 'T-124 GA 400 4x2 NZ 2p (diesel)',
                'years' => '2001 a 2006'
            ],
            
            [
                'id' => 3616,
                'brand_id' => 114,
                'fipe_code' => '513105-7',
                'model' => 'T-124 GA 400 6x2 NZ 2p (diesel)',
                'years' => '2001 a 2004'
            ],
            
            [
                'id' => 3617,
                'brand_id' => 114,
                'fipe_code' => '513127-8',
                'model' => 'T-124 GA 400 6x4 NZ 2p (diesel)',
                'years' => '2005 a 2006'
            ],
            
            [
                'id' => 3618,
                'brand_id' => 114,
                'fipe_code' => '513078-6',
                'model' => 'T-124 GA 420 4x2 NZ 2p (diesel) / Millen',
                'years' => '1997 a 2006'
            ],
            
            [
                'id' => 5575,
                'brand_id' => 114,
                'fipe_code' => '513210-0',
                'model' => 'T-124 GA 420 6x2 NZ 2p (diesel) / Millen',
                'years' => '1997 a 2006'
            ],
            
            [
                'id' => 3619,
                'brand_id' => 114,
                'fipe_code' => '513079-4',
                'model' => 'T-124 GA 420 6x4 NZ 2p (diesel)',
                'years' => '1997 a 2006'
            ],
            
            [
                'id' => 3620,
                'brand_id' => 114,
                'fipe_code' => '513128-6',
                'model' => 'T-124 GB 400 4x2 NZ 2p (diesel)',
                'years' => '2005 a 2006'
            ],
            
            [
                'id' => 3621,
                'brand_id' => 114,
                'fipe_code' => '513129-4',
                'model' => 'T-124 GB 420 4x2 NZ 2p (diesel)',
                'years' => '2005 a 2006'
            ],
            
            [
                'id' => 3622,
                'brand_id' => 114,
                'fipe_code' => '513080-8',
                'model' => 'T-124 LA 360 4x2 NA 2p (diesel)',
                'years' => '1997 a 2006'
            ],
            
            [
                'id' => 3623,
                'brand_id' => 114,
                'fipe_code' => '513098-0',
                'model' => 'T-124 LA 360 6x2 NA 2p (diesel)',
                'years' => '2001 a 2006'
            ],
            
            [
                'id' => 3624,
                'brand_id' => 114,
                'fipe_code' => '513093-0',
                'model' => 'T-124 LA 400 4x2 NA 2p (diesel)',
                'years' => '2001 a 2006'
            ],
            
            [
                'id' => 3625,
                'brand_id' => 114,
                'fipe_code' => '513088-3',
                'model' => 'T-124 LA 400 6x2 NA 2p (diesel)',
                'years' => '2001 a 2006'
            ],
            
            [
                'id' => 3626,
                'brand_id' => 114,
                'fipe_code' => '513081-6',
                'model' => 'T-124 LA 420 4x2 NA 2p (diesel)',
                'years' => '1997 a 2006'
            ],
            
            [
                'id' => 3627,
                'brand_id' => 114,
                'fipe_code' => '513086-7',
                'model' => 'T-124 LA 420 6x2 2p (diesel)',
                'years' => '2000 a 2006'
            ],
            
            [
                'id' => 3628,
                'brand_id' => 114,
                'fipe_code' => '513082-4',
                'model' => 'T-143 E 450 6x4 2p (diesel)',
                'years' => '1991 a 1996'
            ],
            
            [
                'id' => 3629,
                'brand_id' => 114,
                'fipe_code' => '513083-2',
                'model' => 'T-143 H 450 4x2 2p (diesel)',
                'years' => '1992 a 1996'
            ]
            ];
            
            $VOLKSWAGENModels = [
            [
                'id' => 6291,
                'brand_id' => 115,
                'fipe_code' => '515150-3',
                'model' => '10-160 E Delivery 2p (diesel)(E5)',
                'years' => '2013 a 2020'
            ],
            
            [
                'id' => 7301,
                'brand_id' => 115,
                'fipe_code' => '515158-9',
                'model' => '10-160 E Delivery Plus 6x2 (diesel)(E5)',
                'years' => '2015 a 2018'
            ],
            
            [
                'id' => 3630,
                'brand_id' => 115,
                'fipe_code' => '515001-9',
                'model' => '11-130 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3631,
                'brand_id' => 115,
                'fipe_code' => '515002-7',
                'model' => '11-130 3-Eixos 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3632,
                'brand_id' => 115,
                'fipe_code' => '515003-5',
                'model' => '11-140 2p (diesel)',
                'years' => '1981 a 1993'
            ],
            
            [
                'id' => 3633,
                'brand_id' => 115,
                'fipe_code' => '515004-3',
                'model' => '11-140 3-Eixos 2p (diesel)',
                'years' => '1981 a 1993'
            ],
            
            [
                'id' => 8146,
                'brand_id' => 115,
                'fipe_code' => '515166-0',
                'model' => '11-180 Delivery 2p (diesel)(E5)',
                'years' => '2018 a 2023'
            ],
            
            [
                'id' => 10243,
                'brand_id' => 115,
                'fipe_code' => '515186-4',
                'model' => '11-180 Delivery 4x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 9369,
                'brand_id' => 115,
                'fipe_code' => '515180-5',
                'model' => '11-180 Delivery 4x4 2p (diesel)(E5)',
                'years' => '2022 a 2023'
            ],
            
            [
                'id' => 11006,
                'brand_id' => 115,
                'fipe_code' => '515205-4',
                'model' => '11-180 Delivery 4x4 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10431,
                'brand_id' => 115,
                'fipe_code' => '515182-1',
                'model' => '11-410 e-Delivery 4X2 2p (Elétrico)',
                'years' => '2022 a Zero Km'
            ],
            
            [
                'id' => 3634,
                'brand_id' => 115,
                'fipe_code' => '515005-1',
                'model' => '12-140 2p (diesel)',
                'years' => '1981 a 1996'
            ],
            
            [
                'id' => 3635,
                'brand_id' => 115,
                'fipe_code' => '515006-0',
                'model' => '12-140 3-Eixos 2p (diesel)',
                'years' => '1981 a 1996'
            ],
            
            [
                'id' => 3636,
                'brand_id' => 115,
                'fipe_code' => '515007-8',
                'model' => '12-140 H 2p (diesel)',
                'years' => '1992 a 1998'
            ],
            
            [
                'id' => 3637,
                'brand_id' => 115,
                'fipe_code' => '515008-6',
                'model' => '12-140 Turbo 2p (diesel)',
                'years' => '1997 a 2000'
            ],
            
            [
                'id' => 3638,
                'brand_id' => 115,
                'fipe_code' => '515009-4',
                'model' => '12-140 Turbo 3-Eixos 2p (diesel)',
                'years' => '1997 a 2000'
            ],
            
            [
                'id' => 3639,
                'brand_id' => 115,
                'fipe_code' => '515010-8',
                'model' => '12-170 BT 2p (diesel)',
                'years' => '1997 a 2000'
            ],
            
            [
                'id' => 3640,
                'brand_id' => 115,
                'fipe_code' => '515011-6',
                'model' => '12-170 BT 3-Eixos 2p (diesel)',
                'years' => '1997 a 2000'
            ],
            
            [
                'id' => 3641,
                'brand_id' => 115,
                'fipe_code' => '515012-4',
                'model' => '12-180 2p (diesel)',
                'years' => '1999 a 2001'
            ],
            
            [
                'id' => 3642,
                'brand_id' => 115,
                'fipe_code' => '515013-2',
                'model' => '12-180 3-Eixos 2p (diesel)',
                'years' => '1999 a 2001'
            ],
            
            [
                'id' => 3643,
                'brand_id' => 115,
                'fipe_code' => '515014-0',
                'model' => '13-130 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3644,
                'brand_id' => 115,
                'fipe_code' => '515015-9',
                'model' => '13-130 3-Eixos 2p (diesel)',
                'years' => '1981 a 1989'
            ],
            
            [
                'id' => 3645,
                'brand_id' => 115,
                'fipe_code' => '515066-3',
                'model' => '13-150 2p (diesel)',
                'years' => '2000 a 2006'
            ],
            
            [
                'id' => 7683,
                'brand_id' => 115,
                'fipe_code' => '515162-7',
                'model' => '13-160 E Delivery 6x2 2p (diesel)(E5)',
                'years' => '2016 a 2019'
            ],
            
            [
                'id' => 3646,
                'brand_id' => 115,
                'fipe_code' => '515068-0',
                'model' => '13-170/13-170 E Worker 2p (diesel)',
                'years' => '2000 a 2006'
            ],
            
            [
                'id' => 3647,
                'brand_id' => 115,
                'fipe_code' => '515069-8',
                'model' => '13-170/13-170 E Worker 3-Eixos 2p (die.)',
                'years' => '2000 a 2006'
            ],
            
            [
                'id' => 8733,
                'brand_id' => 115,
                'fipe_code' => '515172-4',
                'model' => '13-180 Delivery 6x2 2p (diesel)(E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 10900,
                'brand_id' => 115,
                'fipe_code' => '515204-6',
                'model' => '13-180 Delivery 6x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 4197,
                'brand_id' => 115,
                'fipe_code' => '515114-7',
                'model' => '13-180 E Constellation 2p (diesel)',
                'years' => '2006 a 2013'
            ],
            
            [
                'id' => 4270,
                'brand_id' => 115,
                'fipe_code' => '515116-3',
                'model' => '13-180 E Constellation 3-Eixos 2p (die.)',
                'years' => '2006 a 2012'
            ],
            
            [
                'id' => 3648,
                'brand_id' => 115,
                'fipe_code' => '515070-1',
                'model' => '13-180/13-180 E Worker 2p (diesel)',
                'years' => '2000 a 2012'
            ],
            
            [
                'id' => 3649,
                'brand_id' => 115,
                'fipe_code' => '515071-0',
                'model' => '13-180/13-180 E Worker 3-Eixos 2p (die.)',
                'years' => '2000 a 2012'
            ],
            
            [
                'id' => 3650,
                'brand_id' => 115,
                'fipe_code' => '515084-1',
                'model' => '13-190 2p (diesel)',
                'years' => '2002 a 2005'
            ],
            
            [
                'id' => 3651,
                'brand_id' => 115,
                'fipe_code' => '515085-0',
                'model' => '13-190 3-Eixos 2p (diesel)',
                'years' => '2002 a 2005'
            ],
            
            [
                'id' => 5962,
                'brand_id' => 115,
                'fipe_code' => '515133-3',
                'model' => '13-190 E Constellation 2p (diesel)(E5)',
                'years' => '2012 a 2020'
            ],
            
            [
                'id' => 6256,
                'brand_id' => 115,
                'fipe_code' => '515149-0',
                'model' => '13-190 E Worker 2p (diesel)(E5)',
                'years' => '2013 a 2019'
            ],
            
            [
                'id' => 3652,
                'brand_id' => 115,
                'fipe_code' => '515016-7',
                'model' => '14-140 2p (diesel)',
                'years' => '1981 a 1991'
            ],
            
            [
                'id' => 3653,
                'brand_id' => 115,
                'fipe_code' => '515017-5',
                'model' => '14-140 3-Eixos 2p (diesel)',
                'years' => '1981 a 1991'
            ],
            
            [
                'id' => 3654,
                'brand_id' => 115,
                'fipe_code' => '515018-3',
                'model' => '14-150 2p (diesel)',
                'years' => '1991 a 1999'
            ],
            
            [
                'id' => 3655,
                'brand_id' => 115,
                'fipe_code' => '515019-1',
                'model' => '14-150 3-Eixos 2p (diesel)',
                'years' => '1991 a 1999'
            ],
            
            [
                'id' => 3656,
                'brand_id' => 115,
                'fipe_code' => '515020-5',
                'model' => '14-170 BT 2p (diesel)',
                'years' => '1997 a 2000'
            ],
            
            [
                'id' => 3657,
                'brand_id' => 115,
                'fipe_code' => '515021-3',
                'model' => '14-170 BT 3-Eixos 2p (diesel)',
                'years' => '1997 a 2000'
            ],
            
            [
                'id' => 3658,
                'brand_id' => 115,
                'fipe_code' => '515022-1',
                'model' => '14-180 2p (diesel)',
                'years' => '1999 a 2000'
            ],
            
            [
                'id' => 3659,
                'brand_id' => 115,
                'fipe_code' => '515023-0',
                'model' => '14-180 3-Eixos 2p (diesel)',
                'years' => '1999 a 2000'
            ],
            
            [
                'id' => 9035,
                'brand_id' => 115,
                'fipe_code' => '515175-9',
                'model' => '14-190 Constellation 2p (diesel)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 3660,
                'brand_id' => 115,
                'fipe_code' => '515024-8',
                'model' => '14-200 T 3-Eixos 2p (diesel)',
                'years' => '1991 a 1994'
            ],
            
            [
                'id' => 3661,
                'brand_id' => 115,
                'fipe_code' => '515025-6',
                'model' => '14-200 Turbo 2p (diesel)',
                'years' => '1991 a 1994'
            ],
            
            [
                'id' => 10244,
                'brand_id' => 115,
                'fipe_code' => '515187-2',
                'model' => '14-210 Constellation 4x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 3662,
                'brand_id' => 115,
                'fipe_code' => '515026-4',
                'model' => '14-210 T 3-Eixos 2p (diesel)',
                'years' => '1988 a 1991'
            ],
            
            [
                'id' => 3663,
                'brand_id' => 115,
                'fipe_code' => '515027-2',
                'model' => '14-210 Turbo 2p (diesel)',
                'years' => '1988 a 1991'
            ],
            
            [
                'id' => 3664,
                'brand_id' => 115,
                'fipe_code' => '515028-0',
                'model' => '14-220 2p (diesel)',
                'years' => '1991 a 1999'
            ],
            
            [
                'id' => 3665,
                'brand_id' => 115,
                'fipe_code' => '515029-9',
                'model' => '14-220 3-Eixos 2p (diesel)',
                'years' => '1991 a 1999'
            ],
            
            [
                'id' => 10088,
                'brand_id' => 115,
                'fipe_code' => '515183-0',
                'model' => '14-410 e-Delivery 6x2 2p (Elétrico)',
                'years' => '2022 a Zero Km'
            ],
            
            [
                'id' => 3666,
                'brand_id' => 115,
                'fipe_code' => '515072-8',
                'model' => '15-170/15-170 E Worker 2p (diesel)',
                'years' => '2000 a 2006'
            ],
            
            [
                'id' => 3667,
                'brand_id' => 115,
                'fipe_code' => '515073-6',
                'model' => '15-170/15-170 E Worker 3-Eixos 2p (die.)',
                'years' => '2000 a 2006'
            ],
            
            [
                'id' => 4198,
                'brand_id' => 115,
                'fipe_code' => '515115-5',
                'model' => '15-180 E Constellation 2p (diesel)',
                'years' => '2006 a 2012'
            ],
            
            [
                'id' => 3668,
                'brand_id' => 115,
                'fipe_code' => '515074-4',
                'model' => '15-180/15-180 E Worker 2p (diesel)',
                'years' => '2000 a 2013'
            ],
            
            [
                'id' => 3669,
                'brand_id' => 115,
                'fipe_code' => '515075-2',
                'model' => '15-180/15-180 E Worker 3-Eixos 2p (die.)',
                'years' => '2000 a 2012'
            ],
            
            [
                'id' => 3670,
                'brand_id' => 115,
                'fipe_code' => '515086-8',
                'model' => '15-190 2p (diesel)',
                'years' => '2002 a 2005'
            ],
            
            [
                'id' => 3671,
                'brand_id' => 115,
                'fipe_code' => '515087-6',
                'model' => '15-190 3-Eixos 2p (diesel)',
                'years' => '2002 a 2005'
            ],
            
            [
                'id' => 5953,
                'brand_id' => 115,
                'fipe_code' => '515134-1',
                'model' => '15-190 E Constellation 2p (diesel)(E5)',
                'years' => '2012 a 2020'
            ],
            
            [
                'id' => 6292,
                'brand_id' => 115,
                'fipe_code' => '515151-1',
                'model' => '15-190 E Worker 2p (diesel)(E5)',
                'years' => '2013 a 2019'
            ],
            
            [
                'id' => 3672,
                'brand_id' => 115,
                'fipe_code' => '515030-2',
                'model' => '16-170 2p (diesel)',
                'years' => '1991 a 1999'
            ],
            
            [
                'id' => 3673,
                'brand_id' => 115,
                'fipe_code' => '515031-0',
                'model' => '16-170 3-Eixos 2p (diesel)',
                'years' => '1991 a 1999'
            ],
            
            [
                'id' => 3674,
                'brand_id' => 115,
                'fipe_code' => '515032-9',
                'model' => '16-170 BT 2p (diesel)',
                'years' => '1994 a 1999'
            ],
            
            [
                'id' => 3675,
                'brand_id' => 115,
                'fipe_code' => '515033-7',
                'model' => '16-170 BT 3-Eixos 2p (diesel)',
                'years' => '1994 a 1999'
            ],
            
            [
                'id' => 3676,
                'brand_id' => 115,
                'fipe_code' => '515036-1',
                'model' => '16-200 2p (diesel)',
                'years' => '1998 a 2000'
            ],
            
            [
                'id' => 3677,
                'brand_id' => 115,
                'fipe_code' => '515037-0',
                'model' => '16-200 3-Eixos 2p (diesel)',
                'years' => '1998 a 2000'
            ],
            
            [
                'id' => 3678,
                'brand_id' => 115,
                'fipe_code' => '515038-8',
                'model' => '16-210 2p (diesel)',
                'years' => '1989 a 1991'
            ],
            
            [
                'id' => 3679,
                'brand_id' => 115,
                'fipe_code' => '515039-6',
                'model' => '16-210 3-Eixos 2p (diesel)',
                'years' => '1989 a 1991'
            ],
            
            [
                'id' => 3680,
                'brand_id' => 115,
                'fipe_code' => '515042-6',
                'model' => '16-210 H 2p (diesel)',
                'years' => '1989 a 1991'
            ],
            
            [
                'id' => 3992,
                'brand_id' => 115,
                'fipe_code' => '515113-9',
                'model' => '16-210 H 3-Eixos 2p (diesel)',
                'years' => '1989 a 1991'
            ],
            
            [
                'id' => 3681,
                'brand_id' => 115,
                'fipe_code' => '515043-4',
                'model' => '16-220 T 3-Eixos 2p (diesel)',
                'years' => '1991 a 2000'
            ],
            
            [
                'id' => 3682,
                'brand_id' => 115,
                'fipe_code' => '515044-2',
                'model' => '16-220 Turbo 2p (diesel)',
                'years' => '1991 a 2000'
            ],
            
            [
                'id' => 3683,
                'brand_id' => 115,
                'fipe_code' => '515045-0',
                'model' => '16-300 T 3-Eixos 2p (diesel)',
                'years' => '1996 a 2000'
            ],
            
            [
                'id' => 3684,
                'brand_id' => 115,
                'fipe_code' => '515046-9',
                'model' => '16-300 Turbo 2p (diesel)',
                'years' => '1996 a 2000'
            ],
            
            [
                'id' => 3945,
                'brand_id' => 115,
                'fipe_code' => '515108-2',
                'model' => '17-180 Worker 2p (diesel)',
                'years' => '2006 a 2012'
            ],
            
            [
                'id' => 3946,
                'brand_id' => 115,
                'fipe_code' => '515109-0',
                'model' => '17-180 Worker 3-Eixos 2p (diesel)',
                'years' => '2006 a 2012'
            ],
            
            [
                'id' => 5954,
                'brand_id' => 115,
                'fipe_code' => '515135-0',
                'model' => '17-190 E Constellation 2p (diesel)(E5)',
                'years' => '2012 a 2023'
            ],
            
            [
                'id' => 6257,
                'brand_id' => 115,
                'fipe_code' => '515148-1',
                'model' => '17-190 E Worker 2p (diesel)(E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 3685,
                'brand_id' => 115,
                'fipe_code' => '515076-0',
                'model' => '17-210 2p (diesel)',
                'years' => '2000 a 2006'
            ],
            
            [
                'id' => 3686,
                'brand_id' => 115,
                'fipe_code' => '515077-9',
                'model' => '17-210 3-Eixos 2p (diesel)',
                'years' => '2000 a 2011'
            ],
            
            [
                'id' => 10245,
                'brand_id' => 115,
                'fipe_code' => '515188-0',
                'model' => '17-210 Constellation 4x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 3687,
                'brand_id' => 115,
                'fipe_code' => '515078-7',
                'model' => '17-220/17-220 Worker 2p (diesel)',
                'years' => '2000 a 2012'
            ],
            
            [
                'id' => 3688,
                'brand_id' => 115,
                'fipe_code' => '515079-5',
                'model' => '17-220/17-220 Worker 3-Eixos 2p (diesel)',
                'years' => '2000 a 2012'
            ],
            
            [
                'id' => 7390,
                'brand_id' => 115,
                'fipe_code' => '515159-7',
                'model' => '17-230 E Constellation 2p (diesel)(E5)',
                'years' => '2015 a 2023'
            ],
            
            [
                'id' => 6863,
                'brand_id' => 115,
                'fipe_code' => '515156-2',
                'model' => '17-230 Worker 2p (diesel)(E5)',
                'years' => '2014 a 2019'
            ],
            
            [
                'id' => 5686,
                'brand_id' => 115,
                'fipe_code' => '515129-5',
                'model' => '17-250 E Constel. Tractor 4x2 2p (dies.)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 3947,
                'brand_id' => 115,
                'fipe_code' => '515111-2',
                'model' => '17-250 E Constellation 2p (diesel)',
                'years' => '2006 a 2012'
            ],
            
            [
                'id' => 3689,
                'brand_id' => 115,
                'fipe_code' => '515101-5',
                'model' => '17-250 E Worker 2p (diesel)',
                'years' => '2003 a 2011'
            ],
            
            [
                'id' => 3690,
                'brand_id' => 115,
                'fipe_code' => '515102-3',
                'model' => '17-250 E Worker 3-Eixos 2p (diesel)',
                'years' => '2003 a 2011'
            ],
            
            [
                'id' => 8766,
                'brand_id' => 115,
                'fipe_code' => '515173-2',
                'model' => '17-260 E Constel. 4x2 2p (diesel) (E5)',
                'years' => '2018 a 2023'
            ],
            
            [
                'id' => 5955,
                'brand_id' => 115,
                'fipe_code' => '515136-8',
                'model' => '17-280 E Constellation 2p (diesel)(E5)',
                'years' => '2012 a 2023'
            ],
            
            [
                'id' => 3691,
                'brand_id' => 115,
                'fipe_code' => '515080-9',
                'model' => '17-300 2p (diesel)',
                'years' => '2000 a 2002'
            ],
            
            [
                'id' => 3692,
                'brand_id' => 115,
                'fipe_code' => '515081-7',
                'model' => '17-300 3-Eixos 2p (diesel)',
                'years' => '2000 a 2002'
            ],
            
            [
                'id' => 3693,
                'brand_id' => 115,
                'fipe_code' => '515088-4',
                'model' => '17-310 2p (diesel)',
                'years' => '2002 a 2006'
            ],
            
            [
                'id' => 3694,
                'brand_id' => 115,
                'fipe_code' => '515089-2',
                'model' => '17-310 3-Eixos 2p (diesel)',
                'years' => '2002 a 2006'
            ],
            
            [
                'id' => 5123,
                'brand_id' => 115,
                'fipe_code' => '515124-4',
                'model' => '17-320 E Constellation 2p (diesel)',
                'years' => '2010 a 2012'
            ],
            
            [
                'id' => 5956,
                'brand_id' => 115,
                'fipe_code' => '515137-6',
                'model' => '17-330 E Constellation 2p (diesel)(E5)',
                'years' => '2012 a 2023'
            ],
            
            [
                'id' => 10246,
                'brand_id' => 115,
                'fipe_code' => '515189-9',
                'model' => '18-210 Constellation 4x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10247,
                'brand_id' => 115,
                'fipe_code' => '515190-2',
                'model' => '18-260 Constellation 4x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 3695,
                'brand_id' => 115,
                'fipe_code' => '515093-0',
                'model' => '18-310 2p (diesel)',
                'years' => '2002 a 2006'
            ],
            
            [
                'id' => 3696,
                'brand_id' => 115,
                'fipe_code' => '515094-9',
                'model' => '18-310 3-Eixos 2p (diesel)',
                'years' => '2002 a 2006'
            ],
            
            [
                'id' => 10248,
                'brand_id' => 115,
                'fipe_code' => '515191-0',
                'model' => '18-320 Constellation 4x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 3948,
                'brand_id' => 115,
                'fipe_code' => '515110-4',
                'model' => '19-320 E Constellation Titan Tractor 2p',
                'years' => '2006 a 2012'
            ],
            
            [
                'id' => 5957,
                'brand_id' => 115,
                'fipe_code' => '515138-4',
                'model' => '19-330 E Constellation 2p (diesel)(E5)',
                'years' => '2012 a 2023'
            ],
            
            [
                'id' => 7445,
                'brand_id' => 115,
                'fipe_code' => '515161-9',
                'model' => '19-360 Constellat. Tractor (diesel)(E5)',
                'years' => '2016 a 2023'
            ],
            
            [
                'id' => 4428,
                'brand_id' => 115,
                'fipe_code' => '515118-0',
                'model' => '19-370 E Constel. Tractor 2p (diesel)',
                'years' => '2007 a 2012'
            ],
            
            [
                'id' => 10848,
                'brand_id' => 115,
                'fipe_code' => '515202-0',
                'model' => '19-380 Constellation 4x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 5958,
                'brand_id' => 115,
                'fipe_code' => '515139-2',
                'model' => '19-390 E Constellation 2p (diesel)(E5)',
                'years' => '2012 a 2023'
            ],
            
            [
                'id' => 6709,
                'brand_id' => 115,
                'fipe_code' => '515154-6',
                'model' => '19-420 E Constellation 2p (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 3697,
                'brand_id' => 115,
                'fipe_code' => '515047-7',
                'model' => '22-140 3-Eixos 2p (diesel)',
                'years' => '1986 a 1990'
            ],
            
            [
                'id' => 3698,
                'brand_id' => 115,
                'fipe_code' => '515048-5',
                'model' => '22-160 3-Eixos 2p (diesel)',
                'years' => '1986 a 1989'
            ],
            
            [
                'id' => 3699,
                'brand_id' => 115,
                'fipe_code' => '515049-3',
                'model' => '22-210 H 3-Eixos 2p (diesel)',
                'years' => '1988 a 1988'
            ],
            
            [
                'id' => 3700,
                'brand_id' => 115,
                'fipe_code' => '515095-7',
                'model' => '23-210 6x2 3-Eixos 2p (diesel)',
                'years' => '2002 a 2006'
            ],
            
            [
                'id' => 3701,
                'brand_id' => 115,
                'fipe_code' => '515096-5',
                'model' => '23-220 6x2 3-Eixos 2p (diesel)',
                'years' => '2002 a 2006'
            ],
            
            [
                'id' => 7446,
                'brand_id' => 115,
                'fipe_code' => '515160-0',
                'model' => '23-230 Constellat. 3-Eixos (diesel)(E5)',
                'years' => '2015 a 2023'
            ],
            
            [
                'id' => 6864,
                'brand_id' => 115,
                'fipe_code' => '515157-0',
                'model' => '23-230 Worker 3-Eixos 2p (diesel)(E5)',
                'years' => '2014 a 2019'
            ],
            
            [
                'id' => 3702,
                'brand_id' => 115,
                'fipe_code' => '515099-0',
                'model' => '23-250 E 6x2 3-Eixos 2p (diesel)',
                'years' => '2004 a 2005'
            ],
            
            [
                'id' => 3703,
                'brand_id' => 115,
                'fipe_code' => '515097-3',
                'model' => '23-310 6x2 3-Eixos 2p (diesel)',
                'years' => '2002 a 2005'
            ],
            
            [
                'id' => 3704,
                'brand_id' => 115,
                'fipe_code' => '515050-7',
                'model' => '24-220/24-220 Worker T 3-Eixos 2p (die.)',
                'years' => '1990 a 2012'
            ],
            
            [
                'id' => 3949,
                'brand_id' => 115,
                'fipe_code' => '515112-0',
                'model' => '24-250 E Constellation 3-Eixos 2p (diese',
                'years' => '2006 a 2013'
            ],
            
            [
                'id' => 3705,
                'brand_id' => 115,
                'fipe_code' => '515051-5',
                'model' => '24-250/24-250 E T Work. 3-Eixos 2p(die.)',
                'years' => '1992 a 2012'
            ],
            
            [
                'id' => 8767,
                'brand_id' => 115,
                'fipe_code' => '515174-0',
                'model' => '24-260 E Constel. 6x2 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 5948,
                'brand_id' => 115,
                'fipe_code' => '515141-4',
                'model' => '24-280 E Constel. 6x2 2p (diesel)(E5)',
                'years' => '2012 a 2023'
            ],
            
            [
                'id' => 6509,
                'brand_id' => 115,
                'fipe_code' => '515152-0',
                'model' => '24-280 E Constel. 8x2 2p (diesel)(E5)',
                'years' => '2013 a 2019'
            ],
            
            [
                'id' => 5124,
                'brand_id' => 115,
                'fipe_code' => '515125-2',
                'model' => '24-320 E Constellation 6x2 2p (diesel)',
                'years' => '2010 a 2012'
            ],
            
            [
                'id' => 5947,
                'brand_id' => 115,
                'fipe_code' => '515140-6',
                'model' => '24-330 E Constel. 6x2 2p (diesel)(E5)',
                'years' => '2011 a 2023'
            ],
            
            [
                'id' => 4682,
                'brand_id' => 115,
                'fipe_code' => '515121-0',
                'model' => '25-320 E Constellation 6x2 Titan Tractor',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 7874,
                'brand_id' => 115,
                'fipe_code' => '515164-3',
                'model' => '25-360 Constel. 6x2 Tractor 2p (die)(E5)',
                'years' => '2016 a 2023'
            ],
            
            [
                'id' => 4429,
                'brand_id' => 115,
                'fipe_code' => '515119-8',
                'model' => '25-370 E Constel. 6x2 Tractor 2p (dies.)',
                'years' => '2007 a 2012'
            ],
            
            [
                'id' => 10849,
                'brand_id' => 115,
                'fipe_code' => '515203-8',
                'model' => '25-380 Constellation 6x2 2p (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 5949,
                'brand_id' => 115,
                'fipe_code' => '515142-2',
                'model' => '25-390 E Constel. 6x2 2p (diesel)(E5)',
                'years' => '2012 a 2020'
            ],
            
            [
                'id' => 6684,
                'brand_id' => 115,
                'fipe_code' => '515153-8',
                'model' => '25-420 Constellation 6x2 2p (Diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 9727,
                'brand_id' => 115,
                'fipe_code' => '515181-3',
                'model' => '25-460 Constel. 6x2 Tractor 2p (die)(E5)',
                'years' => '2022 a 2023'
            ],
            
            [
                'id' => 10249,
                'brand_id' => 115,
                'fipe_code' => '515192-9',
                'model' => '25.480 Constellation 6x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 3706,
                'brand_id' => 115,
                'fipe_code' => '515090-6',
                'model' => '26-220 6x4 3-Eixos 2p (diesel)',
                'years' => '2002 a 2012'
            ],
            
            [
                'id' => 3708,
                'brand_id' => 115,
                'fipe_code' => '515100-7',
                'model' => '26-260 8x4 4-Eixos 2p (diesel)',
                'years' => '2004 a 2004'
            ],
            
            [
                'id' => 10250,
                'brand_id' => 115,
                'fipe_code' => '515193-7',
                'model' => '26-260 Constellation 6x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10901,
                'brand_id' => 115,
                'fipe_code' => '515122-8',
                'model' => '26-260 E Constel. 6x4 2p (diesel)(E5)',
                'years' => '2008 a 2023'
            ],
            
            [
                'id' => 3707,
                'brand_id' => 115,
                'fipe_code' => '515091-4',
                'model' => '26-260/26-260 Work. 6x4 3-Eixos 2p(die.)',
                'years' => '2002 a 2012'
            ],
            
            [
                'id' => 5950,
                'brand_id' => 115,
                'fipe_code' => '515143-0',
                'model' => '26-280 E Constel. 6x4 2p (diesel)(E5)',
                'years' => '2012 a 2023'
            ],
            
            [
                'id' => 3709,
                'brand_id' => 115,
                'fipe_code' => '515082-5',
                'model' => '26-300 2p (diesel)',
                'years' => '2001 a 2001'
            ],
            
            [
                'id' => 3710,
                'brand_id' => 115,
                'fipe_code' => '515083-3',
                'model' => '26-300 3-Eixos 2p (diesel)',
                'years' => '2001 a 2001'
            ],
            
            [
                'id' => 3711,
                'brand_id' => 115,
                'fipe_code' => '515092-2',
                'model' => '26-310 6x4 3-Eixos 2p (diesel)',
                'years' => '2002 a 2005'
            ],
            
            [
                'id' => 10251,
                'brand_id' => 115,
                'fipe_code' => '515194-5',
                'model' => '26-320 Constellation 6x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5479,
                'brand_id' => 115,
                'fipe_code' => '515128-7',
                'model' => '26-370 E Constellation 6x4 2p (diesel)',
                'years' => '2011 a 2012'
            ],
            
            [
                'id' => 5951,
                'brand_id' => 115,
                'fipe_code' => '515144-9',
                'model' => '26-390 E Constel. 6x4 2p (diesel)(E5)',
                'years' => '2012 a 2023'
            ],
            
            [
                'id' => 6767,
                'brand_id' => 115,
                'fipe_code' => '515155-4',
                'model' => '26-420 E Constel. 6x4 2p (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 10252,
                'brand_id' => 115,
                'fipe_code' => '515195-3',
                'model' => '27-260 Constellation 6x4 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 8626,
                'brand_id' => 115,
                'fipe_code' => '515171-6',
                'model' => '30-280 Constellation 8x2 2p (diesel)(E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 7822,
                'brand_id' => 115,
                'fipe_code' => '515163-5',
                'model' => '30-330 Constellation 8x2 2p (diesel)(E5)',
                'years' => '2017 a 2023'
            ],
            
            [
                'id' => 10253,
                'brand_id' => 115,
                'fipe_code' => '515196-1',
                'model' => '30.320 Constellation 8x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 4760,
                'brand_id' => 115,
                'fipe_code' => '515123-6',
                'model' => '31-260 E Constel. 6x4 3-Eixos 2p (die.)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 3712,
                'brand_id' => 115,
                'fipe_code' => '515103-1',
                'model' => '31-260/31-260 Work. 6x4 3-Eixos 2p (die)',
                'years' => '2005 a 2012'
            ],
            
            [
                'id' => 5952,
                'brand_id' => 115,
                'fipe_code' => '515145-7',
                'model' => '31-280 E Constel. 6x4 2p (diesel)(E5)',
                'years' => '2012 a 2023'
            ],
            
            [
                'id' => 3713,
                'brand_id' => 115,
                'fipe_code' => '515104-0',
                'model' => '31-310 6x4 3-Eixos 2p (diesel)',
                'years' => '2005 a 2006'
            ],
            
            [
                'id' => 10254,
                'brand_id' => 115,
                'fipe_code' => '515197-0',
                'model' => '31-320 Constellation 6x4 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 4285,
                'brand_id' => 115,
                'fipe_code' => '515117-1',
                'model' => '31-320 E Constel. 6x4 3-Eixos 2p (die.)',
                'years' => '2007 a 2013'
            ],
            
            [
                'id' => 5945,
                'brand_id' => 115,
                'fipe_code' => '515146-5',
                'model' => '31-330 E Constel. 6x4 2p (diesel)(E5)',
                'years' => '2011 a 2023'
            ],
            
            [
                'id' => 4430,
                'brand_id' => 115,
                'fipe_code' => '515120-1',
                'model' => '31-370 E Constellation 6x4 2p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 5946,
                'brand_id' => 115,
                'fipe_code' => '515147-3',
                'model' => '31-390 E Constel. 6x4 2p (diesel)(E5)',
                'years' => '2012 a 2023'
            ],
            
            [
                'id' => 8542,
                'brand_id' => 115,
                'fipe_code' => '515170-8',
                'model' => '32-360 Constellation 6x4 2p (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 10255,
                'brand_id' => 115,
                'fipe_code' => '515198-8',
                'model' => '32.380 Constellation 6x4 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 9244,
                'brand_id' => 115,
                'fipe_code' => '515179-1',
                'model' => '33.460 Constellation 6x4 2p (diesel)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 10256,
                'brand_id' => 115,
                'fipe_code' => '515199-6',
                'model' => '33.480 Constellation 6x4 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 3714,
                'brand_id' => 115,
                'fipe_code' => '515052-3',
                'model' => '35-300 2p (diesel)',
                'years' => '1991 a 1999'
            ],
            
            [
                'id' => 8509,
                'brand_id' => 115,
                'fipe_code' => '515169-4',
                'model' => '4-150 Delivery 2p (diesel)(E5)',
                'years' => '2017 a 2021'
            ],
            
            [
                'id' => 9160,
                'brand_id' => 115,
                'fipe_code' => '515176-7',
                'model' => '4-160 Delivery 2p (diesel)(E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 3715,
                'brand_id' => 115,
                'fipe_code' => '515053-1',
                'model' => '40-300 2p (diesel)',
                'years' => '1999 a 2001'
            ],
            
            [
                'id' => 3875,
                'brand_id' => 115,
                'fipe_code' => '515107-4',
                'model' => '5-140 E Delivery 2p (diesel)',
                'years' => '2005 a 2012'
            ],
            
            [
                'id' => 5959,
                'brand_id' => 115,
                'fipe_code' => '515130-9',
                'model' => '5-150 E Delivery 2p (diesel)(E5)',
                'years' => '2012 a 2020'
            ],
            
            [
                'id' => 8226,
                'brand_id' => 115,
                'fipe_code' => '515167-8',
                'model' => '6-160 Delivery 2p (diesel)(E5)',
                'years' => '2017 a 2023'
            ],
            
            [
                'id' => 10257,
                'brand_id' => 115,
                'fipe_code' => '515184-8',
                'model' => '6-170 Delivery 4x2 2p (diesel)(E6)',
                'years' => '2021 a Zero Km'
            ],
            
            [
                'id' => 3716,
                'brand_id' => 115,
                'fipe_code' => '515054-0',
                'model' => '6-80 2p (diesel)',
                'years' => '1982 a 1989'
            ],
            
            [
                'id' => 3717,
                'brand_id' => 115,
                'fipe_code' => '515055-8',
                'model' => '6-90 2p (diesel)',
                'years' => '1982 a 1989'
            ],
            
            [
                'id' => 3718,
                'brand_id' => 115,
                'fipe_code' => '515056-6',
                'model' => '7-100 2p (diesel)',
                'years' => '1993 a 2001'
            ],
            
            [
                'id' => 3719,
                'brand_id' => 115,
                'fipe_code' => '515098-1',
                'model' => '7-110 2p (diesel)',
                'years' => '1995 a 2005'
            ],
            
            [
                'id' => 3720,
                'brand_id' => 115,
                'fipe_code' => '515057-4',
                'model' => '7-110 S 2p (diesel)',
                'years' => '1987 a 1994'
            ],
            
            [
                'id' => 3721,
                'brand_id' => 115,
                'fipe_code' => '515058-2',
                'model' => '7-90 2p (diesel)',
                'years' => '1982 a 1994'
            ],
            
            [
                'id' => 3722,
                'brand_id' => 115,
                'fipe_code' => '515059-0',
                'model' => '8-100 2p (diesel)',
                'years' => '1997 a 2000'
            ],
            
            [
                'id' => 3723,
                'brand_id' => 115,
                'fipe_code' => '515064-7',
                'model' => '8-120/8-120 euro3 Worker 2p (diesel)',
                'years' => '2000 a 2012'
            ],
            
            [
                'id' => 3724,
                'brand_id' => 115,
                'fipe_code' => '515060-4',
                'model' => '8-140 2p (diesel)',
                'years' => '1994 a 2000'
            ],
            
            [
                'id' => 3876,
                'brand_id' => 115,
                'fipe_code' => '515106-6',
                'model' => '8-150 E Delivery 2p (diesel)',
                'years' => '1996 a 2012'
            ],
            
            [
                'id' => 5291,
                'brand_id' => 115,
                'fipe_code' => '515126-0',
                'model' => '8-150 E Delivery Plus 2p (diesel)',
                'years' => '2006 a 2013'
            ],
            
            [
                'id' => 3725,
                'brand_id' => 115,
                'fipe_code' => '515065-5',
                'model' => '8-150/8-150 E Worker 2p (diesel)',
                'years' => '2000 a 2010'
            ],
            
            [
                'id' => 5961,
                'brand_id' => 115,
                'fipe_code' => '515132-5',
                'model' => '8-160 E Delivery 2p (diesel)(E5)',
                'years' => '2011 a 2020'
            ],
            
            [
                'id' => 5334,
                'brand_id' => 115,
                'fipe_code' => '515127-9',
                'model' => '9-150 E Delivery 2p (diesel)',
                'years' => '2010 a 2012'
            ],
            
            [
                'id' => 3877,
                'brand_id' => 115,
                'fipe_code' => '515105-8',
                'model' => '9-150 E Worker 2p (diesel)',
                'years' => '2005 a 2012'
            ],
            
            [
                'id' => 5960,
                'brand_id' => 115,
                'fipe_code' => '515131-7',
                'model' => '9-160 E Delivery 2p (diesel)(E5)',
                'years' => '2011 a 2020'
            ],
            
            [
                'id' => 8147,
                'brand_id' => 115,
                'fipe_code' => '515165-1',
                'model' => '9-170 Delivery 2p (diesel)(E5)',
                'years' => '2018 a 2023'
            ],
            
            [
                'id' => 10258,
                'brand_id' => 115,
                'fipe_code' => '515185-6',
                'model' => '9-180 Delivery 4x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 8337,
                'brand_id' => 115,
                'fipe_code' => '515168-6',
                'model' => 'Delivery Express 2p (diesel)(E5)',
                'years' => '2017 a 2022'
            ],
            
            [
                'id' => 3726,
                'brand_id' => 115,
                'fipe_code' => '515063-9',
                'model' => 'L-80 2p (diesel)',
                'years' => '1996 a 1997'
            ],
            
            [
                'id' => 9245,
                'brand_id' => 115,
                'fipe_code' => '515177-5',
                'model' => 'Meteor 28.460 6x2 2p (diesel)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 10302,
                'brand_id' => 115,
                'fipe_code' => '515200-3',
                'model' => 'Meteor 28.480 6x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 9246,
                'brand_id' => 115,
                'fipe_code' => '515178-3',
                'model' => 'Meteor 29.520 6x4 2p (diesel)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 10303,
                'brand_id' => 115,
                'fipe_code' => '515201-1',
                'model' => 'Meteor 29.530 6x4 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ]
            ];
            
            $VOLVOModels = [
            [
                'id' => 4212,
                'brand_id' => 116,
                'fipe_code' => '516094-4',
                'model' => 'FH 400 4x2 2p (diesel)',
                'years' => '2007 a 2012'
            ],
            
            [
                'id' => 4213,
                'brand_id' => 116,
                'fipe_code' => '516102-9',
                'model' => 'FH 400 6x2 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 4214,
                'brand_id' => 116,
                'fipe_code' => '516110-0',
                'model' => 'FH 400 6x4 2p (diesel)',
                'years' => '2007 a 2012'
            ],
            
            [
                'id' => 4215,
                'brand_id' => 116,
                'fipe_code' => '516095-2',
                'model' => 'FH 400 GLOBETROTTER 4x2 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 4216,
                'brand_id' => 116,
                'fipe_code' => '516103-7',
                'model' => 'FH 400 GLOBETROTTER 6x2 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 4217,
                'brand_id' => 116,
                'fipe_code' => '516111-8',
                'model' => 'FH 400 GLOBETROTTER 6x4 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 4218,
                'brand_id' => 116,
                'fipe_code' => '516096-0',
                'model' => 'FH 440 4x2 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 4219,
                'brand_id' => 116,
                'fipe_code' => '516104-5',
                'model' => 'FH 440 6x2 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 4220,
                'brand_id' => 116,
                'fipe_code' => '516112-6',
                'model' => 'FH 440 6x4 2p (diesel)',
                'years' => '2007 a 2012'
            ],
            
            [
                'id' => 4221,
                'brand_id' => 116,
                'fipe_code' => '516097-9',
                'model' => 'FH 440 GLOBETROTTER 4x2 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 4222,
                'brand_id' => 116,
                'fipe_code' => '516105-3',
                'model' => 'FH 440 GLOBETROTTER 6x2 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 4223,
                'brand_id' => 116,
                'fipe_code' => '516113-4',
                'model' => 'FH 440 GLOBETROTTER 6x4 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 4224,
                'brand_id' => 116,
                'fipe_code' => '516098-7',
                'model' => 'FH 480 4x2 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 4225,
                'brand_id' => 116,
                'fipe_code' => '516106-1',
                'model' => 'FH 480 6x2 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 4226,
                'brand_id' => 116,
                'fipe_code' => '516114-2',
                'model' => 'FH 480 6x4 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 4227,
                'brand_id' => 116,
                'fipe_code' => '516099-5',
                'model' => 'FH 480 GLOBETROTTER 4x2 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 4228,
                'brand_id' => 116,
                'fipe_code' => '516107-0',
                'model' => 'FH 480 GLOBETROTTER 6x2 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 4229,
                'brand_id' => 116,
                'fipe_code' => '516115-0',
                'model' => 'FH 480 GLOBETROTTER 6x4 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 4230,
                'brand_id' => 116,
                'fipe_code' => '516100-2',
                'model' => 'FH 520 4x2 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 4231,
                'brand_id' => 116,
                'fipe_code' => '516108-8',
                'model' => 'FH 520 6x2 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 4232,
                'brand_id' => 116,
                'fipe_code' => '516116-9',
                'model' => 'FH 520 6x4 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 4233,
                'brand_id' => 116,
                'fipe_code' => '516101-0',
                'model' => 'FH 520 GLOBETROTTER 4x2 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 4234,
                'brand_id' => 116,
                'fipe_code' => '516109-6',
                'model' => 'FH 520 GLOBETROTTER 6x2 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 4235,
                'brand_id' => 116,
                'fipe_code' => '516117-7',
                'model' => 'FH 520 GLOBETROTTER 6x4 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 3727,
                'brand_id' => 116,
                'fipe_code' => '516010-3',
                'model' => 'FH-12 380 4x2 2p (diesel)',
                'years' => '1993 a 2006'
            ],
            
            [
                'id' => 3728,
                'brand_id' => 116,
                'fipe_code' => '516061-8',
                'model' => 'FH-12 380 6x2 2p (diesel)',
                'years' => '1997 a 2006'
            ],
            
            [
                'id' => 3729,
                'brand_id' => 116,
                'fipe_code' => '516062-6',
                'model' => 'FH-12 380 6x4 2p (diesel)',
                'years' => '1997 a 2006'
            ],
            
            [
                'id' => 3730,
                'brand_id' => 116,
                'fipe_code' => '516011-1',
                'model' => 'FH-12 380 GLOBETROTTER 4x2 2p (diesel)',
                'years' => '1993 a 2006'
            ],
            
            [
                'id' => 3731,
                'brand_id' => 116,
                'fipe_code' => '516087-1',
                'model' => 'FH-12 380 GLOBETROTTER 6x2 2p (diesel)',
                'years' => '2005 a 2006'
            ],
            
            [
                'id' => 3732,
                'brand_id' => 116,
                'fipe_code' => '516012-0',
                'model' => 'FH-12 420 4x2 2p (diesel)',
                'years' => '1999 a 2006'
            ],
            
            [
                'id' => 3733,
                'brand_id' => 116,
                'fipe_code' => '516069-3',
                'model' => 'FH-12 420 6x2 2p (diesel)',
                'years' => '2000 a 2006'
            ],
            
            [
                'id' => 3734,
                'brand_id' => 116,
                'fipe_code' => '516013-8',
                'model' => 'FH-12 420 6x4 2p (diesel)',
                'years' => '1999 a 2006'
            ],
            
            [
                'id' => 3735,
                'brand_id' => 116,
                'fipe_code' => '516014-6',
                'model' => 'FH-12 420 GLOBETROTTER 4x2 2p (diesel)',
                'years' => '1999 a 2006'
            ],
            
            [
                'id' => 3736,
                'brand_id' => 116,
                'fipe_code' => '516076-6',
                'model' => 'FH-12 420 GLOBETROTTER 6x2 2p (diesel)',
                'years' => '1999 a 2006'
            ],
            
            [
                'id' => 3737,
                'brand_id' => 116,
                'fipe_code' => '516015-4',
                'model' => 'FH-12 420 GLOBETROTTER 6x4 2p (diesel)',
                'years' => '1999 a 2006'
            ],
            
            [
                'id' => 3738,
                'brand_id' => 116,
                'fipe_code' => '516077-4',
                'model' => 'FH-12 460 4x2 2p TA/TB (diesel)',
                'years' => '2003 a 2006'
            ],
            
            [
                'id' => 3739,
                'brand_id' => 116,
                'fipe_code' => '516082-0',
                'model' => 'FH-12 460 6x2 2p TA/TB (diesel)',
                'years' => '2004 a 2006'
            ],
            
            [
                'id' => 3740,
                'brand_id' => 116,
                'fipe_code' => '516083-9',
                'model' => 'FH-12 460 6x4 2p TA/TB (diesel)',
                'years' => '2004 a 2006'
            ],
            
            [
                'id' => 6905,
                'brand_id' => 116,
                'fipe_code' => '516181-9',
                'model' => 'FH-16 750 GLOBETROTTER 8x4 2p (die)(E5)',
                'years' => '2013 a 2016'
            ],
            
            [
                'id' => 5846,
                'brand_id' => 116,
                'fipe_code' => '516160-6',
                'model' => 'FH-420 4x2 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10483,
                'brand_id' => 116,
                'fipe_code' => '516202-5',
                'model' => 'FH-420 4X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5851,
                'brand_id' => 116,
                'fipe_code' => '516153-3',
                'model' => 'FH-420 6x2 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10484,
                'brand_id' => 116,
                'fipe_code' => '516206-8',
                'model' => 'FH-420 6X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5857,
                'brand_id' => 116,
                'fipe_code' => '516147-9',
                'model' => 'FH-420 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10485,
                'brand_id' => 116,
                'fipe_code' => '516210-6',
                'model' => 'FH-420 6X4 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10486,
                'brand_id' => 116,
                'fipe_code' => '516229-7',
                'model' => 'FH-420 8X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7577,
                'brand_id' => 116,
                'fipe_code' => '516194-0',
                'model' => 'FH-420 8x2 2p (diesel)(E5)',
                'years' => '2016 a 2022'
            ],
            
            [
                'id' => 5847,
                'brand_id' => 116,
                'fipe_code' => '516161-4',
                'model' => 'FH-420 GLOBETROTTER 4x2 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10487,
                'brand_id' => 116,
                'fipe_code' => '516214-9',
                'model' => 'FH-420 GLOBETROTTER 4X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5852,
                'brand_id' => 116,
                'fipe_code' => '516154-1',
                'model' => 'FH-420 GLOBETROTTER 6x2 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10488,
                'brand_id' => 116,
                'fipe_code' => '516222-0',
                'model' => 'FH-420 GLOBETROTTER 6X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5856,
                'brand_id' => 116,
                'fipe_code' => '516146-0',
                'model' => 'FH-420 GLOBETROTTER 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10489,
                'brand_id' => 116,
                'fipe_code' => '516231-9',
                'model' => 'FH-420 GLOBETROTTER 6X4 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10490,
                'brand_id' => 116,
                'fipe_code' => '516230-0',
                'model' => 'FH-420 GLOBETROTTER 8X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7578,
                'brand_id' => 116,
                'fipe_code' => '516193-2',
                'model' => 'FH-420 GLOBETROTTER 8x2 2p (diesel)(E5)',
                'years' => '2016 a 2022'
            ],
            
            [
                'id' => 10491,
                'brand_id' => 116,
                'fipe_code' => '516218-1',
                'model' => 'FH-420 GLOBETROTTER XL 4X2 (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10492,
                'brand_id' => 116,
                'fipe_code' => '516225-4',
                'model' => 'FH-420 GLOBETROTTER XL 6X2 (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10493,
                'brand_id' => 116,
                'fipe_code' => '516233-5',
                'model' => 'FH-420 GLOBETROTTER XL 6X4 (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10494,
                'brand_id' => 116,
                'fipe_code' => '516232-7',
                'model' => 'FH-420 GLOBETROTTER XL 8X2 (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5848,
                'brand_id' => 116,
                'fipe_code' => '516162-2',
                'model' => 'FH-460 4x2 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10495,
                'brand_id' => 116,
                'fipe_code' => '516203-3',
                'model' => 'FH-460 4x2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5834,
                'brand_id' => 116,
                'fipe_code' => '516171-1',
                'model' => 'FH-460 6x2 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10496,
                'brand_id' => 116,
                'fipe_code' => '516207-6',
                'model' => 'FH-460 6x2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5835,
                'brand_id' => 116,
                'fipe_code' => '516172-0',
                'model' => 'FH-460 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10497,
                'brand_id' => 116,
                'fipe_code' => '516211-4',
                'model' => 'FH-460 6x4 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10498,
                'brand_id' => 116,
                'fipe_code' => '516234-3',
                'model' => 'FH-460 8x2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7579,
                'brand_id' => 116,
                'fipe_code' => '516188-6',
                'model' => 'FH-460 8x2 2p (diesel)(E5)',
                'years' => '2016 a 2022'
            ],
            
            [
                'id' => 5837,
                'brand_id' => 116,
                'fipe_code' => '516163-0',
                'model' => 'FH-460 GLOBETROTTER 4x2 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10499,
                'brand_id' => 116,
                'fipe_code' => '516215-7',
                'model' => 'FH-460 GLOBETROTTER 4X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5853,
                'brand_id' => 116,
                'fipe_code' => '516155-0',
                'model' => 'FH-460 GLOBETROTTER 6x2 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10500,
                'brand_id' => 116,
                'fipe_code' => '516201-7',
                'model' => 'FH-460 GLOBETROTTER 6X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5858,
                'brand_id' => 116,
                'fipe_code' => '516148-7',
                'model' => 'FH-460 GLOBETROTTER 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10501,
                'brand_id' => 116,
                'fipe_code' => '516239-4',
                'model' => 'FH-460 GLOBETROTTER 6X4 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10502,
                'brand_id' => 116,
                'fipe_code' => '516236-0',
                'model' => 'FH-460 GLOBETROTTER 8X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7580,
                'brand_id' => 116,
                'fipe_code' => '516187-8',
                'model' => 'FH-460 GLOBETROTTER 8x2 2p (diesel)(E5)',
                'years' => '2016 a 2022'
            ],
            
            [
                'id' => 10503,
                'brand_id' => 116,
                'fipe_code' => '516219-0',
                'model' => 'FH-460 GLOBETROTTER XL 4X2 (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10504,
                'brand_id' => 116,
                'fipe_code' => '516226-2',
                'model' => 'FH-460 GLOBETROTTER XL 6X2 (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10505,
                'brand_id' => 116,
                'fipe_code' => '516243-2',
                'model' => 'FH-460 GLOBETROTTER XL 6X4 (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10506,
                'brand_id' => 116,
                'fipe_code' => '516237-8',
                'model' => 'FH-460 GLOBETROTTER XL 8X2 (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5838,
                'brand_id' => 116,
                'fipe_code' => '516164-9',
                'model' => 'FH-500 4x2 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10507,
                'brand_id' => 116,
                'fipe_code' => '516204-1',
                'model' => 'FH-500 4X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5854,
                'brand_id' => 116,
                'fipe_code' => '516156-8',
                'model' => 'FH-500 6x2 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10508,
                'brand_id' => 116,
                'fipe_code' => '516208-4',
                'model' => 'FH-500 6X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5859,
                'brand_id' => 116,
                'fipe_code' => '516149-5',
                'model' => 'FH-500 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10509,
                'brand_id' => 116,
                'fipe_code' => '516212-2',
                'model' => 'FH-500 6X4 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10510,
                'brand_id' => 116,
                'fipe_code' => '516235-1',
                'model' => 'FH-500 8X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7581,
                'brand_id' => 116,
                'fipe_code' => '516192-4',
                'model' => 'FH-500 8x2 2p (diesel)(E5)',
                'years' => '2016 a 2022'
            ],
            
            [
                'id' => 5839,
                'brand_id' => 116,
                'fipe_code' => '516165-7',
                'model' => 'FH-500 GLOBETROTTER 4x2 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10511,
                'brand_id' => 116,
                'fipe_code' => '516216-5',
                'model' => 'FH-500 GLOBETROTTER 4X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5843,
                'brand_id' => 116,
                'fipe_code' => '516157-6',
                'model' => 'FH-500 GLOBETROTTER 6x2 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10512,
                'brand_id' => 116,
                'fipe_code' => '516223-8',
                'model' => 'FH-500 GLOBETROTTER 6X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5860,
                'brand_id' => 116,
                'fipe_code' => '516150-9',
                'model' => 'FH-500 GLOBETROTTER 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10513,
                'brand_id' => 116,
                'fipe_code' => '516240-8',
                'model' => 'FH-500 GLOBETROTTER 6X4 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10514,
                'brand_id' => 116,
                'fipe_code' => '516238-6',
                'model' => 'FH-500 GLOBETROTTER 8X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7582,
                'brand_id' => 116,
                'fipe_code' => '516191-6',
                'model' => 'FH-500 GLOBETROTTER 8x2 2p (diesel)(E5)',
                'years' => '2016 a 2022'
            ],
            
            [
                'id' => 10515,
                'brand_id' => 116,
                'fipe_code' => '516220-3',
                'model' => 'FH-500 GLOBETROTTER XL 4X2 (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10516,
                'brand_id' => 116,
                'fipe_code' => '516227-0',
                'model' => 'FH-500 GLOBETROTTER XL 6X2 (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10517,
                'brand_id' => 116,
                'fipe_code' => '516245-9',
                'model' => 'FH-500 GLOBETROTTER XL 6X4 (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10518,
                'brand_id' => 116,
                'fipe_code' => '516244-0',
                'model' => 'FH-500 GLOBETROTTER XL 8X2 (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5840,
                'brand_id' => 116,
                'fipe_code' => '516166-5',
                'model' => 'FH-540 4x2 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10519,
                'brand_id' => 116,
                'fipe_code' => '516205-0',
                'model' => 'FH-540 4X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5844,
                'brand_id' => 116,
                'fipe_code' => '516158-4',
                'model' => 'FH-540 6x2 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10520,
                'brand_id' => 116,
                'fipe_code' => '516209-2',
                'model' => 'FH-540 6X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5849,
                'brand_id' => 116,
                'fipe_code' => '516151-7',
                'model' => 'FH-540 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10521,
                'brand_id' => 116,
                'fipe_code' => '516213-0',
                'model' => 'FH-540 6X4 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10522,
                'brand_id' => 116,
                'fipe_code' => '516241-6',
                'model' => 'FH-540 8X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7583,
                'brand_id' => 116,
                'fipe_code' => '516190-8',
                'model' => 'FH-540 8x2 2p (diesel)(E5)',
                'years' => '2016 a 2022'
            ],
            
            [
                'id' => 10523,
                'brand_id' => 116,
                'fipe_code' => '516247-5',
                'model' => 'FH-540 8X4 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7997,
                'brand_id' => 116,
                'fipe_code' => '516196-7',
                'model' => 'FH-540 8X4 2p (diesel)(E5)',
                'years' => '2015 a 2022'
            ],
            
            [
                'id' => 5841,
                'brand_id' => 116,
                'fipe_code' => '516167-3',
                'model' => 'FH-540 GLOBETROTTER 4x2 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10524,
                'brand_id' => 116,
                'fipe_code' => '516217-3',
                'model' => 'FH-540 GLOBETROTTER 4X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5845,
                'brand_id' => 116,
                'fipe_code' => '516159-2',
                'model' => 'FH-540 GLOBETROTTER 6x2 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10525,
                'brand_id' => 116,
                'fipe_code' => '516224-6',
                'model' => 'FH-540 GLOBETROTTER 6X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5850,
                'brand_id' => 116,
                'fipe_code' => '516152-5',
                'model' => 'FH-540 GLOBETROTTER 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10526,
                'brand_id' => 116,
                'fipe_code' => '516248-3',
                'model' => 'FH-540 GLOBETROTTER 6X4 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10527,
                'brand_id' => 116,
                'fipe_code' => '516242-4',
                'model' => 'FH-540 GLOBETROTTER 8X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7584,
                'brand_id' => 116,
                'fipe_code' => '516189-4',
                'model' => 'FH-540 GLOBETROTTER 8x2 2p (diesel)(E5)',
                'years' => '2016 a 2022'
            ],
            
            [
                'id' => 10528,
                'brand_id' => 116,
                'fipe_code' => '516250-5',
                'model' => 'FH-540 GLOBETROTTER 8X4 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7998,
                'brand_id' => 116,
                'fipe_code' => '516195-9',
                'model' => 'FH-540 GLOBETROTTER 8X4 2p (diesel)(E5)',
                'years' => '2015 a 2022'
            ],
            
            [
                'id' => 10529,
                'brand_id' => 116,
                'fipe_code' => '516221-1',
                'model' => 'FH-540 GLOBETROTTER XL 4X2 (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10530,
                'brand_id' => 116,
                'fipe_code' => '516228-9',
                'model' => 'FH-540 GLOBETROTTER XL 6X2 (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10531,
                'brand_id' => 116,
                'fipe_code' => '516249-1',
                'model' => 'FH-540 GLOBETROTTER XL 6X4 (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10532,
                'brand_id' => 116,
                'fipe_code' => '516246-7',
                'model' => 'FH-540 GLOBETROTTER XL 8X2 (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10533,
                'brand_id' => 116,
                'fipe_code' => '516251-3',
                'model' => 'FH-540 GLOBETROTTER XL 8X4 (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 4821,
                'brand_id' => 116,
                'fipe_code' => '516125-8',
                'model' => 'FM 370 4x2 2p (diesel)',
                'years' => '2009 a 2011'
            ],
            
            [
                'id' => 5842,
                'brand_id' => 116,
                'fipe_code' => '516168-1',
                'model' => 'FM 370 4x2 2p (diesel) (E5)',
                'years' => '2012 a 2016'
            ],
            
            [
                'id' => 4822,
                'brand_id' => 116,
                'fipe_code' => '516126-6',
                'model' => 'FM 370 6x2 2p (diesel)',
                'years' => '2009 a 2011'
            ],
            
            [
                'id' => 5832,
                'brand_id' => 116,
                'fipe_code' => '516169-0',
                'model' => 'FM 370 6x2 2p (diesel) (E5)',
                'years' => '2012 a 2016'
            ],
            
            [
                'id' => 10598,
                'brand_id' => 116,
                'fipe_code' => '516269-6',
                'model' => 'FM 380 4X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7339,
                'brand_id' => 116,
                'fipe_code' => '516183-5',
                'model' => 'FM 380 4x2 2p (diesel)(E5)',
                'years' => '2016 a 2022'
            ],
            
            [
                'id' => 10599,
                'brand_id' => 116,
                'fipe_code' => '516268-8',
                'model' => 'FM 380 6X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7340,
                'brand_id' => 116,
                'fipe_code' => '516184-3',
                'model' => 'FM 380 6x2 2p (diesel)(E5)',
                'years' => '2015 a 2022'
            ],
            
            [
                'id' => 8438,
                'brand_id' => 116,
                'fipe_code' => '516197-5',
                'model' => 'FM 380 8x2 2p (diesel)(E5)',
                'years' => '2018 a 2022'
            ],
            
            [
                'id' => 4236,
                'brand_id' => 116,
                'fipe_code' => '516118-5',
                'model' => 'FM 400 6x4 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 4237,
                'brand_id' => 116,
                'fipe_code' => '516121-5',
                'model' => 'FM 400 8x4 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 4238,
                'brand_id' => 116,
                'fipe_code' => '516119-3',
                'model' => 'FM 440 6x4 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 4313,
                'brand_id' => 116,
                'fipe_code' => '516123-1',
                'model' => 'FM 440 8x4 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 6376,
                'brand_id' => 116,
                'fipe_code' => '516176-2',
                'model' => 'FM 460 6x4 (diesel)(E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 4239,
                'brand_id' => 116,
                'fipe_code' => '516120-7',
                'model' => 'FM 480 6x4 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 4314,
                'brand_id' => 116,
                'fipe_code' => '516124-0',
                'model' => 'FM 480 8x4 2p (diesel)',
                'years' => '2007 a 2011'
            ],
            
            [
                'id' => 3741,
                'brand_id' => 116,
                'fipe_code' => '516067-7',
                'model' => 'FM-10 320 4x2 2p (diesel)',
                'years' => '1999 a 2001'
            ],
            
            [
                'id' => 3742,
                'brand_id' => 116,
                'fipe_code' => '516070-7',
                'model' => 'FM-12 340 4x2 2p (diesel)',
                'years' => '2001 a 2006'
            ],
            
            [
                'id' => 3743,
                'brand_id' => 116,
                'fipe_code' => '516086-3',
                'model' => 'FM-12 340 6x2 2p (diesel)',
                'years' => '2005 a 2006'
            ],
            
            [
                'id' => 3744,
                'brand_id' => 116,
                'fipe_code' => '516063-4',
                'model' => 'FM-12 380 6x4 2p (diesel)',
                'years' => '2000 a 2006'
            ],
            
            [
                'id' => 3745,
                'brand_id' => 116,
                'fipe_code' => '516064-2',
                'model' => 'FM-12 420 6x4 2p (diesel)',
                'years' => '2000 a 2006'
            ],
            
            [
                'id' => 5527,
                'brand_id' => 116,
                'fipe_code' => '516127-4',
                'model' => 'FMX 370 6x4 2p (diesel)',
                'years' => '2011 a 2011'
            ],
            
            [
                'id' => 5833,
                'brand_id' => 116,
                'fipe_code' => '516170-3',
                'model' => 'FMX 370 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2017'
            ],
            
            [
                'id' => 10600,
                'brand_id' => 116,
                'fipe_code' => '516267-0',
                'model' => 'FMX 380 6X4 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7341,
                'brand_id' => 116,
                'fipe_code' => '516182-7',
                'model' => 'FMX 380 6x4 2p (diesel)(E5)',
                'years' => '2016 a 2022'
            ],
            
            [
                'id' => 10601,
                'brand_id' => 116,
                'fipe_code' => '516264-5',
                'model' => 'FMX 380 8X4 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 8558,
                'brand_id' => 116,
                'fipe_code' => '516198-3',
                'model' => 'FMX 380 8x4 2p (diesel)(E5)',
                'years' => '2019 a 2022'
            ],
            
            [
                'id' => 5528,
                'brand_id' => 116,
                'fipe_code' => '516128-2',
                'model' => 'FMX 400 6x4 2p (diesel)',
                'years' => '2011 a 2011'
            ],
            
            [
                'id' => 5529,
                'brand_id' => 116,
                'fipe_code' => '516131-2',
                'model' => 'FMX 400 8x4 2p (diesel)',
                'years' => '2011 a 2011'
            ],
            
            [
                'id' => 5867,
                'brand_id' => 116,
                'fipe_code' => '516134-7',
                'model' => 'FMX 420 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 5870,
                'brand_id' => 116,
                'fipe_code' => '516137-1',
                'model' => 'FMX 420 8x4 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 5530,
                'brand_id' => 116,
                'fipe_code' => '516129-0',
                'model' => 'FMX 440 6x4 2p (diesel)',
                'years' => '2011 a 2011'
            ],
            
            [
                'id' => 5531,
                'brand_id' => 116,
                'fipe_code' => '516132-0',
                'model' => 'FMX 440 8x4 2p (diesel)',
                'years' => '2011 a 2011'
            ],
            
            [
                'id' => 5868,
                'brand_id' => 116,
                'fipe_code' => '516135-5',
                'model' => 'FMX 460 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 5871,
                'brand_id' => 116,
                'fipe_code' => '516138-0',
                'model' => 'FMX 460 8x4 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10602,
                'brand_id' => 116,
                'fipe_code' => '516263-7',
                'model' => 'FMX 460 8X4 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5532,
                'brand_id' => 116,
                'fipe_code' => '516130-4',
                'model' => 'FMX 480 6x4 2p (diesel)',
                'years' => '2011 a 2011'
            ],
            
            [
                'id' => 5533,
                'brand_id' => 116,
                'fipe_code' => '516133-9',
                'model' => 'FMX 480 8x4 2p (diesel)',
                'years' => '2011 a 2011'
            ],
            
            [
                'id' => 5869,
                'brand_id' => 116,
                'fipe_code' => '516136-3',
                'model' => 'FMX 500 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10603,
                'brand_id' => 116,
                'fipe_code' => '516266-1',
                'model' => 'FMX 500 6X4 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 5861,
                'brand_id' => 116,
                'fipe_code' => '516139-8',
                'model' => 'FMX 500 8x4 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 10604,
                'brand_id' => 116,
                'fipe_code' => '516262-9',
                'model' => 'FMX 500 8X4 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10605,
                'brand_id' => 116,
                'fipe_code' => '516265-3',
                'model' => 'FMX 540 6X4 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7473,
                'brand_id' => 116,
                'fipe_code' => '516186-0',
                'model' => 'FMX 540 6x4 2p (diesel)(E5)',
                'years' => '2016 a 2022'
            ],
            
            [
                'id' => 10606,
                'brand_id' => 116,
                'fipe_code' => '516261-0',
                'model' => 'FMX 540 8X4 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7474,
                'brand_id' => 116,
                'fipe_code' => '516185-1',
                'model' => 'FMX 540 8x4 2p (diesel)(E5)',
                'years' => '2016 a 2022'
            ],
            
            [
                'id' => 3746,
                'brand_id' => 116,
                'fipe_code' => '516016-2',
                'model' => 'N-10 280 4x2 2p (diesel)',
                'years' => '1989 a 1990'
            ],
            
            [
                'id' => 3747,
                'brand_id' => 116,
                'fipe_code' => '516017-0',
                'model' => 'N-10 280 H 4x2 2p (diesel)',
                'years' => '1983 a 1990'
            ],
            
            [
                'id' => 3748,
                'brand_id' => 116,
                'fipe_code' => '516018-9',
                'model' => 'N-10 280 TURBO-II H 4x2 2p (diesel)',
                'years' => '1985 a 1989'
            ],
            
            [
                'id' => 3749,
                'brand_id' => 116,
                'fipe_code' => '516019-7',
                'model' => 'N-10 280 XH 4x2 2p (diesel)',
                'years' => '1983 a 1987'
            ],
            
            [
                'id' => 3750,
                'brand_id' => 116,
                'fipe_code' => '516071-5',
                'model' => 'N-10 300 XH 4x2 2p (diesel)',
                'years' => '1985 a 1988'
            ],
            
            [
                'id' => 3751,
                'brand_id' => 116,
                'fipe_code' => '516020-0',
                'model' => 'N-10 340 XHT 6x4 2p (diesel)',
                'years' => '1984 a 1989'
            ],
            
            [
                'id' => 3752,
                'brand_id' => 116,
                'fipe_code' => '516021-9',
                'model' => 'N-12 360 4x2 2p (diesel)',
                'years' => '1983 a 1990'
            ],
            
            [
                'id' => 3753,
                'brand_id' => 116,
                'fipe_code' => '516022-7',
                'model' => 'N-12 360 XH 4x2 2p (diesel)',
                'years' => '1984 a 1987'
            ],
            
            [
                'id' => 3754,
                'brand_id' => 116,
                'fipe_code' => '516023-5',
                'model' => 'N-12 360 XHT 6x4 2p (diesel)',
                'years' => '1984 a 1989'
            ],
            
            [
                'id' => 3878,
                'brand_id' => 116,
                'fipe_code' => '516088-0',
                'model' => 'NH-12 340 4x2 2p (diesel)',
                'years' => '2006 a 2006'
            ],
            
            [
                'id' => 3755,
                'brand_id' => 116,
                'fipe_code' => '516024-3',
                'model' => 'NH-12 380 4x2 2p (diesel)',
                'years' => '1999 a 2006'
            ],
            
            [
                'id' => 3756,
                'brand_id' => 116,
                'fipe_code' => '516060-0',
                'model' => 'NH-12 380 6x2 2p (diesel)',
                'years' => '2000 a 2006'
            ],
            
            [
                'id' => 3757,
                'brand_id' => 116,
                'fipe_code' => '516025-1',
                'model' => 'NH-12 380 6x4 2p (diesel)',
                'years' => '1999 a 2006'
            ],
            
            [
                'id' => 3758,
                'brand_id' => 116,
                'fipe_code' => '516026-0',
                'model' => 'NH-12 380 GLOBETROTTER 4x2 2p (diesel)',
                'years' => '1999 a 2006'
            ],
            
            [
                'id' => 3759,
                'brand_id' => 116,
                'fipe_code' => '516085-5',
                'model' => 'NH-12 380 GLOBETROTTER 6x2 2p (diesel)',
                'years' => '2005 a 2006'
            ],
            
            [
                'id' => 3760,
                'brand_id' => 116,
                'fipe_code' => '516027-8',
                'model' => 'NH-12 380 GLOBETROTTER 6x4 2p (diesel)',
                'years' => '1999 a 2006'
            ],
            
            [
                'id' => 3761,
                'brand_id' => 116,
                'fipe_code' => '516028-6',
                'model' => 'NH-12 420 4x2 2p (diesel)',
                'years' => '1999 a 2006'
            ],
            
            [
                'id' => 3762,
                'brand_id' => 116,
                'fipe_code' => '516068-5',
                'model' => 'NH-12 420 6x2 2p (diesel)',
                'years' => '2000 a 2006'
            ],
            
            [
                'id' => 3763,
                'brand_id' => 116,
                'fipe_code' => '516029-4',
                'model' => 'NH-12 420 6x4 2p (diesel)',
                'years' => '1999 a 2006'
            ],
            
            [
                'id' => 3764,
                'brand_id' => 116,
                'fipe_code' => '516030-8',
                'model' => 'NH-12 420 GLOBETROTTER 4x2 2p (diesel)',
                'years' => '1999 a 2006'
            ],
            
            [
                'id' => 3765,
                'brand_id' => 116,
                'fipe_code' => '516031-6',
                'model' => 'NH-12 420 GLOBETROTTER 6x4 2p (diesel)',
                'years' => '1999 a 2006'
            ],
            
            [
                'id' => 3766,
                'brand_id' => 116,
                'fipe_code' => '516078-2',
                'model' => 'NH-12 460 4x2 2p TA/TB (diesel)',
                'years' => '2003 a 2006'
            ],
            
            [
                'id' => 3767,
                'brand_id' => 116,
                'fipe_code' => '516079-0',
                'model' => 'NH-12 460 6x2 2p TA/TB (diesel)',
                'years' => '2003 a 2006'
            ],
            
            [
                'id' => 3768,
                'brand_id' => 116,
                'fipe_code' => '516080-4',
                'model' => 'NH-12 460 6x4 2p TA/TB (diesel)',
                'years' => '2003 a 2006'
            ],
            
            [
                'id' => 3769,
                'brand_id' => 116,
                'fipe_code' => '516032-4',
                'model' => 'NL-10 280 4x2 2p (diesel)',
                'years' => '1988 a 1995'
            ],
            
            [
                'id' => 3770,
                'brand_id' => 116,
                'fipe_code' => '516033-2',
                'model' => 'NL-10 280 6x2 2p (diesel)',
                'years' => '1989 a 1995'
            ],
            
            [
                'id' => 3771,
                'brand_id' => 116,
                'fipe_code' => '516034-0',
                'model' => 'NL-10 280 6x4 2p (diesel)',
                'years' => '1989 a 1995'
            ],
            
            [
                'id' => 3772,
                'brand_id' => 116,
                'fipe_code' => '516035-9',
                'model' => 'NL-10 310 4x2 2p (diesel)',
                'years' => '1993 a 1995'
            ],
            
            [
                'id' => 3773,
                'brand_id' => 116,
                'fipe_code' => '516036-7',
                'model' => 'NL-10 310 6x4 2p (diesel)',
                'years' => '1993 a 1995'
            ],
            
            [
                'id' => 3774,
                'brand_id' => 116,
                'fipe_code' => '516037-5',
                'model' => 'NL-10 320 EDC 4x2 2p (diesel)',
                'years' => '1996 a 1997'
            ],
            
            [
                'id' => 3775,
                'brand_id' => 116,
                'fipe_code' => '516038-3',
                'model' => 'NL-10 320 EDC 6x2 2p (diesel)',
                'years' => '1996 a 1997'
            ],
            
            [
                'id' => 3776,
                'brand_id' => 116,
                'fipe_code' => '516039-1',
                'model' => 'NL-10 320 EDC 6x4 2p (diesel)',
                'years' => '1996 a 1998'
            ],
            
            [
                'id' => 3777,
                'brand_id' => 116,
                'fipe_code' => '516040-5',
                'model' => 'NL-10 320 EDC GOLD 4x2 2p (diesel)',
                'years' => '1996 a 1999'
            ],
            
            [
                'id' => 3778,
                'brand_id' => 116,
                'fipe_code' => '516041-3',
                'model' => 'NL-10 340 4x2 2p (diesel)',
                'years' => '1987 a 1995'
            ],
            
            [
                'id' => 3779,
                'brand_id' => 116,
                'fipe_code' => '516042-1',
                'model' => 'NL-10 340 6x2 2p (diesel)',
                'years' => '1988 a 1995'
            ],
            
            [
                'id' => 3780,
                'brand_id' => 116,
                'fipe_code' => '516043-0',
                'model' => 'NL-10 340 6x4 2p (diesel)',
                'years' => '1989 a 1995'
            ],
            
            [
                'id' => 3781,
                'brand_id' => 116,
                'fipe_code' => '516044-8',
                'model' => 'NL-12 360 4x2 2p (diesel)',
                'years' => '1990 a 1995'
            ],
            
            [
                'id' => 4271,
                'brand_id' => 116,
                'fipe_code' => '516122-3',
                'model' => 'NL-12 360 6x4 2p (diesel)',
                'years' => '1990 a 1995'
            ],
            
            [
                'id' => 3782,
                'brand_id' => 116,
                'fipe_code' => '516045-6',
                'model' => 'NL-12 360 EDC 4x2 2p (diesel)',
                'years' => '1996 a 1999'
            ],
            
            [
                'id' => 3783,
                'brand_id' => 116,
                'fipe_code' => '516046-4',
                'model' => 'NL-12 360 EDC 6x2 2p (diesel)',
                'years' => '1996 a 1997'
            ],
            
            [
                'id' => 3784,
                'brand_id' => 116,
                'fipe_code' => '516047-2',
                'model' => 'NL-12 360 EDC 6x4 2p (diesel)',
                'years' => '1996 a 1997'
            ],
            
            [
                'id' => 3785,
                'brand_id' => 116,
                'fipe_code' => '516048-0',
                'model' => 'NL-12 360 EDC GOLD 4x2 2p (diesel)',
                'years' => '1998 a 1999'
            ],
            
            [
                'id' => 3786,
                'brand_id' => 116,
                'fipe_code' => '516049-9',
                'model' => 'NL-12 360 EDC GOLD 6x2 2p (diesel)',
                'years' => '1998 a 1999'
            ],
            
            [
                'id' => 3787,
                'brand_id' => 116,
                'fipe_code' => '516050-2',
                'model' => 'NL-12 360 EDC GOLD 6x4 2p (diesel)',
                'years' => '1998 a 1999'
            ],
            
            [
                'id' => 3788,
                'brand_id' => 116,
                'fipe_code' => '516084-7',
                'model' => 'NL-12 400 4x2 2p (diesel)',
                'years' => '1990 a 1995'
            ],
            
            [
                'id' => 3789,
                'brand_id' => 116,
                'fipe_code' => '516051-0',
                'model' => 'NL-12 400 6x2 2p (diesel)',
                'years' => '1990 a 1995'
            ],
            
            [
                'id' => 3790,
                'brand_id' => 116,
                'fipe_code' => '516052-9',
                'model' => 'NL-12 400 6x4 2p (diesel)',
                'years' => '1990 a 1995'
            ],
            
            [
                'id' => 3791,
                'brand_id' => 116,
                'fipe_code' => '516053-7',
                'model' => 'NL-12 410 4x2 2p (diesel)',
                'years' => '1993 a 1995'
            ],
            
            [
                'id' => 3792,
                'brand_id' => 116,
                'fipe_code' => '516054-5',
                'model' => 'NL-12 410 EDC 4x2 2p (diesel)',
                'years' => '1996 a 1997'
            ],
            
            [
                'id' => 3793,
                'brand_id' => 116,
                'fipe_code' => '516055-3',
                'model' => 'NL-12 410 EDC 6x2 2p (diesel)',
                'years' => '1996 a 1997'
            ],
            
            [
                'id' => 3794,
                'brand_id' => 116,
                'fipe_code' => '516056-1',
                'model' => 'NL-12 410 EDC 6x4 2p (diesel)',
                'years' => '1996 a 1998'
            ],
            
            [
                'id' => 3795,
                'brand_id' => 116,
                'fipe_code' => '516057-0',
                'model' => 'NL-12 410 EDC GOLD 4x2 2p (diesel)',
                'years' => '1996 a 1999'
            ],
            
            [
                'id' => 3796,
                'brand_id' => 116,
                'fipe_code' => '516058-8',
                'model' => 'NL-12 410 EDC GOLD 6x2 2p (diesel)',
                'years' => '1996 a 1999'
            ],
            
            [
                'id' => 3797,
                'brand_id' => 116,
                'fipe_code' => '516059-6',
                'model' => 'NL-12 410 EDC GOLD 6x4 2p (diesel)',
                'years' => '1996 a 1999'
            ],
            
            [
                'id' => 5864,
                'brand_id' => 116,
                'fipe_code' => '516142-8',
                'model' => 'VM 220 4x2 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 6229,
                'brand_id' => 116,
                'fipe_code' => '516175-4',
                'model' => 'VM 220 6x2 2p (diesel)(E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 3950,
                'brand_id' => 116,
                'fipe_code' => '516089-8',
                'model' => 'VM 260 4x2 2p (diesel)',
                'years' => '2006 a 2011'
            ],
            
            [
                'id' => 3951,
                'brand_id' => 116,
                'fipe_code' => '516090-1',
                'model' => 'VM 260 6x2 2p (diesel)',
                'years' => '2006 a 2012'
            ],
            
            [
                'id' => 3952,
                'brand_id' => 116,
                'fipe_code' => '516091-0',
                'model' => 'VM 260 6x4 2p (diesel)',
                'years' => '2006 a 2011'
            ],
            
            [
                'id' => 5836,
                'brand_id' => 116,
                'fipe_code' => '516173-8',
                'model' => 'VM 270 4x2 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 5866,
                'brand_id' => 116,
                'fipe_code' => '516144-4',
                'model' => 'VM 270 6x2 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 5862,
                'brand_id' => 116,
                'fipe_code' => '516140-1',
                'model' => 'VM 270 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 6685,
                'brand_id' => 116,
                'fipe_code' => '516178-9',
                'model' => 'VM 270 8x2 2p (diesel) (E5)',
                'years' => '2013 a 2022'
            ],
            
            [
                'id' => 6686,
                'brand_id' => 116,
                'fipe_code' => '516177-0',
                'model' => 'VM 270 8x4 2p (diesel) (E5)',
                'years' => '2013 a 2022'
            ],
            
            [
                'id' => 5855,
                'brand_id' => 116,
                'fipe_code' => '516145-2',
                'model' => 'VM 270 ATHOR 6x2 2p (diesel) (E5)',
                'years' => '2012 a 2014'
            ],
            
            [
                'id' => 9185,
                'brand_id' => 116,
                'fipe_code' => '516200-9',
                'model' => 'VM 270 CITY 4x2 2p (diesel)(E5)',
                'years' => '2021 a 2022'
            ],
            
            [
                'id' => 9161,
                'brand_id' => 116,
                'fipe_code' => '516199-1',
                'model' => 'VM 270 CITY 6x2 2p (diesel)(E5)',
                'years' => '2021 a 2022'
            ],
            
            [
                'id' => 10538,
                'brand_id' => 116,
                'fipe_code' => '516254-8',
                'model' => 'VM 290 4x2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10539,
                'brand_id' => 116,
                'fipe_code' => '516252-1',
                'model' => 'VM 290 4x2 2p City (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10540,
                'brand_id' => 116,
                'fipe_code' => '516255-6',
                'model' => 'VM 290 6X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10541,
                'brand_id' => 116,
                'fipe_code' => '516253-0',
                'model' => 'VM 290 6x2 2p City (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10608,
                'brand_id' => 116,
                'fipe_code' => '516260-2',
                'model' => 'VM 290 6x4 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10542,
                'brand_id' => 116,
                'fipe_code' => '516258-0',
                'model' => 'VM 290 8X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10691,
                'brand_id' => 116,
                'fipe_code' => '516272-6',
                'model' => 'VM 290 8X4 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 3953,
                'brand_id' => 116,
                'fipe_code' => '516092-8',
                'model' => 'VM 310 4x2 2p (diesel)',
                'years' => '2006 a 2011'
            ],
            
            [
                'id' => 3954,
                'brand_id' => 116,
                'fipe_code' => '516093-6',
                'model' => 'VM 310 6x4 2p (diesel)',
                'years' => '2006 a 2011'
            ],
            
            [
                'id' => 5865,
                'brand_id' => 116,
                'fipe_code' => '516143-6',
                'model' => 'VM 330 4x2 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 6081,
                'brand_id' => 116,
                'fipe_code' => '516174-6',
                'model' => 'VM 330 6x2 2p (diesel)(E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 5863,
                'brand_id' => 116,
                'fipe_code' => '516141-0',
                'model' => 'VM 330 6x4 2p (diesel) (E5)',
                'years' => '2012 a 2022'
            ],
            
            [
                'id' => 6687,
                'brand_id' => 116,
                'fipe_code' => '516179-7',
                'model' => 'VM 330 8x2 2p (diesel) (E5)',
                'years' => '2013 a 2022'
            ],
            
            [
                'id' => 6688,
                'brand_id' => 116,
                'fipe_code' => '516180-0',
                'model' => 'VM 330 8x4 2p (diesel) (E5)',
                'years' => '2013 a 2022'
            ],
            
            [
                'id' => 10543,
                'brand_id' => 116,
                'fipe_code' => '516256-4',
                'model' => 'VM 360 4X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10544,
                'brand_id' => 116,
                'fipe_code' => '516257-2',
                'model' => 'VM 360 6x2 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10648,
                'brand_id' => 116,
                'fipe_code' => '516270-0',
                'model' => 'VM 360 6x4 2p (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10545,
                'brand_id' => 116,
                'fipe_code' => '516259-9',
                'model' => 'VM 360 8X2 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10649,
                'brand_id' => 116,
                'fipe_code' => '516271-8',
                'model' => 'VM 360 8X4 2p (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 3798,
                'brand_id' => 116,
                'fipe_code' => '516072-3',
                'model' => 'VM-17 210 4x2/ VM 210 2p (diesel)',
                'years' => '2003 a 2011'
            ],
            
            [
                'id' => 3799,
                'brand_id' => 116,
                'fipe_code' => '516073-1',
                'model' => 'VM-17 240 4x2 2p (diesel)',
                'years' => '2004 a 2005'
            ],
            
            [
                'id' => 3800,
                'brand_id' => 116,
                'fipe_code' => '516074-0',
                'model' => 'VM-23 210/ VM 210 6x2 2p (diesel)',
                'years' => '2004 a 2011'
            ],
            
            [
                'id' => 3801,
                'brand_id' => 116,
                'fipe_code' => '516075-8',
                'model' => 'VM-23 240 6x2 2p (diesel)',
                'years' => '2003 a 2005'
            ]
            ];
            
            $CICCOBUSModels = [
            [
                'id' => 3999,
                'brand_id' => 121,
                'fipe_code' => '519004-5',
                'model' => 'Alleanza Gran Escolar 2p (diesel)',
                'years' => '2006 a 2008'
            ],
            
            [
                'id' => 4000,
                'brand_id' => 121,
                'fipe_code' => '519006-1',
                'model' => 'Alleanza Gran Exe./Turismo 2p (diesel)',
                'years' => '2006 a 2008'
            ],
            
            [
                'id' => 4001,
                'brand_id' => 121,
                'fipe_code' => '519005-3',
                'model' => 'Alleanza Gran Urbano/SPTRANS 2p (die.)',
                'years' => '2006 a 2008'
            ],
            
            [
                'id' => 4002,
                'brand_id' => 121,
                'fipe_code' => '519001-0',
                'model' => 'Alleanza Mini Escolar 2p (diesel)',
                'years' => '2006 a 2008'
            ],
            
            [
                'id' => 4003,
                'brand_id' => 121,
                'fipe_code' => '519003-7',
                'model' => 'Alleanza Mini Exe./Turismo 2p (diesel)',
                'years' => '2006 a 2008'
            ],
            
            [
                'id' => 4004,
                'brand_id' => 121,
                'fipe_code' => '519002-9',
                'model' => 'Alleanza Mini Urbano/SPTRANS 2p (die.)',
                'years' => '2006 a 2008'
            ]
            ];
            
            $IVECOModels = [
            [
                'id' => 6731,
                'brand_id' => 122,
                'fipe_code' => '506137-7',
                'model' => 'CityClass ESCOLAR (diesel)(E5)',
                'years' => '2013 a 2016'
            ],
            
            [
                'id' => 6732,
                'brand_id' => 122,
                'fipe_code' => '506139-3',
                'model' => 'CityClass EXECUTIVO/TURISMO (diesel)(E5)',
                'years' => '2013 a 2016'
            ],
            
            [
                'id' => 4014,
                'brand_id' => 122,
                'fipe_code' => '506022-2',
                'model' => 'CityClass EXECUTIVO/TURISMO 1p (diesel)',
                'years' => '2003 a 2007'
            ],
            
            [
                'id' => 6733,
                'brand_id' => 122,
                'fipe_code' => '506138-5',
                'model' => 'CityClass FRETAMENTO (diesel)(E5)',
                'years' => '2013 a 2016'
            ],
            
            [
                'id' => 4013,
                'brand_id' => 122,
                'fipe_code' => '506021-4',
                'model' => 'CityClass URBANO/ESCOLAR/SPTRANS 1p',
                'years' => '2003 a 2007'
            ],
            
            [
                'id' => 5202,
                'brand_id' => 122,
                'fipe_code' => '506066-4',
                'model' => 'CURSOR 450E 33 T 2p (diesel)',
                'years' => '2009 a 2012'
            ],
            
            [
                'id' => 5409,
                'brand_id' => 122,
                'fipe_code' => '506073-7',
                'model' => 'DAILY CHAS. 70C16HD CD MASSIMO 4p (dies)',
                'years' => '2011 a 2012'
            ],
            
            [
                'id' => 4015,
                'brand_id' => 122,
                'fipe_code' => '506017-6',
                'model' => 'DAILY CHASSI  59.12/ 60.12 2p  (diesel)',
                'years' => '2002 a 2004'
            ],
            
            [
                'id' => 4016,
                'brand_id' => 122,
                'fipe_code' => '506001-0',
                'model' => 'DAILY CHASSI 35.10/ 35.13/ 40.13 2p',
                'years' => '1997 a 2007'
            ],
            
            [
                'id' => 4017,
                'brand_id' => 122,
                'fipe_code' => '506031-1',
                'model' => 'DAILY CHASSI 35.10/35.13/40.13 CD 3p',
                'years' => '2005 a 2007'
            ],
            
            [
                'id' => 5991,
                'brand_id' => 122,
                'fipe_code' => '506077-0',
                'model' => 'DAILY CHASSI 35S14 2p (dies.)(E5)',
                'years' => '2013 a 2019'
            ],
            
            [
                'id' => 4463,
                'brand_id' => 122,
                'fipe_code' => '506041-9',
                'model' => 'DAILY CHASSI 35S14 2p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 5099,
                'brand_id' => 122,
                'fipe_code' => '506059-1',
                'model' => 'DAILY CHASSI 35S14 CD 4p (diesel)',
                'years' => '2010 a 2012'
            ],
            
            [
                'id' => 6079,
                'brand_id' => 122,
                'fipe_code' => '506117-2',
                'model' => 'DAILY CHASSI 35S14 CD 4p (diesel)(E5)',
                'years' => '2013 a 2019'
            ],
            
            [
                'id' => 7682,
                'brand_id' => 122,
                'fipe_code' => '506148-2',
                'model' => 'DAILY CHASSI 40S14 2p (diesel) (E5)',
                'years' => '2017 a 2019'
            ],
            
            [
                'id' => 4664,
                'brand_id' => 122,
                'fipe_code' => '506050-8',
                'model' => 'DAILY CHASSI 45S14 2p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 5100,
                'brand_id' => 122,
                'fipe_code' => '506060-5',
                'model' => 'DAILY CHASSI 45S14 CD 4p (diesel)',
                'years' => '2010 a 2012'
            ],
            
            [
                'id' => 5992,
                'brand_id' => 122,
                'fipe_code' => '506079-6',
                'model' => 'DAILY CHASSI 45S17 2p (dies.)(E5)',
                'years' => '2013 a 2017'
            ],
            
            [
                'id' => 5993,
                'brand_id' => 122,
                'fipe_code' => '506078-8',
                'model' => 'DAILY CHASSI 45S17 CD 4p (dies.)(E5)',
                'years' => '2013 a 2018'
            ],
            
            [
                'id' => 4018,
                'brand_id' => 122,
                'fipe_code' => '506002-8',
                'model' => 'DAILY CHASSI 49.10 2p (diesel)',
                'years' => '1997 a 1999'
            ],
            
            [
                'id' => 4019,
                'brand_id' => 122,
                'fipe_code' => '506003-6',
                'model' => 'DAILY CHASSI 49.12/ 50.13 2p (diesel)',
                'years' => '1998 a 2007'
            ],
            
            [
                'id' => 4020,
                'brand_id' => 122,
                'fipe_code' => '506032-0',
                'model' => 'DAILY CHASSI 50.13 CD 3p (diesel)',
                'years' => '2006 a 2007'
            ],
            
            [
                'id' => 4464,
                'brand_id' => 122,
                'fipe_code' => '506042-7',
                'model' => 'DAILY CHASSI 55C16 2p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 5101,
                'brand_id' => 122,
                'fipe_code' => '506061-3',
                'model' => 'DAILY CHASSI 55C16 CD 4p (diesel)',
                'years' => '2010 a 2012'
            ],
            
            [
                'id' => 5994,
                'brand_id' => 122,
                'fipe_code' => '506080-0',
                'model' => 'DAILY CHASSI 55C17 2p (dies.)(E5)',
                'years' => '2013 a 2019'
            ],
            
            [
                'id' => 5995,
                'brand_id' => 122,
                'fipe_code' => '506081-8',
                'model' => 'DAILY CHASSI 55C17 CD 4p (dies.)(E5)',
                'years' => '2013 a 2015'
            ],
            
            [
                'id' => 4021,
                'brand_id' => 122,
                'fipe_code' => '506024-9',
                'model' => 'DAILY CHASSI 70.12/ 70.13 2p (diesel)',
                'years' => '2004 a 2007'
            ],
            
            [
                'id' => 4022,
                'brand_id' => 122,
                'fipe_code' => '506033-8',
                'model' => 'DAILY CHASSI 70.13 CD 3p (diesel)',
                'years' => '2006 a 2007'
            ],
            
            [
                'id' => 4672,
                'brand_id' => 122,
                'fipe_code' => '506052-4',
                'model' => 'DAILY CHASSI 70C16 2p (diesel)',
                'years' => '2008 a 2011'
            ],
            
            [
                'id' => 5102,
                'brand_id' => 122,
                'fipe_code' => '506062-1',
                'model' => 'DAILY CHASSI 70C16 CD 4p (diesel)',
                'years' => '2009 a 2010'
            ],
            
            [
                'id' => 5394,
                'brand_id' => 122,
                'fipe_code' => '506070-2',
                'model' => 'DAILY CHASSI 70C16 HD MASSIMO 2p (diesel',
                'years' => '2011 a 2012'
            ],
            
            [
                'id' => 4023,
                'brand_id' => 122,
                'fipe_code' => '506004-4',
                'model' => 'DAILY FURG/ CITY FURG.35.10/40.13 4p',
                'years' => '1997 a 2007'
            ],
            
            [
                'id' => 4024,
                'brand_id' => 122,
                'fipe_code' => '506005-2',
                'model' => 'DAILY FURGAO 49.10 4p (diesel)',
                'years' => '1997 a 1999'
            ],
            
            [
                'id' => 4025,
                'brand_id' => 122,
                'fipe_code' => '506006-0',
                'model' => 'DAILY FURGAO 49.12/ 50.13 4p (diesel)',
                'years' => '1998 a 2007'
            ],
            
            [
                'id' => 4026,
                'brand_id' => 122,
                'fipe_code' => '506030-3',
                'model' => 'DAILY FURGÃO CITY 38.13 4p (diesel)',
                'years' => '2006 a 2007'
            ],
            
            [
                'id' => 4465,
                'brand_id' => 122,
                'fipe_code' => '506043-5',
                'model' => 'DAILY FURGONE 35S14 4p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 5996,
                'brand_id' => 122,
                'fipe_code' => '506084-2',
                'model' => 'DAILY GRAN FURGONE 35S14 4p (dies.)(E5)',
                'years' => '2013 a 2019'
            ],
            
            [
                'id' => 4466,
                'brand_id' => 122,
                'fipe_code' => '506044-3',
                'model' => 'DAILY GRAN FURGONE 35S14 4p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 4665,
                'brand_id' => 122,
                'fipe_code' => '506051-6',
                'model' => 'DAILY GRAN FURGONE 45S14 2p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 5997,
                'brand_id' => 122,
                'fipe_code' => '506085-0',
                'model' => 'DAILY GRAN FURGONE 45S17 4p (dies.)(E5)',
                'years' => '2013 a 2019'
            ],
            
            [
                'id' => 4467,
                'brand_id' => 122,
                'fipe_code' => '506046-0',
                'model' => 'DAILY GRAN FURGONE 55C16 4p ( diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 5998,
                'brand_id' => 122,
                'fipe_code' => '506086-9',
                'model' => 'DAILY GRAN FURGONE 55C17 4p (dies.)(E5)',
                'years' => '2013 a 2019'
            ],
            
            [
                'id' => 4027,
                'brand_id' => 122,
                'fipe_code' => '506016-8',
                'model' => 'DAILY MAX VAN 40.12/40.13 2p TDI 15L+2',
                'years' => '2000 a 2007'
            ],
            
            [
                'id' => 4028,
                'brand_id' => 122,
                'fipe_code' => '506023-0',
                'model' => 'DAILY MAX VAN 49.12/50.13 TB INT. 2p',
                'years' => '2004 a 2007'
            ],
            
            [
                'id' => 4468,
                'brand_id' => 122,
                'fipe_code' => '506047-8',
                'model' => 'DAILY MAXI FURGONE 55C16 4p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 7112,
                'brand_id' => 122,
                'fipe_code' => '506144-0',
                'model' => 'DAILY MAXI FURGONE 55C17 4p (dies.)(E5)',
                'years' => '2014 a 2019'
            ],
            
            [
                'id' => 6734,
                'brand_id' => 122,
                'fipe_code' => '506135-0',
                'model' => 'DAILY Minibus EXE/TUR. 45S17 (dies.)(E5)',
                'years' => '2013 a 2020'
            ],
            
            [
                'id' => 6505,
                'brand_id' => 122,
                'fipe_code' => '506127-0',
                'model' => 'DAILY Minibus EXE/TUR. 55C17 (dies.)(E5)',
                'years' => '2013 a 2016'
            ],
            
            [
                'id' => 6735,
                'brand_id' => 122,
                'fipe_code' => '506134-2',
                'model' => 'DAILY Minibus FRETAM. 45S17 (dies.) (E5)',
                'years' => '2013 a 2020'
            ],
            
            [
                'id' => 8121,
                'brand_id' => 122,
                'fipe_code' => '506151-2',
                'model' => 'DAILY Minibus FRETAM. 50C17 (dies.)(E5)',
                'years' => '2018 a 2020'
            ],
            
            [
                'id' => 6736,
                'brand_id' => 122,
                'fipe_code' => '506136-9',
                'model' => 'DAILY Minibus FRETAM. 55C17 (dies.) (E5)',
                'years' => '2013 a 2016'
            ],
            
            [
                'id' => 7253,
                'brand_id' => 122,
                'fipe_code' => '506146-6',
                'model' => 'DAILY MinibusTURISMO 50C17 (dies.)(E5)',
                'years' => '2015 a 2020'
            ],
            
            [
                'id' => 5999,
                'brand_id' => 122,
                'fipe_code' => '506082-6',
                'model' => 'DAILY TRUCK CHAS. 70C17 2p (dies.)(E5)',
                'years' => '2013 a 2019'
            ],
            
            [
                'id' => 6000,
                'brand_id' => 122,
                'fipe_code' => '506083-4',
                'model' => 'DAILY TRUCK CHAS. 70C17 CD 4p(dies.)(E5)',
                'years' => '2013 a 2020'
            ],
            
            [
                'id' => 6254,
                'brand_id' => 122,
                'fipe_code' => '506119-9',
                'model' => 'DAILY VETRATO 45S17 4p (diesel)(E5)',
                'years' => '2013 a 2020'
            ],
            
            [
                'id' => 9005,
                'brand_id' => 122,
                'fipe_code' => '506168-7',
                'model' => 'DAILY VETRATO 50C17 4p (diesel)(E5)',
                'years' => '2019 a 2020'
            ],
            
            [
                'id' => 4469,
                'brand_id' => 122,
                'fipe_code' => '506045-1',
                'model' => 'DAILY VETRATO 55C16 4p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 6255,
                'brand_id' => 122,
                'fipe_code' => '506120-2',
                'model' => 'DAILY VETRATO 55C17 4p (diesel)(E5)',
                'years' => '2013 a 2019'
            ],
            
            [
                'id' => 4029,
                'brand_id' => 122,
                'fipe_code' => '506007-9',
                'model' => 'EUROCARGO 120-E15 2p (diesel)',
                'years' => '1999 a 1999'
            ],
            
            [
                'id' => 4030,
                'brand_id' => 122,
                'fipe_code' => '506008-7',
                'model' => 'EUROCARGO 120-E15 3-Eixos 2p (diesel)',
                'years' => '1999 a 1999'
            ],
            
            [
                'id' => 4031,
                'brand_id' => 122,
                'fipe_code' => '506009-5',
                'model' => 'EUROCARGO 150-E18 2p (diesel)',
                'years' => '1998 a 1999'
            ],
            
            [
                'id' => 4032,
                'brand_id' => 122,
                'fipe_code' => '506010-9',
                'model' => 'EUROCARGO 150-E18 3-Eixos 2p (diesel)',
                'years' => '1998 a 1999'
            ],
            
            [
                'id' => 4033,
                'brand_id' => 122,
                'fipe_code' => '506011-7',
                'model' => 'EUROCARGO 160-E21 2p (diesel)',
                'years' => '1998 a 2003'
            ],
            
            [
                'id' => 4034,
                'brand_id' => 122,
                'fipe_code' => '506012-5',
                'model' => 'EUROCARGO 160-E21 3-Eixos 2p (diesel)',
                'years' => '1998 a 2003'
            ],
            
            [
                'id' => 4035,
                'brand_id' => 122,
                'fipe_code' => '506028-1',
                'model' => 'EUROCARGO 170-E21 2p (diesel)',
                'years' => '2005 a 2006'
            ],
            
            [
                'id' => 4036,
                'brand_id' => 122,
                'fipe_code' => '506029-0',
                'model' => 'EUROCARGO 170-E21 3-Eixos 2p (diesel)',
                'years' => '2005 a 2006'
            ],
            
            [
                'id' => 4038,
                'brand_id' => 122,
                'fipe_code' => '506019-2',
                'model' => 'EUROCARGO 170-E22 3-Eixos 2p (diesel)',
                'years' => '2003 a 2011'
            ],
            
            [
                'id' => 4039,
                'brand_id' => 122,
                'fipe_code' => '506034-6',
                'model' => 'EUROCARGO 230-E22 3-Eixos 2p (diesel)',
                'years' => '2006 a 2011'
            ],
            
            [
                'id' => 4964,
                'brand_id' => 122,
                'fipe_code' => '506058-3',
                'model' => 'EUROCARGO 260-E25 6x4 2p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 4181,
                'brand_id' => 122,
                'fipe_code' => '506039-7',
                'model' => 'EUROCARGO CAVALLINO 450-E32 T 2p (dies.)',
                'years' => '2007 a 2012'
            ],
            
            [
                'id' => 4037,
                'brand_id' => 122,
                'fipe_code' => '506018-4',
                'model' => 'EUROCARGO/ATTACK 170-E22 2p (diesel)',
                'years' => '2003 a 2012'
            ],
            
            [
                'id' => 4180,
                'brand_id' => 122,
                'fipe_code' => '506040-0',
                'model' => 'EUROCARGO/ATTACK 230-E24 3-E. 2p (dies.)',
                'years' => '2006 a 2012'
            ],
            
            [
                'id' => 4040,
                'brand_id' => 122,
                'fipe_code' => '506013-3',
                'model' => 'EUROTECH MP 450-E37 2p (diesel)',
                'years' => '1998 a 2006'
            ],
            
            [
                'id' => 4041,
                'brand_id' => 122,
                'fipe_code' => '506020-6',
                'model' => 'EUROTECH TZ 740-E42 6x4 2p (diesel)',
                'years' => '2002 a 2006'
            ],
            
            [
                'id' => 4042,
                'brand_id' => 122,
                'fipe_code' => '506026-5',
                'model' => 'EUROTRAKKER 380-E38 H 2p (diesel)',
                'years' => '2004 a 2009'
            ],
            
            [
                'id' => 4043,
                'brand_id' => 122,
                'fipe_code' => '506027-3',
                'model' => 'EUROTRAKKER 720-E42 HT 2p (diesel)',
                'years' => '2004 a 2009'
            ],
            
            [
                'id' => 4044,
                'brand_id' => 122,
                'fipe_code' => '506014-1',
                'model' => 'EUROTRAKKER MP 450-E37 2p (diesel)',
                'years' => '1997 a 1999'
            ],
            
            [
                'id' => 4045,
                'brand_id' => 122,
                'fipe_code' => '506015-0',
                'model' => 'POWERSTAR 450 E37 (diesel)',
                'years' => '2001 a 2004'
            ],
            
            [
                'id' => 11067,
                'brand_id' => 122,
                'fipe_code' => '506183-0',
                'model' => 'S-WAY 480 4x2 (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10236,
                'brand_id' => 122,
                'fipe_code' => '506172-5',
                'model' => 'S-WAY 480 6x2 (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 11162,
                'brand_id' => 122,
                'fipe_code' => '506184-9',
                'model' => 'S-WAY 480 Grand Cab 4x2 (diesel)(E6)',
                'years' => '2025 a Zero Km'
            ],
            
            [
                'id' => 11163,
                'brand_id' => 122,
                'fipe_code' => '506186-5',
                'model' => 'S-WAY 480 Grand Cab 6x2 (diesel)(E6)',
                'years' => '2025 a Zero Km'
            ],
            
            [
                'id' => 11164,
                'brand_id' => 122,
                'fipe_code' => '506185-7',
                'model' => 'S-WAY 480 Mega Cab 4x2 (diesel)(E6)',
                'years' => '2025 a Zero Km'
            ],
            
            [
                'id' => 11165,
                'brand_id' => 122,
                'fipe_code' => '506187-3',
                'model' => 'S-WAY 480 Mega Cab 6x2 (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10237,
                'brand_id' => 122,
                'fipe_code' => '506173-3',
                'model' => 'S-WAY 540 6x4 (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 11166,
                'brand_id' => 122,
                'fipe_code' => '506189-0',
                'model' => 'S-WAY 540 Grand Cab 6x4 (diesel)(E6)',
                'years' => '2025 a Zero Km'
            ],
            
            [
                'id' => 11167,
                'brand_id' => 122,
                'fipe_code' => '506188-1',
                'model' => 'S-WAY 540 Mega Cab 6x4 (diesel)(E6)',
                'years' => '2025 a Zero Km'
            ],
            
            [
                'id' => 6286,
                'brand_id' => 122,
                'fipe_code' => '506122-9',
                'model' => 'STRALIS 450-S33T TA 2p (diesel)(E5)',
                'years' => '2013 a 2015'
            ],
            
            [
                'id' => 6287,
                'brand_id' => 122,
                'fipe_code' => '506121-0',
                'model' => 'STRALIS 450-S33T TB 2p (diesel)(E5)',
                'years' => '2013 a 2015'
            ],
            
            [
                'id' => 6001,
                'brand_id' => 122,
                'fipe_code' => '506094-0',
                'model' => 'STRALIS 460-S36T TA 2p (diesel)(E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 6002,
                'brand_id' => 122,
                'fipe_code' => '506093-1',
                'model' => 'STRALIS 460-S36T TB 2p (diesel)(E5)',
                'years' => '2013 a 2015'
            ],
            
            [
                'id' => 6003,
                'brand_id' => 122,
                'fipe_code' => '506096-6',
                'model' => 'STRALIS 490-S40T TA 2p (diesel)(E5)',
                'years' => '2012 a 2015'
            ],
            
            [
                'id' => 6004,
                'brand_id' => 122,
                'fipe_code' => '506098-2',
                'model' => 'STRALIS 490-S40T TA EUROT.(dies)(E5)',
                'years' => '2013 a 2019'
            ],
            
            [
                'id' => 6005,
                'brand_id' => 122,
                'fipe_code' => '506095-8',
                'model' => 'STRALIS 490-S40T TB 2p (diesel)(E5)',
                'years' => '2013 a 2015'
            ],
            
            [
                'id' => 6006,
                'brand_id' => 122,
                'fipe_code' => '506097-4',
                'model' => 'STRALIS 490-S40T TB EUROT.(dies)(E5)',
                'years' => '2013 a 2015'
            ],
            
            [
                'id' => 6007,
                'brand_id' => 122,
                'fipe_code' => '506100-8',
                'model' => 'STRALIS 490-S44T TA 2p (diesel)(E5)',
                'years' => '2013 a 2015'
            ],
            
            [
                'id' => 6008,
                'brand_id' => 122,
                'fipe_code' => '506101-6',
                'model' => 'STRALIS 490-S44T TA EUROT.(dies)(E5)',
                'years' => '2013 a 2019'
            ],
            
            [
                'id' => 6009,
                'brand_id' => 122,
                'fipe_code' => '506099-0',
                'model' => 'STRALIS 490-S44T TB 2p (diesel)(E5)',
                'years' => '2013 a 2015'
            ],
            
            [
                'id' => 6288,
                'brand_id' => 122,
                'fipe_code' => '506124-5',
                'model' => 'STRALIS 500-S33T TA 6x2 2p (diesel)(E5)',
                'years' => '2013 a 2015'
            ],
            
            [
                'id' => 6289,
                'brand_id' => 122,
                'fipe_code' => '506123-7',
                'model' => 'STRALIS 500-S33T TB 6x2 2p (diesel)(E5)',
                'years' => '2013 a 2015'
            ],
            
            [
                'id' => 6010,
                'brand_id' => 122,
                'fipe_code' => '506103-2',
                'model' => 'STRALIS 530-S36T TA 6x2 2p (diesel)(E5)',
                'years' => '2013 a 2015'
            ],
            
            [
                'id' => 6011,
                'brand_id' => 122,
                'fipe_code' => '506102-4',
                'model' => 'STRALIS 530-S36T TB 6x2 2p (diesel)(E5)',
                'years' => '2013 a 2015'
            ],
            
            [
                'id' => 6012,
                'brand_id' => 122,
                'fipe_code' => '506105-9',
                'model' => 'STRALIS 600-S40T TA 6x2 2p (diesel)(E5)',
                'years' => '2013 a 2015'
            ],
            
            [
                'id' => 6013,
                'brand_id' => 122,
                'fipe_code' => '506107-5',
                'model' => 'STRALIS 600-S40T TA 6x2 EUROT.(dies)(E5)',
                'years' => '2013 a 2019'
            ],
            
            [
                'id' => 6014,
                'brand_id' => 122,
                'fipe_code' => '506104-0',
                'model' => 'STRALIS 600-S40T TB 6x2 2p (diesel)(E5)',
                'years' => '2013 a 2015'
            ],
            
            [
                'id' => 6015,
                'brand_id' => 122,
                'fipe_code' => '506106-7',
                'model' => 'STRALIS 600-S40T TB 6x2 EUROT.(dies)(E5)',
                'years' => '2013 a 2015'
            ],
            
            [
                'id' => 6016,
                'brand_id' => 122,
                'fipe_code' => '506109-1',
                'model' => 'STRALIS 600-S44T TA 6x2 2p (diesel)(E5)',
                'years' => '2013 a 2015'
            ],
            
            [
                'id' => 6017,
                'brand_id' => 122,
                'fipe_code' => '506111-3',
                'model' => 'STRALIS 600-S44T TA 6x2 EUROT.(dies)(E5)',
                'years' => '2013 a 2019'
            ],
            
            [
                'id' => 6018,
                'brand_id' => 122,
                'fipe_code' => '506108-3',
                'model' => 'STRALIS 600-S44T TB 6x2 2p (diesel)(E5)',
                'years' => '2013 a 2015'
            ],
            
            [
                'id' => 6019,
                'brand_id' => 122,
                'fipe_code' => '506110-5',
                'model' => 'STRALIS 600-S44T TB 6x2 EUROT.(dies)(E5)',
                'years' => '2013 a 2015'
            ],
            
            [
                'id' => 6020,
                'brand_id' => 122,
                'fipe_code' => '506114-8',
                'model' => 'STRALIS 800-S44T TA 6x4 2p (diesel)(E5)',
                'years' => '2013 a 2015'
            ],
            
            [
                'id' => 6021,
                'brand_id' => 122,
                'fipe_code' => '506116-4',
                'model' => 'STRALIS 800-S44T TA 6x4 EUROT.(dies)(E5)',
                'years' => '2013 a 2019'
            ],
            
            [
                'id' => 6022,
                'brand_id' => 122,
                'fipe_code' => '506112-1',
                'model' => 'STRALIS 800-S44T TB 6x4 2p (diesel)(E5)',
                'years' => '2013 a 2015'
            ],
            
            [
                'id' => 6023,
                'brand_id' => 122,
                'fipe_code' => '506115-6',
                'model' => 'STRALIS 800-S44T TB 6x4 EUROT.(dies)(E5)',
                'years' => '2013 a 2015'
            ],
            
            [
                'id' => 6198,
                'brand_id' => 122,
                'fipe_code' => '506118-0',
                'model' => 'STRALIS 800-S48T TA 6x4 EUROT.(dies)(E5)',
                'years' => '2013 a 2017'
            ],
            
            [
                'id' => 4046,
                'brand_id' => 122,
                'fipe_code' => '506025-7',
                'model' => 'STRALIS HD 450-S38T 2p (diesel)',
                'years' => '2005 a 2009'
            ],
            
            [
                'id' => 4047,
                'brand_id' => 122,
                'fipe_code' => '506035-4',
                'model' => 'STRALIS HD 450-S42T 2p (diesel)',
                'years' => '2006 a 2007'
            ],
            
            [
                'id' => 4471,
                'brand_id' => 122,
                'fipe_code' => '506049-4',
                'model' => 'STRALIS HD 490-S42T 2p (diesel)',
                'years' => '2008 a 2010'
            ],
            
            [
                'id' => 4049,
                'brand_id' => 122,
                'fipe_code' => '506037-0',
                'model' => 'STRALIS HD 570-S42T 3-Eixos 2p (diesel)',
                'years' => '2006 a 2010'
            ],
            
            [
                'id' => 4050,
                'brand_id' => 122,
                'fipe_code' => '506038-9',
                'model' => 'STRALIS HD 740-S42TZ 3-Eixos 2p (diesel)',
                'years' => '2006 a 2010'
            ],
            
            [
                'id' => 5229,
                'brand_id' => 122,
                'fipe_code' => '506069-9',
                'model' => 'STRALIS HD 740-S46TZ 3-Eixos 2p (diesel)',
                'years' => '2010 a 2012'
            ],
            
            [
                'id' => 4470,
                'brand_id' => 122,
                'fipe_code' => '506048-6',
                'model' => 'STRALIS HD/NR 490-S38T 2p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 4048,
                'brand_id' => 122,
                'fipe_code' => '506036-2',
                'model' => 'STRALIS HD/NR 570-S38T 3-Eixos 2p (dies)',
                'years' => '2006 a 2012'
            ],
            
            [
                'id' => 8678,
                'brand_id' => 122,
                'fipe_code' => '506155-5',
                'model' => 'STRALIS HI-ROAD 460S36T 4x2 (dies.)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 8679,
                'brand_id' => 122,
                'fipe_code' => '506156-3',
                'model' => 'STRALIS HI-ROAD 490S40T 4x2 (dies.)(E5)',
                'years' => '2019 a 2020'
            ],
            
            [
                'id' => 8680,
                'brand_id' => 122,
                'fipe_code' => '506157-1',
                'model' => 'STRALIS HI-ROAD 490S44T 4x2 (dies.) (E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 8681,
                'brand_id' => 122,
                'fipe_code' => '506158-0',
                'model' => 'STRALIS HI-ROAD 600S40T 6x2 (dies.)(E5)',
                'years' => '2019 a 2020'
            ],
            
            [
                'id' => 8682,
                'brand_id' => 122,
                'fipe_code' => '506159-8',
                'model' => 'STRALIS HI-ROAD 600S44T 6x2 (dies.)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 9506,
                'brand_id' => 122,
                'fipe_code' => '506170-9',
                'model' => 'STRALIS HI-ROAD 800-S44TZ 6x4 (die.)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 6621,
                'brand_id' => 122,
                'fipe_code' => '506128-8',
                'model' => 'STRALIS HI-WAY 490-S44T 4x2 (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 6622,
                'brand_id' => 122,
                'fipe_code' => '506129-6',
                'model' => 'STRALIS HI-WAY 490-S48T 4x2 (diesel)(E5)',
                'years' => '2013 a 2015'
            ],
            
            [
                'id' => 6623,
                'brand_id' => 122,
                'fipe_code' => '506130-0',
                'model' => 'STRALIS HI-WAY 600-S44T 6x2 (diesel)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 6624,
                'brand_id' => 122,
                'fipe_code' => '506131-8',
                'model' => 'STRALIS HI-WAY 600-S48T 6x2 (diesel)(E5)',
                'years' => '2013 a 2023'
            ],
            
            [
                'id' => 6882,
                'brand_id' => 122,
                'fipe_code' => '506141-5',
                'model' => 'STRALIS HI-WAY 600-S56T 6x2 (dies.)(E5)',
                'years' => '2013 a 2022'
            ],
            
            [
                'id' => 6625,
                'brand_id' => 122,
                'fipe_code' => '506132-6',
                'model' => 'STRALIS HI-WAY 800-S48TZ 6x4 (dies.)(E5)',
                'years' => '2013 a 2023'
            ],
            
            [
                'id' => 6626,
                'brand_id' => 122,
                'fipe_code' => '506133-4',
                'model' => 'STRALIS HI-WAY 800-S56TZ 6x4 (dies.)(E5)',
                'years' => '2013 a 2023'
            ],
            
            [
                'id' => 5203,
                'brand_id' => 122,
                'fipe_code' => '506063-0',
                'model' => 'STRALIS NR 490-S41T 2p (diesel)',
                'years' => '2010 a 2012'
            ],
            
            [
                'id' => 5227,
                'brand_id' => 122,
                'fipe_code' => '506067-2',
                'model' => 'STRALIS NR 490-S46T 2p (diesel)',
                'years' => '2010 a 2012'
            ],
            
            [
                'id' => 5204,
                'brand_id' => 122,
                'fipe_code' => '506064-8',
                'model' => 'STRALIS NR 570-S41T 3-Eixos 2p (diesel)',
                'years' => '2010 a 2012'
            ],
            
            [
                'id' => 5228,
                'brand_id' => 122,
                'fipe_code' => '506068-0',
                'model' => 'STRALIS NR 570-S46T 3-Eixos 2p (diesel)',
                'years' => '2010 a 2012'
            ],
            
            [
                'id' => 5205,
                'brand_id' => 122,
                'fipe_code' => '506065-6',
                'model' => 'STRALIS NR 740-S41T 3-Eixos 2p (diesel)',
                'years' => '2010 a 2012'
            ],
            
            [
                'id' => 8761,
                'brand_id' => 122,
                'fipe_code' => '506161-0',
                'model' => 'TECTOR 11-190 4x2 (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 10904,
                'brand_id' => 122,
                'fipe_code' => '506182-2',
                'model' => 'TECTOR 11-190 4x2 (diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10238,
                'brand_id' => 122,
                'fipe_code' => '506174-1',
                'model' => 'TECTOR 15-210 4x2 2p (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7113,
                'brand_id' => 122,
                'fipe_code' => '506143-1',
                'model' => 'TECTOR 150E21 ATTACK ECO. 4x2(dies.)(E5)',
                'years' => '2014 a 2023'
            ],
            
            [
                'id' => 10239,
                'brand_id' => 122,
                'fipe_code' => '506175-0',
                'model' => 'TECTOR 17-210 4x2 2p (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10773,
                'brand_id' => 122,
                'fipe_code' => '506179-2',
                'model' => 'TECTOR 17-280 4x2 (diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 8807,
                'brand_id' => 122,
                'fipe_code' => '506162-8',
                'model' => 'TECTOR 17-280 4x2 (diesel)(E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 8808,
                'brand_id' => 122,
                'fipe_code' => '506163-6',
                'model' => 'TECTOR 17-300 4x2 (diesel)(E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 8809,
                'brand_id' => 122,
                'fipe_code' => '506166-0',
                'model' => 'TECTOR 17-300T 4x2 (diesel)(E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 10240,
                'brand_id' => 122,
                'fipe_code' => '506176-8',
                'model' => 'TECTOR 17-320 4x2 2p (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 7650,
                'brand_id' => 122,
                'fipe_code' => '506147-4',
                'model' => 'TECTOR 170E21 ATTACK 4x2 2p (dies.)(E5)',
                'years' => '2015 a 2023'
            ],
            
            [
                'id' => 6024,
                'brand_id' => 122,
                'fipe_code' => '506087-7',
                'model' => 'TECTOR 170E22 ATTACK 4x2 2p (dies.)(E5)',
                'years' => '2013 a 2019'
            ],
            
            [
                'id' => 4882,
                'brand_id' => 122,
                'fipe_code' => '506053-2',
                'model' => 'TECTOR 170E25 4x2 2p (diesel)',
                'years' => '2009 a 2012'
            ],
            
            [
                'id' => 6025,
                'brand_id' => 122,
                'fipe_code' => '506088-5',
                'model' => 'TECTOR 170E28 4x2 2p (diesel)(E5)',
                'years' => '2013 a 2019'
            ],
            
            [
                'id' => 9581,
                'brand_id' => 122,
                'fipe_code' => '506171-7',
                'model' => 'TECTOR 170E28 ATTACK 4x2 2p (diesel)(E5)',
                'years' => '2022 a 2023'
            ],
            
            [
                'id' => 8268,
                'brand_id' => 122,
                'fipe_code' => '506154-7',
                'model' => 'TECTOR 170E30 4x2 2p (diesel)(E5)',
                'years' => '2018 a 2019'
            ],
            
            [
                'id' => 8810,
                'brand_id' => 122,
                'fipe_code' => '506164-4',
                'model' => 'TECTOR 24-280 6x2 (diesel)(E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 10774,
                'brand_id' => 122,
                'fipe_code' => '506180-6',
                'model' => 'TECTOR 24-280 6x2 (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 8811,
                'brand_id' => 122,
                'fipe_code' => '506165-2',
                'model' => 'TECTOR 24-300 6x2 (diesel)(E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 10241,
                'brand_id' => 122,
                'fipe_code' => '506177-6',
                'model' => 'TECTOR 24-320 6x2 2p (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 6026,
                'brand_id' => 122,
                'fipe_code' => '506089-3',
                'model' => 'TECTOR 240E22 ATTACK 6x2 2p (dies.)(E5)',
                'years' => '2013 a 2019'
            ],
            
            [
                'id' => 4883,
                'brand_id' => 122,
                'fipe_code' => '506054-0',
                'model' => 'TECTOR 240E25 6x2 2p (diesel)',
                'years' => '2009 a 2012'
            ],
            
            [
                'id' => 5943,
                'brand_id' => 122,
                'fipe_code' => '506076-1',
                'model' => 'TECTOR 240E25 S 6x2 2p (diesel)',
                'years' => '2010 a 2012'
            ],
            
            [
                'id' => 6027,
                'brand_id' => 122,
                'fipe_code' => '506090-7',
                'model' => 'TECTOR 240E28 6x2 2p (dies.)(E5)',
                'years' => '2012 a 2019'
            ],
            
            [
                'id' => 6881,
                'brand_id' => 122,
                'fipe_code' => '506140-7',
                'model' => 'TECTOR 240E28 ATTACK 6x2 2p (diesel)(E5)',
                'years' => '2014 a 2020'
            ],
            
            [
                'id' => 6028,
                'brand_id' => 122,
                'fipe_code' => '506091-5',
                'model' => 'TECTOR 240E28S STRADALE 6x2 2p(dies)(E5)',
                'years' => '2012 a 2017'
            ],
            
            [
                'id' => 7726,
                'brand_id' => 122,
                'fipe_code' => '506149-0',
                'model' => 'TECTOR 240E30S 6x2 2p (diesel)',
                'years' => '2016 a 2019'
            ],
            
            [
                'id' => 5444,
                'brand_id' => 122,
                'fipe_code' => '506074-5',
                'model' => 'TECTOR 260E25 6x4 2p (diesel)',
                'years' => '2010 a 2012'
            ],
            
            [
                'id' => 6029,
                'brand_id' => 122,
                'fipe_code' => '506092-3',
                'model' => 'TECTOR 260E28 6x4 2p (dies.)(E5)',
                'years' => '2013 a 2017'
            ],
            
            [
                'id' => 7862,
                'brand_id' => 122,
                'fipe_code' => '506150-4',
                'model' => 'TECTOR 260E30 6x4 2p (diesel)(E5)',
                'years' => '2017 a 2023'
            ],
            
            [
                'id' => 10242,
                'brand_id' => 122,
                'fipe_code' => '506178-4',
                'model' => 'TECTOR 27-320 6x4 2p (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 9307,
                'brand_id' => 122,
                'fipe_code' => '506169-5',
                'model' => 'TECTOR 31-280 8x2 (diesel)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 8812,
                'brand_id' => 122,
                'fipe_code' => '506167-9',
                'model' => 'TECTOR 31-300 8x2 (diesel)(E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 8144,
                'brand_id' => 122,
                'fipe_code' => '506152-0',
                'model' => 'TECTOR 310E28 8x2 2p (diesel)(E5)',
                'years' => '2017 a 2019'
            ],
            
            [
                'id' => 8145,
                'brand_id' => 122,
                'fipe_code' => '506153-9',
                'model' => 'TECTOR 310E30 8x2 2p (diesel)(E5)',
                'years' => '2017 a 2019'
            ],
            
            [
                'id' => 8762,
                'brand_id' => 122,
                'fipe_code' => '506160-1',
                'model' => 'TECTOR 9-190 4x2 (diesel)(E5)',
                'years' => '2019 a 2023'
            ],
            
            [
                'id' => 10875,
                'brand_id' => 122,
                'fipe_code' => '506181-4',
                'model' => 'TECTOR 9-190 4x2 2p (Diesel)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 5634,
                'brand_id' => 122,
                'fipe_code' => '506075-3',
                'model' => 'TECTOR STRADALE 240E25S 6x2 2p (diesel)',
                'years' => '2010 a 2012'
            ],
            
            [
                'id' => 4932,
                'brand_id' => 122,
                'fipe_code' => '506055-9',
                'model' => 'TRAKKER 380-T38 6x4 2p (diesel)',
                'years' => '2008 a 2011'
            ],
            
            [
                'id' => 4933,
                'brand_id' => 122,
                'fipe_code' => '506057-5',
                'model' => 'TRAKKER 380-T42 6x4 2p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 7081,
                'brand_id' => 122,
                'fipe_code' => '506142-3',
                'model' => 'TRAKKER 410-T48 EUROT. 6x4 (dies.)(E5)',
                'years' => '2013 a 2017'
            ],
            
            [
                'id' => 4934,
                'brand_id' => 122,
                'fipe_code' => '506056-7',
                'model' => 'TRAKKER 720-T42T 6x4 2p (diesel)',
                'years' => '2008 a 2012'
            ],
            
            [
                'id' => 7114,
                'brand_id' => 122,
                'fipe_code' => '506145-8',
                'model' => 'TRAKKER 740-T48 EUROT. 6x4 (dies.) (E5)',
                'years' => '2013 a 2017'
            ],
            
            [
                'id' => 5570,
                'brand_id' => 122,
                'fipe_code' => '506072-9',
                'model' => 'VERTIS 130V18 4x2  2p (diesel)',
                'years' => '2011 a 2012'
            ],
            
            [
                'id' => 6339,
                'brand_id' => 122,
                'fipe_code' => '506126-1',
                'model' => 'VERTIS 130V19 2p (diesel)(E5)',
                'years' => '2013 a 2016'
            ],
            
            [
                'id' => 5571,
                'brand_id' => 122,
                'fipe_code' => '506071-0',
                'model' => 'VERTIS 90V16 4x2 2p (diesel)',
                'years' => '2010 a 2012'
            ],
            
            [
                'id' => 6290,
                'brand_id' => 122,
                'fipe_code' => '506125-3',
                'model' => 'VERTIS 90V18 2p (diesel)(E5)',
                'years' => '2013 a 2016'
            ]
            ];
            
            $WALKBUSModels = [
            [
                'id' => 4572,
                'brand_id' => 144,
                'fipe_code' => '520002-4',
                'model' => 'Phanter Special Escolar 2p (diesel)',
                'years' => '2008 a 2020'
            ],
            
            [
                'id' => 4573,
                'brand_id' => 144,
                'fipe_code' => '520003-2',
                'model' => 'Phanter Special Exec./Turismo 2p (die.)',
                'years' => '2008 a 2020'
            ],
            
            [
                'id' => 4574,
                'brand_id' => 144,
                'fipe_code' => '520001-6',
                'model' => 'Phanter Special Urbano/SPTRANS 2p (die.)',
                'years' => '2008 a 2020'
            ]
            ];
            
            $SINOTRUKModels = [
            [
                'id' => 5232,
                'brand_id' => 166,
                'fipe_code' => '521001-1',
                'model' => 'HOWO 380 6x2 2p (diesel)',
                'years' => '2008 a 2011'
            ],
            
            [
                'id' => 5233,
                'brand_id' => 166,
                'fipe_code' => '521002-0',
                'model' => 'HOWO 380 6x4 2p (diesel)',
                'years' => '2009 a 2011'
            ],
            
            [
                'id' => 5739,
                'brand_id' => 166,
                'fipe_code' => '521003-8',
                'model' => 'HOWO 380 8x4 2p (diesel)',
                'years' => '2010 a 2010'
            ],
            
            [
                'id' => 6630,
                'brand_id' => 166,
                'fipe_code' => '521004-6',
                'model' => 'HOWO 380 A7 4x2 2p (diesel)(E5)',
                'years' => '2012 a 2012'
            ],
            
            [
                'id' => 6628,
                'brand_id' => 166,
                'fipe_code' => '521005-4',
                'model' => 'HOWO 420 A7 6x2 2p (diesel)(E5)',
                'years' => '2011 a 2012'
            ],
            
            [
                'id' => 6629,
                'brand_id' => 166,
                'fipe_code' => '521006-2',
                'model' => 'HOWO 460 A7 6x4 2p (diesel)(E5)',
                'years' => '2012 a 2012'
            ]
            ];
            
            $EFFAJMCModels = [
            [
                'id' => 5682,
                'brand_id' => 179,
                'fipe_code' => '522003-3',
                'model' => 'JBC 3.2 Turbo Intercooler 2p (diesel)',
                'years' => '2011 a 2012'
            ],
            
            [
                'id' => 5566,
                'brand_id' => 179,
                'fipe_code' => '522001-7',
                'model' => 'N601 2.8 2p (diesel)',
                'years' => '2011 a 2012'
            ],
            
            [
                'id' => 5567,
                'brand_id' => 179,
                'fipe_code' => '522002-5',
                'model' => 'N900 2.8 2p (diesel)',
                'years' => '2011 a 2012'
            ]
            ];
            
            $HYUNDAIModels = [
            [
                'id' => 5681,
                'brand_id' => 181,
                'fipe_code' => '523001-2',
                'model' => 'HD78 3.0 16V 155cv (diesel) 2p',
                'years' => '2012 a 2012'
            ],
            
            [
                'id' => 8198,
                'brand_id' => 181,
                'fipe_code' => '523002-0',
                'model' => 'HD80 3.0 16V (diesel)(E5)',
                'years' => '2018 a Zero Km'
            ]
            ];
            
            $MANModels = [
            [
                'id' => 6457,
                'brand_id' => 184,
                'fipe_code' => '524002-6',
                'model' => 'TGX 28.440 6x2 2p (diesel)(E5)',
                'years' => '2013 a 2021'
            ],
            
            [
                'id' => 6080,
                'brand_id' => 184,
                'fipe_code' => '524001-8',
                'model' => 'TGX 29.440 6x4 2p (diesel)(E5)',
                'years' => '2011 a 2018'
            ],
            
            [
                'id' => 7369,
                'brand_id' => 184,
                'fipe_code' => '524003-4',
                'model' => 'TGX 29.480 6x4 2p (diesel)(E5)',
                'years' => '2016 a 2021'
            ]
            ];
            
            $JACModels = [
            [
                'id' => 10152,
                'brand_id' => 188,
                'fipe_code' => '525005-6',
                'model' => 'E-JT 12,5 (Elétrico)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 11211,
                'brand_id' => 188,
                'fipe_code' => '525007-2',
                'model' => 'E-JT 18 (Elétrico)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10902,
                'brand_id' => 188,
                'fipe_code' => '525006-4',
                'model' => 'E-JT 9,5 (Elétrico)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 6315,
                'brand_id' => 188,
                'fipe_code' => '525001-3',
                'model' => 'iEV 1200T (Elétrico)',
                'years' => '2020 a Zero Km'
            ],
            
            [
                'id' => 9728,
                'brand_id' => 188,
                'fipe_code' => '525004-8',
                'model' => 'iEV 1200T PLUS (Elétrico)',
                'years' => '2022 a Zero Km'
            ],
            
            [
                'id' => 9729,
                'brand_id' => 188,
                'fipe_code' => '525002-1',
                'model' => 'iEV 1200T PLUS R (Elétrico)',
                'years' => '2022 a Zero Km'
            ],
            
            [
                'id' => 9730,
                'brand_id' => 188,
                'fipe_code' => '525003-0',
                'model' => 'iEV 1200T R (Elétrico)',
                'years' => '2022 a Zero Km'
            ]
            ];
            
            $FOTONModels = [
            [
                'id' => 6904,
                'brand_id' => 191,
                'fipe_code' => '526003-5',
                'model' => '10-16DT 3.8 4x2 Diesel(E5)',
                'years' => '2013 a 2015'
            ],
            
            [
                'id' => 6369,
                'brand_id' => 191,
                'fipe_code' => '526001-9',
                'model' => 'AUMARK 6.50AK 3.8 4x2 TB (diesel)(E5)',
                'years' => '2011 a 2011'
            ],
            
            [
                'id' => 6370,
                'brand_id' => 191,
                'fipe_code' => '526002-7',
                'model' => 'AUMARK 8.60AK 3.8 4x2 TB (diesel)(E5)',
                'years' => '2011 a 2012'
            ],
            
            [
                'id' => 10957,
                'brand_id' => 191,
                'fipe_code' => '526012-4',
                'model' => 'AUMARK S 1217A 4x2 (diesel) (E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10958,
                'brand_id' => 191,
                'fipe_code' => '526011-6',
                'model' => 'AUMARK S 1217B 4x2 (diesel) (E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10959,
                'brand_id' => 191,
                'fipe_code' => '526009-4',
                'model' => 'AUMARK S 715 4x2 (diesel) (E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10960,
                'brand_id' => 191,
                'fipe_code' => '526010-8',
                'model' => 'AUMARK S 916 4x2 (diese) (E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 7939,
                'brand_id' => 191,
                'fipe_code' => '526004-3',
                'model' => 'CITYTRUCK 10-16DT 3.8 4x2 (diesel)(E5)',
                'years' => '2018 a 2019'
            ],
            
            [
                'id' => 9273,
                'brand_id' => 191,
                'fipe_code' => '526005-1',
                'model' => 'CITYTRUCK 11-16 3.8 TB 4x2 (diesel)(E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 9271,
                'brand_id' => 191,
                'fipe_code' => '526006-0',
                'model' => 'CITYTRUCK 6.5-15 2.8 TB 4x2 (diesel)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 10482,
                'brand_id' => 191,
                'fipe_code' => '526007-8',
                'model' => 'CITYTRUCK 9-16 3.8 TB 4x2 (diesel)(E5)',
                'years' => '2023 a 2023'
            ],
            
            [
                'id' => 10772,
                'brand_id' => 191,
                'fipe_code' => '526008-6',
                'model' => 'IBLUE EV-6T 4X2 (Elétrico)',
                'years' => '2022 a Zero Km'
            ]
            ];
            
            $SHACMANModels = [
            [
                'id' => 6479,
                'brand_id' => 193,
                'fipe_code' => '527006-5',
                'model' => 'LT 385 6x4 2p (diesel)(E5)',
                'years' => '2012 a 2012'
            ],
            
            [
                'id' => 6480,
                'brand_id' => 193,
                'fipe_code' => '527001-4',
                'model' => 'TT 385 4x2 2p (diesel)(E5)',
                'years' => '2012 a 2012'
            ],
            
            [
                'id' => 6481,
                'brand_id' => 193,
                'fipe_code' => '527002-2',
                'model' => 'TT 385 6x2 2p (diesel)(E5)',
                'years' => '2012 a 2012'
            ],
            
            [
                'id' => 6482,
                'brand_id' => 193,
                'fipe_code' => '527003-0',
                'model' => 'TT 385 6x4 2p (diesel)(E5)',
                'years' => '2012 a 2012'
            ],
            
            [
                'id' => 6483,
                'brand_id' => 193,
                'fipe_code' => '527004-9',
                'model' => 'TT 420 6x4  2p (diesel)(E5)',
                'years' => '2012 a 2012'
            ],
            
            [
                'id' => 6484,
                'brand_id' => 193,
                'fipe_code' => '527005-7',
                'model' => 'TT 440 6x4 2p (diesel)(E5)',
                'years' => '2012 a 2012'
            ]
            ];
            
            $MAXIBUSModels = [
            [
                'id' => 6556,
                'brand_id' => 194,
                'fipe_code' => '528002-8',
                'model' => 'ASTOR ESCOLAR (diesel)(E5)',
                'years' => '2013 a 2013'
            ],
            
            [
                'id' => 6557,
                'brand_id' => 194,
                'fipe_code' => '528003-6',
                'model' => 'ASTOR TURISMO (diesel)(E5)',
                'years' => '2013 a 2013'
            ],
            
            [
                'id' => 6558,
                'brand_id' => 194,
                'fipe_code' => '528001-0',
                'model' => 'ASTOR URBANO (diesel)(E5)',
                'years' => '2013 a 2013'
            ]
            ];
            
            $MASCARELLOModels = [
            [
                'id' => 6680,
                'brand_id' => 196,
                'fipe_code' => '529001-5',
                'model' => 'Gran Micro Rodoviário (diesel)(E5)',
                'years' => '2013 a 2022'
            ],
            
            [
                'id' => 10689,
                'brand_id' => 196,
                'fipe_code' => '529005-8',
                'model' => 'Gran Micro Rodoviário (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 6681,
                'brand_id' => 196,
                'fipe_code' => '529002-3',
                'model' => 'Gran Micro Urbano (diesel)(E5)',
                'years' => '2013 a 2022'
            ],
            
            [
                'id' => 10690,
                'brand_id' => 196,
                'fipe_code' => '529006-6',
                'model' => 'Gran Micro Urbano (diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 6682,
                'brand_id' => 196,
                'fipe_code' => '529003-1',
                'model' => 'Gran Mini Rodoviário (diesel)(E5)',
                'years' => '2013 a 2016'
            ],
            
            [
                'id' => 6683,
                'brand_id' => 196,
                'fipe_code' => '529004-0',
                'model' => 'Gran Mini Urbano (diesel)(E5)',
                'years' => '2013 a 2016'
            ]
            ];
            
            $DAFModels = [
            [
                'id' => 7498,
                'brand_id' => 197,
                'fipe_code' => '530008-8',
                'model' => 'CF 85 FT 360 4x2 (diesel)(E5)',
                'years' => '2016 a 2020'
            ],
            
            [
                'id' => 7499,
                'brand_id' => 197,
                'fipe_code' => '530005-3',
                'model' => 'CF 85 FT 410 4x2 (diesel)(E5)',
                'years' => '2016 a 2020'
            ],
            
            [
                'id' => 7500,
                'brand_id' => 197,
                'fipe_code' => '530007-0',
                'model' => 'CF 85 FTS 360 6x2 (diesel)(E5)',
                'years' => '2016 a 2020'
            ],
            
            [
                'id' => 7501,
                'brand_id' => 197,
                'fipe_code' => '530006-1',
                'model' => 'CF 85 FTS 410 6x2 (diesel)(E5)',
                'years' => '2016 a 2020'
            ],
            
            [
                'id' => 8195,
                'brand_id' => 197,
                'fipe_code' => '530010-0',
                'model' => 'CF 85 FTT 460 6x4 (diesel)(E5)',
                'years' => '2017 a 2020'
            ],
            
            [
                'id' => 9802,
                'brand_id' => 197,
                'fipe_code' => '530040-1',
                'model' => 'CF FAC 300 8X2 Sleep. Cab Aut (Die)(E5)',
                'years' => '2022 a 2023'
            ],
            
            [
                'id' => 9803,
                'brand_id' => 197,
                'fipe_code' => '530038-0',
                'model' => 'CF FAC 300 8X2 Space Cab Aut (Die)(E5)',
                'years' => '2022 a 2023'
            ],
            
            [
                'id' => 9804,
                'brand_id' => 197,
                'fipe_code' => '530039-8',
                'model' => 'CF FAC 300 8x2 Space Cab Mec (Die)(E5)',
                'years' => '2022 a 2023'
            ],
            
            [
                'id' => 9805,
                'brand_id' => 197,
                'fipe_code' => '530037-1',
                'model' => 'CF FAC 300 8X2 Spleep. Cab Mec (Die)(E5)',
                'years' => '2022 a 2023'
            ],
            
            [
                'id' => 10441,
                'brand_id' => 197,
                'fipe_code' => '530081-9',
                'model' => 'CF FAC 310 8X2 Sleep. Cab Mec (Die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10442,
                'brand_id' => 197,
                'fipe_code' => '530080-0',
                'model' => 'CF FAC 310 8X2 Sleep.Cab Aut. (Die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10443,
                'brand_id' => 197,
                'fipe_code' => '530078-9',
                'model' => 'CF FAC 310 8X2 Space Cab Aut (Die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10444,
                'brand_id' => 197,
                'fipe_code' => '530079-7',
                'model' => 'CF FAC 310 8x2 Space Cab Mec. (Die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10445,
                'brand_id' => 197,
                'fipe_code' => '530064-9',
                'model' => 'CF FAC 340 8X2 Sleeper Cab (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10446,
                'brand_id' => 197,
                'fipe_code' => '530062-2',
                'model' => 'CF FAC 340 8X2 Space Cab (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10447,
                'brand_id' => 197,
                'fipe_code' => '530063-0',
                'model' => 'CF FAC 370 8X2 Sleeper Cab (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10448,
                'brand_id' => 197,
                'fipe_code' => '530060-6',
                'model' => 'CF FAC 370 8X2 Space Cab (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10449,
                'brand_id' => 197,
                'fipe_code' => '530061-4',
                'model' => 'CF FAC 410 8X2 Sleeper Cab (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 9499,
                'brand_id' => 197,
                'fipe_code' => '530026-6',
                'model' => 'CF FAC 410 8X2 Space Cab (Die)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 10450,
                'brand_id' => 197,
                'fipe_code' => '530065-7',
                'model' => 'CF FAC 410 8X2 Space Cab (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10451,
                'brand_id' => 197,
                'fipe_code' => '530092-4',
                'model' => 'CF FAS 260 6x2 Day Cab Aut. (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10452,
                'brand_id' => 197,
                'fipe_code' => '530093-2',
                'model' => 'CF FAS 260 6x2 Day Cab Mec (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10453,
                'brand_id' => 197,
                'fipe_code' => '530091-6',
                'model' => 'CF FAS 260 6x2 Sleep. Cab Mec (Die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10454,
                'brand_id' => 197,
                'fipe_code' => '530090-8',
                'model' => 'CF FAS 260 6x2 Sleep.Cab Aut. (Die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10455,
                'brand_id' => 197,
                'fipe_code' => '530088-6',
                'model' => 'CF FAS 260 6x2 Space Cab Aut. (Die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10456,
                'brand_id' => 197,
                'fipe_code' => '530089-4',
                'model' => 'CF FAS 260 6x2 Space Cab Mec (Die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 9807,
                'brand_id' => 197,
                'fipe_code' => '530036-3',
                'model' => 'CF FAS 280 6x2 Day Cab Aut (Die)(E5)',
                'years' => '2022 a 2023'
            ],
            
            [
                'id' => 9808,
                'brand_id' => 197,
                'fipe_code' => '530035-5',
                'model' => 'CF FAS 280 6x2 Day Cab Mec (Die)(E5)',
                'years' => '2022 a 2023'
            ],
            
            [
                'id' => 9809,
                'brand_id' => 197,
                'fipe_code' => '530033-9',
                'model' => 'CF FAS 280 6x2 Sleep. Cab Aut (Die)(E5)',
                'years' => '2022 a 2023'
            ],
            
            [
                'id' => 9810,
                'brand_id' => 197,
                'fipe_code' => '530032-0',
                'model' => 'CF FAS 280 6x2 Sleep. Cab Mec (Die)(E5)',
                'years' => '2022 a 2023'
            ],
            
            [
                'id' => 9811,
                'brand_id' => 197,
                'fipe_code' => '530034-7',
                'model' => 'CF FAS 280 6x2 Space Cab Aut (Die)(E5)',
                'years' => '2022 a 2023'
            ],
            
            [
                'id' => 9812,
                'brand_id' => 197,
                'fipe_code' => '530046-0',
                'model' => 'CF FAS 280 6x2 Space Cab Mec (Die)(E5)',
                'years' => '2022 a 2023'
            ],
            
            [
                'id' => 10457,
                'brand_id' => 197,
                'fipe_code' => '530098-3',
                'model' => 'CF FAS 290 6x2 Day Cab Aut (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10458,
                'brand_id' => 197,
                'fipe_code' => '530099-1',
                'model' => 'CF FAS 290 6x2 Day Cab Mec (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10459,
                'brand_id' => 197,
                'fipe_code' => '530096-7',
                'model' => 'CF FAS 290 6x2 Sleep. Cab Aut (Die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10460,
                'brand_id' => 197,
                'fipe_code' => '530097-5',
                'model' => 'CF FAS 290 6x2 Sleep. Cab Mec (Die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10461,
                'brand_id' => 197,
                'fipe_code' => '530094-0',
                'model' => 'CF FAS 290 6x2 Space Cab Aut (Die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10462,
                'brand_id' => 197,
                'fipe_code' => '530095-9',
                'model' => 'CF FAS 290 6x2 Space Cab Mec (Die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 9813,
                'brand_id' => 197,
                'fipe_code' => '530043-6',
                'model' => 'CF FAS 300 6x2 Day Cab Aut (Die)(E5)',
                'years' => '2022 a 2023'
            ],
            
            [
                'id' => 9814,
                'brand_id' => 197,
                'fipe_code' => '530045-2',
                'model' => 'CF FAS 300 6x2 Day Cab Mec (Die)(E5)',
                'years' => '2022 a 2023'
            ],
            
            [
                'id' => 9815,
                'brand_id' => 197,
                'fipe_code' => '530042-8',
                'model' => 'CF FAS 300 6x2 Sleep. Cab Aut (Die)(E5)',
                'years' => '2022 a 2023'
            ],
            
            [
                'id' => 9816,
                'brand_id' => 197,
                'fipe_code' => '530041-0',
                'model' => 'CF FAS 300 6X2 Sleep. Cab Mec (Die)(E5)',
                'years' => '2022 a 2023'
            ],
            
            [
                'id' => 9817,
                'brand_id' => 197,
                'fipe_code' => '530047-9',
                'model' => 'CF FAS 300 6x2 Space Cab Aut (die)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 9818,
                'brand_id' => 197,
                'fipe_code' => '530044-4',
                'model' => 'CF FAS 300 6X2 Space Cab Mec (Die)(E5)',
                'years' => '2022 a 2023'
            ],
            
            [
                'id' => 10463,
                'brand_id' => 197,
                'fipe_code' => '530086-0',
                'model' => 'CF FAS 310 6x2 Day Cab Aut (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10464,
                'brand_id' => 197,
                'fipe_code' => '530087-8',
                'model' => 'CF FAS 310 6x2 Day Cab Mec. (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10465,
                'brand_id' => 197,
                'fipe_code' => '530082-7',
                'model' => 'CF FAS 310 6x2 Sleep. Cab Aut (Die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10466,
                'brand_id' => 197,
                'fipe_code' => '530083-5',
                'model' => 'CF FAS 310 6X2 Sleep.Cab Mec. (Die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10467,
                'brand_id' => 197,
                'fipe_code' => '530084-3',
                'model' => 'CF FAS 310 6x2 Space Cab Aut (Die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10468,
                'brand_id' => 197,
                'fipe_code' => '530085-1',
                'model' => 'CF FAS 310 6X2 Space Cab Mec. (Die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10469,
                'brand_id' => 197,
                'fipe_code' => '530070-3',
                'model' => 'CF FT 370 4x2 Sleeper Cab (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10470,
                'brand_id' => 197,
                'fipe_code' => '530067-3',
                'model' => 'CF FT 370 4x2 Space Cab (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10471,
                'brand_id' => 197,
                'fipe_code' => '530069-0',
                'model' => 'CF FT 410 4x2 Sleeper Cab (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 9500,
                'brand_id' => 197,
                'fipe_code' => '530031-2',
                'model' => 'CF FT 410 4x2 Space Cab (die)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 10472,
                'brand_id' => 197,
                'fipe_code' => '530100-9',
                'model' => 'CF FT 410 4x2 Space Cab (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10473,
                'brand_id' => 197,
                'fipe_code' => '530068-1',
                'model' => 'CF FT 450 4x2 Sleeper Cab (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 9501,
                'brand_id' => 197,
                'fipe_code' => '530027-4',
                'model' => 'CF FT 450 4X2 Space Cab (Die)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 10474,
                'brand_id' => 197,
                'fipe_code' => '530066-5',
                'model' => 'CF FT 450 4X2 Space Cab (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10475,
                'brand_id' => 197,
                'fipe_code' => '530074-6',
                'model' => 'CF FTS 410 6x2 Sleeper Cab (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 9502,
                'brand_id' => 197,
                'fipe_code' => '530029-0',
                'model' => 'CF FTS 410 6X2 Space Cab (Die)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 10476,
                'brand_id' => 197,
                'fipe_code' => '530072-0',
                'model' => 'CF FTS 410 6X2 Space Cab (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10477,
                'brand_id' => 197,
                'fipe_code' => '530073-8',
                'model' => 'CF FTS 450 6x2 Sleeper Cab (Diesel) (E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 9503,
                'brand_id' => 197,
                'fipe_code' => '530028-2',
                'model' => 'CF FTS 450 6X2 Space Cab (Die) (E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 10478,
                'brand_id' => 197,
                'fipe_code' => '530071-1',
                'model' => 'CF FTS 450 6X2 Space Cab (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10479,
                'brand_id' => 197,
                'fipe_code' => '530077-0',
                'model' => 'CF FTT 480 6x4 Day Cab (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 9504,
                'brand_id' => 197,
                'fipe_code' => '530030-4',
                'model' => 'CF FTT 480 6X4 Sleeper Cab (Die)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 10480,
                'brand_id' => 197,
                'fipe_code' => '530076-2',
                'model' => 'CF FTT 480 6X4 Sleeper Cab (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10481,
                'brand_id' => 197,
                'fipe_code' => '530075-4',
                'model' => 'CF FTT 480 6x4 Space Cab (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 8196,
                'brand_id' => 197,
                'fipe_code' => '530011-8',
                'model' => 'XF 105 FT 460 4x2 (diesel)(E5)',
                'years' => '2018 a 2020'
            ],
            
            [
                'id' => 8197,
                'brand_id' => 197,
                'fipe_code' => '530012-6',
                'model' => 'XF 105 FT 510 4x2 (diesel)(E5)',
                'years' => '2018 a 2020'
            ],
            
            [
                'id' => 6705,
                'brand_id' => 197,
                'fipe_code' => '530001-0',
                'model' => 'XF 105 FTS 410 6x2 (diesel)(E5)',
                'years' => '2013 a 2018'
            ],
            
            [
                'id' => 6706,
                'brand_id' => 197,
                'fipe_code' => '530002-9',
                'model' => 'XF 105 FTS 460 6x2 (diesel)(E5)',
                'years' => '2014 a 2020'
            ],
            
            [
                'id' => 7649,
                'brand_id' => 197,
                'fipe_code' => '530009-6',
                'model' => 'XF 105 FTS 510 6x2 (diesel)(E5)',
                'years' => '2016 a 2020'
            ],
            
            [
                'id' => 6707,
                'brand_id' => 197,
                'fipe_code' => '530003-7',
                'model' => 'XF 105 FTT 460 6x4 (diesel)(E5)',
                'years' => '2012 a 2020'
            ],
            
            [
                'id' => 7389,
                'brand_id' => 197,
                'fipe_code' => '530004-5',
                'model' => 'XF 105 FTT 510 6x4 (diesel)(E5)',
                'years' => '2016 a 2020'
            ],
            
            [
                'id' => 8225,
                'brand_id' => 197,
                'fipe_code' => '530013-4',
                'model' => 'XF 105 FTT 520 6x4 (diesel)(E5)',
                'years' => '2018 a 2020'
            ],
            
            [
                'id' => 9173,
                'brand_id' => 197,
                'fipe_code' => '530014-2',
                'model' => 'XF FT480 4x2 Space Cab (die)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 10546,
                'brand_id' => 197,
                'fipe_code' => '530051-7',
                'model' => 'XF FT480 4x2 Space Cab (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10547,
                'brand_id' => 197,
                'fipe_code' => '530049-5',
                'model' => 'XF FT480 4x2 Super Space Cab (Die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 9174,
                'brand_id' => 197,
                'fipe_code' => '530018-5',
                'model' => 'XF FT480 4x2 Super Space Cab (die)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 10548,
                'brand_id' => 197,
                'fipe_code' => '530050-9',
                'model' => 'XF FT530 4x2 Space Cab (Die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 9175,
                'brand_id' => 197,
                'fipe_code' => '530016-9',
                'model' => 'XF FT530 4x2 Space Cab (diesel)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 10549,
                'brand_id' => 197,
                'fipe_code' => '530048-7',
                'model' => 'XF FT530 4x2 Super Space Cab (Die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 9176,
                'brand_id' => 197,
                'fipe_code' => '530021-5',
                'model' => 'XF FT530 4x2 Super Space Cab (die)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 9177,
                'brand_id' => 197,
                'fipe_code' => '530015-0',
                'model' => 'XF FTS480 6x2 Space Cab (diesel)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 10550,
                'brand_id' => 197,
                'fipe_code' => '530055-0',
                'model' => 'XF FTS480 6x2 Space Cab (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10551,
                'brand_id' => 197,
                'fipe_code' => '530053-3',
                'model' => 'XF FTS480 6x2 Super Space Cab (Die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 9178,
                'brand_id' => 197,
                'fipe_code' => '530019-3',
                'model' => 'XF FTS480 6x2 Super Space Cab (die)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 9179,
                'brand_id' => 197,
                'fipe_code' => '530017-7',
                'model' => 'XF FTS530 6x2 Space Cab (diesel)(E5)',
                'years' => '2020 a 2023'
            ],
            
            [
                'id' => 10552,
                'brand_id' => 197,
                'fipe_code' => '530054-1',
                'model' => 'XF FTS530 6x2 Space Cab (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10553,
                'brand_id' => 197,
                'fipe_code' => '530052-5',
                'model' => 'XF FTS530 6x2 Super Space Cab (Die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 9180,
                'brand_id' => 197,
                'fipe_code' => '530022-3',
                'model' => 'XF FTS530 6x2 Super Space Cab (die)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 9181,
                'brand_id' => 197,
                'fipe_code' => '530020-7',
                'model' => 'XF FTT480 6x4 Space Cab (diesel)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 10554,
                'brand_id' => 197,
                'fipe_code' => '530056-8',
                'model' => 'XF FTT480 6x4 Space Cab (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 10555,
                'brand_id' => 197,
                'fipe_code' => '530058-4',
                'model' => 'XF FTT480 6x4 Super Space Cab (Die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 9182,
                'brand_id' => 197,
                'fipe_code' => '530024-0',
                'model' => 'XF FTT480 6x4 Super Space Cab (die)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 9183,
                'brand_id' => 197,
                'fipe_code' => '530023-1',
                'model' => 'XF FTT530 6x4 Space Cab (die)(E5)',
                'years' => '2021 a 2023'
            ],
            
            [
                'id' => 10556,
                'brand_id' => 197,
                'fipe_code' => '530059-2',
                'model' => 'XF FTT530 6x4 Space Cab (Diesel)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 11010,
                'brand_id' => 197,
                'fipe_code' => '530101-7',
                'model' => 'XF FTT530 6x4 Space Cab HR (Die)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 11011,
                'brand_id' => 197,
                'fipe_code' => '530102-5',
                'model' => 'XF FTT530 6x4 Sup. Spa. Cab HR (Die)(E6)',
                'years' => '2024 a Zero Km'
            ],
            
            [
                'id' => 10557,
                'brand_id' => 197,
                'fipe_code' => '530057-6',
                'model' => 'XF FTT530 6x4 Super Space Cab (Die.)(E6)',
                'years' => '2023 a Zero Km'
            ],
            
            [
                'id' => 9184,
                'brand_id' => 197,
                'fipe_code' => '530025-8',
                'model' => 'XF FTT530 6x4 Super Space Cab (die)(E5)',
                'years' => '2021 a 2023'
            ]
            ];
            
            $BEPOBUSModels = [
            [
                'id' => 8192,
                'brand_id' => 206,
                'fipe_code' => '531002-4',
                'model' => 'NÀSCERE FRETAMENTO (diesel)(E5)',
                'years' => '2018 a 2023'
            ],
            
            [
                'id' => 8193,
                'brand_id' => 206,
                'fipe_code' => '531003-2',
                'model' => 'NÀSCERE RODOVIÁRIO (diesel)(E5)',
                'years' => '2018 a 2023'
            ],
            
            [
                'id' => 11091,
                'brand_id' => 206,
                'fipe_code' => '531005-9',
                'model' => 'NÀSCERE RODOVIARIO (diesel)(E6)',
                'years' => '2025 a Zero Km'
            ],
            
            [
                'id' => 8194,
                'brand_id' => 206,
                'fipe_code' => '531001-6',
                'model' => 'NÀSCERE URBANO (diesel)(E5)',
                'years' => '2018 a 2023'
            ],
            
            [
                'id' => 11092,
                'brand_id' => 206,
                'fipe_code' => '531004-0',
                'model' => 'NÀSCERE URBANO (diesel)(E6)',
                'years' => '2025 a Zero Km'
            ]
            ];
            
            

        foreach (array_merge($AGRALEModels,$CHEVROLETModels,$FIATModels,$FORDModels,$GMCModels,$MARCOPOLOModels,$MERCEDESBENZModels,$NAVISTARModels,$NEOBUSModels,$PUMAALFAModels,$SAABSCANIAModels,$SCANIAModels,$VOLKSWAGENModels,$VOLVOModels,$CICCOBUSModels,$IVECOModels,$WALKBUSModels,$SINOTRUKModels,$EFFAJMCModels,$HYUNDAIModels,$MANModels,$JACModels,$FOTONModels,$SHACMANModels,$MAXIBUSModels,$MASCARELLOModels,$DAFModels,$BEPOBUSModels,) as $model) {
            DB::table('truck_models')->insert($model);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('truck_models');
    }
};
