<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Litter;
use App\Models\Puppy;

class PuppyController extends Controller
{
    public function showPuppyList ()
    {
        return view ( 'cms.puppies',
        [
            'puppies' => Litter::all()
        ]);
    }

    public function showPuppyCreateForm ()
    {
        return view ( 'cms.create.puppies' );
    }

    public function createPuppy ()
    {
        //
    }
}
