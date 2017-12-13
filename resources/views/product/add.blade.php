@extends('layouts.master')

@push('head')
    <link href='/css/store.css' rel='stylesheet'>
@endpush

@section('title')
    Add New Product
@endsection


@section('content')
<br />

<div class='container'>
  <div class='col-md-4 control-label'>
    <h2>
      Add New Product
    </h2>
  </div>
  <form method='POST' action='/addproduct' class='form-horizontal'>
    {{ csrf_field() }}

    <fieldset>
      @include('product.productform');
    </fieldset>
  </form>
</div>

  <br />

@stop
