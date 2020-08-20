<?php

namespace ElevatorScript;

interface ElevatorInterface
{
    public function acceptTheCall(int $callingFromThisFloor): int;
    public function arriveOnCall(int $needToGoToThisFloor): void;
    public function arriveAtTheRequiredFloor(int $requiredFloor): void;
}