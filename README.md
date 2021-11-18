[![](https://dotlib.com/theme/img/logos/logo.png)](http://www.dotlib.com)

# informações para abrir o projeto

## Requitos
- Composer
- php 8 ou superior
- nodejs versão lts +

## Como rodar o projeto

- Faça o clone do projeto na sua maquina.
- Mude para a branch Victor-Silva.
- Após o checkout entre na pasta dotlib-victor aonde esta localizado o projeto.
- Rode o comando composer install, caso necessário instale as extenções pedidas.
 - sudo apt-get install php8.0-curl
 - sudo apt-get install php-mbstring
 - sudo apt-get install php8.0-mysql
 - sudo apt-get install php-xml
- Rode o comando sail up -d ou ./vendor/bin/sail up -d para inciciar os container do docker em modo desenvolvimento.
- Crie um banco de dados chamado "dotlib_victor".
- Se o docker abrir os containers corretamente, rode o comando "php artisan migrate" para rodar todas as migrates.
- Rode o comando "php artisan db:seed" para preencher as tabelas ultilizando o seeder.
- Entre na rota "127.0.0.1:8000" ou a porta que você definiu no php artisan serve.
