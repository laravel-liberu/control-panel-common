<?php

namespace LaravelEnso\ControlPanelCommon\App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use LaravelEnso\Helpers\App\Classes\Obj;

class Group extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id(),
            'label' => ucfirst(__($this->label())),
            'statistics' => Sensor::collection($this->sensors($request)),
            'order' => $this->order(),
        ];
    }

    private function sensors($request)
    {
        return (new Collection($this->statistics()))
            ->map(fn ($stat) => $this->sensor($stat));
    }

    private function sensor($stat)
    {
        return is_string($stat)
            ? App::make($stat, ['params' => new Obj($request->all())])
            : $stat;
    }
}
