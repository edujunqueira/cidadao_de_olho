<h1 align="center">Cidadão de Olho</h1>

## Sobre

Sistema criado para Processo de Seleção, utilizando PHP-Laravel.

## Inicializando

Requer:
- <a href="https://www.php.net">PHP</a>
- <a href="https://getcomposer.org">Composer</a>
- <a href="https://laravel.com">Laravel</a> 

        composer require install/laravel
- <a href="http://docs.guzzlephp.org/en/stable/">Guzzle</a> 

        composer require guzzlehttp/guzzle
- Certificado cURL (baixado: <a href="https://curl.haxx.se/ca/cacert.pem">cacert.pem</a>, e alterando o php.ini -> curl.cainfo = "path_to_cert\cacert.pem" )

Instruções:
- Configurar arquivo <strong>.env</strong> do Laravel, com informações de banco de dado
- Criar banco de dados (utilizado MySQL, com schema nomeado "cidadaodeolho")
- Migrar banco de dados (comando: "php artisan migrate")

## Utilizando

- <strong>Opção 1:</strong>

    Utilizar o comando 

        php artisan db:seed
        
    no terminal (o que populará os bancos com os dados já importados da Assembleia).
    
- <strong>Opção 2:</strong>
 
<p align="center"><img src="https://imgur.com/PZdbdRg.png" width="800"></p>

  Na página de Deputados, temos a opção de importar os deputados

<p align="center"><img src="https://imgur.com/phRNYny.png" width="800"></p>

  E então, podemos importar as despesas (idealmente um a um, visto que importar todas as despesas pode demorar significantemente)

<p align="center"><img src="https://imgur.com/ekRLju9.png" width="800"></p>


- <strong>Continuação:</strong>

   Podemos então, visualizar a página de cada deputado

<p align="center"><img src="https://imgur.com/gYgRSwV.png" width="800"></p>

   E podemos também verificar análises feitas com os dados de todos as despesas já importadas

<p align="center"><img src="https://imgur.com/Q3LF6UD.png" width="800"></p>

