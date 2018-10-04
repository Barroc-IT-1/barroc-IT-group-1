@extends('layouts.app')

@section('content')

    @foreach($sales as $sales2)
        <h3>Costumer information Sales:</h3>
        <p>{{$sales2->offer_numbers}}<br>{{$sales2->offer_status }}<br>{{$sales2->prospect }}<br>{{$sales2->date_of_action }}<br>{{$sales2->last_contact_data }}<br>
            {{$sales2->next_action }}<br>{{$sales2->sale_percentage }}<br>{{$sales2->creditworthy }}<br>{{$sales2->costumer_number}}</p>
    @endforeach

@endsection