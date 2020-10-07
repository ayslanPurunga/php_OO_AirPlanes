<?php

declare(strict_types=1);

namespace Alfa\Entidades;

use Alfa\Interfaces\Pousa;

class Airbus extends Aviao implements Pousa {
    
    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return sprintf($this->nome);
    }
    
    public function pousar(): string {
        return sprintf("%s Pousando a 270km/h", $this->getNome());
    }
}