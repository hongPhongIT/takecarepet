@extends('layouts.app')

@section('content')
        <!--================ Banners =================-->
        <section class="banner-area ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-4 banner-text">
                        <p>Professional Pet Grooming</p>
                        <form action="{{url('/booking')}}" class="form-inline my-2 my-lg-0" method="get">
                            <button class="btn btn-primary banner-button" type="submit">Book Now</button>
                        </form>
                    </div>
                    <div class="col-md-6 col-sm-8">
                        <img class="img-responsive" width="500px" height="500px" alt="banner image" wi src="{{asset('image/banner.png')}}" alt=""/>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Banners =================-->
        <!--================Our Services Area =================-->
        <div id="about" class="about-area area-padding">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="section-headline text-center">
                    <h3>About Our Services</h3>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- single-well start-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="well-left">
                    <div class="single-well">
                      <a href="#">
                      <img class="img-responsive" width="95%" height="95%" src="{{asset('image/bn1.png')}}" alt="">
                        </a>
                    </div>
                  </div>
                </div>
                <!-- single-well end-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="well-middle">
                    <div class="single-well single-well-pading">
                      <a href="#">
                        <h3 class="sec-head">We Keep Pet Health and Nutrition Top of Mind</h3>
                        <hr class="hr">
                      </a>
                      <p class="param-about-service">
                        At NPK Petcare, our nutrition philosophy is central to our strategic purpose to make A Better World for Pets™. It reflects our respect for pets and the importance of the foods we make. NPK Petcare has always taken pet nutrition seriously. In 2019, we codified our guiding principles for pet food and nutrition. This philosophy builds on our historical approach and demonstrates our commitment to continuing to lead in the world of pet nutrition and care in the future.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- End col-->
              </div>
          </div>
        <!--================ End Our Services Area =================-->
        <!--================ Option Service Area =================-->
        <section class="p_120 service">
            <div class="service-area-padding">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-0">
                        <hr style="border-bottom: 2px solid #000000; width: 100%;">
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12" style="text-align: center">
                        <h3>Service options for you</h3>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-0">
                        <hr style="border-bottom: 2px solid #000000; width: 100%;">
                    </div>
                </div>
            </div>
            <div class="service-area-padding">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                @if(isset($services))
                    @foreach($services as $service)
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$service['id']}}" aria-expanded="true" aria-controls="collapse{{$service['id']}}">
                                    <i class="more-less fas fa-plus text-primary"></i>
                                    {{$service['name']}}
                                </a>
                            </h4>
                        </div>
                        <div id="collapse{{$service['id']}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$service['id']}}">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6 p-0 col-sm-6 col-xs-12">
                                        <h5 class="text-uppercase">
                                            USING {{$service['name']}} SERVICE COMBO
                                            {{$service['price']}}K AT NPK PETCARE
                                        </h5>
                                        <p class="">
                                            {{$service['description']}}
                                        </p>
                                        <p class="text view-more"><a href="{{ url('service/' . $service['name']) }}">VIEW MORE <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a></p>
                                    </div>
                                    <div class="col-md-6 p-0 col-sm-6 col-xs-12 text-center">
                                        <img src="{{asset($service['image'])}}" class="w-75 img-responsive m-auto" height="300px">
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="more-less fas fa-plus text-primary"></i>
                                    Collapsible Group Item #1
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6 p-0 col-sm-6 col-xs-12">
                                        <h5 class="">
                                            ĐẸP TRAI GIỐNG CHA VỚI DỊCH VỤ KID COMBO
                                            80K TẠI 30SHINE
                                        </h5>
                                        <p class="">
                                            Nếu cha đã có Shine Combo 100K, con trai cũng được phục vụ
                                            riêng với Kid Combo 5 bước chỉ 80K thiết kế cho bé duy nhất tại
                                            30Shine, để hai cha con cùng đẹp trai toả sáng. (chiều cao giới
                                            hạn 1,3m).
                                        </p>
                                        <p class="text view-more"><a href="/service/detail">Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a></p>
                                    </div>
                                    <div class="col-md-6 p-0 col-sm-6 col-xs-12 text-center">
                                        <img src="{{asset('image/service/kidnew.jpg')}}" class="img-responsive m-auto">
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="more-less fas fa-plus text-primary"></i>
                                    Collapsible Group Item #2
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="more-less fas fa-plus"></i>
                                    Collapsible Group Item #3
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                @endif
                </div><!-- panel-group -->
            </div>
        </section>
        <!--================End Option Service Area =================-->

        <section class="p-4 pl-6 pr-6 bg-primary">
            <div class="pb-1 service-title">
                <h3 class="font-weight-bold text-white">Why do you choose us?</h3>
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
@endsection