@extends('layouts.master')

@push('head')
    <link href='/css/store.css' rel='stylesheet'>
@endpush

@section('title')
    Contact Us
@endsection

@section('content')
@if(session('alert'))
    <div class='alert alert-success'>
        {{ session('alert') }}
    </div>
@endif
<div class='container'>
    <div class='row'>
          <div class="col-md-8 text-left">
              <h2>Contact Us</h2>
              <hr>
              <form action="/contact/mail" method="POST">
                  {{ csrf_field() }}
                  <div class="form-group">
                      <label for="name">Name:</label>
                      <input id="name" name="name" class="form-control" value='{{old('name','')}}'>
                      @if($errors->get('name'))
                      <div class='alert alert-danger'>
                        @include('modules.error-field', ['fieldName' => 'name'])
                      </div>
                      @endif
                  </div>
                  <div class="form-group">
                      <label for="email">Email:</label>
                      <input id="email" name="email" class="form-control" value='{{old('email','')}}'>
                      @if($errors->get('email'))
                      <div class='alert alert-danger'>
                        @include('modules.error-field', ['fieldName' => 'email'])
                      </div>
                      @endif
                  </div>

                  <div class="form-group">
                      <label for="subject">Subject:</label>
                      <input id="subject" name="subject" class="form-control" value='{{old('subject','')}}'>
                      @if($errors->get('subject'))
                      <div class='alert alert-danger'>
                        @include('modules.error-field', ['fieldName' => 'subject'])
                      </div>
                      @endif
                  </div>

                  <div class="form-group">
                      <label for="message">Message:</label>
                      <textarea id="message" name="message" class="form-control" >Type your message here...</textarea>
                      @if($errors->get('message'))
                      <div class='alert alert-danger'>
                        @include('modules.error-field', ['fieldName' => 'message'])
                      </div>
                      @endif
                  </div>

                  <input type="submit" value="Send Message" class="btn btn-success">
              </form>
          </div>

        <div class='col-md-4'>
          <br /><br />
            <form>
               <fieldset>
            <legend><span class='glyphicon glyphicon-globe'></span> Our office</legend>
            <address>
                <strong>MPVC, Inc.</strong><br>
                505 N. 4th Ave, Suite B<br>
                Ann Arbor, MI 48104<br>
                <abbr title='Phone'>
                    P:</abbr>
                (248) 486-2246
            </address>
            <address>
                <strong>Asmat Muradi</strong><br>
                <a href='mailto:#'>asmat.muradi@live.com</a>
            </address>
          </fieldset>
            </form>
        </div>
      </div>
</div>
@stop
