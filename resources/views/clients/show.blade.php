@extends('layouts.admin')

@section('main-content')
<h1 class="h3 mb-4 text-gray-800">{{ __('Client Details') }}</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="form-group">
            <label for="nama">Name</label>
            <p>{{ $client->nama }}</p>
        </div>
        <div class="form-group">
            <label for="nomor">Phone Number</label>
            <p>{{ $client->nomor }}</p>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <p>{{ $client->email }}</p>
        </div>
        <a href="{{ route('clients.index') }}" class="btn btn-primary">Back to List</a>
    </div>
</div>
@endsection
