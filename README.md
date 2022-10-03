# Primeiro projeto com CakePhp
O Objetivo desta atividade é desenvolver um sistema com as seguintes características:

1. Orientações gerais:
 - É obrigatório a utilização do CakePHP como framework (versão mais recente)
 - O banco deverá ser o PostgreSQL.

2. Descrição do sistema
 - O objetivo deste teste é o desenvolvimento de um sistema de gestão de uma barraca de venda de frutas.
 - A avaliação irá analisar a modelagem do banco, a forma de codificação e a utilização adequada do framework.

3. Requisitos funcionais
 - O sistema deverá possuir uma senha para acesso como usuário vendedor e outro como administrador.
 - O perfil de administrador poderá cadastrar frutas para venda na barraca, mas não poderá vendê-las.
 - O perfil de vendedor irá vender as frutas e poderá visualizar o relatório de vendas.
 - As frutas deverão ser cadastradas com os seguintes atributos:
     . Nome da fruta
     . Classificação: Extra, de primeira, de segunda ou de terceira.
     . Fresca: sim ou não
     . Quantidade disponível para venda: número inteiro
     . Valor de venda.
 - O relatório de vendas deverá possuir o horário da venda e o valor, listando individualmente os itens vendidos. Este relatório deverá ser acessado somente pelo vendedor.
 - O perfil de vendedor poderá executar as seguintes operações.
     . Vender frutas com opção de desconto nos termos de porcentagem (5%, 10%, 15%, 20% ou 25%).
     . Pesquisar as frutas disponíveis para venda
     . Filtrar frutas pelos tipos de atributos.
