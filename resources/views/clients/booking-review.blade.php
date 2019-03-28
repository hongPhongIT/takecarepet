@extends('layouts.app')

@section('content')
<div id="checkout-banner">
    <img src="{{asset('/image/banner-genenate.png')}}" class="w-100" />
</div>
<div class="backdrop"></div>
<!-- Page Content-->
@if(isset($services))
<div class="w-75 m-auto padding-bottom-3x py-4 mt-5">
    <div class="row">
        <!-- Checkout Adress-->
        <div class="col-xl-9 col-lg-8" id="checkout">
            <div class="checkout-steps">
                <a href="#" class="active">3. Review</a>
                <a href="#"><span class="angle"></span>2. Address</a>
                <a href="#"><span class="angle"></span>1. Services</a>
            </div>
            <div id="checkout-content" class="bg-white" tyle="border-top:1px solid rgba(0, 0, 0, 0.1);border-right:1px solid rgba(0, 0, 0, 0.1);border-left:1px solid rgba(0, 0, 0, 0.1)">
                <div class="table-responsive shopping-cart">
                    @if(Session::has('cart'))
                        <table class="table">
                            <thead>
                                <tr>
                                <th>Service Name</th>
                                <th class="text-center">Subtotal</th>
                                <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                <tr>
                                    <td>
                                        <div class="product-item">
                                            <a class="product-thumb" href="shop-single.html"><img src="{{asset($service['image'])}}" width="100%" height="auto" alt="Product"></a>
                                            <div class="product-info align-middle">
                                                <h4 class="product-title"><a href="#">{{$service['name']}}</a></h4><span><em>Size:</em> 10.5</span><span><em>Color:</em> Dark Blue</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center text-lg text-medium">{{ number_format($service['price'], 3, ',', '.')}} VNĐ</td>
                                    <td class="text-center align-middle"><a class="remove-from-cart" href="#" data-toggle="tooltip" data-placement="top" title="Remove item"><i class="fas fa-times"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 review-sidebar">
            <div class="bg-white p-1" tyle="border-top:1px solid rgba(0, 0, 0, 0.1);border-right:1px solid rgba(0, 0, 0, 0.1);border-left:1px solid rgba(0, 0, 0, 0.1)">
                <h5 class="text-white bg-primary text-center py-1" style="font-size:20px">Shipping</h5>
                <h5 class="text-dark pt-1" style="font-size:20px">Địa chỉ đến</h5>
                @foreach($cart->address as $item)
                <div class="address-title" style="padding:10px 0">
                    <span class="text-primary"><i class="fas fa-map-marker-alt"></i></span>
                    <span>{{$item['address']}}</span>
                    <span class="float-right"><a href="###" class="address-edit automation-address-edit">Chỉnh sửa</a></span>
                </div>
                <div class="phone" style="padding:10px 0">
                    <span class="text-primary"><i class="fas fa-phone"></i></span>
                    <span>{{$item['phone'][0]}}</span>
                    <span class="float-right"><a href="###" class="address-edit automation-address-edit">Chỉnh sửa</a></span>
                </div>
                <div class="email" style="padding:10px 0">
                    <span class="text-primary"><i class="far fa-envelope"></i></span>
                    <span>{{$item['email']}}</span>
                    <span class="float-right"><a href="###" class="address-edit automation-address-edit">Chỉnh sửa</a></span>
                </div>
                <div class="name" style="padding:10px 0">
                    <span class="text-primary"><i class="far fa-user-circle"></i></span>
                    <span>{{$item['firstname']}} {{$item['lastname']}}</span>
                    <span class="float-right"><a href="###" class="address-edit automation-address-edit">Chỉnh sửa</a></span>
                </div>
                @endforeach
                <h5 class="text-dark pt-1" style="font-size:20px">Thông tin dịch vụ</h5>
                <div class="row" style="padding:5px 0">
                    <div class="col-lg-6">{{$totalservice}} services</div>
                    <div class="col-lg-6 text-right text-primary font-weight-bold">{{ number_format($cart->total, 3, ',', ',')}} VNĐ</div>
                </div>
                <div class="row" style="padding:5px 0">
                    <div class="col-lg-6">Shipping fee</div>
                    <div class="col-lg-6 text-right text-primary">{{ number_format($cart->shipping, 3, ',', ',')}} VNĐ</div>
                </div>
                <div class="row" style="padding:5px 0">
                    <div class="col-lg-6">Tax fee</div>
                    <div class="col-lg-6 text-right text-primary">{{ number_format($cart->tax, 3, ',', ',')}} VNĐ</div>
                </div>
                <h5 class="text-dark pt-1" style="font-size:20px">Thanh Toan</h5>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item w-50">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Paypal</a>
                  </li>
                  <li class="nav-item w-50">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Delivery</a>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="flex-center position-ref full-height mt-1">
                      <div class="content-paypal">
                          <div class="links">
                              <div id="paypal-button"></div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="flex-center position-ref full-height mt-1">
                      <button type="button" class="button button-delivery">Proceed to Delivery</button>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
  paypal.Button.render({
    env: 'sandbox', // Or 'production'
    style: {
      size: 'medium',
      color: 'gold',
      shape: 'pill',
    },
    // Set up the payment:
    // 1. Add a payment callback
    payment: function(data, actions) {
      // 2. Make a request to your server
      return actions.request.post('/api/create-payment')
        .then(function(res) {
          // 3. Return res.id from the response
          return res.id;
        });
    },
    // Execute the payment:
    // 1. Add an onAuthorize callback
    onAuthorize: function(data, actions) {
      // 2. Make a request to your server
      return actions.request.post('/api/execute-payment', {
        paymentID: data.paymentID,
        payerID:   data.payerID
      })
        .then(function(res) {
          console.log(res);
          var backdrop = document.querySelector('.backdrop');
          var modal = document.querySelector('.modalpayment');
          var contentpaypal = document.querySelector('.content-paypal');
          backdrop.style.display = 'block';
          modal.style.display = 'block';
          contentpaypal.style.position = 'sticky';
        });
    }
  }, '#paypal-button');
