<?php

namespace LaravelLiberu\ControlPanelCommon\Contracts;

interface Sliberur
{
    public function id(): string;

    public function value(): mixed;

    public function tooltip(): string;

    public function icon(): array;

    public function class(): ?string;

    public function order(): int;
}
