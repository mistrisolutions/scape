@extends('layouts.backend.app')
@section('title')
@isset($user)Update Shop Owner @else Create Shop Owner @endif
@endsection
@section('header-title')
@isset($user)Update Shop Owner @else Create Shop Owner @endif
@endsection
@section('content')
<div class="row">
  <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <form class="forms-sample"action="@isset($owner){{ route('app.shopOwners.owner.update',$owner->id) }} @else {{ route('app.shopOwners.owner.store') }} @endif" enctype="multipart/form-data" method="POST">
            @csrf
            @isset($owner) @method('PUT') @endif
            <div class="row">
              <div class="form-group col-md-6">
                <label for="exampleInputName1">Name</label>
              <input type="text" name="name" class="form-control @error('name')) is-invalid  @enderror" value="@isset($owner){{ $owner->user->name }} @else {{ old('name') }} @endif" id="exampleInputName1" placeholder="Name">
              </div>
              <div class="form-group col-md-6">
                <label for="exampleInputPassword4">Phone Number</label>
                <input type="text" name="phone" class="form-control" @isset($owner) valu="{{ $owner->user->profile->phone }}" @else value=" {{ old('phone') }} @endif"  placeholder="01*********" pattern="(^([+]{1}[8]{2}|0088)?(01){1}[3-9]{1}\d{8})$">
              </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail3">Email address</label>
                    <input type="email" name="email" class="form-control @error('email')) is-invalid  @enderror "  value="@isset($owner){{ $owner->user->email }} @else {{ old('email') }} @endif" id="exampleInputEmail3" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputPassword4">Company name</label>
                  <input type="text" name="company_name" class="form-control" id="exampleInputPassword4"value="@isset($owner){{ $owner->company_name }} @else {{ old('company_name') }} @endif"  placeholder="Company name">
                </div>
              </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="exampleInputPassword4">Password</label>
                <input type="password" name="password" class="form-control @error('password')) is-invalid  @enderror" id="exampleInputPassword4" placeholder="Password">
              </div>
              <div class="form-group col-md-6">
                <label for="exampleInputPassword4">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword4" placeholder="Password">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="exampleSelectGender">Gender</label>
                <select class="form-control @error('gender')is-invalid @enderror" name="gender"  id="exampleSelectGender">
                  <option value="male" @isset($owner) @if($owner->user->profile-> gender=="male")selected @endif @endif>Male</option>
                  <option value="female" @isset($owner) @if($owner->user->profile->gender=="female")selected @endif @endif>Female</option>
                </select>
              </div>
              <div class="form-group col-md-6">
              <label for="exampleSelectGender">Role</label>
              <select class="form-control @error('role')is-invalid @enderror" name="role_id" >
                @foreach($roles as $key => $role)
                <option value="{{ $role->id }}" @isset($owner) @if($owner->user->role->slug==$role->slug) selected @endif @endif>{{ $role->title }}</option>
                @endforeach
              </select>
              </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleSelectGender">Payment Method</label>
                  <select class="form-control @error('payment_method')is-invalid @enderror" name="payment_method_id" >
                    @foreach($methods as $key => $method)
                    <option value="{{ $method->id }}" @isset($owner) @if($owner->paymentMethod->slug=="dsfds") selected @endif @endif">{{ $method->title }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-6">
                <label for="exampleSelectGender">Zone</label>
                <select class="form-control @error('role')is-invalid @enderror" name="zone_id" >
                  @foreach($zones as $key => $zone)
                  <option value="{{ $zone->id }}" @isset($owner) @if($owner->zone->slug==$zone->slug) selected @endif @endif>{{ $zone->title }}</option>
                  @endforeach
                </select>
                </div>
              </div>
            <div class="form-group" id="avatar">
              <label>Profile Picture</label>
              <input type="file" name="avatar" class="file-upload-default" onchange="loadFile(event)">
              <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Avatar">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-gradient-primary" type="button" id="upload">@isset($owner)Change @else Upload @endif</button>
                </span>
              </div>
            </div>
            <div class="form-group" id="output">
              @isset($owner)
              <img id="newImage" class="img-thumbnail" style="height: 100px;width: 100px;"src={{ asset($owner->user->profile->avatar) }}>
              @endif
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Address</label>
              <textarea name="address" class="form-control" id="exampleTextarea1" rows="4">@isset($owner){{ $owner->user->profile->address }}@endif</textarea>
            </div>
            <button type="submit" class="btn btn-gradient-primary mr-2">@isset($owner)Update @else Create @endif</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
@push('custom-scripts')
<script src="{{ asset('assets/js/file-upload.js') }}"></script>
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