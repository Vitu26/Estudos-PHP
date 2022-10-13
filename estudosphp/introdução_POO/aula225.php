<?php
//visibilidade

 class Car{


    public $rodas = 4;
    private $vidro = "Sem pelicula";
    protected $portas = 4;

    public function getVidro(){
       return $this->vidro;
    }

    public function getPortas(){
        return $this->portas;
     }
 }

 class Mecanico{

    public function alterarRodas($carro){

        $carro->rodas = 10;//ultilizando o metodo public em outro objeto
    }

    public function alterarPelicula($carro, $pelicula){
        $carro->vidro = $pelicula;
    }
 }

 $carro = new Car;

 echo $carro->rodas . "<br>";

 $truck = new Mecanico;//um novo objeto
 $truck->alterarRodas($carro);//alterando o metodo para usar em outra classe

 echo $carro->rodas . "<br>";//usando o metodo através de outra classe atribuindo outro valor
//não pode alterar pq é privado
//  $truck->alterarPelicula($carro, "G20"); 

 
 echo $carro->getVidro() . "<br>";//para acessar a propriedade $vidro mas não tem como alterar a propriedade pois é privada

 echo $carro->getPortas() ."<br>";//podemos acessar mas não alterar igual a private