@extends('layouts.app')

@section('content')

    @foreach($finance as $finance2)
        <h3>Costumer information Sales:</h3>
        <ul>
            <li>{{$finance2->bankrekeningnummer}}</li>
            <li>{{$finance2->saldo}}</li>
            <li>{{$finance2->aantal_facturen}}</li>
            <li>{{$finance2->omzetbedrag}}</li>
            <li>{{$finance2->limiet}}</li>
            <li>{{$finance2->grootboekrekening}}</li>
            <li>{{$finance2->btw_code}}</li>
            <li>{{$finance2->customer_nummer}}</li>
        </ul>

    @endforeach

@endsection