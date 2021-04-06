@extends('layouts.backend.app')

@section('title')
Product List
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
@endpush

@section('header-title')
All Products
@endsection

@section('add-menu')
@can('create',App\Models\Product::class)
<a  class="float-right" href="{{ route('app.products.create') }}">
  <label class="badge badge-success">Create Product</label>
</a>
@endcan
@endsection

@section('content')
<div class='row'>
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12">
            
          </div>
        </div>
        <table class="table table-bordered" id="myTable">
          <thead>
            <tr>
              <th> S/N </th>
              <th> Image </th>
              <th> Name </th>
              <th> Category </th>
              <th class="text-center"> Action </th>
            </tr>
          </thead>
          <tbody>
            @forelse($products as $key => $product)
            <tr>
              <td> {{ $key+1}}</td>
              <td class="py-1">
                <img src="{{ Storage::url($product->image) }}" alt="image" />
              </td>
              <td> {{ $product->name }}</td>
              <td>
                {{ $product->category->name }}
              </td>
              <td style="text-align: center"> 
                @can('update',$product)
                <a href="{{ route('app.products.edit',$product->id) }}" class="badge badge-success">Edit</a>
                @endcan
                @can('delete',$product)
                <a data-toggle="modal" href="" data-target="#delete{{ $product->id }}" class="badge badge-danger">Delete</a>
                @endcan
                @can('delete',$product)
                </td>
                @endcan
                 <!-- Modal -->
                 <div class="modal fade" id="delete{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete product - {{ $product->name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Are you sure ?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        <button id="delete" type="button" class="btn btn-danger" onclick="deleteForm('{{ $product->id }}')">Delete</button>
                        <form id="deleteform{{ $product->id }}"
                          action="{{ route('app.products.destroy',$product->id) }}" method="POST"
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
        {{ $products->links('layouts.backend.partials.pagination') }}
      </div>
    </div>
  </div>
</div>  
@endsection
@push('custom-scripts')
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script>
  $(document).ready( function () {
    $('#ttt').DataTable();
} );
</script>
@endpush  