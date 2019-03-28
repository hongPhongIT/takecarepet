@extends('layouts.app')

@section('content')
<!--================ Slider Area =================-->
<!--         carousel  -->
<div class="section" id="carousel">
<!-- Carousel Card -->
<div class="card card-raised card-carousel">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('image/slide1.jpg')}}" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <h3>
            We’re all familiar with the sight of obese pets, but with new research confirming overweight dogs may have a shortened lifespan, we need to do more to end this epidemic.
            </h3>
        </div>
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('image/slide2.jpg')}}" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
            <h3>
            Pets make life better in many ways. At work, they boost morale, build a sense of community & get us up for regular walking breaks. If you wonder how to start a pet-friendly program in your home.
            </h3>
        </div>
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('image/slide3.jpg')}}" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
            <h3>
            We know every dog as a superpower, and these stories inspire us! WATCH the video at the link to hear what people like you love about their real-life 
            </h3>
        </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="buttton" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="buttton" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</div>
<!-- End Carousel Card -->
</div>
<!--================End Slider Area =================-->

<!--================Our Services Area =================-->
<section class="service-area">
    <div class="pl-lg-6 pt-lg-5 pr-lg-5 p-md-4">
        <div class="main-title px-lg-2">
            <h2 class="text-primary font-weight-bold">Our Top Rated Services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
        </div>
        <div class="row mx-0 service-inner">
        @if(isset($services))
            @foreach($services as $service)
            <div class="col-lg-3 col-md-6 col-sm-12 py-sm-1 pr-sm-0 px-md-2 px-lg-2">
                <div class="service-item text-center">
                    <div class="pp-img-wrapper mt-2">
                    <a href="{{ url('service/' . $service['name']) }}">
                        <img class="img" src="{{asset($service['image'])}}" alt="">
                    </a>
                    </div>
                    <div class=" pp-content p-3">
                        <a href="{{ url('service/' . $service['name']) }}"><h4 class="text-center font-weight-bold home-service-name">{{$service['name']}}</h4></a>
                        <div class="tags text-justify home-service-description">
                        {{$service['description']}}
                        </div>
                        <div class="pp-footer text-center mt-2">
                            <a class="bg-primary main-btn text-white" href="{{ url('service/' . $service['name']) }}">View Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="col-lg-3 col-md-6 col-sm-12 py-sm-1 pr-sm-0 px-md-2 px-lg-2">
                <div class="service-item text-center">
                    <div class="pp-img-wrapper mt-2">
                        <img class="img" src="{{asset('image/pp-2.jpg')}}" alt="">
                    </div>
                    <div class=" pp-content p-3">
                        <a href="#"><h4 class="text-center font-weight-bold">04 Bed Duplex</h4></a>
                        <div class="tags text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam. 
                        </div>
                        <div class="pp-footer text-center mt-2">
                            <a class="bg-primary main-btn text-white" href="#">For Sale</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 py-sm-1 pr-sm-0 px-md-2 px-lg-2">
                <div class="service-item text-center">
                    <div class="pp-img-wrapper mt-2">
                        <img class="img" src="{{asset('image/pp-2.jpg')}}" alt="">
                    </div>
                    <div class=" pp-content p-3">
                        <a href="#"><h4 class="text-center font-weight-bold">04 Bed Duplex</h4></a>
                        <div class="tags text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam. 
                        </div>
                        <div class="pp-footer text-center mt-2">
                            <a class="bg-primary main-btn text-white" href="#">For Sale</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 py-sm-1 pr-sm-0 px-md-2 px-lg-2">
                <div class="service-item text-center">
                    <div class="pp-img-wrapper mt-2">
                        <img class="img" src="{{asset('image/pp-2.jpg')}}" alt="">
                    </div>
                    <div class=" pp-content p-3">
                        <a href="#"><h4 class="text-center font-weight-bold">04 Bed Duplex</h4></a>
                        <div class="tags text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam. 
                        </div>
                        <div class="pp-footer text-center mt-2">
                            <a class="bg-primary main-btn text-white" href="#">For Sale</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 py-sm-1 pr-sm-0 px-md-2 px-lg-2">
                <div class="service-item text-center">
                    <div class="pp-img-wrapper mt-2">
                        <img class="img" src="{{asset('image/pp-2.jpg')}}" alt="">
                    </div>
                    <div class=" pp-content p-3">
                        <a href="#"><h4 class="text-center font-weight-bold">04 Bed Duplex</h4></a>
                        <div class="tags text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam. 
                        </div>
                        <div class="pp-footer text-center mt-2">
                            <a class="bg-primary main-btn text-white" href="#">For Sale</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        </div>
    </div>
