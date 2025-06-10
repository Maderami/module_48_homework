<?php

namespace Src\MachineClasses;

abstract class Vehicle
{
    public static $statisticsTypes = [
        'PassengerVehicle' => 'Src\MachineClasses\PassengerVehicle',
        'Bulldozer' => 'Src\MachineClasses\Bulldozer',
        'Tank' => 'Src\MachineClasses\Tank',
    ];
    protected $nameVehicle;
    protected $maxSpeedVehicle;
    protected $typeActionVehicle;

    protected $customization;

    public function __construct(string $name, int $maxSpeed, string $typeActionVehicle, Customization $customization)
    {
        $this->nameVehicle = $name;
        $this->maxSpeedVehicle = $maxSpeed;
        $this->typeActionVehicle = $typeActionVehicle;
        $this->customization = $customization;
    }

    public static function getVehicleObject(string $className)
    {
        $fullClassName = self::$statisticsTypes[$className];
        if (class_exists($fullClassName)) {
            return new $fullClassName;
        } else {
            return null;
        }
    }
    abstract public function showCustomizationVehicle();
    abstract function getNameVehicle();

    abstract function getMaxSpeedVehicle();

    // Абстрактный метод для специальной способности

    abstract function getTypeActionVehicle();

    // Общие методы для всех транспортных средств
    abstract public function useSpecialAbility($typeActionVehicle);
    abstract public function moveForward();
    abstract public function moveBackward();

}