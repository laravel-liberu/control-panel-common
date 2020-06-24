<?php

namespace LaravelEnso\ControlPanelCommon\Contracts;

interface Action
{
    public function id();

    public function handle();

    public function label(): string;

    public function tooltip(): string;

    public function icon(): array;

    public function confirmation(): bool;

    public function order(): int;
}
