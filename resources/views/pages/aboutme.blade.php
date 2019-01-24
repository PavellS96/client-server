@extends('layouts/app')

@section('content')
    

<div class="img2">
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 col-md-6 text-center pt-5">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio voluptate dolorem error, mollitia minima voluptatibus aliquam ipsa. Ipsum harum odit, numquam temporibus doloremque vel. Blanditiis vero nisi necessitatibus sapiente eligendi.
            </div>

            <div class="col-12 col-md-6 pt-5">
                <img src="images/pic1.jpeg" class="img-fluid img-thumbnail" alt="">
            </div>

            <div class="col-12 col-md-6 pt-5">
                <img src="images/pic2.jpeg" class="img-fluid img-thumbnail" alt="">
            </div>

            <div class="col-12 col-md-6 text-center pt-5">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam quo eum illum, explicabo eius quaerat magni non porro vero, delectus odio cumque dicta. Ad expedita iusto obcaecati culpa a sit!
            </div>

            <div class="col-12 col-md-6 text-center pt-5">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio voluptate dolorem error, mollitia minima voluptatibus aliquam ipsa. Ipsum harum odit, numquam temporibus doloremque vel. Blanditiis vero nisi necessitatibus sapiente eligendi.
            </div>
    
            <div class="col-12 col-md-6 pt-5">
                <img src="images/pic3.jpeg" class="img-fluid img-thumbnail" alt="">
            </div>
        </div>
    </div>



    <div class="container pb-5">
        <h1 class="mt-5">Comments</h1>
        @include('inc/messagess')
        @if (count($comments) > 0)
            @foreach ($comments as $comment)
                <div class="well">
                    <h3>{{$comment->name}}</h3>
                    <p>{{$comment->comment}}</p>
                    <small>Written on {{$comment->created_at}}</small>
                </div>
            @endforeach
        @else
            <p>No comments found</p>
        @endif
            {{$comments->links()}}
        <h1 class="mt-4">Leave Comments</h1>
        {!! Form::open(['action'=> 'CommentsController@store', 'method'=> 'Comment']) !!}
            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Name'])}}
            </div>
    
            <div class="form-group">
                {{Form::label('comment', 'Comment')}}
                {{Form::textarea('comment', '', ['class'=>'form-control', 'placeholder'=>'Leave comment here'])}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
        {!! Form::close() !!}
    </div>
</div>
@endsection