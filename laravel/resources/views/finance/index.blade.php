@extends('layouts.app')

@section('content')


    {!! Form::open(array('url' => 'finance/search', 'class'=>'form_navbar-form_navbar-right_searchform')) !!}
    {!! Form::text('search', null,
                           array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Search for customers...')) !!}
    {!! Form::submit('Search',
                               array('class'=>'btn_btn-default', 'name'=>'submitbtn')) !!}
    {!! Form::close() !!}

    @if (isset($_POST['submitbtn']))
        @if(!$customers->isEmpty())
            @foreach($customers as $customer2)
                <h4>Information about {{$customer2->name}} {{$customer2->last_name}}</h4>
                <div class="customerlists">
                    <div class="customer_left_list">
                        <ul>
                            <li><span>First-Name: </span></li>
                            <li><span>Last-name:  </span></li>
                            <li><span>Adress:     </span></li>
                            <li><span>Zipcode:    </span></li>
                            <li><span>Residence:  </span></li>
                            <li><span>Tel_number: </span></li>
                            <li><span>Fax_number: </span></li>
                            <li><span>Email:      </span></li>
                            <li><span>Company:    </span></li>
                        </ul>
                    </div>
                    <div class="customer_right_list">
                        <ul>
                            <li>{{$customer2->name}}</li>
                            <li>{{$customer2->last_name}}</li>
                            <li>{{$customer2->address}}</li>
                            <li>{{$customer2->zipcode}}</li>
                            <li>{{$customer2->residence}}</li>
                            <li>{{$customer2->tel_number}}</li>
                            <li>{{$customer2->fax_number}}</li>
                            <li>{{$customer2->email}}</li>
                            <li>{{$customer2->company}}</li>
                        </ul>
                    </div>
                </div>
                <div class="customerlists">
                    <div class="customer_left_list">
                        <ul>
                            <li><span>Bankrekeningnummer: </span></li>
                            <li><span>Saldo: </span></li>
                            <li><span>Aantal facturen:    </span></li>
                            <li><span>Omzetbedrag:    </span></li>
                            <li><span>Limiet:  </span></li>
                            <li><span>Grootboekrekening </span></li>
                            <li><span>Btw_code: </span></li>

                        </ul>
                    </div>
                    <div class="customer_right_list">
                        <ul>
                            <li>{{$customer2->finance->bankrekeningnummer}}</li>
                            <li>€{{$customer2->finance->saldo}}</li>
                            <li>{{$customer2->finance->aantal_facturen}}</li>
                            <li>€{{$customer2->finance->omzetbedrag}}</li>
                            <li>{{$customer2->finance->limiet}}</li>
                            <li>{{$customer2->finance->grootboekrekening}}</li>
                            <li>{{$customer2->finance->btw_code}}</li>
                        </ul>
                    </div>
                </div>
                <a href = '/delete/{{ $customer2->id }}' class="delete_btn">Delete</a>
                <a href = '/edit/{{ $customer2->id }}'class="delete_btn">Update</a>

            @endforeach
        @else
            <div class="mess_no_cost_found">
                <p>No customers found</p>
            </div>
        @endif
    @endif

@endsection