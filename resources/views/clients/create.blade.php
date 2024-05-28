@extends('layouts.admin')

@section('main-content')
<h1 class="h3 mb-4 text-gray-800">{{ __('Add New Client') }}</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('clients.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama">Name</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
    </div>
    <div class="form-group">
        <label for="nomor">Phone Number</label>
        <input type="text" class="form-control" id="nomor" name="nomor" value="{{ old('nomor') }}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
