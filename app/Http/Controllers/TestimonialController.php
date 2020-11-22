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
            'testimonials' => Testimonial::all()
        ]);
    }

    public function showTestimonialCreateForm ()
    {
        return view ( 'cms.create.testimonials' );
    }

    public function createTestimonial ()
    {
        //
    }
}
