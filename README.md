<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Order Manage

Uma API para administrar ordens de serviço. Foi construída usando framework Laravel com PHP e utilizando banco de dados MySQL. O projeto foi feito como teste para a empresa SygnalGroup.


## Como executar a API

- Clonar o projeto: `git clone https://github.com/Maartyr/Order-Manage.git`
- Criar o banco de dados no MySQL com o nome: `ordermanage`
- Rodar a migration do banco: `php artisan make:migration create_ordermanages_table --create=ordermanages`
- Rodar o server da API no terminal: `php artisan serve`
- Utilizar o arquivo do Imsomnia (`Insomnia-All_2022-01-29.json`) que está na raiz do projeto para conseguir realizar os testes das rotas.