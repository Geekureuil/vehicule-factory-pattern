<?php

namespace Vehicules\Helicoptere;

use Vehicules\AbstractVehicule;
use Vehicules\VehiculeInterface;

class Helicoptere extends AbstractVehicule implements VehiculeInterface
{
    protected string $type = "hélicoptère";
    private int      $altitudeMax;
    
    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setCommonDataFromArray($data);
        $this->setAltitudeMax($data['altitudeMaximum']);
    }
    
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->getCommonDescription()." et une altitude maximale de {$this->getAltitudeMax()} pieds";
    }
    
    /**
     * @return int
     */
    public function getAltitudeMax(): int
    {
        return $this->altitudeMax;
    }
    
    /**
     * @param int $altitudeMax
     */
    public function setAltitudeMax(int $altitudeMax): void
    {
        $this->altitudeMax = $altitudeMax;
    }
    
}