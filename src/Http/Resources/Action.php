<?php

namespace LaravelEnso\ControlPanelCommon\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Action extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id(),
            'label' => $this->label(),
            'icon' => $this->icon(),
            'tooltip' => $this->tooltip(),
            'confirmation' => $this->confirmation(),
            'order' => $this->order(),
        ];
    }
}
