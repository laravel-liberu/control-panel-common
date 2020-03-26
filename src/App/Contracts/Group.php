<?php

namespace LaravelEnso\ControlPanelCommon\App\Contracts;

interface Group
{
    public function id();

    public function label(): string;

    public function sensors(): array;

    public function order(): int;
}
