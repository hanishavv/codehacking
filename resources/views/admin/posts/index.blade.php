@extends('layouts.admin')

@section('content')

    <h1>Posts</h1>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
			<th>Photo</th>
            <th>Owner</th>
            <th>Category</th>            
            <th>Title</th>
            <th>Description</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
					<td><img height="50" src="{{($post->photo) ? $post->photo->filename : 'http://via.placeholder.com/50x50'}}"></td>   
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category->name}}</td>
                    <td>{{$post->title}}</td>
                    <td>
                        {{$post->description}}
                    </td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    @endsection