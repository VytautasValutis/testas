@extends('layouts.back')

@section('content')
<div class="row justify-content-center">
    <div class="col-6">
        <table class="table table-borderless table-striped">
            <thead>
                <tr>
                    <th scope="col" class="">id</th>
                    <th scope="col" class="">User</th>
                    <th scope="col" class="">Hotel</th>
                    <th scope="col" class="">price</th>
                    <th scope="col" class="">Confirm</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse($orders as $order)
                <tr>
                    <td>
                        {{$order->id}}
                    </td>
                    <td>
                        {{$users->where('id', $order->user_id)->first()->name}}
                    </td>
                    <td>
                        {{$hotels->where('id', $order->hotel_id)->first()->name}}
                    </td>
                    <td>
                        {{$hotels->where('id', $order->hotel_id)->first()->price}}
                    </td>
                    <td>
                        {{$order->confirmed}}
                    </td>
                    <th>
                        <a href="{{route('order-edit', $order)}}" class="btn btn-outline-success">Confirm</a>
                    </th>
                    <th>
                        <form action="{{route('order-delete', $order)}}" method="post">
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
        <div class="m-2">
            {{ $orders->links() }}
        </div>

    </div>
</div>
</div>
@endsection
