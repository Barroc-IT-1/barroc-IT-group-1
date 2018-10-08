@extends('layouts.app')

@section('content')

    @foreach($development as $development2)
        <h3>Costumer information Development:</h3>
        <ul>
            <li>{{$development2->maintanance_contract}}</li>
            <li>{{$development2->open_projects}}</li>
            <li>{{$development2->applications}}</li>
            <li>{{$development2->hardware}}</li>
            <li>{{$development2->operating_system}}</li>
            <li>{{$development2->appointments}}</li>
            <li>{{$development2->internal_contact_person}}</li>
            <li>{{$development2->costumer_number}}</li>


        </ul>

    @endforeach

@endsection