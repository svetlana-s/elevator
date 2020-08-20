<?php

namespace ElevatorScript;

interface DisplayInterface
{
    public function showPassingFloorsUp(int $requiredFloor): void;
    public function showPassingFloorsDown(int $requiredFloor): void;
}
