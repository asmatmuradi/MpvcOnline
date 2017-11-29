@extends('layouts.master')

@push('head')
    <link href='/css/store.css' rel='stylesheet'>
@endpush

@section('title')
    Products
@endsection


@section('content')
<br />

@foreach($products as $product)
    <div class='producList'>
        <h2>{{ $product['name'] }}</h2>
        <p>Description: {{ $product['description'] }}</p>
        <p>Vendor:  {{ $product['vendor'] }}</p>
        <p>Price: ${{ $product['price'] }}</p>

          <img src='{{ $product['image'] }}' class='float-left img-thumbnail' alt='Cover image for {{ $product['name'] }}'>

    </div>
@endforeach
