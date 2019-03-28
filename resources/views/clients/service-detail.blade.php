@extends('layouts.app')

@section('content')
<div id="checkout-banner">
    <img src="{{asset('/image/banner-genenate.png')}}" class="w-100" />
</div>
@if(isset($service))
<div id="service-content">
    <div class="container bg-white mt-3 p-lg-2">
        <p class="fix-left title text-primarys text-uppercase">{{$service->first()['name']}} <br>GIÁ:{{$service->first()['price']}}K</p>
        <div class="row m-0">
            <div class="col-md-6 p-0 col-sm-6 col-xs-12">
                <h5 class="font-weight-bold my-2 text-uppercase">
                    USING {{$service->first()['name']}} SERVICE COMBO
                    {{$service->first()['price']}}K AT NPK PETCARE
                </h5>
                <p class="">
                    {{$service->first()['description']}}
                </p>
            </div>
            <div class="col-md-6 p-0 col-sm-6 col-xs-12 text-center">
                <img src="{{asset($service->first()['image'])}}" class="img-responsive m-auto w-75" height="300">
            </div>
        </div>
    </div>
    <div class="container bg-white" style="border-top: 1px solid #eeeeee;">
        <p class="align-middle pt-lg-2 font-weight-bold my-2 text-uppercase">1. Procedure</p>
        <p class="text">Stylist at PetCare will give pets a handsome, neatly styled hairstyle but still keep the age-appropriate lovely features according to the exclusive 5-step process from Petcare</p>

        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <p class="title-process fix font-weight-bold my-2 text-uppercase" style="height: 50px;max-height: 50px;"> Step 1: Shampoo to soften hair, clean dirt</p>
                <p class="text text-img">
                    <img src="{{asset('image/service/b1.jpg')}}" class="img-responsive w-100">
                </p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <p class="title-process font-weight-bold my-2 text-uppercase" style="height: 50px;max-height: 50px;"> Step 2: Advise neat hairstyle, suitable for age but equally lively</p>
                <p class="text text-img">
                    <img src="{{asset('image/service/b1.jpg')}}" class="img-responsive w-100">
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <p class="title-process fix font-weight-bold my-2 text-uppercase" style="height: 50px;max-height: 50px;"> Step 3 : Pet Hair Triming</p>
                <p class="text text-img">
                    <img src="{{asset('image/service/b1.jpg')}}" class="img-responsive w-100">

                </p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <p class="title-process font-weight-bold my-2 text-uppercase" style="height: 50px;max-height: 50px;">Step 4 : Rinse thoroughly and clean your pet's hair, making them feel uncomfortable throughout the day</p>
                <p class="text text-img">
                    <img src="{{asset('image/service/b1.jpg')}}" class="img-responsive w-100">

                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <p class="title-process font-weight-bold my-2 text-uppercase" style="height: 50px;max-height: 50px;"> Step 5 : Swipe beautiful wax</p>
                <p class="text text-img">
                    <img src="{{asset('image/service/b1.jpg')}}" class="img-responsive w-100">

                </p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <p class="title-process font-weight-bold my-2 text-uppercase" style="height: 50px;max-height: 50px;"> Step 6 : Drying</p>
                <p class="text text-img" style="margin-top:25px!important;">
                    <img src="{{asset('image/service/b1.jpg')}}" class="img-responsive w-100">

                </p>
            </div>
        </div>
    </div>
    <div class="container bg-white py-2" style="border-top: 1px solid #eeeeee">
    <div class="section" id="carousel">
        <!-- Carousel Card -->
        <div class="card card-raised card-carousel">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('image/afterbefore/beforeafter1.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('image/afterbefore/beforeafter2.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('image/afterbefore/beforeafter3.jpg')}}" alt="Third slide">
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
    </div>
</div>
<section class="p_120 banner-bottom">
    <div class="row py-lg-5 pl-lg-6">
        <div class="col-md-5 text-center text-white">
            <span style="font-size: 2em">Each service always starts from</span>
            <h2>1 to 7 steps of pet care check</h2>
            <span  style="font-size: 2em">exclusive at NPK PetCare</span>
            <form class="form-inline banner-form my-1" action="{{url('/booking')}}" method="get">
                <button class="btn btn-primary banner-button" style="font-size: 1em" type="submit">Book Now</button>
            </form>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5"></div>
    </div>
</section>
@endif
@endsection