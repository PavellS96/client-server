@extends('layouts/app')

@section('content')

<div class="img3">
    
        <div class="container py-5">
        <h1 class="mt-5">Contacts</h1>
        @include('inc/messagess')
            {!! Form::open(['action'=> 'ContactsController@store', 'method'=> 'Contact']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Name')}}
                    {{Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Name'])}}
                </div>

                <div class="form-group">
                    {{Form::label('email', 'Email')}}
                    {{Form::text('email', '', ['class'=>'form-control', 'placeholder'=>'Email'])}}
                </div>

                <div class="form-group">
                    {{Form::label('phone', 'Phone')}}
                    {{Form::text('phone', '', ['class'=>'form-control', 'placeholder'=>'Phone'])}}
                </div>
                {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
            {!! Form::close() !!}
        </div>
</div>

    
@endsection