</script>
@else
<div class="text-primary text-center p-6 bg-white">
  <h3> You haven't booked our services.</h3>
  <form action="{{ url('/booking') }}" method="get" class="align-middle">
    <button type="submit" class="btn-custom btn-outline-back"><i class="fas fa-undo-alt"></i> Proceed to Booking</button>
  </form>
</div>
@endif
<div class="modalpayment fade-show">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Thank you <span class="infor-name"></span> for using our service</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
  <div class="modal-content">
      <div class="service-panel">
        <div class="service-panel-title">Your service</div>
        <div class="service-panel-item">
          <div class="service-list-item">
            <div class="service-item-inner row m-0">
              <div class="col-lg-7 p-0">
                <div class="service-name"> Service name</div>
                <div class="service-cate"> Service category </div>
              </div>
              <div class="col-lg-5 p-0">
                <div class="service-item-left d-inline-block">
                  <div class="service-price"> 20.00 $ </div>
                  <div class="service-discount">0%</div>
                </div>
                <div class="service-item-right d-inline-block h-100 align-middle">
                  <div class="service-quantity"><span>Qty: </span> 1 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="shipping-panel-title">Shipping</div>
        <div class="service-item-inner">
          <div class="shipping-subtotal"><span>Subtotal: </span> 17.5 $</div>
          <div class="shipping-tax"><span>Shipping Tax: </span> 1.00 $</div>
          <div class="shipping-fee"><span>Shipping Fee: </span> 2.5 $</div>
        </div>
        <div class="total-panel-title">Total: <span class="text-primary pl-1">20.00 $</span></div>
      </div>

  </div>
  <div class="modal-footer">
    <button type="button" class="btn-custom btn-outline-back float-left p-1"> Back to home</button>
    <button class="btn-custom btn-next float-right">OK</button>
  </div>
</div>

@endsection
