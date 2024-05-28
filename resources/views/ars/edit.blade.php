@extends('layouts.admin')

@section('main-content')
<h1 class="h3 mb-4 text-gray-800">{{ __('Edit AR') }}</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('ars.update', $ar->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="filterId">Filter</label>
        <select class="form-control" id="filterId" name="filterId">
            @foreach($filters as $filter)
                <option value="{{ $filter->id }}" {{ $ar->filterId == $filter->id ? 'selected' : '' }}>{{ $filter->namaFilter }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="ar">AR</label>
        <input type="text" class="form-control" id="ar" name="ar" value="{{ $ar->ar }}">
    </div>
    <div class="form-group">
        <label for="positionX">Position X</label>
        <input type="number" step="any" class="form-control" id="positionX" name="positionX" value="{{ $ar->positionX }}">
    </div>
    <div class="form-group">
        <label for="positionY">Position Y</label>
        <input type="number" step="any" class="form-control" id="positionY" name="positionY" value="{{ $ar->positionY }}">
    </div>
    <div class="form-group">
        <label for="positionZ">Position Z</label>
        <input type="number" step="any" class="form-control" id="positionZ" name="positionZ" value="{{ $ar->positionZ }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
