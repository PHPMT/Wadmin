# Wadmin
Idea

## Workflow

- Definindo

## Servidor

Pode ser usado o servidor embutido do PHP a partir do diretório root:

```
php -S localhost:8080 -t public
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