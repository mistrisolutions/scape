@extends('layouts.backend.app')
@section('title')
User List
@endsection
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row pb-2">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12">
                <h4 class="card-title pb-2">All User</h4>
              </div>
              <div class="form-group col-md-6">
                <select class="form-control @error('gender')is-invalid @enderror" name="gender"  id="exampleSelectGender">
                  <option>10</option>
                  <option>20</option>
                  <option>30</option>
                  <option>40</option>
                  <option>50</option>
                  <option>60</option>
                  <option>70</option>
                  <option>80</option>
                  <option>90</option>
                  <option>100</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12">
                <a  class="float-right" href="{{ route('app.users.user.create') }}">
                  <label class="badge badge-success">Add user</label>
                </a>
              </div>
              <div class="col-md-12">
                <div class="form-group mb-1">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        </p>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th> User </th>
              <th> Name </th>
              <th> email </th>
              <th> phone </th>
              <th> Role </th>
              <th class="text-center"> Action </th>
            </tr>
          </thead>
          <tbody>
            @forelse($users as $key => $user)
            <tr>
              <td class="py-1">
                <img src="{{ asset($user->profile->avatar) }}" alt="image" />
              </td>
              <td> {{ $user->name }}</td>
              <td>
                {{ $user->email }}
              </td>
              <td>
                {{ $user->profile->phone }}
              </td>
              <td>{{ $user->role->title }}</td>
              <td style="text-align: center"> 
                <a href="{{ route('app.settings.role.show',$user->id) }}" class="badge badge-success">View</a>
                <a href="{{ route('app.settings.role.edit',$user->id) }}" class="badge badge-warning">Edit</a>
                <a data-toggle="modal" data-target="#delete{{ $user->id }}" class="badge badge-danger">Delete</a>
                </td>
            </tr>
            @empty
              
            @endforelse
          </tbody>
        </table>
        {{ $users->links('layouts.backend.partials.pagination') }}
      </div>
    </div>
  </div>
@endsection