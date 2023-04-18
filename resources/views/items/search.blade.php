@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('items.search') }}" method="GET">
                            <div class="form-group">
                                <label for="name">{{ __('Enter the name of the product:') }}</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('Search') }}</button>
                        </form>
                        @if(isset($errorMessage))
                            <div class="alert alert-danger mt-3">{{ $errorMessage }}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
