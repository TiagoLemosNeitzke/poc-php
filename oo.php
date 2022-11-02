<?php

/*

Herança => Herda métodos e propriedades da class pai, 

Encapsulamento =>  é o public (posso acessar propriedades e métodos de qualquer lugar), private (só posso acessar propriedades e métodos dentro da pŕopria class, mas consigo usar os métodos set e get para dar acesso a class filha), private (na prática ao que parece é a mesma coisa do private), 

Polimorfismo => poder de alterar o comportamento de um método da class pai na class filha, 

Abstração => 

*/

class Bank {
    private  $name;
    protected $address;

    public function setTax()
    {
        return 10;
    }

    public function setName($name){
        $this->name = "Banco: $name ";
    }

    public function getName(){
        return $this->name;
    }

    public function setAddress($address){
        $this->address = $address;
    }

    public function getAddress(){
        return $this->address;
    }
}

class NationalBank extends Bank
{}

$bankNational = new NationalBank();

$bankNational->setName('herda tudo da class Bank');

$bankOne = new Bank();

$bankOne->setName('Bradesco');

$bankOne->setAddress("Rua x");

$bankTwo = new Bank();

$bankTwo->setName('Caixa');

echo $bankOne->getAddress();