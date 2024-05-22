@extends('layouts.admin')

@section('main-content')
<h1 class="h3 mb-4 text-gray-800">{{ __('Filters') }}</h1>

<a href="{{ route('filters.create') }}" class="btn btn-primary mb-4">Add New Filter</a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Filter List</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Client ID</th>
                        <th>Filter Name</th>
                        <th>Preview</th>
                        <th>Filter</th>
                        <th>Expired Date</th>
                        <th>Active</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($filters as $filter)
                    <tr>
                        <td>{{ $filter->id }}</td>
                        <td>{{ $filter->idClient }}</td>
                        <td>{{ $filter->namaFilter }}</td>
                        <td><img src="{{ asset('storage/' . $filter->Preview) }}" alt="Preview" width="50"></td>
                        <td>{{ $filter->Filter }}</td>
                        <td>{{ $filter->expiredDate }}</td>
                        <td>{{ $filter->isActive ? 'Yes' : 'No' }}</td>
                        <td>
                            <a href="{{ route('filters.show', $filter->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('filters.edit', $filter->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('filters.destroy', $filter->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
