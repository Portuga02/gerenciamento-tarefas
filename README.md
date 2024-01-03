<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

SISTEMA SIMPLES PARA CADASTRAMENTO DE USUARIOS E USABILIDADE DE CRIAÇÃO DE ATIVIDADES, FEITO EM LARAVEL E UTILIZANDO TECNOLOGIAS FRONT-END COMO VITE, 

 para o bom funcionamento do sistema deve-se instalar os pacotes necessarios do laravel como manda na documentação, 

 php  8.1 (pode ser separado ou então com o wampp server ou xampp, o que for mais viavel )
 Laravel  10X
   
     
1.1 instalações necessárias

        
         composer
         npm 
         node versão atual 
         vite
         fonteaewsome    
         breezer-larvel
        se der algum erro de drive
        
        ativar o drive no php. ini  
        
        extension=pdo_pgsql


1.1 para executar o projeto deve-se usar o npm e também o php artisan server e as migrations do laravel, no terminal execute 

    1.1   composer global require laravel/installer  OU      laravel new example-app  (caso já não tenha instalado o laravel na maquina)
       
        
         criar à base de dados do sistema: gerenciamento_tarefas
         rodas às migrations : php artisan migrate
         instalar fonteawesome :  npm install @fortawesome/fontawesome-free       
          
           se tiver necessidade instalar também o laravel breezer dentro do projeto já clonado em maquina
           composer require laravel/breeze --dev  
           escolher a versao com blade e livewire tailwindcss       
         
         npm run build or npm run dev
         php artisan serve

2 para usar o sistema primeiro 

        deve-se cadastrar na tela de login e 
        depois fazer o login com o email cadastrado 
         
3 importante

         ver as configurações no .env se está de acordo com sua maquina local
