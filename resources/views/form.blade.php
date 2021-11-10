@extends('layout')

@section('title', isset($user) ? 'Update '.$user->name : 'Create patient')

@section('content')
    <a href="{{ route('users.index') }}" class="btn btn-primary mt-2 mb-3">Back to list</a>
    <form method="POST"
        @if(isset($user))
        action="{{ route('users.update', $user) }}"
        @else
        action="{{ route('users.store') }}"
        @endif
        >
        @csrf
        @isset($user)
            @method('PUT')
        @endisset
        <div class="row">
            <div class="col">
                <input name="name"
                value="{{ old('name', isset($user) ? $user->name : null) }}"
                type="text" class="form-control" placeholder="Name" aria-label="Name">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="col">
                <input name="email"
                value="{{ old('email', isset($user) ? $user->email : null) }}"
                type="email" class="form-control" placeholder="email" aria-label="email">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="col">
                <button type="submit" class="btn btn-dark">Save</button>
            </div>
        </div>
    </form>
@endsection
