<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KozmeticarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'kozmeticar';
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'ime_prezime' => $this->resource->ime_prezime,
            'email' => $this->resource->email,
            'broj_telefona' => $this->resource->broj_telefona,
            'nivo_strucne_spreme' => $this->resource->nivo_strucne_spreme,
            'godine_iskustva' => $this->resource->godine_iskustva
 

        ];
    }
}
