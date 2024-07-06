@extends('layouts.app')
  
@section('title', 'Create new Employee ')
  
@section('contents')
    <h1 class="mb-0">Add Employee</h1>
    <hr />
    <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="first_name" class="form-control" placeholder="First_name">
            </div>
            <div class="col">
                <input type="text" name="last_name" class="form-control" placeholder="Last_name">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="company_id" class="form-control" placeholder="Company_id">
            </div>
            <div class="col">
                <input type="text" name="email" class="form-control" placeholder="E-mail">
            </div>
            <div class="col">
                <input type="text" name="phone" class="form-control" placeholder="Phone">
            </div>
            </div>
            <div class="row mb-3">
            <div class="col">     
            
            
        </div>
        </div>
 
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection