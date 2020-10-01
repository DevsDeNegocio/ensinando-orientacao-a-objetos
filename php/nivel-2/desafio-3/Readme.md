# Instruções

Gatos de pelo longo tendem a ser dóceis, gatos de pelo ralo tendem a ser mais ariscos.

Sabendo disso, crie um arquivo com o nome de **Gato.php** que possua uma classe **Gato**.

Esta classe deve conter 4 **atributos**, são eles:

- raca
- temperamento
- mania
- pelo

Um Gato quando é criado deve informar a raça, que pode ser: **persa, siamês ou sphynx**.

As regras são:

- Um Gato do tipo **persa** é sempre dócil e de pelo **longo**
- Um Gato do tipo **sphynx** é sempre arisco e de pelo **ralo**
- Um Gato do tipo **siamês** tem 50% de chance de ser dócil ou arisco
- Todo Gato **arisco** tem 50% de chance de ter a mania de **arranhar** ou de **rosnar**
- Todo Gato **dócil** tem 50% de chance de ter a mania de **ronronar** ou **se esfregar na perna do dono**
- **(Nova)** Não deve permitir que um gato seja criado com uma raça que não seja **persa, siamês ou sphynx**.
- **(Nova)** Os atributos devem ser bloquiados para alteração
- **(Nova)** Deve ter uma função estática chamada **anos_humanos** que deve receber um ano de gato e retornar 7 vezes este valor.

## Regras

Você só pode alterar seu arquivo Gato.php, nada nos outros arquivos, como index.php ou test.php, pode ser alterado.

Os testes indicarão se seu código está funcionando ou não, faça todas as alterações até que ele fique verde.

## Como baixar e rodar

Se você quer baixar apenas este teste desafio, rode o comando abaixo em seu terminal:

```bash
svn checkout https://github.com/DevsDeNegocio/ensinando-orientacao-a-objetos/trunk/php/nivel-1/desafio-3
```

Se quiser baixar todos os desafios pode baixar o repositório completo usando:

```bash
git clone https://github.com/DevsDeNegocio/ensinando-orientacao-a-objetos
```


## Testes

Para rodar os testes de modo visual entre na pasta do desafio e rode o comando:
```bash
php -S localhost:8000
```

E então acesse em seu navegador a url: http://localhost:8000

Para rodar a versão silenciosa de console rode:

```bash
php test.php
```