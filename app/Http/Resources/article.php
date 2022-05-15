<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return [
            'title'=>$this->title,
            'body'=>$this->body,
            'Item'=>new itemCollection($this->Items)
        ];
    }
}
