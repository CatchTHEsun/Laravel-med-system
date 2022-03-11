@extends('layout')

@section('title', 'Doctor: '.$doctor->name)

@section('content')
<div class="card" style="width: 18rem;">
    <a href="{{ route('doctors.index') }}" class="btn btn-primary mt-2 mb-3">Back to list</a>
    @if ($doctor->image_path == '')
                      <td><img src="{{ asset('images/' . "ava-p1.png" )}}" width="100%" height="100%" alt="photo"></td>
                @else
                <td><img src="{{ asset('images/' . $doctor->image_path)}}" width="100%" height="100%" alt="photo"></td>
                @endif
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Id: <b>{{$doctor->id}}</b></li>
        <li class="list-group-item">Name: <b>{{$doctor->name}}</b></li>
        <li class="list-group-item">Profession: <b>{{$doctor->profession}}</b></li>
        <li class="list-group-item">Email: <b>{{$doctor->email}}</b></li>
        <li class="list-group-item">Created: <b>{{$doctor->created_at->format('d/m/y H:i:s')}}</b></li>
        <li class="list-group-item">Updated: <b>{{$doctor->updated_at->format('d/m/y H:i:s')}}</b></li>
    </ul>
    <div class="card-body">
        <form method="POST" action="{{ route('doctors.destroy', $doctor) }}">
            <a href="{{ route('doctors.edit', $doctor) }}" type="button" class="btn btn-primary">Edit</a>
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>
</div>
@endsection
