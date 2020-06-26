<?php

class SuperHeroi {
	
    private $id;
    private $nome;
    private $poderEspecial;
    private $energia;
    private $forca;
    private $origem;

    public function getId() {
      return $this->id;
    }
    public function getNome() {
      return $this->nome;
    }
    public function getPoderEspecial() {
      return $this->poderEspecial;
    }
    public function getEnergia() {
      return $this->energia;
    }
    public function getForca() {
      return $this->forca;
    }
    public function getOrigem() {
      return $this->Origem;
    }
    public function setId($id) {
      $this->id = $id;
    }
    public function setNome($nome) {
      $this->nome = $nome;
    }
    public function setPoderEspecial($poderEspecial) {
      $this->poderEspecial = $poderEspecial;
    }
    public function setEnergia($energia) {
      $this->energia = $energia;
    }
    public function setForca($forca) {
      $this->forca = $forca;
    }
    public function setorigem($origem) {
      $this->origem = $origem;
    }
    public function __construct($id, $nome, $poderEspecial, $energia, $forca, $origem){
      $this->id = $id;  
      $this->nome = $nome;
      $this->poderEspecial = $poderEspecial;
      $this->energia = $energia;
      $this->forca = $forca;
      $this->origem = $origem;
     }
    }
	
    class calculos extends SuperHeroi {
        private $aumentarEnergia;
        private $calcularPoderMedio;
        
        public function __construct($id, $nome, $poderEspecial, $energia, $forca, $origem, $aumentarEnergia, $calcularPoderMedio){
            calculos::setId($id);
            calculos::setNome($nome);
            calculos::setPoderEspecial($poderEspecial);
            calculos::setEnergia($energia);
            calculos::setForca($forca);
            calculos::setOrigem($origem);
            $this->aumentarEnergia = $aumentarEnergia;
            $this->calcularPoderMedio = $calcularPoderMedio;
       
        }
		
    public function aumentarEnergia($energia){   
        return $this->$energia * 119111606;
    }
	
	public function calcularPoderMedio($energia, $forca){
		$poderMedio = $energia + $forca;
		$poderMedio = $poderNovo / 2;
		return $poderMedio;
	}
  }
}

$SuperHeroi = new SuperHeroi('1','Harry Potter', 'Bruxo', 500, 900, 'Órfão que descobre que é bruxo');
$SuperHeroi = new SuperHeroi('2','Goku', 'Saiyajin', 8000, 8000, 'Saiyajin mandado para a terra');
$SuperHeroi = new SuperHeroi('3','Ben 10', 'Omnitrix', 750, 500, 'Criança que se transforma em alienígenas');
$SuperHeroi = new SuperHeroi('4','Throg', 'Deus do Trovão', 900, 900, 'Humano transformado em sapo com os poderes do Thor');
?>