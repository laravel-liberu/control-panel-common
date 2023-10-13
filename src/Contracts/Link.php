<?php

namespace LaravelLiberu\ControlPanelCommon\Contracts;

interface Link
{
    public function id(): string;

    public function label(): string;

    public function url(): string;

    public function tooltip(): ?string;

    public function icon(): array;

    public function order(): int;
}
