# Projeto_WEB

Feito por:
```sh
Tiago Oliveira Dallécio ----- RA 22001336
Renan Rohers Salvador ------- RA 22003561
Tiago Brandolis Mello ------- RA 22024243
```
### Passo a passo
Clone o repositório, entre na pasta
```sh 
cd( Nome da pasta )
```
 e execute os comandos abaixo:

Entre no VSCode
```sh
code .
```

Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=Laravel
APP_URL=http://localhost:8080

DB_PASSWORD=root
```


Suba os containers do projeto
```sh
docker compose up -d
```


Acessar o container
```sh
docker compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```
Gerar o banco de dados do projeto 
```sh
php artisan migrate:fresh --seed
```


Acesse o projeto
[http://localhost:8080](http://localhost:8080)

As seguintes contas estarão disponíveis para o login:
```sh
Secretaria
email:secretaria@gmail.com
Senha=secret123
```
```sh
Admin
email:admin@gmail.com
Senha=admin123
```
```sh
Aluno
email:tidallecio@gmail.com
Senha=12345678
```
```sh
Professor
email:xastre@gmail.com
Senha=12345678
```


Acesse o phpmyadmin para visualizar o banco de dados
[http://localhost:8081](http://localhost:8081)

