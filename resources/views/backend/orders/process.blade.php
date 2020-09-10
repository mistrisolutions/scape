@extends('layouts.backend.app')

@section('title', 'Process')

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" />
@endpush

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample">

                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlFile1"> file Upload</label>
                                <input type="file" class="form-control-file dropify" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Customer Name</label>
                                <input type="text" name="customername" class="form-control" id="exampleInputName1"
                                       placeholder="Customer Name" value="{{ $order->customername }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleSelectGender">Status</label>
                                <select class="form-control" name="status_id">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Phone Number</label>
                                <input type="text" name="customerphone" class="form-control" id="exampleInputName1"
                                       placeholder="Customer Phone"
                                       value="{{ $order->customerphone }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleSelectGender">Shop owner</label>
                                <select class="form-control" name="shop_owner_id">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-9">
                                <label for="exampleInputName1">Product Name</label>
                                <input type="text" name="productname" class="form-control" id="exampleInputName1"
                                       placeholder="Product Name"
                                       value="{{ $order->productname }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleSelectGender">Quantity</label>
                                <input type="number" name="quantity" class="form-control" id="exampleInputName1"
                                       placeholder="Product Quantity"
                                       value="{{ $order->quantity }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Price</label>
                                <input type="text" name="price" class="form-control" id="exampleInputName1"
                                       placeholder="Product price">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleSelectGender">Payment method</label>
                                <select class="form-control " name="payment_method_id">

                                    <option></option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Address</label>
                            <input name="address" placeholder="Enter your Address" class="form-control"
                                   id="exampleTextarea1">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Note</label>
                            <textarea name="note" placeholder="Please type your note..." class="form-control"
                                      id="exampleTextarea1" rows="4"></textarea>
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
                                <button type="submit" class="btn btn-gradient-primary mr-2">Send</button>
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
@endpush
