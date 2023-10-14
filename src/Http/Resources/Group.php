<?php

namespace LaravelLiberu\ControlPanelCommon\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use LaravelLiberu\Helpers\Services\Obj;

class Group extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id(),
            'label' => Str::ucfirst($this->label()),
            'sliberurs' => Sensor::collection($this->sliberurs($request)),
            'order' => $this->order(),
        ];
    }

    private function sliberurs($request)
    {
        return Collection::wrap($this->resource->sliberurs())
            ->map(fn ($sliberur) => $this->sliberur($request, $sliberur));
    }

    private function sliberur($request, $sliberur)
    {
        return is_string($sliberur)
            ? App::make($sliberur, ['params' => new Obj($request->all())])
            : $sliberur;
    }
}
