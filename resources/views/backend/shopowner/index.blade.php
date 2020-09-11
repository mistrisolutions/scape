@extends('layouts.backend.app')
@section('title')
Shop Owners 
@endsection
@push('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
@endpush
@section('header-title')
Shop Owners 
@endsection
@section('add-menu')
<a  class="float-right" href="{{ route('app.shopOwners.owner.create') }}">
  <label class="badge badge-success">Add Shop Owner</label>
</a>
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
              <th> User </th>
              <th> name </th>
              <th> email </th>
              <th> phone </th>
              <th> Website Url </th>
              <th class="text-center"> Action </th>
            </tr>
          </thead>
          <tbody>
            @forelse($owners as $key => $owner)
            <tr>
              <td class="py-1">
                <img src="{{ asset($owner->user->profile->avatar) }}" alt="image" />
              </td>
              <td> {{ $owner->user->name }}</td>
              <td>
                {{ $owner->user->email }}
              </td>
              <td>
                {{ $owner->user->profile->phone }}
              </td>
              <td>
                <a href="{{ asset($owner->getUrl())}}">{{ asset($owner->getUrl()) }}</a>
              </td>
              <td style="text-align: center"> 
                @can('update',$owner)
                <a href="{{ route('app.shopOwners.owner.edit',$owner->id) }}" class="badge badge-warning">Edit</a>
                @endcan
                @can('delete',$owner)
                <a data-toggle="modal" data-target="#delete{{ $owner->id }}" class="badge badge-danger">Delete</a>
                @endcan
                </td>
                 <!-- Modal -->
                 <div class="modal fade" id="delete{{ $owner->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete owner - {{ $owner->user->name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Are you sure ?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        <button id="delete" type="button" class="btn btn-danger" onclick="deleteForm('{{ $owner->id }}')">Delete</button>
                        <form id="deleteform{{ $owner->id }}"
                          action="{{ route('app.shopOwners.owner.destroy',$owner->id) }}" method="POST"
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
    $('#myTable').DataTable();
} );
</script>
@endpush  