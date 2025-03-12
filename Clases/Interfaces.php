<?php

//Plantilla que define la herencia
interface iA
{
    public function prueba();
}

//Herencia de interfaces
interface iB extends iA
{
    public function prueba2();
}

//Se deben implementar los métodos de ambas interfaces por la herencia
class C implements iB
{
    public function prueba()
    {
        
    }

    public function prueba2()
    {
        
    }
}