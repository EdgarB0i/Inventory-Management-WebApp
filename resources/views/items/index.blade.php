@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Inventory Status</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price(TK)</th>
                                <th>Total Consumed Space</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ round($item->quantity / 100 * 100) }}%</td>
                                <td>
                                    <div class="d-flex">
                                        <div class="mr-3">
                                            <a href="{{ route('items.show', $item->id) }}" class="btn btn-primary btn-sm">View</a>
                                        </div>
                                        <div class="mr-3">
                                            <a href="{{ route('items.edit', $item->id) }}" class="btn btn-success btn-sm">Edit</a>
                                        </div>
                                        <div>
                                            <form action="{{ route('items.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <h5>Total number of products present: {{ $items->sum('quantity') }} out of 100</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
