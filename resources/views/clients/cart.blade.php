@extends('layouts.app')

@section('content')
<div id="checkout-banner">
    <img src="{{asset('/image/shopping-cart-banner.png')}}" class="w-100" height="auto" />
</div>
<div class="container padding-bottom-3x mb-1 mt-4">
    <!-- Alert-->
    <div class="alert alert-info alert-dismissible fade show text-center" style="margin-bottom: 30px;"><span class="alert-close"><i class="fas fa-times" data-dismiss="alert"></i></span>&nbsp;&nbsp;With this purchase you will earn <strong>290</strong> Reward Points.</div>
    <!-- Shopping Cart-->
    <div class="table-responsive shopping-cart">
        <table class="table">
        <thead>
            <tr>
            <th>Product Name</th>
            <th class="text-center">Quantity</th>
            <th class="text-center">Subtotal</th>
            <th class="text-center">Discount</th>
            <th class="text-center"><a class="btn btn-sm btn-outline-danger" href="#">Clear Cart</a></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>
                <div class="product-item"><a class="product-thumb" href="shop-single.html"><img src="{{asset('image/19.jpg')}}" alt="Product"></a>
                <div class="product-info align-middle">
                    <h4 class="product-title"><a href="shop-single.html">Unionbay Park</a></h4><span><em>Size:</em> 10.5</span><span><em>Color:</em> Dark Blue</span>
                </div>
                </div>
            </td>
            <td class="text-center align-middle">
                <div class="count-input">
                1
                </div>
            </td>
            <td class="text-center text-lg text-medium align-middle">$43.90</td>
            <td class="text-center text-lg text-medium align-middle">$18.00</td>
            <td class="text-center align-middle"><a class="remove-from-cart" href="#" data-toggle="tooltip" title="Remove item"><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
            <td>
                <div class="product-item"><a class="product-thumb" href="shop-single.html"><img src="{{asset('image/19.jpg')}}" alt="Product"></a>
                <div class="product-info align-middle">
                    <h4 class="product-title align-middle"><a href="shop-single.html">Daily Fabric Cap</a></h4><span><em>Size:</em> XL</span><span><em>Color:</em> Black</span>
                </div>
                </div>
            </td>
            <td class="text-center align-middles">
                <div class="count-input">
                1
                </div>
            </td>
            <td class="text-center text-lg text-medium align-middle">$24.89</td>
            <td class="text-center align-middle">$24.89;</td>
            <td class="text-center align-middle"><a class="remove-from-cart" href="#" data-toggle="tooltip" title="Remove item"><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
            <td>
                <div class="product-item"><a class="product-thumb" href="shop-single.html"><img src="{{asset('image/19.jpg')}}" alt="Product"></a>
                <div class="product-info align-middle">
                    <h4 class="product-title align-middle"><a href="shop-single.html">Cole Haan Crossbody</a></h4><span><em>Size:</em> -</span><span><em>Color:</em> Turquoise</span>
                </div>
                </div>
            </td>
            <td class="text-center align-middle">
                <div class="count-input">
                1
                </div>
            </td>
            <td class="text-center text-lg text-medium align-middle">$200.00</td>
            <td class="text-center align-middle">$24.89</td>
            <td class="text-center align-middle"><a class="remove-from-cart" href="#" data-toggle="tooltip" title="Remove item"><i class="fas fa-times"></i></a></td>
            </tr>
        </tbody>
        </table>
    </div>
    <div class="row p-0">
        <div class="text-lg text-right w-100">Subtotal: <span class="text-medium">$289.68</span></div>
    </div>
    
    <div class="row p-0">
        <div class="col-lg-6 p-0"><a class="btn btn-outline-secondary" href="shop-grid-ls.html"><i class="icon-arrow-left"></i>&nbsp;Back to Shopping</a></div>
        <div class="col-lg-6 p-0 text-right">
            <a class="btn btn-update-cart" href="#" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Your cart" data-toast-message="is updated successfully!">Update Cart</a>
            <a class="btn btn-checkout" href="checkout-address.html">Checkout</a></div>
    </div>
</div>
@endsection