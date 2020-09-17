@extends('layouts.backend.app')
@section('title')
Notifications
@endsection
@section('header-title')
Notifications
@endsection
@section('content')
<div class='row'>
  <div class="col-lg-12 grid-margin stretch-card shop-owner-table">
    <div class="card">
      <div class="card-body">
       <div class="table-area">
       <table id="order-listing" class="table table-striped">
          <thead>
            <tr>
              <th> S/N </th>
              <th> Type </th>
              <th> Message </th>
              <th> By </th>
              <th> Date </th>
            </tr>
          </thead>
          <tbody>
            @forelse($notifications as $key => $notification)
            <tr>
              
              <td> {{ $key+1 }}</td>
              <td>
                {{ $notification->type}}
              </td>
              <td>
                {{ $notification->message}}
              </td>
              <td class="py-1">
                <img src="{{ Storage::url($notification->user->profile->avatar) }}" alt="image" />
              </td>
              <td>
                {{ $notification->created_at->diffForHumans()}}
              </td>
                 <!-- Modal -->
            </tr>
            @empty
              
            @endforelse
          </tbody>
        </table>
       </div>
      </div>
    </div>
  </div>
</div>  
@endsection
