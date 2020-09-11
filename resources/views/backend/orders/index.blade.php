@extends('layouts.backend.app')
@section('title')
Orders
@endsection
@section('header-title', 'All Orders')
@section('add-menu')
@can('create',App\Models\Order::class)
<a  class="float-right" href="{{ route('app.orders.order.create') }}">
  <label class="badge badge-success">Create order</label>
</a>
@endcan
@endsection
@section('content')
<div class="row">
<div class="col-lg-12 grid-margin stretch-card all-order-table">
    <div class="card">
        <div class="card-body">
        <div class="row justify-content-between">
            <div class="col-md-3 col-sm-12 col-12">
                <form action="{{ route('app.operation.order.search') }}" method="POST">
                    @csrf
                <div class="form-group">
                <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Search</span>
                </div>
                <input type="text"name="search" class="form-control" aria-label="Sizing example input" placeholder="Search" aria-describedby="inputGroup-sizing-sm">
                </div>
                </div>
                </form>
            </div>
            <div class="col-md-2 col-sm-6 col-6">
            <a href="{{ route('app.orders.order.process') }}" type="button" class="btn btn-sm btn-outline-success">Process</a>
            </div>
            
            <div class="col-md-2 col-sm-6 col-6">
                <button class="btn btn-sm float-right btn-success dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter By time</button>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('app.operation.filter.time') }}?time=today">Today</a>
                <a class="dropdown-item" href="{{ route('app.operation.filter.time') }}?time=week">This Week</a>
                <a class="dropdown-item" href="{{ route('app.operation.filter.time') }}?time=month">This Month</a>
                <a class="dropdown-item" href="{{ route('app.operation.filter.time') }}?time=year">This Year</a>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6">
                <button class="btn btn-sm float-right btn-info dropdown-2 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter by status</button>
                <div class="dropdown-menu">
                @foreach ($statuses as $status)
                <a class="dropdown-item" href="{{ route('app.operation.filter.time') }}?status={{ $status->slug }}">{{ $status->title }}</a> 
                @endforeach    
                </div>
            </div>
            @if(!auth()->user()->isShopOwner())
            <div class="col-md-2 col-sm-6 col-6">               
                <button class="btn btn-sm float-right btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter by owner</button>
                <div class="dropdown-menu">
                    @foreach($owners as $key => $owner)
                    <a class="dropdown-item" href="{{ route('app.operation.filter.time') }}?owner={{ $owner->id }}">{{ $owner->user->name }}</a>
                    @endforeach
                </div>               
            </div>
            @endif
        </div>
        <form action="{{ route('app.operation.multi.update') }}" method="POST">
            @csrf
        <div class="table-area">
            <table class="table table-bordered order-table-area">
                <thead>
                <tr>
                    <th> 
                        Table Row 
                    </th>
                    <th> Order Id </th>
                    <th> Customer Name </th>
                    <th> Customer Phone </th>
                    @if(!auth()->user()->isShopOwner())
                        <th> Shop Owner</th>
                    @endif
                    <th> Status </th>
                    <th> Action </th>
                </tr>
                </thead>
                <tbody>
                @forelse ($orders as $order)
                <tr>
                    <td>  <input class="form-check-input" name="multiCheck[]" type="checkbox" value="{{ $order->id }}" id="all"> </td>
                    <td> {{ $order->orderid }}</td>
                    <td> {{ $order->customername }}</td>
                    <td> {{ $order->customerphone }}</td>
                    @if(!auth()->user()->isShopOwner())
                        <td> {{ $order->shopOwner->user->name }}</td>
                    @endif    
                    <td class="drpdn-status">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ $order->status->title }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @foreach($statuses as $key => $status)
                            @if($order->status->slug==$status->slug)
                             @continue
                            @endif
                        <a class="dropdown-item" href="{{ route('app.operation.update',$order->id) }}?status={{ $status->slug }}">{{ $status->title }}</a>
                        @endforeach
                    </div> 
                    </td>
                    <td>
                        @can('update',$order)
                            <a href="{{ route('app.orders.order.edit',$order->id) }}" class="badge badge-warning">Edit</a>
                        @endcan
                        @can('delete',$order)
                        <a data-toggle="modal" data-target="#delete{{ $order->id }}" class="badge badge-danger">Delete</a>
                        @endcan
                        </td>
                         <!-- Modal -->
                         <div class="modal fade" id="delete{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete order - {{ $order->orderid }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Are you sure ?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                <a id="delete" href="{{ route('app.orders.order.destroy',$order->id) }} " type="button" class="btn btn-danger">Delete</a>
                              </div> 
                            </div>
                          </div>
                        </div>
                    </tr>
                </tr> 
                @empty
                   <p class="">no data found</p>
                @endforelse

                </tbody>
            </table>
        </div>
        <div class="row justify-content-between px-4 mt-4">
            <div class="col-sm-3  col-3">
            <div class="form-check">
                <input id="all-check" class="form-check-input" type="checkbox" value="" >
                <label class="form-check-label" >
                    Check all
                </label>
                </div>
            </div>
            <div class="col-sm-3  col-3">
                <button class="btn btn-sm float-right btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">BulK status change</button>
                <div class="dropdown-menu">
                @foreach($statuses as $key => $status)
                <a class="dropdown-item" onClick="action('{{ $status->id }}')">{{ $status->title }}</a>  
                @endforeach
                </div>
            </div>
            <div class="col-sm-3  col-3">
                <div >
                    {{ $orders->links('layouts.backend.partials.pagination') }}
                </div>
            </div>
        </div>
        <input type="hidden" id='status'name="status_id">
        </form>
        </div>
    </div>
</div>
</div>  
@endsection
@push('custom-scripts')
<script>
    const form=document.forms[2];
    const check=document.querySelector('#all-check');
    const status=document.querySelector('#status');
    const selectItems=document.getElementsByName('multiCheck[]');
    let triger=false;
    check.addEventListener('change',function(event){
        if(check.checked){
           for(item of selectItems){
               item.checked=true;
           }
        }else{
            for(item of selectItems){
               item.checked=false;
           }  
        }
    });

    function action(id){
        const items=document.getElementsByName('multiCheck[]');
        for(item of items){
               if(item.checked){
                   triger=true;
                   break;
               }
           }  
        status.value=id;
        if(triger){
        form.submit();
        }       
    }
</script>
@endpush
