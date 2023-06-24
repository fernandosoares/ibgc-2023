# Congresso IBGC

LP do 24 Congresso IBGC

## Autor

- [@fernandosoares](https://www.github.com/fernandosoares)

## Rodando localmente

Com o Docker rodando + Lando.dev instalado, crie a pasta do projeto e nela, crie o arquivo .lando.yml

```
name: ibgc-congresso-2023
recipe: wordpress
config:
  webroot: .
  php: 7.4
  via: apache
  xdebug: false
# Para ter acesso ao database local via IDE, vamos mapear a porta do servico do database
services:
  database:
    portforward: 3307
```

Então, execute:

```bash
lando rebuild -y
```

Na sequencia, instale a última versão do Wordpress executando o seguinte comando:

```bash
lando wp core download --locale=pt_BR
```

O próximo passo é configurar o WP antes da instalação

```bash
lando wp config create --dbname=wordpress --dbuser=wordpress --dbpass=wordpress --dbhost=database
```

Instalando o WP com as configurações para o Lando

```bash
lando wp core install --url=https://ibgc-congresso-2023.lndo.site --title="Congresso | IBGC 2023" --admin_user=admin --admin_password=admin --admin_email=admin@lndo.site
```

Agora os plugins necessários para gerar o conteúdo dinânico e exporta-lo de maneira estática a partir do Wordpress

```bash
lando wp plugin install classic-editor simply-static --activate
```

Navegue ao diretório de temas (/wp-content/themes) e clone o projeto:

```bash
git clone https://github.com/fernandosoares/ibgc-2023
```

Logo em seguida, acesse o endereço do projeto no navegador e configure, caso necessário:

```
base: wordpress
user: wordpress
pass: wordpress
host: database
```

## Deploy Estático

Para fazer o deploy desse projeto é necessário configurar o output dos arquivos via Admin
no plugin **Simply Static**, gerar o pacote e subir o conteúdo da pasta **BUILD** na raiz do servidor
