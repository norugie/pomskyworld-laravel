<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Puppy;

class PuppyController extends Controller
{
    public function showPuppyList ()
    {
        return view ( 'cms.puppies',
        [
            'puppies' => Puppy::all()
        ]);
    }
}
