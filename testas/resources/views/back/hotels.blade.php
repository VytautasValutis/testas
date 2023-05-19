@extends('layouts.back')

@section('content')
<div class="row justify-content-center">
    <div class="col-4">
        <table class="table table-borderless table-striped">
            <thead>
                <tr>
                    <th>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#edit">
                            Add new hotel
                        </button>
                        <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add new country</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('country-create')}}" method="post">
                                            <div class="col col-6">
                                                <label class="form-label">Country title</label>
                                                <input type="text" class="form-control" name="title">
                                                <label class="form-label">Country season</label>
                                                <input type="text" class="form-control" name="season">
                                                <button type="submit" class="mt-2 btn btn-outline-success">Submit</button>
                                            </div>
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th scope="col" class="">id</th>
                    <th scope="col" class="">Country</th>
                    <th scope="col" class="">Hotel</th>
                    <th scope="col" class="">Photo</th>
                    <th scope="col" class="">Trip long</th>
                    <th scope="col" class="">Price</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse($hotels as $hotel)
                <tr>
                    <td>
                        {{$countries->where('id', $hotel->country_id)->first()->title}}
                    </td>
                    <td>
                        {{$hotel->name}}
                    </td>
                    <td>
                        {{$country->season}}
                    </td>
                    <th>
                        @include('back.editHotel')
                    </th>
                    <th>
                        <form action="{{route('country-delete', $country)}}" method="post">
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                            @csrf
                            @method('delete')
                        </form>
                    </th>
                </tr>
                @empty
                <th>No orders</th>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection
