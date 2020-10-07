<?php

declare(strict_types=1);

namespace Alfa\Servicos;

use Alfa\Interfaces\Pousa;

class PistaDePouso {
    public function pousar(Pousa $pousa): string {
    return $pousa->pousar();
    }
}