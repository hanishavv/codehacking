@extends('layouts.admin')

@section('content')

    <h1>Edit User</h1>
    <div class="row">
        <div class="col-sm-3">

            <img src="{{$user->photo ? $user->photo->filename : 'http://via.placeholder.com/400x400'}}" alt="" class="img-responsive img-rounded">
        </div>

        <div class="col-sm-9">

            {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}
            <div class="form-group">

                {!! Form::label('name','Name:') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">

                {!! Form::label('email','Email:') !!}
                {!! Form::email('email',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">

                {!! Form::label('role_id','Role:') !!}
                {!! Form::select('role_id',[''=>'Choose role']+$roles,null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">

                {!! Form::label('is_active','Status:') !!}
                {!! Form::select('is_active',[1=>'Active',0=>'Not Active'],null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">

                {!! Form::label('password','Password:') !!}
                {!! Form::password('password',['class'=>'form-control']) !!}
            </div>
            <div class="form-group">

                {!! Form::label('photo_id','Upload:') !!}
                {!! Form::file('photo_id') !!}
            </div>
            <div class="form-group col-sm-6">

                {!! Form::submit('Update User',['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id]]) !!}
            <div class="form-group col-sm-6 ">
                {!! form::submit('Delete User',['class'=>'btn btn-danger pull-right']) !!}

            </div>

            {!! form::close() !!}

        </div>
    </div>
    <div class="row">
        @include('includes.formerror')
    </div>


@endsection