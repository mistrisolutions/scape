@extends('layouts.frontend.app')

@section('title')
Product Order
@endsection
@section('content')
<div class="login-content-area">
    <div class="container-scroller">
          <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
              <div class="row flex-grow">
                <div class="col-lg-4 mx-auto">
                  <div class="auth-form-light text-left p-5">
                    @if(isset($order))
                    <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Order Confirmation</h5>
                          </div>
                          <div class="modal-body">
                            <h3>Your Order No is : {{ $order->orderid }}</h3>
                            <p>Please take screeshot of your oder id or keep it somewhere safe !</p>
                          </div>
                        </div>
                      </div>
                    @elseif(isset($tracking))
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Order Tracking Result</h5>
                        </div>
                        <div class="modal-body">
                          <h3>Your Order No is : {{ $tracking->orderid }}</h3>
                          <p>Please take screeshot of your oder id or keep it somewhere safe !</p>
                        </div>
                      </div>
                    </div>
                    @else  
                    <h4>Make Order</h4>
                    <form class="pt-3" action="{{ route('shop.order.store',$shop->url)}}" method="POST">
                        @csrf
                      <div class="form-group">
                        <input type="text" name="customername" value="{{ old('customername') }}" class="form-control form-control-lg" required placeholder="Customer Name*">
                      </div>
                      <div class="form-group">
                        <input type="number" name="customerphone" value="{{ old('customerphone') }}" value="{{ old('customerphone') }}" class="form-control form-control-lg" required placeholder="Customer Mobile No*">
                      </div>
                      <div class="form-group">
                        <input type="text" name="productname" value="{{ old('productname') }}" class="form-control form-control-lg" required placeholder="Product Name">
                      </div>
                      <div class="form-group">
                        <input type="number" name="quantity" value="{{ old('quantity') }}" class="form-control form-control-lg" required placeholder="Product Quality">
                      </div>
                      <div class="form-group">
                        <textarea name="address" value="{{ old('address') }}" class="form-control" rows="3" placeholder="address.."></textarea>
                        </div>
                      <div class="form-group">
                      <textarea class="form-control" name="note" value="{{ old('note') }}" rows="3" placeholder="Note.."></textarea>
                      </div>
                      <div class="mt-3">
                        <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Confirm Order</button>
                      </div>                     
                    </form>
                    @endif                   
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