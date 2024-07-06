@extends('layouts.app')
  
@section('title', 'Edit Company')
  
@section('contents')
    <h1 class="mb-0">Edit Company</h1>
    <hr />
    <form action="{{ route('company.update', $company->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $company->name }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $company->address }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Website</label>
            <input type="text" name="website" class="form-control" placeholder="Website" value="{{ $company->website }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="E-mail" value="{{ $company->email}}">
        </div>
       </div>
       <div class="row">
       <div class="col mb-3">
            <label for="logo" class="form-label">Logo</label>
            <input type="file" name="logo" class="form-control" placeholder="Logo" value="{{ $company->logo}}">
        </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection