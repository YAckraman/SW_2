@extends('Customer.layouts.test') 

<!-- 

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in {{auth()->user()->username}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 -->


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
          
       <div class="col-12 room">Room</div>

       <div style="margin: 60px;"></div>

@if(session()->has('flash_message'))

<div class="alert alert-success">{{ session()->get('flash_message') }}</div>
@endif
 
       <div style="margin: 60px;"></div>

       
       <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>Delicious Food</span>
                            <h3>We Serve Fresh and Delicious Food</h3>
                        </div>
                        <p>Suscipit libero pretium nullam potenti. Interdum, blandit phasellus consectetuer dolor ornare
                            dapibus enim ut tincidunt rhoncus tellus sollicitudin pede nam maecenas, dolor sem. Neque
                            sollicitudin enim. Dapibus lorem feugiat facilisi faucibus et. Rhoncus.</p>
                        
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb d-flex">
                        <div class="img_1 mr-2">
                            <img src="../public/panel/imgs/about/1.png" alt="">
                        </div>
                        <div class="img_2" style="padding: 30px;">
                            <img src="../public/panel/imgs/about/2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin: 60px;"></div>

        <div class="col-4 test">
        <div class="card " style="width: 18rem;">
            <img class="card-img-top" src="../bootstraps/images/luxury.png" alt="test">
            <div class="card-body">
                <h5 class="card-title">Single Room</h5>
                <p class="card-text">this room for one person with bathroom and televsion </p>
                <a href="{{ url('customer/single') }}" class="btn btn-primary">See More</a>
            </div>
            </div>
            </div>
            <div class="col-4 test" >
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../public/panel/imgss/rooms/3.jpg" alt="test">
                    <div class="card-body">
                        <h5 class="card-title">Double Room</h5>
                        <p class="card-text">this room for two person like Newlywed with bathroom and televsion </p>
                        <a href="{{ url('customer/double') }}" class="btn btn-primary">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-4 test">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../public/panel/imgss/rooms/4.jpg" alt="test">
                    <div class="card-body">
                    <h5 class="card-title">Triple Room</h5>
                    <p class="card-text">this room for family or three person with bathroom and televsion </p>
                    <a href="{{ url('customer/triple') }}" class="btn btn-primary">See More</a>
                </div>
            </div>
            </div>

            <div class="clean"></div>
            <div class="test2"></div>

            <div class="col-4 test">
        <div class="card " style="width: 18rem;">
            <img class="card-img-top" src="../public/panel/imgss/rooms/2.jpg" alt="test">
            <div class="card-body">
                <h5 class="card-title">Quad Room</h5>
                <p class="card-text">this room for family or four person with bathroom and televsion and more facilities for family </p>
                <a href="{{ url('customer/quad') }}" class="btn btn-primary">See More</a>
            </div>
            </div>
            </div>
            <div class="col-4 test" >
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../public/panel/imgs/rooms/2.png" alt="test">
                    <div class="card-body">
                        <h5 class="card-title">Suite</h5>
                        <p class="card-text">Suite with salon and connect with bedroom or more with beauty view</p>
                        <a href="{{ url('customer/suite') }}" class="btn btn-primary">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-4 test">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../public/panel/imgs/rooms/1.png" alt="test">
                    <div class="card-body">
                    <h5 class="card-title">Room with landview</h5>
                    <p class="card-text">this room for one person or two with bathroom,televsion and with very beautifull landview </p>
                    <a href="{{ url('customer/landview') }}" class="btn btn-primary">See More</a>
                </div>
            </div>
            </div>

            
            <div class="clean"></div>
            <div class="test2"></div>

            <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>About Us</span>
                            <h3>A GoldenQ Hotel <br>
                                with Nature</h3>
                        </div>
                        <p>Suscipit libero pretium nullam potenti. Interdum, blandit phasellus consectetuer dolor ornare
                            dapibus enim ut tincidunt rhoncus tellus sollicitudin pede nam maecenas, dolor sem. Neque
                            sollicitudin enim. Dapibus lorem feugiat facilisi faucibus et. Rhoncus.</p>
                        
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb d-flex">
                        <div class="img_1 mr-2">
                            <img src="../public/panel/imgs/about/about_1.png" alt="">
                        </div>
                        <div class="img_2" style="padding: 30px;">
                            <img src="../public/panel/imgs/about/about_2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin: 60px;"></div>
    
   

@endsection




