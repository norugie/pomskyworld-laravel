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

    public function showPuppyList ()
    {
        //
    }

    public function showLitterCreateForm ()
    {
        return view ( 'cms.create.litters',
        [
            'males' => Family::where('family_gender', 'Male')->where('family_status', 'Active')->get(),
            'females' => Family::where('family_gender', 'Female')->where('family_status', 'Active')->get()
        ]);
    }

    public function showPuppyCreateForm (Int $id)
    {
        return view( 'cms.create.puppies' );
    }

    public function createLitter (Request $request)
    {
        $litter = new Litter();
        
        $request->validate( 
        [
            'litter_name' => 'required',
            'litter_info' => 'required',
            'litter_number' => 'required|integer|min:1'
        ],
        [
            'litter_name.required' => 'You cannot leave this section empty.',
            'litter_info.required' => 'You cannot leave this section empty.',
            'litter_number.required' => 'You cannot leave this section empty.',
            'litter_number.integer' => 'The entered value must be a number.',
            'litter_number.min' => 'The minimum valid value is 1.'
        ]);

        $litter->litter_name = $request->litter_name;
        $litter->litter_dob = $request->litter_dob;
        $litter->litter_desc = $request->litter_info;

        $litter->save();

        DB::table('family_litter')->insert([
            [
                'family_id' => $request->mother_select,
                'ltter_id' => $litter->id
            ],
            [
                'family_id' => $request->father_select,
                'ltter_id' => $litter->id
            ]
        ]);

        session([ 
            'ctr' => $request->litter_number,
            'message' => 'An litter entry has been created successfully.'
        ]);

        return redirect('cms/litters/'. $litter->id .'/puppies/create');
    }

    public function createPuppy ( Int $id, Request $request )
    {
        $puppy = new Puppy();
        echo $id . "<br>";
        for($ctr = 1; $ctr <= session('ctr'); $ctr++){
            $request->validate( 
            [
                'puppy_name_' . $ctr => 'required',
                'puppy_info_' . $ctr => 'required'
            ],
            [
                'puppy_name_' . $ctr . '.required' => 'You cannot leave this section empty.',
                'puppy_info_' . $ctr . '.required' => 'You cannot leave this section empty.'
            ]);
            
            $puppy->puppy_name = $request->input('puppy_name_' . $ctr);
            $puppy->puppy_gender = $request->input('gender_select_' . $ctr);
            $puppy->puppy_desc = $request->input('puppy_info_' . $ctr);
            $puppy->litter_id = $id;

            $puppy->save();
        }

        if(! session('message') ? $message = "A new set of puppies has been added to a litter." : $message = session('message'));

        session([ 
            'crud' => 'deactivate',
            'status' => 'success',
            'message' => $message
        ]);

    }
}
