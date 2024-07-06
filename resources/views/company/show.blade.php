@extends('layouts.app')
  
@section('title', 'Show Company')
  
@section('contents')
    <h1 class="mb-0">Detail Company</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $company->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $company->address }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Website</label>
            <input type="text" name="website" class="form-control" placeholder="Website" value="{{ $company->website }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="E-mail" value="{{ $company->email}}" readonly>
        </div>
       </div>
       <div class="row">
       <div class="col mb-3">
            <label class="form-label">Logo</label>
            <input type="text" name="logo" class="form-control" placeholder="" value="{{ $company->logo}}" readonly>
        </div>
        </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $company->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $company->updated_at }}" readonly>
        </div>
    </div>
@endsection