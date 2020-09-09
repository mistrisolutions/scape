@extends('layouts.backend.app')
@section('title')
Home
@endsection
@section('content')
<div class="dash-container">
    <div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-home"></i>
        </span> Dashboard </h3>
        <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
            </li>
        </ul>
        </nav>
    </div>
    <div class="row">

        <!-- col-start -->
        <div class="col-md-3 stretch-card grid-margin order-cart">
        <div class="card bg-gradient-primary card-img-holder text-white">
            <div class="card-body">
            <img src="{{ asset('assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Total Order <i class="mdi mdi-alpha-o-circle-outline mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">15,0000</h2>
            <a href="#">
            <h6 class="card-text">View Details</h6>
            </a>
            </div>
        </div>
        </div>

        <!-- col-start -->
        <div class="col-md-3 stretch-card grid-margin order-cart">
        <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
            <img src="{{ asset('assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">New Orders <i class="mdi mdi-alpha-n-circle-outline mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">6334</h2>
            <a href="#">
            <h6 class="card-text">View Details</h6>
            </a>
            </div>
        </div>
        </div>

        <!-- col-start -->
        <div class="col-md-3 stretch-card grid-margin order-cart">
        <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
            <img src="{{ asset('assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Cancelled Order <i class="mdi mdi-alpha-c-circle-outline mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">741</h2>
            <a href="#">
            <h6 class="card-text">View Details</h6>
            </a>
            </div>
        </div>
        </div>
        <!-- col-start -->
        <div class="col-md-3 stretch-card grid-margin order-cart">
        <div class="card bg-gradient-success card-img-holder text-white">
            <div class="card-body">
            <img src="{{ asset('assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Delivered Order <i class="mdi mdi-alpha-d-circle-outline mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">95,5741</h2>
            <a href="#">
            <h6 class="card-text">View Details</h6>
            </a>
            </div>
        </div>
        </div>

    </div>
    

    </div>
    <!-- content-wrapper ends -->
    
</div>
@endsection
