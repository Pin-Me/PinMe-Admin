@extends('layouts.admin')

@section('main-content')
<h1 class="h3 mb-4 text-gray-800">{{ __('Edit Filter') }}</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('filters.update', $filter->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="orderId">Order</label>
        <select class="form-control" id="orderId" name="orderId">
            @foreach($orders as $order)
                <option value="{{ $order->id }}" {{ $filter->orderId == $order->id ? 'selected' : '' }}>{{ $order->id }} - {{ $order->client->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="namaFilter">Filter Name</label>
        <input type="text" class="form-control" id="namaFilter" name="namaFilter" value="{{ $filter->namaFilter }}">
    </div>
    <div class="form-group">
        <label for="marker">Marker</label>
        <input type="text" class="form-control" id="marker" name="marker" value="{{ $filter->marker }}">
    </div>
    <div class="form-group">
        <label for="sound">Sound</label>
        <input type="text" class="form-control" id="sound" name="sound" value="{{ $filter->sound }}">
    </div>
    <div class="form-group">
        <label for="preview">Preview</label>
        <input type="text" class="form-control" id="preview" name="preview" value="{{ $filter->preview }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
