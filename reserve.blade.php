@extends('Customer.layouts.test')


@section('putContent')
<div id="slide" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#slide" data-slide-to="0" class="active"></li>
              <li data-target="#slide" data-slide-to="1"></li>
              <li data-target="#slide" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../bootstraps/images/21.jpg" class="d-block w-100" alt="" style="height: 400px;">
                  </div>
                  <div class="carousel-item">
                    <img src="../bootstraps/images/luxorius.png" class="d-block w-100" alt="" style="height: 400px;">
                   
                  </div>
                  <div class="carousel-item">
                    <img src="../bootstraps/images/main_slider11.png" class="d-block w-100" alt="">
                
                  </div>
            </div>
            <a class="carousel-control-prev" href="#slide" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#slide" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="container con">Booking</div>

<div class="container">
          {!!
                Form::open([

                  'url' => route('customer.store'),
                  'method' => 'POST',
                  'role' => 'form'
                ])
                !!}
                <div class="form-group">
                    <label for="name">UserName</label>
                    <input type='text' name="username" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type='email' name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <select name="rooms" id="rooms">
                        <option value="single">Single Room</option>
                        <option value="double">Double Room</option>
                        <option value="triple">Triple Room</option>
                        <option value="quad">Quad Room</option>
                        <option value="suite">Suite</option>
                        <option value="landview">LandView Room</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Number of Rooms</label>
                    <input type='integer' name="num_of_room" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="name">Number of Guests</label>
                    <input type='integer' name="num_of_guest" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <input type="submit" name="book" value="Book" class=" btn btn-primary">
                </div>
        {!! Form::close()!!}
</div>
@endsection
