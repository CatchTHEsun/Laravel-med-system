@extends('layout')

@section('title', 'Patients')

@section('content')


     
    
    <div class="row gx-5">
        <div class="col">
            <a class="btn btn-success" role="button" href="./">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                </svg>
            &nbsp;Back</a>
        </div>
    <div class="col">
        <div class="input-group w-50 gy-5">
            <span class="input-group-text" id="basic-addon1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                </svg>
            </span>
            <input type="text" class="form-control" placeholder="Enter patients name" aria-label="Input group example" aria-describedby="basic-addon1">
        </div>
    </div>
  </div>
  &nbsp;

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
                <a href="{{ route('users.show', $user->id) }}">{{$user->name}}</a>
                </td>
                <td>
                    <a href="#">{{$user->email}}</a>
                </td>
                <td>
                    <form method="POST" action="#">
                       <a href="{{ route('doctorstopatients.edit', $user->id) }}?patient_id= {{$user->id}}&patient_name= {{$user->name}}" type="button" class="btn btn-primary">Add</a> 
                     
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

   {{ $users->links() }} 
@endsection
