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
              <div class="col-lg-12 col-md-10 form-con mx-auto">
                <div class="row product-details-area">
                  @isset($order)
                    <div class="col-md-9 col-sm-12 mx-auto">
                      <div class="card p-3">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="staticBackdropLabel">Order status</h5>
                            </div>
                            <div class="modal-body">
                            <h3>Your order status : <span class="text-primary">{{ $order->status->title }}</span></h3>
                            </div>
                          </div>
                        </div>                
                      </div>
                      <hr />
                      </div>
                  </div>
                  @else
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Tracking result</h5>
                      </div>
                      <div class="modal-body">
                        <h3>No order found</h3>                      
                      </div>
                    </div>
                  </div>                
                </div>
                  @endif
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