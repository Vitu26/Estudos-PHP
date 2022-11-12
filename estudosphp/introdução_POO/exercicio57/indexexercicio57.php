<?php
 class Cachorro{

    public $nome;
    public $cor;
    public $patas;
    public $raca;


    function __construct($nome, $cor, $patas, $raca){
        $this->nome = $nome;
        $this->cor = $cor;
        $this->patas = $patas;
        $this->raca = $raca;
    }

    public function exibirAnimal(){
        echo "O meu cachorro se chama $this->nome é da raça $this->raca, tem $this->patas patas e é da cor $this->cor<br>";
    }

 }

 $lombrigo = new Cachorro("Lombrigo", "creme", 4, "labrador");
 $lombrigo->exibirAnimal();

 $nome = "Tobi";
 $cor = "preta";
 $patas = 4;
 $raca = "Vira-lata";

 $tobi = new Cachorro($nome, $cor, $patas, $raca);
 $tobi->exibirAnimal(); 
 