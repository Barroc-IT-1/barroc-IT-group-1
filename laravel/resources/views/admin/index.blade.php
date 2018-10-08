@extends('layouts.app')

@section('content')

    @foreach($sales as $sales2)
        <h3>Costumer information Sales:</h3>
        <ul>
            <li>{{$sales2->offer_numbers}}</li>
            <li>{{$sales2->offer_status }}</li>
            <li>{{$sales2->prospect }}</li>
            <li>{{$sales2->date_of_action }}</li>
            <li>{{$sales2->last_contact_data }}</li>
            <li>{{$sales2->next_action }}</li>
            <li>{{$sales2->sale_percentage }}</li>
            <li>{{$sales2->creditworthy }}</li>
            <li>{{$sales2->costumer_number}}</li>
        </ul>

    @endforeach

@endsection