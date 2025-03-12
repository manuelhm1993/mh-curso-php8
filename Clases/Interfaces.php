<?php

//Plantilla que define la herencia
interface iTemplate
{
    public function setVariable(string $nombre): void;
    public function getHtml();
}

class Template implements iTemplate
{
    public function setVariable(string $nombre): void
    {

    }

    public function getHtml()
    {

    }
}