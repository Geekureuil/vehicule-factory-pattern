<?php

namespace Vehicules\Moto;

use Vehicules\AbstractVehicule;
use Vehicules\VehiculeInterface;

class Moto extends AbstractVehicule implements VehiculeInterface
{
    protected string $type = "moto";
    private string   $transmission;
    
    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setCommonDataFromArray($data);
        $this->setTransmission($data['transmission']);
    }
    
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->getCommonDescription()." et une transmission par {$this->getTransmission()}";
    }
    
    /**
     * @return string
     */
    public function getTransmission(): string
    {
        return $this->transmission;
    }
    
    /**
     * @param string $transmission
     */
    public function setTransmission(string $transmission): void
    {
        $this->transmission = $transmission;
    }
    
}