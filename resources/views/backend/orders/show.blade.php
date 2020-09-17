@extends('layouts.backend.app')

@section('title', 'Details')

@section('header-title', 'Order details')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="template-demo">
                <form id="editable-form" class="editable-form">
                  <div class="form-group row">
                    <label class="col-6 col-lg-4 col-form-label">Order id</label>
                    <div class="col-6 col-lg-8 d-flex align-items-center">
                      <a href="#" id="orderid" data-type="text" data-pk="1">#{{ $order->orderid }}</a>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-6 col-lg-4 col-form-label">Status</label>
                    <div class="col-6 col-lg-8 d-flex align-items-center">
                      <a href="#" id="orderid" data-type="text" data-pk="1">{{ $order->status->title }}</a>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-6 col-lg-4 col-form-label">Customer name</label>
                    <div class="col-6 col-lg-8 d-flex align-items-center">
                      <a href="#" id="customername" data-type="text" data-pk="1" data-placement="right"  data-title="Customer name">{{ $order->customername }}</a>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-6 col-lg-4 col-form-label">Customer phone number</label>
                    <div class="col-6 col-lg-8 d-flex align-items-center">
                        <a href="#" id="customername" data-type="text" data-pk="1" data-placement="right"  data-title="Customer name">{{ $order->customerphone }}</a>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-6 col-lg-4 col-form-label">Product name</label>
                    <div class="col-6 col-lg-8 d-flex align-items-center">
                        <a href="#" id="customername" data-type="text" data-pk="1" data-placement="right"  data-title="Customer name">{{ $order->productname }}</a>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-6 col-lg-4 col-form-label">Product quantity</label>
                    <div class="col-6 col-lg-8 d-flex align-items-center">
                        <a href="#" id="customername" data-type="text" data-pk="1" data-placement="right"  data-title="Customer name">{{ $order->quantity }}</a>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-6 col-lg-4 col-form-label">Product Price</label>
                    <div class="col-6 col-lg-8 d-flex align-items-center">
                        <a href="#" id="customername" data-type="text" data-pk="1" data-placement="right"  data-title="Customer name">{{ $order->price }}</a>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-6 col-lg-4 col-form-label">Customer address</label>
                    <div class="col-6 col-lg-8 d-flex align-items-center">
                        <a href="#" id="customername" data-type="text" data-pk="1" data-placement="right"  data-title="Customer name">{{ $order->address }}</a>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-6 col-lg-4 col-form-label">Note</label>
                    <div class="col-6 col-lg-8 d-flex align-items-center">
                        <a href="#" id="customername" data-type="text" data-pk="1" data-placement="right"  data-title="Customer name">{{ $order->note }}</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection

