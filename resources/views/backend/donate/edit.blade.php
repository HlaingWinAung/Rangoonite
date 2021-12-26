@extends('backend.layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Donation</a></li>
<li class="breadcrumb-item"><a href="#">Edit</a></li>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Donation Edit Form</h3>
              </div>

              <div class="card-body">
                <div class="form-group">
                  <label for="title">Donation Title</label>
                  <input type="text" id="title" placeholder="Enter your donation title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="" id="description" class="form-control" placeholder="Enter your donation description" cols="30" rows="4"></textarea>
                </div>
                <div class="input-group flex-column my-4">
                    <div>
                        <label for="">Donation Image</label>
                    </div>
                    <div class="custom-file w-100">
                      <input type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="amount">Donation Amount (MMK)</label>
                    <input type="number" id="amount" placeholder="Enter your donation amount" class="form-control">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <select id="location" class="form-control custom-select">
                      <option selected disabled>Select location</option>
                      <option>Yangon</option>
                      <option>Mandalay</option>
                      <option>Other</option>
                    </select>
                </div>                 
                <div class="form-group">
                  <label for="date">Donation date</label>
                  <input type="date" id="date" placeholder="Enter your donation date" class="form-control">
              </div>             
                <div class="float-right">
                    <a href="" class="btn btn-primary">Update Donation</a>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    </div>
</div>

  @endsection