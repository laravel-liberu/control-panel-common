<?php

namespace LaravelLiberu\ControlPanelCommon\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Sensor extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id(),
            'value' => $this->value(),
            'icon' => $this->icon(),
            'tooltip' => $this->tooltip(),
            'class' => $this->class(),
            'order' => $this->order(),
        ];
    }
}
