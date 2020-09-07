@extends('layouts.backend.app')

@section('content')
<div class="row">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <div class="row justify-content-between">
            <div class="col-md-2">
            <div class="form-group">
                <label for="search">Search Here</label>
                <input type="search" class="form-control" id="search" placeholder="search...">
            </div>
            </div>
            <div class="col-md-2">
                <button class="btn float-right btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            
            </div>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th> #Serial </th>
                <th> Order Id </th>
                <th> Customer Name </th>
                <th> Customer Phone </th>
                <th> Address </th>
                <th> Status </th>
                <th> Date </th>
                <th> Action </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td> 1 </td>
                <td> Herman Beck </td>
                <td> Herman Beck </td>
                <td> $ 77.99 </td>
                <td> May 15, 2015 </td>
                <td> <label class="badge badge-danger">Pending</label> </td>
                <td> May 15, 2015 </td>
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
@endsection
