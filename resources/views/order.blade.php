@extends('layouts.frontend.app')

@section('content')
<div class="login-content-area">
<div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <h4>Make Order</h4>
                <form class="pt-3">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" required placeholder="Customer Name*">
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control form-control-lg" required placeholder="Customer Mobile No*">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" required placeholder="Customer Address">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" required placeholder="Product Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" required placeholder="Product Quality">
                  </div>
                  <div class="form-group">
                  <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                  </div>
                  <div class="form-group">
                  <textarea class="form-control" rows="3" placeholder="Note.."></textarea>
                  </div>
                  <div class="mt-3">
                    <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" data-toggle="modal" data-target="#staticBackdrop">Confirm Order</a>
                  </div>
                 
                </form>
                <!-- Modal -->
                <div class="modal fade " id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Order Confirmation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <h3>Your Order No is : Dh234</h3>
                        <p>Please take screeshot of your oder id or keep it somewhere safe !</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                      </div>
                    </div>
                  </div>
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
