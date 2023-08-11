<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TestimonialResource extends JsonResource
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
            'reviewer_name' => $this->reviewer_name,
            'reviewer_designation' => $this->reviewer_designation,
            'reviewer_photo' => $this->reviewer_photo,
            'review' => $this->review,
            'rating'=> $this->rating,
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
        ];
    }
}
