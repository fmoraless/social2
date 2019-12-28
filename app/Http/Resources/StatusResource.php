<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StatusResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'body' => $this->body,
            'user_name' => $this->user_name,
            'user_avatar' => 'https://qph.fs.quoracdn.net/main-raw-56683409-ieynmjwbrbsfptmydklqcvwcoiisxiuj.jpeg',
            'ago' => $this->created_at->diffForHumans()
            //'created_at' => $this->created_at
        ];
    }
}
