@extends('layout')

@section('title', isset($doctor) ? 'Update '.$doctor->name : 'Add doctor')

@section('content')
    <a href="{{ route('doctors.index') }}" class="btn btn-primary mt-2 mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
        </svg> Back to list</a>
    <form method="POST" enctype="multipart/form-data"
        @if(isset($doctor))
        action="{{ route('doctors.update', $doctor) }}"
        @else
        action="{{ route('doctors.store') }}"
        @endif
        >
        @csrf
        @isset($doctor)
            @method('PUT')
        @endisset
        <div class="row">
            <div class="col">
                <input type="file"
                class="form-control"
                name="image">
            </div>
            <div class="col">
                <input name="name"
                value="{{ old('name', isset($doctor) ? $doctor->name : null) }}"
                type="text" class="form-control" placeholder="Name" aria-label="Name">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="col">
                <input name="profession"
                value="{{ old('profession', isset($doctor) ? $doctor->profession : null) }}"
                type="text" class="form-control" placeholder="profession" aria-label="profession">
            @error('profession')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="col">
                <input name="email"
                value="{{ old('email', isset($doctor) ? $doctor->email : null) }}"
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