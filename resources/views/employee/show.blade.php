@extends('layouts.app')
  
@section('title', 'Show Employee')
  
@section('contents')
    <h1 class="mb-0">Detail Employee</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">First Name</label>
            <input type="text" name="first_name" class="form-control" placeholder="First_name" value="{{ $employee->first_name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" name="last_name" class="form-control" placeholder="Last_name" value="{{ $employee->last_name }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Company Id</label>
            <input type="text" name="company_id" class="form-control" placeholder="Company_id" value="{{ $employee->company_id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="E-mail" value="{{ $employee->email}}" readonly>
        </div>
       </div>
       <div class="row">
       <div class="col mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $employee->phone}}" readonly>
        </div>
        </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $employee->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $employee->updated_at }}" readonly>
        </div>
    </div>
@endsection