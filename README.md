## Requisitos

* PHP 8.2 ou superior
* Composer
* Node.js 20 ou superior
* GIT

## Como rodar o projeto baixado

Duplicar o arquivo ".env.example" e renomear para ".env".<br>
Alterar no arquivo .env as credenciais do banco de dados<br>
Para a funcionalidade recuperar senha funcionar, necessário alterar as credenciais do servidor de envio de e-mail no arquivo .env.<br>

Instalar as dependências do PHP
```
composer install
```

Instalar as dependências do Node.js
```
npm install
```

Gerar a chave
```
php artisan key:generate
```

Executar as migration
```
php artisan migrate
```

Executar as seed
```
php artisan db:seed
```

Iniciar o projeto criado com Laravel
```
php artisan serve
```

Executar as bibliotecas Node.js
```
npm run dev
```

Acessar o conteúdo padrão do Laravel
```
http://127.0.0.1:8000
```

## Sequencia para criar o projeto

Instalar o pacote de auditoria do Laravel
```
composer require owen-it/laravel-auditing
```

Publicar a configuração e as migration para auditoria
```
php artisan vendor:publish --provider "OwenIt\Auditing\AuditingServiceProvider" --tag="config"
```
```
php artisan vendor:publish --provider "OwenIt\Auditing\AuditingServiceProvider" --tag="migrations"
```

Limpar cache de configuração
```
php artisan config:clear
```

Traduzir para português [Módulo de linguagem pt-BR](https://github.com/lucascudo/laravel-pt-BR-localization).

```
php artisan lang:publish
composer require lucascudo/laravel-pt-br-localization --dev
php artisan vendor:publish --tag=laravel-pt-br-localization
```


Instalar as dependências do Node.js
```
npm install
```

Instalar o framework Bootstrap
```
npm i --save bootstrap @popperjs/core
```

Executar as bibliotecas Node.js
```
npm run dev
```

Instalar a biblioteca de ícones
```
npm i --save @fortawesome/fontawesome-free
```

Configurar e-mail recuperar senha
```
php artisan vendor:publish --tag=laravel-mail
```

Instalar a biblioteca SweetAlert2
```
npm install sweetalert2
```

Instalar a dependência de permissão
```
composer require spatie/laravel-permission
```

Criar as migrations
```
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
```

Limpar o cache de configuração
```
php artisan config:clear
```

Executar as migrations
```
php artisan migrate
```

### Será criado 5 tabelas
* funções/roles – Esta tabela armazenará o nome de todas as funções da aplicação.
* permissões/permissions – Esta tabela armazenará o nome de todas as permissões do aplicativo.
* role_has_permissions  – Esta tabela armazenará todas as permissões atribuídas a cada função.
* model_has_roles  – Esta tabela armazenará funções atribuídas a cada modelo.
* model_has_permissions  – Esta tabela armazenará as permissões atribuídas a cada modelo. Por exemplo, um modelo de usuário.


## Como usar o GitHub
Baixar os arquivos do Git
```
git clone --branch <branch_name> <repository_url> .
```

Verificar a branch
```
git branch 
```

Baixar as atualizações
```
git pull
```
