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
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="customername" value="{{ old('customername') }}" class="form-control form-control-lg" required placeholder="Customer Name*">
                        @error('customername')
                        {{ $message }}
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Phone</label>
                      <div class="col-sm-9">
                        <input type="text" name="customerphone" value="{{ old('customerphone') }}" value="{{ old('customerphone') }}" class="form-control form-control-lg" required placeholder="Customer Mobile No(01*********)" data-inputmask-alias="(+880) 9999999999" >
                        @error('customerphone')
                        {{ $message }}
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Product Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="productname" value="{{ old('productname') }}" class="form-control form-control-lg" required placeholder="Product Name">
                        @error('productname')
                        {{ $message }}
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Quantity</label>
                        <div class="col-sm-9">
                          <input type="number" name="quantity" value="{{ old('quantity') }}" class="form-control form-control-lg" required placeholder="Product Quality">
                          @error('quantity')
                            {{ $message }}
                          @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Payment Method</label>
                      <div class="col-sm-9">
                        <select class="form-control @error('status')is-invalid @enderror" name="payment_method_id"  >
                          <option value="">Choose a method</option>
                          @foreach($methods as $key => $method) 
                          <option value="{{ $method->id }}" >{{ $method->title }}</option>
                          @endforeach
                        </select>
                        @error('payment_method_id')
                          {{ $message }}
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Address</label>
                      <div class="col-sm-9">
                        <input name="address" value="{{ old('address') }}" class="form-control" rows="3" placeholder="address.." />
                        @error('address')
                          {{ $message }}
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Note</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="note" value="{{ old('note') }}" rows="3" placeholder="Note.."></textarea>
                        @error('note')
                          {{ $message }}
                        @enderror
                      </div>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
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