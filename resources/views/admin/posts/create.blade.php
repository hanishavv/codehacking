@extends('layouts.admin')

@section('content')

    <h1>Create Posts</h1>
    {!! Form::open(['method'=>'post','action'=>'AdminPostsController@store','files'=>true]) !!}
    <div class="form-group">

        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('category_id','Category:') !!}
        {!! Form::select('category_id',[''=>'Choose']+$categories,null,['class'=>'form-control']) !!}
    </div>
    {{--<div class="form-group">--}}

        {{--{!! Form::label('user_id','Owner:') !!}--}}
        {{--{!! Form::select('user_id',[''=>'Choose owner'],null,['class'=>'form-control']) !!}--}}
    {{--</div>--}}
    <div class="form-group">

        {!! Form::label('description','Description:') !!}
        {!! Form::textarea('description',null,['class'=>'form-control','rows'=>3]) !!}
    </div>

    <div class="form-group">

        {!! Form::label('photo_id','Upload:') !!}
        {!! Form::file('photo_id',['class'=>'']) !!}
    </div>
    <div class="form-group">

        {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    @include('includes.formerror')
@endsection