@extends('layouts.backend.app')

@section('title')
@isset($category)Update Sub Category @else Create Sub Category @endif
@endsection

@section('header-title')
@isset($category)Update Sub Category @else Create Sub Category @endif
@endsection 
@push('css')
<link rel="stylesheet" href="{{ asset('assets/vendors/select2/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
@endpush
@section('content')
<div class="row">
  <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <form class="forms-sample"action="@isset($category){{ route('app.subcategories.update',$category->id) }} @else {{ route('app.subcategories.store') }} @endif" enctype="multipart/form-data" method="POST">
            @csrf
            @isset($category) @method('PUT') @endif
            <div class="row">
              <div class="form-group col-md-12">
                <label for="exampleInputName1">Name</label>
              <input type="text" name="name" class="form-control @error('name')) is-invalid  @enderror" value="@isset($category){{ $category->name }} @else {{ old('name') }} @endif" id="exampleInputName1" placeholder="Name">
              </div>
              <div class="form-group col-md-12">
                <label for="exampleSelectGender">Parent</label>
                <select class="form-control @error('parent')is-invalid @enderror" name="parent"  id="exampleSelectGender">
                  @foreach ($parents as $parent)
                  <option value="{{$parent->id}}"
                    @isset($category)
                    @if($category->parent_id==$parent->id)
                    selected
                    @endif
                    @endif >
                    {{$parent->name}}
                  </option>
                  @endforeach
                </select>
              </div>
            </div>  
            <button type="submit" class="btn btn-gradient-primary mr-2">@isset($category)Update @else Create @endif</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
@push('custom-scripts')
<script src="{{ asset('assets/js/file-upload.js') }}"></script>
<script src="{{ asset('assets/vendors/select2/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.js') }}"></script>
@endpush