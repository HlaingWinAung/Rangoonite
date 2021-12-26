@extends('backend.layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Article</a></li>
<li class="breadcrumb-item"><a href="#">Create</a></li>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Article Create Form</h3>
              </div>

              <div class="card-body">
                <div class="form-group">
                  <label for="articleTitle">Article Title</label>
                  <input type="text" id="articleTitle" placeholder="Enter your article title" class="form-control">
                </div>
                <div class="form-group">
                  <label for="aDescription">Article Description</label>
                  <textarea name="" id="aDescription" class="form-control" placeholder="Enter your description" cols="30" rows="4"></textarea>
                </div>
                <div class="input-group flex-column my-4">
                  <div>
                    <label for="aImage">Article Image</label>
                  </div>
                  <div class="custom-file w-100">
                    <input type="file" class="custom-file-input" id="aImage">
                    <label class="custom-file-label" for="aImage">Article Image</label>
                  </div>
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <select name="" id="author" class="form-control custom-select">
                      <option value="">Kyaw Kyaw</option>
                    </select>
                </div>               
                <div class="form-group">
                    <label for="articleCategory">Article Category</label>
                    <select id="articleCategory" class="form-control custom-select">
                      <option selected disabled>Select Category</option>
                      <option>Web</option>
                      <option>Mobile</option>
                      <option>Other</option>
                    </select>
                </div>
                <div class="float-right">
                    <a href="" class="btn btn-primary">Create New Article</a>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
    </div>
</div>

  @endsection