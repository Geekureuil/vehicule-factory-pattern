<?php

namespace VehiculeFactory;

use Vehicules\Helicoptere\Helicoptere;
use Vehicules\Moto\Moto;
use Vehicules\VehiculeInterface;
use Vehicules\Voiture\Voiture;

class VehiculeFactory
{
    public function makeVehicule(array $data): VehiculeInterface
    {
        if (isset($data['motorisation'])) {
            return new Voiture($data);
        }
        if (isset($data['transmission'])) {
            return new Moto($data);
        }
        if (isset($data['altitudeMaximum'])) {
            return new Helicoptere($data);
        }
        throw new Exception("Type de véhicule inconnu ou description malformée");
    }
}