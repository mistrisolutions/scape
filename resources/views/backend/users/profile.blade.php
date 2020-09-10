@extends('layouts.backend.app')
@section('title','User Profile')
@section('content')
<div class="row user-profile-area">
    <div class="col-md-10 col-sm-12 mx-auto">
        <div class="card p-3">
        <div class="row">
        <div class="col-md-3">
            <div class="profile">
            <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="">
            </div>
            <button type="button" class="btn btn-sm btn-success">Edit Profile</button>
        </div>
        <div class="col-md-9">
            <div class="profile-info">
            <table class="table table-borderless">
            <tbody>
                <tr>
                <th width="3%">Name</th>
                <th width="1%">:</th>
                <td>Shuvo</td>
                </tr>

                <tr>
                <th width="3%">Phone Number</th>
                <th width="1%">:</th>
                <td>345678900</td>
                </tr>
                <tr>
                <th width="3%">Email address</th>
                <th width="1%">:</th>
                <td>email@mail.com</td>
                </tr>
                <tr>
                <th width="3%">Gender</th>
                <th width="1%">:</th>
                <td>Male</td>
                </tr>
                <tr>
                <th width="3%">Role</th>
                <th width="1%">:</th>
                <td>admin</td>
                </tr>
                <tr>
                <th width="3%">Address</th>
                <th width="1%">:</th>
                <td>7584/a1 Panthapath, Dhanmondi</td>
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