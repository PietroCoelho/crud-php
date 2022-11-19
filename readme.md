# Servico de Entregas com MVC
Código da implementação de um Serviço Utilizando Arquitetura MVC.


## Banco de dados
criando tabela no banco de dados
```sql
  CREATE TABLE public.entrega (
	id serial NOT NULL,
	codigo int4 NULL,
	titulo varchar(255) NULL,
	descricao text(65535) NULL,
	prazo_entrega date NULL,
	entrega_concluida bool NULL
);
```

## Configuração
As credenciais do banco de dados estão no arquivo `./app/Core/DB.php` e você deve alterar para as configurações do seu ambiente (HOST, PORT, NAME, USER e PASS).

## Composer
Para a aplicação funcionar, é necessário rodar o Composer para utilizar as classes de autoload.

Caso não tenha o Composer instalado, baixe pelo site oficial: [https://getcomposer.org/download](https://getcomposer.org/download/)

Para rodar o composer, basta acessar a pasta do projeto e executar o comando abaixo em seu terminal:
```shell
 composer install
```

Após essa execução uma pasta com o nome `vendor` será criada na raiz do projeto e você já poderá acessar pelo seu navegador.
