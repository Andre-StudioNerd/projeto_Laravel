# projeto_Laravel

> Projeto Laravel — estrutura base de aplicação com Laravel para aprendizado ou uso prático

## 📖 Sobre
Este projeto é uma aplicação base usando Laravel, para estruturar funcionalidades, rotas, modelos, controladores e boas práticas no desenvolvimento em PHP. Serve como template ou ponto de partida para projetos mais específicos.

## ⚙️ Funcionalidades
- Autenticação de usuários (login, registro, senhas)
- Rotas CRUD para recursos principais
- Middleware para filtros e autorização
- Controladores organizados por domínio
- Uso de migrations, seeders e factories
- Configuração de relações entre modelos

## 🚀 Tecnologias / Pacotes
- PHP >= 8.0
- Laravel Framework
- Composer
- Banco de dados (MySQL, PostgreSQL, SQLite etc.)
- Pacotes adicionais conforme usado no projeto

## 🧩 Requisitos
- PHP instalado (versão compatível com Laravel)
- Composer
- Banco de dados configurado
- Extensões PHP necessárias (pdo, mbstring, openssl, etc.)

## 💻 Instalação local
Clone o repositório:
git clone https://github.com/Andre-StudioNerd/projeto_Laravel.git
cd projeto_Laravel
composer install
cp .env.example .env
php artisan key:generate
Configure o arquivo .env com os dados do banco
php artisan migrate
php artisan db:seed
php artisan serve

A aplicação ficará disponível por padrão em http://127.0.0.1:8000

## 🔑 Configurações / Variáveis de ambiente
No arquivo .env configure:
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha

## 🔧 Comandos úteis
php artisan serve → Inicia servidor de desenvolvimento  
php artisan migrate → Executa migrations  
php artisan db:seed → Executa seeders  
php artisan make:controller X → Cria um novo controlador  
php artisan make:model X -m → Cria modelo com migration  

## 📂 Estrutura de pastas
projeto_Laravel/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Middleware/
│   ├── Models/
│   └── ...
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   ├── seeders/
│   └── factories/
├── public/
├── resources/
│   ├── views/
│   └── ...
├── routes/
│   └── web.php, api.php
├── storage/
├── tests/
├── .env.example
├── artisan
├── composer.json
└── README.md

## 🤝 Contribuição
Contribuições são bem-vindas!  
Faça fork → Crie branch → Commit → Push → Pull Request

## 📄 Licença
Este projeto está licenciado sob a MIT License. Veja LICENSE.

## 📬 Contato
Autor: André  
GitHub: https://github.com/Andre-StudioNerd  

