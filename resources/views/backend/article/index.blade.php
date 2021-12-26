@extends('backend.layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Articles</a></li>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title font-size-15">List All Articles</h3>
                  <div class="float-right">
                    <a href="{{url('articles/create')}}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Add Article</a>
                 </div>  
                </div>
                <!-- /.card-header -->
                <div class="card-body">                    
                  <table id="articleTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Image</th>
                        <th>User</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>HTML INTRO</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quod quam alias officia impedit eaque tempore, ex omnis, pariatur earum dolore aliquam</td>
                            <td><img src="{{asset('backend/img/photo1.png')}}" class="w-50" alt=""></td></td>
                            <td>Janes</td>
                            <td>Web</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{url('articles/edit')}}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="" class="btn ml-1 btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="" class="btn ml-1 btn-sm btn-info">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                </div>                                
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>CSS INTRO</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quod quam alias officia impedit eaque tempore, ex omnis, pariatur earum dolore aliquam</td>
                            <td><img src="{{asset('backend/img/photo2.png')}}" class="w-50" alt=""></td></td>
                            <td>Marry</td>
                            <td>Web</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{url('articles/edit')}}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="" class="btn ml-1 btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="" class="btn ml-1 btn-sm btn-info">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                </div>                                
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>JS INTRO</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quod quam alias officia impedit eaque tempore, ex omnis, pariatur earum dolore aliquam</td>
                            <td><img src="{{asset('backend/img/photo3.png')}}" class="w-50" alt=""></td></td>
                            <td>John</td>
                            <td>Web</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{url('articles/edit')}}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="" class="btn ml-1 btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="" class="btn ml-1 btn-sm btn-info">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                </div>                                
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>HTML INTRO</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quod quam alias officia impedit eaque tempore, ex omnis, pariatur earum dolore aliquam</td>
                            <td><img src="{{asset('backend/img/photo1.png')}}" class="w-50" alt=""></td></td>
                            <td>Janes</td>
                            <td>Web</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{url('articles/edit')}}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="" class="btn ml-1 btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="" class="btn ml-1 btn-sm btn-info">
                                        <i class="fas fa-info-circle"></i>
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
    $('#articleTable').DataTable();
} );
</script>
  @endsection