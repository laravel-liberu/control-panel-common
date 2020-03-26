<?php

namespace LaravelEnso\ControlPanelCommon\App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use LaravelEnso\Helpers\App\Classes\Obj;

class Group extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id(),
            'label' => Str::ucfirst($this->label()),
            'sensors' => Sensor::collection($this->sensors($request)),
            'order' => $this->order(),
        ];
    }

    private function sensors($request)
    {
        return (new Collection($this->resource->sensors()))
            ->map(fn ($sensor) => $this->sensor($request, $sensor));
    }

    private function sensor($request, $sensor)
    {
        return is_string($sensor)
            ? App::make($sensor, ['params' => new Obj($request->all())])
            : $sensor;
    }
}
