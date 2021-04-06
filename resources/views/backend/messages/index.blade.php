@extends('layouts.backend.app')

@section('title')
Messages
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
@endpush

@section('header-title')
All Messages
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
              <th> email </th>
              <th> Phone </th>
              <th> Message </th>
              <th class="text-center"> Action </th>
            </tr>
          </thead>
          <tbody>
            @forelse($messages as $key => $message)
            <tr>
              <td class="py-1">
                {{$key+1}}
              </td>
              <td> {{ $message->name }}</td>
              <td>
                {{ $message->email }}
              </td>
              <td>
                {{ $message->phone }}
              </td>
              <td>
                {{ $message->message }}
              </td>
              <td style="text-align: center"> 
                <a data-toggle="modal" href="" data-target="#delete{{ $message->id }}" class="badge badge-danger">Delete</a>
                </td>
                 <!-- Modal -->
                 <div class="modal fade" id="delete{{ $message->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Message - {{ $message->name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Are you sure ?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        <button id="delete" type="button" class="btn btn-danger" onclick="deleteForm('{{ $message->id }}')">Delete</button>
                        <form id="deleteform{{ $message->id }}"
                          action="{{ route('app.contacts.destroy',$message->id) }}" method="POST"
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
        {{ $messages->links('layouts.backend.partials.pagination') }}
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