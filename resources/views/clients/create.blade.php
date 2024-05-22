@extends('layouts.admin')

@section('main-content')
<h1 class="h3 mb-4 text-gray-800">{{ __('Add New Client') }}</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('clients.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Name</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nomor">Phone Number</label>
                <input type="text" name="nomor" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection
