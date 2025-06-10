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

    public function __construct(string $name, int $maxSpeed, string $typeActionVehicle)
    {
        $this->nameVehicle = $name;
        $this->maxSpeedVehicle = $maxSpeed;
        $this->typeActionVehicle = $typeActionVehicle;
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

    abstract function getNameVehicle();

    abstract function getMaxSpeedVehicle();

    // Абстрактный метод для специальной способности

    abstract function getTypeActionVehicle();

    // Общие методы для всех транспортных средств
    abstract public function useSpecialAbility($typeActionVehicle);
    abstract public function moveForward();
    abstract public function moveBackward();

}