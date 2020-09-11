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
                  <h4>Make Order</h4>
                  <form class="pt-3" action="{{ route('shop.order.store',$shop->url)}}" method="POST">
                      @csrf
                    <div class="form-group">
                      <input type="text" name="customername" value="{{ old('customername') }}" class="form-control form-control-lg" required placeholder="Customer Name*">
                      @error('customername')
                      {{ $message }}
                      @enderror
                    </div>
                    <div class="form-group">
                      <input type="text" name="customerphone" value="{{ old('customerphone') }}" value="{{ old('customerphone') }}" class="form-control form-control-lg" required placeholder="Customer Mobile No(01*********)" pattern="(^([+]{1}[8]{2}|0088)?(01){1}[3-9]{1}\d{8})$">
                      @error('customerphone')
                      {{ $message }}
                      @enderror
                    </div>
                    <div class="form-group">
                      <input type="text" name="productname" value="{{ old('productname') }}" class="form-control form-control-lg" required placeholder="Product Name">
                      @error('productname')
                      {{ $message }}
                      @enderror
                    </div>
                    <div class="form-group">
                      <input type="number" name="quantity" value="{{ old('quantity') }}" class="form-control form-control-lg" required placeholder="Product Quality">
                      @error('quantity')
                      {{ $message }}
                      @enderror
                    </div>
                    <div class="form-group">
                      <select class="form-control @error('status')is-invalid @enderror" name="payment_method_id"  >
                        @foreach($methods as $key => $method) 
                        <option value="{{ $method->id }}" >{{ $method->title }}</option>
                        @endforeach
                      </select>
                      @error('payment_method_id')
                      {{ $message }}
                      @enderror
                    </div>  
                    <div class="form-group">
                      <input name="address" value="{{ old('address') }}" class="form-control" rows="3" placeholder="address.." />
                      @error('address')
                      {{ $message }}
                      @enderror
                    </div>
                    <div class="form-group">
                    <textarea class="form-control" name="note" value="{{ old('note') }}" rows="3" placeholder="Note.."></textarea>
                    </div>
                    <div class="mt-3">
                      <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Confirm Order</button>
                    </div>                     
                  </form>                 
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