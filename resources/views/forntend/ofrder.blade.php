@extends('layouts.frontend.app')

@section('title')
Product Order
@endsection
@section('content')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth multi-step-login">
        <div class="row w-100">
          <div class="col-md-5 mx-auto py-5">
            <h1 class="text-center">{{ $shop->company_name }}</h1>
            <form class="step-form" id="msform">
              <!-- progressbar -->
              <ul class="step-progress" id="progressbar">
                <li class="active">Order</li>
                <li>Optional informations</li>
              </ul>
              <!-- fieldsets -->
              <fieldset>
                <div class="form-group">
                  <input class="form-control" type="text" name="username" placeholder="Username" />
                </div>
                <div class="form-group">
                  <input class="form-control" type="password" name="pass" placeholder="Password" />
                </div>
                <div class="form-group">
                  <input class="form-control" type="password" name="cpass" placeholder="Confirm Password" />
                </div>
                <button class="btn btn-primary" type="submit"  />Submit now</button>
                <button class="btn btn-primary next action-button float-right" type="button" name="next" value="Next" />Next</button>
              </fieldset>
              <fieldset>
                <div class="row">
                  <div class="form-group col-md-6">
                    <input class="form-control" type="text" name="FirstName" placeholder="First Name" />
                  </div>
                  <div class="form-group col-md-6">
                    <input class="form-control" type="text" name="Last Name" placeholder="Last Name" />
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <input class="form-control" type="email" name="email" placeholder="Email" />
                  </div>
                  <div class="form-group col-md-6">
                    <input class="form-control" type="text" name="Country" placeholder="Country" />
                  </div>
                </div>
                <div class="form-group">
                  <input class="form-control" type="number" name="Number" placeholder="Number" />
                </div>
                <button class="btn btn-primary next action-button float-left" type="button" name="next" value="Next" />Next</button>
                <button class="btn btn-primary next action-button float-left" type="button" name="next" value="Next" />Next</button>
              </fieldset>
              <fieldset class="text-center">
                <p class="font-weight-bold">Created sucessfully</p>
                <i class="mdi mdi-shield-check text-warning icon-lg"></i>
                <h4 class="font-weight-bold">Welcome staradmin</h4>
                <p class="mb-0 text-muted">You’ve successfully created a account for this user.</p>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
@endsection
@push('custom-scripts')
<script src="{{ asset('assets/vendors/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/js/login.js') }}"></script>
@endpush