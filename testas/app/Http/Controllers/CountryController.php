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

    public function create()
    {
        //
    }

    public function store(StoreCountryRequest $request)
    {
        //
    }

    public function show(Country $country)
    {
        //
    }

    public function edit(Country $country)
    {
        //
    }

    public function update(UpdateCountryRequest $request, Country $country)
    {
        //
    }

    public function destroy(Country $country)
    {
        //
    }
}
