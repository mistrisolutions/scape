@extends('layouts.backend.app')

@section('title')
Orders
@endsection

@if(auth()->user()->isShopOwner())
@section('extra-content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card shop-copy-link-area">
        <div class="card text-center">
            <div class="card-body">
              <h3>{{ auth()->user()->shopOwner->company_name }}</h3>
              <a href="#" class="btn btn-outline-primary btn-sm">Copy Link</a>
              <a href="#" class="btn btn-primary btn-sm">Visit</a>
            </div>
        </div>
    </div> 
</div> 
@endsection
@endif

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
            <div class="full-area-btn col-md-2 col-sm-12 col-12">
            <a href="{{ route('app.orders.order.process') }}" type="button" class="btn btn-sm btn-outline-success">Process</a>
            </div>
            
            <div class="full-area-btn col-md-2 col-sm-12 col-12">
                <button class="btn btn-sm float-right btn-success dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter By time</button>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('app.operation.filter.time') }}?time=today">Today</a>
                <a class="dropdown-item" href="{{ route('app.operation.filter.time') }}?time=week">This Week</a>
                <a class="dropdown-item" href="{{ route('app.operation.filter.time') }}?time=month">This Month</a>
                <a class="dropdown-item" href="{{ route('app.operation.filter.time') }}?time=year">This Year</a>
                </div>
            </div>
            <div class="full-area-btn col-md-2 col-sm-12 col-12">
                <button class="btn btn-sm float-right btn-info dropdown-2 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter by status</button>
                <div class="dropdown-menu">
                @foreach ($statuses as $status)
                <a class="dropdown-item" href="{{ route('app.operation.filter.time') }}?status={{ $status->slug }}">{{ $status->title }}</a> 
                @endforeach    
                </div>
            </div>
            @if(!auth()->user()->isShopOwner())
            <div class="full-area-btn col-md-2 col-sm-12 col-12">               
                <button class="btn btn-sm float-right btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter by owner</button>
                <div class="dropdown-menu">
                    @foreach($owners as $key => $owner)
                    <a class="dropdown-item" href="{{ route('app.operation.filter.time') }}?owner={{ $owner->id }}">{{ $owner->user->name }}</a>
                    @endforeach
                </div>               
            </div>
            @endif
        </div>
        <form id="selectForm" action="{{ route('app.operation.multi.update') }}" method="POST">
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
                    <td class="text-center">
                        <div class="form-check">
                        <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                        </div>  
                    </td>
                    <td> {{ $order->orderid }}</td>
                    <td> {{ $order->customername }}</td>
                    <td> {{ $order->customerphone }}</td>
                    @if(!auth()->user()->isShopOwner())
                        <td> {{ $order->shopOwner->user->name }}</td>
                    @endif    
                    <td class="drpdn-status p-0">
                    <button class="btn btn-outline-secondary drpdn-status-colr-processing dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            <a href="{{ route('app.orders.order.edit',$order->id) }}" class="badge badge-outline-success">Edit</a>
                        @endcan
                        @can('delete',$order)
                        <a href="" data-toggle="modal" data-target="#delete{{ $order->id }}" class="badge badge-outline-danger">Delete</a>
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
            <div class="col-sm-9 col-12 pagination-area">
                <div class="form-check d-inline-block mr-4">
                    <input id="all-check" class="form-check-input" type="checkbox" value="" >
                    <label class="form-check-label" >
                        Check all
                    </label>
                </div>
                <div class="dropdown d-inline-block">
                <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
                </div>
            </div>
            
            @isset($orders)
            <div class="col-sm-3  col-12 pagination-area">
                <div >
                    {{ $orders->links('layouts.backend.partials.pagination') }}
                </div>
            </div>
        </div>
        @endif
        <input type="hidden" id='status'name="status_id">
        </form>
        </div>
    </div>
</div>
</div>  
@endsection
@push('custom-scripts')
<script>
    const form=document.querySelector('#selectForm');
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

<script>
const copyButton=document.querySelector('#copyButton');
const copyText=document.querySelector('#link');
copyButton.addEventListener('click',function(event){
    event.preventDefault();
    var tempInput = document.createElement("input");
    tempInput.value = copyText.innerText;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);
    copyButton.innerText="Copied";
});
</script>
@endpush
