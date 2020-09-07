@extends('layouts.backend.app')
@section('title')
Zones
@endsection
@section('header-title')
Zones
@endsection
@section('add-menu')
<a data-toggle="modal" data-target="#addzone1" class="badge badge-primary">Create Zone</a>
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
              @forelse($zones as $key => $zone)
              <tr>
                <td class="py-1">
                  {{ $key+1 }}
                </td>
                <td> {{ $zone->title }}</td>
                <td>
                  {{ $zone->created_at }}
                </td>
                <td style="text-align: center"> 
                  <a data-toggle="modal" data-target="#updatezone{{ $zone->id }}"  class="badge badge-warning">Edit</a>
                  <a data-toggle="modal" data-target="#delete{{ $zone->id }}" class="badge badge-danger">Delete</a>
                  </td>

                  <!-- Modal update -->
                    <div class="modal fade" id="updatezone{{ $zone->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Zone</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <form class="forms-sample" action="{{ route('app.settings.zones.zone.update',$zone->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                            <div class="form-group">
                            <input type="text" placeholder="Zone Title" name ='title' class="form-control" id="title "value="{{ $zone->title }}">
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
                   <div class="modal fade" id="delete{{ $zone->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Delete Zone - {{ $zone->title }}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Are you sure ?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                          <button id="delete" type="button" class="btn btn-danger" onclick="deleteForm('{{ $zone->id }}')">Delete</button>
                          <form id="deleteform{{ $zone->id }}"
                            action="{{ route('app.settings.zones.zone.destroy',$zone->id) }}" method="POST"
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
  <div class="modal fade" id="addzone1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Zone</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form class="forms-sample" action="{{ route('app.settings.zones.zone.store') }}" method="POST">
            @csrf
        <div class="form-group">
        <input type="text" placeholder="Zone Title" name ='title' class="form-control" id="title "value="{{ old('title') }}">
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