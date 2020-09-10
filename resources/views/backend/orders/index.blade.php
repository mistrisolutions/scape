@extends('layouts.backend.app')
@section('title')
Orders
@endsection
@section('content')
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
              @forelse ($orders as $order)
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
              @empty
                  
              @endforelse

            </tbody>
        </table>
        </div>
    </div>
    </div>
</div>  
@endsection
