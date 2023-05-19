<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();

        return view('back.hotel', [
            'hotels' => $hotels,
        ]);

    }

    public function create()
    {
        //
    }

    public function store(StoreHotelRequest $request)
    {
        //
    }

    public function show(Hotel $hotel)
    {
        //
    }

    public function edit(Hotel $hotel)
    {
        //
    }

    public function update(UpdateHotelRequest $request, Hotel $hotel)
    {
        //
    }

    public function destroy(Hotel $hotel)
    {
        //
    }
}
