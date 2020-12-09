<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('cms.dashboard');
    }

    public function uploadImage ( Request $request, $type )
    {
        $file = $request->file( 'file' );

        // Set path for image
        if ( $type === 'family' ? $url = '/images/parents' : $url = '/images/puppies' );
        $path = url( $url ) . '/' . $file->getClientOriginalName();
        $file_name_to_store = $path;

        // Upload image to designated image folder
        $file->move( public_path( $url ), $file->getClientOriginalName() );
    }

    public function deleteImage ( Request $request, $type )
    {
        $filename = $request->filename;

        // Set path for image
        if ( $type === 'family' ? $url = '/images/parents' : $url = '/images/puppies' );
        $path = public_path() . $url . '/' . $filename;
        if( File::exists( $path ) ) File::delete( $path );
    }
}
