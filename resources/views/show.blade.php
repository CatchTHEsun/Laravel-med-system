@extends('layout')

@section('title', 'Patients')

@section('content')
    <form>
        <div class="row">
          <div class="col">
              <input type="text" class="form-control" placeholder="First name" aria-label="First name">
          </div>
          <div class="col">
              <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
          </div>
        </div>
    </form>
@endsection
