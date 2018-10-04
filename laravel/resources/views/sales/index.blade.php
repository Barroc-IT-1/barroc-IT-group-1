<<<<<<< HEAD
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sales</title>
</head>
<body>

=======
@extends('layouts.app')

@section('content')
>>>>>>> master

    @foreach($sales as $sales2)
        <h3>Costumer information Sales:</h3>
        <p>{{$sales2->offer_numbers}}<br>{{$sales2->offer_status }}<br>{{$sales2->prospect }}<br>{{$sales2->date_of_action }}<br>{{$sales2->last_contact_data }}<br>
            {{$sales2->next_action }}<br>{{$sales2->sale_percentage }}<br>{{$sales2->creditworthy }}<br>{{$sales2->costumer_number}}</p>
    @endforeach

@endsection