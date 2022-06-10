<?php

namespace Vehicules\Voiture;

use Vehicules\AbstractVehicule;
use Vehicules\VehiculeInterface;

class Voiture extends AbstractVehicule implements VehiculeInterface
{
    protected string $type = "moto";
    private string   $motorisation;
    
    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setCommonDataFromArray($data);
        $this->setMotorisation($data['motorisation']);
    }
    
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->getCommonDescription()." et une motorisation {$this->getMotorisation()}";
    }
    
    /**
     * @return string
     */
    public function getMotorisation(): string
    {
        return $this->motorisation;
    }
    
    /**
     * @param string $motorisation
     */
    public function setMotorisation(string $motorisation): void
    {
        $this->motorisation = $motorisation;
    }
    
}