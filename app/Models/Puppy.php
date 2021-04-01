<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puppy extends Model
{
    use HasFactory;

    public function puppyImages ()
    {
        return $this->hasMany( 'App\Models\PuppyImage', 'puppy_id' );
    }
}
