<?php

namespace App\Http\Resources\Patient\Treatment;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TreatmentCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
