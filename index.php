
<?php
// Полиморфная функция для работы с техникой
use Src\MachineClasses\Customization;
use Src\MachineClasses\Vehicle;

function operateVehicle(Vehicle $vehicle)
{

    if ($vehicle instanceof \Src\MachineClasses\PassengerVehicle) {
        echo "--- Управляем " . $vehicle->getNameVehicle() . " ---\n";
        $vehicle->moveForward();
        $vehicle->moveBackward();
        $vehicle->honk();
        $vehicle->turnOnWipers();
        $vehicle->useSpecialAbility($vehicle->getTypeActionVehicle());
        echo "\n";
    } else if ($vehicle instanceof \Src\MachineClasses\Bulldozer) {
        echo "--- Управляем " . $vehicle->getNameVehicle() . " ---\n";
        $vehicle->moveForward();
        $vehicle->moveBackward();
        $vehicle->honk();
        $vehicle->turnOnWipers();
        $vehicle->useSpecialAbility($vehicle->getTypeActionVehicle());
        echo "\n";
    } else if ($vehicle instanceof \Src\MachineClasses\Tank) {
        echo "--- Управляем " . $vehicle->getNameVehicle() . " ---\n";
        $vehicle->moveForward();
        $vehicle->moveBackward();
        $vehicle->honk();
        $vehicle->turnOnWipers();
        $vehicle->useSpecialAbility($vehicle->getTypeActionVehicle());
        echo "\n";
    } else {
        return 'There is no such instance';
    }
}

$autoInteriorPassengerVehicle = new Customization("Кожаный салон (красный)", "Металлик синий", "Racing Stripes");
$luxuryInteriorBulldozer = new Customization("Дерево + алькантара", "Жемчужный белый");
$armyInteriorTank = new Customization("Дуло 36 калибра", "Зеленый - игла-зеленый");
// Проверка кода.
$objectVehicle = [
    Vehicle::getVehicleObject('PassengerVehicle')('Спортивный автомобиль', 320, 'activateNOS',$autoInteriorPassengerVehicle),
    Vehicle::getVehicleObject('Bulldozer')('Гусеничный бульдозер', 302, 'swingBucket', $luxuryInteriorBulldozer),
    Vehicle::getVehicleObject('Tank')('Т-90', 34, 'cannonShot', $armyInteriorTank)];

foreach ($objectVehicle as $vehicle) {
    operateVehicle($vehicle);
}
