@extends('layouts.admin')

@section('main-content')
<h1 class="h3 mb-4 text-gray-800">{{ __('ARs') }}</h1>

<a href="{{ route('ars.create') }}" class="btn btn-primary mb-4">Add New AR</a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">AR List</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Filter</th>
                        <th>AR Object</th>
                        <th>Position X</th>
                        <th>Position Y</th>
                        <th>Position Z</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($ars as $ar)
                    <tr>
                        <td>{{ $ar->id }}</td>
                        <td>{{ $ar->filter->namaFilter }}</td>
                        <td>{{ $ar->ar ? 'true' : 'false' }}</td>
                        <td>{{ $ar->positionX }}</td>
                        <td>{{ $ar->positionY }}</td>
                        <td>{{ $ar->positionZ }}</td>
                        <td>
                            <a href="{{ route('ars.show', $ar->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('ars.edit', $ar->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('ars.destroy', $ar->id) }}" method="POST" style="display:inline-block;">
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
