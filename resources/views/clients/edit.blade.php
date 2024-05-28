@extends('layouts.admin')

@section('main-content')
<h1 class="h3 mb-4 text-gray-800">{{ __('Edit Client') }}</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('clients.update', $client->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nama">Name</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ $client->nama }}">
    </div>
    <div class="form-group">
        <label for="nomor">Phone Number</label>
        <input type="text" class="form-control" id="nomor" name="nomor" value="{{ $client->nomor }}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $client->email }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
