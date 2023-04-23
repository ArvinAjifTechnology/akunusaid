@extends('layouts.app')

@section('title', 'Email')

@section('content')
<h1>{{ $data['subject'] }}</h1>
        <p>Name: {{ $data['name'] }}</p>
        <p>Email: {{ $data['email'] }}</p>
        <p>Message: {{ $data['message'] }}</p>
@endsection
