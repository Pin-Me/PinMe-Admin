@extends('layouts.admin')

@section('main-content')
<h1 class="h3 mb-4 text-gray-800">{{ __('AR Details') }}</h1>

<div class="card">
    <div class="card-header">
        AR Details
    </div>
    <div class="card-body">
        <p><strong>ID:</strong> {{ $ar->id }}</p>
        <p><strong>Filter:</strong> {{ $ar->filter->namaFilter }}</p>
        <p><strong>AR Object:</strong> 
            @if ($ar->ar)
                <a href="{{ $ar->arUrl }}" target="_blank">View AR</a>
            @else
                false
            @endif
        </p>
        <p><strong>Position X:</strong> {{ $ar->positionX }}</p>
        <p><strong>Position Y:</strong> {{ $ar->positionY }}</p>
        <p><strong>Position Z:</strong> {{ $ar->positionZ }}</p>
        <a href="{{ route('ars.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection
