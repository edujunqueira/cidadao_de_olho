<h1 align="center">Cidadão de Olho</h1>

## Sobre

Sistema criado para Processo de Seleção, utilizado PHP-Laravel.

## Utilizando

Requer:
- PHP
- <a href="https://getcomposer.org">Composer</a>
- <a href="https://laravel.com">Laravel</a> (composer require install/laravel)
- <a href="http://docs.guzzlephp.org/en/stable/">Guzzle</a> (composer require guzzlehttp/guzzle)
- Certificado cURL (baixado: <a href="https://curl.haxx.se/ca/cacert.pem">cacert.pem</a>, e alterando o php.ini -> curl.cainfo = "path_to_cert\cacert.pem" )

Instruções:
- Configurar arquivo <strong>.env</strong> do Laravel, com informações de banco de dado
- Criar banco de dados (utilizado MySQL, com schema nomeado "cidadaodeolho")
- Migrar banco de dados (comando: "php artisan migrate")
