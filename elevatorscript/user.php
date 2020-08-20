<?php

namespace ElevatorScript;

class User implements UserInterface
{
    private int $currentFloor = 1;
    private bool $isUserInTheElevator = false;
    private int $requiredFloor;

    public function __construct(int $iAmOnThisFloor = 1)
    {
        $this->currentFloor = $iAmOnThisFloor;
    }

    public function getCurrentFloor(): int
    {
        return $this->currentFloor;
    }

    public function getTheRequiredFloor(): int
    {
        return $this->requiredFloor;
    }

    public function enterTheElevator(): void
    {
        $this->isUserInTheElevator = true;
    }

    public function selectTheRequiredFloor(int $iNeedToThisFloor): void
    {
        $this->requiredFloor = $iNeedToThisFloor;
    }

    public function getOffTheElevator(): void
    {
        $this->isUserInTheElevator = false;
    }
}