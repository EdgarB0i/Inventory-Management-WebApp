@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Warehouse Staff Management</h2>
        <form method="POST" action="{{ route('warehouse.store') }}">
            @csrf
            <div class="form-group">
                <label for="present_staff">Enter the number of current workers:</label>
                <input type="number" class="form-control" id="present_staff" name="present_staff">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="mt-4">
            @if($presentStaff > 0)
                <h4>Present staff:</h4>
                <p>{{ $presentStaff }}</p>
            @else
                <h4>Present staff: 0</h4>
            @endif
        </div>
        @php
            $requiredStaff = ceil($totalQuantity / 5);
            $suggestion = '';
            if ($requiredStaff > $presentStaff) {
                $suggestion = 'You need to hire more staff.';
            } elseif ($requiredStaff < $presentStaff) {
                $suggestion = 'You have excess staff, consider reducing.';
            } else {
                $suggestion = 'You have the right amount of staff.';
            }
        @endphp
        <div class="mt-4">
            <h4>Required Staff:</h4>
            <p>{{ $requiredStaff }}</p>
        </div>
        <div class="mt-4">
            <h4>Suggestion:</h4>
            <p>{{ $suggestion }}</p>
        </div>
    </div>
@endsection
