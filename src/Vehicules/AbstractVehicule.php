<?php

namespace Vehicules;

class AbstractVehicule
{
    protected string $type;
    protected string $genre = '';
    private string   $marque;
    private string   $modele;
    private int      $range;
    
    /**
     * @param array $data
     */
    protected function setCommonDataFromArray(array $data): void
    {
        $this->setMarque($data['marque']);
        $this->setModele($data['modele']);
        $this->setRange($data['range']);
    }
    
    /**
     * @return string
     */
    protected function getCommonDescription(): string
    {
        return "Je suis un{$this->genre} {$this->type} modèle {$this->getMarque()} {$this->getModele()} avec une autonomie de {$this->getRange()}km";
    }
    
    /**
     * @return string
     */
    public function getMarque(): string
    {
        return $this->marque;
    }
    
    /**
     * @param string $marque
     */
    public function setMarque(string $marque): void
    {
        $this->marque = $marque;
    }
    
    /**
     * @return string
     */
    public function getModele(): string
    {
        return $this->modele;
    }
    
    /**
     * @param string $modele
     */
    public function setModele(string $modele): void
    {
        $this->modele = $modele;
    }
    
    /**
     * @return int
     */
    public function getRange(): int
    {
        return $this->range;
    }
    
    /**
     * @param int $range
     */
    public function setRange(int $range): void
    {
        $this->range = $range;
    }
}