@extends('layouts.app')

@section('content')

    {!! Form::open(array('url' => 'development/search', 'class'=>'form_navbar-form_navbar-right_searchform')) !!}
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
                            <li><span>maintanance-contract</span></li>
                            <li><span>offer-status  </span></li>
                            <li><span>applications:     </span></li>
                            <li><span>hardware   </span></li>
                            <li><span>operating_system  </span></li>
                            <li><span>appointments </span></li>
                            <li><span>internal_contact_person </span></li>
                        </ul>
                    </div>
                    <div class="customer_right_list">
                        <ul>
                            <li>{{$customer2->development->maintanance_contract}}</li>
                            <li>{{$customer2->development->open_projects}}</li>
                            <li>{{$customer2->development->applications}}</li>
                            <li>{{$customer2->development->hardware}}</li>
                            <li>{{$customer2->development->operating_system}}</li>
                            <li>{{$customer2->development->appointments}}</li>
                            <li>{{$customer2->development->internal_contact_person}}</li>
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