@extends('layouts.frontend.app')

@section('title')
Product Order
@endsection
@section('content')
<div class="make-content-area">
  <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
          <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
              <div class="col-lg-6 col-md-10 form-con mx-auto">
                <div class="auth-form-light text-left p-5">
                  <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Order Confirmation</h5>
                        </div>
                        <div class="modal-body">
                        <h3>Your Order No is : <a href="{{ route('shop.order.tracking') }}?orderid={{ $order->orderid }}" class="">{{ $order->orderid }}</a></h3>
                          <p>Please take screeshot of your oder id or keep it somewhere safe !</p>
                        </div>
                      </div>
                    </div>                
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
  </div>
</div>
@endsection