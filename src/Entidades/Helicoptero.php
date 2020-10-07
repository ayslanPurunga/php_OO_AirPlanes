<?php

declare(strict_types=1);

namespace Alfa\Entidades;

use Alfa\Interfaces\Pousa;

class Helicoptero implements Pousa {
    protected string $nome;
    
    public function getNome(): string {
        return $this->nome;
    }

    public function voar(): string {
        return "esta voando";
    } 

    public function pousar(): string {
        return "Helicoptero Pousando";
    }
}