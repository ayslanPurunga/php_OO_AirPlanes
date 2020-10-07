<?php

declare(strict_types=1);

namespace Alfa\Entidades;

use Alfa\Interfaces\Pousa;

class Boing extends Aviao implements Pousa{
    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function pousar(): string {
        return sprintf("%s Pousando a 260km/h", $this->getNome());
    }
}