<?php

namespace LaravelLiberu\ControlPanelCommon\Contracts;

interface Group
{
    public function id(): string;

    public function label(): string;

    public function sliberurs(): array;

    public function order(): int;
}
