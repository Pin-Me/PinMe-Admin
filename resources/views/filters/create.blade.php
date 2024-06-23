@extends('layouts.admin')

@section('main-content')
<h1 class="h3 mb-4 text-gray-800">{{ __('Add New Filter') }}</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('filters.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="orderId">Order</label>
        <select class="form-control" id="orderId" name="orderId">
            @foreach($orders as $order)
                <option value="{{ $order->id }}">{{ $order->id }} - {{ $order->client->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="namaFilter">Filter Name</label>
        <input type="text" class="form-control" id="namaFilter" name="namaFilter" value="{{ old('namaFilter') }}">
    </div>
    <div class="form-group">
        <label for="marker">Marker</label>
        <input type="file" class="form-control" id="marker" name="marker">
    </div>
    <div class="form-group">
        <label for="sound">Sound</label>
        <input type="text" class="form-control" id="sound" name="sound" value="{{ old('sound') }}">
    </div>
    <div class="form-group">
        <label for="preview">Preview</label>
        <input type="file" class="form-control" id="preview" name="preview">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
