@extends('layouts.admin')

@section('main-content')
<h1 class="h3 mb-4 text-gray-800">{{ __('Order Details') }}</h1>

<div class="card">
    <div class="card-header">
        Order Details
    </div>
    <div class="card-body">
        <p><strong>ID:</strong> {{ $order->id }}</p>
        <p><strong>Client:</strong> {{ $order->client->nama }}</p>
        <p><strong>Expired Date:</strong> {{ $order->expiredDate }}</p>
        <p><strong>Is Active:</strong> {{ $order->isActive ? 'Yes' : 'No' }}</p>
        <p><strong>Status:</strong> {{ $order->status }}</p>
        <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection
