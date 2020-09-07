@extends('layouts.backend.app')
@section('title')
Orders
@endsection
@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row pb-5">
            <div class="col-md-6">
              <div>
                <h4 class="card-title">All Orders</h4>
              </div>
            </div>
            <div class="col-md-6">
              <div class="float-right">
                <a href="{{ route('app.orders.order.create') }}">
                  <label class="badge badge-success">Add Order</label>
                </a>
              </div>
            </div>
          </div>  
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>S/N</th>
                <th> Customer Name</th>
                <th> Phone</th>
                <th> Order Id</th>
                <th> Status</th>
                <th> Created At </th>
                <th style="text-align: center"> Action </th>
              </tr>
            </thead>
            <tbody>
              @forelse($orders as $key => $order)
              <tr>
                <td> {{ $key+1 }}</td>
                <td> {{ $order->customername }}</td>
                <td> {{ $order->customerphone }}</td>
                <td> {{ $order->orderid }}</td>
                <td> {{ $order->status }}</td>               
                <td>{{ $role->created_at }}</td>
                <td style="text-align: center"> 
                <a href="{{ route('app.orders.order.show',$order->id) }}" class="badge badge-success">Abilities</a>
                <a href="{{ route('app.orders.order.edit',$order->id) }}" class="badge badge-warning">Edit</a>
                <a data-toggle="modal" data-target="#delete{{ $order->id }}" class="badge badge-danger">Delete</a>
                </td>
                <!-- Modal -->
                <div class="modal fade" id="delete{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Order - {{ $order->title }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Are you sure ?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        <button id="delete" type="button" class="btn btn-danger" onclick="deleteForm('{{ $order->id }}')">Delete</button>
                        <form id="deleteform{{ $order->id }}"
                          action="{{ route('app.settings.role.destroy',$order->id) }}" method="POST"
                          style="display: none;">
                          @csrf()
                          @method('DELETE')
                        </form>
                      </div> 
                    </div>
                  </div>
                </div>
              </tr>
              @empty
                
              @endforelse
            </tbody>
          </table>
              {{ $roles->links('layouts.backend.partials.pagination') }}
        </div>
      </div>
    </div>
</div>  
@endsection
