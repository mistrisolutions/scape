@extends('layouts.backend.app')
@section('title')
Create Order
@endsection
@section('header-title')
@isset($order)Update Order @else Create Order @endif
@endsection
@section('content')
<div class="row">
  <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <form class="forms-sample"action="@isset($order){{ route('app.orders.order.update',$order->id) }} @else {{ route('app.orders.order.store') }} @endif" enctype="multipart/form-data" method="POST">
            @csrf
            @isset($order) @method('PUT') @endif
            <div class="row">
              <div class="form-group col-md-6">
                <label for="exampleInputName1">Customer Name</label>
              <input type="text" name="customername" class="form-control @error('customername')) is-invalid  @enderror" value="@isset($order){{ $order->customername }} @else {{ old('customername') }} @endif" id="exampleInputName1" placeholder="Customer Name">
              </div>
              <div class="form-group col-md-6">
                <label for="exampleSelectGender">Status</label>
                <select class="form-control @error('status')is-invalid @enderror" name="status"  >
                @foreach($statuses as $key => $status) 
                @endforeach
                  <option value="{{ $status->id }}" @isset($order) @if($order->status->slug==$status->slug)selected @endif @endif>{{ $status->title }}</option>
                </select>
              </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleInputName1">Phone Number</label>
                <input type="text" name="customername" class="form-control @error('customername')) is-invalid  @enderror" value="@isset($order){{ $order->customername }} @else {{ old('customername') }} @endif" id="exampleInputName1" placeholder="Customer Name">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleSelectGender">Shop owner</label>
                  <select class="form-control @error('status')is-invalid @enderror" name="owner"  >
                  @foreach($owners as $key => $owner) 
                  <option value="{{ $owner->id }}" @isset($order) @if($order->shopOwner->id==$owner->id)selected @endif @endif>{{ $owner->user->name }}</option>
                  @endforeach
                  </select>
                </div>
              </div> 
              <div class="row">
                <div class="form-group col-md-9">
                  <label for="exampleInputName1">Product Name</label>
                <input type="text" name="productname" class="form-control @error('productname')) is-invalid  @enderror" value="@isset($order){{ $order->productname }} @else {{ old('productname') }} @endif" id="exampleInputName1" placeholder="Product Name">
                </div>
                <div class="form-group col-md-3">
                  <label for="exampleSelectGender">Quantity</label>
                <input type="number" name="quantity" class="form-control @error('quantity')) is-invalid  @enderror" value="@isset($order){{ $order->quantity }} @else {{ old('quantity') }} @endif" id="exampleInputName1" placeholder="Product Quantity">
                </div>
              </div>           
            <div class="form-group">
              <label for="exampleTextarea1">Address</label>
              <textarea name="address" class="form-control" id="exampleTextarea1" rows="4">@isset($order){{ $order->address}}@endif</textarea>
            </div>
            <div class="form-group">
                <label for="exampleTextarea1">Note</label>
                <textarea name="address" class="form-control" id="exampleTextarea1" rows="4">@isset($order){{ $order->note}}@endif</textarea>
              </div>
            <button type="submit" class="btn btn-gradient-primary mr-2">@isset($order)Update @else Create @endif</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection