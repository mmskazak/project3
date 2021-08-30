<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TripResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     *
     */
    public function toArray($request): array
    {
        return [
            'direction' => $this->to_moscow === 1 ? 'в Москву' : 'в Серпухов',
            'date_time' => $this->date_time,
            'description' => $this->description,
            'passenger_seats' => $this->passenger_seats,
            'busy' => $this->busy,
            'user_id' => $this->user_id
        ];
    }
}
