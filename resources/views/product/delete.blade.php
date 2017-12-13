@extends('layouts.master')

@push('head')
    <link href='/css/store.css' rel='stylesheet'>
@endpush

@section('title')
    Delete Product
@endsection


@section('content')
<br />
@if(session('alert'))
    <div class='alert alert-danger col-md'>
        {{ session('alert') }}
    </div>
@endif
<br />

<div class='container'>
  <div class='container'>

            <div class="col-md-4">
              <h2>{{ $product['name'] }}</h2>
              <p>Description: {{ $product['description'] }}</p>
              <p>Vendor:  {{ $product['vendor'] }}</p>
              <p>Price: ${{ $product['price'] }}</p>

            </div>
            <div class="col-md-4">
                <img src='{{ $product['image'] }}' class='img-rounded'>
            </div>

        <br />
    </div>
  <dir class="col-md-6">
    <form method='POST' action='/product/{{$product->id}}'>
      {{ method_field('delete') }}
      {{ csrf_field() }}

      <input type='submit' value='Yes, delete it!' class='btn btn-danger btn-small'>
    </form>
    <br />
    <p class='cancel'>
        <a href='{{ $previousUrl }}'>No, I changed my mind.</a>
    </p>
</dir>
</div>

  <br />

@stop
