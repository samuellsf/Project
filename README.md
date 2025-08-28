# Projeto Signos Zodiacais

## OBJETIVOS
Definição dos objetivos da aula prática:

1. Criar uma página front-end com um formulário contendo um campo para inserção da data de nascimento e um botão para realizar consulta de signo;
2. Desenvolver uma página front-end que contenha o resultado da consulta ao signo zodiacal;
3. Desenvolver a lógica necessária para realizar a consulta a um arquivo XML que contenha as informações de cada signo;
4. Desenvolver a estilização das páginas: formulário e resultado;
5. Testar a aplicação.

---

## INFRAESTRUTURA

### Instalações
- Laboratório de Informática

### Materiais de consumo
- Não se aplica

### Software
- Visual Studio Code
- Gratuito
- Inclui suporte para depuração, controle de versionamento Git incorporado, realce de sintaxe, complementação inteligente de código, snippets e refatoração de código.

### Equipamento de Proteção Individual (EPI)
- Não se aplica

---

## PROCEDIMENTOS PRÁTICOS

### Atividade proposta
Desenvolver uma página web para descobrir o signo do usuário de acordo com a sua data de nascimento. A página inicial contém um formulário para que o usuário insira sua data de nascimento e clique em um botão que redireciona para uma página com as principais informações do signo zodiacal. Para a estilização, utiliza-se Bootstrap e folhas de estilo próprias.

### Passo a passo
1. Instalar **XAMPP** no computador: [https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html)
2. Criar uma pasta chamada `Project` dentro do caminho `xampp/htdocs/`.
3. Abrir a pasta no VSCode usando **Open Folder**.
4. Criar a estrutura de pastas e arquivos:
5. assets

css

style.css

imgs

js

layouts

header.php

index.php

show_zodiac_sign.php

signos.xml5. Criar o arquivo `signos.xml` com a estrutura:
```xml
<?xml version="1.0"?>
<signos>
  <signo>
    <dataInicio>21/03</dataInicio>
    <dataFim>20/04</dataFim>
    <signoNome>Áries</signoNome>
    <descricao>Lorem ipsum dolor sit amet.</descricao>
  </signo>
  <!-- Adicionar os demais signos -->
</signos>


Criar a estrutura básica do HTML no index.php e separar o topo (head) no arquivo header.php.

Incluir o link do Bootstrap no header.php:

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


Incluir o header.php no index.php:

<?php include('header.php'); ?>


Criar o formulário de inserção da data de nascimento:

<form id="signo-form" method="POST" action="show_zodiac_sign.php">
  <input type="date" name="data_nascimento" class="form-control" required>
  <button type="submit" class="btn btn-primary">Consultar Signo</button>
</form>


No show_zodiac_sign.php, incluir o header.php e carregar o XML:

<?php include('header.php'); ?>
$data_nascimento = $_POST['data_nascimento'];
$signos = simplexml_load_file("signos.xml");


Iterar os signos para verificar qual corresponde à data informada, considerando que o XML não contém o ano.

Estilizar a página utilizando Bootstrap e CSS próprio.

Testar a aplicação.

CHECKLIST

Utilização de editor de código recomendado (VSCode);

Criação do arquivo signos.xml;

Criação da página inicial com formulário de data de nascimento;

Criação da página de resultado do signo;

Lógica para leitura do XML;

Adaptação das datas para comparação;

Teste do funcionamento da aplicação.

RESULTADOS

A pasta do projeto deve conter:

Arquivos PHP (index.php, show_zodiac_sign.php, header.php)

Arquivo de estilização (style.css)

Arquivo XML (signos.xml) com informações de todos os signos zodiacais.
