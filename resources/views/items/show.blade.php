@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>{{ $item->name }}</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <h5>Selling Price: {{ $item->price }} BDT</h5>
                    <h5>Buying Price: {{ $item->buying_price }} BDT</h5>
                    <h5>Quantity: {{ $item->quantity }}</h5>
                    @if($item->quantity < 5)
                        <h5 class="text-danger">Item is running low on stock!</h5>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary">Edit Item</a>
            <a href="{{ route('items.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection