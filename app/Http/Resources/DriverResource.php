<?php

namespace App\Http\Resources;

use App\Models\delivery;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DriverResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            'product-info' => Delivery::where('id' , $request->product_id)->get()
        ];
    }
}
