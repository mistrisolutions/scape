@extends('layouts.backend.app')
@section('title', 'Process')
@section('content')
<div class="row">
  <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <form class="forms-sample" >
           
            <div class="row">
              <div class="form-group col-md-12">
                <label for="exampleFormControlFile1"> file Upload</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
              <div class="form-group col-md-6">
                <label for="exampleInputName1">Customer Name</label>
              <input type="text" name="customername" class="form-control" id="exampleInputName1" placeholder="Customer Name">
              </div>
              <div class="form-group col-md-6">
                <label for="exampleSelectGender">Status</label>
                <select class="form-control" name="status_id"  >
                <option></option>
                </select>
              </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleInputName1">Phone Number</label>
                <input type="text" name="customerphone" class="form-control" id="exampleInputName1" placeholder="Customer Phone">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleSelectGender">Shop owner</label>
                  <select class="form-control" name="shop_owner_id"  >
                  <option></option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-9">
                  <label for="exampleInputName1">Product Name</label>
                <input type="text" name="productname" class="form-control" id="exampleInputName1" placeholder="Product Name">
                </div>
                <div class="form-group col-md-3">
                  <label for="exampleSelectGender">Quantity</label>
                <input type="number" name="quantity" class="form-control" id="exampleInputName1" placeholder="Product Quantity">
                </div>
              </div>  
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleInputName1">Price</label>
                <input type="text" name="price" class="form-control"  id="exampleInputName1" placeholder="Product price">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleSelectGender">Payment  method</label>
                  <select class="form-control " name="payment_method_id"  >
                 
                  <option></option>
                  
                  </select>
                </div>
            </div>          
            <div class="form-group">
              <label for="exampleTextarea1">Address</label>
              <input name="address" placeholder="Enter your Address" class="form-control" id="exampleTextarea1">
            </div>
            <div class="form-group">
                <label for="exampleTextarea1">Note</label>
                <textarea name="note" placeholder="Please type your note..." class="form-control" id="exampleTextarea1" rows="4"></textarea>
            </div>
            <div class="form-group form-control-arrow-action">
                <div class="row justify-content-between px-4">
                <i class="mdi mdi-chevron-left"></i>
                <button type="submit" class="btn btn-gradient-primary mr-2">Send</button>
                <i class="mdi mdi-chevron-right"></i>
                </div>
            </div>
            
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
