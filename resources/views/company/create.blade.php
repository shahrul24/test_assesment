@extends('layouts.app')
  
@section('title', 'Create new company ')
  
@section('contents')
    <h1 class="mb-0">Add Company</h1>
    <hr />
    <form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <input type="text" name="address" class="form-control" placeholder="Address">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="website" class="form-control" placeholder="Website">
            </div>
            <div class="col">
                <input type="text" name="email" class="form-control" placeholder="E-mail">
            </div>
            </div>
            <div class="row mb-3">
        <div class="col">
            <label for="logo" class="form-label">Logo</label>
            <input type="file" name="logo" class="form-control" id="logo">
        </div>
    </div>
 
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection