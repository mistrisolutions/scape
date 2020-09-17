@extends('layouts.backend.app')

@section('title', 'Process')

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/x-editable/bootstrap-editable.css') }}">
@endpush

@section('header-title')
order id : #{{ $order->id }}
@endsection
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="template-demo">
                
                <form id="editable-form" action="{{ route('app.orders.order.process.update',$order->id) }}" class="editable-form" enctype="multipart/form-data" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="form-con-area">
                  <div class="form-group row">
                    <label class="col-6 col-lg-4 col-form-label">Product picture</label>
                    <div class="col-6 col-lg-8 d-flex align-items-center">
                      <input type="file" class="form-control-file dropify" id="exampleFormControlFile1" name="logo" data-default-file="{{ Storage::url($order->image) }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-6 col-lg-4 col-form-label">Cusetomer address</label>
                    <div class="col-6 col-lg-8 d-flex align-items-center">
                      <input class="form-control" type="text" name="address" value="{{ $order->address }}" placeholder="address" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-6 col-lg-4 col-form-label">Note</label>
                    <div class="col-6 col-lg-8 d-flex align-items-center">
                      <input class="form-control" type="text" name="note" value="{{ $order->note }}" placeholder="note" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-6 col-lg-4 col-form-label">Price</label>
                    <div class="col-6 col-lg-8 d-flex align-items-center">
                      <input class="form-control" type="text" name="price" value="{{ $order->price }}" placeholder="price" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-6 col-lg-4 col-form-label">Status</label>
                    <div class="col-6 col-lg-8 d-flex align-items-center">
                      <select class="form-control @error('status')is-invalid @enderror" name="status_id"  >
                        @foreach($statuses as $key => $status) 
                        <option value="{{ $status->id }}" @isset($order) @if($order->status->slug==$status->slug)selected @endif @endif>{{ $status->title }}</option>
                        @endforeach
                        </select>
                    </div>
                  </div>
                  <fieldset id='show-more' class="d-none">
                  <div class="form-group row">
                    <label class="col-6 col-lg-4 col-form-label">Customer name</label>
                    <div class="col-6 col-lg-8 d-flex align-items-center">
                      <input class="form-control" type="text" name="customername" value="{{ $order->customername }}" placeholder="Customer name" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-6 col-lg-4 col-form-label">Customer Phone</label>
                    <div class="col-6 col-lg-8 d-flex align-items-center">
                      <input class="form-control"  type="text" name="customerphone" value="{{ $order->customerphone }}" placeholder="Customer phone" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-6 col-lg-4 col-form-label">Product name</label>
                    <div class="col-6 col-lg-8 d-flex align-items-center">
                      <input class="form-control" type="text" name="productname" value="{{ $order->productname }}" placeholder="Product name" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-6 col-lg-4 col-form-label">Product quantity</label>
                    <div class="col-6 col-lg-8 d-flex align-items-center">
                      <input class="form-control" type="text" name="quantity" value="{{ $order->quantity }}" placeholder="quantity" />
                    </div>
                  </div>
                </fieldset>
                <div>
                  <p class="" id="triger">show more</p>
                </div>
                  <div class="form-group form-control-arrow-action">
                    <div class="row justify-content-between px-4">
                        @isset($previous_order)
                            <a id="previousOrder" class="btn btn-gradient-info"
                               href="{{ route('app.orders.order.process',$previous_order->id) }}">
                                <i class="mdi mdi-chevron-left"></i>
                            </a>
                        @else
                            <button disabled class="btn btn-gradient-info">
                                <i class="mdi mdi-chevron-left"></i>
                            </button>
                        @endisset
                        <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
                        @isset($next_order)
                            <a id="oderNext" class="btn btn-gradient-info"
                               href="{{ route('app.orders.order.process',$next_order->id) }}">
                                <i class="mdi mdi-chevron-right"></i>
                            </a>
                        @else
                            <button disabled class="btn btn-gradient-info">
                                <i class="mdi mdi-chevron-right"></i>
                            </button>
                        @endisset
                    </div>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection

@push('custom-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            // Dropify
            $('.dropify').dropify();
        });
        document.addEventListener("keydown", function (event) {
            if (event.key === 'ArrowLeft') {
                document.getElementById("previousOrder").click();
            }
            if (event.key === 'ArrowRight') {
                document.getElementById("oderNext").click();
            }
        });
    </script>
    <script>
      const triger = document.getElementById("triger");
      const showFields = document.getElementById("show-more");
      triger.addEventListener('click',function(){
        triger.style.display='none';
        showFields.classList.remove("d-none");
      });
      
    </script>
    <script src="{{ asset('assets/vendors/x-editable/bootstrap-editable.min.js') }}"></script>
    <script src="{{ asset('assets/js/x-editable.js') }}"></script>
@endpush
