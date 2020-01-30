<?php

namespace LaravelEnso\ControlPanelCommon\App\Contracts;

interface Group
{
    public function id();

    public function label(): string;

    public function statistics(): array;

    public function order(): int;
}
