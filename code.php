<?php
class Car {
    private $carModel;
    private $engineType;
    private $batteryType;

    public function __construct($carModel, $engineType, $batteryType) {
        $this->carModel = $carModel;
        $this->engineType = $engineType;
        $this->batteryType = $batteryType;
    }

    public function getCarModel() {
        return $this->carModel;
    }

    public function getEngineType() {
        return $this->engineType;
    }

    public function getBatteryType() {
        return $this->batteryType;
    }

    public function isServiceDue() {
        $engineService = new EngineService();
        $batteryService = new BatteryService();

        $engineServiceCriteria = $engineService->getServiceCriteria($this->engineType);
        $batteryServiceCriteria = $batteryService->getServiceCriteria($this->batteryType);


        return false;
    }
}

class EngineService {
    public function getServiceCriteria($engineType) {
        
        $engineCriteriaArray = [
            "Capulet Engine" => "Once every 30,000 miles",
            "Willoughby Engine" => "Once every 60,000 miles",
            "Sternman Engine" => "Only when the warning indicator is on"
        ];

        return $engineCriteriaArray[$engineType] ?? "Unknown Engine Type";
    }
}

class BatteryService {
    public function getServiceCriteria($batteryType) {
        
        $batteryCriteriaArray = [
            "Spindler Battery" => "Once every 2 years",
            "Nubbin Battery" => "Once every 4 years"
        ];

        return $batteryCriteriaArray[$batteryType] ?? "Unknown Battery Type";
    }
}

function main() {
   
    $car1 = new Car("Calliope", "Capulet Engine", "Spindler Battery");
    $car2 = new Car("Glissade", "Willoughby Engine", "Spindler Battery");
    $car3 = new Car("Palindrome", "Sternman Engine", "Spindler Battery");
    $car4 = new Car("Rorschach", "Willoughby Engine", "Nubbin Battery");
    $car5 = new Car("Thovex", "Capulet Engine", "Nubbin Battery");

    $cars = [$car1, $car2, $car3, $car4, $car5];
    foreach ($cars as $car) {
        echo "Car Model: " . $car->getCarModel() . "\n";
        echo "Engine Type: " . $car->getEngineType() . "\n";
        echo "Battery Type: " . $car->getBatteryType() . "\n";
        echo "Service Due: " . ($car->isServiceDue() ? "Yes" : "No") . "\n";
        echo str_repeat("-", 30) . "\n";
    }
}

main();
?>
