<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();

        return view('back.country', [
            'countries' => $countries,
        ]);

    }

    public function create(Request $request)
    {
        $title = $request->title;
        $season = $request->season;
        Country::create([
            'title' => $title,
            'season' => $season,
        ]);

        return redirect()->back();
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Country $country)
    {
        //
    }

    public function edit(Request $request, Country $country)
    {
        $title = $request->title;
        $season = $request->season;
        $country->update([
            'title' => $title,
            'season' => $season,
        ]);

        return redirect()->back();


    }

    public function update(Request $request, Country $country)
    {
    }

    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->back();

    }
}
