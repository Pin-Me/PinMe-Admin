@extends('layouts.admin')

@section('main-content')
<h1 class="h3 mb-4 text-gray-800">{{ __('Client Details') }}</h1>

<div class="card">
    <div class="card-header">
        Client Details
    </div>
    <div class="card-body">
        <p><strong>ID:</strong> {{ $client->id }}</p>
        <p><strong>Name:</strong> {{ $client->nama }}</p>
        <p><strong>Phone Number:</strong> {{ $client->nomor }}</p>
        <p><strong>Email:</strong> {{ $client->email }}</p>
        <a href="{{ route('clients.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection
