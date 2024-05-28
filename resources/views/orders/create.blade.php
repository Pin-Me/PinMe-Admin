@extends('layouts.admin')

@section('main-content')
<h1 class="h3 mb-4 text-gray-800">{{ __('Add New Order') }}</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('orders.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="clientId">Client</label>
        <select class="form-control" id="clientId" name="clientId">
            @foreach($clients as $client)
                <option value="{{ $client->id }}">{{ $client->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="expiredDate">Expired Date</label>
        <input type="datetime-local" class="form-control" id="expiredDate" name="expiredDate" value="{{ old('expiredDate') }}">
    </div>
    <div class="form-group">
        <label for="isActive">Is Active</label>
        <select class="form-control" id="isActive" name="isActive">
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
