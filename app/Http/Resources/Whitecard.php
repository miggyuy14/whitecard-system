<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Whitecard extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return[
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'middle_initial' => $this->middle_initial,
            'college_branch' => $this->college_branch,
            'semester' => $this->semester,
            'subject_name' => $this->subject_name,
            'status' => $this->status,
            'professors_name' => $this->professors_name,
            'created_at' => $this->created_at,
        ];
    }
}
