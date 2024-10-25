<?php

namespace App\Http\Resources\V1\Brads;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ModelCarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"=> $this->id,
            "brand_id"=> $this->brand_id,
            "fipe_code"=> $this->fipe_code,
            "model"=> $this->model,
            "years"=> $this->years,
        ];
    }
}
