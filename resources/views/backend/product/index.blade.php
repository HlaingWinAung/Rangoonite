@extends('backend.layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Product</a></li>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title font-size-15">List All Products</h3>
                  <div class="float-right">
                    <a href="{{url('products/create')}}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Add Product</a>
                 </div>  
                </div>
                <!-- /.card-header -->
                <div class="card-body">                    
                  <table id="productTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                     <th>No</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Description</th>
                      <th>Status</th>
                      <th>Category</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Acer</td>
                            <td>450000</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quod quam alias officia impedit eaque tempore, ex omnis, pariatur earum dolore aliquam</td>
                            <td>As You Like</td>
                            <td>Laptop</td>
                            <td><img src="{{asset('backend/img/photo1.png')}}" class="w-50" alt=""></td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{url('products/edit')}}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="" class="btn ml-1 btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>                                
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Acer</td>
                            <td>450000</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quod quam alias officia impedit eaque tempore, ex omnis, pariatur earum dolore aliquam</td>
                            <td>As You Like</td>
                            <td>Laptop</td>
                            <td><img src="{{asset('backend/img/photo1.png')}}" class="w-50" alt=""></td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{url('products/edit')}}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="" class="btn ml-1 btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>                                
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Acer</td>
                            <td>450000</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quod quam alias officia impedit eaque tempore, ex omnis, pariatur earum dolore aliquam</td>
                            <td>As You Like</td>
                            <td>Laptop</td>
                            <td><img src="{{asset('backend/img/photo1.png')}}" class="w-50" alt=""></td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{url('products/edit')}}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="" class="btn ml-1 btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>                                
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Acer</td>
                            <td>450000</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quod quam alias officia impedit eaque tempore, ex omnis, pariatur earum dolore aliquam</td>
                            <td>As You Like</td>
                            <td>Laptop</td>
                            <td><img src="{{asset('backend/img/photo1.png')}}" class="w-50" alt=""></td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{url('products/edit')}}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="" class="btn ml-1 btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>                                
                            </td>
                        </tr>                 
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>

  @endsection
  @section('scripts')
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#productTable').DataTable();
} );
</script>
  @endsection