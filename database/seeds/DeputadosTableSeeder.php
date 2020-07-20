<?php

use Illuminate\Database\Seeder;

class DeputadosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('deputados')->delete();
        
        \DB::table('deputados')->insert(array (
            0 => 
            array (
                'id' => 1832,
                'nome' => 'Sávio Souza Cruz',
                'partido' => 'MDB',
                'importado' => 1,
            ),
            1 => 
            array (
                'id' => 2267,
                'nome' => 'Celise Laviola',
                'partido' => 'MDB',
                'importado' => 1,
            ),
            2 => 
            array (
                'id' => 2698,
                'nome' => 'Virgílio Guimarães',
                'partido' => 'PT',
                'importado' => 1,
            ),
            3 => 
            array (
                'id' => 4458,
                'nome' => 'Marquinho Lemos',
                'partido' => 'PT',
                'importado' => 1,
            ),
            4 => 
            array (
                'id' => 5905,
                'nome' => 'Hely Tarqüínio',
                'partido' => 'PV',
                'importado' => 1,
            ),
            5 => 
            array (
                'id' => 7327,
                'nome' => 'Antonio Carlos Arantes',
                'partido' => 'PSDB',
                'importado' => 1,
            ),
            6 => 
            array (
                'id' => 7752,
                'nome' => 'Alencar da Silveira Jr.',
                'partido' => 'PDT',
                'importado' => 1,
            ),
            7 => 
            array (
                'id' => 7758,
                'nome' => 'Carlos Pimenta',
                'partido' => 'PDT',
                'importado' => 1,
            ),
            8 => 
            array (
                'id' => 7762,
                'nome' => 'Gil Pereira',
                'partido' => 'PSD',
                'importado' => 1,
            ),
            9 => 
            array (
                'id' => 7766,
                'nome' => 'João Leite',
                'partido' => 'PSDB',
                'importado' => 1,
            ),
            10 => 
            array (
                'id' => 7769,
                'nome' => 'Leonídio Bouças',
                'partido' => 'MDB',
                'importado' => 1,
            ),
            11 => 
            array (
                'id' => 8095,
                'nome' => 'Ione Pinheiro',
                'partido' => 'DEM',
                'importado' => 1,
            ),
            12 => 
            array (
                'id' => 9652,
                'nome' => 'Arlen Santiago',
                'partido' => 'PTB',
                'importado' => 1,
            ),
            13 => 
            array (
                'id' => 9655,
                'nome' => 'Dalmo Ribeiro Silva',
                'partido' => 'PSDB',
                'importado' => 1,
            ),
            14 => 
            array (
                'id' => 9673,
                'nome' => 'Sargento Rodrigues',
                'partido' => 'PTB',
                'importado' => 1,
            ),
            15 => 
            array (
                'id' => 10002,
                'nome' => 'Carlos Henrique',
                'partido' => 'REPUBLICANOS',
                'importado' => 1,
            ),
            16 => 
            array (
                'id' => 10434,
                'nome' => 'Leandro Genaro',
                'partido' => 'PSD',
                'importado' => 1,
            ),
            17 => 
            array (
                'id' => 12195,
                'nome' => 'André Quintão',
                'partido' => 'PT',
                'importado' => 1,
            ),
            18 => 
            array (
                'id' => 12202,
                'nome' => 'Gustavo Valadares',
                'partido' => 'PSDB',
                'importado' => 1,
            ),
            19 => 
            array (
                'id' => 12210,
                'nome' => 'Luiz Humberto Carneiro',
                'partido' => 'PSDB',
                'importado' => 1,
            ),
            20 => 
            array (
                'id' => 12213,
                'nome' => 'Marília Campos',
                'partido' => 'PT',
                'importado' => 1,
            ),
            21 => 
            array (
                'id' => 13425,
                'nome' => 'Betinho Pinto Coelho',
                'partido' => 'SOLIDARIEDADE',
                'importado' => 1,
            ),
            22 => 
            array (
                'id' => 15245,
                'nome' => 'Agostinho Patrus',
                'partido' => 'PV',
                'importado' => 1,
            ),
            23 => 
            array (
                'id' => 15246,
                'nome' => 'Braulio Braz',
                'partido' => 'PTB',
                'importado' => 1,
            ),
            24 => 
            array (
                'id' => 15260,
                'nome' => 'Rosângela Reis',
                'partido' => 'PODE',
                'importado' => 1,
            ),
            25 => 
            array (
                'id' => 15265,
                'nome' => 'Inácio Franco',
                'partido' => 'PV',
                'importado' => 1,
            ),
            26 => 
            array (
                'id' => 16019,
                'nome' => 'Léo Portela',
                'partido' => 'PL',
                'importado' => 1,
            ),
            27 => 
            array (
                'id' => 17872,
                'nome' => 'Professor Wendel Mesquita',
                'partido' => 'SOLIDARIEDADE',
                'importado' => 1,
            ),
            28 => 
            array (
                'id' => 17919,
                'nome' => 'Duarte Bechir',
                'partido' => 'PSD',
                'importado' => 1,
            ),
            29 => 
            array (
                'id' => 18848,
                'nome' => 'Cássio Soares',
                'partido' => 'PSD',
                'importado' => 1,
            ),
            30 => 
            array (
                'id' => 18849,
                'nome' => 'Celinho Sintrocel',
                'partido' => 'PCdoB',
                'importado' => 1,
            ),
            31 => 
            array (
                'id' => 18850,
                'nome' => 'Doutor Wilson Batista',
                'partido' => 'PSD',
                'importado' => 1,
            ),
            32 => 
            array (
                'id' => 18852,
                'nome' => 'Elismar Prado',
                'partido' => 'PROS',
                'importado' => 1,
            ),
            33 => 
            array (
                'id' => 18857,
                'nome' => 'Bosco',
                'partido' => 'AVANTE',
                'importado' => 1,
            ),
            34 => 
            array (
                'id' => 18858,
                'nome' => 'João Vítor Xavier',
                'partido' => 'CIDADANIA',
                'importado' => 1,
            ),
            35 => 
            array (
                'id' => 18860,
                'nome' => 'Tadeu Martins Leite',
                'partido' => 'MDB',
                'importado' => 1,
            ),
            36 => 
            array (
                'id' => 18863,
                'nome' => 'Neilando Pimenta',
                'partido' => 'PODE',
                'importado' => 1,
            ),
            37 => 
            array (
                'id' => 18867,
                'nome' => 'Ulysses Gomes',
                'partido' => 'PT',
                'importado' => 1,
            ),
            38 => 
            array (
                'id' => 19150,
                'nome' => 'Ana Paula Siqueira',
                'partido' => 'REDE',
                'importado' => 1,
            ),
            39 => 
            array (
                'id' => 20231,
                'nome' => 'Glaycon Franco',
                'partido' => 'PV',
                'importado' => 1,
            ),
            40 => 
            array (
                'id' => 21125,
                'nome' => 'Mário Henrique Caixa',
                'partido' => 'PV',
                'importado' => 1,
            ),
            41 => 
            array (
                'id' => 22515,
                'nome' => 'Thiago Cota',
                'partido' => 'MDB',
                'importado' => 1,
            ),
            42 => 
            array (
                'id' => 22516,
                'nome' => 'Fábio Avelar de Oliveira',
                'partido' => 'AVANTE',
                'importado' => 1,
            ),
            43 => 
            array (
                'id' => 22521,
                'nome' => 'Noraldino Júnior',
                'partido' => 'PSC',
                'importado' => 1,
            ),
            44 => 
            array (
                'id' => 22523,
                'nome' => 'Cristiano Silveira',
                'partido' => 'PT',
                'importado' => 1,
            ),
            45 => 
            array (
                'id' => 22531,
                'nome' => 'Douglas Melo',
                'partido' => 'MDB',
                'importado' => 1,
            ),
            46 => 
            array (
                'id' => 22561,
                'nome' => 'João Magalhães',
                'partido' => 'MDB',
                'importado' => 1,
            ),
            47 => 
            array (
                'id' => 22581,
                'nome' => 'Doutor Jean Freire',
                'partido' => 'PT',
                'importado' => 1,
            ),
            48 => 
            array (
                'id' => 22607,
                'nome' => 'Roberto Andrade',
                'partido' => 'AVANTE',
                'importado' => 1,
            ),
            49 => 
            array (
                'id' => 22616,
                'nome' => 'Tito Torres',
                'partido' => 'PSDB',
                'importado' => 1,
            ),
            50 => 
            array (
                'id' => 24621,
                'nome' => 'Gustavo Santana',
                'partido' => 'PL',
                'importado' => 1,
            ),
            51 => 
            array (
                'id' => 26062,
                'nome' => 'Charles Santos',
                'partido' => 'REPUBLICANOS',
                'importado' => 1,
            ),
            52 => 
            array (
                'id' => 26098,
                'nome' => 'Beatriz Cerqueira',
                'partido' => 'PT',
                'importado' => 1,
            ),
            53 => 
            array (
                'id' => 26101,
                'nome' => 'Cleitinho Azevedo',
                'partido' => 'CIDADANIA',
                'importado' => 1,
            ),
            54 => 
            array (
                'id' => 26105,
                'nome' => 'Zé Guilherme',
                'partido' => 'PP',
                'importado' => 1,
            ),
            55 => 
            array (
                'id' => 26111,
                'nome' => 'Mauro Tramonte',
                'partido' => 'REPUBLICANOS',
                'importado' => 1,
            ),
            56 => 
            array (
                'id' => 26114,
                'nome' => 'Raul Belém',
                'partido' => 'PSC',
                'importado' => 1,
            ),
            57 => 
            array (
                'id' => 26119,
                'nome' => 'Professor Cleiton',
                'partido' => 'PSB',
                'importado' => 1,
            ),
            58 => 
            array (
                'id' => 26133,
                'nome' => 'Fernando Pacheco',
                'partido' => 'PV',
                'importado' => 1,
            ),
            59 => 
            array (
                'id' => 26134,
                'nome' => 'Guilherme da Cunha',
                'partido' => 'NOVO',
                'importado' => 1,
            ),
            60 => 
            array (
                'id' => 26135,
                'nome' => 'Gustavo Mitre',
                'partido' => 'PSC',
                'importado' => 1,
            ),
            61 => 
            array (
                'id' => 26136,
                'nome' => 'Osvaldo Lopes',
                'partido' => 'PSD',
                'importado' => 1,
            ),
            62 => 
            array (
                'id' => 26137,
                'nome' => 'Professor Irineu',
                'partido' => 'PSL',
                'importado' => 1,
            ),
            63 => 
            array (
                'id' => 26138,
                'nome' => 'Repórter Rafael Martins',
                'partido' => 'PSD',
                'importado' => 1,
            ),
            64 => 
            array (
                'id' => 26139,
                'nome' => 'Zé Reis',
                'partido' => 'PODE',
                'importado' => 1,
            ),
            65 => 
            array (
                'id' => 26143,
                'nome' => 'Andréia de Jesus',
                'partido' => 'PSOL',
                'importado' => 1,
            ),
            66 => 
            array (
                'id' => 26144,
                'nome' => 'Bartô',
                'partido' => 'NOVO',
                'importado' => 1,
            ),
            67 => 
            array (
                'id' => 26145,
                'nome' => 'Betão',
                'partido' => 'PT',
                'importado' => 1,
            ),
            68 => 
            array (
                'id' => 26148,
                'nome' => 'Bruno Engler',
                'partido' => 'PRTB',
                'importado' => 1,
            ),
            69 => 
            array (
                'id' => 26149,
                'nome' => 'Coronel Henrique',
                'partido' => 'PSL',
                'importado' => 1,
            ),
            70 => 
            array (
                'id' => 26150,
                'nome' => 'Delegado Heli Grilo',
                'partido' => 'PSL',
                'importado' => 1,
            ),
            71 => 
            array (
                'id' => 26151,
                'nome' => 'Doorgal Andrada',
                'partido' => 'PATRI',
                'importado' => 1,
            ),
            72 => 
            array (
                'id' => 26152,
                'nome' => 'Doutor Paulo',
                'partido' => 'PATRI',
                'importado' => 1,
            ),
            73 => 
            array (
                'id' => 26153,
                'nome' => 'Leninha',
                'partido' => 'PT',
                'importado' => 1,
            ),
            74 => 
            array (
                'id' => 26163,
                'nome' => 'Coronel Sandro',
                'partido' => 'PSL',
                'importado' => 1,
            ),
            75 => 
            array (
                'id' => 26164,
                'nome' => 'Delegada Sheila',
                'partido' => 'PSL',
                'importado' => 1,
            ),
            76 => 
            array (
                'id' => 26165,
                'nome' => 'Laura Serrano',
                'partido' => 'NOVO',
                'importado' => 1,
            ),
        ));
        
        
    }
}