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
                      <div class="row justify-content-between">
                          <div class="col-sm-6">
                              <h3>Product Details</h3>
                          </div>
                          <div class="col-sm-6 text-right">
                              <h4>id : {{ $order->orderid }}</h4>
                          </div>
                      </div>
                      <hr />
                      <div class="row">
                      <div class="col-md-3 col-sm-12">
                          <h1 class="text-center mt-5">{{ $order->status->title }}</h1>
                      </div>
                      <div class="col-md-9 col-sm-12">
                          <div class="profile-info float-center">
                          <table class="table table-borderless ">
                          <tbody>
                              <tr>
                              <th width="3%">Customer Name</th>
                              <th width="1%">:</th>
                              <td>{{ $order->customername }}</td>
                              </tr>
                              <tr>
                              <th width="3%">Product Name</th>
                              <th width="1%">:</th>
                              <td>{{ $order->productname }}</td>
                              </tr>
              
                              <tr>
                              <th width="3%">Quantity</th>
                              <th width="1%">:</th>
                              <td>{{ $order->quantity }}</td>
                              </tr>                              
                          </tbody>
                          </table>
                          </div>
                      </div>
                      </div>
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