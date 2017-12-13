
<!-- Product Name input-->
<div class='form-group'>
  <label class='col-md-4 control-label' for='name'>*Product Name</label>
  <div class='col-md-6'>
    <input id='name' name='name' type='text' class='form-control input-md' value='{{ $product->name or old('name', '')}}'>
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
    <input id='price' name='price' type='float' class='form-control input-md' value='{{ $product->price or old('price', '')}}'>
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
    <input id='description' name='description' type='text' class='form-control input-md' value='{{ $product->description or ''}}'>
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
    <input id='quantity' name='quantity' type='number' class='form-control input-md' value='{{ $product->quantity_Available or ''}}'>
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
    <input id='cost' name='cost' type='float' class='form-control input-md' min='0' value='{{ $product->cost or ''}}'>
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
    <input id='vendor' name='vendor' type='text' class='form-control input-md' value='{{ $product->vendor or ''}}'>
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
    <input id='image' name='image' type='text' class='form-control input-md' value='{{ $product->image or ''}}'>
    @if($errors->get('image'))
    <div class='alert alert-danger'>
      @include('modules.error-field', ['fieldName' => 'image'])
    </div>
    @endif
  </div>
</div>
<!--.chosen-select-->
<div class='form-group'>
  <label class='col-md-4 control-label' for='tags'>Tags</label>
  <div class='col-md-6'>
    <select id='tags' multiple name='tags[]' class='form-control  input-md chosen-select' value='{{ $product->tags or ''}}'>

      @foreach ($tags as $id => $name)
          <option
              value='{{ $id }}'
              name='tags[]'
              id='{{ $id }}'
              {{ (isset($tagsForThisProduct) and in_array($name, $tagsForThisProduct)) ? 'SELECTED' : '' }}
          >
          {{ $name }} <br>
      @endforeach

    </select>
    @if($errors->get('tags'))
    <div class='alert alert-danger'>
      @include('modules.error-field', ['fieldName' => 'tags'])
    </div>
    @endif
  </div>
</div>

<!-- Submit Button -->
<div class="form-group">
  <div class="col-md-7 control-label">
    <button id="submit" name="submit" class="btn btn-primary">Save</button>
  </div>
</div>
