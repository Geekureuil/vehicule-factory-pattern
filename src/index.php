<?php

$factory = new VehiculeFactory();

$fichierVehicules = json_decode(file_get_contents("vehicules.json"));

foreach ($fichierVehicules as $dataVehicule) {
    $vehicule = $factory->makeVehicule($dataVehicule);
    echo $vehicule->getDescription().PHP_EOL;
}