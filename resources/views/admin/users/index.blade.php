@extends('layouts.admin')

@section('content')

    <h1>User</h1>



        @if(Session::has('deleted_user'))
            <h6 class="bg-danger">{{Session('deleted_user')}}</h6>
            @endif

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Profile</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Active</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td><img height="50"  src="{{$user->photo ? $user->photo->filename:'http://via.placeholder.com/50x50'}}" alt=""></td>
                <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{($user->role)?$user->role->name : 'No user role'}}</td>
                <td>
                    {{($user->is_active == 1)?'Active':'No Active'}}
                </td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
            </tr>
            @endforeach
        @endif
        </tbody>
    </table>

@endsection