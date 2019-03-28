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
      <div class="checkout-steps"><a href="#" id="checkout-review-step">3. Review</a><a href="#" id="checkout-address-step" class="active"><span class="angle"></span>2. Address</a><a href="#" id="checkout-service-step"><span class="angle"></span>1. Services</a></div>
      <div id="checkout-content">
      <form action="{{url('/review')}}" method="post" id="formaddresssubmit">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="address" id="address" value="">
        <input type="hidden" name="distance" id="distance" value="">
        <div class="service bg-white text-uppercase p-lg-2" style="border-top:1px solid rgba(0, 0, 0, 0.1);border-right:1px solid rgba(0, 0, 0, 0.1);border-left:1px solid rgba(0, 0, 0, 0.1)">
          <h5 class="mb-0" style="font-weight:700">Address</h5>
          <div class="row mx-0 mt-1">
              <div class="md-form col-md-12 email">
                <input type="email" id="infoemail" name="email" class="materialtinfopet w-100" class="form-control" require>
                <label for="infoemail" class="">Email</label>
                <div class="text-danger">{{ $errors->first('email') }}</div>       
              </div>
            </div>
            <div class="row mx-0 mt-1">
              <div class="md-form col-md-6 firstname">
                <input type="text" id="petinfofirstname" name="firstname" class="materialtinfopet w-100" class="form-control" require>
                <label for="petinfofirstname" class="">First Name</label>             
              </div>
              <div class="md-form col-md-6 lastname">
                  <input type="text" id="petinfolastname" name="lastname" class="materialtinfopet w-100" class="form-control" require>
                  <label for="petinfolastname" class="">Last Name</label>
              </div>
            </div>
            <div class="row mx-0 mt-1">
              <div class="md-form col-md-6 phone1">
                <input type="text" id="petinfophone1" name="phone1" class="materialtinfopet w-100" class="form-control" require>
                <label for="petinfophone1" class="">Phone 1</label>             
              </div>
              <div class="md-form col-md-6 phone2">
                  <input type="text" id="petinfophone2" name="phone2" class="materialtinfopet w-100" class="form-control" require>
                  <label for="petinfophone2" class="">Phone 2</label>
              </div>
            </div>
          </div>
        </div>
      </form>
      <div class="service bg-white text-uppercase p-lg-2" style="border-top:1px solid rgba(0, 0, 0, 0.1);border-right:1px solid rgba(0, 0, 0, 0.1);border-left:1px solid rgba(0, 0, 0, 0.1)">
        <div class="row mx-0 mt-1">
          <input id="searchMapInput" class="mapControls" type="text" placeholder="Enter a location">
          <input type="hidden" id="location-snap" value=""/>
          <div id="map"></div>
        </div>
      </div>
  
      <div class="checkout-footer mt-2 d-inline-block">
        <button class="btn-custom btn-next float-right testnha">Next <i class="fas fa-forward ml-1"></i></button>
      </div>
    </div>
  <script>
    function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 16.059855, lng: 108.241520},
      zoom: 15,

    });
    var input = document.getElementById('searchMapInput');
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
   
    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.bindTo('bounds', map);
  
    var infowindow = new google.maps.InfoWindow();
    var marker = new google.maps.Marker({
        map: map,
        anchorPoint: new google.maps.Point(0, -29),
        position: {lat: 16.059855, lng: 108.241520},
        draggable: true
    });
  
    autocomplete.addListener('place_changed', function() {
        infowindow.close();
        marker.setVisible(false);
        var place = autocomplete.getPlace();
    
        /* If the place has a geometry, then present it on a map. */
        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } else {
            map.setCenter(place.geometry.location);
            map.setZoom(15);
        }
        marker.setIcon(({
            url: 'https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2.png',
            size: new google.maps.Size(27, 43),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(27, 43)
        }));
        marker.setPosition(place.geometry.location);
        marker.setVisible(true);
      
        var address = '';
        if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
        }
      
        infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
        infowindow.open(map, marker);
        
        /* Location details */
        document.getElementById('location-snap').value = place.formatted_address;
        
        var service = new google.maps.DistanceMatrixService;
        service.getDistanceMatrix({
          origins: [{lat: 16.059855, lng: 108.241520}],
          destinations: [place.formatted_address],
          travelMode: 'DRIVING',
          unitSystem: google.maps.UnitSystem.METRIC,
          avoidHighways: false,
          avoidTolls: false
        }, function(response, status) {
          if (status !== 'OK') {
            alert('Error was: ' + status);
          } else {
            console.log(response);
            var distance = response.rows[0].elements[0].distance['text'];
            document.getElementById('address').value = place.formatted_address;
            document.getElementById('distance').value = distance;
            console.log(distance);
          }
        });
    });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCICVFZg9PawAeVO5oH_BRdE7IEu93eG8E&libraries=places&callback=initMap" async defer></script>
</div>
</div>
@else
<div class="text-primary text-center p-6 bg-white">
  <h3> You haven't booked our services.</h3>
  <form action="{{ url('/booking') }}" method="get" class="align-middle">
    <button type="submit" class="btn-custom btn-outline-back"><i class="fas fa-undo-alt"></i> Proceed to Booking</button>
  </form>
</div>
@endif
@endsection