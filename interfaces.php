<?php

//interfaces é uma forma de criar contratos: que é quando eu quero obrigar que um objeto tenha alguns comportamentos

interface Money
{
    public function getMoney(); //aqui estou dizendo que todo mundo que implementar uma função publica chamada get money;
}

class Bank implements Money
{
    public function getMoney(){
        return 'Implentação obrigatória';
    }
}