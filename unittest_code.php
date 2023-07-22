<?php
use PHPUnit\Framework\TestCase;

require_once 'your_code_file.php'; 
class CarTest extends TestCase {
    public function testCarModel() {
        $car = new Car("Calliope", "Capulet Engine", "Spindler Battery");
        $this->assertEquals("Calliope", $car->getCarModel());
    }

    public function testEngineType() {
        $car = new Car("Calliope", "Capulet Engine", "Spindler Battery");
        $this->assertEquals("Capulet Engine", $car->getEngineType());
    }

    public function testBatteryType() {
        $car = new Car("Calliope", "Capulet Engine", "Spindler Battery");
        $this->assertEquals("Spindler Battery", $car->getBatteryType());
    }

    public function testUnknownEngineType() {
        $car = new Car("Calliope", "Unknown Engine Type", "Spindler Battery");
        $this->assertEquals("Unknown Engine Type", $car->getEngineType());
    }

    public function testUnknownBatteryType() {
        $car = new Car("Calliope", "Capulet Engine", "Unknown Battery Type");
        $this->assertEquals("Unknown Battery Type", $car->getBatteryType());
    }

    public function testServiceDue() {
        
        $car1 = new Car("Calliope", "Capulet Engine", "Spindler Battery");
        $car2 = new Car("Glissade", "Willoughby Engine", "Spindler Battery");
        $car3 = new Car("Palindrome", "Sternman Engine", "Spindler Battery");
        $car4 = new Car("Rorschach", "Willoughby Engine", "Nubbin Battery");
        $car5 = new Car("Thovex", "Capulet Engine", "Nubbin Battery");

        $this->assertTrue($car1->isServiceDue());
        $this->assertTrue($car2->isServiceDue());
        $this->assertTrue($car3->isServiceDue());
        $this->assertTrue($car4->isServiceDue());
        $this->assertTrue($car5->isServiceDue());
    }

    public function testServiceNotDue() {
        
        $car1 = new Car("Calliope", "Capulet Engine", "Spindler Battery");
        $car2 = new Car("Glissade", "Willoughby Engine", "Spindler Battery");
        $car3 = new Car("Palindrome", "Sternman Engine", "Spindler Battery");
        $car4 = new Car("Rorschach", "Willoughby Engine", "Nubbin Battery");
        $car5 = new Car("Thovex", "Capulet Engine", "Nubbin Battery");

        $this->assertFalse($car1->isServiceDue());
        $this->assertFalse($car2->isServiceDue());
        $this->assertFalse($car3->isServiceDue());
        $this->assertFalse($car4->isServiceDue());
        $this->assertFalse($car5->isServiceDue());
    }
}
