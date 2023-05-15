<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
// use Spatie\Translatable\HasTranslations-trait;

class Translatable extends Model
{
    use HasFactory;
    // use HasTranslations;
    public $translatable = ['Name','Notes'];
}
