<!-- resources/views/artworks/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $artwork->art_name }}</h1>
    
    <p>{{ $artwork->description }}</p>
    <p>Price: ${{ $artwork->price }}</p>
</div>
@endsection
