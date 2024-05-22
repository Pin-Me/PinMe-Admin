@extends('layouts.admin')

@section('main-content')
<h1 class="h3 mb-4 text-gray-800">{{ __('Edit Filter') }}</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('filters.update', $filter->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="idClient">Client ID</label>
                <input type="text" name="idClient" class="form-control" value="{{ $filter->idClient }}" required>
            </div>
            <div class="form-group">
                <label for="namaFilter">Filter Name</label>
                <input type="text" name="namaFilter" class="form-control" value="{{ $filter->namaFilter }}" required>
            </div>
            <div class="form-group">
                <label for="Preview">Preview</label>
                <input type="file" name="Preview" class="form-control">
                <img src="{{ asset('storage/' . $filter->Preview) }}" alt="Preview" width="50">
            </div>
            <div class="form-group">
                <label for="Filter">Filter</label>
                <input type="text" name="Filter" class="form-control" value="{{ $filter->Filter }}" required>
            </div>
            <div class="form-group">
                <label for="expiredDate">Expired Date</label>
                <input type="date" name="expiredDate" class="form-control" value="{{ $filter->expiredDate }}" required>
            </div>
            <div class="form-group">
                <label for="isActive">Active</label>
                <select name="isActive" class="form-control" required>
                    <option value="1" {{ $filter->isActive ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$filter->isActive ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
