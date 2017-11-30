@extends('layouts.master')

@push('head')
    <link href='/css/store.css' rel='stylesheet'>
@endpush

@section('title')
    Products
@endsection


@section('content')
<br />
<!-- Submit Button -->
<div class="form-group">
  <div class="col-md-6">
    <li><a href='/addproduct/'>Add New Product</a>
  </div>
</div>

@foreach($products as $product)
<div class='container'>
      <div class="row">
          <div class="col-md-4">
        <h2>{{ $product['name'] }}</h2>
        <p>Description: {{ $product['description'] }}</p>
        <p>Vendor:  {{ $product['vendor'] }}</p>
        <p>Price: ${{ $product['price'] }}</p>
      </div>
      <div class="col-md-6">
    <img src='{{ $product['image'] }}' class='img-rounded' alt='Cover image for {{ $product['name'] }}'>
  </div>
    </div>
    <br />
@endforeach

@stop
