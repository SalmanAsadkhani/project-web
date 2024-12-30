<?php

namespace App\Http\Resources;

use App\Models\delivery;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OtpCodeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return
            [
                'Product_info' =>Delivery::where( 'name' , $request->name)->first(),
                'code' => $this->code
            ];
    }
}
