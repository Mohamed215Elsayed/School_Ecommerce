<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Image extends Model
{
    public $fillable= ['filename','imageable_id','imageable_type'];

    public function imageable()
    {
        return $this->morphTo();
    }
}