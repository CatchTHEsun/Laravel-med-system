@extends('layout')

@section('title', 'Patient: '.$user->name)

@section('content')
<div class="card" style="width: 18rem;">
    <a href="{{ route('users.index') }}" class="btn btn-primary mt-2 mb-3">Back to list</a>
    <svg class="bd-placeholder-img img-thumbnail" width="400" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera: 200x200" preserveAspectRatio="xMidYMid slice" focusable="false"><title>A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">200x200</text></svg></td>
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
