<?php

namespace LaravelEnso\ControlPanelCommon\Contracts;

interface Group
{
    public function id();

    public function label(): string;

    public function sensors(): array;

    public function order(): int;
}
