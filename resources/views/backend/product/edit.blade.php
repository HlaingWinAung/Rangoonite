@extends('backend.layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Product</a></li>
<li class="breadcrumb-item"><a href="#">Edit</a></li>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Product Edit Form</h3>
              </div>

              <div class="card-body">
                <div class="form-group">
                  <label for="productName">Product Name</label>
                  <input type="text" id="productName" placeholder="Enter your product name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pPrice">Product Price (MMK)</label>
                    <input type="number" id="pPrice" placeholder="Enter your product price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pDescription">Description</label>
                    <textarea name="" id="pDescription" class="form-control" placeholder="Enter your description" cols="30" rows="4"></textarea>
                </div>
                <div class="form-group">
                  <label for="pPrice">Product Status</label>
                  <input type="text" id="pPrice" placeholder="Enter your product status" class="form-control">
              </div>
                <div class="form-group">
                    <label for="gender">Category</label>
                    <select id="gender" class="form-control custom-select">
                      <option selected disabled>Select Category</option>
                      <option>Laptop</option>
                      <option>Desktop</option>
                      <option>Other</option>
                    </select>
                </div>
                <div class="input-group flex-column my-4">
                  <div>
                    <label for="pImage">Product Image</label>
                  </div>
                  <div class="custom-file w-100">
                    <input type="file" class="custom-file-input" id="pImage">
                    <label class="custom-file-label" for="pImage">Product Image</label>
                  </div>
                </div>
                <div class="float-right">
                    <a href="" class="btn btn-primary">Update New Product</a>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    </div>
</div>

  @endsection