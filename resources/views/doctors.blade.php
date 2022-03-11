@extends('layout')

@section('title', 'Doctors')

@section('content')
    <a class="btn btn-success" role="button" href="./">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
        </svg>
     &nbsp;Back</a>
     <a class="btn btn-primary" role="button" href="{{ route('doctors.create') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
        </svg>
     &nbsp;New doctor</a>

    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                @if ($user->image_path == '')
                      <td><img src="{{ asset('images/' . "ava-p1.png" )}}" width="40" height="40" alt="photo"></td>
                @else
                <td><img src="{{ asset('images/' . $user->image_path)}}" width="40" height="40" alt="photo"></td>
                @endif
                <td>
                    <a href="{{ route('doctors.show', $user) }}">{{$user->name}}</a>
                </td>
                <td>
                    <a href="{{ route('doctors.show', $user) }}">{{$user->profession}}</a>
                </td>
                <td>
                    <a href="{{ route('doctors.show', $user) }}">{{$user->email}}</a>
                </td>
                <td>
                    <form method="POST" action="{{ route('doctors.destroy', $user) }}">
                        <a href="{{ route('doctors.edit', $user) }}" type="button" class="btn btn-primary">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $users->links() }}
@endsection