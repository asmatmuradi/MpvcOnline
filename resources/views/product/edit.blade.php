@extends('layouts.master')

@push('head')
    <link href='/css/store.css' rel='stylesheet'>
@endpush

@section('title')
    Edit Product
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
  <div class='col-md-4 control-label'>
    <h2>
      Edit Product
    </h2>
  </div>
  <form method='POST' action='/product/{{$product->id}}' class='form-horizontal'>
    {{ method_field('put') }}
    {{ csrf_field() }}

    <fieldset>
      @include('product.productform');
</fieldset>
</form>
</div>

  <br />

@stop
