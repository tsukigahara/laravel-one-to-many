<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PersonDetail extends Model
{
    use HasFactory;
    private $phone;
    private $address;
    private $avatar;

    public function person()
    {
        return $this->BelongsTo(Person::class);
    }
}
