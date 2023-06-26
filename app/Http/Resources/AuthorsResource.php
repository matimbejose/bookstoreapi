<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AuthorsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

     //return data of the auhor 
    public function toArray($request)
    {
        return [
            
            'id' => (string)$this->id,
            'type' => 'Authors',
            'atributes' => [
                'name' => $this->name,
                'created_at' => $this->created_at,
                'update_at' => $this->created_at
            ]
        ];
    }
}
