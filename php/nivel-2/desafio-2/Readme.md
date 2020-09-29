# Instruções

Esta é uma evolução do desafio-2 de nível-1 encontrado em: [DevsDeNegocio/.../desafio-2](https://github.com/DevsDeNegocio/ensinando-orientacao-a-objetos/tree/master/php/nivel-1/desafio-2)

Você deve criar um arquivo chamado **Carro.php** nesta pasta.

Este arquivo deve conter uma classe chamada **Carro**.

Esta classe ao ser iniciada deve informar o tipo de carro, sendo os tipos aceitos: luxo, esportivo, sedan, ret

Caso nenhum tipo seja passado, o tipo ret deve ser atribuido automaticamente.

Esta classe também deve ter 1 atributo chamado **valor** e por padrão uma pessoa deve iniciar com:
 - **50000** para carro ret
 - **100000** para carro sedan
 - **1000000** para carro luxo

Esta classe também deve ter 2 métodos **problema** e **rodar**.

- Sempre que o mecanico avalia o carro e acha um **problema** reduz 10% do valor atual do carro.
    
- O método rodar vai ser executado 1 vez apenas e segue as seguinter regras:
    - Se rodou mais de 1000 Km diminui 10% do valor atual do carro
    - Se rodou mais de 10000 Km diminui 20% do valor atual do carro
    - Se rodou mais de 60000 Km diminui 40% do valor atual do carro

- O valor do carro não pode ser menor do que 1% do valor original do carro

## Regras

Você só pode alterar seu arquivo Pessoa.php, nada nos outros arquivos, como index.php ou test.php, pode ser alterado.

Os testes indicarão se seu código está funcionando ou não, faça todas as alterações até que ele fique verde.

## Como baixar e rodar

Se você quer baixar apenas este teste desafio, rode o comando abaixo em seu terminal:

```bash
svn checkout https://github.com/DevsDeNegocio/ensinando-orientacao-a-objetos/trunk/php/nivel-1/desafio-2
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