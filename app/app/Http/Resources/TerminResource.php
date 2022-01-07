<?php

namespace App\Http\Resources;

use App\Models\Kozmeticar;
use App\Models\Tretman;
use Illuminate\Http\Resources\Json\JsonResource;

class TerminResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'termin';
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'adresaLokala' => $this->resource->adresaLokala,
            'vreme' => $this->resource->vreme,
            'kozmeticar' => new KozmeticarResource(Kozmeticar::find($this->resource->kozmeticar_id)),
            'tretman' => new TretmanResource(Tretman::find($this->resource->tretman_id))
         
 

        ];
    }
}
