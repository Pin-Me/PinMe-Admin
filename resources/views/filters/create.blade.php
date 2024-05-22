@extends('layouts.admin')

@section('main-content')
<h1 class="h3 mb-4 text-gray-800">{{ __('Add New Filter') }}</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('filters.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="idClient">Client ID</label>
                <input type="text" name="idClient" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="namaFilter">Filter Name</label>
                <input type="text" name="namaFilter" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Preview">Preview</label>
                <input type="file" name="Preview" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Filter">Filter</label>
                <input type="text" name="Filter" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="expiredDate">Expired Date</label>
                <input type="date" name="expiredDate" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="isActive">Active</label>
                <select name="isActive" class="form-control" required>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection
