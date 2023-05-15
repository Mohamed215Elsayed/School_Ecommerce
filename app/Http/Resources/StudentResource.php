<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id, // x=id
            'name'=>$this->name ,
            'email'=>$this->email,
            'password'=> $this->password,
            // 'gender_id'=> $this->gender_id,
            // 'Grade_id'=> $this->Grade_id,
            // 'Classroom_id' => $this->Classroom_id,
            // 'section_id' => $this->section_id,
            // 'parent_id' => $this->parent_id,
            // 'nationalitie_id' => $this->nationalitie_id,
            // 'blood_id'=> $this->blood_id,
            // 'Date_Birth'=> $this->Date_Birth,
            // 'academic_year'=> $this->academic_year,
            // 'softDeletes'=> $this->softDeletes,
        ];
    }
}
/****************** */
// id  name  email  password gender_id  nationalitie_id blood_id Date_Birth Grade_id Classroom_id
// section_id parent_id   academic_year  softDeletes timestamps
