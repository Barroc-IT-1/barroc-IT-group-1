@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <body>
                    <form action="{{ url('/addcost/1') }}" method="post">
                        {{ csrf_field() }}
                        <input type="text" name="name" placeholder="name">
                        <input type="text" name="lastname" placeholder="last name">
                        <input type="text" name="address" placeholder="address">
                        <input type="number" name="zipcode" placeholder="zipcode">
                        <input type="text" name="residence" placeholder="residence">
                        <input type="number" name="telnumber" placeholder="telephone">
                        <input type="number" name="faxnumber" placeholder="faxnumber">
                        <input type="text" name="email" placeholder="email">
                        <input type="text" name="company" placeholder="company">
                        <input type="submit" value="submit">

                    </form>
                </div>
            </div>
        </div>
@endsection