@extends('layouts.main')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <table class="table" id="houses">
                @foreach($houses as $house => $details)
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Handler</th>
                        <th scope="col">Address</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Quality</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{$house+1}}</th>
                        <td>{{$details['owner']}}</td>
                        <td>{{$details['address']}}</td>
                        <td>{{$details['description']}}</td>
                        <td>${{$details['price']}}</td>
                        <td>{{$details['duration']}}</td>
                        <td>{{$details['rating']}}/10</td>
                        <td>{{$details['quality']}}/10</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection