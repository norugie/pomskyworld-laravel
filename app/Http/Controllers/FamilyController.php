<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Family;
use App\Models\FamilyImage;

class FamilyController extends Controller
{
    public function showPuppyFamilyList ()
    {
        return view ('cms.parents',
        [
            'parents' => Family::where('family_status', 'Active')->orderBy('id', 'DESC')->get()
        ]);
    }

    public function showPuppyFamily (Int $id)
    {
        // Get parent info
        $family = Family::find($id);

        // Get parent's images
        $images = Family::find( $family->id )->familyImages;

        return view( 'cms.read.parents',
        [
            'parent' => $family,
            'images' => $images,
        ]);
    }

    public function showPuppyFamilyCreateForm ()
    {
        return view ('cms.create.parents');
    }

    public function showPuppyFamilyUpdateForm (Int $id, String $type)
    {
        // Get parent info
        $family = Family::findOrFail($id);

        if($type === 'gallery') {
            $images = Family::find( $family->id )->familyImages;

            return view( 'cms.update.images.parents',
            [
                'parent' => $family,
                'images' => $images
            ]);
        } else {
            return view( 'cms.update.parents',
            [
                'parent' => $family
            ]);
        }
    }

    public function createPuppyFamilyGallery (Int $id, String $image_name)
    {
        $image = new FamilyImage();
        $image->family_image_name = $image_name;
        $image->family_id = $id;

        // Save current image object
        $image->save();
    }

    public function createPuppyFamily (Request $request)
    {
        $family = new Family();
        
        $request->validate( 
        [
            'parent_name' => 'required',
            'parent_info' => 'required'
        ],
        [
            'parent_name.required' => 'You cannot leave this section empty.',
            'parent_info.required' => 'You cannot leave this section empty.'
        ]);

        $family->family_name = $request->parent_name;
        $family->family_gender = $request->gender_select;
        $family->family_dob = $request->parent_dob;
        $family->family_desc = $request->parent_info;

        $images = $request->image_name;
        if ($images) {
            $image_array = explode(',', rtrim($images, ','));
            
            // Save current family object
            $family->save();

            // Save family gallery
            foreach($image_array as $image_name):
                $this->createPuppyFamilyGallery($family->id, $image_name);
            endforeach;
        } else $family->save(); // Save current family object

        session([ 
            'crud' => 'create',
            'status' => 'success',
            'message' => 'A family entry has been created successfully.'
        ]);

        return redirect('/cms/parents');
    }

    public function updatePuppyFamily (Request $request, Int $id, String $type)
    {
        // Get parent info
        $family = Family::find($id);

        if($type === 'form') {
            $request->validate( 
            [
                'parent_name' => 'required',
                'parent_info' => 'required'
            ],
            [
                'parent_name.required' => 'You cannot leave this section empty.',
                'parent_info.required' => 'You cannot leave this section empty.'
            ]);
    
            $family->family_name = $request->parent_name;
            $family->family_gender = $request->gender_select;
            $family->family_dob = $request->parent_dob;
            $family->family_desc = $request->parent_info;

            $family->save();
        }

        session([ 
            'crud' => 'update',
            'status' => 'success',
            'message' => 'A family entry has been updated successfully.'
        ]);

        return redirect('/cms/parents');
    }

    public function deactivatePuppyFamily (Request $request)
    {
        $family = Family::find($request->id);
        $family->family_status = 'Inactive';
        $family->save();

        session([ 
            'crud' => 'deactivate',
            'status' => 'success',
            'message' => 'A family entry has been deleted successfully.'
        ]);
    }
}