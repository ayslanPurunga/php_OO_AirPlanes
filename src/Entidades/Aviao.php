<?php

declare(strict_types=1);

namespace Alfa\Entidades;

abstract class Aviao {
    protected int $quantidadeDeAssento = 0;
    protected string $nome;

    public function getNome(): string {
        return $this->nome;
    }
    public function voar(): string {
        return sprintf("%s esta voando", $this->getNome());
    }
}