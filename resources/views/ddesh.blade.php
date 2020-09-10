@extends('layouts.backend.apps')

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
            <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
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
            <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
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
            <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
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
            <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
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
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-md-3">
                        <div class="form-group">
                        <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Search</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" placeholder="Search" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                    <a href="#" type="button" class="btn btn-outline-success">Success</a>
                    </div>
                    
                    <div class="col-md-2">
                        <button class="btn float-right btn-success dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn float-right btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn float-right btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered order-table-area">
                    <thead>
                    <tr>
                        <th> 
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="all">
                        <label class="form-check-label" for="all">
                            All
                        </label>
                        </div>
                        </th>
                        <th> Order Id </th>
                        <th> Customer Name </th>
                        <th> Customer Phone </th>
                        <th> Address </th>
                        <th> Status </th>
                        <th> Action </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td> <input class="form-check-input" type="checkbox" value="" id="all"> </td>
                        <td> Herman Beck </td>
                        <td> Herman Beck </td>
                        <td> $ 77.99 </td>
                        <td> May 15, 2015 </td>
                        <td class="drpdn-status">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pending
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div> 
                        </td>
                        <td>
                        <label class="badge badge-info">View</label>
                        <label class="badge badge-success">Edit</label>
                        <label class="badge badge-danger">Delete</label>
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>  
    </div>
    <!-- content-wrapper ends -->
    
</div>
@endsection
