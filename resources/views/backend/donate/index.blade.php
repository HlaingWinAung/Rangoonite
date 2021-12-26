@extends('backend.layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Donation</a></li>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title font-size-15">List All Donation</h3>
                  <div class="float-right">
                    <a href="{{url('donate/create')}}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Add Donation</a>
                 </div>  
                </div>
                <!-- /.card-header -->
                <div class="card-body">                    
                  <table id="productTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                     <th>No</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th class="w-25">Image</th>
                      <th>Amount</th>
                      <th>Location</th>
                      <th class="w-25">Date</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>PDF</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quod quam alias officia impedit eaque tempore, ex omnis, pariatur earum dolore aliquam</td>
                            <td><img src="{{asset('backend/img/photo1.png')}}" class="w-50" alt=""></td>
                            <td>45000</td>
                            <td>Yangon</td>
                            <td>16-1-2021</td>                            
                            <td>
                                <div class="d-flex">
                                    <a href="{{url('donate/edit')}}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="" class="btn ml-1 btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>                                
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>PDF</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quod quam alias officia impedit eaque tempore, ex omnis, pariatur earum dolore aliquam</td>
                            <td><img src="{{asset('backend/img/photo1.png')}}" class="w-50" alt=""></td>
                            <td>45000</td>
                            <td>Yangon</td>
                            <td>16-1-2021</td> 
                            <td>
                                <div class="d-flex">
                                    <a href="{{url('donate/edit')}}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="" class="btn ml-1 btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>                                
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>PDF</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quod quam alias officia impedit eaque tempore, ex omnis, pariatur earum dolore aliquam</td>
                            <td><img src="{{asset('backend/img/photo1.png')}}" class="w-50" alt=""></td>
                            <td>45000</td>
                            <td>Yangon</td>
                            <td>16-1-2021</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{url('donate/edit')}}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="" class="btn ml-1 btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>                                
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>PDF</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quod quam alias officia impedit eaque tempore, ex omnis, pariatur earum dolore aliquam</td>
                            <td><img src="{{asset('backend/img/photo1.png')}}" class="w-50" alt=""></td>
                            <td>45000</td>
                            <td>Yangon</td>
                            <td>16-1-2021</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{url('donate/edit')}}" class="btn btn-sm btn-warning">
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