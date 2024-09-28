<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'type' =>'product',
            'attributes' => [
                'key' => $this->key,
                'name' => $this->name,
                'description' => $this->description,
                'price' => [
                    'cost' => $this->cost,
                    'price' => $this->price, // product.attributes.price.retail
                ],
                'active' => $this->active,
                'vat' => $this->vat,
                'relationships' => [
                    'category' => new CategoryResource($this->whenLoaded('category')), // justSteveKing code
                    'range' => new RangeResource($this->whenLoaded('range')) // mine code
                ],
                'links' => [
                    '_self' => route('api:v1:products:show', $this->key),
                    '_parent' => route('api:v1:products:index')
                ]

            ],
        ];
    }
}
