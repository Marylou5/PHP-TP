<?php


class humain extends mammifere
{
    protected string $nom;
    

    public function __construct($nom)
    {
        $this->nom = $nom;
       
    }

  
    protected function sedeplacer(mammifere $perso)
    {
        echo "L'humain se deplace principalement sur la surface de la terre, il marche court et peut meme nager.";
    }

    abstract protected function communiquer(mammifere $perso)
    {
        echo "L'humain communique grace à la parole et au geste.";
    }

    
}