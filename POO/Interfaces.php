<?php

namespace POO;

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

//Herencia múltiple en interfaces
interface iC extends iA, iB
{
    public function prueba3();
}

//Se deben implementar los métodos de ambas interfaces por la herencia
class C implements iC
{
    public function prueba()
    {
        
    }

    public function prueba2()
    {
        
    }

    public function prueba3()
    {
        
    }
}