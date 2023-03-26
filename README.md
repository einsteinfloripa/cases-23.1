Para rodar o Projeto do Back-End :

Ultilizado :

    - Laravel 10

    - PHP 8.2.4 (cli)

    - Mysql

Para Rodar o Projeto Certifique de que voce tenha o php instalado e o laravel,
depois de verificar, adicione um arquivo .env com o seu banco de dados (Ultilize o modelo do arquivo .env.example), altere o DB_DATABASE e o DB_PASSWORD para o seu banco feito isso, rode o comando:

-   php artisan migrate
-   php artisan serve

rodou? certo, agora voce tem um server local para o projeto

AGORA os METODOS do projeto:

GET:
URL: http://127.0.0.1:8000/api/members/
RETORNO: todos os membros do banco

POST:
URL: http://127.0.0.1:8000/api/members/
BODY - JSON:
{
"name":"nome",
"email":"bernardo@braga.com",
"address":"endereco do user",
"phone":"(48) 99934-6334",
"birthday":"20/08/2001"
}
RETORNO: 'membro salvo com sucesso'

PUT:
URL: http://127.0.0.1:8000/api/members/${id}
BODY - JSON:
{
"name":"nome",
"email":"bernardo@braga.com",
"address":"endereco do user",
"phone":"(48) 99934-6334",
"birthday":"20/08/2001"
}
RETORNO: 'atualizado com sucesso'

DELETE:
URL: http://127.0.0.1:8000/api/members/${id}

RETORNO: 'deletado com sucesso'
