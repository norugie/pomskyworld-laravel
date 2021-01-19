<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Family;
use App\Models\FamilyImage;

class FamilyController extends Controller
{
    public function showPuppyFamilyList ()
    {
        return view ( 'cms.parents',
        [
            'parents' => Family::all()
        ]);
    }

    public function showPuppyFamilyCreateForm ()
    {
        return view ( 'cms.create.parents' );
    }

    public function createPuppyFamilyGallery ( Int $id, String $image_name )
    {
        $image = new FamilyImage();
        $image->family_image_name = $image_name;
        $image->family_id = $id;

        // Save current image object
        $image->save();
    }

    public function createPuppyFamily ( Request $request )
    {
        $family = new Family();
        
        $family->family_name = $request->parent_name;
        $family->family_gender = $request->gender_select;
        $family->family_dob = $request->parent_dob;
        $family->family_desc = $request->parent_info;

        $images = $request->image_name;
        if ( $images ) {
            $image_array = explode( ',', rtrim( $images, ',' ) );
            
            // Save current family object
            $family->save();

            // Save family gallery
            foreach( $image_array as $image_name ):
                $this->createPuppyFamilyGallery( $family->id, $image_name );
            endforeach;
        } else $family->save(); // Save current family object

        session(['crud' => 'create']);
        session(['status' => 'success']);
        session(['message' => 'A family entry has been created successfully.']);

        alert()->info('Your form submited successfully ')->autoclose("2000");

        return redirect( '/cms/parents' );
    }
}
