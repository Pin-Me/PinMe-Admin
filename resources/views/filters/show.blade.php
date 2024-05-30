@extends('layouts.admin')

@section('main-content')
<h1 class="h3 mb-4 text-gray-800">{{ __('Filter Details') }}</h1>

<div class="card">
    <div class="card-header">
        Filter Details
    </div>
    <div class="card-body">
        <p><strong>ID:</strong> {{ $filter->id }}</p>
        <p><strong>Client:</strong> {{ $filter->order->client->nama }}</p>
        <p><strong>Order:</strong> {{ $filter->order->id }}</p>
        <p><strong>Filter Name:</strong> {{ $filter->namaFilter }}</p>
        <p><strong>Marker:</strong> 
            @if ($filter->marker)
                <a href="{{ $filter->markerUrl }}" target="_blank">View Marker</a>
            @else
                false
            @endif
        </p>
        <p><strong>Sound:</strong> 
            @if ($filter->sound)
                <a href="{{ $filter->soundUrl }}" target="_blank">Listen Sound</a>
            @else
                false
            @endif
        </p>
        <p><strong>Preview:</strong> 
            @if ($filter->preview)
                <a href="{{ $filter->previewUrl }}" target="_blank">View Preview</a>
            @else
                false
            @endif
        </p>
        <a href="{{ route('filters.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection
