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


@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <body>
                    <h2>edit Customer</h2>
                    <div class="items">
                        <div class="addform">
                            <h2>edit Customer {{$id}}</h2>
                        {{--dit zijn alle forms die we gebruiken om customers aan te passen--}}
                            <form action="/edit/{{$id}}" method="post">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}
                                <input type="text" name="name" placeholder="name" >
                                <input type="text" name="lastname" placeholder="last name" >
                                <input type="text" name="address" placeholder="address" >
                                <input type="number" name="zipcode" placeholder="zipcode" >
                                <input type="text" name="residence" placeholder="residence" >
                                <input type="number" name="telnumber" placeholder="telephone" >
                                <input type="number" name="faxnumber" placeholder="faxnumber" >
                                <input type="text" name="email" placeholder="email" >
                                <input type="text" name="company" placeholder="company" >
                                <input type="submit" value="submit">
                            </form>
                        </div>

                        <div class="addform">
                            <h2>edit Finance {{$id}}</h2>
                            <form action="/edit/{{$id}} " method="post">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}
                                <input type="text" name="bankrekening" placeholder="bankrekeningnummer">
                                <input type="number" name="saldo" placeholder="saldo">
                                <input type="number" name="aantalfacturen" placeholder="aantal facturen">
                                <input type="number" name="omzetbedrag" placeholder="ommzetbedrag">
                                <input type="number" name="limiet" placeholder="limiet">
                                <input type="number" name="grootboekrekening" placeholder="grootboekrekening">
                                <input type="number" name="btwcode" placeholder="btw code">
                                <input type="number" name="customerid" placeholder="customer id">
                                <input type="submit" value="submit">
                            </form>
                        </div>
                        <div class="addform">
                            <h2>edit Sales {{$id}}</h2>
                            <form action="/edit/{{$id}}" method="post">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}
                                <input type="text" name="offernumbers" placeholder="offer numbers">
                                <input type="text" name="offerstatus" placeholder="offer status">
                                <input type="text" name="prospect" placeholder="prospect">
                                <input type="text" name="dateofaction" placeholder="date of action">
                                <input type="text" name="lastcontactdata" placeholder="last contact data">
                                <input type="number" name="nextaction" placeholder="next action">
                                <input type="number" name="salepercentage" placeholder="sale percentage">
                                <input type="text" name="creditworthy" placeholder="creditworthy">
                                <input type="number" name="customerid" placeholder="customer id">
                                <input type="submit" value="submit">
                            </form>
                        </div>
                        <div class="addform">
                            <h2>edit Development {{$id}}</h2>
                            <form action="/edit/{{$id}}" method="post">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}
                                <input type="text" name="maintanancecontract" placeholder="maintanance contract">
                                <input type="text" name="openprojects" placeholder="open projects">
                                <input type="text" name="applications" placeholder="applications">
                                <input type="text" name="hardware" placeholder="hardware">
                                <input type="text" name="operatingsystem" placeholder="operating system">
                                <input type="number" name="appointments" placeholder="appointments">
                                <input type="text" name="internalcp" placeholder="internal contact person">
                                <input type="number" name="customerid" placeholder="customer id">
                                <input type="submit" value="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection