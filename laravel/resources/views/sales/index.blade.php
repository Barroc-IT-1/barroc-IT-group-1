@extends('layouts.app')

@section('content')

    {!! Form::open(array('url' => 'sales/search', 'class'=>'form navbar-form navbar-right searchform')) !!}
    {!! Form::text('search', null,
                           array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Search for customers...')) !!}
    {!! Form::submit('Search',
                               array('class'=>'btn btn-default')) !!}
    {!! Form::close() !!}

    @foreach($customers as $customer2)
        <h3>Costumer information Sales:</h3>
        <div class="customer_left_list">
            <ul>
                <li>First-Name: {{$customer2->name}}</li>
                <li>Last-name:  {{$customer2->last_name}}</li>
                <li>Adress:     {{$customer2->address}}</li>
                <li>Zipcode:    {{$customer2->zipcode}}</li>
                <li>Residence:  {{$customer2->residence}}</li>
                <li>Tel_number: {{$customer2->tel_number}}</li>
                <li>Fax_number: {{$customer2->fax_number}}</li>
                <li>Email:      {{$customer2->email}}</li>
                <li>Company:    {{$customer2->company}}</li>
            </ul>
        </div>
        <div class="customer_left_list">
            <ul>
                <li>First-Name: {{$customer2->name}}</li>
                <li>Last-name:  {{$customer2->last_name}}</li>
                <li>Adress:     {{$customer2->address}}</li>
                <li>Zipcode:    {{$customer2->zipcode}}</li>
                <li>Residence:  {{$customer2->residence}}</li>
                <li>Tel_number: {{$customer2->tel_number}}</li>
                <li>Fax_number: {{$customer2->fax_number}}</li>
                <li>Email:      {{$customer2->email}}</li>
                <li>Company:    {{$customer2->company}}</li>
            </ul>
        </div>

    @endforeach

@endsection
