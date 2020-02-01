<?php

namespace LaravelEnso\ControlPanelCommon\App\Contracts;

interface Link
{
    public function id();

    public function label(): string;

    public function url(): string;

    public function tooltip(): ?string;

    public function icon(): array;

    public function order(): int;
}
