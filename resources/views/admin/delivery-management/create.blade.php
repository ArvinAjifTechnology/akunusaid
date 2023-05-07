@extends('layouts.admin.main')

@section('title', 'Create Delivery')

@section('content')
<form action="{{ route('delivery-management.store') }}">
    @csrf
    @include('admin.delivery-management.form')
</form>
@endsection
