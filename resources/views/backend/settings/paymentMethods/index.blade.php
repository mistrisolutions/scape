@extends('layouts.backend.app')
@section('title')
Payment Methods
@endsection
@section('header-title')
Payment Methods
@endsection
@section('add-menu')
<a data-toggle="modal" data-target="#addmethod1" class="badge badge-primary">Create Method</a>
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
                <th> Code </th>
                <th> Created at </th>
                <th class="text-center"> Action </th>
              </tr>
            </thead>
            <tbody>
              @forelse($methods as $key => $method)
              <tr>
                <td class="py-1">
                  {{ $key+1 }}
                </td>
                <td> {{ $method->title }}</td>
                <td> {{ $method->code }}</td>
                <td>
                  {{ $method->created_at }}
                </td>
                <td style="text-align: center"> 
                  <a href="" data-toggle="modal" data-target="#updatemethod{{ $method->id }}"  class="badge badge-success">Edit</a>
                  <a href="" data-toggle="modal" data-target="#delete{{ $method->id }}" class="badge badge-danger">Delete</a>
                  </td>

                  <!-- Modal update -->
                    <div class="modal fade" id="updatemethod{{ $method->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Method</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <form class="forms-sample" action="{{ route('app.settings.paymentMethods.method.update',$method->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Title</label>
                                    <input type="text" placeholder="Method title" name ='title' class="form-control" id="title "value="{{ $method->title }}">
                                    @error('title')
                                    {{ $message }}
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Code</label>
                                    <input type="text" placeholder="Method Code" name ='code' class="form-control" id="title "value="{{ $method->code }}">
                                    @error('code')
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
                   <div class="modal fade" id="delete{{ $method->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Delete Method - {{ $method->title }}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Are you sure ?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                          <button id="delete" type="button" class="btn btn-danger" onclick="deleteForm('{{ $method->id }}')">Delete</button>
                          <form id="deleteform{{ $method->id }}"
                            action="{{ route('app.settings.paymentMethods.method.destroy',$method->id) }}" method="POST"
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
  <div class="modal fade" id="addmethod1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Method</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form class="forms-sample" action="{{ route('app.settings.paymentMethods.method.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputPassword4">Title</label>
                <input type="text" placeholder="Method Title" name ='title' class="form-control" id="title "value="{{ old('title') }}">
                @error('title')
                {{ $message }}
                @enderror
            </div> 
            <div class="form-group">
                <label for="exampleInputPassword4">Code</label>
                <input type="text" placeholder="Method Code" name ='code' class="form-control" id="title "value="{{ old('code') }}">
                @error('code')
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