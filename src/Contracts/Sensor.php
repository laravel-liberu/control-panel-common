<?php

namespace LaravelEnso\ControlPanelCommon\Contracts;

interface Sensor
{
    public function id();

    public function value();

    public function tooltip(): string;

    public function icon(): array;

    public function class(): string;

    public function order(): int;
}
