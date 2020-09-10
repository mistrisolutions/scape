@extends('layouts.backend.app')

@section('content')
<div class="row product-details-area">
    <div class="col-md-8 col-sm-12 mx-auto">
        <div class="card p-3">
        <div class="row justify-content-between">
            <div class="col-sm-6">
                <h3>Product Details</h3>
            </div>
            <div class="col-sm-6 text-right">
                <h4>#fd8998</h4>
            </div>
        </div>
        <hr />
        <div class="row">
        <div class="col-md-3 col-sm-12">
            <h1 class="text-center mt-5">Status</h1>
        </div>
        <div class="col-md-9 col-sm-12">
            <div class="profile-info">
            <table class="table table-borderless">
            <tbody>
                <tr>
                <th width="3%">Customer Name</th>
                <th width="1%">:</th>
                <td>Shuvo</td>
                </tr>

                <tr>
                <th width="3%">Customer Phone</th>
                <th width="1%">:</th>
                <td>345678900</td>
                </tr>

                <tr>
                <th width="3%">Product Name</th>
                <th width="1%">:</th>
                <td>kisu ekta</td>
                </tr>

                <tr>
                <th width="3%">Quantity</th>
                <th width="1%">:</th>
                <td>5kg</td>
                </tr>

                <tr>
                <th width="3%"><span class="font-weight-bold">Price</span></th>
                <th width="1%">:</th>
                <td><span class="font-weight-bold">500tk</span></td>
                </tr>
                
            </tbody>
            </table>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection
