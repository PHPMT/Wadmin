Wadmin
======
Idealizado e iniciado por Waldilson Oliver **(Ainda em desenvolvimento)**

[![Stories in Ready](https://badge.waffle.io/jackmakiyama/Wadmin.png?label=ready)](http://waffle.io/jackmakiyama/Wadmin)

## Workflow **(Definindo)**

GIT e Versionamento (extraido do oPHPortunidades):

- **master**: É o branch estável, *merge* aqui só de features inteiras.
- **develop**: É o branch instável, buscaremos deixar ele o mais estável possível mas os merges de desenvolvimento devem ser feitos aqui antes de ir ao master.
- **<issue>-<short-title>**: Branches relacionadas a issues no repositório do GitLab.

O versionamento utilizado para as tags é o [SemVer](http://semver.org).

## Servidor

Pode ser usado o servidor embutido do PHP a partir do diretório root:

```
$ php -S localhost:8080 -t public
```

Ou definindo um virtual host no apache, redefinindo o caminho do diretorio root:

```
<VirtualHost *:80>
    ServerName wadmin.dev
    DocumentRoot "/Users/j4ck3ds0n/Sites/wadmin/public"

    SetEnv APP_ENV "dev"

    <Directory "/Users/j4ck3ds0n/Sites/wadmin/public">
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Order allow,deny
        Allow from all
    </Directory>
</VirtualHost>
```

e adicionando no seu arquivo `hosts`:

```
127.0.0.1      wadmin.dev
```

## Dependências

Com o node.js, bower e grunt instalados na sua maquina siga os passos para instalar as dependências do Grunt:

```
$ npm install
```

## Grunt

Você pode assistir os arquivos scss e js com o comando:

```
$ grunt watch
```

Ou gerar os assests com o comando:

```
$ grunt
```
