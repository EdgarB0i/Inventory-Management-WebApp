@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Performance Status</div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Item Name</th>
                                    <th scope="col">Selling Price(TK)</th>
                                    <th scope="col">Buying Price(TK)</th>
                                    <th scope="col">Profit/Loss</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items->sortByDesc(function ($item, $key) {
                                    return ($item->buying_price > 0) ? ($item->price - $item->buying_price) / $item->buying_price : 0;
                                }) as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->buying_price}}</td>
                                        <td>
                                            @php
                                                $profit = ($item->buying_price > 0) ? (($item->price - $item->buying_price) / $item->buying_price) * 100 : 0;
                                                $color = ($profit > 0) ? 'green' : 'red';
                                            @endphp
                                            <span style="color:{{$color}}">{{ number_format($profit, 2) }}%</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
