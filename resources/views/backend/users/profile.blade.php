@extends('layouts.backend.app')
@section('title','User Profile')
@section('content')
<div class="row user-profile-area">
    <div class="col-md-6 col-sm-12 mx-auto">
        <div class="card p-3">
        <div class="row">
        <div class="col-md-12">
            <div class="profile">
            <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="">
            </div>
        </div>
        <div class="col-md-12">
            <div class="profile-info">
              <div class="row mb-2">
                <div class="col-6">
                  <h4>Name</h4>
                </div>
                <div class="col-6">
                  <p>Shuvo Dewan</p>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-6">
                  <h4>Phone Number</h4>
                </div>
                <div class="col-6">
                  <p>345678900</p>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-6">
                  <h4>Email address</h4>
                </div>
                <div class="col-6">
                  <p>email@mail.com</p>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-6">
                  <h4>Gender</h4>
                </div>
                <div class="col-6">
                  <p>Male</p>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-6">
                  <h4>Role</h4>
                </div>
                <div class="col-6">
                  <p class="text-info">admin</p>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-6">
                  <h4>Address</h4>
                </div>
                <div class="col-6">
                  <p>7584/a1 Panthapath, Dhanmondi</p>
                </div>
              </div>
            
            </div>
        </div>
        <div class="col-md-12">
            <button type="button" class="btn btn-sm btn-success">Edit Profile</button>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection