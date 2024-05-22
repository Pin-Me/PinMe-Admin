@extends('layouts.admin')

@section('main-content')
<h1 class="h3 mb-4 text-gray-800">{{ __('Edit Client') }}</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('clients.update', $client->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Name</label>
                <input type="text" name="nama" class="form-control" value="{{ $client->nama }}" required>
            </div>
            <div class="form-group">
                <label for="nomor">Phone Number</label>
                <input type="text" name="nomor" class="form-control" value="{{ $client->nomor }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email"
                class="form-control" value="{{ $client->email }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
