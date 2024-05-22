@extends('layouts.admin')

@section('main-content')
<h1 class="h3 mb-4 text-gray-800">{{ __('Filter Details') }}</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="form-group">
            <label for="idClient">Client ID</label>
            <p>{{ $filter->idClient }}</p>
        </div>
        <div class="form-group">
            <label for="namaFilter">Filter Name</label>
            <p>{{ $filter->namaFilter }}</p>
        </div>
        <div class="form-group">
            <label for="Preview">Preview</label>
            <img src="{{ asset('storage/' . $filter->Preview) }}" alt="Preview" width="100">
        </div>
        <div class="form-group">
            <label for="Filter">Filter</label>
            <p>{{ $filter->Filter }}</p>
        </div>
        <div class="form-group">
            <label for="expiredDate">Expired Date</label>
            <p>{{ $filter->expiredDate }}</p>
        </div>
        <div class="form-group">
            <label for="isActive">Active</label>
            <p>{{ $filter->isActive ? 'Yes' : 'No' }}</p>
        </div>
        <a href="{{ route('filters.index') }}" class="btn btn-primary">Back to List</a>
    </div>
</div>
@endsection
