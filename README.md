# Login e Sessões · PHP

Exercício de autenticação em PHP e MySQL, com formulário de acesso, sessão e dashboard.

## O que o projeto apresenta

- Formulário de login.
- Consulta de usuário no banco.
- Armazenamento de dados da sessão.
- Redirecionamento ao dashboard e logout.

## Tecnologias

PHP · MySQL · HTML · CSS

## Executar localmente

```bash
git clone https://github.com/WeldonCarlos/tela-login-php.git
cd tela-login-php
php -S localhost:8000
```

Requer PHP com a extensão MySQLi e um servidor MySQL configurado. Depois de preparar a conexão e as tabelas, acesse `http://localhost:8000`. Também é possível servir a pasta com Apache/XAMPP.

## Estrutura

- `config.php`
- `css/`
- `dashboard.php`
- `index.php`
- `login.php`
- `logout.php`

## Estado atual

Projeto didático. A consulta de login atual concatena entradas em SQL e compara senhas diretamente. Antes de uso real, implemente consultas preparadas e `password_hash`/`password_verify`. Configure a conexão em `config.php` e a tabela `usuarios`.

## Autoria

[Weldon Carlos](https://github.com/WeldonCarlos) · [LinkedIn](https://www.linkedin.com/in/weldon-carlos-41b488231/)
