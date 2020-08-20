<?php

namespace ElevatorScript;

spl_autoload_register();

$building = new Building(15);

// There are as many buttons in the elevator as there are floors in the building
$elevator = new Elevator($building->getFloorList(), 10);

$outsideDisplay = new OutsideDisplay($elevator->getCurrentFloor(), $building->getFloorList());

$user = new User(5);

// Call the elevator
$callFromThisFloor = $elevator->acceptTheCall($user->getCurrentFloor());

function showFloors(int $startFloor, int $finishFloor, DisplayInterface $display): void
{
    $startFloor > $finishFloor ? $display->showPassingFloorsDown($finishFloor) :
                                 $display->showPassingFloorsUp($finishFloor);
}

if ($callFromThisFloor !== $elevator->getCurrentFloor()) {
    showFloors($elevator->getCurrentFloor(), $callFromThisFloor, $outsideDisplay);

    $elevator->arriveOnCall($callFromThisFloor);
}

$elevator->turnOnTheLight();

$insideDisplay = new InsideDisplay($elevator->getCurrentFloor(), $building->getFloorList());
$insideDisplay->turnOnTheDisplay();

$elevator->openTheDoor();

$user->enterTheElevator();
$user->selectTheRequiredFloor(8);

$elevator->closeTheDoor();

$arrayOfDisplays = [$outsideDisplay,
                    $insideDisplay,
                   ];

foreach ($arrayOfDisplays as $display) {
    showFloors($elevator->getCurrentFloor(), $user->getTheRequiredFloor(), $display);
}

// Arrive at the required floor
$elevator->arriveAtTheRequiredFloor($user->getTheRequiredFloor());
$elevator->openTheDoor();

$user->getOffTheElevator();

$elevator->closeTheDoor();

$insideDisplay->turnOffTheDisplay();

$elevator->turnOffTheLight();