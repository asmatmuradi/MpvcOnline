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
  <form method='GET' action='/addProduct' class='form-horizontal'>
    <fieldset>
      <!-- Form Name -->

      <!-- Product Name input-->
      <div class='form-group'>
        <label class='col-md-4 control-label' for='name'>*Product Name</label>
        <div class='col-md-6'>
          <input id='name' name='name' type='text' class='form-control input-md' value='{{ $name or ''}}'>
          @if($errors->get('name'))
          <div class='alert alert-danger'>
            @include('modules.error-field', ['fieldName' => 'name'])
          </div>
          @endif
        </div>
      </div>
      <!-- Product price input-->
      <div class='form-group'>
        <label class='col-md-4 control-label' for='price'>*Product Price</label>
        <div class='col-md-6'>
          <input id='price' name='price' type='number' class='form-control input-md' value='{{ $price or ''}}'>
          @if($errors->get('price'))
          <div class='alert alert-danger'>
            @include('modules.error-field', ['fieldName' => 'price'])
          </div>
          @endif
        </div>
      </div>
      <!-- Product description input-->
      <div class='form-group'>
        <label class='col-md-4 control-label' for='description'>*Product Description</label>
        <div class='col-md-6'>
          <input id='description' name='description' type='text' class='form-control input-md' value='{{ $description or ''}}'>
          @if($errors->get('description'))
          <div class='alert alert-danger'>
            @include('modules.error-field', ['fieldName' => 'description'])
          </div>
          @endif
        </div>
      </div>
      <!-- Product quantity input-->
      <div class='form-group'>
        <label class='col-md-4 control-label' for='quantity'>*Product Quantity</label>
        <div class='col-md-6'>
          <input id='quantity' name='quantity' type='number' class='form-control input-md' value='{{ $quantity or ''}}'>
          @if($errors->get('quantity'))
          <div class='alert alert-danger'>
            @include('modules.error-field', ['fieldName' => 'quantity'])
          </div>
          @endif
        </div>
      </div>
      <!-- Product cost input-->
      <div class='form-group'>
        <label class='col-md-4 control-label' for='cost'>*Product Cost</label>
        <div class='col-md-6'>
          <input id='cost' name='cost' type='number' class='form-control input-md' value='{{ $cost or ''}}'>
          @if($errors->get('cost'))
          <div class='alert alert-danger'>
            @include('modules.error-field', ['fieldName' => 'cost'])
          </div>
          @endif
        </div>
      </div>
      <!-- Product vendor input-->
      <div class='form-group'>
        <label class='col-md-4 control-label' for='vendor'>*Product Vendor</label>
        <div class='col-md-6'>
          <input id='vendor' name='vendor' type='text' class='form-control input-md' value='{{ $vendor or ''}}'>
          @if($errors->get('vendor'))
          <div class='alert alert-danger'>
            @include('modules.error-field', ['fieldName' => 'vendor'])
          </div>
          @endif
        </div>
      </div>
      <!-- Product image input-->
      <div class='form-group'>
        <label class='col-md-4 control-label' for='image'>*Product Image</label>
        <div class='col-md-6'>
          <input id='image' name='image' type='text' class='form-control input-md' value='{{ $image or ''}}'>
          @if($errors->get('image'))
          <div class='alert alert-danger'>
            @include('modules.error-field', ['fieldName' => 'image'])
          </div>
          @endif
        </div>
      </div>
      <!-- Submit Button -->
      <div class="form-group">
        <div class="col-md-8 control-label">
          <button id="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>


  <br />

@stop
