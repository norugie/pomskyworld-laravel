<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Family;
use App\Models\Litter;
use App\Models\Puppy;

class PuppyController extends Controller
{
    public function showLitterList ()
    {
        return view ( 'cms.litters',
        [
            'litters' => Litter::all()
        ]);
    }

    public function showLitterCreateForm ()
    {
        return view ( 'cms.create.litters',
        [
            'males' => Family::where('family_gender', 'Male')->where('family_status', 'Active')->get(),
            'females' => Family::where('family_gender', 'Female')->where('family_status', 'Active')->get()
        ]);
    }

    public function createLitter ()
    {
        //
    }
}
