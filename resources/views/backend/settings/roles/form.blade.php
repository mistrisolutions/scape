@extends('layouts.backend.app')
@section('title')
Add Roles
@endsection

@section('content')
@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
  {{$error}}
</div>
@endforeach
@endif
@if (session('success'))
<div class="alert alert-success" role="alert">
{{ session('success') }}
</div>
@endif   
<div class="row">
    <div class="col-md-12 grid-margin stretch-card ">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title pb-3">@if(isset($role)) Update Role @else Create Role @endif</h4>
          <form class="forms-sample" action="{{ route('app.settings.role.store') }}" method="POST">
           @csrf
            <div class="form-group">
              <input type="text" placeholder="Role Title" name ='title' class="form-control" id="title @if(isset($role)) value="{{ $role->title }}" @else  value="{{ old('title') }}" @endif >
              @error('title')
              {{ $message }}
              @enderror
            </div>
            <h4 class="card-title pt-3">Abilities</h4>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input"> Default </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked> Checked </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" disabled> Disabled </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" disabled checked> Disabled checked </label>
                  </div>
                </div>
              </div>  
            <div class="col-md-3">
              <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input"> Default </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" checked> Checked </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" disabled> Disabled </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" disabled checked> Disabled checked </label>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input"> Default </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" checked> Checked </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" disabled> Disabled </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" disabled checked> Disabled checked </label>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input"> Default </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" checked> Checked </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" disabled> Disabled </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" disabled checked> Disabled checked </label>
                </div>
              </div>
            </div>
            </div>
            <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection    
