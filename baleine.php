<?php


class baleine extends mammifere
{
    protected string $nageoire;
  

    public function __construct($nageoire)
    {
        $this->nageoire = $nageoire;
  
    }

    public function getSexe():string
    {
        return $this->sexe;
    }

    protected function sedeplacer(mammifere $perso)
    {
        echo "La baleine se deplace dans les oceans, elle peut nager et parfois meme sauter hors de l'eau";
    }

    abstract protected function communiquer(mammifere $perso)
    {
        echo "La baleine communique par un chant, elle emet des sons par son larynx et son event, ce son peut etre percus a plusieurs centaines de kilometres .";
    }

  
}