@extends('layouts.backend.app')
@section('title')
Status Type
@endsection
@section('header-title')
Status Types
@endsection
@section('add-menu')
<a data-toggle="modal" data-target="#addstatus1" class="badge badge-primary">Create Status</a>
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
                <th> Title </th>
                <th> Created at </th>
                <th class="text-center"> Action </th>
              </tr>
            </thead>
            <tbody>
              @forelse($statuss as $key => $status)
              <tr>
                <td class="py-1">
                  {{ $key+1 }}
                </td>
                <td> {{ $status->title }}</td>
                <td>
                  {{ $status->created_at }}
                </td>
                <td style="text-align: center"> 
                  <a data-toggle="modal" data-target="#updatestatus{{ $status->id }}"  class="badge badge-warning">Edit</a>
                  <a data-toggle="modal" data-target="#delete{{ $status->id }}" class="badge badge-danger">Delete</a>
                  </td>

                  <!-- Modal update -->
                    <div class="modal fade" id="updatestatus{{ $status->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update status</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <form class="forms-sample" action="{{ route('app.settings.statuss.status.update',$status->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                            <div class="form-group">
                            <input type="text" placeholder="Status Title" name ='title' class="form-control" id="title "value="{{ $status->title }}">
                            @error('title')
                            {{ $message }}
                            @enderror
                            </div>               
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                            </div> 
                            </form>
                        </div>
                        </div>
                    </div>

                   <!-- Modal -->
                   <div class="modal fade" id="delete{{ $status->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Delete Status - {{ $status->title }}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Are you sure ?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                          <button id="delete" type="button" class="btn btn-danger" onclick="deleteForm('{{ $status->id }}')">Delete</button>
                          <form id="deleteform{{ $status->id }}"
                            action="{{ route('app.settings.statuss.status.destroy',$status->id) }}" method="POST"
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
  <!-- Modal -->
  <div class="modal fade" id="addstatus1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create status</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form class="forms-sample" action="{{ route('app.settings.statuss.status.store') }}" method="POST">
            @csrf
        <div class="form-group">
        <input type="text" placeholder="Status Title" name ='title' class="form-control" id="title "value="{{ old('title') }}">
        @error('title')
        {{ $message }}
        @enderror
        </div>               
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Create</button>
        </div> 
        </form>
      </div>
    </div>
  </div>
@endsection