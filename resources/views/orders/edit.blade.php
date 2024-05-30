@extends('layouts.admin')

@section('main-content')
<h1 class="h3 mb-4 text-gray-800">{{ __('Edit Order') }}</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('orders.update', $order->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="clientId">Client</label>
        <select class="form-control" id="clientId" name="clientId">
            @foreach($clients as $client)
                <option value="{{ $client->id }}" {{ $order->clientId == $client->id ? 'selected' : '' }}>{{ $client->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="expiredDate">Expired Date</label>
        <input type="datetime-local" class="form-control" id="expiredDate" name="expiredDate" value="{{ $order->expiredDate }}">
    </div>
    <div class="form-group">
        <label for="isActive">Is Active</label>
        <select class="form-control" id="isActive" name="isActive">
            <option value="1" {{ $order->isActive ? 'selected' : '' }}>Yes</option>
            <option value="0" {{ !$order->isActive ? 'selected' : '' }}>No</option>
        </select>
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" id="status" name="status">
            <option value="Baru" {{ $order->status == 'Baru' ? 'selected' : '' }}>Baru</option>
            <option value="Lama" {{ $order->status == 'Lama' ? 'selected' : '' }}>Lama</option>
            <option value="Selesai" {{ $order->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
