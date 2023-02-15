<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    private $name;
    private $email;

    public function personDetail()
    {
        return $this->hasOne(PersonDetail::class);
    }
    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
