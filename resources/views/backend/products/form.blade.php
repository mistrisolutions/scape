@extends('layouts.backend.app')

@section('title')
@isset($product)Update Product @else Create Product @endif
@endsection

@section('header-title')
@isset($product)Update Product @else Create Product @endif
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
          <form class="forms-sample"action="@isset($product){{ route('app.products.update',$product->id) }} @else {{ route('app.products.store') }} @endif" enctype="multipart/form-data" method="POST">
            @csrf
            @isset($product) @method('PUT') @endif
            <div class="row">
              <div class="form-group col-md-12">
                <label for="exampleInputName1">Name</label>
              <input type="text" name="name" class="form-control @error('name')) is-invalid  @enderror" value="@isset($product){{ $product->name }} @else {{ old('name') }} @endif" id="exampleInputName1" placeholder="Name">
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Url</label>
              <input type="text" name="url" class="form-control @error('url')) is-invalid  @enderror "  value="@isset($product){{ $product->link }} @else {{ old('url') }} @endif"  placeholder="Url">
            </div>
            <div class="row">
              <div class="form-group col-md-12">
              <label for="exampleSelectGender">Category</label>
              <select class="form-control @error('category')is-invalid @enderror" name="category" >
                @foreach($categories as $key => $category)
                <option value="{{ $category->id }}" @isset($product) @if($product->category->id==$category->id) selected @endif @endif>{{ $category->name }}</option>
                @endforeach
              </select>
              </div>
            </div>
            <div class="form-group" id="avatar">
              <label>Thumbnail</label>
              <input type="file" name="thumbnail" class="file-upload-default" onchange="loadFile(event)">
              <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Thumbnail">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-gradient-primary" type="button" id="upload">@isset($product)Change @else Upload @endif</button>
                </span>
              </div>
            </div>
            <div class="form-group" id="output">
              @isset($product)
              <img id="newImage" class="img-thumbnail" style="height: 100px;width: 100px;"src={{ Storage::url($product->image) }}>
              @endif
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Description</label>
              <textarea name="description" class="form-control" id="exampleTextarea1" rows="4">@isset($product){{ $product->description }}@endif</textarea>
            </div>
            <button type="submit" class="btn btn-gradient-primary mr-2">@isset($product)Update @else Create @endif</button>
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
<script>
  var loadFile = function(event) {
    const image=document.createElement('img');
    const output=document.getElementById('output');
    const uploadButton=document.getElementById('upload');
    while(output.firstChild){
        output.firstChild.remove();
    }
    image.id='newImage';
    image.classList="img-thumbnail";
    image.setAttribute("style", "height: 100px;width: 100px;");
    output.appendChild(image);
    output.childNodes[0].src=URL.createObjectURL(event.target.files[0]);
    upload.innerHTML="change";
  };
</script>
@endpush