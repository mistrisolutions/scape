@extends('layouts.backend.app')

@section('title', 'Process')

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/x-editable/bootstrap-editable.css') }}">
@endpush

@section('header-title', 'Order process')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="template-demo">
                <form id="editable-form" class="editable-form">
                  <div class="form-group row">
                    <label class="col-6 col-lg-4 col-form-label">Product id</label>
                    <div class="col-6 col-lg-8 d-flex align-items-center">
                      <a href="#" id="username" data-type="text" data-pk="1">awesome</a>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-6 col-lg-4 col-form-label">Customer name</label>
                    <div class="col-6 col-lg-8 d-flex align-items-center">
                      <a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-6 col-lg-4 col-form-label">Customer phone number</label>
                    <div class="col-6 col-lg-8 d-flex align-items-center">
                      <a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex">not selected</a>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-6 col-lg-4 col-form-label">Product name</label>
                    <div class="col-6 col-lg-8 d-flex align-items-center">
                      <a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth">15/05/1984</a>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-6 col-lg-4 col-form-label">Product quantity</label>
                    <div class="col-6 col-lg-8 d-flex align-items-center">
                      <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                    </div>
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
    <script src="{{ asset('assets/vendors/x-editable/bootstrap-editable.min.js') }}"></script>
    <script src="{{ asset('assets/js/x-editable.js') }}"></script>
@endpush
