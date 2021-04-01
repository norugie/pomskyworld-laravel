<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Litter extends Model
{
    use HasFactory;
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */

    protected $dates = [
        'created_at',
        'updated_at',
        'litter_dob'
    ];

    public function litterPuppies ()
    {
        return $this->hasMany( 'App\Models\Puppy', 'litter_id' );
    }
}
