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
                'importado' => 1,
                'nome' => 'Sávio Souza Cruz',
                'partido' => 'MDB',
            ),
            1 => 
            array (
                'id' => 2267,
                'importado' => 1,
                'nome' => 'Celise Laviola',
                'partido' => 'MDB',
            ),
            2 => 
            array (
                'id' => 2698,
                'importado' => 1,
                'nome' => 'Virgílio Guimarães',
                'partido' => 'PT',
            ),
            3 => 
            array (
                'id' => 4458,
                'importado' => 1,
                'nome' => 'Marquinho Lemos',
                'partido' => 'PT',
            ),
            4 => 
            array (
                'id' => 5905,
                'importado' => 1,
                'nome' => 'Hely Tarqüínio',
                'partido' => 'PV',
            ),
            5 => 
            array (
                'id' => 7327,
                'importado' => 1,
                'nome' => 'Antonio Carlos Arantes',
                'partido' => 'PSDB',
            ),
            6 => 
            array (
                'id' => 7752,
                'importado' => 1,
                'nome' => 'Alencar da Silveira Jr.',
                'partido' => 'PDT',
            ),
            7 => 
            array (
                'id' => 7758,
                'importado' => 1,
                'nome' => 'Carlos Pimenta',
                'partido' => 'PDT',
            ),
            8 => 
            array (
                'id' => 7762,
                'importado' => 1,
                'nome' => 'Gil Pereira',
                'partido' => 'PSD',
            ),
            9 => 
            array (
                'id' => 7766,
                'importado' => 1,
                'nome' => 'João Leite',
                'partido' => 'PSDB',
            ),
            10 => 
            array (
                'id' => 7769,
                'importado' => 1,
                'nome' => 'Leonídio Bouças',
                'partido' => 'MDB',
            ),
            11 => 
            array (
                'id' => 8095,
                'importado' => 1,
                'nome' => 'Ione Pinheiro',
                'partido' => 'DEM',
            ),
            12 => 
            array (
                'id' => 9652,
                'importado' => 1,
                'nome' => 'Arlen Santiago',
                'partido' => 'PTB',
            ),
            13 => 
            array (
                'id' => 9655,
                'importado' => 1,
                'nome' => 'Dalmo Ribeiro Silva',
                'partido' => 'PSDB',
            ),
            14 => 
            array (
                'id' => 9673,
                'importado' => 1,
                'nome' => 'Sargento Rodrigues',
                'partido' => 'PTB',
            ),
            15 => 
            array (
                'id' => 10002,
                'importado' => 1,
                'nome' => 'Carlos Henrique',
                'partido' => 'REPUBLICANOS',
            ),
            16 => 
            array (
                'id' => 10434,
                'importado' => 1,
                'nome' => 'Leandro Genaro',
                'partido' => 'PSD',
            ),
            17 => 
            array (
                'id' => 12195,
                'importado' => 1,
                'nome' => 'André Quintão',
                'partido' => 'PT',
            ),
            18 => 
            array (
                'id' => 12202,
                'importado' => 1,
                'nome' => 'Gustavo Valadares',
                'partido' => 'PSDB',
            ),
            19 => 
            array (
                'id' => 12210,
                'importado' => 1,
                'nome' => 'Luiz Humberto Carneiro',
                'partido' => 'PSDB',
            ),
            20 => 
            array (
                'id' => 12213,
                'importado' => 1,
                'nome' => 'Marília Campos',
                'partido' => 'PT',
            ),
            21 => 
            array (
                'id' => 13425,
                'importado' => 1,
                'nome' => 'Betinho Pinto Coelho',
                'partido' => 'SOLIDARIEDADE',
            ),
            22 => 
            array (
                'id' => 15245,
                'importado' => 1,
                'nome' => 'Agostinho Patrus',
                'partido' => 'PV',
            ),
            23 => 
            array (
                'id' => 15246,
                'importado' => 1,
                'nome' => 'Braulio Braz',
                'partido' => 'PTB',
            ),
            24 => 
            array (
                'id' => 15260,
                'importado' => 1,
                'nome' => 'Rosângela Reis',
                'partido' => 'PODE',
            ),
            25 => 
            array (
                'id' => 15265,
                'importado' => 1,
                'nome' => 'Inácio Franco',
                'partido' => 'PV',
            ),
            26 => 
            array (
                'id' => 16019,
                'importado' => 1,
                'nome' => 'Léo Portela',
                'partido' => 'PL',
            ),
            27 => 
            array (
                'id' => 17872,
                'importado' => 1,
                'nome' => 'Professor Wendel Mesquita',
                'partido' => 'SOLIDARIEDADE',
            ),
            28 => 
            array (
                'id' => 17919,
                'importado' => 1,
                'nome' => 'Duarte Bechir',
                'partido' => 'PSD',
            ),
            29 => 
            array (
                'id' => 18848,
                'importado' => 1,
                'nome' => 'Cássio Soares',
                'partido' => 'PSD',
            ),
            30 => 
            array (
                'id' => 18849,
                'importado' => 1,
                'nome' => 'Celinho Sintrocel',
                'partido' => 'PCdoB',
            ),
            31 => 
            array (
                'id' => 18850,
                'importado' => 1,
                'nome' => 'Doutor Wilson Batista',
                'partido' => 'PSD',
            ),
            32 => 
            array (
                'id' => 18852,
                'importado' => 1,
                'nome' => 'Elismar Prado',
                'partido' => 'PROS',
            ),
            33 => 
            array (
                'id' => 18857,
                'importado' => 1,
                'nome' => 'Bosco',
                'partido' => 'AVANTE',
            ),
            34 => 
            array (
                'id' => 18858,
                'importado' => 1,
                'nome' => 'João Vítor Xavier',
                'partido' => 'CIDADANIA',
            ),
            35 => 
            array (
                'id' => 18860,
                'importado' => 1,
                'nome' => 'Tadeu Martins Leite',
                'partido' => 'MDB',
            ),
            36 => 
            array (
                'id' => 18863,
                'importado' => 1,
                'nome' => 'Neilando Pimenta',
                'partido' => 'PODE',
            ),
            37 => 
            array (
                'id' => 18867,
                'importado' => 1,
                'nome' => 'Ulysses Gomes',
                'partido' => 'PT',
            ),
            38 => 
            array (
                'id' => 19150,
                'importado' => 1,
                'nome' => 'Ana Paula Siqueira',
                'partido' => 'REDE',
            ),
            39 => 
            array (
                'id' => 20231,
                'importado' => 1,
                'nome' => 'Glaycon Franco',
                'partido' => 'PV',
            ),
            40 => 
            array (
                'id' => 21125,
                'importado' => 1,
                'nome' => 'Mário Henrique Caixa',
                'partido' => 'PV',
            ),
            41 => 
            array (
                'id' => 22515,
                'importado' => 1,
                'nome' => 'Thiago Cota',
                'partido' => 'MDB',
            ),
            42 => 
            array (
                'id' => 22516,
                'importado' => 1,
                'nome' => 'Fábio Avelar de Oliveira',
                'partido' => 'AVANTE',
            ),
            43 => 
            array (
                'id' => 22521,
                'importado' => 1,
                'nome' => 'Noraldino Júnior',
                'partido' => 'PSC',
            ),
            44 => 
            array (
                'id' => 22523,
                'importado' => 1,
                'nome' => 'Cristiano Silveira',
                'partido' => 'PT',
            ),
            45 => 
            array (
                'id' => 22531,
                'importado' => 1,
                'nome' => 'Douglas Melo',
                'partido' => 'MDB',
            ),
            46 => 
            array (
                'id' => 22561,
                'importado' => 1,
                'nome' => 'João Magalhães',
                'partido' => 'MDB',
            ),
            47 => 
            array (
                'id' => 22581,
                'importado' => 1,
                'nome' => 'Doutor Jean Freire',
                'partido' => 'PT',
            ),
            48 => 
            array (
                'id' => 22607,
                'importado' => 1,
                'nome' => 'Roberto Andrade',
                'partido' => 'AVANTE',
            ),
            49 => 
            array (
                'id' => 22616,
                'importado' => 1,
                'nome' => 'Tito Torres',
                'partido' => 'PSDB',
            ),
            50 => 
            array (
                'id' => 24621,
                'importado' => 1,
                'nome' => 'Gustavo Santana',
                'partido' => 'PL',
            ),
            51 => 
            array (
                'id' => 26062,
                'importado' => 1,
                'nome' => 'Charles Santos',
                'partido' => 'REPUBLICANOS',
            ),
            52 => 
            array (
                'id' => 26098,
                'importado' => 1,
                'nome' => 'Beatriz Cerqueira',
                'partido' => 'PT',
            ),
            53 => 
            array (
                'id' => 26101,
                'importado' => 1,
                'nome' => 'Cleitinho Azevedo',
                'partido' => 'CIDADANIA',
            ),
            54 => 
            array (
                'id' => 26105,
                'importado' => 1,
                'nome' => 'Zé Guilherme',
                'partido' => 'PP',
            ),
            55 => 
            array (
                'id' => 26111,
                'importado' => 1,
                'nome' => 'Mauro Tramonte',
                'partido' => 'REPUBLICANOS',
            ),
            56 => 
            array (
                'id' => 26114,
                'importado' => 1,
                'nome' => 'Raul Belém',
                'partido' => 'PSC',
            ),
            57 => 
            array (
                'id' => 26119,
                'importado' => 1,
                'nome' => 'Professor Cleiton',
                'partido' => 'PSB',
            ),
            58 => 
            array (
                'id' => 26133,
                'importado' => 1,
                'nome' => 'Fernando Pacheco',
                'partido' => 'PV',
            ),
            59 => 
            array (
                'id' => 26134,
                'importado' => 1,
                'nome' => 'Guilherme da Cunha',
                'partido' => 'NOVO',
            ),
            60 => 
            array (
                'id' => 26135,
                'importado' => 1,
                'nome' => 'Gustavo Mitre',
                'partido' => 'PSC',
            ),
            61 => 
            array (
                'id' => 26136,
                'importado' => 1,
                'nome' => 'Osvaldo Lopes',
                'partido' => 'PSD',
            ),
            62 => 
            array (
                'id' => 26137,
                'importado' => 1,
                'nome' => 'Professor Irineu',
                'partido' => 'PSL',
            ),
            63 => 
            array (
                'id' => 26138,
                'importado' => 1,
                'nome' => 'Repórter Rafael Martins',
                'partido' => 'PSD',
            ),
            64 => 
            array (
                'id' => 26139,
                'importado' => 1,
                'nome' => 'Zé Reis',
                'partido' => 'PODE',
            ),
            65 => 
            array (
                'id' => 26143,
                'importado' => 1,
                'nome' => 'Andréia de Jesus',
                'partido' => 'PSOL',
            ),
            66 => 
            array (
                'id' => 26144,
                'importado' => 1,
                'nome' => 'Bartô',
                'partido' => 'NOVO',
            ),
            67 => 
            array (
                'id' => 26145,
                'importado' => 1,
                'nome' => 'Betão',
                'partido' => 'PT',
            ),
            68 => 
            array (
                'id' => 26148,
                'importado' => 1,
                'nome' => 'Bruno Engler',
                'partido' => 'PRTB',
            ),
            69 => 
            array (
                'id' => 26149,
                'importado' => 1,
                'nome' => 'Coronel Henrique',
                'partido' => 'PSL',
            ),
            70 => 
            array (
                'id' => 26150,
                'importado' => 1,
                'nome' => 'Delegado Heli Grilo',
                'partido' => 'PSL',
            ),
            71 => 
            array (
                'id' => 26151,
                'importado' => 1,
                'nome' => 'Doorgal Andrada',
                'partido' => 'PATRI',
            ),
            72 => 
            array (
                'id' => 26152,
                'importado' => 1,
                'nome' => 'Doutor Paulo',
                'partido' => 'PATRI',
            ),
            73 => 
            array (
                'id' => 26153,
                'importado' => 1,
                'nome' => 'Leninha',
                'partido' => 'PT',
            ),
            74 => 
            array (
                'id' => 26163,
                'importado' => 1,
                'nome' => 'Coronel Sandro',
                'partido' => 'PSL',
            ),
            75 => 
            array (
                'id' => 26164,
                'importado' => 1,
                'nome' => 'Delegada Sheila',
                'partido' => 'PSL',
            ),
            76 => 
            array (
                'id' => 26165,
                'importado' => 1,
                'nome' => 'Laura Serrano',
                'partido' => 'NOVO',
            ),
        ));
        
        
    }
}