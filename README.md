# UNICAT

## Acesse o site remotamente!
LINK: https://unicatbrasil.000webhostapp.com/
## Quem somos?
### A Unicat
O UNICAT é uma iniciativa dedicada ao bem-estar dos gatos que residem nos campi universitários. Muitas vezes, esses animais enfrentam condições adversas, incluindo escassez de alimentos, doenças e falta de abrigo adequado.

### Qual nosso objetivo ?
O projeto UNICAT visa criar um ambiente mais seguro e saudável para os gatos nas universidades, reduzindo o número de animais abandonados e promovendo a conscientização sobre a importância da adoção responsável. Além disso, busca envolver a comunidade acadêmica, fomentando a participação voluntária e o desenvolvimento de uma cultura de cuidado e respeito pelos animais.

### O que nós fizemos ?
#### CRUD dos gatos
Com intuito de começar o projeto UNICAT decidimos fazer uma aplicação CRUD com front e back de ponta a ponta. Nosso objetivo foi criar o CRUD de gatos, ou seja, cadastrar, editar, atualizar e excluir os gatos. Acabamos fazendo alguns adicionais que vão alem do CRUD como por exemplo uma pagina index so com a apresentação do projeto UNICAT.
#### Painel
Foi criado um painel com a tela de cadastrar novos gatos e a tela de visualizar os gatos podendo editar e excluir um por um. <b>O painel não tem gerenciamento de acesso pois o foco do projeto é o CRUD dos gatos.</b>

## Tecnologias usadas
 - HTML
 - CSS
 - JavaScript
 - Bootstrap
 - phpmyadmin
 - PHP

## Explicando o código
#### config.php 
O arquivo config.php serve para criar a conexão com o banco de dados.
#### novo-gato.php
O arquivo novo-gato.php tem um formulário para cadastrar um novo gato, a resposta desse formulário é enviada para o arquivo de salvar.
#### editar-gato.php
O arquivo editar-gato.php faz uma consulta do registro a ser editado com um WHERE do id enviado quando clicado no botão editar de uma linha especifica da tabela. Assim enviando o formulario novamente editado daquela linha específica.
#### listar-gato.php
O arquivo listar-gato.php faz um select * from gatos; (selecionando todos os gatos) e percorre por todos os resultados exibindo em uma tabela HTML.
#### painel.php
O arquivo painel.php é a pagina inical do painel, ele faz um switch case que recebe uma requisição quando o usuário clica no <a> dependendo do resultado da requisição ele inclui uma pagna especifica.
#### salvar-gato.php
O arquivo salvar-gato.php é o arquivo que faz as ações do CRUD no banco de dados, ele recebe as informações do formulario e dos botões e faz a interação com o banco de dados.
#### vergatos.php
O arquivo vergatos.php é a pagina que exibe os gatos no WEBSITE principal, seguindo a mesma lógica do listar-gato, ele percorre os resultados do select e exibe em forma de cards.
#### modal.js
O arquivo modal.js basicamente faz o modal da pagina vergatos funcionar, ele adiciona eventos nos botões para abrir e fechar o modal.
#### index.html 
O arquivo index.html é basicamente uma pagina feita só com o front que tem o intuito de apresentar o projeto UNICAT


## Conheça nosso site!
### Pagina Principal
![Pagina_principal](https://github.com/keziaanjos/unicat/assets/143471255/ec5e1482-76c1-4ed8-8a07-ce512ea54d63)
### Página para visualização de gatos de forma dinâmica
![Pagina_visualizar_gatos](https://github.com/keziaanjos/unicat/assets/139996272/5b5f3cab-a26b-4cb9-92c8-45ec28c348f0)

## Utilização de quadro KANBAN através do Trello
Foi utilizado um quadro kanban para organização da equipe e cumprimento de tasks.
![Screenshot_2](https://github.com/keziaanjos/unicat/assets/139996272/fc9bf11e-a70c-4a73-adc0-8c7e9cc2c9c7)
