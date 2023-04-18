# Sistema-Escolar

## Sistema escolar desenvolvido em PHP com Codeigniter 4 + AdminLTE v3, com o objetivo de informatizar o sistema educacional pode ser implementado em qualquer escola, publica ou privada!

## O que é o CodeIgniter?

CodeIgniter é um framework web full-stack PHP que é leve, rápido, flexível e seguro. Mais informações podem ser encontradas no [Site Oficial](https://codeigniter.com).

Mais informações sobre os planos para a versão 4 podem ser encontradas no [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) nos fóruns.

O guia do usuário correspondente à versão mais recente do framework pode ser encontrado
[aqui](https://codeigniter4.github.io/userguide/).

## Instalação e atualizações

Para criar um projeto: `composer create-project codeigniter4/appstarter` ou `composer update` para baixar as dependencias desse projeto e executar sempre que houver uma nova versão do framework.
## Configurar

Copie  `env` e `.env` adapte para seu aplicativo, especificamente o baseURL e quaisquer configurações de banco de dados.

## Mudança importante com index.php

`index.php` não está mais na raiz do projeto! Ele foi movido para dentro da pasta *public* , para melhor segurança e separação dos componentes.

Isso significa que você deve configurar seu servidor web para "apontar" para a pasta *public* do seu projeto , e não para a raiz do projeto. Uma prática melhor seria configurar um host virtual para apontar para lá. Uma prática ruim seria apontar seu servidor da Web para a raiz do projeto e esperar inserir *public/...* , pois o restante de sua lógica e a estrutura são expostos.

**Por favor**, leia o guia do usuário para uma melhor explicação de como o CI4 funciona!

## AdminLTE v3

O layout e componentes do AdminLTE v3 utilizado nesse projeto pode ser visto [aqui](https://adminlte.io/themes/v3/index3.html)