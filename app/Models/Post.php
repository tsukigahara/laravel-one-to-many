<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    private $title;
    private $body;

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
