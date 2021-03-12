<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function showTestimonialList ()
    {
        return view ( 'cms.testimonials',
        [
            'testimonials' => Testimonial::where('testimonial_status', 'Active')->orderBy('id', 'DESC')->get()
        ]);
    }

    public function showTestimonialCreateForm ()
    {
        return view ( 'cms.create.testimonials' );
    }

    public function createTestimonial (Request $request)
    {
        $testimonial = new Testimonial();
        
        $request->validate( 
        [
            'testimonial_name' => 'required',
            'testimonial_desc' => 'required'
        ],
        [
            'testimonial_name.required' => 'You cannot leave this section empty.',
            'testimonial_desc.required' => 'You cannot leave this section empty.',
        ]);

        $testimonial->testimonial_name = $request->testimonial_name;
        $testimonial->testimonial_date = $request->testimonial_date;
        $testimonial->testimonial_desc = $request->testimonial_desc;
        
        $testimonial->save(); // Save current testimonial object

        session([ 
            'crud' => 'create',
            'status' => 'success',
            'message' => 'A testimonial entry has been created successfully.'
        ]);

        return redirect('/cms/testimonials');
    }

    public function deactivateTestimonial (Request $request)
    {
        $testimonial = Testimonial::find($request->id);
        $testimonial->testimonial_status = 'Inactive';
        $testimonial->save();

        session([ 
            'crud' => 'deactivate',
            'status' => 'success',
            'message' => 'A testimonial entry has been deleted successfully.'
        ]);
    }
}
