<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //show all listing
    public function index(){
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search'])) -> Simplepaginate(4)
        ]);

    }

    //Create job posting
    public function create(){
        return view('listings.create');
    }


    //show single listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }


    // Store listing data
    public function store(Request $request){

        $formFields = $request -> validate([
                'title' => 'required',
                'company' => ['required'],
                'location' => 'required',
                'website' => 'required',
                'email' => ['required', 'email'],
                'tags' => 'required',
                'description' => 'required'

            ]);

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully! ');


    }

    //Update Listing
     public function edit(Listing $listing)
     {
         return view('listings.edit', ['listing' => $listing]);

     }

        // update  listing data
    public function update(Request $request, Listing $listing){


            $formFields = $request -> validate([
                'title' => 'required',
                'company' => ['required'],
                'location' => 'required',
                'website' => 'required',
                'email' => ['required', 'email'],
                'tags' => 'required',
                'description' => 'required'

            ]);

            $listing->update($formFields);

            return back()->with('message', 'Listing updated successfully! ');


        }

        public function destroy(Listing $listing){

        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');

        }





}

