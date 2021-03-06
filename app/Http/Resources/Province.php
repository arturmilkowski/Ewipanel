<?php

declare(strict_types = 1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Province extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request Request
     * 
     * @return array
     */
    public function toArray($request): array
    {
        return parent::toArray($request);
    }
}
