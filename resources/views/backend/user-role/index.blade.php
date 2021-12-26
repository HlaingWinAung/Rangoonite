@extends('backend.layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">User roles</a></li>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title font-size-15">User Roles</h3>                   
                </div>
                <!-- /.card-header -->
                <div class="card-body">                    
                  <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Roles</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Kyaw Kyaw</td>
                            <td>Admin</td>
                            <td>
                                <a href="" data-toggle="modal" data-toggle="modal" data-target="#userRole" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>  
                        <tr>
                            <td>2</td>
                            <td>Su Kyaw</td>
                            <td>Staff</td>
                            <td>
                                <a href="" data-toggle="modal" data-toggle="modal" data-target="#userRole" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr> 
                        <tr>
                            <td>3</td>
                            <td>Myat Kyaw</td>
                            <td>Staff</td>
                            <td>
                                <a data-toggle="modal" data-toggle="modal" data-target="#userRole" class="btn btn-sm btn-warning show-role" id="">
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
  <div class="modal fade" id="userRole" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">User Role Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" placeholder="User name" value="Kyaw Kyaw" class="form-control">
              </div>
              <div class="form-group">
                <label for="gender">Roles</label>
                <select id="gender" class="form-control custom-select">
                  <option selected disabled>Select Role</option>
                  <option>Admin</option>
                  <option>Staff</option>
                  <option>Normal</option>
                </select>
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