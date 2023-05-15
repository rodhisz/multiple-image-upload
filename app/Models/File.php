<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_names'
    ];


    public function setFilenamesAttribute($value)
    {
        $this->attributes['file_names'] = json_encode($value);
    }
}
