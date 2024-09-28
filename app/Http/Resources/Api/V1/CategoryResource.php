<?php

namespace App\Http\Resources\Api\V1;

use Domains\Catalog\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'type' => 'category',
            'attributes' => [
                'key' => $this->key,
                'name' => $this->name,
                'description' => $this->description,
                'active' => $this->active
            ],
            // 'relationships' => [
            //     'products' => ProductResource::collection($this->whenLoaded('products'), $this->products)
            // ]
        ];
    }
}
