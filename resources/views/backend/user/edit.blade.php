@extends('backend.layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">User</a></li>
<li class="breadcrumb-item"><a href="#">Edit</a></li>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">User Edit Form</h3>
              </div>

              <div class="card-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" placeholder="User name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" placeholder="User email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="number" id="phone" placeholder="User phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select id="gender" class="form-control custom-select">
                      <option selected disabled>Select one</option>
                      <option>Male</option>
                      <option>Female</option>
                      <option>Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="dob">Date Of Birthday</label>
                    <input type="date" id="dob" placeholder="Date of Birthday" class="form-control">
                </div>
                <div class="form-group">
                    <label for="gender">User Role</label>
                    <select id="gender" class="form-control custom-select">
                      <option selected disabled>Select one</option>
                      <option>Admin</option>
                      <option>Staff</option>
                      <option>Normal</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" placeholder="User Address" class="form-control">
                </div> 
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="User password" class="form-control">
                </div> 
                <div class="float-right">
                    <a href="" class="btn btn-primary">Update User</a>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>

  @endsection