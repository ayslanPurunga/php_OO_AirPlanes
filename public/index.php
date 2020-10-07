<?php 

declare(strict_types=1);

require_once '../vendor/autoload.php';

use Alfa\Entidades\Airbus;
use Alfa\Entidades\Boing;
use Alfa\Entidades\Embraer;
use Alfa\Entidades\Helicoptero;
use Alfa\Servicos\PistaDePouso;

$airbus = new Airbus("Airbus A320");
$boing = new Boing("Boing 737");
$embraer = new Embraer("Embraer E-jets", 35);
$helicoptero = new Helicoptero();

echo $airbus->voar()."\n";
echo $boing->voar()."\n";

try{
    echo $embraer->voar()."\n";
} catch (Exception $e) {
    echo $e->getMessage()."\n";
}


$pistadepouso = new PistaDePouso();
echo $pistadepouso->pousar($airbus)."\n";
echo $pistadepouso->pousar($boing)."\n";
echo $pistadepouso->pousar($embraer)."\n";
echo $pistadepouso->pousar($helicoptero)."\n";
