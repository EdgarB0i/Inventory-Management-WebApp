@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="blue-row" onclick="location.href='{{ route('items.index') }}';">
                        <h3 class="text-white">{{ __('Inventory Status') }}</h3>
                    </div>
                    <div class="blue-row" onclick="location.href='{{ route('items.create') }}';">
                        <h3 class="text-white">{{ __('Add items') }}</h3>
                    </div>
                    <div class="blue-row" onclick="location.href='{{ route('items.search') }}';">
                        <h3 class="text-white">{{ __('Search Items') }}</h3>
                    </div>
                    <div class="blue-row" onclick="location.href='{{ route('items.performance') }}';">
                        <h3 class="text-white">{{ __('Performance Status') }}</h3>
                    </div>
                    <div class="blue-row" onclick="location.href='{{ route('warehouse.index') }}';">
                        <h3 class="text-white">{{ __('Warehouse Staff Management') }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .blue-row {
        background-color: blue;
        padding: 20px;
        margin-bottom: 20px;
        cursor: pointer;
    }
</style>
@endsection
