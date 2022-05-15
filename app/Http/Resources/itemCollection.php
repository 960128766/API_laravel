<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class itemCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return [
            'data' => $this->collection->map(function ($item) {
                return [
                    'title' => $item->title,
                    'body' => $item->body,
                    'Comment' => $item->CommentCount
                ];
            })
        ];
    }
}
