@extends('backend.layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Article Category</a></li>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title font-size-15">Article Category</h3>       
                  <div class="float-right">
                    <a href="" data-toggle="modal" data-toggle="modal" data-target="#articleCategory" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Add Category</a>
                 </div>             
                </div>
                <!-- /.card-header -->
                <div class="card-body">                    
                  <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Article Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Web</td>
                            <td>
                                <a href="" data-toggle="modal" data-toggle="modal" data-target="#articleCategory" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>  
                        <tr>
                            <td>2</td>
                            <td>Mobile</td>
                            <td>
                                <a href="" data-toggle="modal" data-toggle="modal" data-target="#articleCategory" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr> 
                        <tr>
                            <td>3</td>
                            <td>Keyboard</td>
                            <td>
                                <a data-toggle="modal" data-toggle="modal" data-target="#articleCategory" class="btn btn-sm btn-warning show-role" id="">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
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
  
  <!-- Modal -->
  <div class="modal fade" id="articleCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Article Category Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="categoryName">Article Category Name</label>
                <input type="text" id="categoryName" placeholder="Enter your category name" value="Web" class="form-control">
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Create</button>
        </div>
      </div>
    </div>
  </div>


  @endsection
  @section('scripts')
   <script>
    //     
   </script>
  @endsection