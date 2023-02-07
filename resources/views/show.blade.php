@extends('layout')

@section('title', 'Patient: '.$user->name)

@section('content')
<div class="card" style="width: 18rem;">
    <a href="{{ route('users.index') }}" class="btn btn-primary mt-2 mb-3">Back to list</a>
    <img src="{{ asset('images/' . $user->image_path)}}"></td>
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Id: <b>{{$user->id}}</b></li>
        <li class="list-group-item">Name: <b>{{$user->name}}</b></li>
        <li class="list-group-item">Email: <b>{{$user->email}}</b></li>
        <li class="list-group-item">Created: <b>{{$user->created_at->format('d/m/y H:i:s')}}</b></li>
        <li class="list-group-item">Updated: <b>{{$user->updated_at->format('d/m/y H:i:s')}}</b></li>
    </ul>
    <div class="card-body">
        <form method="POST" action="{{ route('users.destroy', $user) }}">
            <a href="{{ route('users.edit', $user) }}" type="button" class="btn btn-primary">Edit</a>
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>
</div>
@endsection
