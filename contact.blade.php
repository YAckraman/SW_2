@extends('Customer.layouts.test')


@section('putContent')
<div class="boy">Contact</div>
    
  {!!
                Form::open([

                  'url' => route('customer.store'),
                  'method' => 'POST',
                  'role' => 'form'
                ])
                !!}
        <div class="form-group">
            <label for="name">Name</label>
            <input type='text' name="username" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type='email' name="email" class="form-control" id="email">
        </div>
        <div class="form-group">
        <textarea class="form-control" name="message" placeholder="Your message..." rows="4" ></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="contactss" value="Contact" class=" btn btn-primary">
        </div>
{!! Form::close() !!}

@endsection
