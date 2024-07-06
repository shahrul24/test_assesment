@extends('layouts.app')
  
@section('title', 'Edit Employees')
  
@section('contents')
    <h1 class="mb-0">Edit Employees</h1>
    <hr />
    <form action="{{ route('employee.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col mb-3">
            <label class="form-label">First Name</label>
            <input type="text" name="first_name" class="form-control" placeholder="First_name" value="{{ $employee->first_name }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" name="last_name" class="form-control" placeholder="Last_name" value="{{ $employee->last_name }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Company Id</label>
            <input type="text" name="company_id" class="form-control" placeholder="Company_id" value="{{ $employee->company_id }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="E-mail" value="{{ $employee->email}}">
        </div>
       </div>
       <div class="row">
       <div class="col mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $employee->phone}}">
        </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection