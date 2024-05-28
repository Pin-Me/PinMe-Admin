@extends('layouts.admin')

@section('main-content')
<h1 class="h3 mb-4 text-gray-800">{{ __('Filter Details') }}</h1>

<div class="card">
    <div class="card-header">
        Filter Details
    </div>
    <div class="card-body">
        <p><strong>ID:</strong> {{ $filter->id }}</p>
        <p><strong>Client:</strong> {{ $filter->order && $filter->order->client ? $filter->order->client->nama : 'N/A' }}</p>
        <p><strong>Order:</strong> {{ $filter->order ? $filter->order->id : 'N/A' }}</p>
        <p><strong>Filter Name:</strong> {{ $filter->namaFilter }}</p>
        <p><strong>Marker:</strong> {{ $filter->marker }}</p>
        <p><strong>Sound:</strong> {{ $filter->sound }}</p>
        <p><strong>Preview:</strong> {{ $filter->preview }}</p>
        <a href="{{ route('filters.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection
