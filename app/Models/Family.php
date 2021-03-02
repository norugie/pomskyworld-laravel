<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
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
        'family_dob'
    ];


    public function familyImages ()
    {
        return $this->hasMany( 'App\Models\FamilyImage', 'family_id' );
    }
}
