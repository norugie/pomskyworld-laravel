<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Family;

class FamilyController extends Controller
{
    public function showPuppyFamilyList ()
    {
        return view ( 'cms.parents',
        [
            'parents' => Family::all()
        ]);
    }
}
