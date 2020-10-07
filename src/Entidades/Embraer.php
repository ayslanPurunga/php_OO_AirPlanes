<?php

declare(strict_types=1);

namespace Alfa\Entidades;

use Alfa\Interfaces\Pousa;
use Exception;

class Embraer extends Aviao implements Pousa {
    private int $passageiros;

    public function __construct(string $nome, $passageiros) {
        $this->nome = $nome;
        $this->passageiros = $passageiros;
    }

    public function voar(): string {
       /*if ($this->passageiros > 40) {
           return "Bora decolar";
       }else {
           return "Não é possivel viajar com menos de 40 passageiros";
        }*/
        if ($this->passageiros < 40) {
            throw new Exception("Não é possivel voar com menos de 40 passageiros");
          }
          $this->passageiros = true;
          return parent::voar();
        }
    
        public function pousar(): string {
            return sprintf("%s Pousando a 250km/h", $this->getNome());
    }
}