</section>
<!--================End Our Services Area =================-->

<!--================Our Team Area =================-->
<section class="p-120">
    <div class="pl-lg-6 pt-lg-5 pb-lg-5 pr-lg-5 p-md-4">
        <div class="row mx-0 team-inner">
            <div class="col-lg-4">
                <div class="">
                    <h2 class="text-primary font-weight-bold">Our Team</h2>
                    <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.</p>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="testi-slider owl-carousel">
                    <div class="item">
                        <div class="testi-item">
                            <img src="{{asset('image/team/nhinguyen.png')}}" alt="">
                            <p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its</p>
                            <h5 class="text-primary mb-2">Nhi Nguyen</h5>
                            <h6>UX/UI Developer</h6>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi-item">
                            <img src="{{asset('image/team/phongnguyen.png')}}" alt="">
                            <p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its</p>
                            <h5 class="text-primary mb-2">Phong Nguyen</h5>
                            <h6>Web Developer</h6>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi-item">
                            <img src="{{asset('image/team/khanhho.png')}}" alt="">
                            <p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its</p>
                            <h5 class="text-primary mb-2">Khanh Ho</h5>
                            <h6>Web Developer</h6>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi-item">
                            <img src="{{asset('image/team/daonguyen.png')}}" alt="">
                            <p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its</p>
                            <h5 class="text-primary mb-2">Dao Nguyen</h5>
                            <h6>Testing</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Our Team Area =================-->

<!--================End Our Mission & Vission Area =================-->
<section class="mission-vission-area pt-5">
    <div class="inner">
        <div class="row mx-0">
            <div class="col-lg-6 pl-lg-6 pt-lg-5 pb-lg-5 pr-lg-5 p-md-4 text-white" style="background: #bad432">
                <h2 class="font-weight-bold pb-1">Our Vission</h2>
                <p class="text-justify">Your vision statement should be an audacious dream of a future reality based on the work you do. It should be bursting-at-the-seams with possibility. 
                It’s where “begin with the end in mind” lives. It’s the heart and DNA construct of your organization. Your vision should be so big, it feels nearly impossible. 
                Your vision should require people to dream.</p>
            </div>
            <div class="col-lg-6">
                <img class="w-100" src="{{asset('image/vission1.png')}}">
            </div>
        </div>
        <div class="row mx-0">
            <div class="col-lg-6 order-lg-1 order-md-0 pl-lg-6 pt-lg-5 pb-lg-5 pr-lg-5 p-md-4 text-white" style="background: #feca38">
                <h2 class="font-weight-bold pb-1">Our Mision</h2>
                <p class="text-justify">A well-crafted mission statement answers WHAT you do, WHO benefits from this and HOW you do it. 
                Depending on the particular organizational structure, the mission statement of a company can be broken down into its different divisions. 
                All in all, the purpose is to help you stay focused on the activities of today that further your dreams of tomorrow mx-0.</p>
            </div>
            <div class="col-lg-6">
                <img class="w-100" src="{{asset('image/mission1.png')}}">
            </div>
        </div>
    </div>
</section>
<!--================End Our Mission visson Area =================-->

<section class="p-6 bg-primary">
    <div class="pb-1">
        <h2 class="font-weight-bold text-white">Why do you choose us?</h2>
        <p class="text-white"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
    </div>
    <div class="center slider">
        <div>
            <img src="{{asset('image/why/why1.jpg')}}">
        </div>
        <div>
            <img src="{{asset('image/why/why2.png')}}">
        </div>
        <div>
            <img src="{{asset('image/why/why3.jpg')}}">
        </div>
        <div>
            <img src="{{asset('image/why/why4.jpg')}}">
        </div>
        <div>
            <img src="{{asset('image/why/why1.jpg')}}">
        </div>
        <div>
            <img src="{{asset('image/why/why2.png')}}">
        </div>
    </div>
</section>
@endsection