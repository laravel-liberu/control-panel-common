<?php

namespace LaravelLiberu\ControlPanelCommon\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class Link extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id(),
            'label' => Str::ucfirst($this->label()),
            'url' => $this->url(),
            'icon' => $this->icon(),
            'tooltip' => $this->tooltip(),
            'order' => $this->order(),
        ];
    }
}
