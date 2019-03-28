@extends('layouts.app')

@section('content')
<div id="checkout-banner">
    <img src="{{asset('/image/banner-genenate.png')}}" class="w-100" />
</div>
<!-- Page Content-->
  @if(Session::has('cart'))
  <div class="w-75 m-auto padding-bottom-3x py-4 mt-5">
    <div class="row">
    <!-- Checkout Adress-->
    <div class="col-xl-9 col-lg-8" id="checkout">
      <div class="checkout-steps"><a href="#" id="checkout-review-step">3. Review</a><a href="#" id="checkout-address-step"><span class="angle"></span>2. Address</a><a class="active" href="#" id="checkout-service-step"><span class="angle"></span>1. Services</a></div>
      <form action="{{ url('/nextstep') }}" id="formsubmit" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div id="checkout-content">
          <div class="service bg-white text-center text-uppercase p-lg-2" style="border: 1px solid rgba(0, 0, 0, 0.1)">
            <p style="font-weight:700">Please Pre-select Our Service for the Information Selection System to serve you</p>
            <p style="font-size: 13px"> (CHOOSE 1 OR MANY SERVICES - BOOKING WITHOUT USING NO PROBLEMS) </p>
            <section class="content">
              <ul class="list list-unstyled">
                 @foreach($services as $service)
                 @php $id = $service->id @endphp
                 {{$id}}
                <li class="list__item d-inline-block">
                  <label class="label--checkbox">
                      <input type="checkbox" name="{{$service->id}}" class="checkbox" value="{{$service->id}}"/>
                      {{$service['name']}}
                  </label>
                </li>
                @endforeach
                <li class="list__item d-inline-block">
                  <label class="label--checkbox">
                      <input type="checkbox" name="service1" class="checkbox" value="1"  {{ old('service1') ? 'checked' : null }}/>
                      Service 1
                  </label>
                </li>
              </ul>
              <div class="text-danger">{{ $errors->first('service') }}</div>
            </section>
          </div>
          <div class="service bg-white text-uppercase p-lg-2" style="border: 1px solid rgba(0, 0, 0, 0.1)">
            <p style="font-weight:700; padding: 0 15px; font-size: 19px">Selected Date/Time <span class="text-danger float-right text-capitalize font-weight-light">{{ $errors->first('datetime') }}</span></p>
            <div class="form-group d-inline-block col-lg-6">
              <label for="text-left" class="control-label w-100">Date Picking</label>
              <div class="input-group date form_date w-100 {{ $errors->has('date') ? 'has-error' : '' }}" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                  <input class="form-control" id="date" name="date" size="16" type="text" value="{{ Session::has('cart') ? Session::get('cart')->date : old('date') }}" readonly require>
                  <span class="btn-custom input-group-addon"><i class="fas fa-times"></i></span></span>
                  <span class="btn-custom input-group-addon"><i class="glyphicon glyphicon-calendar far fa-calendar-alt"></i></span>
              </div>
              <input type="hidden" id="dtp_input2" value="" /><br/>
            </div>
            <div class="form-group d-inline-block col-lg-5">
              <label for="text-left" class="w-100 control-label">Time Picking</label>
              <div class="input-group date form_time w-100" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                  <input class="form-control" id="time" name="time" size="16" type="text" value="{{old('time')}}" readonly require>
                  <span class="btn-custom input-group-addon"><i class="fas fa-times"></i></span>
                  <span class="btn-custom input-group-addon"><span class="glyphicon glyphicon-time far fa-clock"></span></span>
              </div>
              <input type="hidden" id="dtp_input3" value="" /><br/>
            </div>

            <p style="font-weight:700; padding: 0 15px; font-size: 19px">Pet Information</p>
            <div class="row" style="padding: 0 15px">
              <div class="col-md-6">
                <label for="custom-select" class="control-label w-100">Kind of Pet</label>
                <select class="browser-default custom-select w-100" name="kindofpet">
                  <option selected>Open this select menu</option>
                  <option {{ old('kindofpet') == 'dog' ? 'selected' : '' }} value="dog">Dog</option>
                  <option {{ old('kindofpet') == 'cat' ? 'selected' : '' }} value="cat">Cat</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="custom-select" class="control-label w-100">Age</label>
                <select class="browser-default custom-select w-100" name="age">
                  <option selected>Open this select menu</option>
                  <option {{ old('age') == 1 ? 'selected' : '' }} value="1">One</option>
                  <option {{ old('age') == 2 ? 'selected' : '' }} value="2">Two</option>
                  <option {{ old('age') == 3 ? 'selected' : '' }} value="3">Three</option>
                  <option {{ old('age') == 5 ? 'selected' : '' }} value="5">Over Five</option>
                </select>
              </div>
            </div>
            <div class="row mx-0 my-1">
              <div class="md-form col-md-6">
                <input type="text" id="petinfoname" name="petname" class="materialtinfopet w-100" class="form-control" value="{{ Session::has('cart') ? Session::get('cart')->pet[0]['name'] : old('petname') }}">
                <label for="petinfoname" class="">Name</label>             
              </div>
              <div class="md-form col-md-6">
                  <input type="text" id="petinfohoobies" name="pethobbies" class="materialtinfopet w-100" class="form-control" value="{{ Session::has('cart') ? Session::get('cart')->pet[0]['hobies'] : old('pethobbies') }}">
                  <label for="petinfohoobies" class="">Hoobies</label>
              </div>
            </div>
          </div>
        </div>
        <div class="checkout-footer mt-2 d-inline-block">
            <button type="submit" class="btn-custom btn-next float-right">Next <i class="fas fa-forward ml-1"></i></button>
        </div>
      </form>
    </div>
  </div>
  @else
  <div class="w-75 m-auto padding-bottom-3x py-4 mt-5">
    <div class="row">
    <!-- Checkout Adress-->
    <div class="col-xl-9 col-lg-8" id="checkout">
      <div class="checkout-steps"><a href="#" id="checkout-review-step">3. Review</a><a href="#" id="checkout-address-step"><span class="angle"></span>2. Address</a><a class="active" href="#" id="checkout-service-step"><span class="angle"></span>1. Services</a></div>
      <form action="{{ url('/nextstep') }}" id="formsubmit" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div id="checkout-content">
          <div class="service bg-white text-center text-uppercase p-lg-2" style="border: 1px solid rgba(0, 0, 0, 0.1)">
            <p style="font-weight:700">Please Pre-select Our Service for the Information Selection System to serve you</p>
            <p style="font-size: 13px"> (CHOOSE 1 OR MANY SERVICES - BOOKING WITHOUT USING NO PROBLEMS) </p>
            <section class="content">
              <ul class="list list-unstyled">
                @foreach($services as $service)
                <li class="list__item d-inline-block">
                  <label class="label--checkbox">
                      <input type="checkbox" name="{{$service->id}}" class="checkbox" value="{{$service->id}}" {{ old( $service->id) ? 'checked' : null }}/>
                      {{$service['name']}}
                  </label>
                </li>
                @endforeach
                
              </ul>
              <div class="text-danger">{{ $errors->first('service') }}</div>
            </section>
          </div>
          <div class="service bg-white text-uppercase p-lg-2" style="border: 1px solid rgba(0, 0, 0, 0.1)">
            <p style="font-weight:700; padding: 0 15px; font-size: 19px">Selected Date/Time <span class="text-danger float-right text-capitalize font-weight-light">{{ $errors->first('datetime') }}</span></p>
            <div class="form-group d-inline-block col-lg-6">
              <label for="text-left" class="control-label w-100">Date Picking</label>
              <div class="input-group date form_date w-100 {{ $errors->has('date') ? 'has-error' : '' }}" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                  <input class="form-control" id="date" name="date" size="16" type="text" value="{{ old('date') }}" readonly require>
                  <span class="btn-custom input-group-addon"><i class="fas fa-times"></i></span></span>
                  <span class="btn-custom input-group-addon"><i class="glyphicon glyphicon-calendar far fa-calendar-alt"></i></span>
              </div>
              <input type="hidden" id="dtp_input2" value="" /><br/>
            </div>
            <div class="form-group d-inline-block col-lg-5">
              <label for="text-left" class="w-100 control-label">Time Picking</label>
              <div class="input-group date form_time w-100" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                  <input class="form-control" id="time" name="time" size="16" type="text" value="{{ old('time') }}" readonly require>
                  <span class="btn-custom input-group-addon"><i class="fas fa-times"></i></span>
                  <span class="btn-custom input-group-addon"><span class="glyphicon glyphicon-time far fa-clock"></span></span>
              </div>
              <input type="hidden" id="dtp_input3" value="" /><br/>
            </div>

            <p style="font-weight:700; padding: 0 15px; font-size: 19px">Pet Information</p>
            <div class="row" style="padding: 0 15px">
              <div class="col-md-6">
                <label for="custom-select" class="control-label w-100">Kind of Pet</label>
                <select class="browser-default custom-select w-100" name="kindofpet">
                  <option selected>Open this select menu</option>
                  <option {{ old('kindofpet') == 'dog' ? 'selected' : '' }} value="dog">Dog</option>
                  <option {{ old('kindofpet') == 'cat' ? 'selected' : '' }} value="cat">Cat</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="custom-select" class="control-label w-100">Age</label>
                <select class="browser-default custom-select w-100" name="age">
                  <option selected>Open this select menu</option>
                  <option {{ old('age') == 1 ? 'selected' : '' }} value="1">One</option>
                  <option {{ old('age') == 2 ? 'selected' : '' }} value="2">Two</option>
                  <option {{ old('age') == 3 ? 'selected' : '' }} value="3">Three</option>
                  <option {{ old('age') == 5 ? 'selected' : '' }} value="5">Over Five</option>
                </select>
              </div>
            </div>
            <div class="row mx-0 my-1">
              <div class="md-form col-md-6">
                <input type="text" id="petinfoname" name="petname" class="materialtinfopet w-100" class="form-control" value="{{ old('petname') }}">
                <label for="petinfoname" class="">Name</label>             
              </div>
              <div class="md-form col-md-6">
                  <input type="text" id="petinfohoobies" name="pethobbies" class="materialtinfopet w-100" class="form-control" value="{{ old('pethobbies') }}">
                  <label for="petinfohoobies" class="">Hoobies</label>
              </div>
            </div>
          </div>
        </div>
        <div class="checkout-footer mt-2 d-inline-block">
            <button type="submit" class="btn-custom btn-next float-right">Next <i class="fas fa-forward ml-1"></i></button>
        </div>
      </form>
    </div>
  </div>
  @endif
@endsection