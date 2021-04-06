@extends('layouts.backend.app')

@section('title')
Sub Categories
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
@endpush

@section('header-title')
All Sub Categories
@endsection

@section('add-menu')
@can('create',App\Models\Category::class)
<a  class="float-right" href="{{ route('app.subcategories.create') }}">
  <label class="badge badge-success">Create Sub Category</label>
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
              <th> id </th>
              <th> Name </th>
              <th> slug </th>
              <th> Parent </th>
              <th class="text-center"> Action </th>
            </tr>
          </thead>
          <tbody>
            @forelse($categories as $key => $category)
            <tr>
              <td class="py-1">
                {{$key+1}}
              </td>
              <td> {{ $category->name }}</td>
              <td>
                {{ $category->slug }}
              </td>
              <td>
                {{ $category->parent->name }}
              </td>
              <td style="text-align: center"> 
                @can('update',$category)
                <a href="{{ route('app.subcategories.edit',$category->id) }}" class="badge badge-success">Edit</a>
                @endcan
                @can('delete',$category)
                <a data-toggle="modal" href="" data-target="#delete{{ $category->id }}" class="badge badge-danger">Delete</a>
                @endcan
                </td>
                 <!-- Modal -->
                 <div class="modal fade" id="delete{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Category - {{ $category->name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Are you sure ?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        <button id="delete" type="button" class="btn btn-danger" onclick="deleteForm('{{ $category->id }}')">Delete</button>
                        <form id="deleteform{{ $category->id }}"
                          action="{{ route('app.subcategories.destroy',$category->id) }}" method="POST"
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
        {{ $categories->links('layouts.backend.partials.pagination') }}
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