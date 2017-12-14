@extends('layouts.master')

@push('head')
    <link href='/css/store.css' rel='stylesheet'>
@endpush

@section('title')
    Products
@endsection

@section('content')
<br />
@if(isset($alert))
    <div class='alert alert-success col-md'>
        {{ $alert }}
    </div>
@endif
<br />
<!-- add Button -->
<div class="text-uppercase text-center">
  <h3>
    <a href='/addproduct/' >Add New Product</a>
  </h3>
</div>


<div class='container'>
    @foreach($products as $product)
      <div class="row align-items-center">
          <div class="text-left col-md-4">
            <h2>{{ $product['name'] }}</h2>
            <p>Description: {{ $product['description'] }}</p>
            <p>Vendor:  {{ $product['vendor'] }}</p>
            <p>Price: ${{ $product['price'] }}</p>
            <a href='/product/{{ $product['id'] }}/edit'>Edit</a> |
            <a href='/product/{{ $product['id'] }}/delete'>Delete</a>
          </div>
          <div class="thumbnail col-md-4">
              <img src='{{ $product['image'] }}' class='img-rounded' alt='Product Image'>
          </div>
      </div>
      <br />
    @endforeach
  </div>

@stop
