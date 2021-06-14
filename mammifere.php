<?php

abstract class mammifere
{
    protected string $espece;
    protected float $poids;
    protected float $taille;
    protected bool $sexefeminin

    protected function __construct(string $espece, string $poids, float $taille, string $sexe)
    {
        $this->espece = $espece;
        $this->poids = $poids;
        $this->taille = $taille;
        $this->sexe = $sexefeminin;

    }

    abstract public function allaiter()
    {
        if ($this-> sexefemin == true) {
          echo "La femelle allaite son enfant.";
        } else {
          echo "Le male n'allaite pas son enfant";
        }
    }

    abstract protected function sedeplacer(mammifere $perso):string;
    abstract protected function communiquer(mammifere $perso): string;
    abstract protected function sereproduire()
    {
        echo "La baleine se reproduit de manière sexuée.";
    }
    
   

    
}
